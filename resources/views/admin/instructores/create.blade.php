@extends('app')
@section('title')
Creando nuevo Instructor | Casa de la cultura - HONDA TOLIMA
@stop
@section('content')


     
<!--   Imprime el error de  validacion -->
			
	<div class="container">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
					
		<div class="panel panel-success	">
					
			<div class="panel-heading"><h1>Crear un nuevo instructor</h1></div>
				
				<div class="panel-body">
					<!--   Imprime el error de  validacion -->
					@include('admin.aprendices.partials.error')

						<!--   Formulario para crear el jugador -->
								
									
				   @include('admin.instructores.partials.fields')
					<button type="submit" class="btn btn-success btn-lg btn-block">Crear Instructor</button>
									   

				    {!!Form::close() !!} 	
			    
			    </div>	

 		
 		</div>
 	    </div>	
	    </div>	
        </div>	
	

		
		    
@endsection
