 	  

	{!!Form::open(['route'=>'admin.instructores.store', 'method' => 'POST']) !!} 
			
   <div class="container">

		  <div class="form-group">
		    <label for="nombres">Nombre del curso</label>
		    <input type="text" name="nombre"class="form-controll" id="nombre" placeholder="Escriba el nombre">
		  </div>

			<div class="form-group">
			{!!Form::label('instructor', 'Instructor') !!}
			{!!Form::text('id_instructor',null,['class'=>'form-controll','placeholder' => 'Escriba el ID del instructor','requiered']) !!}
	 </div>


			<div class="form-group">	
					{!!Form::label('tipo_doc', 'Tema del curso') !!}
					{!!Form::select('tema',config('tema.tema'), null, ['class'=>'form-controlll']) !!}
			 
			</div>

			<div class="form-group">
{!!Form::label('num_doc', 'Descripción') !!}
			{!!Form::textarea('descripcion',null,['class'=>'form-controll','placeholder' => 'Escriba la descripcion del curso','requiered']) !!}
	
		    </div>


	<div class="form-group">
			{!!Form::label('horario', 'Horario') !!}
			{!!Form::text('horario',null,['class'=>'form-controll','placeholder' => 'Escriba el horario estimado	','requiered']) !!}
	 </div>

	 </div>h
	 
