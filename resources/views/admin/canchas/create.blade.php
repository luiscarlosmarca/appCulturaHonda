	@extends('app')
@section('title')
Creando un nuevo Escenario deportivo | Yo Juego
@stop


@section('content')
	@include('admin.jugadores.partials.error')

	

      
        <h1>Crear un nuevo Escenario deportivo  </h1>
<!--   Imprime el error de  validacion -->
			
 
 	
				<!--   Formulario para crear el jugador -->
				
				@include('admin.canchas.partials.fields2')
			

	<input type="submit" value="Crear Escenario deportivo" class="register-button">

	{!!Form::close() !!} 	
	</div>	
	<center><img src="http://localhost:8000/img/clubes.png"></center>	 
		
		    
@endsection

