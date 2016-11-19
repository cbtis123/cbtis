@extends('layouts.cabecera')
@section('title','Calificaciones')
@section('content')
  <a href="{{route('calificaciones.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Alumno</td>
          <td>Materia</td>
          <td>Parcial 1</td>
          <td>Parcial 2</td>
          <td>Ordinario</td>
          <td>Promedio</td>
          <td>Firma</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($calificaciones as $calificacion)
          <tr>
            <td>{{$calificacion->alumno->nombre}}</td>
            <td>{{$calificacion->horario->materia->nombre}}</td>
            <td>{{$calificacion->parcial1}}</td>
            <td>{{$calificacion->parcial2}}</td>
            <td>{{$calificacion->ordinario}}</td>
            <td>{{$calificacion->promedio}}</td>
            <td>{{$calificacion->user->name}}</td>
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
