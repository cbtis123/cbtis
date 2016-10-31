{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('aula_id','Aulas')!!}
   {!!Form::select('aulas_id',$aula,['class'=>'form-control','placeholder'=>'lunes'])!!}
</div>
<div class='group'>
   {!!Form::label('martes','Grupos')!!}
   {!!Form::select('grupos_id',$grupo,['class'=>'form-control','placeholder'=>'martes'])!!}
</div>
<div class='group'>
   {!!Form::label('miercoles','Horas')!!}
   {!!Form::select('materias_id',$materia,['class'=>'form-control','placeholder'=>'miercoles'])!!}
</div>
<div class='group'>
   {!!Form::label('jueves','Materia')!!}
   {!!Form::select('profesores_id',$profesor,['class'=>'form-control','placeholder'=>'jueves'])!!}
</div>
<div class='group'>
   {!!Form::label('viernes','Profesores')!!}
   {!!Form::text('lunes_i',$horario->lunes_i,['class'=>'form-control','placeholder'=>'viernes'])!!}
</div>
<div class='group'>
   {!!Form::label('lunes','')!!}
   {!!Form::text('lunes_f',$horario->lunes_f,['class'=>'form-control','placeholder'=>'lunes'])!!}
</div>
<div class='group'>
   {!!Form::label('martes','Martes')!!}
   {!!Form::text('martes_i',$horario->martes_i,['class'=>'form-control','placeholder'=>'mmartes'])!!}
</div>
<div class='group'>
   {!!Form::label('miercoles','Miercoles')!!}
   {!!Form::text('martes_f',$horario->martes_f,['class'=>'form-control','placeholder'=>'miercoles'])!!}
</div>
<div class='group'>
   {!!Form::label('jueves','Jueves')!!}
   {!!Form::text('miercoles_i',$horario->miercoles_i,['class'=>'form-control','placeholder'=>'jueves'])!!}
</div>
<div class='group'>
   {!!Form::label('viernes','Profesores')!!}
   {!!Form::text('miercoles_f',$horario->miercoles_f,['class'=>'form-control','placeholder'=>'viernes'])!!}
</div>
<div class='group'>
   {!!Form::label('lunes','')!!}
   {!!Form::text('jueves_i',$horario->jueves_i,['class'=>'form-control','placeholder'=>'lunes'])!!}
</div>
<div class='group'>
   {!!Form::label('martes','Martes')!!}
   {!!Form::text('jueves_f',$horario->jueves_f,['class'=>'form-control','placeholder'=>'mmartes'])!!}
</div>
<div class='group'>
   {!!Form::label('miercoles','Miercoles')!!}
   {!!Form::text('viernes_i',$horario->viernes_i,['class'=>'form-control','placeholder'=>'miercoles'])!!}
</div>
<div class='group'>
   {!!Form::label('miercoles','Miercoles')!!}
   {!!Form::text('viernes_f',$horario->viernes_f,['class'=>'form-control','placeholder'=>'miercoles'])!!}
</div>
<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}
</div>
 {!!Form::close()!!}
