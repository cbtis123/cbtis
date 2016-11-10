@extends('layouts.cabecera')
@section('content')
<h1>Horas</h1>
<div class="conteiner">
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Id</td>
          <td>Lunes</td>
          <td>Martes</td>
          <td>Miercoles</td>
          <td>Jueves</td>
          <td>Viernes</td>
        </tr>
      <thead>
      <tbody>
        <a href="{{route('alumnos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($horas as $hora)
          <tr>
            <td>{{$hora->id}}</td>
            <td>{{$hora->lunes}}</td>
            <td>{{$hora->martes}}</td>
            <td>{{$hora->miercoles}}</td>
            <td>{{$hora->jueves}}</td>
            <td>{{$hora->viernes}}</td>

            <td>
              <a href="{{route('horas.destroy',$hora->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
            </td>

            <td>
              <a href="{{route('horas.edit',$hora)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
