@extends('layouts.cabecera')
@section('content')
<h1>Especialidades</h1>
<div class="conteiner">
<table class="table table-bordered">
  <thead>
    <tr>
      <td>Id</td>
      <td>nombre</td>
    </tr>
  <thead>
  <tbody>
   <a href="{{route('especialidades.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($especialidades as $especialidad)
      <tr>
        <td>{{$especialidad->id}}</td>
        <td>{{$especialidad->nombre}}</td>


        <td>
          <a href="{{route('especialidades.destroy',$especialidad->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
        </td>

        <td>
          <a href="{{route('especialidades.edit',$especialidad)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
