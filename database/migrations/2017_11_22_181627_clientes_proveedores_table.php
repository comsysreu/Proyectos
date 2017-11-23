<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientesProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_proveedores', function (Blueprint $table) {
         $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_proveedor')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('ventas_detalle');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
