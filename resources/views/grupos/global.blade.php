{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
  <div class='group'>
     {!!Form::label('nombre','Nombre')!!}
     {!!Form::text('nombre',$grupo->nombre,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('especialidad_id','especialidad_id')!!}
     {!!Form::text('especialidad_id',$grupo->especialidad_id,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('profesor_id','profesor_profesor_id')!!}
     {!!Form::text('profesor_id',$grupo->profesor_id,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('semestre','semestre')!!}
     {!!Form::text('semestre',$grupo->semestre,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('turno','turno')!!}
     {!!Form::text('turno',$grupo->turno,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>

  <div class='group'>
     {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

  </div>
 {!!Form::close()!!}
