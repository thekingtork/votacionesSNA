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
            'primer_nombre' => 'required|min:3|alpha|max:32', 
			'primer_apellido' => 'required|alpha|min:3|max:32',
            'telefono' => 'required|numeric|max:999999999|min:1000000|',
            'email' => 'required|unique:users,email,' . $this->route->getParameter('users'),
            'password' => 'required|min:8',
            'tipo_usuario_id' => 'required|in:1,2,3'
		];
	}

}
