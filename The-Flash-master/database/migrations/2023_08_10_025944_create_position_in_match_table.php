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
        Schema::create('position_in_match', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MatchID');
            $table->unsignedBigInteger('PlayerID');
            $table->string('PositionInMatch');
            $table->timestamps();
        
            $table->foreign('MatchID')->references('id')->on('matches');
            $table->foreign('PlayerID')->references('id')->on('players');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_in_match');
    }
};
