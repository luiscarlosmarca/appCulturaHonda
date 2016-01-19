 <div class="col-xs-6">
	<div class="form-group">
		{!!Form::open(['route'=>'admin.matricular.store', 'method' => 'POST']) !!} 
			{!!Form::label('num_doc', 'Id del Aprendiz') !!}
			{!!Form::text('aprendiz_id',null,['class'=>'form-control','placeholder' => 'Escriba el id del aprendiz','requiered']) !!}
	 </div>
	 </div>

	  <div class="col-xs-6">
	<div class="form-group">
			{!!Form::label('num_doc', 'Id del curso') !!}
			{!!Form::text('curso_id',null,['class'=>'form-control','placeholder' => 'Escriba el id del curso','requiered']) !!}
	 </div>
	 </div>
	

