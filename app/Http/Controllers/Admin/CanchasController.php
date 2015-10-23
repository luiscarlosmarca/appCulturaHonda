<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cancha;
use App\Http\Requests\CreateCanchaRequest;
use App\Http\Requests\EditCanchaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CanchasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$canchas= Cancha::filter($request->get('nombre'),$request->get('barrio'));

	return view ('admin.canchas.index', compact('canchas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.canchas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCanchaRequest $request)
	{
		$cancha = Cancha::create($request->all());
		Session::flash('message',$cancha->nombre.' Fue creado');
		
		return redirect()->route('admin.escenarios_deportivos.index');
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
		$cancha=Cancha::findOrfail($id);
		Session::flash('message',$cancha->nombre.' Fue creado');

		return view('admin.canchas.edit',compact('cancha'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCanchaRequest $request, $id)
	{

	  $cancha=Cancha::findOrFail($id);

		$cancha->fill($request->all());
		$cancha->save();

		Session::flash('message',$cancha->nombre.' Fue actualizada');
		return redirect()->route('admin.escenarios_deportivos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cancha = Cancha::findOrFail($id);

		$cancha->delete();

		Session::flash('message',$cancha->nombre.' Fue eliminado');
		return redirect()->route('admin.escenarios_deportivos.index');
	}

}
