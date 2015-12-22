@extends('app')
@section('title')
Creando nuevo aprendiz | Casa de la Cultura
@stop
@section('content')

	

    <div class="container">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
			
	<div class="panel panel-success">
		
		<div class="panel-heading">
			<h1>Crear un nuevo aprendiz</h1>

		</div>
		
		<div class="panel-body">
					
				<!--   Imprime el error de  validacion -->
				@include('admin.aprendices.partials.error')

				<!--   Formulario para crear el jugador -->
			
				
        	{!!Form::open(['route'=>'admin.aprendices.store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!} 

  			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			@include('admin.aprendices.partials.fields')
				
			<button type="submit" class="btn btn-success btn-lg btn-block">Crear Aprendiz</button>
									   

			 	{!!Form::close() !!} 	
		</div>	
		</div>	
		</div>	
		</div>	
		</div>	


					
					    
@endsection
	

						

 
		
		    
