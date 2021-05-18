<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->dateTime('Dia')->nullable();
            $table->string('Hora', 255)->nullable();
            $table->string('Medico', 255)->nullable();
            $table->unsignedInteger('paciente_id')->nullable()
            ->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('NombrePaciente', 255)->nullable();
            $table->string('ApellidoPaciente', 255)->nullable();
            $table->string('Lugar', 255)->nullable();
            $table->string('IsActive', 255)->default('1');
            $table->string('dia_horario_pref', 500)->nullable();
            $table->string('Estado', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
}
