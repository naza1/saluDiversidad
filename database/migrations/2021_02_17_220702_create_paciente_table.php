<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->string('dni', 50);
            $table->string('email', 255);
            $table->string('nroClinica', 50);
            $table->string('direccion', 255);
            $table->string('ciudad', 255);
            $table->string('codigoPostal', 255);
            $table->string('pais', 255);
            $table->string('nacionalidad', 255);
            $table->string('obraSocial', 255);
            $table->string('provincia', 255);
            $table->string('isActive', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
