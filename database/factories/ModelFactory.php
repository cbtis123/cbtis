<?php

use App\Alumno;
use Faker\Generator;
use App\Profesor;
use App\Tutor;
use App\Grupo;
use App\Horario;
use App\Coordinador;
use App\User;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Fac-tory $factory */

$factory->define(User::class, function(Generator $faker){
	return[
		'name'=>$faker->firstName($gender = 'male'|'female'),
		'email'=>$faker->email,
            'password'=>bcrypt('secret'),
            'type'=> $faker->randomElement($array = array ('Admin','Profesor','Coordinador','Grupo','Administrativo')),
		];

});

$factory->define(Profesor::class, function(Generator $faker){
	return [
		'matricula' =>$faker->numberBetween($min = 60000, $max = 70000),
		'nombre'=> $faker->firstName($gender = 'male'|'female'),
            'fecha_n' => $faker->date($format = 'y-m-d', $max = 'now') ,
            'curp' => $faker->shuffle('ASDF').$faker->shuffle('19823456'),
            'horas' => $faker->numberBetween($min = 8, $max = 10),
            'estado_c' => $faker->randomElement($array = array ('Soltero','Casado')),
            'colonia' => $faker->randomElement($array = array ('Centro','Reforma','San martin','5 senores','Aurora','San Felipe','La noria')),
            'calle' => $faker->randomElement($array = array ('Murgia','Abasolo','Colon','Independencia','Hidalgo','Guerrero','5 de mayo')).' '.$faker->numberBetween($min = 90, $max = 500),
            'cp' => $faker->numberBetween($min = 60000, $max = 70000),
            'telefono_c' =>$faker->tollFreePhoneNumber ,
            'celular' => $faker->tollFreePhoneNumber,
						'user_id'=> $faker->numberBetween($min = 8, $max = 12)
            ];

});


$factory->define(Grupo::class, function(Generator $faker){
      return [
            'nombre' => $faker->randomElement($array = array ('ISC','LA','LD','LP')).'-'.$faker->numberBetween($min = 100, $max =200),
            'licenciatura_id' => $faker->numberBetween($min = 1, $max = 6),
            'cuatrimestre' => $faker->numberBetween($min = 1, $max = 10),
            'turno' => $faker->randomElement($array = array ('Matutino','Vespertino')),
						'user_id'=> $faker->numberBetween($min = 8, $max = 12),
            ];

});

$factory->define(Horario::class, function(Generator $faker){
      return [
            'aula_id' => $faker->numberBetween($min = 1, $max = 10),
            'grupo_id' => '1',
            'materia_id' => $faker->numberBetween($min = 1, $max = 12),
            'profesor_id' => $faker->numberBetween($min = 1, $max = 6),
            'lunes_i' => $faker->time($format = 'H:i:s', $max = 'now'),
            'lunes_f' => $faker->time($format = 'H:i:s', $max = 'now'),
            'martes_i' => $faker->time($format = 'H:i:s', $max = 'now'),
            'martes_f' => $faker->time($format = 'H:i:s', $max = 'now'),
            'miercoles_i' => $faker->time($format = 'H:i:s', $max = 'now'),
            'miercoles_f' => $faker->time($format = 'H:i:s', $max = 'now'),
            'jueves_i' => $faker->time($format = 'H:i:s', $max = 'now'),
            'jueves_f' => $faker->time($format = 'H:i:s', $max = 'now'),
            'viernes_i' => $faker->time($format = 'H:i:s', $max = 'now'),
            'viernes_f' => $faker->time($format = 'H:i:s', $max = 'now')

            ];

});

$factory->define(Alumno::class, function(Generator $faker){
      return [
		'matricula' =>$faker->numberBetween($min = 60000, $max = 70000),
            'nombre' => $faker->firstName($gender = 'male'|'female'),
            'fecha_n' => $faker->date($format = 'y-m-d', $max = 'now') ,
            'curp' => $faker->shuffle('ASDF').$faker->shuffle('19823456'),
            'estado_c' => $faker->randomElement($array = array ('Soltero','Casado')),
            'colonia' => $faker->randomElement($array = array ('Centro','Reforma','San martin','5 senores','Aurora','San Felipe','La noria')),
            'calle' => $faker->randomElement($array = array ('Murgia','Abasolo','Colon','Independencia','Hidalgo','Guerrero','5 de mayo')).' '.$faker->numberBetween($min = 90, $max = 500),
            'cp' => $faker->numberBetween($min = 60000, $max = 70000),
            'telefono_c' =>$faker->tollFreePhoneNumber ,
            'celular' => $faker->tollFreePhoneNumber,
            'licenciatura_id' => $faker->numberBetween($min = 1, $max = 8),
            'cuatrimestre' => $faker->numberBetween($min = 1, $max = 10),
            'grupo_id' => $faker->numberBetween($min = 1, $max = 12)
      ];

});

$factory->define(Tutor::class, function(Generator $faker){
      return [
            'nombre' => $faker->firstName($gender = 'male'|'female'),
            'fecha_n' => $faker->date($format = 'y-m-d', $max = 'now') ,
            'curp' => $faker->shuffle('ASDF').$faker->shuffle('19823456'),
            'estado_c' => $faker->randomElement($array = array ('Soltero','Casado')),
            'colonia' => $faker->randomElement($array = array ('Centro','Reforma','San martin','5 senores','Aurora','San Felipe','La noria')),
            'calle' => $faker->randomElement($array = array ('Murgia','Abasolo','Colon','Independencia','Hidalgo','Guerrero','5 de mayo')).' '.$faker->numberBetween($min = 90, $max = 500),
            'cp' => $faker->numberBetween($min = 60000, $max = 70000),
            'telefono_c' =>$faker->tollFreePhoneNumber ,
            'celular' => $faker->tollFreePhoneNumber,
            'alumno_id'=>$faker->numberBetween($min = 1, $max = 12)
            ];

});

$factory->define(Coordinador::class, function(Generator $faker){
      return [
		'matricula' =>$faker->numberBetween($min = 60000, $max = 70000),
            'nombre' => $faker->firstName($gender = 'male'|'female'),
            'fecha_n' => $faker->date($format = 'y-m-d', $max = 'now') ,
            'curp' => $faker->shuffle('ASDF').$faker->shuffle('19823456'),
            'estado_c' => $faker->randomElement($array = array ('Soltero','Casado')),
            'colonia' => $faker->randomElement($array = array ('Centro','Reforma','San martin','5 senores','Aurora','San Felipe','La noria')),
            'calle' => $faker->randomElement($array = array ('Murgia','Abasolo','Colon','Independencia','Hidalgo','Guerrero','5 de mayo')).' '.$faker->numberBetween($min = 90, $max = 500),
            'cp' => $faker->numberBetween($min = 60000, $max = 70000),
            'telefono_c' =>$faker->tollFreePhoneNumber ,
            'celular' => $faker->tollFreePhoneNumber,
            'licenciatura_id'=>$faker->numberBetween($min = 1, $max = 8),
						'user_id'=> $faker->numberBetween($min = 8, $max = 12),
            ];

});
