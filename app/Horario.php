<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'horarios';
    /*Declarocion de los datos que se pueden editar
    */
    protected $fillable=['aula_id','grupo_id','hora_id','materia_id','professor_id'];

    //Se declaran las relaciones

     //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una aula" 
    public function aula(){
    	return $this->belongsTo('App\Aula');
    }

    //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una grupo" 
    public function grupo(){
    	return $this->belongsTo('App\Grupo');
    }

    //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una hora" 
    public function hora(){
    	return $this->belongsTo('App\Hora');
    }

    //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una materia" 
    public function materia(){
    	return $this->belongsTo('App\Materia');
    }

    //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una profesor" 
    public function profesor (){
    	return $this->belongsTo('App\Profesor');
    }

}
