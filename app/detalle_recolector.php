<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_recolector extends Model
{
    protected $table = 'detalle_recolectors';
    protected $primaryKey = 'id';
    protected $fillable = ['idPreciclaje','id_recolectores'];

    public function recolector()
    {
        return $this->hasMany('App\Recolector;', 'id', 'id_recolectores');
    }
    public function punto()
    {
        return $this->hasMany('App\PuntoReciclajeModel;', 'id', 'idPreciclaje');
    }
}
