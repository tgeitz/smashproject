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

// User routes...
Route::get('user/dashboard', 'UserController@dashboard');
Route::resource('user', 'UserController');

// Tournament routes...
Route::get('tournaments/create', 'TournamentsController@create');
Route::post('tournaments', 'TournamentsController@store');
Route::get('tournaments', 'TournamentsController@index');
Route::get('tournaments/{id}', 'TournamentsController@show');
Route::get('tournaments/search', 'TournamentsController@showSearch');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
