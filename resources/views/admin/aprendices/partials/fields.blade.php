<div class="container">


						
	<div class="col-xs-6">
			
			<div class="form-group">
					    
					<label for="exampleInputFile">Foto de perfil</label>
					 <input type="file" class="form-control" name="file" >
					 <p class="help-block">Imagenes 2kb .jpg y .png.</p>
			</div>
					  
			<div class="form-group">

					 <label for="nombre">Nombres</label>
					 <input type="text" name="nombre"class="form-control" id="nombre" placeholder="Digite sus nombres">
			 </div>

			<div class="form-group">

					  <label for="apellido">Apellidos</label>
					  <input type="text" name="apellido"class="form-control" id="apellido" placeholder="Digite sus apellidos">
		    </div>

			<div class="form-group">	

					   {!!Form::label('tipo_doc', 'Tipo de Documento') !!}
					   {!!Form::select('tipo_doc',['Seleccione su documento de identidad','Cedula'=>'Cedula','Tarjeta de identidad'=>'Tarjeta de identidad','Registro Civill'=>'Registro civil','Pasaporte'=>'Pasaporte'], null, ['class'=>'form-control']) !!}
						 
			</div>

						
			<div class="form-group">
						{!!Form::label('num_doc', 'Numero de Documento') !!}
						{!!Form::text('numDoc',null,['class'=>'form-control','placeholder' => 'Escriba su numero de identiificación civil','requiered']) !!}
				
		   </div>
	</div>

 	<div class="col-xs-6">
				<img src="/images/logo.png" widht="300" height="100">

		<div class="form-group">

				{!!Form::label('num_doc', 'Estracto Economico') !!}
				{!!Form::select('estracto',config('estracto.estracto'), null, ['class'=>'form-controll']) !!}
	    </div>

		<div class="form-group">	
								
				{!!Form::label('num_doc', 'Nivel academico') !!}
				{!!Form::select('nivelAcademico',config('nivelAcademico.nivelAcademico'), null, ['class'=>'form-controll']) !!}
					
		</div>
					
		<div class="form-group">
						
				{!!Form::label('num_doc', 'Telefono') !!}
				{!!Form::text('telefono' ,null,['class'=>'form-controll','placeholder' => 'Escriba su telefóno','requiered']) !!}

	    </div>

		
		<div class="form-group">
				
				{!!Form::label('num_doc', 'FE Nacimiento') !!}
				{!!Form::date('FeNa',null,['class'=>'form-controll','placeholder' => ' Escriba su fecha de nacimiento aaaa-mm-dd','requiered']) !!}
						  
		 </div>							
			 		 


   </div>

</div>
   			
