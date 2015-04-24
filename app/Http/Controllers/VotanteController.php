<?php namespace App\Http\Controllers;
use App\User;
use App\Lider;
use App\Votante;
use App\Puesto;
use App\TipoUsuario;
use Input;
use Illuminate\Contracts\Auth\Authenticatable;
class VotanteController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('votante');
		
	}

	public function postConsultar()
	{
		$cedula = Input::get('cedula');

		$v = Votante::where('cedula','=',$cedula)->first();
		if( $v )
		{
			$data['puesto'] = $v->puesto->nombre;
			$data['mesa'] = $v->numero_mesa;
			return ['datos' => $data ];
		}
		else
		{
			return ['datos' => null];
		}

	}

}
