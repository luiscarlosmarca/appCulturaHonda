
{!!Form::model(Request::all(),['route'=>'admin.entrenadores.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				  <div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del entrenador'])!!}
				  	{!!Form::text('num_doc',null,['class'=>'form-control','placeholder'=>'El numero de identificación'])!!}
 			 		{!!Form::select('nivelacademico',config('nivelAcademico.nivelAcademico'),null,['class'=>'form-control'])!!}

 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
		{!!Form::close()!!}