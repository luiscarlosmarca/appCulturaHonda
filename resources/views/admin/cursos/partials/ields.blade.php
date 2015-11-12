
 	  <div class="container">
 {!!Form::open(['route'=>'admin.aprendices.store', 'method' => 'POST']) !!} 
			
   <div class="container">

		  <div class="form-group">
		    <label for="nombres">Nombre del curso</label>
		    <input type="text" name="nombre"class="form-controll" id="nombre" placeholder="Escriba el nombre">
		  </div>

			<div class="form-group">
			{!!Form::label('curso', 'curso') !!}
			{!!Form::text('id_curso',null,['class'=>'form-controll','placeholder' => 'Escriba el ID del curso','requiered']) !!}
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
	 
