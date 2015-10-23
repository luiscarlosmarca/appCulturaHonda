
 					  <div class="register">



	{!!Form::open(['route'=>'admin.clubs.store', 'method' => 'POST']) !!} 


{{-- Nombre --}}

							{!!Form::label('nombre', 'Nombre') !!}
					   		{!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba su nombre','requiered']) !!}
	 {{-- nit --}}

							{!!Form::label('nit', 'Nit') !!}
						{!!Form::text('nit' ,null,['class'=>'register-input','placeholder' => 'Escriba el nit','requiered']) !!}

		 

		 {{-- telefono --}}

						{!!Form::label('telefono', 'Telefono') !!}
						{!!Form::text('telefono' ,null,['class'=>'register-input','placeholder' => 'Escriba su telefóno','requiered']) !!}


{{-- Direccion --}}

						{!!Form::label('Direccion', 'Dirección') !!}
						{!!Form::text('direccion',null,['class'=>'register-input','placeholder' => 'Escriba su dirección','requiered']) !!}
			


{{-- Disciplina--}}			
	
						    {!!Form::label('Disciplina', 'Disciplina')  !!}
					  		{!!Form::select('disciplina',config('disciplina.disciplina'), null, ['class'=>'register-input']) !!}

{{--Categoria--}}			
		

						    {!!Form::label('Categoria', 'Categoria')  !!}
					  		{!!Form::select('categoria',config('categoria.categoria'), null, ['class'=>'register-input']) !!}

				  


 
{{-- id entrenador --}}
	
							{!!Form::label('nombre', 'Id entrenador') !!}
					   		{!!Form::text('entrenador_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del entrenador','requiered']) !!}


{{-- observacion  --}}

    					{!!Form::label('observaciones', 'Observaciones') !!}
						{!!Form::textarea('observaciones',null,['class'=>'register-input','placeholder' => ' Escriba alguna nota u observación','requiered']) !!}

	
	

