@extends('layouts.cabecera')
@section('title','Editar Calificacion')
@section('content')
  <div class='container'>
 @include('calificaciones.global',['ruta'=>['calificaciones.update',$materia],'accion'=>'PUT','calificacion'=>$calificacion])
  </div>
@endsection('content')
