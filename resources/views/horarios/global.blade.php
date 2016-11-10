{!!Form::open(['route'=>$ruta,'method'=>$accion,'class'=>'form-horizontal']) !!}

<!--                    Grupos                                    -->
@if($horario->grupo)<!--  Evaluamos si horario contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('grupo','Grupo',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('grupo_id',$grupo,$horario->grupo->id,['class'=>'form-control select-category'])!!}
      </div>
   </div>
@else <!--  Como no contiene datos se manda la etiqueta de crear        -->
   <div class='form-group row'>
      {!!Form::label('grupo','Grupo',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('grupo_id',$grupo,null,['class'=>'form-control select-category','placeholder'=>''])!!}
      </div>
   </div>
@endif

<!--                     Aula                           -->
@if($horario->aula)<!--  Evaluamos si horario contiene datos, como contiene datos se manda la etiqueta de editar        -->
<div class='form-group row'>
   {!!Form::label('aulas','Aula',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('aula_id',$aula,$horario->aula->id,['class'=>'form-control select-category'])!!}
   </div>
</div>
@else <!--  En caso de que no contenga datos se manda la etiqueta de crear        -->
   <div class='form-group row'>
      {!!Form::label('aula','Aula',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('aula_id',$aula,null,['class'=>'form-control select-category','placeholder'=>''])!!}
      </div>
   </div>
@endif


<!--  Materias       -->
@if($horario->materia)<!--  Evaluamos si horario contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('materia','Materia',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('materia_id',$materia,$horario->materia->id,['class'=>'form-control select-category'])!!}
      </div>
   </div>
@else<!--  Evaluamos si horario contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('materia','Materia',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('materia_id',$materia,null,['class'=>'form-control select-category','placeholder'=>''])!!}
      </div>
   </div>
@endif

<!--                       Profesores                                 -->
@if($horario->materia)<!--  Evaluamos si horario contiene datos, como contiene datos se manda la etiqueta de editar        -->
<div class='form-group row'>
   {!!Form::label('profesor','Profesor',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('profesor_id',$profesor,$horario->profesor->id,['class'=>'form-control select-category'])!!}
   </div>
</div>
@else<!--  Evaluamos si horario contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
   {!!Form::label('profesor','Profesor',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('profesor_id',$profesor,null,['class'=>'form-control','placeholder'=>''])!!}
   </div>
</div>
@endif


<div class='form-group row'>
   {!!Form::label('lunes','Lunes',['class'=>'control-label col-xs-1'])!!}
   
   <div class="col-xs-2">
      {!!Form::select('lunes_i',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->lunes_i,
         ['class'=>'form-control','placeholder'=>'Hora de inicio'])!!}
         
   </div>
   
   <div class="col-xs-2">  
         
      {!!Form::select('lunes_f',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->lunes_f,['class'=>'form-control','placeholder'=>'Hora que termina'])!!}
   </div>
</div>

<div class='form-group row'>
   {!!Form::label('martes','Martes',['class'=>'control-label col-xs-1'])!!}
   
   <div class="col-xs-2">
      {!!Form::select('martes_i',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->martes_i,
         ['class'=>'form-control','placeholder'=>'Hora de inicio'])!!}
         
   </div>
   
   <div class="col-xs-2">  
         
      {!!Form::select('martes_f',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->martes_f,['class'=>'form-control','placeholder'=>'Hora que termina'])!!}
   </div>
</div>

<div class='form-group row'>
   {!!Form::label('miercoles','Miercoles',['class'=>'control-label col-xs-1'])!!}
   
   <div class="col-xs-2">
      {!!Form::select('miercoles_i',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->miercoles_i,
         ['class'=>'form-control','placeholder'=>'Hora de inicio'])!!}
         
   </div>
   
   <div class="col-xs-2">  
         
      {!!Form::select('miercoles_f',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->miercoles_f,['class'=>'form-control','placeholder'=>'Hora que termina'])!!}
   </div>
</div>

<div class='form-group row'>
   {!!Form::label('jueves','Jueves',['class'=>'control-label col-xs-1'])!!}
   
   <div class="col-xs-2">
      {!!Form::select('jueves_i',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->jueves_i,
         ['class'=>'form-control','placeholder'=>'Hora de inicio'])!!}
         
   </div>
   
   <div class="col-xs-2">  
         
      {!!Form::select('jueves_f',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->jueves_f,['class'=>'form-control','placeholder'=>'Hora que termina'])!!}
   </div>
</div>

<div class='form-group row'>
   {!!Form::label('viernes','Viernes',['class'=>'control-label col-xs-1'])!!}
   
   <div class="col-xs-2">
      {!!Form::select('viernes_i',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->viernes_i,
         ['class'=>'form-control','placeholder'=>'Hora de inicio'])!!}
         
   </div>
   
   <div class="col-xs-2">  
         
      {!!Form::select('viernes_f',[
         '7:00:00'=>'7:00',
         '7:50:00'=>'7:50',
         '8:40:00'=>'8:40',
         '9:30:00'=>'9:30',
         '10:00:00'=>'10:00',
         '10:50:00'=>'10:50',
         '11:40:00'=>'11:40',
         '12:30:00'=>'12:30',
         '13:20:00'=>'13:20',
         '14:00:00'=>'14:00',
         '14:50:00'=>'14:50',
         '15:40:00'=>'15:40',
         '16:30:00'=>'16:30',
         '17:00:00'=>'17:00',
         '17:50:00'=>'17:50',
         '18:40:00'=>'18:40',
         '19:30:00'=>'19:30',
         '20:20:00'=>'20:20'],
         $horario->viernes_f,['class'=>'form-control','placeholder'=>'Hora que termina'])!!}
   </div>
</div>


<div class='form-group'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}
</div>
 {!!Form::close()!!}
