@extends('layouts.cabecera')
@section('content')
<h1>Profesores</h1>
<div class="conteiner">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
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
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
        <a href="{{route('alumnos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($coordinadores as $coordinador)
          <tr>
            <td>{{$coordinador->id}}</td>
            <td>{{$coordinador->nombre}}</td>
            <td>{{$coordinador->apellido_p}}</td>
            <td>{{$coordinador->apellido_m}}</td>
            <td>{{$coordinador->fecha_n}}</td>
            <td>{{$coordinador->curp}}</td>
            <td>{{$coordinador->estado_c}}</td>
            <td>{{$coordinador->clave_en}}</td>
            <td>{{$coordinador->clave_mn}}</td>
            <td>{{$coordinador->clave_mv}}</td>
            <td>{{$coordinador->clave_lv}}</td>
            <td>{{$coordinador->colonia}}</td>
            <td>{{$coordinador->calle}}</td>
            <td>{{$coordinador->cp}}</td>
            <td>{{$coordinador->telefono_c}}</td>
            <td>{{$coordinador->celular}}</td>
            <td>{{$coordinador->licenciatura_id}}</td>

            <td>
              <a href="{{route('coordinadores.edit',$coordinador)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/coordinadores/','modelo'=>$coordinador])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
