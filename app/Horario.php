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
    protected $fillable=['aula_id','grupo_id','materia_id','profesor_id','lunes_i','lunes_f','martes_i','martes_f','miercoles_i','miercoles_f','jueves_i','jueves_f','viernes_i','viernes_f'];

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

		//Se declara la relacion muchos a uno con horarios "Una calificacion solo puede tener un horario "
		public function calificaciones(){
			return $this->hasMany('App\Calificacion');
		}

    public static function DetalleHorario(){
        $horarios = Horario::join('aulas','aulas.id','=','horarios.aula_id')
        ->join('grupos','grupos.id','=','horarios.grupo_id')
        ->join('materias','materias.id','=','horarios.materia_id')
        ->join('profesores','profesores.id','=','horarios.profesor_id')
        ->get([
            'horarios.id',
            'aulas.nombre as aula',
            'grupos.nombre as grupo',
            'materias.nombre as materia',
            'profesores.nombre as profesor',
            'horarios.lunes_i',
            'horarios.lunes_f',
            'horarios.martes_i',
            'horarios.martes_f',
            'horarios.miercoles_i',
            'horarios.miercoles_f',
            'horarios.jueves_i',
            'horarios.jueves_f',
            'horarios.viernes_i',
            'horarios.viernes_f',
            ]);
        return $horarios;
    }

    public static function MateriaHorario(){
        $horarios = Horario::join('aulas','aulas.id','=','horarios.aula_id')
        ->join('grupos','grupos.id','=','horarios.grupo_id')
        ->join('materias','materias.id','=','horarios.materia_id')
        ->join('profesores','profesores.id','=','horarios.profesor_id')
        ->orderBy('id','ASC')
        ->get([
            'horarios.id',
            'aulas.nombre as aula',
            'grupos.nombre as grupo',
            'materias.nombre as materia',
            'profesores.nombre as profesor',
            'horarios.lunes_i',
            'horarios.lunes_f',
            'horarios.martes_i',
            'horarios.martes_f',
            'horarios.miercoles_i',
            'horarios.miercoles_f',
            'horarios.jueves_i',
            'horarios.jueves_f',
            'horarios.viernes_i',
            'horarios.viernes_f',
            ])
        ->pluck('materia','id');
        return $horarios;
    }
}
