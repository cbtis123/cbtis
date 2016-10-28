@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('horarios.global',['ruta'=>['horario.update',$horario],'accion'=>'PUT','horario'=>$horario])
  </div>
@endsection('content')
