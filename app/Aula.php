<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'aulas';
    /*Declarocion de los datos que se pueden editar
    Nombre,Apellido paterno, Apellido materno, Fecha de nacimiento, Curp
    */
    protected $fillabel=['nombre'];

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
   
}
