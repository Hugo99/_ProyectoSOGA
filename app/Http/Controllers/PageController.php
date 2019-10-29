<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PageController extends Controller{

    public function welcome(){
      $nombres = App\areas::all();

      return view('welcome', compact('nombres'));
    }


    public function detalle($item){
      $nota = App\registra::findOrFail($item);

      return view('nombre.detalle',compact('nota'));
    }

    public function agregarus(Request $datosNue){
      //return $datosNue->all();
      $datosNue->validate([
        'nombre' => 'required',
        'user_neme' => 'required',
        'email' => 'required',
        'contrasena' => 'required'
      ]);

      $nuevoR = new App\registra;

      $nuevoR->nombre = $datosNue->nombre ;
      $nuevoR->user_neme = $datosNue->user_neme ;
      $nuevoR->email = $datosNue->email ;
      $nuevoR->contrasena = $datosNue->contrasena ;

      $nuevoR->save();

      return view('agregarus');
    }

    public function agregar(){
      return view('agregarus');
    }

    public function inicio(){
    	return view('inicio');
    }

    public function maestros(){
    	return view('maestros');
    }

    public function perfil($nombre = null ){
    	$equipo = ['Hugo', 'mariana', 'otros'];

		return view('perfil',compact('equipo','nombre'));
    }


 }
