@extends('layouts.cabecera')
@section('title','Editar Materia')
@section('content')
  <div class='conteiner'>
 @include('materias.global',['ruta'=>['materias.update',$materia],'accion'=>'PUT','materia'=>$materia])
  </div>
@endsection
