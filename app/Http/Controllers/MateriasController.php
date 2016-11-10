<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Http\Requests;
use App\Http\Requests\MateriaRequest;

class MateriasController extends Controller
{
    public function index()
    {
        //Se manda a llamar todas las materias que existen en la tabla 'materias' mediante el modelo materia
        $materias = Materia::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo materia
        return view('materias.index')->with('materias',$materias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo materia
        $materia= new Materia;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo materia
        return view('materias.create')->with('materia',$materia);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriaRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo materia y lo rellenamos con los datos que ingresa el usuario
        $materia = new Materia($request->all());
        //Mandamos a guaradar la nueva materia creada
        $materia->save();
        //Mandamos un mensaje de registro exitoso
        flash('Se ha registrado la Materia '.$materia->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('materias.index');
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
        //Buscamos la materia que queremos modificar con el modelo materia y con el parametro ID que rescibimos
        $materia = materia::find($id);
        //Mandamos a llamar la vista edit y le mandamos la materia que extragimos de la base mediante el model materia
        return view('materias.edit')->with('materia',$materia);
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
        //Declaramos las validaciones
        $this->validate($request, [
            'nombre' => 'required|unique:materias,nombre,'."$id"
            ]);

        //Buscamos la materia que vamos a asignar los nuevos valores con el modelo materia y find
        $materia= Materia::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $materia->fill($request->all());
        //Guardamos la materia con los campos ya modificados
        $materia->save();
        //mostramos un mensaje de registro exitoso
        flash('Se ha actualizado la Materia '.$materia->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la materia que seleccionamos
        Materia::destroy($id);
        //Redireccionamos al index
         flash('Se ha eliminado la Materia con exito!!','danger');
        return redirect()->route('materias.index');
    }
}
