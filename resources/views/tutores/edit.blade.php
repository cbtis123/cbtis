@extends('layouts.cabecera')
@section('title','Editar Tutor')
@section('content')
  <div class='container'>
 @include('tutores.global',['ruta'=>['tutores.update',$tutor],'accion'=>'PUT','tutor'=>$tutor])
  </div>
@endsection
