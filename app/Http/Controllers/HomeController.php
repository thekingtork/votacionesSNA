<?php namespace App\Http\Controllers;
use App\User;
use App\TipoUsuario;
use Illuminate\Contracts\Auth\Authenticatable;
class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Authenticatable $user)
	{
		$dato = $user->tipoUsuario->perfil;
		switch ($dato) {
			case 'administrador':
				return view('administrador');
				break;	
			case 'lider':
				return view('lider');
				break;
			case 'votante':
				return view('votante');
				break;			
			default:
				# code...
				break;
		} 
	}

}
