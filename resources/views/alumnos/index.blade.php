@extends('layouts.cabecera')
@section('content')
<h1>Alumnos</h1>
<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>id</td>
          <td>Nombre</td>
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
          <td>Semestre</td>
          <td>status</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
       <a href="{{route('alumnos.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->apellido_p}} {{$alumno->apellido_m}} {{$alumno->nombre}}</td>
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
            <td>{{$alumno->semestre}}</td>
            <td>{{$alumno->status}}</td>

            <td>
              <a href="{{route('alumnos.edit',$alumno)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/alumnos/','modelo'=>$alumno])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>  
</div>
@endsection
