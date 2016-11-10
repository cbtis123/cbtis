{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
   {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('nombre',$profesor->nombre,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
   </div>   
</div>
<div class='form-group row'>
   {!!Form::label('apellido_p','Apellido_p',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">   
      {!!Form::text('apellido_p',$profesor->apellido_p,['class'=>'form-control','placeholder'=>'apellido paterno'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('apellido_m','Apellido_m',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('apellido_m',$profesor->apellido_m,['class'=>'form-control','placeholder'=>'apellido materno'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('fecha_n','Fecha_n',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">   
      {!!Form::date('fecha_n',$profesor->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('curp','CURP',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('curp',$profesor->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('horas','Horas',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::number('horas',$profesor->horas,['class'=>'form-control','placeholder'=>'NUM HORAS'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('estado_c','Estado_c',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">   
      {!!Form::select('estado_c',['soltero' => 'Soltero','casado' => 'Casado'],$profesor->esstado_c,['class'=>'form-control select-category','placeholder'=>'Estado civil.. '])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('clave_en','Clave_en',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('clave_en',$profesor->clave_en,['class'=>'form-control','placeholder'=>'clave'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('clave_mn','Clave_mn',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('clave_mn',$profesor->clave_mn,['class'=>'form-control','placeholder'=>'clave'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('clave_mv','Clave_mv',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">   
      {!!Form::text('clave_mv',$profesor->clave_mv,['class'=>'form-control','placeholder'=>'clave'])!!}
   </div>
</div> 
<div class='form-group row'>
   {!!Form::label('Clave_lv','Clave_lv',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">   
      {!!Form::text('clave_lv',$profesor->clave_lv,['class'=>'form-control','placeholder'=>'clave'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('colonia','Colonia',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('colonia',$profesor->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('calle','Calle',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('calle',$profesor->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('cp','CP',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('cp',$profesor->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('telefono_c','Telefono_c',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('telefono_c',$profesor->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('celular','Celular',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('celular',$profesor->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}