<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
		return view('admin.reportes.index'); 
	}

	public function general_pdf()
	{
		$pdf = App::make('dompdf'); //Note: in 0.6.x this will be 'dompdf.wrapper'

		$data['cantidad_votantes'] = Votante::count();
		$data['cantidad_lideres'] = Lider::count();
		$data['lideres'] = Lider::all();
		$pdf = $pdf->loadView("admin.reportes.general", $data);
		return $pdf->stream();
	}

	public function general_excel()
	{
		Excel::create('Reporte', function($excel) {

		    $excel->sheet('general', function($sheet) {
		    	$data['cantidad_votantes'] = Votante::count();
				$data['cantidad_lideres'] = Lider::count();
				$data['lideres'] = Lider::all();
		        $sheet->loadView("admin.reportes.general", $data);

		    })->download('xls');

		});
	}

	public function lista_pdf()
	{
		$pdf = App::make('dompdf'); //Note: in 0.6.x this will be 'dompdf.wrapper'

		$data['votantes'] = Votante::all();
		$pdf = $pdf->loadView("admin.reportes.list", $data);
		return $pdf->stream();
	}

	public function lista_excel()
	{
		Excel::create('Lista de votantes', function($excel) {

		    $excel->sheet('Lista', function($sheet) {
		    	$data['votantes'] = Votante::all();
		        $sheet->loadView("admin.reportes.list", $data);

		    })->download('xls');

		});
	}


}
