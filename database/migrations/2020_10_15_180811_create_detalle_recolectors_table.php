<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleRecolectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_recolectors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_punto_reciclaje')->references('id')->on('punto_reciclaje_models');
            $table->foreignId('id_recolectores')->references('id')->on('recolectors');;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('detalle_recolectors');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
