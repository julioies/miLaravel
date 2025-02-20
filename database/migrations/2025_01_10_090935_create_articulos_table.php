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
        Schema::create('articulos', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->integer('categoria_id')->unsigned();  //si hubieramos puesto categorias_id tambien hubiera cogido la relación
            $table->text('titulo');
            $table->mediumText('descripcion');
            $table->timestamps();

            //relaciones
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            //category_id hace referencia a la tabla categories y el borrado y la actualización es en cascada.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
