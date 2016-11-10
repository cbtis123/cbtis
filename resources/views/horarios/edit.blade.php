@extends('layouts.cabecera')
@section('title','Editar Horario')
@section('content')
  <div class='container'>
 @include('horarios.global',['ruta'=>['horarios.update',$horario],'accion'=>'PUT','horario'=>$horario])
  </div>
@endsection('content')
