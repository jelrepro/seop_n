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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('proyectos');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->decimal('costoProyecto');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('cliente');
            $table->string('supervisor');
            $table->string('telefono');
            $table->string('correo');
            $table->text('descripcion');
            $table->unsignedBigInteger('estado_gestion_id');
            $table->foreign('estado_gestion_id')->references('id')->on('estado_gestions');
            $table->text('objeto');
            $table->text('alcance');
            $table->string('anio');
            $table->string('responsable');
            $table->string('centro_costos');
            $table->string('orden_interna');
            $table->integer('cod_inva');
            $table->unsignedBigInteger('grupo_proyecto_id');
            $table->foreign('grupo_proyecto_id')->references('id')->on('grupo_proyectos');
            $table->unsignedBigInteger('tipo_proyecto_id');
            $table->foreign('tipo_proyecto_id')->references('id')->on('tipo_proyectos');
            
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
