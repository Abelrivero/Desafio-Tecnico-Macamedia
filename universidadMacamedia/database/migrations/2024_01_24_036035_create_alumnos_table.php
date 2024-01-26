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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('dni');
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->foreignId('carreraID')->constrained('carreras');
            $table->string('telefono', 150);
            $table->string('numeroLegajo', 150);
            $table->foreignId('estadoID')->constrained('estados');
            $table->foreignId('usuarioID')->nullable()->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
