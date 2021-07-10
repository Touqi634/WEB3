<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/ticket', 'ApiController@createticket');
Route::get('/tickets','ApiController@showticket');
Route::get('/tickets/{id}','ApiController@showbyticketid');
Route::delete('/ticketdelete/{id}','ApiController@deletebyticketid');

Route::post('/user', 'ApiController@createuser');
Route::get('/users','ApiController@showuser');
Route::get('/users/{id}','ApiController@showbyuserid');
Route::delete('/usersdelete/{id}','ApiController@deletebyuserid');

Route::GET('polls','PollController@index');
Route::GET('polls/$id','PollController@movie');