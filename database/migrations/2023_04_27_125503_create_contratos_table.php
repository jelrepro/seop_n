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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_admin_id');
            $table->foreign('estado_admin_id')->references('id')->on('estados_admin');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->string('nombreContrato');
            $table->string('contratista');
            $table->text('descripcion');
            $table->integer('nit');
            $table->string('sector');
            $table->string('k');
            $table->string('a');
            $table->string('i');
            $table->string('u');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('objecto');
            $table->string('alcance');
            $table->decimal('costoContrato');
            $table->integer('proyeccion');
            $table->string('anticipo');
            $table->string('amortizacion');
            $table->string('regarantia');
            $table->string('director');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('ordenCompra');
            $table->integer('noSolped');
            $table->integer('retefuente');
            $table->integer('reteiva');
            $table->integer('reteica');
            $table->string('banco');
            $table->string('tipoCuenta');
            $table->string('noCuenta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
