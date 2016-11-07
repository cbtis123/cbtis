@extends('layouts.cabecera')
@section('content')
  <div class='container'>
    @include('licenciaturas.global',['ruta'=>'licenciaturas.store','accion'=>'POST','licenciatura'=>$licenciatura])

  </div>
@endsection('content')
