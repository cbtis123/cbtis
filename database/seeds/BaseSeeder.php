<?php

use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        factory(App\Profesor::class,12)->create();
        factory(App\Grupo::class,12)->create();
        factory(App\Horario::class,8)->create();
        factory(App\Alumno::class,12)->create();
         factory(App\Tutor::class,12)->create();
    }
    
}
