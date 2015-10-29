<?php namespace cultura\Http\Controllers;
use cultura\User;
/**
* 
*/ 
class UsersController extends Controller{
	
	public function getIndex()
	{
		$users = User::select('id','name')
		->with('perfil')
		
		->get();
		dd($users->toArray());
	} 		
}

?>
