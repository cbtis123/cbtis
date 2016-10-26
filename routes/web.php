<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tutores','TutoresController');
Route::resource('alumnos','AlumnosController');
Route::resource('calificaciones','CalificacionesController');
Route::resource('materias','MateriasController');
Route::resource('grupos','GruposController');
Route::resource('profesores','ProfesoresController');
Route::resource('aulas','AulasController');
Route::resource('horas','HorasController');
Route::resource('especialidades','EspecialidadesController');

Auth::routes();

Route::get('/home', 'HomeController@index');
