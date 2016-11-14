<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='profesores';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['matricula','nombre','apellido_p','apellido_m','fecha_n','curp','horas','estado_c','clave_en','clave_mn','clave_mv','clave_lv','colonia','calle','cp','telefono_c','celular','user_id'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */

    //Se declara relacion uno a muchos con Calificaciones "Un profesor puede tener muchas calificaciones"
    public function calificaciones(){
        return $this->hasMany('App\Calificacion');
    }


    //Se declara relacion muchos a muchos con Alumnos "Un profesor puede asignar muchas calificaciones"
    public function alumnos(){
        return $this->hasManyThroght('App\Alumno','App\Calificacion');
    }

   //Se declara relacion muchos a muchos con Materias "Un profesor puede impartir muchas materias"
    public function materias(){
        return $this->hasManyThroght('App\Materia','App\Calificacion');
    }

    //Se declara relacion muchos a muchos con Grupos "Un profesor puede dar clases a muchos grupos"
    public function grupos(){
        return $this->hasManyThroght('App\Grupo','App\Calificacion');
    }

    //Se declara relacion uno a muchos con  "Un profesor puede ser tutor de muchos grupos"
    public function ascesorados(){
        return $this->hasMany('App\Grupo');
    }

    //Se declara la relacion uno a uno con Usuario "Un usuario solo puede pertenecer a un grupo"
    public function user(){
       return $this->hasOne('App\User');
    }



}
