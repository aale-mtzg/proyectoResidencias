<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_movimiento');
            $table->string('tipo_mov', 50);
            $table->string('tipo_activo',50);
            $table->date('fecha_movimiento');
            $table->bigInteger('cantidad_movimiento',10);
            $table->timestamps();

            //llave foranea de la tabla activos
            $table->foreign('tipo_activo')->references('id_activo')->on('activos');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
