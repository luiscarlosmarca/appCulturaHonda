@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-18">
				<div class="panel panel-primary">
					
					<div class="panel-heading">
       			 		<h3 class="panel-title">Listados de Cursos </h3>
      				</div>

						@if (Session::has('message'))

							<p class="alert alert-info"> {{Session::get('message') }}</p>

						@endif
							<div class="panel-body">
							 @include('admin.cursos.partials.search')
							 @include('admin.cursos.partials.table') 
							</div>

			Tenemos 
	 			
	 		{{$cursos->total()}} Cursos
				</div>
		
	
 							
 	
			
 				
		</div>
		

				
 		
		
	</div>
	 
</div>
@endsection
