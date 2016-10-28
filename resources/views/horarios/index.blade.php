@extends('layouts.cabecera')
@section('content')
<h1>Horarios</h1>
<div class="conteiner">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Id</td>
        <td>aula_id</td>
        <td>grupo_id</td>
        <td>hora_id</td>
        <td>materia_id</td>
        <td>profesor_id</td>
      </tr>
    <thead>
    <tbody>
     <a href="{{route('horarios.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
      @foreach ($horarios as $horario)
        <tr>

          <td>{{$horario->id}}</td>
          <td>{{$horario->aula_id}}</td>
          <td>{{$horario->grupo_id}}</td>
          <td>{{$horario->hora_id}}</td>
          <td>{{$horario->materia_id}}</td>
          <td>{{$horario->profesor_id}}</td>
          
          <td>
            <a href="{{route('horarios.destroy',$horario->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
          </td>

          <td>
            <a href="{{route('horarios.edit',$horario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
          </td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
