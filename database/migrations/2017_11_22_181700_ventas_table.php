<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
         $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->tinyInteger('estado');
            $table->decimal('total');
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
