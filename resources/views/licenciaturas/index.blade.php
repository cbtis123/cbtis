@extends('layouts.cabecera')
@section('title','Licenciatura')
@section('content')
  <a href="{{route('licenciaturas.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>nombre</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($licenciaturas as $licenciatura)
          <tr>
            <td>{{$licenciatura->nombre}}</td>
            <td>
              <a href="{{route('licenciaturas.edit',$licenciatura)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/licenciaturas/','modelo'=>$licenciatura])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
