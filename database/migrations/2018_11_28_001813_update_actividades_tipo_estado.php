<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateActividadesTipoEstado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividads', function (Blueprint $table) {
            $table->unsignedInteger('tipoactividad_id');
            $table->foreign('tipoactividad_id')->references('id')->on('tipo_actividads');
            $table->unsignedInteger('estadoactividad_id');
            $table->foreign('estadoactividad_id')->references('id')->on('estado_actividads');
            $table->unsignedInteger('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actividads', function (Blueprint $table) {
            //
        });
    }
}
