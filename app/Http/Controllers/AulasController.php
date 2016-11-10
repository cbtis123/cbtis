<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;
use App\Http\Requests;
use App\Http\Requests\AulaRequest;

class AulasController extends Controller
{
    public function index()
    {
        //Se manda a llamar todas las aulas que existen en la tabla 'aulas' mediante el modelo aula
        $aulas = Aula::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo aula
        return view('aulas.index')->with('aulas',$aulas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo aula
        $aula= new Aula;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo aula
        return view('aulas.create')->with('aula',$aula);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AulaRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo aula y lo rellenamos con los datos que ingresa el usuario
        $aula = new Aula($request->all());
        //Mandamos a guaradar la nueva aula creada
        $aula->save();
        //Mandamos un mensaje de registro exitoso
        flash('Se ha registrado el aula '.$aula->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('aulas.index');
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
        //Buscamos la aula que queremos modificar con el modelo aula y con el parametro ID que rescibimos
        $aula = Aula::find($id);
        //Mandamos a llamar la vista edit y le mandamos la aula que extragimos de la base mediante el model aula
        return view('aulas.edit')->with('aula',$aula);
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
            'nombre' => 'required|unique:aulas,nombre,'."$id"
            ]);
        //Buscamos la aula que vamos a asignar los nuevos valores con el modelo aula y find
        $aula= Aula::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $aula->fill($request->all());
        //Guardamos la aula con los campos ya modificados
        $aula->save();
        //Redireccionamos al index
        flash('Se ha actualizado el aula '.$aula->nombre.' con exito!!','success');
        return redirect()->route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la aula que seleccionamos
        Aula::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado el aula con exito!!','danger');
        return redirect()->route('aulas.index');
    }
}
