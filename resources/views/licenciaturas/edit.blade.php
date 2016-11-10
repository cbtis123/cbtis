@extends('layouts.cabecera')
@section('title','Editar Licenciatura')
@section('content')
  <div class='container'>
 @include('licenciaturas.global',['ruta'=>['licenciaturas.update',$licenciatura],'accion'=>'PUT','hora'=>$licenciatura])
  </div>
@endsection('content')
