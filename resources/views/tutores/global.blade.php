{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('nombre','Nombre')!!}
   {!!Form::text('nombre',$tutor->nombre,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('apellido_p','Apellido_p')!!}
   {!!Form::text('apellido_p',$tutor->apellido_p,['class'=>'form-control','placeholder'=>'apellido paterno'])!!}
</div>
<div class='group'>
   {!!Form::label('apellido_m','Apellido_m')!!}
   {!!Form::text('apellido_m',$tutor->apellido_m,['class'=>'form-control','placeholder'=>'apellido materno'])!!}
</div>
<div class='group'>
   {!!Form::label('fecha_n','Fecha_n')!!}
   {!!Form::text('fecha_n',$tutor->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
</div>
<div class='group'>
   {!!Form::label('curp','CURP')!!}
   {!!Form::text('curp',$tutor->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
</div>
<div class='group'>
   {!!Form::label('estado_c','Estado_c')!!}
   {!!Form::text('estado_c',$tutor->estado_c,['class'=>'form-control','placeholder'=>'Estado civil'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_en','Clave_en')!!}
   {!!Form::text('clave_en',$tutor->clave_en,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_mn','Clave_mn')!!}
   {!!Form::text('clave_mn',$tutor->clave_mn,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_mv','Clave_mv')!!}
   {!!Form::text('clave_mv',$tutor->clave_mv,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('Clave_lv','Clave_lv')!!}
   {!!Form::text('clave_lv',$tutor->clave_lv,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('colonia','Colonia')!!}
   {!!Form::text('colonia',$tutor->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
</div>
<div class='group'>
   {!!Form::label('calle','Calle')!!}
   {!!Form::text('calle',$tutor->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
</div>
<div class='group'>
   {!!Form::label('cp','CP')!!}
   {!!Form::text('cp',$tutor->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
</div>
<div class='group'>
   {!!Form::label('telefono_c','Telefono_c')!!}
   {!!Form::text('telefono_c',$tutor->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
</div>
<div class='group'>
   {!!Form::label('celular','Celular')!!}
   {!!Form::text('celular',$tutor->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
</div>
<div class='group'>
   {!!Form::label('alumno_id','id_alumno')!!}
   {!!Form::text('alumno_id',$tutor->alumno_id,['class'=>'form-control','placeholder'=>'Celular'])!!}
</div>
<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
