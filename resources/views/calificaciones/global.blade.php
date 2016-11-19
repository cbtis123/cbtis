{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('alumno_id','Alumno')!!}
   {!!Form::select('alumno_id',$alumno,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('materia','Materia')!!}
   {!!Form::select('horario_id',$horario,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('Parcial 1','Parcial 1')!!}
   {!!Form::text('parcial1',$calificacion->parcial1,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('Parcial 2','Parcial 2')!!}
   {!!Form::text('parcial2',$calificacion->parcial2,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('ordinario','Ordinario')!!}
   {!!Form::text('ordinario',$calificacion->ordinario,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('promedio','Promedio')!!}
   {!!Form::text('promedio',$calificacion->promedio,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
