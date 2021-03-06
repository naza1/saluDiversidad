<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('Nombre', 255);
            $table->string('Apellido', 255);
            $table->string('Dni', 50);
            $table->string('Email', 255);
            $table->string('NroHistorial', 50);
            $table->string('Address', 255);
            $table->string('City', 255);
            $table->string('PostalCode', 255);
            $table->string('Country', 255);
            $table->string('Nationality', 255);
            $table->string('SocialWork', 255);
            $table->string('NroAfiliado', 255);
            $table->string('State', 255);
            $table->string('Genero', 255);
            $table->string('Pronombre', 255);
            $table->string('NivelEducativo', 255);
            $table->string('IsActive', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
