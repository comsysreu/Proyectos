<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ventas extends Model
{
    protected $table = 'ventas';
   	protected $fillable = 	
   	[
        'id_usuario', 'id_cliente','total',
   	];


    public function cliente()
    {
        return $this->hasOne('App\clientes_model', 'id', 'id_cliente');
     
    }

    public function usuario()
    {
        return $this->hasOne('App\User', 'id', 'id_usuario');
     
    }

    public function detalle()
    {
        return $this->hasMany('App\ventas_detalle', 'id_venta');
     
    }

}
