@extends('layouts.cabecera')
@section('title','Crear Licenciatura')
@section('content')
  <div class='container'>
    @include('licenciaturas.global',['ruta'=>'licenciaturas.store','accion'=>'POST','licenciatura'=>$licenciatura])

  </div>
@endsection('content')
