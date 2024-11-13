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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('TournamentID');
            $table->dateTime('DateTimeStart');
            $table->dateTime('DateTimeEnd');
            $table->string('Stadium');
            $table->unsignedBigInteger('TeamAID');
            $table->string('TeamAFormation');
            $table->unsignedBigInteger('TeamBID');
            $table->string('TeamBFormation');
            $table->string('Score');
            $table->string('Type');
            $table->timestamps();
        
            $table->foreign('TournamentID')->references('id')->on('tournaments');
            $table->foreign('TeamAID')->references('id')->on('clubs');
            $table->foreign('TeamBID')->references('id')->on('clubs');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
