<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_activo');
            $table->unsignedBigInteger('numero_serial');
            $table->string('numero_serial_dispositivo',10);
            $table->string('numero_serial_tecNM',10);
            $table->string('tipo_activo',50);
            $table->string('nombre_activo', 50);
            $table->timestamps();
            $table->dateTime('fecha_alta');
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('color', 50);
            $table->string('descripcion', 50)->nullable();
            $table->binary('imagen')->nullable();
            $table->binary('codigo_qr');
            $table->string('tipo_ubicacion',20);
            $table->string('nombre_ubicacion', 50);
            $table->string('tipo_estatus',50);

            //$table->foreign('Campo')->references('id de referencia')->on('tabla');
            // DUDA: ¿Deben tener el mismo tipo de dato? ()
            $table->foreign('numero_serial')->references('id_numeroSerial')->on('numero_serials')->onDelete('cascade');
            // DUDA
            //$table->foreign('nombre_ubicacion')->references('id_ubicacion')->on('ubicacion_fisicas');
            // llave foranea de tabla ubicacion fisica
            //$table->foreign('tipo_ubicacion')->references('id_ubicacion')->on('ubicacion_fisicas');
            // llave fornaea de la tabla estatuses
            //$table->foreign('tipo_estatus')->references('id_estatus')->on('estatuses');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos');
    }
}
