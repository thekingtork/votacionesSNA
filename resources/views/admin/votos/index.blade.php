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
                                  <th>Nombre</th>
                                  <th>Votar</th>
                              </tr>
                              </thead>
                              <tbody>
                              	@foreach ($datos as $dato)
	                              <tr class="">
	                                  <td>{{ $dato->getFullName() }}</td>
	                                  <td><button class="btn btn-danger votar" data-puesto="{{ $dato->puesto->nombre }}" data-mesa="{{ $dato->numero_mesa }}"  data-url="{{ url('administrador/votos/votar', $dato->id ) }}">Votar</button></td>
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Vas a votar</h4>
                </div>
                <div class="modal-body">
                  <div class="col-sm-6"><h4>Puesto de votacion</h4></div> 
                  <div class="col-sm-6">
                    <h3>
                      <span id="n-puesto"></span>
                    </h3>
                  </div>
                  <div class="col-sm-6">
                    <h4>Mesa:</h4>
                  </div>
                  <div class="col-sm-6">
                    <h3>
                      <span id="n-mesa"></span>
                    </h3>
                  </div>
                </div>
                <div class="modal-footer">
                    {!! Form::open(['method' => 'POST', 'id' => "form-voto" ]) !!}
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
                $("#myModal2").modal('show');
            });
      </script>
@endsection
