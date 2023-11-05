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
        Schema::table('equipes', function (Blueprint $table) {
            $table->unsignedBigInteger('idParticipant1')->nullable();
            $table->foreign('idParticipant1')->references('id')->on('participants');
            $table->unsignedBigInteger('idParticipant2')->nullable();
            $table->foreign('idParticipant2')->references('id')->on('participants');
            $table->unsignedBigInteger('idParticipant3')->nullable();
            $table->foreign('idParticipant3')->references('id')->on('participants');
            $table->unsignedBigInteger('idParticipant4')->nullable();
            $table->foreign('idParticipant4')->references('id')->on('participants');
            $table->unsignedBigInteger('idParticipant5')->nullable();
            $table->foreign('idParticipant5')->references('id')->on('participants');
            $table->unsignedBigInteger('idParticipant6')->nullable();
            $table->foreign('idParticipant6')->references('id')->on('participants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->dropForeign('idParticipant1');
            $table->dropForeign('idParticipant2');
            $table->dropForeign('idParticipant3');
            $table->dropForeign('idParticipant4');
            $table->dropForeign('idParticipant5');
            $table->dropForeign('idParticipant6');
        });
    }
};
