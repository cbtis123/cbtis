<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'calificaciones';
    /*Declarocion de los datos que se pueden editar
    Nombre
    */
    protected $fillable=['alumno_id','horario_id','parcial1','parcial2','ordinario','promedio'];


    public function user(){
		return $this->belongsTo('App\User');
	}

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia
	public function alumno(){
		return $this->belongsTo('App\Alumno');
	}

	//Se declara la relacion uno a uno con reticulas "Solo se puede tener una calificaion de una materia por reticula"
	public function reticula(){
		return $this->belongsTo('App\Reticula');
	}

	//Se declara la relacion muchos a uno con horarios "Una calificacion solo puede tener un horario "
	public function horario(){
		return $this->belongsTo('App\Horario');
	}
 }
