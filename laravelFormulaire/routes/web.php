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

Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');

Route::get('/news/create', 'NewsController@create');
Route::post('/news', 'NewsController@store');
Route::view('/upload', "upload");
Route::post('/store', "UserController@store");
