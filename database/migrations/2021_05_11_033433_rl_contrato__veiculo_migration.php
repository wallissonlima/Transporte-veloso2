<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RlContratoVeiculoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RL_Contrato_Veiculo', function (Blueprint $table) {
            $table->id();
            $table->integer('idContratoVeiculo');
            $table->integer('idContrato');
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
        Schema::dropIfExists('RL_Contrato_Veiculo');
    }
}
