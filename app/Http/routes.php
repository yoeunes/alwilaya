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


Route::get('/', [ 'as' => 'home', 'uses' => 'WebsiteController@home' ]);
Route::get('/contactUs', [ 'as' => 'contactUs', 'uses' => 'WebsiteController@contactUs' ]);
Route::get('/addClaim/{step?}', [ 'as' => 'addClaim', 'uses' => 'WebsiteController@addClaim' ])->where('step', '[1-3]');

Route::auth();

Route::get('/home', 'HomeController@index');

