<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSancionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sancions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('gestion_academica');
            $table->string('descripcion');
            $table->string('formulario');
            $table->string('email');
            $table->string('fono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sancions');
    }
}
