<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licenciatura extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='licenciaturas';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['nombre'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */


     //Se declara la relacion muchos a muchos con materias "Una especialidad puede tener muchas materias"
     public function materias(){
     	return $this->belongsToMany('App\Materia','especialidad_materia');
     }

     //Se declara la relacion uno a muchos "Una especialidad puede tener muchos alumnos"
     public function alumnos(){
        return $this->hasMany('App\Alumno');
     }
     public function coordinador(){
        return $this->hasOne('App\Coordinador');
     }
    //Se declara la relacion uno a muchos "Una especialidad puede tener muchos grupos"
     public function grupos(){
        return $this->hasMany('App\Grupo');
     }
}
