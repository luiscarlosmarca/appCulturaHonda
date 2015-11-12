@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-18">
			<div class="panel panel-primary">
			      
			      <div class="panel-heading">
			        <h3 class="panel-title">Listado de {{$matriculas->total()}} matriculas </h3>
			      </div>

						@if (Session::has('message'))

						<p class="alert alert-info"> {{Session::get('message') }}

						</p>

						@endif
		
				 <div class="panel-body">
						
						@foreach($matriculas  as $matricula)

							@include('admin.matriculas.partials.item',compact('matricula'))

						@endforeach
				 	
 						{{!!$matriculas->render()!!}}
 					

				</div>

			</div>
		</div>

		
	</div>
</div>
@endsection