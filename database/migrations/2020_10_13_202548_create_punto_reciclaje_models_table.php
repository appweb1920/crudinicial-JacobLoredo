<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntoReciclajeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punto_reciclaje_models', function (Blueprint $table) {
                $table->id();
                $table->string('TipoBasura');
                $table->string('direccion')->unique();
                $table->string('HorarioApertura');
                $table->string('HorarioCierre');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punto_reciclaje_models');
    }
}
