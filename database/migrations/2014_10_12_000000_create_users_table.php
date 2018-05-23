<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUsuari');
            $table->string('name');
            $table->string('Cognoms')->nullable();
            $table->string('email', 100)->unique();
            $table->datetime('DataAlta')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('DataNaixement')->nullable();
            $table->string('PaisResidencia')->nullable();
            $table->string('NTargeta')->nullable();
            $table->string('Imatge')->default('user.svg');
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
