<?php

  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use DB;
  use PDF;
  use  PDFMerger;
  use App\Http\Requests;
  use App\Http\Controllers\Controller;
  use App\Actividades;
  use App\Archivos;
  use App\Areas;
  use App\User;
  use App\Recomendaciones;
  class ReportController extends Controller {
  public function index ($id) {

  $areas = Areas::findOrFail($id);
  $recomendaciones = Recomendaciones::where('id_area', $id)->get();
  $user=User::where('id_area', $id)->get();
  $pdf = PDFMerger::init();
  $info = PDF::loadView('ReporteArea', ['areas'=>$areas],['user'=>$user]);
  $output = $info->output();
      file_put_contents(public_path().'/pdf/portadas/areas/'.$areas->name_area .= ".pdf", $output);
      $pdf->addPDF(public_path().'/pdf/portadas/areas/'.$areas->name_area, 'all');

  foreach ($recomendaciones as $rec) {
    $info = PDF::loadView('ReporteRec', ['recomendaciones'=>$rec]);
    $output = $info->output();
      file_put_contents(public_path().'/pdf/portadas/recomendaciones/'.$rec->recomendacion .= ".pdf", $output);
      $pdf->addPDF(public_path().'/pdf/portadas/recomendaciones/'.$rec->recomendacion, 'all');
      $idRec = $rec->id;



      $actividades = Actividades::where('id_recom',$idRec)->get();

      foreach ($actividades as $actividades) {
            $info = PDF::loadView('reporteAct',['actividades'=>$actividades]);
            $output = $info->output();
            file_put_contents(public_path().'/pdf/portadas/'.$actividades->actividad .= ".pdf", $output);
            $pdf->addPDF(public_path().'/pdf/portadas/'.$actividades->actividad, 'all');


            $idAct = $actividades->id;
            $archivos = Archivos::where('id_act', $idAct)->get();
            $info2 = PDF::loadView('ReporteArchivos', ['archivos'=>$archivos]);
            $output = $info2->output();
            file_put_contents(public_path().'/pdf/portadas/Archivos_'.$actividades->actividad .= ".pdf", $output);
            $pdf->addPDF(public_path().'/pdf/portadas/Archivos_'.$actividades->actividad, 'all');
      }

  }
  $pdf->merge();
  $file = public_path()."/reportes/areas/".$areas->name_area.'.pdf';
  $pdf->save($file, "file");
  $pdf->save($areas->name_area, "browser");

}
}
