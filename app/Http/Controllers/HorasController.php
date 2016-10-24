<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hora;
use App\Http\Requests;

class HorasController extends Controller
{
    public function index()
    {
        //Se manda a llamar todas las horas que existen en la tabla 'horas' mediante el modelo hora
        $horas = Hora::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo hora
        return view('horas.index')->with('horas',$horas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo hora
        $hora= new Hora;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo hora
        return view('horas.create')->with('hora',$hora);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creamos un prodcuto nuevo con el modelo hora y lo rellenamos con los datos que ingresa el usuario
        $hora = new Hora($request->all());
        //Mandamos a guaradar la nueva hora creada
        $hora->save();
        //Redireccionamos al index
        return redirect()->route('horas.index');
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
        //Buscamos la hora que queremos modificar con el modelo hora y con el parametro ID que rescibimos
        $hora = Hora::find($id);
        //Mandamos a llamar la vista edit y le mandamos la hora que extragimos de la base mediante el model hora
        return view('horas.edit')->with('hora',$hora);
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
        //Buscamos la hora que vamos a asignar los nuevos valores con el modelo hora y find
        $hora= Hora::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $hora->fill($request->all());
        //Guardamos la hora con los campos ya modificados
        $hora->save();
        //Redireccionamos al index
        return redirect()->route('horas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la hora que seleccionamos
        Hora::destroy($id);
        //Redireccionamos al index
        return redirect()->route('horas.index');
    }
}
