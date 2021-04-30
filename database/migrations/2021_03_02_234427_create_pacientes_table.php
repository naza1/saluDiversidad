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
            $table->string('Nombre', 255)->nullable();
            $table->string('Apellido', 255)->nullable();
            $table->string('Dni', 50)->unique();
            $table->string('Email', 255)->unique();
            $table->string('NroHistorial', 50)->nullable();
            $table->string('Address', 255)->nullable();
            $table->string('City', 255)->nullable();
            $table->string('PostalCode', 255)->nullable();
            $table->string('Country', 255)->nullable();
            $table->string('Nationality', 255)->nullable();
            $table->string('SocialWork', 255)->nullable();
            $table->string('NroAfiliado', 255)->nullable();
            $table->string('State', 255)->nullable();
            $table->string('Genero', 255)->nullable();
            $table->string('Pronombre', 255)->nullable();
            $table->string('NivelEducativo', 255)->nullable();
            $table->string('IsActive')->default('1');
            $table->unsignedInteger('user_id')->nullable()->foreign('user_id')->references('id')->on('users');
            $table->string('FatherUserId', 255)->nullable();
            $table->string('ImageUrl', 255)->nullable();
            $table->string('telefono', 255)->nullable();
            $table->string('FechaNacimiento', 255)->nullable();
            $table->string('telefono_alternativo', 255)->nullable();
            $table->string('tutor', 255)->nullable();
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
