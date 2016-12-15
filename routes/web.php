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

Route::get('/', 'HomeController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/search','HomeController@search');

Route::get('/settings','SettingsController@index');

Route::patch('/settings','SettingsController@update');

Route::get('/AdminPage','AdminController@index');