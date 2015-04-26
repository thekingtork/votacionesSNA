<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'user' => 'userController',
    'votante' => 'VotanteController',
    'reporte' => 'ReporteController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'lider', 'namespace' => 'Lider'], function () {
    Route::resource('votantes', 'VotanteController');
    Route::get('reportes', [ 'as' => 'reportes', 'uses' => 'ReportesController@index']);
    Route::get('reportes/general', [ 'as' => 'reportes', 'uses' => 'ReportesController@general']);
    
});

Route::group(['prefix' => 'administrador', 'namespace' => 'Admin'], function () {

    Route::resource('users', 'UserController');
    Route::resource('lideres', 'LiderController');
    Route::resource('puestos', 'PuestoController');
    Route::resource('votantes', 'VotanteController');
    Route::post('puestos/ajax_edit/{id}', [ 'as' => 'puesto.ajax_edit', 'uses' => 'PuestoController@ajax_edit']);
    
    Route::get('reportes', [ 'as' => 'reportes', 'uses' => 'ReportesController@index']);
    Route::get('reportes/general/pdf', [ 'as' => 'reportes', 'uses' => 'ReportesController@general_pdf']);
    Route::get('reportes/general/excel', [ 'as' => 'reportes', 'uses' => 'ReportesController@general_excel']);
    Route::get('reportes/lista/excel', [ 'as' => 'reportes', 'uses' => 'ReportesController@lista_excel']);
    Route::get('reportes/lista/pdf', [ 'as' => 'reportes', 'uses' => 'ReportesController@lista_pdf']);

    Route::get('votos', [ 'as' => 'votos', 'uses' => 'VotosController@index']);
    Route::post('votos/votar/{id}', [ 'as' => 'votar', 'uses' => 'VotosController@votar']);
    Route::get('votos/reiniciar', [ 'as' => 'votos.reiniciar', 'uses' => 'VotosController@reiniciar']);
    Route::post('votos/reiniciar', [ 'as' => 'votos.reiniciar_update', 'uses' => 'VotosController@reiniciar_update']);
    
});
