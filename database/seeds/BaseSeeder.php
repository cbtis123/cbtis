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
        factory(App\User::class,12)->create();
        factory(App\Profesor::class,12)->create();
        factory(App\Grupo::class,12)->create();
        factory(App\Horario::class,8)->create();
        factory(App\Alumno::class,18)->create();
        factory(App\Tutor::class,12)->create();
        factory(App\Coordinador::class,9)->create();
    }

}
