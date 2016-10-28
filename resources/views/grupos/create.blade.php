@extends('layouts.cabecera')

@section('content')
  <div class='container'>
    @include('grupos.global',['ruta'=>'grupos.store','accion'=>'POST','grupo'=>$grupo])
  </div>
@endsection('content')
