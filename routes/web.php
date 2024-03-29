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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register-new', 'UsersController@registerNew');

Route::post('/messages-new', 'MessagesController@messageNew');

Route::get('/riders', 'RidersController@riders');

Route::post('/register-new-rider', 'RidersController@newRider');

Route::post('/riders-check-rider', 'RidersController@checkRider');

Route::get('/riders-home', 'RidersController@ridersHome');

Route::post('/edit-rider', 'RidersController@editRider');

Route::post('/delete-rider', 'RidersController@deleteRider');