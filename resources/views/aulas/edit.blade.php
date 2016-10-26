@extends('layouts.app')
@section('content')
  <div class='container'>
 @include('aulas.global',['ruta'=>['aula.update',$aula],'accion'=>'PUT','aula'=>$aula])
  </div>
@endsection('content')
