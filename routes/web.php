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

Route::get('/', 'indexController@index')->name('index');

Route::namespace('Login')->group(function(){
    Route::get('/register', 'LoginregisterController@register')->name('register');
    Route::post('/register', 'LoginregisterController@registerprocess');

    Route::get('/login', 'LoginregisterController@login')->name('login');
    Route::post('/login', 'LoginregisterController@loginprocess');
});


