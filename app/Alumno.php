<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /*Declarocion de los datos que se pueden editar
    Nombre,Apellido paterno, Apellido materno, Fecha de nacimiento, Curp
    */
    protected $fillabel=['Nombre','ApellidoP','ApellidoM','FechaN','Curp','EstadoC'];

}
