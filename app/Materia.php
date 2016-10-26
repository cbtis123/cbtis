<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'materias';
    /*Declarocion de los datos que se pueden editar
    */
    protected $fillable=['nombre'];

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
     
    
     //Se declara relacion muchos a muchos con Especialidades "Una Materia puede tener muchas especialidades" 
    public function especialidades(){
    	return $this->belongsToMany('App\Aula');
    }

    //Se declara la relacion uno a muchos con horarios "Una materia puede tener muchos horarios"
	public function horarios (){
    	return $this->hasMany('App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Aulas "Una materia puede tener muchas aulas"
    public function aulas(){
    	return $this->hasManyThrought('App\Hora','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Materias "Una materia puede tener muchas Horas"
    public function horas(){
    	return $this->hasManyThrought('App\Hora','App\Horario');
    }

    //Se declara la relacion de muchos a muchos con Grupos "Una materia puede tener muchos grupos"
    public function grupos(){
    	return $this->hasManyThrought('App\Grupo','App\Horario');
    }

    //Se declara la relacion de uno a muchos con Calificaiones "Una materia puede tener muchas calificaciones"
    public function calificaciones(){
    	return $this->hasManyThrought('App\Calificacion','App\Horario');
    }
}
