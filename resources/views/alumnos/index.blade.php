@extends('layouts.cabecera')
@section('content')
<h1>Alumnos</h1>
<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>id</td>
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
       <a href="{{route('alumnos.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->apellido_p}} {{$alumno->apellido_m}} {{$alumno->nombre}}</td>
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
</div>
@endsection
