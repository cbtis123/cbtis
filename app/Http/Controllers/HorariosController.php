<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Aula;
use App\Grupo;
use App\Materia;
use App\Profesor;
use App\Http\Requests;
use App\Http\Requests\HorarioRequest;

class HorariosController extends Controller
{
     public function index()
    {


        //Se manda a llamar todas las horarios que existen en la tabla 'horarios' mediante el modelo horario
        $horarios= Horario::DetalleHorario();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo horario
        return view('horarios.index')->with('horarios',$horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se crea un objeto vacio del modelo horario
        $horario= new Horario;
        $profesores=Profesor::orderBy('nombre','ASC')->pluck('nombre','id');
        $aulas=Aula::orderBy('nombre','ASC')->pluck('nombre','id');
        $materias=Materia::orderBy('nombre','ASC')->pluck('nombre', 'id');
        $grupos=Grupo::orderBy('nombre','ASC')->pluck('nombre','id');
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo horario
        return view('horarios.create')->with('horario',$horario)->with('aula',$aulas)->with('grupo',$grupos)->with('materia',$materias)->with('profesor',$profesores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HorarioRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo horario y lo rellenamos con los datos que ingresa el usuario
        $horario = new Horario($request->all());
        //Mandamos a guaradar la nueva horario creada
        $horario->save();
        //mandamos un mensaje de registro exitoso
        flash('Se ha registrado el Horario '.$horario->id.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('horarios.index');
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
        //Buscamos la horario que queremos modificar con el modelo horario y con el parametro ID que rescibimos
        $horario = Horario::find($id);
        $profesores=Profesor::orderBy('nombre','ASC')->pluck('nombre','id');
        $aulas=Aula::orderBy('nombre','ASC')->pluck('nombre','id');
        $materias=Materia::orderBy('nombre','ASC')->pluck('nombre', 'id');
        $grupos=Grupo::orderBy('nombre','ASC')->pluck('nombre','id');
        //Mandamos a llamar la vista edit y le mandamos la horario que extragimos de la base mediante el model horario
        return view('horarios.edit')->with('horario',$horario)->with('aula',$aulas)->with('grupo',$grupos)->with('materia',$materias)->with('profesor',$profesores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HorarioRequest $request, $id)
    {
        //Buscamos la horario que vamos a asignar los nuevos valores con el modelo horario y find
        $horario= Horario::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $horario->fill($request->all());
        //Guardamos la horario con los campos ya modificados
        $horario->save();
        //Redireccionamos al index
        flash('Se ha actualizado el Horario '.$horario->id.' con exito!!','success');
        return redirect()->route('horarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la horario que seleccionamos
        Horario::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado el Horario con exito!!','danger');
        return redirect()->route('horarios.index');
    }
}
