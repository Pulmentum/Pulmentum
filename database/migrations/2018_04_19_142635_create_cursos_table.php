<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('idCurs');
            $table->string('NomCurs')->nullable();
            $table->string('nomTipus');
            $table->string('NomLlenguatge')->nullable();
            $table->string('Nivell')->nullable();
            $table->decimal('Preu', 10, 2)->nullable();
            $table->string('Idioma')->nullable();
            $table->string('Banner')->nullable();
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
        Schema::dropIfExists('cursos');
    }
}
