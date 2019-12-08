<?php

  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use DB;
  use PDF;
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
  $pdf = new PDFMerger();
  $info = PDF::loadView('ReporteArea', ['areas'=>$areas]);
  $output = $info->output();
      file_put_contents(public_path().'/pdf/'.$areas->nombre .= ".pdf", $output);
      $pdf->addPDF(public_path().'/pdf/'.$areas->nombre, 'all');

  foreach ($recomendaciones as $rec) {
    $info = PDF::loadView('ReporteRec', ['recomendaciones'=>$rec]);
    $output = $info->output();
      file_put_contents(public_path().'/pdf/'.$rec->nombre .= ".pdf", $output);
      $pdf->addPDF(public_path().'/pdf/'.$rec->nombre, 'all');
    $idRec = $rec->id;



    $actividades = Actividades::where('id_recom',$idRec)->get();


    foreach ($actividades as $actividades) {
      $info = PDF::loadView('reporteAct', ['acrividades'=>$actividades]);
      $output = $info->output();
          file_put_contents(public_path().'/pdf/'.$actividades->nombre .= ".pdf", $output);
          $pdf->addPDF(public_path().'/pdf/'.$actividades->nombre, 'all');

    //  foreach ($archivos->evidencias as $rep) {
    //    $pdf->addPDF(public_path().$rep->archivo_mod, 'all');
    //  }
    }

  }
  $pdf->merge();
  $file = public_path()."/reportes/".$categoria->nombre.'.pdf';
  $pdf->save($file, "file");
  $pdf->save($categoria->nombre, "browser");

}
}
