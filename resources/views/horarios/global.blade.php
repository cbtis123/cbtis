{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('lunes','Lunes')!!}
   {!!Form::text('lunes',$horario->aula_id,['class'=>'form-control','placeholder'=>'lunes'])!!}
</div>
<div class='group'>
   {!!Form::label('martes','Martes')!!}
   {!!Form::number('martes',$horario->grupo_id,['class'=>'form-control','placeholder'=>'mmartes'])!!}
</div>
<div class='group'>
   {!!Form::label('miercoles','Miercoles')!!}
   {!!Form::text('miercoles',$horario->horas_id,['class'=>'form-control','placeholder'=>'miercoles'])!!}
</div>
<div class='group'>
   {!!Form::label('jueves','Jueves')!!}
   {!!Form::text('jueves',$horario->materia_id,['class'=>'form-control','placeholder'=>'jueves'])!!}
</div>
<div class='group'>
   {!!Form::label('viernes','Viernes')!!}
   {!!Form::text('viernes',$horario->profesor_id,['class'=>'form-control','placeholder'=>'viernes'])!!}
</div>

<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
