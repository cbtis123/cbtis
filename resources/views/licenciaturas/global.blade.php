{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
	{!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
	<div class="col-xs-12 col-md-10">
		{!!Form::text('nombre',$licenciatura->nombre,['class'=>'form-control','placeholder'=>'Nombre'])!!}
	</div>
</div>
<div class='form-group row'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
