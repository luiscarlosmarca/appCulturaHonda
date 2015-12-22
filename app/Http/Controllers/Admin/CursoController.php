<?php namespace cultura\Http\Controllers\Admin;

use cultura\Http\Requests;
use cultura\Http\Controllers\Controller;
use cultura\Curso;
use cultura\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CursoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		 	//dd($request->get('categoria'));	
		 //$cursos= Curso::disciplina($request->get('disciplina'))->nombre($request->get('nombre'))->nit($request->get('nit'))->categoria($request->get('categoria'))->paginate();
		$cursos= Curso::filter($request->get('nombre'),$request->get('tema'),$request->get('horario'));

		return view ('admin.cursos.index', compact('cursos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.cursos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		$curso= Curso::create($request->all());
		Session::flash ('message',$curso->nombre.'El curso fue creado exitosamente');
	
		return redirect()->route('admin.cursos.index');

		
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cursos= Curso::findOrFail($id);
		
		return view('admin.cursos.matriculados', compact('cursos'));
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
	public function detail($id)
	{
		//
	}

}
