<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes_proveedores extends Model
{
    protected $table = 'clientes_proveedores';
   protected $fillable = [
        'id_cliente', 'id_proveedor',
    ];

    public function clientes()
    {
        return $this->hasOne('App\clientes_model', 'id', 'id_cliente');
     
    }

    public function proveedores()
    {
        return $this->hasOne('App\proveedores_model', 'id', 'id_proveedor');
     
    }
}
