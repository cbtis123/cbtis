{!!Form::open(['url'=>$ruta.$modelo->id,'method'=>'DELETE']) !!}

	{!! Form::button('<span class="glyphicon glyphicon-remove-circle"></span>',['class'=>'btn btn-danger','type'=>'submit']) !!}

{!! Form::close() !!}