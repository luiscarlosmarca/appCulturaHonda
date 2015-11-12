
@extends('app')

@section('content')
			
			<div class="container">
				<div class="row">
				<div class="col-md-15">
				<div class="panel panel-default">
				
				<div class="panel panel-primary">
						     
						  <div class="panel-heading">
						      
						        <h1 class="panel-title">Listado de Aprendices</h1>
						    
						   </div>


						      <div class="panel-body">

									@if (Session::has('message'))

										<p class="alert alert-info"> {{Session::get('message') }}</p>

									@endif

						       	@include('admin.aprendices.partials.search') 

						       	@include('admin.aprendices.partials.table')
						      
						      </div>
			    </div>

				</div>
					<p>			
					
			 			<font color="white">
						Tenemos {{$aprendices->total()}} aprendices <br>
			 						
			 		</p>


				</div>
				
				</div>

				</div>



@endsection
