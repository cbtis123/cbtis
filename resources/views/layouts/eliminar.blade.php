{!!Form::open(['url'=>$ruta.$materia->id,'method'=>'DELETE']) !!}

	{!! Form::button('<span class="glyphicon glyphicon-remove-circle"></span>',['class'=>'btn btn-danger','type'=>'submit']) !!}

{!! Form::close() !!}