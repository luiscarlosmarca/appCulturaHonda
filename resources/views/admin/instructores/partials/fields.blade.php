		 	
  <div class="register">

		{!!Form::open(['route'=>'admin.entrenadores.store', 'method' => 'POST']) !!} 



	{{--num documento --}}
{!!Form::label('num_doc', 'Tipo de Documento') !!}

{!!Form::select('tipo_doc',['Seleccione eltipo de documento de identidad','Cedula'=>'Cedula','Pasaporte'=>'Pasaporte'], null, ['class'=>'register-input']) !!}

{!!Form::label('num_doc', 'Numero de Documento') !!}
{!!Form::text('num_doc',null,['class'=>'register-input','placeholder' => 'Escriba su numero de identiificación civil','requiered']) !!}

 

		 {{-- Nombre --}}
		 {!!Form::label('num_doc', 'Nombre') !!}

		{!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba su nombre','requiered']) !!}


 {{-- apellido --}}
{!!Form::label('num_doc', 'Apellido') !!}

					   		{!!Form::text('apellido',null,['class'=>'register-input','placeholder' => 'Escriba su apellido','requiered']) !!}


		 {{-- telefono --}}


						{!!Form::label('telefono', 'Telefono') !!}
						{!!Form::text('telefono' ,null,['class'=>'register-input','placeholder' => 'Escriba su telefóno','requiered']) !!}
 

{{-- Direccion --}}
	
						{!!Form::label('Direccion', 'Dirección') !!}
						{!!Form::text('direccion',null,['class'=>'register-input','placeholder' => 'Escriba su dirección','requiered']) !!}
			
			{{-- email  --}}

    					{!!Form::label('email', 'Correo electronico') !!}
						{!!Form::text('email',null,['class'=>'register-input','placeholder' => ' Escriba su Correo electronico','requiered']) !!}

	  


{{-- nivel academico--}}			
		{!!Form::label('num_doc', 'Nivel academico') !!}
					  		{!!Form::select('nivelAcademico',config('nivelAcademico.nivelAcademico'), null, ['class'=>'register-input']) !!}
		  


 
	
	{{-- fecha de nacimiento --}}

    					{!!Form::label('feNa', 'Fecha de nacimiento') !!}
						{!!Form::date('FeNa',null,['class'=>'register-input','placeholder' => ' Escriba su fecha de nacimiento aaaa-mm-dd','requiered']) !!}




																

{{-- observacioines --}}

 
						{!!Form::label('Observaciones', 'Observaciones') !!}
						{!!Form::textarea('observaciones' ,null,['class'=>'register-input','placeholder' => 'Escriba las observaciones' ]) !!}



