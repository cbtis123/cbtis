@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('horas.global',['ruta'=>['horas.update',$hora],'accion'=>'PUT','hora'=>$hora])
  </div>
@endsection('content')
