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
        Schema::table('classement8s', function (Blueprint $table) {
            $table->unsignedBigInteger('idEquipeC8');
            $table->foreign('idEquipeC8')->references('id')->on('equipes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('classement8s', function (Blueprint $table) {
            $table->dropForeign('idEquipeC8');
        });
    }
};
