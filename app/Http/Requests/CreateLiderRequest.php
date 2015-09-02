<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateLiderRequest extends Request {

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
			'cedula' => 'required|numeric|max:9999999999|min:1000000|unique:lideres,cedula',
			'primer_nombre' => 'required|min:3|max:32', 
			'segundo_nombre ' => 'max:32|alpha', 
			'primer_apellido' => 'required|alpha|min:3|max:32',
			'segundo_apellido' => 'max:32|alpha',
			'telefono' => 'required|min:7',
			'email|email',
			'sexo' => 'required',
			'sector' => 'required|min:13|max:52',	
		];
	}

}
