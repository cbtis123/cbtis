@extends('layouts.cabecera')
@section('title','Grupos')
@section('content')
  <a href="{{route('grupos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Licenciatura</td>
          <td>Cuatrimestre</td>
          <td>Turno</td>
          <td>Editar</td>
          <td>Eliminar</td>

        </tr>
      <thead>
      <tbody>

        @foreach ($grupos as $grupo)
          <tr>
            <td>{{$grupo->nombre}}</td>
            <td>{{$grupo->licenciatura->nombre}}</td>
            <td>{{$grupo->cuatrimestre}}</td>
            <td>{{$grupo->turno}}</td>
            <td>
              <a href="{{route('grupos.edit',$grupo)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/grupos/','modelo'=>$grupo])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
