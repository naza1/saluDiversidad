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
            $table->string('Dia', 255)->nullable();
            $table->string('Hora', 255)->nullable();
            $table->string('UserId', 255)->nullable();
            $table->string('PacienteId', 255)->nullable();
            $table->string('IsActive', 255)->default('1');
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
