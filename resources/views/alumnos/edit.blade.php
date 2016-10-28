@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('alumnos.global',['ruta'=>['alumnos.update',$alumno],'accion'=>'PUT','alumno'=>$alumno])
  </div>
@endsection('content')
