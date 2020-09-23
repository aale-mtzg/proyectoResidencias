<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_registro');
            $table->string('nombre_usuario',50);
            $table->date('fecha_registro');
            //ver si dejarlo como bigInteger o string
            $table->bigInteger('id_registro_activo');
            $table->bigInteger('id_registro_mov');
            $table->timestamps();

            //llave foranea
            $table->foreign('nombre_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_registro_mov')->references('id_movimiento')->on('movimientos');
            $table->foreign('id_registro_activo')->references('id_activo')->on('activos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
