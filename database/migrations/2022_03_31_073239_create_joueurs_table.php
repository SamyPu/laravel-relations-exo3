<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
			$table->string('nom');
			$table->string('prenom');
			$table->string('age');
			$table->string('telephone');
			$table->string('email');
			$table->string('genre');
			$table->string('pays');
            $table->foreignId("role_id")->constrained("roles","id")->onUpdate("cascade");
            // ne pourrait attribuer pas d'autres roles à d'autre joueur 
            $table->foreignId("equipe_id")->constrained("equipes","id")->onUpdate("cascade");
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
        Schema::dropIfExists('joueurs');
    }
};
