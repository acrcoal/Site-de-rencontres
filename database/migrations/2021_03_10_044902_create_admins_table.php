<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo',52);                                       
		    $table->string('courriel',52);
		    $table->text('motdepasse');                    
            $table->unique('courriel');
            $table->unique('pseudo');
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('naissance')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('intention')->nullable();
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
