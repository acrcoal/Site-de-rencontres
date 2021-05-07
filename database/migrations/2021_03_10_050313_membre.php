<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Membre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membre', function (Blueprint $table) {
        
        $table->string('pseudoMembre',52);
		$table->foreign('pseudoMembre')->references('pseudo')->on('admins');
		$table->string('prenom',52);
		$table->string('nom',52);
		$table->string('sexe',52);
		$table->string('age',11);
		$table->string('ville',52);
		$table->string('pays',52);
		$table->string('intention',52);
		$table->string('photo',52);
		$table->string('description',52);


        });
    }

    public function down()
    {
        Schema::dropIfExists('membre');
    }
}
