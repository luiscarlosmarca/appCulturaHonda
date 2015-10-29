	@extends('app')
@section('title')
Matriculas | Casa de la Cultura
@stop
@section('content')

    

 <div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-primary">
						<div class="panel-heading"><h1>Matricular aprendiz	</h1></div>
						<div class="panel-body">
		<!--   Imprime el error de  validacion -->
						@include('admin.aprendices.partials.error')

			<!--   Formulario para crear el jugador -->
					
						
						@include('admin.matriculas.partials.fields')
		<button type="button" class="btn btn-info btn-lg btn-block">Matricular</button>
						   

			{!!Form::close() !!} 	
			</div>	


		
		    
@endsection
