<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionSalonOficinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_salon_oficinas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //Llave foranea para ubicacion fisica
            $table->id('id_ubicacion');
            $table->foreign('id_ubicacion')->references('id_ubicacion')->on('ubicacion_fisicas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion_salon_oficinas');
    }
}
