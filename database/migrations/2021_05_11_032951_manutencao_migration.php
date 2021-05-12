<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManutencaoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Manutencao', function (Blueprint $table) {
            $table->id();
            $table->integer('idMunutencao');
            $table->integer('idVeiculo');
            $table->dateTime('dataManutencao', $precision = 0);
            $table->decimal('valorManutencao', $precision = 18, $scale = 2);
            $table->string('descricao');
            $table->integer('idTipoManutencao');
            $table->integer('idPeca');
            $table->integer('idMaoDeObra');
            
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
        Schema::dropIfExists('Manutencao');
    }
}
