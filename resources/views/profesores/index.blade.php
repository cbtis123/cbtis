@extends('layouts.cabecera')
@section('content')
<h1>Profesores</h1>
<div class="conteiner">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>id</td>
          <td>Nombre</td>
          <td>CURP</td>
          <td>Horas</td>
          <td>Estado Civil</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
       <a href="{{route('profesores.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($profesores as $profesor)
          <tr>
            <td>{{$profesor->id}}</td>
            <td>{{$profesor->nombre}} {{$profesor->apellido_p}}} {{$profesor->apellido_m}}}</td>
            <td>{{$profesor->curp}}</td>
            <td>{{$profesor->horas}}</td>
            <td>{{$profesor->estado_c}}</td>

            <td>
              <a href="{{route('materias.edit',$profesor)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/profesores/','modelo'=>$profesor])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
