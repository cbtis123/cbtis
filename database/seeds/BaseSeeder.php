<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	DB::insert('insert into especialidades (nombre) values (?)', ['Mecanica']);
        factory(App\Alumno::class,12)->create();
        factory(App\Profesor::class,12)->create();
    }
}
