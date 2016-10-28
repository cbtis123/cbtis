@extends('layouts.cabecera')
@section('content')
  <div class='container'>
    @include('horarios.global',['ruta'=>'horario.store','accion'=>'POST','horario'=>$horario])

  </div>
@endsection('content')
