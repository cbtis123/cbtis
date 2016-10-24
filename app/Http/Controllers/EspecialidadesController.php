<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Http\Requests;

//Se manda llamar los modelos que vamos a usar en el controlador
use App\Especialidad;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se manda a llamar todas las especialidades que existen en la tabla 'especialidades' mediante el modelo especialidad
        $especialidades = Especialidad::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo Especialidad
        return view('especialidades.index')->with('especialidades',$especialidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo Especialidad
        $especialidad= new Especialidad;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo Especialidad
        return view('especialidades.create')->with('especialidad',$especialidad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creamos un prodcuto nuevo con el modelo Especialidad y lo rellenamos con los datos que ingresa el usuario
        $especialidad = new Especialidad($request->all());
        //Mandamos a guaradar la nueva especialidad creada
        $especialidad->save();
        //Redireccionamos al index
        return redirect()->route('especialidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Buscamos la especialidad que queremos modificar con el modelo Especialidad y con el parametro ID que rescibimos
        $especialidad = Especialidad::find($id);
        //Mandamos a llamar la vista edit y le mandamos la especialidad que extragimos de la base mediante el model Especialidad
        return view('especialidades.edit')->with('especialidad',$especialidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Buscamos la especialidad que vamos a asignar los nuevos valores con el modelo Especialidad y find
        $especialidad= Especialidad::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $especialidad->fill($request->all());
        //Guardamos la especialidad con los campos ya modificados
        $especialidad->save();
        //Redireccionamos al index
        return redirect()->route('especialidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la especialidad que seleccionamos
        Especialidad::destroy($id);
        //Redireccionamos al index
        return redirect()->route('especialidades.index');
    }
}
