<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'aulas';
    /*Declarocion de los datos que se pueden editar
    Nombre
    */
    protected $fillable=['nombre'];

    //Se declara relacion uno a muchos con Horarios "Una aula puede tener muchos horarios" 
    public function horarios (){
    	return $this->hasMany('App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Horas "Una aula puede tener muchas horas"
    public function horas(){
    	return $this->hasManyThrought('App\Hora','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Materia "Una aula puede tener muchas Materias"
    public function materias(){
    	return $this->hasManyThrought('App\Materia','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Grupos "Una aula puede tener muchos grupos"
    public function grupos(){
    	return $this->hasManyThrought('App\Grupo','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Profesores "Una aula puede tener muchos profesores"
    public function profesores(){
    	return $this->hasManyThrought('App\Profesor','App\Horario');
    }

}
