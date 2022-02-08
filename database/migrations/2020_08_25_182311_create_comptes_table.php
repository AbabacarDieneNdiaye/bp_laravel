<?php

use App\ClientMoral;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clientphysiques_id')->nullable()->unsigned();
            $table->foreign('clientphysiques_id')->references('id')->on('client_physiques');
            $table->integer('clientmorals_id')->nullable()->unsigned();
            $table->foreign('clientmorals_id')->references('id')->on('client_morals');
            $table->integer('numeroCompte');
            $table->String('typeCompte');
            $table->decimal('fraisOuverture');
            $table->decimal('remuneration');
            $table->decimal('agios');
            $table->date('dateOuverture');
            $table->date('dateDeblocage');
            $table->decimal('solde');
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
        Schema::dropIfExists('comptes');
    }
}
