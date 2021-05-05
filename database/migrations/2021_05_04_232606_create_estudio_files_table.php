<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudioFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio_files', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('path', 255);
            $table->string('name',255);
            $table->unsignedInteger('paciente_id')->nullable()
                ->foreign('paciente_id')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudio_files');
    }
}
