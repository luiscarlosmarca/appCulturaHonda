<?php namespace cultura\Http\Controllers;
use cultura\Persona;
/**
* 
*/ 
class PersonasController extends Controller{
	
	public function getIndex()
	{
		$personas = Persona::select('id','nombre')
		
		->with('perfil')
		->get();
		dd($personas->toArray());
	} 		
}

?>
