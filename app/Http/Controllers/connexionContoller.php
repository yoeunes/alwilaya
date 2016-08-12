<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class connexionContoller extends Controller
{
   public function getForm(){

       return view('conex');
}
}
