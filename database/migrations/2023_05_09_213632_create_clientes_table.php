<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->integer('cedula')->nullable(); 
            $table->string('telefono')->nullable();
            $table->unsignedBigInteger('vereda_id')->nullable();
            $table->foreign('vereda_id')->references('id')->on('veredas');
            $table->string('x')->nullable();
            $table->string('y')->nullable();
            $table->unsignedBigInteger('tipo_usuario_id')->nullable();
            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
            $table->unsignedBigInteger('estado_usuario_id')->nullable();
            $table->foreign('estado_usuario_id')->references('id')->on('estado_usuarios');
            $table->text('anotaciones')->nullable();
            $table->string('codSello')->nullable();
            $table->string('codMedidor')->nullable();
            $table->string('fechaNacimiento')->nullable();
            $table->text('novedad')->nullable();
            
            $table->timestamps();
        });

        DB::statement('ALTER TABLE clientes AUTO_INCREMENT = 1001;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
