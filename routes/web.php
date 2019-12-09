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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();


Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/perfil','HomeController@perfil')->name('perfil');
Route::post('/perfil', 'HomeController@perfilAct')->name('perfilAct');

Route::get('menu', 'HomeController@menu')->name('menu');

Route::get('/menu/{name}', 'HomeController@area')->name('areas.area');

Route::get('/register', 'HomeController@registra')->name('register');

Route::get('profesores','HomeController@prof')->name('profe');

Route::get('/borrararea','HomeController@borareas')->name('bAreas');

Route::get('/alertas','HomeController@Alertas')->name('alertaver');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/registraAlerta','HomeController@Alerta')->name('alerta');

Route::post('/registraAlerta','HomeController@registraAlerta')->name('registraAlerta');


Route::get('/registraRecom', 'HomeController@Recom')->name('Recom');

Route::post('/registraRecom', 'HomeController@registraRecom')->name('registraRecom');


Route::get('/registraAreas','HomeController@areas')->name('Areas');

Route::post('/registraAreas','HomeController@registraArea')->name('registraAreas');

Route::post('/menu','HomeController@subActividades')->name('subActividades');

Route::get('/olvide_password', 'Auth\OlvidePassword@olvide')->name('olvide');
Route::post('/olvide_password', 'Auth\OlvidePassword@password')->name('password');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/email')->name('recuperarPassword');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::delete('/alertas/{request?}/elimina', 'HomeController@eliminaAlertas')->name('eliminaAlertas');

Route::delete('/profesores/{request?}/elimina', 'HomeController@elimiUsuario')->name('eliminaprof');

Route::delete('/borrararea/{request?}/elimina', 'HomeController@eliminaarea')->name('eliminaarea');

//Rutas archivos
Route::name('pdfGenera')->get('/descargar', 'HomeController@descargar');
