@extends('layouts.cabecera')
@section('content')
<h1 class="tablatitulo" align="center">Materias</h1>
<div class="container">
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Id</td>
          <td>Nobre</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
        <a href="{{route('alumnos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($materias as $materia)
          <tr>
            <td>{{$materia->id}}</td>
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
</div>
@endsection
