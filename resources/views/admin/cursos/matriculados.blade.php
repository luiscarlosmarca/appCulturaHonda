@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-18">
				<div class="panel panel-primary">
					
					<div class="panel-heading">
       			 		<h3 class="panel-title">Listados de Matriculados del curso {{$cursos->nombre}} </h3>
      				</div>
						

						<div class="panel-body">
					<table class="table table-hover" >
					 					
					 					<tr>
					 								
					 						<th> <font color=#2D4259 size="4" face="Lucida grande"> <center>
													Foto
											</th>

											<th> <font color=#2D4259 size="4" face="Lucida grande"> <center>
													Nombre
											</th>
					 							
					 						<th> <font color=#2D4259 size="4" face="Lucida grande"> <center>
					 								Edad
					 						</th>

					 						
					 					</tr>
												@foreach ($cursos->matriculados as $matriculado)
					 					<tr>
					 								
 										<td><center><a href="/upload/{{$matriculado->foto}}" target="black"><img src="/upload/{{$matriculado->foto}}" height="40" width="40"></a></td>
					 								<td><center>{{ $matriculado->fullname }}</td>
					 								
					 								<td><center>{{ $matriculado->age }}</td>
						
					 						     	

													<td>

													</td>
										

					 								
					 					</tr>
					 								@endforeach

					 					<tr>
					 								
					 								<td><center>
					 							<a href="{{url('home')}}">
					 										<img src="/images/app/home.png" widht="50" height="50" alt="Incio"></td>
					 									</a>
					 								<td><center>
					 									<a href="{{url('/admin/cursos')}}">
					 										<img src="/images/app/back.png" widht="50" height="50" alt="Atras"></td>
					 									</a>
					 								<td><center>
					 									<a href="{{url('/admin/store')}}">
					 										<img src="/images/app/add.png" widht="50" height="50" alt="Matricular"></td>
														</a>
					 						     	

													<td>

													</td>
										

					 								
					 					</tr>

					</table>

				

					
				
						</div>
				</div>
		</div>
	</div>
</div>
@endsection