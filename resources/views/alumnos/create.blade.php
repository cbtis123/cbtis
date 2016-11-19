@extends('layouts.cabecera')
@section('title','Registrar Alumno')
@section('content')
  <div class='container'>
    @include('alumnos.global',['ruta'=>'alumnos.store','accion'=>'POST','alumno'=>$alumno])

  </div>
@endsection
