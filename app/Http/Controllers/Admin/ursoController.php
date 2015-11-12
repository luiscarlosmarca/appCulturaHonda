<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\EditCursoRequest;
use Illuminate\Http\Request;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
	$cursos= Curso::filter($request->get('nombre'),$request->get('disciplina'),$request->get('nit'),$request->get('categoria'));

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
	public function store(CreateCursoRequest $request)
	{
		$club = Curso::create($request->all());
		Session::flash('message',$club->nombre.' Fue creado'.' '.'#id asignado:'.' '.$club->id);
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
		$club=Curso::findOrfail($id);

		return view('admin.cursos.edit',compact('club'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCursoRequest $request, $id)
	{

	  $club=Curso::findOrFail($id);

		$club->fill($request->all());
		$club->save();
		Session::flash('message',$club->nombre.' Fue Actualizado');
		return redirect()->route('admin.cursos.index');
		
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$club = Curso::findOrFail($id);

		$club->delete();

		Session::flash('message',$club->nombre.' Fue eliminado');
		return redirect()->route('admin.cursos.index');
	}

}
