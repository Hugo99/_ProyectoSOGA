<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoregaController extends Controller
{
    return \View::make('new');

/**
* guarda un archivo en nuestro directorio local.
*
* @return Response
*/
public function save(Request $request)
{

       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');

       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('/Users/hugoeguino/_ProyectoSOGA/_ProyectoSOGA')->put($nombre,  \File::get($file));

       return "archivo guardado";
}
}
