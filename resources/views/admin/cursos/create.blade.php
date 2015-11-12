@extends('app')
@section('title')
Creando nuevo Curso | Casa de la cultura HONDA - TOLIMA
@stop
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success	">
				
				<div class="panel-heading">
					
					<h1>Crear un nuevo curso</h1>

				</div>

				<div class="panel-body">
<!--   Imprime el error de  validacion -->
						@include('admin.aprendices.partials.error')

					<!--   Formulario para crear el jugador -->
							
								
						@include('admin.cursos.partials.fields')
						<button type="button" class="btn btn-success btn-lg btn-block">Crear Curso</button>
								   

					    {!!Form::close() !!} 	
				</div>
		 	</div>
		</div>
	</div>		
</div>				

   
@endsection
