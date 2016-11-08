{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('nombre','Nombre')!!}
   {!!Form::text('nombre',$alumno->nombre,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('apellido_p','Apellido_m')!!}
   {!!Form::text('apellido_p',$alumno->apellido_p,['class'=>'form-control','placeholder'=>'apellido paterno'])!!}
</div>
<div class='group'>
   {!!Form::label('apellido_m','Apellido_m')!!}
   {!!Form::text('apellido_m',$alumno->apellido_m,['class'=>'form-control','placeholder'=>'apellido materno'])!!}
</div>
<div class='group'>
   {!!Form::label('fecha_n','Fecha_n')!!}
   {!!Form::text('fecha_n',$alumno->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
</div>
<div class='group'>
   {!!Form::label('curp','CURP')!!}
   {!!Form::text('curp',$alumno->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
</div>
<div class='group'>
   {!!Form::label('estado_c','Estado_c')!!}
   {!!Form::text('estado_c',$alumno->estado_c,['class'=>'form-control','placeholder'=>'Estado civil'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_en','Clave_en')!!}
   {!!Form::text('clave_en',$alumno->clave_en,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_mn','Clave_mn')!!}
   {!!Form::text('clave_mn',$alumno->clave_mn,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_mv','Clave_mv')!!}
   {!!Form::text('clave_mv',$alumno->clave_mv,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('Clave_lv','Clave_lv')!!}
   {!!Form::text('clave_lv',$alumno->clave_lv,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('colonia','Colonia')!!}
   {!!Form::text('colonia',$alumno->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
</div>
<div class='group'>
   {!!Form::label('calle','Calle')!!}
   {!!Form::text('calle',$alumno->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
</div>
<div class='group'>
   {!!Form::label('cp','CP')!!}
   {!!Form::text('cp',$alumno->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
</div>
<div class='group'>
   {!!Form::label('telefono_c','Telefono_c')!!}
   {!!Form::text('telefono_c',$alumno->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
</div>
<div class='group'>
   {!!Form::label('celular','Celular')!!}
   {!!Form::text('celular',$alumno->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
</div>
<div class='group'>
   {!!Form::label('celular','especialidad_id')!!}
   {!!Form::select('licenciaturas_id',$licenciaturas,['class'=>'form-control','placeholder'=>'Celular'])!!}
</div>
<div class='group'>
   {!!Form::label('especialidad','semestre')!!}
   {!!Form::select('semestre',array('1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6'),$alumno->semestre,['class'=>'form-control'])!!}
</div>
<div class='group'>
   {!!Form::label('especialidad','grupo_id')!!}
   {!!Form::select('grupo_id',$grupos,['class'=>'form-control','placeholder'=>'Especialidad'])!!}
</div>


<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
