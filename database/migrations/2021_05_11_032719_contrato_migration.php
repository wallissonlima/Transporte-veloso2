<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContratoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contrato', function (Blueprint $table) {
            $table->id();
            $table->integer('idContrato');
            $table->integer('numero');
            $table->decimal('valor', $precision = 18, $scale = 2);
            $table->dateTime('dataAssinatura');
            $table->dateTime('dataTermino');
            $table->text('descricao');
           $table->string('arquivo');
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
        Schema::dropIfExists('Contrato');
    }
}
