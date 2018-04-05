<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->increments('idUsuari');
            $table->string('Nom');
            $table->string('Cognoms');
            $table->datetime('DataAlta')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('DataNaixement');
            $table->string('Email',100)->unique();
            $table->string('PaisResidencia');
            $table->string('Idioma')->nullable();
            $table->boolean('Alumne')->nullable();
            $table->boolean('Professor')->nullable();
            $table->string('NTargeta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
}
