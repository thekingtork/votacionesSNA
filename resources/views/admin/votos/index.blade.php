@extends('app')
@section('estilos')
   <link rel="stylesheet" href="{{ asset('/assets/data-tables/DT_bootstrap.css') }}" />
@endsection
@section('menuLateral')
	@include('admin.menuLateral')
@endsection
@section('content')
<section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Votos
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <button class="btn btn-danger reiniciar" >
                                    Reiniciar votación <i class="fa fa-plus"></i>
                                  </button>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Herramientas <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Imprimir</a></li>
                                      <li><a href="#">Guardar PDF</a></li>
                                      <li><a href="#">Exportar a Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="space15"></div>
                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>Cedula     </th>
                                  <th>Nombre completo     </th>
                                  <th>Marcar</th>
                              </tr>
                              </thead>
                              <tbody>
                              	@foreach ($datos as $dato)
	                              <tr class="">
                                    <td>{{ $dato->cedula }}</td>
	                                  <td>{{ $dato->getFullName2() }}</td>
	                                  <td>
                                      <button style="margin: 0 50% 0 50%;" class="btn btn-success btn-xs votar" data-votante = "{{ $dato->getFullName() }}" data-puesto="{{ $dato->puesto->nombre }}" data-mesa="{{ $dato->numero_mesa }}"  data-url="{{ url('administrador/votos/votar', $dato->id ) }}">
                                        <i class="fa fa-check"></i>  
                                      </button>
                                    </td>
	                              </tr>
                              	@endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
</section>
                          
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Información: Puesto de votación de:  <span id="n-votante"></span></h4>
        </div>
          <div class="modal-body">
            <di class="row">
              <ul>
                <li>
                  <div class="col-sm-5"><h4>Puesto de votacion: </h4></div> 
                    <div class="col-sm-7">
                        <h4>
                          <span id="n-puesto"></span>
                        </h4>
                    </div>              
                </li>
                <li>
                  <div class="col-sm-6"><h4>Mesa:</h4></div>
                    <div class="col-sm-6">
                      <h4>
                        <span id="n-mesa"></span>
                      </h4>
                    </div>
                </li>
              </ul>
              
            </di>
          </div>
        <div class="modal-footer" style="margin-top: 0;">
            {!! Form::open(['method' => 'POST', 'id' => "form-voto" ]) !!}
                <button type="submit" class="btn btn-danger">Confirmar</button>
            {!! Form::close() !!}
        </div>
      </div>
  </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">¿Reiniciar?</h4>
                </div>
                <div class="modal-body">
                  ¿Desea reiniciar todos los sufragos?
                </div>
                <div class="modal-footer">
                    {!! Form::open(['route' => 'votos.reiniciar','method' => 'POST' ]) !!}
                       <button type="submit" class="btn btn-warning">Confirmar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('/assets/data-tables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/data-tables/DT_bootstrap.js') }}"></script>
    <script src="{{ url('/js/respond.min.js') }}" ></script>
      <script src="{{ url('/js/editable-table.js') }}"></script>
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
          
      </script>
      <script type="text/javascript">
            $(".votar").click(function (e) {
                $("#form-voto").attr('action', $(this).data('url') );
                $("#n-mesa").html($(this).data('mesa') );
                $("#n-puesto").html($(this).data('puesto') );
                $("#n-votante").html($(this).data('votante') );
                $("#myModal2").modal('show');
            });
            $(".reiniciar").click(function (e) {
                $("#myModal3  ").modal('show');
            });
      </script>
@endsection
