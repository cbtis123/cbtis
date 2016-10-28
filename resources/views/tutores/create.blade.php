@extends('layouts.cabecera')
@section('content')
  <div class='container'>
    @include('tutores.global',['ruta'=>'tutores.store','accion'=>'POST','tutor'=>$tutor])

  </div>
@endsection('content')
