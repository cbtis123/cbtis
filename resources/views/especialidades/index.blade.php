@extends('layouts.cabecera')
@section('content')
<h1>Especialidades</h1>
<div class="conteiner">
<table class="table table-bordered">
  <thead>
    <tr>
      <td>Id</td>
      <td>nombre</td>
      <td>Editar</td>
      <td>Eliminar</td>
    </tr>
  <thead>
  <tbody>
   <a href="{{route('especialidades.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($especialidades as $especialidad)
      <tr>
        <td>{{$especialidad->id}}</td>
        <td>{{$especialidad->nombre}}</td>


        <td>
          <a href="{{route('materias.edit',$especialidad)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>

       <td>
          @include('layouts.eliminar',['ruta'=>'/especialidades/','modelo'=>$especialidad])
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
