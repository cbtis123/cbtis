{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
   {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('name',$usuario->name,['class'=>'form-control','placeholder'=>'escribe el nombre'])!!}
   </div>
</div>
<div class='form-group row {{ $errors->has('email') ? ' has-error' : '' }}'>
   {!!Form::label('email','Email',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::email('email',$usuario->email,['class'=>'form-control','placeholder'=>'Escriba el email'])!!}
      @if ($errors->has('email'))
           <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
           </span>
      @endif
   </div>
</div>
<div class='form-group row{{ $errors->has('password') ? ' has-error' : '' }}'>
   {!!Form::label('contraseña','Contraseña',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::password('password',null,['class'=>'form-control'])!!}
      @if ($errors->has('password'))
           <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
           </span>
      @endif
   </div>
</div>

<div class='form-group row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}'>
   {!!Form::label('contraseña','Confirmar Contraseña',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::password('password_confirmation',null,['class'=>'form-control'])!!}
      @if ($errors->has('password_confirmation'))
           <span class="help-block">
               <strong>{{ $errors->first('password_confirmation') }}</strong>
           </span>
      @endif
   </div>
</div>

<div class='form-group row {{ $errors->has('type') ? ' has-error' : '' }}'>
   {!!Form::label('Tipo','Tipo',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('type',['Administrativo'=>'Administrativo','Coordinador'=>'Coordinador','Grupo'=>'Grupo','Profesor'=>'Profesor'],$usuario->type,['class'=>'form-control select-category required','placeholder'=>'Elige un tipo de usuario'])!!}
      @if ($errors->has('type'))
           <span class="help-block">
               <strong>{{ $errors->first('type') }}</strong>
           </span>
      @endif
   </div>
</div>

<div class='form-group row'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
