<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolector extends Model
{
    protected $table = 'recolectors';
    protected $fillable=['Nombre','Dias'];
}
