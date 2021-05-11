<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentoRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamento__recetas', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('receta_id')->nullable()
                ->foreign('receta_id')->references('id')->on('recetas');
            $table->unsignedInteger('medicamento_id')->nullable()
                ->foreign('medicamento_id')->references('id')->on('medicamentos');
            $table->string('frecuencia', 255)->nullable();
            $table->string('cantidad', 255)->nullable();
            $table->string('comentario', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamento__recetas');
    }
}
