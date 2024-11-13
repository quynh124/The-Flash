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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MatchID');
            $table->unsignedBigInteger('ScoringPlayerID');
            $table->unsignedBigInteger('AssistingPlayerID')->nullable();
            $table->string('Minute');
            $table->timestamps();
        
            $table->foreign('MatchID')->references('id')->on('matches');
            $table->foreign('ScoringPlayerID')->references('id')->on('players');
            $table->foreign('AssistingPlayerID')->references('id')->on('players');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
