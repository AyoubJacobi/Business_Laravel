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

// Route::get('/','ListingsController@index');
Route::get('links/create','LinkController@create');
Route::post('links/create','LinkController@store');
Route::get('r/{id}', 'LinkController@show')->where('id','[0-9]+');
Auth::routes();
Route::resource('lists', 'ListingsController');
Route::resource('users', 'UsersController');

Route::get('/home', 'HomeController@index');
