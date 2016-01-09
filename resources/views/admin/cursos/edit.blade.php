@extends('app')
@section('title')
Actualizar Curso
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Curso: {{ $cursos->nombre }}</div>
				<div class="panel-body">
				@include('admin.aprendices.partials.error')

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($cursos,['route'=>['admin.cursos.update',$cursos], 'method' => 'PUT']) !!} 
				
					@include('admin.cursos.partials.fields')
			<br>	
		<div class="col-sm-6">
		<button type="submit" class="btn btn-primary">Actualizar curso</button>
		
						
						  {!!Form::close() !!} 
					</div>
					 @include('admin.cursos.partials.delete')
						<div class="col-sm-6">
					
					<br><br>	
			</div>
			<a href="{{route('admin.cursos.index')}}">
						 <img src="http://localhost:9000/images/botonCancelar.png">
						</a>
			<br><br>
		
	</div>
	<center><img src="http://localhost:8000/img/clubes.png"></center>
</div>
@endsection