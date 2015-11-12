<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Instructor;
use App\Http\Requests\EditInstructorRequest;
use App\Http\Requests\CreateInstructorRequest;
use Illuminate\Http\Request;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class nstructorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	//$instructores= Instructor::paginate();
	$instructores= Instructor::filter($request->get('nombre'),$request->get('nivelacademico'),$request->get('num_doc'));
	return view ('admin.instructores.index', compact('instructores'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.instructores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateInstructorRequest $request)
	{
		
		
		$entrenador = Instructor::create($request->all());

		Session::flash('message',$entrenador->full_name.' Fue creado'.' '.'#id asignado:'.' '.$entrenador
			->id);
		

		return redirect()->route('admin.instructores.index');



		

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
		$entrenador=Instructor::findOrfail($id);

		return view('admin.instructores.edit',compact('entrenador'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditInstructorRequest $request, $id)
	{
	  $entrenador=Instructor::findOrFail($id);

		$entrenador->fill($request->all());
		$entrenador->save();
	Session::flash('message',$entrenador->full_name.' Fue actualizado');
		return redirect()->route('admin.instructores.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	$entrenador = Instructor::findOrFail($id);

		$entrenador->delete();

		Session::flash('message',$entrenador->full_name.' Fue eliminado');
		return redirect()->route('admin.instructores.index');
	}

}
