@extends('layouts.cabecera')
@section('title','Editar Alumno')
@section('content')
  <div class='container'>
 @include('alumnos.global',['ruta'=>['alumnos.update',$alumno],'accion'=>'PUT','alumno'=>$alumno])
  </div>
@endsection
