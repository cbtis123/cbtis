<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='grupos';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['nombre','licenciatura_id','profesor_id','cuatrimestre','turno','user_id'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */


     //Se declara relacion uno a muchos con grupos "Un grupo solo puede tener profesor como tutor "
    public function tutor(){
        return $this->belongsTo('App\Profesor');
    }

     //Se declara relacion uno a muchos con grupos "Un grupo solo puede tener una especialidad "
    public function licenciatura(){
        return $this->belongsTo('App\Licenciatura');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchos alumnos"
    public function alumnos(){
        return $this->hasMany('App\Alumno');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchos horarios"
    public function horarios(){
        return $this->hasMany('App\Horario');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchas aulas"
    public function aulas(){
        return $this->hasManyThrought('App\Aula','App\Horario');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchas horas"
    public function horas(){
        return $this->hasManyThrought('App\Hora','App\Horario');
    }

    //Se declara relacion muchos a muchos con Materias "Un grupo puede tener muchas materias"
    public function materias(){
        return $this->hasManyThrought('App\Materia','App\Horario');
    }

    //Se declara relacion muchos a muchos con  Profesores "Un grupo puede tener muchos profesores"
    public function profesores(){
        return $this->hasManyThrought('App\Profesor','App\Horario');
    }

    //Se declara la relacion uno a uno con Usuario "Un usuario solo puede pertenecer a un grupo"
    public function user(){
       return $this->hasOne('App\User');
    }
}
