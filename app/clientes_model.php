<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes_model extends Model
{

	protected $table = 'clientes';
   protected $fillable = [
        'nombre', 'direccion', 'fecha_nacimiento', 'sexo', 'nit', 'telefono'
    ];
}
