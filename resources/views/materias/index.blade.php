@extends('layouts.cabecera')
@section('title','Materias')
@section('content')
  <a href="{{route('materias.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Nobre</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
        @foreach ($materias as $materia)
          <tr>
            <td>{{$materia->nombre}}</td>

            <td>
              <a href="{{route('materias.edit',$materia)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/materias/','modelo'=>$materia])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
