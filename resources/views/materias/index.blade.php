@extends('layouts.cabecera')
@section('content')
<h1>Materias</h1>
<div class="conteiner">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Id</td>
        <td>Nobre</td>
      </tr>
    <thead>
    <tbody>
     <a href="{{route('materias.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
      @foreach ($materias as $materia)
        <tr>
          <td>{{$materia->id}}</td>
          <td>{{$materia->nombre}}</td>

          <td>
            <a href="{{route('materias.destroy',$materia->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
          </td>

          <td>
            <a href="{{route('materias.edit',$materia)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
