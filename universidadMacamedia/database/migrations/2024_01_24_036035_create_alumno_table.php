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
        Schema::create('alumno', function (Blueprint $table) {
            $table->id('dni');
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->foreignId('carreraID')->constrained('carrera');
            $table->string('telefono', 150);
            $table->string('numeroLegajo', 150);
            $table->foreignId('estadoID')->constrained('estado');
            $table->foreignId('usuarioID')->nullable()->constrained('users');
            $table->string('full_name')->virtualAs('concat(nombre, \' \', apellido)');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
};
