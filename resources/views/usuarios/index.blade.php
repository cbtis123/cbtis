@extends('layouts.cabecera')
@section('title','Usuarios')
@section('content')
  <a href="{{route('usuarios.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus">Nuevo</span> </a>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Email</td>
          <td>Tipo</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($usuarios as $usuario)
          <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->type}}</td>

            <td>
              <a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/usuarios/','modelo'=>$usuario])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
