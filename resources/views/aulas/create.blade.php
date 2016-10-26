@extends('layouts.app')
@section('content')
  <div class='container'>
    @include('aulas.global',['ruta'=>'aulas.create','accion'=>'POST','aula'=>$aula])
  </div>
@endsection('content')
