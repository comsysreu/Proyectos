<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores_model extends Model
{
    protected $table = 'proveedores';
   protected $fillable = [
        'nombre', 'direccion', 'nit', 'telefono'
    ];
}
