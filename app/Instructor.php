<?php namespace Cultura;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;
class Instructor extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'instructores';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['numDoc','nombre','apellido','direccion','telefono','email','nivelAcademico','observaciones' ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */



	public function cursos()

	{
		return $this->hasMany('cultura\cursos');
	}


	public function getfullnameAttribute()
	{
		return $this->nombre.' 	'.$this->apellido;
	}
	

	

	


	public function scopeNombre($query,$nombre)
	{
		//dd("scope".$name);
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombre,' ',apellido)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
			//hacer busquedas con apellido
			//$query->where(\DB::raw("CONCAT('firs_name,' ',last_name)"),$name);
		
	}
	public function scopeNum_doc($query, $num_doc)

		{
			
				if (trim($num_doc) != "")
				{
					$query->where(\DB::raw("CONCAT(num_doc)"),"LIKE","%$num_doc%");
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}

		public function scopeNivelacademico($query, $nivelAcademico)

		{

			$nivelacademicos=config('nivelAcademico.nivelAcademico');


			if($nivelAcademico != "" && isset($nivelacademicos[$nivelAcademico]))
				{
					$query->where('nivelAcademico',$nivelAcademico);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}


	public static function filter($nombre,$nivelAcademico,$num_doc)
		{
			return Instructor::nombre($nombre)
				
				->nivelacademico($nivelAcademico)
				->num_doc($num_doc)
				->orderBy('nombre','ASC')
				->paginate(10);
		}
		
}
