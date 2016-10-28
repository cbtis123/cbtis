@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('especialidades.global',['ruta'=>['especialidades.update',$especialidad],'accion'=>'PUT','hora'=>$especialidad])
  </div>
@endsection('content')
