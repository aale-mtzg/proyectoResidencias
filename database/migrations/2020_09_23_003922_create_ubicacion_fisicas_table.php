<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_fisicas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_ubicacion');
            $table->string('tipo_ubicacion',20);
            $table->string('nombre_ubicacion',20);
            $table->string('nombre_edificio',20);
            $table->string('descripcion_ubicacion',50);
            $table->integer('capacidad',10);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion_fisicas');
    }
}
