<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinadores', function (Blueprint $table) {
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
          $table->integer('licenciatura_id')->unsigned()->nullable();;
          $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete('cascade');
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
        Schema::dropIfExists('coordinadores');
    }
}
