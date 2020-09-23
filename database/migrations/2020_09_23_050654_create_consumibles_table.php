<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumibles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_activo');
            $table->string('nombre_consumible', 20);
            $table->string('unidades', 20);
            $table->string('cap_alamacenamiento', 20);

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
        Schema::dropIfExists('consumibles');
    }
}
