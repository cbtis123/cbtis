@extends('layouts.cabecera')
@section('title','Crear Materia')
@section('content')
  <div class='container'>
    @include('materias.global',['ruta'=>'materias.store','accion'=>'POST','materia'=>$materia])
  </div>
@endsection('content')
