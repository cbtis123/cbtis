@extends('layouts.app')

@section('content')
  <div class='container'>
    @include('grupos.global',['ruta'=>'grupos.create','accion'=>'POST','grupo'=>$grupo])
  </div>
@endsection('content')
