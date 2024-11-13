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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ClubID');
            $table->string('Avatar');
            $table->string('Name');
            $table->date('Birthdate');
            $table->string('Nationality');
            $table->string('Position');
            $table->string('JerseyNumber');
            $table->string('Story');
            $table->timestamps();
        
            $table->foreign('ClubID')->references('id')->on('clubs');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
