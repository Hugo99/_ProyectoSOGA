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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','PageController@welcome')->name('welc');

Route::get('/detalles/{id}','PageController@detalle')->name('nombre.detalle');


/*
Route::view('galeria','fotos', ['numero' =>  125]);

Route::get('inicio', function (){
    return view('inicio');
})->name('ventana1');
*/
 Route::get('inicio', 'PageController@inicio')->name('ventana1');

/*
Route::get('maestros', function (){
   return view('maestros');
})->name('ventana2');
*/
Route::get('maestros','PageController@maestros' )->name('ventana2');

/*
Route::get('perfil/{nombre?}',function($nombre = null ){
	$equipo = ['Hugo', 'Ema', 'buenos para nada'];
	return view('perfil',['equipo'=>$equipo,'nombre'=>$nombre]);
	return view('perfil',compact('equipo','nombre'));
})->name('ventana3');
*/
Route::get('perfil/{nombre?}', 'PageController@perfil')->name('ventana3');

Route::get('agregarus','PageController@agregar')->name('ventana4');

Route::post('agregarus','PageController@agregarus')->name('agrgarusua');


/*
Route::get('fotos/{numero?}', function ($numero ){
    return 'Estas en la galeria '.$numero;
})->where('numero','[0-9]+');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
