@extends('layouts.cabecera')
@section('content')
<h1>Aulas</h1>
<div class="conteiner">
<table class="table table-bordered">
  <thead>
    <tr>
      <td>Id</td>
      <td>Nobre</td>
    </tr>
  <thead>
  <tbody>
   <a href="{{route('aulas.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($aulas as $aula)
      <tr>
        <td>{{$aulas->id}}</td>
        <td>{{$aulas->nombre}}</td>

        <td>
          <a href="{{route('aulas.destroy',$aula->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
        </td>

        <td>
          <a href="{{route('aulas.edit',$aula)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
