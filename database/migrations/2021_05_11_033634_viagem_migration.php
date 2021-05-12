<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViagemMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Viagem', function (Blueprint $table) {
            $table->id();
            $table->integer('idViagem');
            $table->dateTime('dataInicio', $precision = 0);
            $table->dateTime('dataFim', $precision = 0);
            $table->integer('quilometragemInicial');
            $table->integer('quilometragemFinal');
            $table->integer('idItinerario');
            $table->integer('idVeiculo');
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
        Schema::dropIfExists('Viagem');
    }
}
