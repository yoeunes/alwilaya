<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('formul','FormulController@getFormul');
Route::post('formul','FormulController@postFormul');
Route::get('/', function () {
    return view('welcome');
});

Route::get('connexion','connexionContoller@getForm');//pour avoir formulaire de connexion
Route::post('connexion','connexionContoller@postForm');//traitement et store ici on verifie que les champs sont valides

//Route::post('logout','connexionController@getlogout');//deconnexion

Route::auth();
Route::get('/home','connexionContoller@index');
