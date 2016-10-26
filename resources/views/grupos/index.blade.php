@extends('layouts.cabecera')
@section('content')
<h1>Grupos</h1>
<div class="conteiner">
<table class="table table-bordered">
  <thead>
    <tr>
      <td>Id</td>
      <td>Nombre</td>
      <td>especialidad_id</td>
      <td>profesor_id</td>
      <td>semestre</td>
      <td>Turno</td>

    </tr>
  <thead>
  <tbody>
   <a href="{{route('grupos.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($grupos as $grupo)
      <tr>
        <td>{{$grupo->id}}</td>
        <td>{{$grupo->nombre}}</td>
        <td>{{$grupo->especialidad_id}}</td>
        <td>{{$grupo->profesor_id}}</td>
        <td>{{$grupo->semestre}}</td>
        <td>{{$grupo->turno}}</td>
        <td>
          <a href="{{route('grupos.destroy',$grupo->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
        </td>

        <td>
          <a href="{{route('grupos.edit',$grupo)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
