{!!Form::model(Request::all(),['route'=>'admin.cursos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				 <div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del curso'])!!}
 			 		

 			 		{!!Form::select('tema',config('tema.tema'),null,['class'=>'form-control'])!!}
 			 		{!!Form::select('horario',config('horario.horario'),null,['class'=>'form-control'])!!}

 			  	</div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
			
{!!Form::close()!!}