<div class="container">

 {!!Form::open(['route'=>'admin.cursos.store', 'method' => 'POST']) !!} 
						

	<div class="col-xs-6">
			
								  
			<div class="form-group">

					 <label for="nombre">Nombre del curso</label>
					 <input type="text" name="nombre"class="form-control" id="nombre" placeholder="Digite el nombre del curso">
			 </div>

	<div class="form-group">
			 		{!!Form::label('horario', 'Horario') !!}
					{!!Form::select('tema',config('horario.horario'), null, ['class'=>'form-controlll']) !!}
	 </div>

			<div class="form-group">	

					{!!Form::label('tipo_doc', 'Tema del curso') !!}
					{!!Form::select('tema',config('tema.tema'), null, ['class'=>'form-controlll']) !!}
			 
						 
			</div>

						
										
		<div class="form-group">
					{!!Form::label('num_doc', 'Descripción') !!}
					{!!Form::textarea('descripcion',null,['class'=>'form-controll','placeholder' => 'Escriba la descripcion del curso','requiered']) !!}
	
		</div>	 
		   
	</div>
 	<div class="col-xs-6">
				<img src="/images/logo.png" widht="400" height="200">

	
		<div class="form-group">
					{!!Form::label('instructor', 'Id del Instructor') !!}
					{!!Form::text('instructor_id',null,['class'=>'form-controll','placeholder' => 'Escriba el id del instructor de este curso','requiered']) !!}
		
		</div>		

		<div class="form-group">
					{!!Form::label('Observaciones', 'Observaciones') !!}
					{!!Form::text('observaciones',null,['class'=>'form-controll','placeholder' => 'Alguna observacion (opcional)','requiered']) !!}
	
		</div>	 	 


   </div>

</div>
   			
