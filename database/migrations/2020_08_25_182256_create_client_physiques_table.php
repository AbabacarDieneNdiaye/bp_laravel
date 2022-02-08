<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientPhysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_physiques', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nom');
            $table->String('prenom');
            $table->String('adresse');
            $table->integer('tel')->unique();
            $table->String('email')->unique();
            $table->integer('cni')->unique();
            $table->String('salaire');
            $table->String('profession');
            $table->text('infos');
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
        Schema::dropIfExists('client_physiques');
    }
}
