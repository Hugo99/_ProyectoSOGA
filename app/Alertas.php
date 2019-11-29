<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Alertas extends Model
{
    use Notifiable;

    protected $fillable = [
          'id','nombre_alerta', 'mensaje_alerta', 'id_area',
    ];

}
