<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditVotanteRequest extends Request {
	public function __construct(Route $route)
    {
        $this->route = $route;
    }

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
			'cedula'=> 'required|numeric|max:9999999999|min:1000000|unique:votantes,cedula,'. $this->route->getParameter('votantes'),
			'primer_nombre' => 'required|min:3|alpha|max:32', 
			'segundo_nombre ' => 'max:32|alpha', 
			'primer_apellido' => 'required|alpha|min:3|max:32',
			'segundo_apellido' => 'max:32|alpha',
			'telefono' => 'required|min:7',
			'email|email',
			'sexo' => 'required',
			'direccion'=> 'required|min:13|max:52',
			'lider_id'=> 'required',
			'puestos_votacion_id'=> 'required'
		];
	}

}
