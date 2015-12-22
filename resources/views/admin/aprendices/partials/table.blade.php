<table class="table table-hover" widht=60%>
 							<tr>
 								
 								

 								<th>
									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Foto

 								</th>

 								<th>
									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nombre Completo</th>

 								<th>
									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									#Idenficacion</th>

 								 								
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nivel Academico</th>

 								
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Edad</th>
 								<th>

 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Accion</th>
 							</tr>

 								  @foreach ($aprendices as $aprendiz)
 							<tr>

 								<td><a href="/upload/{{$aprendiz->foto}}" target="black"><img src="/upload/{{$aprendiz->foto}}" height="100" width="80"></a></td>

 								<td><center>{{$aprendiz->full_name}}</td>
 								<td><center>{{$aprendiz->numDoc}}</td>
 							
 							
 								<td><center>{{$aprendiz->nivelAcademico}}</td>
 								
 								<td><center>{{$aprendiz->age}}</td>
 								<td>
 									<!-- Pasamos el id que lo recibe el metodo edit -->
 									<a href="{{route('admin.aprendices.edit',$aprendiz)}}">
 										
 										<img src="/images/app/edit.png" widht="50" height="50" alt="Editar">
 									</a>

 									<a href="{{route('admin.aprendices.show',$aprendiz)}}">
 									
 										<img src="/images/app/view.png" widht="50" height="50" alt="ver detalles">
 									</a>
 									
 								</td>
 							</tr>
 								@endforeach
</table>

{!!$aprendices->appends(Request::only(['nombre','estracto','num_doc','nivelAcademico']))->render()!!}
 						