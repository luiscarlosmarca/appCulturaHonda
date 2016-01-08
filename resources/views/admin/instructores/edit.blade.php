@extends('app')
@section('title')
Actualizar Instructor
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar instructor: {{ $instructor->full_name }}</div>
				<div class="panel-body">
				@include('admin.aprendices.partials.error')

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($instructor,['route'=>['admin.instructores.update',$instructor], 'method' => 'PUT']) !!} 
				
					@include('admin.instructores.partials.fields')
		<br>	
		<div class="col-sm-6">
		<button type="submit" class="btn btn-primary">Actualizar instructor</button>

		<a href="{{route('admin.instructores.index')}}">
						 <img src="http://localhost:9000/images/botonCancelar.png">
		</a>
		
						  {!!Form::close() !!} 
					</div>
						<div class="col-sm-6">
					 
					<br><br>	
			</div>
			<br><br>
	</div>
	<br><br>
</div>
@endsection
