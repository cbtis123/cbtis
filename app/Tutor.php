<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='tutores';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['nombre','apellido_p','apellido_m','fecha_n','curp','estado_c','clave_en','clave_mn','clave_mv','clave_lv','colonia','calle','cp','telefono_c','celular','alumno_id'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */

      public function alumno(){
        return $this->belongsTo('App\Alumno');
     }
     //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia

}
