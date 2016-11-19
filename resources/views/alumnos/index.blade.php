@extends('layouts.cabecera')
@section('title','Alumnos')
@section('content')
  <a href="{{route('alumnos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Matricula</td>
          <td>Nombre</td>
          <td>cuatrimestre</td>
          <td>Grupo</td>
          <td>Licenciatura</td>
          <td>status</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->matricula}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->cuatrimestre}}</td>
            <td>{{$alumno->grupo->nombre}}</td>
            <td>{{$alumno->licenciatura->nombre}}</td>
            <td>{{$alumno->status}}</td>

            <td>
              <a href="{{route('alumnos.edit',$alumno)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/alumnos/','modelo'=>$alumno])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
