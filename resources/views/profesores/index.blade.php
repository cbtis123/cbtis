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
          <td>Horas</td>
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
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
       <a href="{{route('profesores.create')}}"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($profesores as $profesor)
          <tr>
            <td>{{$profesor->id}}</td>
            <td>{{$profesor->nombre}}</td>
            <td>{{$profesor->apellido_p}}</td>
            <td>{{$profesor->apellido_m}}</td>
            <td>{{$profesor->fecha_n}}</td>
            <td>{{$profesor->curp}}</td>
            <td>{{$profesor->horas}}</td>
            <td>{{$profesor->estado_c}}</td>
            <td>{{$profesor->clave_en}}</td>
            <td>{{$profesor->clave_mn}}</td>
            <td>{{$profesor->clave_mv}}</td>
            <td>{{$profesor->clave_lv}}</td>
            <td>{{$profesor->colonia}}</td>
            <td>{{$profesor->calle}}</td>
            <td>{{$profesor->cp}}</td>
            <td>{{$profesor->telefono_c}}</td>
            <td>{{$profesor->celular}}</td>

            <td>
              <a href="{{route('profesores.edit',$profesor)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
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
