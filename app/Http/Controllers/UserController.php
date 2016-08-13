<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Kamaln7\Toastr\Facades\Toastr;
use App\Http\Requests;
use App\User;
use App\Classes\CropAvatar;
use File;

class UserController extends Controller {

    private $rules = [
        'email'      => 'required|email|max:255|unique:users',
        'password'   => 'required|min:6|confirmed',
        'nom'        => 'required_if:prenom,|max:255',
        'prenom'     => 'required_if:nom,|max:255',
        'adresse'    => 'max:255',
        'cin'        => 'unique:users|alpha_num|max:255',
        'sexe'       => 'required|in:male,female',
        'photo'      => 'image',
        'tel_mobile' => 'phone:AUTO,MA,Mobile|max:255',
        'tel_fixe'   => 'phone:AUTO,MA,fixed_line|max:255',
        'role'       => 'required|exists:roles,id'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, $this->rules);

        $user = User::create($request->all());

        Toastr::success('L\'utilisateur ' . $user->nom . ' ' . $user->prenom . ' a été ajouté avec succès');

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        return view('user.show', compact('user', 'perms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        $this->validate($request, [
            'email'            => 'required|email|min:5|max:255|unique:users,email,' . $user->id,
            'current_password' => 'required|current_password:' . $request->current_password,
            'password'         => 'min:6|confirmed',
            'nom'              => 'required_if:prenom,|max:255',
            'prenom'           => 'required_if:nom,|max:255',
            'adresse'          => 'max:255',
            'cin'              => 'unique:users,cin,' . $user->id . '|alpha_num|max:255',
            'sexe'             => 'required|in:male,female',
            'photo'            => 'image',
            'tel_mobile'       => 'phone:AUTO,MA,Mobile|max:255',
            'tel_fixe'         => 'phone:AUTO,MA,fixed_line|max:255',
        ]);

        if (isset( $request->password ) and $request->password == '') {
            $request->request->remove('password');
            $request->request->remove('password_confirmation');
        }

        $user->update($request->all());

        Toastr::success('votre profile a été modifié avec succès');

        return redirect()->route('user.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        $message = $user->prenom . ' ' . $user->nom;
        $user->deleted = true;
        $user->save();

        return response()->json([ 'message' => $message ]);
    }

    public function profile() {
        $user = \Auth::user();

        return view('user.profile', compact('user'));
    }

    public function profilePicture(Request $request) {
        if ($request->hasFile('avatar_file') && $request->file('avatar_file')->isValid()) {
            $crop = new CropAvatar(
                isset( $_POST[ 'avatar_src' ] ) ? $_POST[ 'avatar_src' ] : null,
                isset( $_POST[ 'avatar_data' ] ) ? $_POST[ 'avatar_data' ] : null,
                isset( $_FILES[ 'avatar_file' ] ) ? $_FILES[ 'avatar_file' ] : null
            );

            $user = \Auth::user();
            $user->photo = $crop->getDst();
            $user->save();


            return response()->json([
                'state'       => 200,
                'message'     => $crop->getMsg(),
                'result'      => $crop->getResult(),
                'destination' => $crop->getDst()
            ]);
        }
    }

    public function setPasswordAttribute($password) {
        return $this->attributes[ 'password' ] = bcrypt($password);
    }

    public function permissions(Request $request, User $user) {
        dd($request->all());
    }
}
