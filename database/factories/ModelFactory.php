<?php

use App\Alumno;
use Faker\Generator;
use App\Profesor;
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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Alumno::class, function(Generator $faker){
	return [
			'nombre' => $faker->firstName($gender = 'male'|'female'),
            'apellido_p' => $faker->lastname,
            'apellido_m' => $faker->lastname,
            'fecha_n' => $faker->date($format = 'y-m-d', $max = 'now') ,
            'curp' => $faker->shuffle('ASDF').$faker->shuffle('19823456'),
            'estado_c' => $faker->randomElement($array = array ('Soltero','Casado')),
            'clave_en' => $faker->ean8,
            'clave_mn' => $faker->ean8,
            'clave_mv' => $faker->ean8,
            'clave_lv' => $faker->ean8,
            'colonia' => $faker->randomElement($array = array ('Centro','Reforma','San martin','5 senores','Aurora','San Felipe','La noria')),
            'calle' => $faker->randomElement($array = array ('Murgia','Abasolo','Colon','Independencia','Hidalgo','Guerrero','5 de mayo')).' '.$faker->numberBetween($min = 90, $max = 500),
            'cp' => $faker->numberBetween($min = 60000, $max = 70000),
            'telefono_c' =>$faker->tollFreePhoneNumber ,
            'celular' => $faker->tollFreePhoneNumber,
            'semestre' => $faker->numberBetween($min = 1, $max = 6)
	];
	
});

$factory->define(Profesor::class, function(Generator $faker){
	return [
			'nombre' => $faker->firstName($gender = 'male'|'female'),
            'apellido_p' => $faker->lastname,
            'apellido_m' => $faker->lastname,
            'fecha_n' => $faker->date($format = 'y-m-d', $max = 'now') ,
            'curp' => $faker->shuffle('ASDF').$faker->shuffle('19823456'),
            'horas' => $faker->numberBetween($min = 8, $max = 10),
            'estado_c' => $faker->randomElement($array = array ('Soltero','Casado')),
            'clave_en' => $faker->ean8,
            'clave_mn' => $faker->ean8,
            'clave_mv' => $faker->ean8,
            'clave_lv' => $faker->ean8,
            'colonia' => $faker->randomElement($array = array ('Centro','Reforma','San martin','5 senores','Aurora','San Felipe','La noria')),
            'calle' => $faker->randomElement($array = array ('Murgia','Abasolo','Colon','Independencia','Hidalgo','Guerrero','5 de mayo')).' '.$faker->numberBetween($min = 90, $max = 500),
            'cp' => $faker->numberBetween($min = 60000, $max = 70000),
            'telefono_c' =>$faker->tollFreePhoneNumber ,
            'celular' => $faker->tollFreePhoneNumber
            ];
	
});