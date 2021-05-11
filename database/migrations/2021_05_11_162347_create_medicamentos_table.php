<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Medicamento;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->timestamps();
            $table->string('nombre', 255)->nullable();
        });

        $data = [
            ['nombre'=>'Acetato de triptorelina - ampolla inyectable 11.25 mg-kit'],
            ['nombre'=>'Acetato de triptorelina - ampolla inyectable 3,75 mg-kit'],
            ['nombre'=>'Finasteride - comprimidos 5 mg'],
            ['nombre'=>'Acetato de ciproterona - comprimido 50 mg'],
            ['nombre'=>'Estradiol cápsulas/comprimidos 2 mg'],
            ['nombre'=>'Estradiol gel 0,06% - envase x 80 grs'],
            ['nombre'=>'Testosterona gel 1% - envase por 150 grs'],
            ['nombre'=>'Undecanoato de testosterona - ampolla 1000 mg/4ml'],
            ['nombre'=>'Espironolactona - comprimidos 100 mg'],
        ];
        Medicamento::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
