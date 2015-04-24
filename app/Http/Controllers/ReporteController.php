<?php namespace App\Http\Controllers;
use App\User;
use App\Lider;
use App\Votante;
use App\Puesto;
use App\TipoUsuario;

use App;
use Illuminate\Contracts\Auth\Authenticatable;
class ReporteController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$pdf = App::make('dompdf'); //Note: in 0.6.x this will be 'dompdf.wrapper'
		$pdf = $pdf->loadView("reporte.pdf");
		return $pdf->stream();
	}

}


