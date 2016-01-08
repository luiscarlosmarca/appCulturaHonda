<?php namespace cultura\Http\Controllers\Admin;

use cultura\Http\Requests;
use cultura\Http\Controllers\Controller;
use cultura\Aprendiz;
use Illuminate\Http\Request;
use \Input as Input;
use cultura\Http\Requests\EditAprendizRequest;
use cultura\Http\Requests\CreateAprendizRequest;
use Illuminate\Support\Facades\Session;
class AprendizController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$aprendices= Aprendiz::filter($request->get('nombre'),$request->get('estracto'),
	    $request->get('nivelacademico'),$request->get('num_doc'));
		
		return view ('admin.aprendices.index', compact('aprendices'));
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
	public function store(Request $request)
	{
		if(Input::hasFile('file'))
		{

		    $file = Input::file('file');
		    $file->move('upload',$file->getClientOriginalName());
		 	$foto='img src="/upload/'.$file->getClientOriginalName().'"';
				
			$aprendices = new Aprendiz($request->all());
			$aprendices->foto=$file->getClientOriginalName();
			$aprendices->save();
	   
	  
			 	Session::flash('message',$aprendices->nombre.' Fue creado');
			
				return redirect()->route('admin.aprendices.index');
		}

		$aprendices = Aprendiz::create($request->all());
		Session::flash('message',$aprendices->nombre.' Fue creado');
			
		return redirect()->route('admin.aprendices.index');
 
       //obtenemos el nombre del archivo
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
		$aprendices=Aprendiz::findOrfail($id);
		
		return view('admin.aprendices.edit',compact('aprendices'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditAprendizRequest $request, $id)
	{
		$aprendices=Aprendiz::findOrfail($id);
		$aprendices->fill($request->all());



		$aprendices->save();
		Session::flash('message',$aprendices->nombre.' Fue editado');
		return redirect()->route('admin.aprendices.index');
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
