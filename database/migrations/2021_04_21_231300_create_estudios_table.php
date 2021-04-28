<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('IsDeleted')->default(0);
            $table->string('NombrePaciente', 255)->nullable();
            $table->string('ApellidoPaciente', 255)->nullable();
            $table->string('Estado', 255)->default('Espera');
            $table->unsignedInteger('paciente_id')->nullable()
                ->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('Estudios', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudios');
    }
}
