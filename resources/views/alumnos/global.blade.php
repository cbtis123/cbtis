{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
   {!!Form::label('matricula','Matricula',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('matricula',$alumno->matricula,['class'=>'form-control','placeholder'=>'Escriba la Matricula'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('nombre',$alumno->nombre,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('fecha_n','Fecha de Nacimiento',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::date('fecha_n',$alumno->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('curp','CURP',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('curp',$alumno->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('estado_c','Estado Civil',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('estado_c',['soltero' => 'soltero','casado' => 'casado'],$alumno->estado_c,['class'=>'form-control select-category','placeholder'=>' '])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('colonia','Colonia',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('colonia',$alumno->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('calle','Calle',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('calle',$alumno->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('cp','Codigo Postal',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('cp',$alumno->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('telefono_c','Telefono de Casa',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('telefono_c',$alumno->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('celular','Celular',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('celular',$alumno->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
   </div>
</div>
<!--                       Licenciatura                                 -->
@if($alumno->licenciatura)<!--  Evaluamos si alumno contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('Licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('licenciatura_id',$licenciaturas,$alumno->licenciatura->id,['class'=>'form-control select-category'])!!}
      </div>
   </div>
@else
   <div class='form-group row'>
      {!!Form::label('Licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('licenciatura_id',$licenciaturas,null,['class'=>'form-control select-category','placeholder'=>'Elige licenciatura...'])!!}
      </div>
   </div>
@endif

<div class='form-group row'>
   {!!Form::label('cuatrimestre','cuatrimestre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('cuatrimestre',array('1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$alumno->cuatrimestre,['class'=>'form-control select-category'])!!}
   </div>
</div>

<!--                       Grupo                                 -->
@if($alumno->grupo)<!--  Evaluamos si alumno contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('grupo','Grupo',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('grupo_id',$grupos,$alumno->grupo_id,['class'=>'form-control select-category'])!!}
      </div>
   </div>
@else
   <div class='form-group row'>
   {!!Form::label('grupo','Grupo',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('grupo_id',$grupos,null,['class'=>'form-control select-category','placeholder'=>'Eliga grupo..'])!!}
   </div>
</div>
@endif

<div class='form-group row'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
