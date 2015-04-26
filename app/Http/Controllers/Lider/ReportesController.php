<?php namespace App\Http\Controllers\Lider;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Auth;
use App;
use Excel;
use App\Votante;
use App\Lider;

class ReportesController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('lider.reportes.index'); 
	}

	public function general()
	{
		$pdf = App::make('dompdf'); //Note: in 0.6.x this will be 'dompdf.wrapper'
		$data['lider'] = Lider::where( 'email', '=', Auth::user()->email)->first();
		$pdf = $pdf->loadView("lider.reportes.general", $data);
		$pdf->setOrientation('landscape');
		return $pdf->stream();
	}
}
