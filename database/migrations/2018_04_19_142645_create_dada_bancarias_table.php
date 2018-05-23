<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadaBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dada_bancarias', function (Blueprint $table) {
            $table->string('NTargeta');
            $table->string('NomComplet');
            $table->string('MesCaducitat');
            $table->string('AnyCaducitat');
            $table->string('CVV');
            $table->integer('idUsuari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dada_bancarias');
    }
}
