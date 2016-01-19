<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'personas'=>'PersonasController',
	'users'=>'UsersController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin'], 'namespace' =>'Admin'],function(){
	Route::resource('users','UserController');
	Route::resource('aprendices','AprendizController');
	Route::resource('instructores','InstructorController');
	Route::resource('cursos','CursoController');
	Route::resource('detalles-cursos','CursoController@detail');
	Route::resource('matricular','MatricularController');
	
});

Route::get('login',function ()
{
	return view('auth.index');	
});

Route::post('aprendiz/crear', 'Admin\AprendizController@store');

Route::post('curso/matricular', 'Admin\CursoController@matricular');