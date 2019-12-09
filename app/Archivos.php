<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Archivos extends Model{
    use Notifiable;

    protected $fillable = [
        'id_recom', 'id_area','id_act', 'archivos',
    ];

}
