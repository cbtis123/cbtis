<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('especialidades')->insert([
    ['nombre' => 'Electromecánica'],
    ['nombre' => 'Mecatrónica'],
    ['nombre' => 'Programación'],
    ['nombre' => 'Mantenimiento Automotriz'],
    ['nombre' => 'Soporte Y Mantenimiento a Equipos de Computo'],
    ['nombre' => 'Administración de Reucursos Humanos'],
    ['nombre' => 'Logística']
]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidades');
    }
}
