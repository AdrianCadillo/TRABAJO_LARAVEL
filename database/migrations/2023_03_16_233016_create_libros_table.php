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
            $table->bigIncrements("id_libro");
            $table->string('isbn')->unique();
            $table->string('titulo');
            $table->text("resumen");
            $table->date("fecha_publicacion");
            $table->bigInteger("id_edits")->unsigned();
            $table->bigInteger("id_autors")->unsigned();

            $table->foreign("id_edits")->references("id_edit")->on("editoriales")
            ->onDelete("cascade");
            $table->foreign("id_autors")->references("id_autor")->on("autores")
            ->onDelete("cascade");
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
