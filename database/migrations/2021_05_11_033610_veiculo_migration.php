<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VeiculoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Veiculo', function (Blueprint $table) {
            $table->id();
            $table->integer('idVeiculo');
            $table->integer('idTipoVeiculo');
            $table->string('placa');
            $table->string('renavam');
            $table->string('chassi');
            $table->string('descricao');
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
        Schema::dropIfExists('Veiculo');
    }
}
