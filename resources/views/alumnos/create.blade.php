@extends('layouts.app')
@section('content')
  <div class='container'>
    @include('alumnos.global',['ruta'=>'alumnos.create','accion'=>'POST','alumno'=>$alumno])

  </div>
@endsection('content')
