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
        Schema::create('lib_libro', function (Blueprint $table) {
            $table->increments('cod_libro');
            $table->string('titulo', 100)->unique();
            $table->string('descripcion', 200)->nullable();
            $table->date('fecha_publicacion');

            $table->unsignedInteger('cod_idioma')->nullable();

            $table->foreign('cod_idioma')->references('cod_idioma')->on('lib_idioma');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_libro');
    }
};
