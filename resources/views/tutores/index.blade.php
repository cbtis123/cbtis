@extends('layouts.cabecera')
@section('content')
<h1>Tutores</h1>
<div class="conteiner">
<table class="table table-bordered">
  <thead>
    <tr>
      <td>id</td>
      <td>Nombrembre</td>
      <td>Apellidno P</td>
      <td>Apellido M</td>
      <td>Fecha de Nacimiento</td>
      <td>CURP</td>
      <td>Estado Civil</td>
      <td>Clave_en</td>
      <td>Clave_mn</td>
      <td>Clave_mv</td>
      <td>Clave_lv</td>
      <td>Colonia</td>
      <td>Calle</td>
      <td>CP</td>
      <td>Telefono_C</td>
      <td>Celular</td>
      <td>alumno_id</td>
      <td>Editar</td>
      <td>Eliminar</td>
    </tr>
  <thead>
  <tbody>
   <a href="{{route('tutores.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($tutores as $tutor)
      <tr>
        <td>{{$tutor->id}}</td>
        <td>{{$tutor->nombre}}</td>
        <td>{{$tutor->apellido_p}}</td>
        <td>{{$tutor->apellido_m}}</td>
        <td>{{$tutor->fecha_n}}</td>
        <td>{{$tutor->curp}}</td>
        <td>{{$tutor->estado_c}}</td>
        <td>{{$tutor->clave_en}}</td>
        <td>{{$tutor->clave_mn}}</td>
        <td>{{$tutor->clave_mv}}</td>
        <td>{{$tutor->clave_lv}}</td>
        <td>{{$tutor->colonia}}</td>
        <td>{{$tutor->calle}}</td>
        <td>{{$tutor->cp}}</td>
        <td>{{$tutor->telefono_c}}</td>
        <td>{{$tutor->celular}}</td>
        <td>{{$tutor->alumno_id}}</td>
        <td>
          <a href="{{route('materias.edit',$tutor)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>

       <td>
          @include('layouts.eliminar',['ruta'=>'/tutores/','modelo'=>$tutor])
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
