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
          $table->string('matricula');
          $table->string('nombre');
          $table->date('fecha_n');
          $table->string('curp');
          $table->string('estado_c');
          $table->string('colonia');
          $table->string('calle');
          $table->integer('cp');
          $table->string('telefono_c');
          $table->string('celular');
          $table->integer('user_id')->unsigned()->nullable();
          $table->integer('licenciatura_id')->unsigned()->nullable();;
          $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
