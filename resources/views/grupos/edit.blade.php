@extends('layouts.cabecera')
@section('title','Editar Grupo')
@section('content')
  <div class='container'>
 @include('grupos.global',['ruta'=>['grupos.update',$grupo],'accion'=>'PUT','grupo'=>$grupo])
  </div>
@endsection
