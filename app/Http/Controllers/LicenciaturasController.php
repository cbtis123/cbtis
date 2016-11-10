<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Licenciatura;
use App\Http\Requests;
use App\Http\Requests\LicenciaturaRequest;

//Se manda llamar los modelos que vamos a usar en el controlador


class LicenciaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se manda a llamar todas las licenciaturas que existen en la tabla 'licenciaturas' mediante el modelo licenciatura
        $licenciaturas = Licenciatura::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo Licenciatura
        return view('licenciaturas.index')->with('licenciaturas',$licenciaturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo Licenciatura
        $licenciatura= new Licenciatura;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo Licenciatura
        return view('licenciaturas.create')->with('licenciatura',$licenciatura);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LicenciaturaRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo Licenciatura y lo rellenamos con los datos que ingresa el usuario
        $licenciatura = new Licenciatura($request->all());
        //Mandamos a guaradar la nueva licenciatura creada
        $licenciatura->save();
        //mandamos un mensaje de registro exitoso
        flash('Se ha registrado la Licenciatura '.$licenciatura->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('licenciaturas.index');
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
        //Buscamos la licenciatura que queremos modificar con el modelo Licenciatura y con el parametro ID que rescibimos
        $licenciatura = Licenciatura::find($id);
        //Mandamos a llamar la vista edit y le mandamos la licenciatura que extragimos de la base mediante el model Licenciatura
        return view('licenciaturas.edit')->with('licenciatura',$licenciatura);
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
        //Se declara la validacion
        $this->validate($request, [
            'nombre' => 'required|unique:licenciaturas,nombre,'."$id"
            ]);
        //Buscamos la licenciatura que vamos a asignar los nuevos valores con el modelo Licenciatura y find
        $licenciatura= Licenciatura::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $licenciatura->fill($request->all());
        //Guardamos la licenciatura con los campos ya modificados
        $licenciatura->save();
        //Redireccionamos al index
        flash('Se ha actualizado la Licenciatura '.$licenciatura->nombre.' con exito!!','success');
        return redirect()->route('licenciaturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la licenciatura que seleccionamos
        Licenciatura::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado la Licenciatura con exito!!','danger');
        return redirect()->route('licenciaturas.index');
    }
}
