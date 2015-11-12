<table class="table table-hover" >
 					
 					<tr>
 								
 						<th> <font color=#2D4259 size="4" face="Lucida grande"> <center>
								Nombre Curso
						</th>

					 							
 						<th> <font color=#2D4259 size="4" face="Lucida grande"> <center>
 							Tema
 						</th>

 						<th> <font color=#2D4259 size="4" face="Lucida grande"> <center>
 							Descripcion</th>
 						
 							<th><font color=#2D4259 size="4" face="Lucida grande"> <center>
 							Acciones</th>
 					</tr>

 						@foreach ($cursos as $curso)
 					<tr>
 								
 								<td><center>{{$curso->nombre}}</td>
 								
 								<td><center>{{$curso->tema}}</td>
 								

 						     	<td><center>{{$curso->descripcion}}</td>

								
								
								<td><center>
									<a href="{{url('admin/detalles-cursos',$curso)}}">
										<img src="/images/app/view.png" widht="50" height="50" alt="Ver detalles">
									</a>
								</td>

								<td>
									<a href="{{route('admin.cursos.show',$curso)}}">
										<img src="/images/app/users.png" widht="50" height="50" alt="Ver matriculados">
									</a>
 									
 								</td>
 								<td>
 									<a href="{{route('admin.cursos.edit',$curso)}}">
 										<img src="/images/app/edit.png" widht="50" height="50" alt="Editar">

 									</a>
 								</td>

 								
 								
 					</tr>
 								@endforeach
</table>

 						{!!$cursos->appends(Request::only(['nombre','horario','tema']))->render()!!}
 						 				
