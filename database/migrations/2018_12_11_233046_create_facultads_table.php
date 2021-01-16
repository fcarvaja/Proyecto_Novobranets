<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre_facultad');
            $table->string('decano');
            $table->string('vicedecano');
            $table->string('secretario_facultad');
            $table->string('nombre_edificio');
            $table->string('fono_edificio');
            $table->string('direccion_edificio');
            $table->string('contacto_facultad');
            $table->string('fono_contacto');
            $table->string('fax_contacto');
            $table->string('email_contacto');
            $table->string('imagen_edificio');
            $table->string('latitud_mapa');
            $table->string('longitud_mapa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultads');
    }
}
