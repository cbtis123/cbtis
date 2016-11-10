{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
   {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('nombre',$tutor->nombre,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('apellido_p','Apellido_p',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('apellido_p',$tutor->apellido_p,['class'=>'form-control','placeholder'=>'apellido paterno'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('apellido_m','Apellido_m',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('apellido_m',$tutor->apellido_m,['class'=>'form-control','placeholder'=>'apellido materno'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('fecha_n','Fecha_n',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::date('fecha_n',$tutor->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('curp','CURP',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('curp',$tutor->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('estado_c','Estado_c',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('estado_c',$tutor->estado_c,['class'=>'form-control','placeholder'=>'Estado civil'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('colonia','Colonia',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('colonia',$tutor->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('calle','Calle',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('calle',$tutor->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('cp','CP',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('cp',$tutor->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('telefono_c','Telefono_c',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('telefono_c',$tutor->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('celular','Celular',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('celular',$tutor->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
   </div>
</div>
<!--                       Alumno                                 -->
@if($tutor->alumno)<!--  Evaluamos si alumno contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('alumno_id','id_alumno',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('alumno_id',$alumnos,$tutor->alumno->id,['class'=>'form-control'])!!}
      </div>
   </div>
@else
   <div class='form-group row'>
      {!!Form::label('alumno_id','id_alumno',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('alumno_id',$alumnos,null,['class'=>'form-control','placeholder'=>'Elige Alumno...'])!!}
      </div>
   </div>
@endif
<div class='form-group row'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
