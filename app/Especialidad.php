<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='especialidades';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['nombre'];

    /*
      Se declara las relaciones que tiene con otras tablas 
    */


     //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
     public function materias(){
     	return $this->belongsToMany(App\Materia);
     }
}
