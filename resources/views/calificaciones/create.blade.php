@extends('layouts.app')
@section('content')
  <div class='container'>
    @include('calificaciones.global',['ruta'=>'calificaciones.create','accion'=>'POST','calificacion'=>$calificacion])
  </div>
@endsection('content')
