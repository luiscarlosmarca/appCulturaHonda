@extends('app')
@section('title')
Actualizar Aprendiz
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Aprendiz: {{ $aprendices->full_name }}</div>
				<div class="panel-body">
				@include('admin.aprendices.partials.error')

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($aprendices,['route'=>['admin.aprendices.update',$aprendices], 'method' => 'PUT']) !!} 
				
					@include('admin.aprendices.partials.fieldsedit')
		
<div class="col-sm-6">
						  <button type="submit" class="btn btn-primary">Actualizar aprendices</button>
	                     
	                     <a href="{{route('admin.aprendices.index')}}">
						 <img src="http://localhost:9000/images/botonCancelar.png">
						</a>
						
						  {!!Form::close() !!} 

			
			</div>
			 
			</div>			
			</div>
	</div>
</div>
@endsection
