@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('tutores.global',['ruta'=>['tutores.update',$tutor],'accion'=>'PUT','tutoor'=>$tutor])
  </div>
@endsection('content')
