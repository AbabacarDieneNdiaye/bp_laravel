<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientMoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_morals', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nom');
            $table->String('raisonSociale');
            $table->String('adresse');
            $table->integer('tel')->unique();
            $table->String('email')->unique();
            $table->integer('ninea')->unique();
            $table->String('registreCommerce');
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
        Schema::dropIfExists('client_morals');
    }
}
