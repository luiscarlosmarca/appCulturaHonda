<div class="container">

   {!!Form::open(['route'=>'admin.instructores.store', 'method' => 'POST']) !!} 
					
	<div class="col-xs-6">

			 <div class="form-group">

					 <label for="nombres">Nombres</label>
					  <input type="text" name="nombre"class="form-control" id="nombre" placeholder="Digite sus nombres">
			 </div>

						
			<div class="form-group">
					  <label for="apellido">Apellidos</label>
					  <input type="text" name="apellido"class="form-control" id="apellido" placeholder="Digite sus apellidos">
					 
			 </div>

		

					
			<div class="form-group">
			   			{!!Form::label('num_doc', 'Numero de Documento') !!}
						{!!Form::text('numDoc',null,['class'=>'form-control','placeholder' => 'Escriba su numero de cedula de ciudadania	','requiered']) !!}
				
		  </div>

				
			<div class="form-group">
						
						{!!Form::label('profesion', 'Profesion') !!}
						{!!Form::text('profesion',null,['class'=>'form-control','placeholder' => 'Escriba su profesion','requiered']) !!}
			 </div>


		<div class="form-group">	
					{!!Form::label('nivel', 'Nivel academico') !!}
					{!!Form::select('nivelAcademico',config('nivelAcademico.nivelAcademico'), null, ['class'=>'form-controll']) !!}
				
		</div>


	 </div>

	<div class="col-xs-6">
				<img src="/images/logo.png" widht="5s00" height="200">


		<div class="form-group">

					{!!Form::label('telefono', 'Telefono') !!}
					{!!Form::text('telefono' ,null,['class'=>'form-controll','placeholder' => 'Escriba su telefóno','requiered']) !!}

		</div>

		<div class="form-group">

					{!!Form::label('email', 'Correo electronico') !!}
					{!!Form::text('email',null,['class'=>'form-controll','placeholder' => ' Escriba su Correo electronico','requiered']) !!}
		</div>

		s						
		 		 
	</div>
					 
</div>
   			
