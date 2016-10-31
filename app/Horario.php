<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    //Se declara la tabla con la cual va a trabajar el model
		protected $table='horarios';
    /*Declarocion de los datos que se pueden editar
    */
    protected $fillable=['aula_id','grupo_id','materia_id','professor_id','lunes_i','lunes_f','martes_i','martes_f','miercoles_i','miercoles_f','jueves_i','jueves_f','viernes_i','viernes_f'];

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


    //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una materia"
    public function materia(){
    	return $this->belongsTo('App\Materia');
    }

    //Se declara relacion uno a muchos con Horarios "Un horario solo puede tener una profesor"
    public function profesor (){
    	return $this->belongsTo('App\Profesor');
    }

}
