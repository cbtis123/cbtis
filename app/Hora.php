<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'horas';
    /*Declarocion de los datos que se pueden editar
    Nombre,Apellido paterno, Apellido materno, Fecha de nacimiento, Curp
    */
    protected $fillabel=['nombre','lunes','martes','miercoles','jueves','viernes'];

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
     
}
