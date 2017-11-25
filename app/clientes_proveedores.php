<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes_proveedores extends Model
{
    protected $table = 'clientes_proveedores';
   protected $fillable = [
        'id_cliente', 'id_proveedor',
    ];
}
