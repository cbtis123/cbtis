@extends('layouts.cabecera')
@section('content')
<h1>Licenciaturas</h1>
<div class="conteiner">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Id</td>
          <td>nombre</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
        <a href="{{route('alumnos.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
        @foreach ($licenciaturas as $licenciatura)
          <tr>
            <td>{{$licenciatura->id}}</td>
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
</div>
@endsection
