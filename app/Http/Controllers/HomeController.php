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

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('munu',compact('alertas'));
    }

    public function prof()
    {
      $nombres = App\user::all();

      return view('profesores',compact('nombres'));
    }

    public function Alertas()
    {
      $alerta = App\alertas::all();

      return view('alertas',compact('alerta'));
    }

    public function menu()
    {
      $nombres = App\Areas::all();

      return view('menu',compact('nombres'));
    }

    public function area($item)
    {
      $datos = App\Areas::find($item);

      $recom = App\Recomendaciones::find($datos->id);
      $recom = App\Recomendaciones::where("id_area","=",$datos->id)->paginate(10);

      return view('/areas.area',compact('datos'),compact('recom'));
    }

    public function subActividades(Request $request){
      $newAct = new App\actividades;

      if ($request->hasFile('archivos')) {
          $file = $request->file('archivos');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/Archivos/',$name);
        }

        if (!isset($name)){
          $newAct->archivos = '';
        }else $newAct->archivos = $name;

        $newAct->id_area = $request->id_area;
        $newAct->actividad = $request->actividad;
        $newAct->descripcion = $request->texto;

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

      return view('/registraAreas');
    }

    public function Recom()
    {
      $area = App\Areas::all();
      return view('/registraRecom', compact('area'));
    }

    public function registraRecom(Request $request)
    {
      $id = '0' ;

      $nuevaRec = new App\Recomendaciones;
      $nuevaRec->id_area = $request->id_area;
      $nuevaRec->recomendacion = $request->recomendacion;
      $nuevaRec->descripcion = $request->descripcion;
      $nuevaRec->metas = $request->metas;
      $nuevaRec->acciones = $request->acciones;

      $nuevaRec->save();

      $area = App\Areas::all();
      return view('/registraRecom',compact('area'));
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

    public function eliminaAlertas(APP\Alertas $slug) {

      $slug->delete();

      APP\alertas::destroy($slug);

      return redirect('alertas')->with('status', 'La alerta ha sido eliminado');
    }

    public function elimiUsuario(APP\user $request) {

      $request->delete();

      APP\alertas::destroy($request);

      return redirect('profesores')->with('status', 'La profesor ha sido eliminado');
    }

    public function descargaArch($request){
        $file= public_path(). "/Archivos/$request";

        $headers = array(
                  'Content-Type: application/pdf',
        );

        return Response()->download($file, $request, $headers);
    }

}
