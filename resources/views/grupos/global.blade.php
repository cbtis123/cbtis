{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
  <div class='form-group row'>
    {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::text('nombre',$grupo->nombre,['class'=>'form-control','placeholder'=>'nombre'])!!}
    </div>
  </div>
  <div class='form-group row'>
    {!!Form::label('especialidad_id','especialidad_id',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::select('especialidad_id',$licenciaturas,['class'=>'form-control','placeholder'=>'nombre'])!!}
    </div>
  </div>
  <div class='form-group row'>
    {!!Form::label('profesor_id','profesor_profesor_id',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::select('profesor_id',$profesores,['class'=>'form-control','placeholder'=>'nombre'])!!}
    </div>
  </div>
  <div class='form-group row'>
    {!!Form::label('cuatrimestre','cuatrimestre',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::select('cuatrimestre',array('1' => '1', '2' => '2','3' => '3','4' => '4', '5' => '5', '6' => '6'),$grupo->cuatrimestre,['class'=>'form-control','placeholder'=>'nombre'])!!}
    </div>
  </div>
  <div class='form-group row'>
    {!!Form::label('turno','turno',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::select('turno',array('1' => 'matutino', '2' => 'vespertino'),['class'=>'form-control','placeholder'=>'nombre'])!!}
    </div>  
  </div>

  <div class='form-group row'>
     {!!Form::submit('enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

  </div>
 {!!Form::close()!!}
