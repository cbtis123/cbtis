<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Coordinador;
use App\Licenciatura;
use App\Http\Requests\CoordinadorRequest;


class CoordinadoresController extends Controller
{
  public function index()
  {
      //Se manda a llamar todas las coordinadores que existen en la tabla 'coordinadores' mediante el modelo coordinador
      $coordinadores = Coordinador::all();
      //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo coordinador
      return view('coordinadores.index')->with('coordinadores',$coordinadores);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $licenciaturas= Licenciatura::orderBy('nombre','ASC')->pluck('nombre','id');
      //Se crea un objeto vacio del modelo coordinador
      $coordinador= new Coordinador;
      //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo coordinador
      return view('coordinadores.create')->with('coordinador',$coordinador)->with('licenciaturas',$licenciaturas);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CoordinadorRequest $request)
  {
      //Creamos un prodcuto nuevo con el modelo coordinador y lo rellenamos con los datos que ingresa el usuario
      $coordinador = new Coordinador($request->all());
      //Mandamos a guaradar la nueva coordinador creada
      $coordinador->save();
      //mandamos un mensaje de registro exitoso
      flash('Se ha registrado el Coordinador '.$coordinador->nombre.' con exito!!','success');
      //Redireccionamos al index
      return redirect()->route('coordinadores.index');
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
      //Buscamos la coordinador que queremos modificar con el modelo coordinador y con el parametro ID que rescibimos
      $coordinador = Coordinador::find($id);
      //Mandamos a llamar la vista edit y le mandamos la coordinador que extragimos de la base mediante el model coordinador
      return view('coordinadores.edit')->with('coordinador',$coordinador)->with('licenciaturas',$licenciaturas);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(CoordinadorRequest $request, $id)
  {
      //Buscamos la coordinador que vamos a asignar los nuevos valores con el modelo coordinador y find
      $coordinador= Coordinador::find($id);
      //Vaciamos los atributos modificados con fill al registro ya existente
      $coordinador->fill($request->all());
      //Guardamos la coordinador con los campos ya modificados
      $coordinador->save();
      //Redireccionamos al index
      flash('Se ha actualizado el Coordinador '.$coordinador->nombre.' con exito!!','success');
      return redirect()->route('coordinadores.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //Buscamos y eliminaos la coordinador que seleccionamos
      Coordinador::destroy($id);
      //Redireccionamos al index
      flash('Se ha eliminado el Coordinador con exito!!','danger');
      return redirect()->route('coordinadores.index');
  }
}
