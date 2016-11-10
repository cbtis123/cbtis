<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use App\Alumno;
use App\Http\Requests;
use App\Http\Requests\TutorRequest;

class TutoresController extends Controller
{
    //
    public function index()
    {
        //Se manda a llamar todas las tutores que existen en la tabla 'tutores' mediante el modelo tutor
        $tutores = Tutor::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo tutor
        return view('tutores.index')->with('tutores',$tutores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos=Alumno::orderBy('nombre','ASC')->pluck('nombre','id');
        //Se crea un objeto vacio del modelo tutor
        $tutor= new Tutor;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo tutor
        return view('tutores.create')->with('tutor',$tutor)->with('alumnos',$alumnos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo tutor y lo rellenamos con los datos que ingresa el usuario
        $tutor = new Tutor($request->all());
        //Mandamos a guaradar la nueva tutor creada
        $tutor->save();
        //mandamos un mensaje de registro exitoso
        flash('Se ha registrado el Tutor '.$tutor->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('tutores.index');
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
        $alumnos=Alumno::orderBy('nombre','ASC')->pluck('nombre','id');
        //Buscamos la tutor que queremos modificar con el modelo tutor y con el parametro ID que rescibimos
        $tutor = Tutor::find($id);
        //Mandamos a llamar la vista edit y le mandamos la tutor que extragimos de la base mediante el model tutor
        return view('tutores.edit')->with('tutor',$tutor)->with('alumnos',$alumnos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TutorRequest $request, $id)
    {
        //Buscamos la tutor que vamos a asignar los nuevos valores con el modelo tutor y find
        $tutor= Tutor::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $tutor->fill($request->all());
        //Guardamos la tutor con los campos ya modificados
        $tutor->save();
        //agregamos un mensaje de registro exitoso
        flash('Se ha actualizado el Tutor '.$tutor->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('tutores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la tutor que seleccionamos
        Tutor::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado el Tutor con exito!!','danger');
        return redirect()->route('tutores.index');
    }
}
