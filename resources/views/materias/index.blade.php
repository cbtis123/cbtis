@extends('layouts.cabecera')
@section('content')
<h1>Materias</h1>
<div class="conteiner">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
    <thead>
    <tbody>
     <a href="{{route('materias.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
      @foreach ($materias as $materia)
        <tr>
          <td>{{$materia->id}}</td>
          <td>{{$materia->nombre}}</td>

          <td>
           <a href="{{route('materias.edit',$materia)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
           
          </td>

          <td>
            @include('layouts.eliminar',['materia'=>$materia,'ruta'=>'/materias/'])
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $materias->render() }}
</div>
@endsection
