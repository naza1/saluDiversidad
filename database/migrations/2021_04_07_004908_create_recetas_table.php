<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('NombrePaciente', 255)->nullable();
            $table->string('ApellidoPaciente', 255)->nullable();
            $table->string('Dni', 255)->nullable();
            $table->string('Estado', 255)->default('Espera');
            $table->unsignedInteger('paciente_id')->nullable()
                ->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('Recetas', 500)->nullable();
            $table->string('IsDeleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
