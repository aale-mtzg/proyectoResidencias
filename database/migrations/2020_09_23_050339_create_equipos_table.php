<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_activo');
            $table->string('nombre_equipo', 20);
            $table->string('cap_memoria', 20);
            $table->string('procesador', 20);
            $table->string('disco_duro', 20);
            $table->string('pulgadas', 20);
            $table->string('resolucion', 20);
            $table->string('conectividad', 20);
            $table->string('tipo_entrada', 20);

            //Llave foranea
            $table->foreign('id_activo')->references('id_activo')->on('activos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
