<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenciaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('licenciaturas')->insert([
    ['nombre' => 'Psicología'],
    ['nombre' => 'Pedagogía'],
    ['nombre' => 'Ciencias y Técnicas de la Comunicación'],
    ['nombre' => 'Ingenieria en Sistemas Computacionales'],
    ['nombre' => 'Derecho'],
    ['nombre' => 'Contaduría Publica y Gestión Empresarial'],
    ['nombre' => 'Administración'],
    ['nombre' => 'Historia']
]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenciaturas');
    }
}
