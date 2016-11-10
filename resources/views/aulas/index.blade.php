@extends('layouts.cabecera')
@section('title','Aulas')
@section('content')
  <a href="{{route('aulas.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
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

        @foreach ($aulas as $aula)
          <tr>
            <td>{{$aula->nombre}}</td>

            <td>
              <a href="{{route('aulas.edit',$aula)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/aulas/','modelo'=>$aula])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
