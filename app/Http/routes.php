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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {

  Route::get('user/{user}/delete',['as' => 'admin.user.delete','uses'=>'UserController@delete']);
  Route::resource('user', 'UserController');


  Route::get('cliente/{cliente}/delete',['as' => 'admin.cliente.delete','uses'=>'ClienteController@delete']);
  Route::resource('cliente', 'ClienteController');

});
