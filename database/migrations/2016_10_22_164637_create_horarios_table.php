<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aula_id')->unsigned()->nullable();
            $table->integer('grupo_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->integer('profesor_id')->unsigned()->nullable();
            $table->time('lunes_i')->nullable();
            $table->time('lunes_f')->nullable();
            $table->time('martes_i')->nullable();
            $table->time('martes_f')->nullable();
            $table->time('miercoles_i')->nullable();
            $table->time('miercoles_f')->nullable();
            $table->time('jueves_i')->nullable();
            $table->time('jueves_f')->nullable();
            $table->time('viernes_i')->nullable();
            $table->time('viernes_f')->nullable();

            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
