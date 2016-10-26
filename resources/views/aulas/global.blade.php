{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='group'>
   {!!Form::label('nombre','Nombre')!!}
   {!!Form::text('nombre',$aula->nombre,['class'=>'form-control','placeholder'=>'nombre'])!!}
</div>

<div class='group'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
