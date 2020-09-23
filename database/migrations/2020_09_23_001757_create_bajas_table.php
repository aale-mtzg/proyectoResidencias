<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_movimiento');

            //llave foranea
            $table->foreign('id_movimiento')->references('id_movimiento')->on('movimientos');

            //NOTA: Se le va agregar mas campos para validar que es una baja


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bajas');
    }
}
