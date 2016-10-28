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
        factory(App\Alumno::class,12)->create();
        factory(App\Profesor::class,12)->create();
    }
}
