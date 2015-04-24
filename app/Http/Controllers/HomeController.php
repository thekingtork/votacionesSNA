<?php namespace App\Http\Controllers;
use App\User;
use App\Lider;
use App\Votante;
use App\Puesto;
use App\TipoUsuario;
use Auth;
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
				$data['usuarios'] = User::count();
				$data['lideres'] = Lider::count();
				$data['votantes'] = Votante::count();
				$data['puestos'] = Puesto::count();
				return view('administrador', $data);
				break;	
			case 'lider':
				$l = Lider::where('email', '=', Auth::user()->email)->first();
				$data['votantes'] = count($l->votantes);
				return view('lider', $data);
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
