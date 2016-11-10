{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('nombre','Nombre')!!}
   {!!Form::text('nombre',$coordinador->nombre,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
</div>
<div class='group'>
   {!!Form::label('apellido_p','Apellido Paterno')!!}
   {!!Form::text('apellido_p',$coordinador->apellido_p,['class'=>'form-control','placeholder'=>'apellido paterno'])!!}
</div>
<div class='group'>
   {!!Form::label('apellido_m','Apellido Materno')!!}
   {!!Form::text('apellido_m',$coordinador->apellido_m,['class'=>'form-control','placeholder'=>'apellido materno'])!!}
</div>
<div class='group'>
   {!!Form::label('fecha_n','Fecha de Nacimiento')!!}
   {!!Form::date('fecha_n',$coordinador->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
</div>
<div class='group'>
   {!!Form::label('curp','CURP')!!}
   {!!Form::text('curp',$coordinador->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
</div>
<div class='group'>
   {!!Form::label('estado_c','Estado Civil')!!}
   {!!Form::text('estado_c',$coordinador->estado_c,['class'=>'form-control','placeholder'=>'Estado civil'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_en','Clave_en')!!}
   {!!Form::text('clave_en',$coordinador->clave_en,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_mn','Clave_mn')!!}
   {!!Form::text('clave_mn',$coordinador->clave_mn,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('clave_mv','Clave_mv')!!}
   {!!Form::text('clave_mv',$coordinador->clave_mv,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('Clave_lv','Clave_lv')!!}
   {!!Form::text('clave_lv',$coordinador->clave_lv,['class'=>'form-control','placeholder'=>'clave'])!!}
</div>
<div class='group'>
   {!!Form::label('colonia','Colonia')!!}
   {!!Form::text('colonia',$coordinador->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
</div>
<div class='group'>
   {!!Form::label('calle','Calle')!!}
   {!!Form::text('calle',$coordinador->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
</div>
<div class='group'>
   {!!Form::label('cp','Codigo Postal')!!}
   {!!Form::text('cp',$coordinador->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
</div>
<div class='group'>
   {!!Form::label('telefono_c','Telefono de Casa')!!}
   {!!Form::text('telefono_c',$coordinador->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
</div>
<div class='group'>
   {!!Form::label('celular','Celular')!!}
   {!!Form::text('celular',$coordinador->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
</div>
<div class='group'>
   {!!Form::label('id_especialidad','Especialidades')!!}
   {!!Form::text('id_especialidad',$especialidades,['class'=>'form-control','placeholder'=>'Celular'])!!}
</div>
<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
