<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Matriculas;
use App\Http\Requests\MatriculasbRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MatriculasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
			//$matriculas=Matriculas::filter();

	$matriculas=Matriculas::orderby('club_id','ASC')->paginate();

	return view ('admin.matriculas.index', compact('matriculas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('admin.matriculas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MatriculasbRequest $request)
	{
		$matriculas =Matriculas::create($request->all());
		Session::flash('message',$matriculas->jugador->full_name.' Fue registrado al club'. ' '.$matriculas->club->nombre);
		return redirect()->route('admin.registro_jugador_matriculas.index');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
