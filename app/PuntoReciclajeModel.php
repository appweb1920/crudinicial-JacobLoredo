<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntoReciclajeModel extends Model
{
   protected $table = 'punto_reciclaje_models';
   protected $fillable=['TipoBasura','direccion','HorarioApertura','HorarioCierre'];
}
