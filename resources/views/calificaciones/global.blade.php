{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('alumno_id','alumno_id')!!}
   {!!Form::select('alumno_id',$alumno,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('horario_id','Horario')!!}
   {!!Form::select('horario_id',$horario,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('profesor_id','Parcial 1')!!}
   {!!Form::text('parcial1',$calificacion->parcial1,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('nombre','Parcial 2')!!}
   {!!Form::text('parcial2',$calificacion->parcial2,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('parcial2','Parcial 3')!!}
   {!!Form::text('parcial3',$calificacion->parcial3,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('promedio','Promedio')!!}
   {!!Form::text('promedio',$calificacion->promedio,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
