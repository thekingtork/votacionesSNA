<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App;
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
		return view('admin.reportes.index'); 
	}

	public function general()
	{
		$pdf = App::make('dompdf'); //Note: in 0.6.x this will be 'dompdf.wrapper'

		$data['cantidad_votantes'] = Votante::count();
		$data['cantidad_lideres'] = Lider::count();
		$data['lideres'] = Lider::all();
		$pdf = $pdf->loadView("admin.reportes.general", $data);
		return $pdf->stream();
	}
}
