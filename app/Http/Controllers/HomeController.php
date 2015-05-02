<?php namespace App\Http\Controllers;
use App\User;
use App\Lider;
use App\Votante;
use App\Puesto;
use App\TipoUsuario;
use Auth;
use DB;
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
		$dato 		= $user->tipoUsuario->perfil;
		$data['p'] 	= "escritorio";
		switch ($dato) {
			case 'administrador':
				$data['mejor_lider']		= Votante::selectRaw('lider_id, count(*) AS count')->orderBy('count','DESC')->groupBy('lider_id')->take(5)->get();
				$sectores					= Lider::groupBy('sector')->get();
				foreach ($sectores as $sector) 
				{
					$ls 	= Lider::where('sector','=',$sector->sector)->get();
					$cant 		= 0;
					foreach ($ls as  $l) {
						$cant +=  count($l->votantes);
					}
					$data['sectores'][$sector->sector] = $cant;
				}
				$data['usuarios'] 		= User::count();
				$data['lideres'] 		= Lider::count();
				$data['votantes'] 		= Votante::count();
				$data['puestos'] 		= Puesto::count();
				$data['last_users'] 	= User::orderBy('id','DESC')->take(5)->get();
				$data['last_votantes'] 	= Votante::orderBy('id','DESC')->take(5)->get();
				return view('administrador', $data);
				break;	
			case 'lider':
				$l = Lider::where('email', '=', Auth::user()->email)->first();
				if( $l )
					$data['votantes'] = count($l->votantes);
				else
					$data['votantes'] = "Error";
					$data['last_votantes'] = Votante::orderBy('id','DESC')->take(5)->get();
				return view('lider', $data);
				break;
			case 'votante':
				return view('votante');
				break;			
			case 'super-administrador':
				
				$data['mejor_lider']		= Votante::selectRaw('lider_id, count(*) AS count')->orderBy('count','DESC')->groupBy('lider_id')->take(5)->get();
				$sectores					= Lider::groupBy('sector')->get();
				foreach ($sectores as $sector) 
				{
					$ls 	= Lider::where('sector','=',$sector->sector)->get();
					$cant 		= 0;
					foreach ($ls as  $l) {
						$cant +=  count($l->votantes);
					}
					$data['sectores'][$sector->sector] = $cant;
				}
				$data['usuarios'] 			= User::count();
				$data['lideres'] 			= Lider::count();
				$data['votantes'] 			= Votante::count();
				$data['puestos'] 			= Puesto::count();
				$data['last_users'] 		= User::orderBy('id','DESC')->take(5)->get();
				$data['last_votantes'] 		= Votante::orderBy('id','DESC')->take(5)->get();
				return view('administrador', $data);
				break;	
			
			default:
				# code...
				break;
		} 
	}

}
