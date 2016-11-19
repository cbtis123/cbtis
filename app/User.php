<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Se declara la relacion uno a uno con Usuario "Un usuario solo puede pertenecer a un grupo"
    public function calificaciones(){
       return $this->hasMany('App\Calificacion');
    }
    public function coordinador(){
       return $this->hasOne('App\Coordinador');
    }
    public function grupo(){
       return $this->hasOne('App\Grupo');
    }
    public function profesor(){
       return $this->hasOne('App\Profesor');
    }


}
