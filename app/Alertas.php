<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Alertas extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
          'nombre_alerta', 'mensaje_alerta', 'id_area',
    ];
}
