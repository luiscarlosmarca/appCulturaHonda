	<?php namespace cultura;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Matricula extends Model {

	protected $table="matriculas";
	protected $fillable = ['aprendiz_id','curso_id'];

	public function Matriculados()
	{
		return $this->belongsToMany('cultura\Aprendiz','matriculas');
	}
	public function Cursos()
	{
		return $this->belongsToMany('cultura\Curso','cursos');
	}

	public static function filter()
	{
		$query=\DB::table('matriculas')
					->join('aprendices','matriculas.id','=','aprendices.id')
					->where('aprendices.nombre','like','%Octavia%');
					
		dd($query);

	}


}
