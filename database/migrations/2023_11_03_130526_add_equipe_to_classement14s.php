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
        Schema::table('classement14s', function (Blueprint $table) {
            $table->unsignedBigInteger('idEquipeC14');
            $table->foreign('idEquipeC14')->references('id')->on('equipes');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('classement14s', function (Blueprint $table) {
            $table->dropForeign('idEquipeC14');
        });
    }
};