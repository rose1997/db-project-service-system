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
    return view('index');
});
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'RegisterController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('/home');
Route::get('/main', 'HomeController@main');
Route::get('/trash', 'TrashController@index');
Route::get('/createtrash', 'TrashController@create');
Route::POST('/storetrash', 'TrashController@store');
Route::get('/umbrella', 'UmbrellaController@index');
Route::get('/createumbrella', 'UmbrellaController@create');
Route::POST('/storeumbrella', 'UmbrellaController@store');
