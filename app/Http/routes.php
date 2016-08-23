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
    return view('pages.welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/dashboard', 'UsersController@dashboard');
Route::post('/users/{username}', 'UsersController@uploadFile');
Route::resource('users', 'UsersController', ['except' => [ 'create', 'store' ], 'parameters' => [ 'users' => 'username' ]]);

Route::get('/languages', function(App\Language $language) {
  return response($language->all()->toJson(), 200);
});
