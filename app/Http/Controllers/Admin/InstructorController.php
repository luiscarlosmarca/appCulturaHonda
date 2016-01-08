<?php namespace cultura\Http\Controllers\Admin;

use cultura\Http\Requests;
use cultura\Http\Controllers\Controller;
use cultura\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use cultura\Http\Requests\EditInstructorRequest;
use cultura\Http\Requests\CreateInstructorRequest;
class InstructorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
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
	public function store(Request $request)

	
	{
		$instructor = Instructor::create($request->all());
		
		Session::flash('message',$instructor->nombre.'Fue creado exitosamente');

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
		$instructor=Instructor::findOrfail($id);
		return view ('admin.instructores.edit',compact('instructor'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditInstructorRequest $request,$id)
	{
		$instructor=Instructor::findOrfail($id);
		$instructor->fill($request->all());
		$instructor->save();
		Session::flash('message',$instructor->nombre.'Fue editado exitosamente');

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
		//
	}

}
