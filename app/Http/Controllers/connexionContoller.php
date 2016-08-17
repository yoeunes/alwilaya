<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests\createUtilisateursRequest;
use validator;


class connexionContoller extends Controller

{
    private $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];
   public function getForm(){
       return view('conex');

   }

    public function index()
    {
        return view('home');
    }
   public function postForm(Request $request)
   {
       $this->validate($request, $this->rules);


       // create our user data for the authentication

       $userdata = array(
           'email'     => $request->input('email'),
           'password'  =>$request->input('password'),
       );
      
       // attempt to do the login
       if (Auth::attempt($userdata)) {

           // validation successful!
           // redirect them to the secure section or whatever
           // return Redirect::to('secure');
           // for now we'll just echo success (even though echoing in a controller is bad)
          return redirect()->intended('/home') ;

       }
       else {

           // validation not successful, send back to form
           return redirect()->intended('/connexion');}



           //////////////////////

      // if (!Auth::attempt($request->only(['email', 'password']), $request->has('rememberme')))
           //return redirect()->back()->with('info','could not sign you in with those details');
          // echo 'success';

      // else

           //return redirect()->route()->with('info','you are signed in ');
          // return redirect('/');

      // if (Auth::attempt($request->only(['email', 'password']), $request->has('rememberme'))) {
           //echo "vous etes  authentifié";
       } //return redirect('/')->with('info','could not sign you in with those details');}
       //else
          // echo "you are now not sign in";


   // public function getlogout(){

      //  redirect('/');
    //}




}
