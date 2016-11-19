<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UsuarioRequest;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Se manda a llamar todas las alumnos que existen en la tabla 'alumnos' mediante el modelo alumno
        $usuarios = User::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo alumno
        return view('usuarios.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuario = new User;
        return view('usuarios.create')->with('usuario',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        //
        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        flash('Se ha registrado el usuario '.$usuario->name.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('usuarios.index');
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
        //Buscamos el usuario que queremos modificar con el modelo user y con el parametro ID que rescibimos
        $usuario = User::find($id);
        //Mandamos a llamar la vista edit y le mandamos la alumno que extragimos de la base mediante el model alumno
        return view('usuarios.edit')->with('usuario',$usuario);
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
        //
        $usuario= User::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $usuario->fill($request->all());
        //Guardamos la alumno con los campos ya modificados
        $usuario->save();
        //Redireccionamos al index
        flash('Se ha actualizado el usuario '.$usuario->name.' con exito!!','success');
        return redirect()->route('usuarios.index');
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
        User::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado el usuario con exito!!','danger');
        return redirect()->route('usuarios.index');
    }
}
