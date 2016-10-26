{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('alumno_id','alumno_id')!!}
   {!!Form::text('alumno_id',$calificacion->alumno_id,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('materia_id','materia_id')!!}
   {!!Form::text('materia_id',$calificacion->materia_id,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('profesor_id','profesor_id')!!}
   {!!Form::text('profesor_id',$calificacion->profesor_id,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('nombre','Nombre')!!}
   {!!Form::text('parcial1',$calificacion->parcial1,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('parcial2','Parcial 2')!!}
   {!!Form::text('parcial2',$calificacion->parcial2,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('parcial3','Parcial 3')!!}
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
