@extends('layouts.cabecera')
@section('content')
<h1>Alumnos</h1>
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
      <td>Especialidad</td>
      <td>Grupo_id</td>
      <td>status</td>
    </tr>
  <thead>
  <tbody>
   <a href="{{route('alumnos.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
    @foreach ($alumnos as $alumno)
      <tr>
        <td>{{$alumno->id}}</td>
        <td>{{$alumno->nombre}}</td>
        <td>{{$alumno->apellido_p}}</td>
        <td>{{$alumno->apellido_m}}</td>
        <td>{{$alumno->fecha_n}}</td>
        <td>{{$alumno->curp}}</td>
        <td>{{$alumno->estado_c}}</td>
        <td>{{$alumno->clave_en}}</td>
        <td>{{$alumno->clave_mn}}</td>
        <td>{{$alumno->clave_mv}}</td>
        <td>{{$alumno->clave_lv}}</td>
        <td>{{$alumno->colonia}}</td>
        <td>{{$alumno->calle}}</td>
        <td>{{$alumno->cp}}</td>
        <td>{{$alumno->telefono_c}}</td>
        <td>{{$alumno->celular}}</td>
        <td>{{$alumno->especialidad_id}}</td>
        <td>{{$alumno->grupo_id}}</td>
        <td>{{$alumno->status}}</td>



        <td>
          <a href="{{route('alumnos.destroy',$alumno->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>
        </td>

        <td>
          <a href="{{route('alumnos.edit',$alumno)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
