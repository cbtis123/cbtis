@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('profesores.global',['ruta'=>['profesores.update',$profesor],'accion'=>'PUT','profesor'=>$profesor])
  </div>
@endsection('content')
