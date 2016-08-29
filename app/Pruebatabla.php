<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pruebatabla extends Model
{
     protected $fillable = array('nombre','apellidos','telefono','direccion', 'created_at', 'updated_at');
}
