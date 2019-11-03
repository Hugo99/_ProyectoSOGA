<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $table = 'areas';
    protected $fillable = ['nombre_area', 'metas', 'acciones'];
}
