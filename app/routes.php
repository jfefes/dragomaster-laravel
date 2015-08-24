<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'EntryController@index');

Route::post('/entry/create', 'EntryController@create');

Route::get('/login', array('before' => array('force.ssl'), function() {
	return App::make('LoginController')->index();
}));

Route::post('/login', array('before' => array('csrf', 'force.ssl'), function() {
	return App::make('LoginController')->doLogin();
}));


Route::group(array('before' => 'auth'), function()
{

	Route::get('/logout', array('before' => 'auth', function() {
		return App::make('LoginController')->doLogout();
	}));

	Route::get('/admin', 'AdminController@index');

  Route::get('/admin/export', 'AdminController@export');


});
