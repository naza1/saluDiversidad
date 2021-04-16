<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pronombre;

class CreatePronombresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronombres', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('Nombre', 255);
        });

        $data = [
            ['Nombre'=>'Él'],
            ['Nombre'=>'Ella'],
            ['Nombre'=>'Elle'],
            ['Nombre'=>'Otro'],
        ];
        Pronombre::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pronombres');
    }
}
