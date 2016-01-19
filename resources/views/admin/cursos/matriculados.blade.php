		@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-18">
				<div class="panel panel-primary">
					
					<div class="panel-heading">
       			 		<h3 class="panel-title">Listados de Matriculados del curso {{$cursos->nombre}} #ID del curso:{{$cursos->id}} </h3>
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
					 								
 									<td><center><a href="/upload/{{$matriculado->foto}}" target="black"><img src="/upload/{{$matriculado->foto}}" height="40" width="40"></a>

 									</td>
					 								
					 				<td><center>{{ $matriculado->fullname }}

					 				</td>
					 								
					 				<td><center>{{ $matriculado->age }}

					 				</td>
						
					 						     	

													
										

					 								
					 		</tr>
					 								@endforeach


						<tr>
						 		{!!Form::open(['route'=>'admin.matricular.store', 'method' => 'POST']) !!} 
						 			<td>
										<center>
										<h4>
											Agregar aprendiz a este curso
										</h4>
						 			</td>
						 			<td>
						 				<center>
						 				{!!Form::label('aprendiz_id', 'Id del Aprendiz') !!}
						 			</td>

						 			<td>
						 				<center>
						 			    {!!Form::text('aprendiz_id',null,['class'=>'form-controll','placeholder' => 'Escriba el id del aprendiz','requiered']) !!}
						 			    {!!Form::text('curso_id',null,['class'=>'form-controll','placeholder' => 'Escriba el id del curso','requiered']) !!}

						 			</td>
					 	</tr>

					 		<tr>
					 								
					 				<td>
					 					<center>
					 					
					 					<a href="{{url('home')}}">
					 					<img src="/images/app/home.png" widht="50" height="50" alt="Incio">
					 					</a>

					 				</td>
					 									
					 				<td>
					 					<center>
					 					<a href="{{url('/admin/cursos')}}">
					 					<img src="/images/app/back.png" widht="50" height="50" alt="Atras">
					 					</a>

					 				</td>
					 									
					 			
					 				<td>
					 					<center>
					 					<button type="submit">Agregar Aprendiz</button>
					 				</td>
														
					 		
					 								
					 		</tr>



					</table>

				

					
				
						</div>
				</div>
		</div>
	</div>
</div>
@endsection