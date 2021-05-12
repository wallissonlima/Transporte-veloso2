<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConsumoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Consumo', function (Blueprint $table) {
            $table->id();
            $table->integer('idConsumo');
            $table->integer('quilometragem');
            $table->dateTime('dataAbastecimento');
            $table->decimal('valorLitroCombustivel', $precision = 18, $scale = 3);
            $table->decimal('valorAbastecido', $precision = 18, $scale = 2);
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
        Schema::dropIfExists('Consumo');
    }
}
