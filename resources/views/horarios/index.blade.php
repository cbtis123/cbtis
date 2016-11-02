@extends('layouts.cabecera')
@section('content')
<h1>Horarios</h1>
<div class="conteiner">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Id</td>
        <td>Aula</td>
        <td>Grupo</td>
        <td>Materia</td>
        <td>Profesor</td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miercoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
    <thead>
    <tbody>
     <a href="{{route('horarios.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
      @foreach($horarios as $horario)
        <tr>

          <td>{{$horario->id}}</td>
          <td>{{$horario->aula}}</td>
          <td>{{$horario->grupo}}</td>
          <td>{{$horario->materia}}</td>
          <td>{{$horario->profesor}}</td>
          <td>{{$horario->lunes_i}} - {{$horario->lunes_f}}</td>
          <td>{{$horario->martes_i}} - {{$horario->martes_f}}</td>
          <td>{{$horario->miercoles_i}} - {{$horario->miercoles_f}}</td>
          <td>{{$horario->jueves_i}} - {{$horario->jueves_f}}</td>
          <td>{{$horario->viernes_i}} - {{$horario->viernes_f}}</td>
          

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
