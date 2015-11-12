@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-15">
			<div class="panel panel-default">
				<div class="panel panel-primary">
				      

				      <div class="panel-heading">


				        <h1 class="panel-title">Listado de Instructores</h1>
				      

				      </div>

      						@if (Session::has('message'))

							<p class="alert alert-info"> {{Session::get('message') }}</p>

							@endif

				     

				      <div class="panel-body">
						   @include('admin.instructores.partials.search')

					       @include('admin.instructores.partials.table')
				      </div>
    			</div>
			
			</div>
			
			<p>
 				
 				<font color="white">
						Tenemos 
 						{{$instructores->total()}}
 						Instructores
 			</p>
		</div>
	</div>
</div>



@endsection
