@extends('layouts.cabecera')
@section('title','Crear Horario')
@section('content')
  <div class='container'>
    @include('horarios.global',['ruta'=>'horarios.store','accion'=>'POST','horario'=>$horario])

  </div>
@endsection('content')
