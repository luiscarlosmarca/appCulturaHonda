<table class="table table-hover" widht=80%>
 							<tr>
 								

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									#identificacion</th>

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nombre Completo</th>

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Télefono</th>


 								
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nivel Academico</th>
 						
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Accion</th>
 							</tr>
 								@foreach ($instructores as $instructor)
 							<tr>
 								<td><center>{{$instructor->numDoc}}</td>
 								<td><center>{{$instructor->full_name}}</td>
 								<td><center>{{$instructor->telefono}}</td>
 								
 							
 								<td><center>{{$instructor->nivelAcademico}}</td>
 							
 								<td>
 									<a href="{{route('admin.instructores.edit',$instructor)}}">
 									
 										<img src="/images/app/edit.png" widht="50" height="50" alt="Editar"> 
 									</a>

 									<a href="{{route('admin.instructores.show',$instructor)}}">
 										
 										<img src="/images/app/view.png" widht="50" height="50" alt="ver detalles">
 									</a>
 								</td>
 							</tr>
 								@endforeach
 						</table>
 						{!!$instructores->render()!!}