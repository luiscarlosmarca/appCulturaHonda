<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Matricula extends Model {

	protected $table="matriculas";
	protected $fillable = ['jugador_id','club_id'];

	public function jugador()
	{
		return $this->belongsTo('App\Jugador');
	}
	public function club()
	{
		return $this->belongsTo('App\Club');
	}

	public static function filter()
	{
		$query=\DB::table('matriculas')
					->join('jugadores','matriculas.id','=','jugadores.id')
					->where('jugadores.nombre','like','%Octavia%');
					
		dd($query);

	}


}
