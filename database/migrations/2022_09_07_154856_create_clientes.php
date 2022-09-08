<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 255);
            $table->string('apellidos', 255)->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('area')->nullable();
            $table->string('tipo_servicio')->nullable();
            $table->string('plan')->nullable();
            $table->string('tipo_documento', 100)->nullable();
            $table->string('documento', 20)->nullable();
            $table->string('estado')->default('NUEVO');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
