@extends('layouts.cabecera')
@section('content')
  <div class='container'>
 @include('aulas.global',['ruta'=>['aulas.update',$aula],'accion'=>'PUT','aula'=>$aula])
  </div>
@endsection('content')
