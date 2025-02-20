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
        Schema::create('jugador_torneo', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('jugador_id')->unsigned();
            $table->integer('torneo_id')->unsigned();

            $table->timestamps();

             //relaciones
             $table->foreign('jugador_id')->references('id')->on('jugadores')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('torneo_id')->references('id')->on('torneos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugador_torneo');
    }
};
