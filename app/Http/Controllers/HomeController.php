<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        return view('home',compact('alertas'));
    }

    public function prof(){
      $nombres = App\user::all();

      return view('profesores',compact('nombres'));
    }

    public function menu(){
      $nombres = App\Areas::all();

      return view('menu',compact('nombres'));
    }

    public function area($item){
      $datos = App\Areas::findOrFail($item);

      return view('/areas.area',compact('datos'));
    }

    public function subActividades(Request $request){
      $nuevaActividad = new App\Actividades;

      if ($request->hasFile('archivos')) {
          $file = $request->file('archivos');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/Archivos/',$name);
        }

        $nuevaActividad->actividad = $request->actividad;
        $nuevaActividad->descripcion= $request->texto;
        $nuevaActividad->archivos = $name;

        return 'Save';
    }

    public function registra(){
      $area = App\Areas::all();

      return view('/auth/register',compact('area'));
    }

    /*public function sidebar(){
      $alertas = App\alertas::all();

      return view('sidebar', compact('alertas'));
    }*/
  }
