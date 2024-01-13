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
        Schema::create('lib_autor', function (Blueprint $table) {
            $table->increments('cod_autor');
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('nacionalidad', 100);

            $table->unsignedInteger('cod_genero')->nullable();

            $table->foreign('cod_genero')->references('cod_genero')->on('lib_genero');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_autor');
    }
};
