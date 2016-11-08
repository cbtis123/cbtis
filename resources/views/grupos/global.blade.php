{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
  <div class='group'>
     {!!Form::label('nombre','Nombre')!!}
     {!!Form::text('nombre',$grupo->nombre,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('especialidad_id','especialidad_id')!!}
     {!!Form::select('especialidad_id',$especialidades,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('profesor_id','profesor_profesor_id')!!}
     {!!Form::select('profesor_id',$profesores,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('cuatrimestre','cuatrimestre')!!}
     {!!Form::select('cuatrimestre',array('1' => '1', '2' => '2','3' => '3','4' => '4', '5' => '5', '6' => '6'),$grupo->cuatrimestre,['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>
  <div class='group'>
     {!!Form::label('turno','turno')!!}
     {!!Form::select('turno',array('1' => 'matutino', '2' => 'vespertino'),['class'=>'form-control','placeholder'=>'nombre'])!!}
  </div>

  <div class='group'>
     {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

  </div>
 {!!Form::close()!!}
