@extends('layouts.cabecera')
@section('title','Crear Calificacion')
@section('content')
  <div class='container'>
    @include('calificaciones.global',['ruta'=>'calificaciones.store','accion'=>'POST','calificacion'=>$calificacion])
  </div>
@endsection
