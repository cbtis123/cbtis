@extends('layouts.app')
@section('content')
  <div class='container'>
 @include('alumnos.global',['ruta'=>['alumnos.update',$alumnos],'accion'=>'PUT','alumno'=>$alumno])
  </div>
@endsection('content')
