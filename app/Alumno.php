<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	//Se declara la tabla con la cual va a trabajar el model
	protected $table= 'alumonos';
    /*Declarocion de los datos que se pueden editar
    Nombre,Apellido paterno, Apellido materno, Fecha de nacimiento, Curp
    */
    protected $fillabel=['nombre','apellido_p','apellido_m','fecha_n','Curp','estado_c','clave_en','clave_mn','clave_mv','clave_lv','colonia','calle','cp','telefono_c','celular','semestre','turno'];

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
     public function calificaciones(){
     	return $this->belongsToMany(App\Calificacion);
     }
     public function grupos(){
     	return $this->belongsToMany(App\Grupo);
     }

}
