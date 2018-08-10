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

Route::get('/', 'TourController@index')->name('home');

Route::resource('tour', 'TourController')->only('show', 'index');

Auth::routes();

Route::get('/login/{social}', 'Auth\LoginController@redirectToProvider')->name('social-login');

Route::get('/callback/{social}', 'Auth\LoginController@handleProviderCallback');


