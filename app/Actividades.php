<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{

  protected $fillable = [
    'id_area','activida','descripcion','id_recom',
  ];

}
