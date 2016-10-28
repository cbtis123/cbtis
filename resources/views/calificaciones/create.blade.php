@extends('layouts.cabecera')
@section('content')
  <div class='container'>
    @include('calificaciones.global',['ruta'=>'calificaciones.store','accion'=>'POST','calificacion'=>$calificacion])
  </div>
@endsection('content')
