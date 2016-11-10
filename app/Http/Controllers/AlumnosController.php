<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Licenciatura;
use App\Grupo;
use App\Http\Requests;
use App\Http\Requests\AlumnoRequest;

class AlumnosController extends Controller
{
    //
    public function index()
    {
        //Se manda a llamar todas las alumnos que existen en la tabla 'alumnos' mediante el modelo alumno
        $alumnos = Alumno::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo alumno
        return view('alumnos.index')->with('alumnos',$alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo alumno
        $licenciaturas= Licenciatura::orderBy('nombre','ASC')->pluck('nombre','id');
        $grupos= Grupo::orderBy('nombre','ASC')->pluck('nombre','id');
        $alumno= new Alumno;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo alumno
        return view('alumnos.create')->with('alumno',$alumno)->with('licenciaturas',$licenciaturas)->with('grupos',$grupos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo alumno y lo rellenamos con los datos que ingresa el usuario
        $alumno = new Alumno($request->all());
        //Mandamos a guaradar la nueva alumno creada
        $alumno->save();
        flash('Se ha registrado el alumno '.$alumno->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('alumnos.index');
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
        $licenciaturas= Licenciatura::orderBy('nombre','ASC')->pluck('nombre','id');
        $grupos= Grupo::orderBy('nombre','ASC')->pluck('nombre','id');
        //Buscamos la alumno que queremos modificar con el modelo alumno y con el parametro ID que rescibimos
        $alumno = Alumno::find($id);
        //Mandamos a llamar la vista edit y le mandamos la alumno que extragimos de la base mediante el model alumno
        return view('alumnos.edit')->with('alumno',$alumno)->with('licenciaturas',$licenciaturas)->with('grupos',$grupos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoRequest $request, $id)
    {
        //Buscamos la alumno que vamos a asignar los nuevos valores con el modelo alumno y find
        $alumno= Alumno::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $alumno->fill($request->all());
        //Guardamos la alumno con los campos ya modificados
        $alumno->save();
        //Redireccionamos al index
        flash('Se ha actualizado el alumno '.$alumno->nombre.' con exito!!','success');
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la alumno que seleccionamos
        Alumno::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado el alumno con exito!!','danger');
        return redirect()->route('alumnos.index');
    }
}
