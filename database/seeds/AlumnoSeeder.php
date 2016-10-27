<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Alumno::class,12)->create();
    }
}
