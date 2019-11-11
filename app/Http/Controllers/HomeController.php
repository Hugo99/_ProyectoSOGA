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
    public function index()
    {
        return view('home',compact('alertas'));
    }

    public function prof()
    {
      $nombres = App\user::all();

      return view('profesores',compact('nombres'));
    }

    public function menu()
    {
      $nombres = App\Areas::all();

      return view('menu',compact('nombres'));
    }

    public function area($item)
    {
      $datos = App\Areas::findOrFail($item);

      return view('/areas.area',compact('datos'));
    }

    public function subActividades(Request $request)
    {

      if ($request->hasFile('archivos')) {
          $file = $request->file('archivos');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/Archivos/',$name);
        }

        $newAct = new App\actividades;

        $newAct->id_area = $request->id_area;
        $newAct->actividad = $request->actividad;
        $newAct->descripcion = $request->texto;
        $newAct->archivos = $name;

        $newAct->save();

        return redirect('/menu');
    }

    public function registra()
    {
      $area = App\Areas::all();

      return view('/auth/register',compact('area'));
    }

    public function areas()
    {
      return view('/registraAreas');
    }

    public function registraArea(Request $request)
    {
      $nuevaArea = new App\areas;

      $nuevaArea->name_area = $request->name;

      $nuevaArea->save();
      $id = $nuevaArea->id;

      $nuevaRec = new App\Recomendaciones;

      $nuevaRec->id_area = $id;
      $nuevaRec->recomendacion = $request->recomendacion;
      $nuevaRec->descripcion = $request->descripcion;
      $nuevaRec->metas = $request->metas;
      $nuevaRec->acciones = $request->acciones;

      $nuevaRec->save();


      return view('/registraAreas');
    }

    public function Recom()
    {

      return view('/registraRecom');
    }

    public function registraRecom(Request $request)
    {
      $id = '0' ;
      
      $nuevaRec = new App\Recomendaciones;

      $nuevaRec->id_area = $id;
      $nuevaRec->recomendacion = $request->recomendacion;
      $nuevaRec->descripcion = $request->descripcion;
      $nuevaRec->metas = $request->metas;
      $nuevaRec->acciones = $request->acciones;

      $nuevaRec->save();

      return view('/registraRecom');
    }

    public function Alerta()
    {
      $area = App\Areas::all();

      return view('/registraAlerta',compact('area'));
    }

    public function registraAlerta(Request $request)
    {
      $alertaNue = new App\alertas;

      $alertaNue->nombre_alerta = $request->name;
      $alertaNue->mensaje_alerta = $request->mensaje;
      $alertaNue->id_area = $request->id_area;

      $alertaNue->save();

      $area = App\Areas::all();

      return view('/registraAlerta',compact('area'));
    }

}
