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
            $table->unsignedBigInteger('estado_admin_id')->nullable();
            $table->foreign('estado_admin_id')->references('id')->on('estados_admin');
            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->string('nombreContrato')->nullable();
            $table->string('contratista')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('nit')->nullable();
            $table->string('sector')->nullable();
            $table->string('k')->nullable();
            $table->string('a')->nullable();
            $table->string('i')->nullable();
            $table->string('u')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('objecto')->nullable();
            $table->string('alcance')->nullable();
            $table->integer('costoContrato')->nullable();
            $table->integer('proyeccion')->nullable();
            $table->string('anticipo')->nullable();
            $table->string('amortizacion')->nullable();
            $table->string('regarantia')->nullable();
            $table->string('director')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->integer('ordenCompra')->nullable();
            $table->integer('noSolped')->nullable();
            $table->integer('retefuente')->nullable();
            $table->integer('reteiva')->nullable();
            $table->integer('reteica')->nullable();
            $table->string('banco')->nullable();
            $table->string('tipoCuenta')->nullable();
            $table->string('noCuenta')->nullable();
            $table->string('tipo_contrato_id')->nullable();
            $table->text('anotaciones')->nullable();
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
