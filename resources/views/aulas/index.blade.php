@extends('layouts.cabecera')
@section('content')
<h1>Aulas</h1>
<div class="conteiner">
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
       <a href="{{route('aulas.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($aulas as $aula)
          <tr>
            <td>{{$aula->id}}</td>
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
</div>
@endsection
