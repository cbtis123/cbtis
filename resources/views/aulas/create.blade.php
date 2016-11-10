@extends('layouts.cabecera')
@section('title','Crear Aula')
@section('content')
  <div class='container'>
    @include('aulas.global',['ruta'=>'aulas.store','accion'=>'POST','aula'=>$aula])
  </div>
@endsection('content')
