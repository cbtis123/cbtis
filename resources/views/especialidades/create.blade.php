@extends('layouts.cabecera')
@section('content')
  <div class='container'>
    @include('especialidades.global',['ruta'=>'especialidades.store','accion'=>'POST','especialidad'=>$especialidad])

  </div>
@endsection('content')
