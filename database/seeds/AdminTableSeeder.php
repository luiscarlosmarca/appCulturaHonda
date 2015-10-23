<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'name'=>'Erika',
			'email'=>'erika@gmail.com',
			'password'=>\Hash::make('culturaHonda'),
			'tipo'=> 'admin'   
			));
		
	}

}
 