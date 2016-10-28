@extends('layouts.cabecera')
@section('content')
  <div class='container'>
    @include('alumnos.global',['ruta'=>'alumnos.store','accion'=>'POST','alumno'=>$alumno])

  </div>
@endsection('content')
