<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciaturasMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenciaturas_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licenciatura_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->enum('cuatrimestre',['1','2','3','4','5','6']);
            $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
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
        Schema::dropIfExists('licenciaturas_materias');
    }
}
