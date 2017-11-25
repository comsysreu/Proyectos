<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas_detalle extends Model
{
    protected $table = 'ventas_detalle';
   protected $fillable = [
        'id_venta', 'id_producto','cantidad', 'subtotal',
    ];
}
