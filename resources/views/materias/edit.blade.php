@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('materias.global',['ruta'=>['materias.update',$materia],'accion'=>'PUT','materia'=>$materia])
  </div>
@endsection('content')
