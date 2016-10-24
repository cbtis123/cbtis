<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('especialidad_id')->unsigned();
            $table->enum('semestre',['1','2','3','4','5','6']);
            $table->enum('turno',['matutino','vespertino']);
            $table->foreign('especialidad_id')->references('id')->on('especialidades')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('alumno_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('grupo_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
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
        Schema::dropIfExists('grupos');
        Schema::dropIfExists('alumno_grupos');
    }
}
