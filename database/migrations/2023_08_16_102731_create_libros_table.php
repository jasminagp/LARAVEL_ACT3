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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('autor');
            $table->integer('año_publicacion');
            $table->string('genero');
            $table->integer('disponible');
        });

        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Usuario del prestamo
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');
            //Libro del prestamo
            $table->unsignedBigInteger("book_id");
            $table->foreign('book_id')->references('id')->on('libros');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
