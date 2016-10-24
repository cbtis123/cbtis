<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='especialidades';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillabel=['nombre','apellido_p','apellido_m','fecha_n','Curp','estado_c','clave_en','clave_mn','clave_mv','clave_lv','colonia','calle','cp','telefono_c','celular'];

    /*
      Se declara las relaciones que tiene con otras tablas 
    */


     //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
     public function materias(){
     	return $this->belongsToMany(App\Materia);
     }
}
