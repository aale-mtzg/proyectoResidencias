<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('id_movimiento', 10);
            $table->bigInteger('numero_serial', 10);
            $table->bigInteger('numero_serial_default', 10);
            $table->bigInteger('unidades', 10);
            $table->string('nombre_departamento', 50);
            $table->date('fecha_prestamo', 10);
            $table->date('fecha_devolucion', 10);
            //
            $table->timestamps();

            //llaves foraneas
            $table->foreign('id_movimiento')->references('id_movimiento')->on('movimientos');
            //llave foranea de la
            $table->foreign('numero_serial')->references('id_activo')->on('activos');
            $table->foreign('numero_serial_default')->references('id_activo')->on('activos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
