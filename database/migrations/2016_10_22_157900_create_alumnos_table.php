<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->date('fecha_n');
            $table->string('curp');
            $table->string('estado_c');
            $table->integer('clave_en');
            $table->integer('clave_mn');
            $table->integer('clave_mv');
            $table->integer('clave_lv');
            $table->string('colonia');
            $table->string('calle');
            $table->integer('cp');
            $table->string('telefono_c');
            $table->string('celular');
            $table->integer('especialidad_id')->unsigned()->nullable();
            $table->enum('semestre',['1','2','3','4','5','6']);
            $table->integer('grupo_id')->unsigned()->nullable();
            $table->enum('status',['regular','resagado'])->default('regular');

            $table->foreign('especialidad_id')->references('id')->on('especialidades')->onDelete('cascade');
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
        Schema::dropIfExists('alumnos');
    }
}
