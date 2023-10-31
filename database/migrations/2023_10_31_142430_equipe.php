<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id('id');
            $table->string('NomEquipe', 100);
            $table->string('Slogan', 100);
           /*$table->integer('idMembre1');
            $table->integer('idMembre2');
            $table->integer('idMembre3');
            $table->integer('idMembre4');
            $table->integer('idMembre5');
            $table->integer('idMembre6');*/
            $table->binary('pdp');
           // $table->integer('idComposante');
           $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipes');
    }
};
