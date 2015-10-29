<?php namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\EditAprendizRequest;
use App\Http\Requests\CreateAprendizRequest;
use App\Aprendiz;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AprendizController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	$jugadores= Aprendiz::filter($request->get('nombre'),$request->get('estracto'),$request->get('nivelacademico'),$request->get('num_doc'));
		
		return view ('admin.jugadores.index', compact('jugadores'));
			
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.aprendices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAprendizRequest $request)
	{
		$jugador = Aprendiz::create($request->all());
		Session::flash('message',$jugador->full_name.' Fue Creado'.' '.'#id asignado:'.' '.$jugador->id);
		return redirect()->route('admin.jugadores.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//Carga el usuario con anticipacion q vamos a editar
		$jugador=jugador::findOrFail($id);
		return view('admin.jugadores.edit',compact('jugador'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditAprendizRequest $request, $id)
	{
		$jugador=jugador::findOrFail($id);

		$jugador->fill($request->all());
		$jugador->save();
		Session::flash('message',$jugador->full_name.' Fue Actualizado');
		return redirect()->route('admin.jugadores.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$jugador = Aprendiz::findOrFail($id);

		$jugador->delete();

		Session::flash('message',$jugador->full_name.' Fue eliminado');
		return redirect()->route('admin.jugadores.index');
	}

}
