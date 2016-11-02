<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('aulas')->insert([
            ['nombre' => 'A1'],
            ['nombre' => 'A2'],
            ['nombre' => 'A3'],
            ['nombre' => 'A4'],
            ['nombre' => 'A5'],
            ['nombre' => 'A6'],
            ['nombre' => 'A7'],
            ['nombre' => 'A8'],
            ['nombre' => 'A9'],
            ['nombre' => 'B1'],
            ['nombre' => 'B2'],
            ['nombre' => 'B3'],
            ['nombre' => 'B4'],
            ['nombre' => 'B5'],
            ['nombre' => 'B6'],
            ['nombre' => 'B7'],
            ['nombre' => 'B8']
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
