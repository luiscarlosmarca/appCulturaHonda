{!!Form::open (['route'=> ['admin.cursos.destroy', $cursos],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este curso?')"class="btn btn-danger">Eliminar curso</button>
{!! Form::close()!!}