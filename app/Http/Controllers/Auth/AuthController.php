<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */


    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => 'required|max:255',
            //'email' => 'required|email|max:255|unique:users',
            //'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        //return User::create([
        //  'name' => $data['name'],
        //'email' => $data['email'],
        //'password' => bcrypt($data['password']),
        //]);
    }

//////////////////
    public function showRegistrationForm()
    {
        return redirect('login');
    }

    public function getRegister()
    {
        return redirect('auth/login'); // Or wherever
    }

    public function postRegister()
    {
    }

    public function authenticated(Request $request, $user) {
        if (!$user->active) {
            auth()->logout();
            return back()->with('warning', 'Votre compte est désactivé, Veuillez contacté l\'administrateur.');
        } else if ($user->deleted) {
            auth()->logout();
            return back()->with('warning', 'Ce compte est déjà supprimé, Veuillez contacté l\'administrateur.');
        }
        //return redirect()->intended($this->redirectPath());
        return redirect()->intended('/home');
    }

}