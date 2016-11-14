<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	//Se declara la tabla con la cual va a trabajar el model
	protected $table= 'alumnos';
    /*Declarocion de los datos que se pueden editar
    Nombre,Apellido paterno, Apellido materno, Fecha de nacimiento, Curp
    */
    protected $fillable=['matricula','nombre','apellido_p','apellido_m','fecha_n','curp','estado_c','clave_en','clave_mn','clave_mv','clave_lv','colonia','calle','cp','telefono_c','celular','licenciatura_id','cuatrimestre','grupo_id','status'];

    //Se declara relacion muchos a muchos con materias, llamando al modelo Materia "un alumno puede tener muchas calificaciones"
     public function calificaciones(){
     	return $this->hasMany('App\Calificacion');
     }

     //Se declara la relacion de uno a uno que hay entre el tutor y el alumno "Un alumno solo tiene un tutor"
     public function tutor(){
        return $this->hasOne('App\Tutor');
     }

     //Se declara la realcion que hay con los grupos muchos a muchos "Un alumno puede tener un grupos"
     public function grupo(){
     	return $this->belongsTo('App\Grupo');
     }

     //Se declara la relacion con las especialidades muchos a uno "Un alumno solo puede tener una especialidad"
     public function licenciatura(){
        return $this->belongsTo('App\Licenciatura');
     }

     //Se declara la relacion con los horarios muchos a muchos "Un alumno puede tener muchas horas de clase"
     public function horarios(){
        return $this->hasManyThrought('App\Horario','App\Grupo');
     }

     /*Se declara la relacion del alumno con los profesores "un alunmno puede tener muchos profesores"
     public function profesores{
        return $this->hasManyThrought('App\Profesor','App\Calificacion');
     }
     */

     //Se declara la relacion con las reticulas muchos a uno "Un alumno solo puede tener una reticula"
     public function reticula(){
        return $this->belongsTo('App\Reticula');
     }

}
