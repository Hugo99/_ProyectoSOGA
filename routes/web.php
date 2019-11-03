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

Auth::routes();

Route::get('menu', 'HomeController@menu')->name('menu');

Route::get('/area/{name}', 'HomeController@area')->name('areas.area');

Route::get('profesores','HomeController@prof')->name('profe');

Route::get('/home', 'HomeController@index')->name('home');