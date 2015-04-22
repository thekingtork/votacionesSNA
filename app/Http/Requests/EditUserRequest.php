<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
class EditUserRequest extends Request {

	private $route;

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
            'primer_nombre' => 'required',
            'primer_apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|unique:users,email,' . $this->route->getParameter('users'),
            'password' => 'required',
            'tipo_usuario_id' => 'required|in:1,2,3'
		];
	}

}
