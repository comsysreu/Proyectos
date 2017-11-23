<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes_proveedores', function (Blueprint $table) {

            $table->foreign('id_cliente')->references('id')->on('clientes')->change();
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->change();
     });

        Schema::table('ventas', function (Blueprint $table) {

            $table->foreign('id_cliente')->references('id')->on('clientes')->change();
            $table->foreign('id_usuario')->references('id')->on('users')->change();

     });

        Schema::table('ventas_detalle', function (Blueprint $table) {

            $table->foreign('id_venta')->references('id')->on('ventas')->change();
            $table->foreign('id_producto')->references('id')->on('productos')->change();
     });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
