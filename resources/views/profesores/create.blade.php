@extends('layouts.cabecera')
@section('title','Crear Profesor')
@section('content')
  <div class='container'>
    @include('profesores.global',['ruta'=>'profesores.store','accion'=>'POST','profesor'=>$profesor])

  </div>
@endsection('content')
