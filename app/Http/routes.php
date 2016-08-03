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
Route::group(['prefix' => 'admin'], function () {

	Route::get('index',['as' => 'admin.index','uses'=>'AdminController@index']);

  	Route::get('user/{user}/delete',['as' => 'admin.user.delete','uses'=>'UserController@delete']);
  	Route::resource('user', 'UserController');


  	Route::get('cliente/{cliente}/delete',['as' => 'admin.cliente.delete','uses'=>'ClienteController@delete']);
  	Route::resource('cliente', 'ClienteController');

  	Route::resource('invoice', 'InvoiceController');

    Route::get('maquina',['as' => 'admin.maquina.index','uses'=>'DetailController@lista']);
	Route::any('index/{detail}/estado',['as' => 'admin.detail.estado','uses'=>'DetailController@cambiarEstado']);
	Route::any('index/{detail}/entregado',['as' => 'admin.detail.entregado','uses'=>'DetailController@cambiarEntregado']);
  	Route::get('invoice/{detail}/delete',['as' => 'admin.detail.delete','uses'=>'DetailController@delete']);
  	Route::resource('detail', 'DetailController');

});

Route::auth();

Route::get('/', ['as' => 'web.index','uses' =>'HomeController@index',]);
