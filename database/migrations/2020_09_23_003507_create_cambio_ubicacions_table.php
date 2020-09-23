<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambioUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambio_ubicacions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_movimiento');
            $table->string('ubicacion_anterior');
            $table->string('ubicacion_actual');
            $table->bigInteger('numero_serial');

            //llave foranea
            $table->foreign('id_movimiento')->references('id_movimiento')->on('movimientos');
            $table->foreign('numero_serial')->references('id_activo')->on('activos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cambio_ubicacions');
    }
}
