<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditPuestoRequest extends Request {

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
			'nombre'=> 'required|min:3|max:64', 
			'numero_de_mesa'=> 'numeric|min:1|max:99',
		];
	}

}
