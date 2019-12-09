<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{

  protected $fillable = [
    'id','id_area','actividad','descripcion','id_recom',
  ];

}
