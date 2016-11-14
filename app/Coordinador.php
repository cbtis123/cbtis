<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='coordinadores';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['matricula','nombre','apellido_p','apellido_m','fecha_n','curp','estado_c','clave_en','clave_mn','clave_mv','clave_lv','colonia','calle','cp','telefono_c','celular','licenciatura_id'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */

    //Se declara relacion uno a uno con Licenciatura "Un coordinador solo puede tener una licenciatura"
    public function licenciatura(){
        return $this->belongsTo('App\Licenciatura');
    }

    //Se declara la relacion uno a uno con Usuario "Un coordinador solo puede tener un usuario "
    public function user(){
       return $this->hasOne('App\User');
    }

}
