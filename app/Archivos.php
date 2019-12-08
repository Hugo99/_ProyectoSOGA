<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Archivos extends Model{
    use Notifiable;

    protected $fillable = [
          'id','id_recom', 'id_area', 'archivos',
    ];

}
