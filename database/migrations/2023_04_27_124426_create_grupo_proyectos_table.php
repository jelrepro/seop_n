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
        Schema::create('grupo_proyectos', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nombreGrupoProyecto');
            $table->string('nombreTipoProyecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_proyectos');
    }
};
