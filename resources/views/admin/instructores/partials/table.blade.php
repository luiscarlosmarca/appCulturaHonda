<table class="table table-hover" widht=80%>
 							<tr>
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Tipo documento</th>

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Numero documento</th>
 								
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nombre Completo</th>

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Télefono</th>


 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Dirección</th>
 								
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nivel Academico</th>
 						
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Accion</th>
 							</tr>
 								@foreach ($entrenadores as $entrenador)
 							<tr>
 								<td>{{$entrenador->tipo_doc}}</td>
 								<td>{{$entrenador->num_doc}}</td>
 								<td>{{$entrenador->full_name}}</td>
 								<td>{{$entrenador->telefono}}</td>
 								<td>{{$entrenador->direccion}}</td>
 							
 								<td>{{$entrenador->nivelAcademico}}</td>
 							
 								<td>
 									<a href="{{route('admin.entrenadores.edit',$entrenador)}}">Editar </a>
 									
 								</td>
 							</tr>
 								@endforeach
 						</table>
 						{!!$entrenadores->render()!!}