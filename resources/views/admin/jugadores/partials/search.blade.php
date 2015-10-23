
{!!Form::model(Request::all(),['route'=>'admin.jugadores.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				  <div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del jugador'])!!}
				  	{!!Form::text('num_doc',null,['class'=>'form-control','placeholder'=>'El numero de identificación'])!!}
				  	{!!Form::select('estracto',[''=>'Seleccione el estracto','1'=>'1','2'=>'2','3'=>'3','4'=>'4'],null,['class'=>'form-control'])!!}
 			 		{!!Form::select('nivelacademico',config('nivelAcademico.nivelAcademico'),null,['class'=>'form-control'])!!}

 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
				</form>
		{!!Form::close()!!}