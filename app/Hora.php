<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'horas';
    /*Declarocion de los datos que se pueden editar
    */
    protected $fillable=['nombre','lunes','martes','miercoles','jueves','viernes'];

     
       //Se declara relacion uno a muchos con Horarios "Una hora puede tener muchos horarios" 
    public function horarios (){
    	return $this->hasMany('App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Horas "Una hora puede tener muchas aulas"
    public function aulas(){
    	return $this->hasManyThrought('App\Hora','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Materias "Una hora puede tener muchas Materias"
    public function materias(){
    	return $this->hasManyThrought('App\Materia','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Grupos "Una hora puede tener muchos grupos"
    public function grupos(){
    	return $this->hasManyThrought('App\Grupo','App\Horario');
    }
}
