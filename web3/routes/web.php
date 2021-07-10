<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::resource('movie', 'MovieController');

Route::get('/', 'HomeController@default');

Route::get('index', 'UserController@index');
//App/Providers/AuthServiceProvider.php
Route::get('/profile', 'UserController@profile');

Route::post('store', 'UserController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tickets', 'TicketsController');

Route::get('export', 'UserController@export');

Route::get('ticket/{id}', 'TicketsController@create');