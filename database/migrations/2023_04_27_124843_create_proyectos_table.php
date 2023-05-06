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
            $table->string('proyectos')->nullable();
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->integer('costoProyecto')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('cliente')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('estado_gestion_id')->nullable();
            $table->foreign('estado_gestion_id')->references('id')->on('estado_gestions');
            $table->text('objeto')->nullable();
            $table->text('alcance')->nullable();
            $table->text('antecedente')->nullable();
            $table->text('beneficio')->nullable();
            $table->string('anio')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            // $table->string('responsable')->nullable();
            $table->unsignedBigInteger('responsable_user_id')->nullable();
            $table->foreign('responsable_user_id')->references('id')->on('users');
            $table->string('centro_costos')->nullable();
            $table->string('orden_interna')->nullable();
            $table->string('cod_inva')->nullable();
            $table->unsignedBigInteger('grupo_proyecto_id')->nullable();
            $table->foreign('grupo_proyecto_id')->references('id')->on('grupo_proyectos');
            $table->unsignedBigInteger('tipo_proyecto_id')->nullable();
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
