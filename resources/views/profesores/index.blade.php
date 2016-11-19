@extends('layouts.cabecera')
@section('title','Profesores')
@section('content')
  <a href="{{route('profesores.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Matricula</td>
          <td>Nombre</td>
          <td>CURP</td>
          <td>Horas</td>
          <td>Estado Civil</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
        @foreach ($profesores as $profesor)
          <tr>
            <td>{{$profesor->matricula}}</td>
            <td>{{$profesor->nombre}}</td>
            <td>{{$profesor->curp}}</td>
            <td>{{$profesor->horas}}</td>
            <td>{{$profesor->estado_c}}</td>

            <td>
              <a href="{{route('profesores.edit',$profesor)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/profesores/','modelo'=>$profesor])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
