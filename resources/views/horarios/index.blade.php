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
        <td>materia_id</td>
        <td>profesor_id</td>
        <td>lunes_i</td>
        <td>lunes_f</td>
        <td>martes_i</td>
        <td>martes_f</td>
        <td>miercoles_i</td>
        <td>miercoles_f</td>
        <td>jueves_i</td>
        <td>jueves_f</td>
        <td>viernes_i</td>
        <td>viernes_f</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
    <thead>
    <tbody>
     <a href="{{route('horarios.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
      @foreach($horarios as $horario)
        <tr>

          <td>{{$horario->id}}</td>
          <td>{{$horario->aula_id}}</td>
          <td>{{$horario->grupo_id}}</td>
          <td>{{$horario->materia_id}}</td>
          <td>{{$horario->lunes_i}}</td>
          <td>{{$horario->lunes_f}}</td>
          <td>{{$horario->martes_i}}</td>
          <td>{{$horario->martes_f}}</td>
          <td>{{$horario->miercoles_i}}</td>
          <td>{{$horario->miercoles_f}}</td>
          <td>{{$horario->jueves_i}}</td>
          <td>{{$horario->jueves_f}}</td>
          <td>{{$horario->viernes_i}}</td>
          <td>{{$horario->viernes_f}}</td>

          <td>
            <a href="{{route('horarios.edit',$horario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
          </td>

         <td>
            @include('layouts.eliminar',['ruta'=>'/horarios/','modelo'=>$horario])
          </td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
