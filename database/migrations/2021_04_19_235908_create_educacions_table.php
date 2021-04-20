<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Educacion;

class CreateEducacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educacions', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('Nombre', 255);
        });

        $data = [
            ['Nombre'=>'Primaria incompleta'],
            ['Nombre'=>'Primaria en curso'],
            ['Nombre'=>'Primaria completa'],
            ['Nombre'=>'Secundario incompleto'],
            ['Nombre'=>'Secundario en curso'],
            ['Nombre'=>'Secundario completo'],
            ['Nombre'=>'Universitario incompleto'],
            ['Nombre'=>'Universitario en curso'],
            ['Nombre'=>'Universitario completo'],
            ['Nombre'=>'Posgrado incompleto'],
            ['Nombre'=>'Posgrado en curso'],
            ['Nombre'=>' Posgrado completo'],
        ];
        Educacion::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educacions');
    }
}
