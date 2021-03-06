<?php namespace cultura\Http\Requests;

use cultura\Http\Requests\Request;

class EditAprendizRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		'nombre'	 => 'required|string'
		'apellido'   => 'required|string',
		
		'numDoc'     =>'required|unique:aprendices',
		];
	}

}
