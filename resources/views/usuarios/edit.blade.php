@extends('layouts.cabecera')
@section('title','Editar Usuario')
@section('content')
  <div class='container'>
 @include('usuarios.global',['ruta'=>['usuarios.update',$usuario],'accion'=>'PUT','usuario'=>$usuario])
  </div>
@endsection