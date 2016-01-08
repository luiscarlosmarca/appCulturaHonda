<?php namespace cultura;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;


class Curso extends Model {

	protected $table="cursos";
	protected $fillable = ['nombre','instructor_id','telefono','tema','horario','descripcion' ];


	public function  matriculados()
		{
		 return $this->belongsToMany('cultura\Aprendiz', 'matriculas');
		}

	public function instructor()
		{
			return $this->belongsTo('cultura\instructor');
		}

	public function scopeNombre($query,$nombre)
	{
		//dd("scope".$name);
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(Nombre)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
			//hacer busquedas con apellido
			//$query->where(\DB::raw("CONCAT('firs_name,' ',last_name)"),$name);
		
	}
	public function scopeNit($query, $nit)

		{
			
				if (trim($nit) != "")
				{
					$query->where(\DB::raw("CONCAT(nit)"),"LIKE","%$nit%");
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}


	public function scopeEntrenador_id($query, $entrenador_id)

		{

				if (trim($entrenador_id) != "")
				{	
				//$query->where(this->entrenador->nombre,$entrenador_id);	
				//$query->join('cursos','entrenador_id', '=', 'entrenadores','id')
                 //->where('entrenadores','nombre',$entrenador_id);
					//$query->where(\DB::raw("CONCAT(entrenador_id)"),"LIKE","%$entrenador_id%");
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}

	public function scopeHorario($query, $horario)

		{

			$horarios=config('horario.horario');


			if($horario != "" && isset($horarios[$horario]))
				{
					$query->where('horario',$horario);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}
	public function scopeTema($query, $tema)
			
		{
		
			$temas=config('tema.tema');


			if($tema != "" && isset($temas[$tema]))
				{
					$query->where('tema',$tema);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}


	public static function filter($nombre,$tema,$horario)
		{
			return Curso::nombre($nombre)
				->tema($tema)
				
				->horario($horario)
				->orderBy('nombre','ASC')
				->paginate();
		}



}
