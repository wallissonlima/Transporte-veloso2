<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItinerarioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Itinerario', function (Blueprint $table) {
            $table->id();
            $table->integer('idItinerario');
            $table->string('destinoInicial');
            $table->string('destinoFinal');
            $table->string('caminhoPercorrido');
            $table->string('periodicidade');
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
        Schema::dropIfExists('Itinerario');
    }
}
