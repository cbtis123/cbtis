<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use App\Http\Requests;
use App\Http\Requests\ProfesorRequest;

class ProfesoresController extends Controller
{
    //
    public function index()
    {
        //Se manda a llamar todas las profesores que existen en la tabla 'profesores' mediante el modelo profesor
        $profesores = Profesor::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo profesor
        return view('profesores.index')->with('profesores',$profesores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo profesor
        $profesor= new Profesor;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo profesor
        return view('profesores.create')->with('profesor',$profesor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfesorRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo profesor y lo rellenamos con los datos que ingresa el usuario
        $profesor = new Profesor($request->all());
        //Mandamos a guaradar la nueva profesor creada
        $profesor->save();
        //mandamos un mensaje de registro exitoso
        flash('Se ha registrado el Profesor '.$profesor->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('profesores.index');
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
        //Buscamos la profesor que queremos modificar con el modelo profesor y con el parametro ID que rescibimos
        $profesor = Profesor::find($id);
        //Mandamos a llamar la vista edit y le mandamos la profesor que extragimos de la base mediante el model profesor
        return view('profesores.edit')->with('profesor',$profesor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfesorRequest $request, $id)
    {
        //Buscamos la profesor que vamos a asignar los nuevos valores con el modelo profesor y find
        $profesor= Profesor::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $profesor->fill($request->all());
        //Guardamos la profesor con los campos ya modificados
        $profesor->save();
        //mostramos un mensaje de registro exitoso
        flash('Se ha actualizado el Profesor '.$profesor->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la profesor que seleccionamos
        Profesor::destroy($id);
      //agrregamos un mensaje de eliminacion exitoso
        flash('Se ha eliminado el Profesor con exito!!','danger');
          //Redireccionamos al index
        return redirect()->route('profesores.index');
    }
}
