<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Genero;

class CreateGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('Nombre', 255);
        });

        $data = [
            ['Nombre'=>'Varon cis'],
            ['Nombre'=>'Mujer cis'],
            ['Nombre'=>'Mujer Trans'],
            ['Nombre'=>'Varon Trans'],
            ['Nombre'=>'Travesti'],
            ['Nombre'=>'No binarie'],
            ['Nombre'=>'fluido'],
            ['Nombre'=>'agénero'],
            ['Nombre'=>'agénero'],
            ['Nombre'=>'otro'],
        ];
        Genero::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generos');
    }
}
