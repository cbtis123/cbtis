@extends('layouts.app')
@section('content')
  <div class='container'>
    @include('horas.global',['ruta'=>'horas.store','accion'=>'POST','hora'=>$hora])

  </div>
@endsection('content')
