@extends('layouts.cabecera')
@section('content')
<h1>Calificaciones</h1>
<div class="conteiner">
<table  class="table table-bordered table-striped table-hover" id="mi_tabla">
  <thead>
    <tr>
      <td>Id</td>
      <td>Alumno_id</td>
      <td>Materia_id</td>
      <td>Profesor_id</td>
      <td>Parcial 1</td>
      <td>Parcial 2</td>
      <td>Parcial 2</td>
      <td>Parcial 3</td>
      <td>Promedio</td>
    </tr>
  <thead>
  <tbody>
   <a href="{{route('calificaciones.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($calificaciones as $calificacion)
      <tr>
        <td>{{$calificacion->id}}</td>
        <td>{{$calificacion->alumno_id}}</td>
        <td>{{$calificacion->materia_id}}</td>
        <td>{{$calificacion->profesor_id}}</td>
        <td>{{$calificacion->parcial1}}</td>
        <td>{{$calificacion->parcial2}}</td>
        <td>{{$calificacion->parcial3}}</td>
        <td>{{$calificacion->promedio}}</td>

        <td>
          <a href="{{route('calificaciones.destroy',$calificacion->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
        </td>

        <td>
          <a href="{{route('calificaciones.edit',$calificacion)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
