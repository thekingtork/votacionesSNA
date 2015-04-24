@extends('app')
@section('estilos')
   <link rel="stylesheet" href="{{ asset('/assets/data-tables/DT_bootstrap.css') }}" />
@endsection
@section('menuLateral')
	@include('lider.menuLateral')
@endsection
@section('content')
<section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Listado de votantes
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <a href="{{ url('/lider/votantes/create') }}" class="btn btn-primary" type="button">
                                      Agregar <i class="fa fa-plus"></i>
                                  </a>
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
                                  <th>Correo</th>
                                  <th>Nombre</th>
                                  <th>Telefono</th>
                                  <th>Sexo</th>
                                  <th>dirección</th>
                                  <th>Lider</th>
                                  <th>Puesto de votación</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                              </tr>
                              </thead>
                              <tbody>
                              	@foreach ($datos as $dato)
	                              <tr class="">
	                                  <td>{{ $dato->email }}</td>
                                    <td>{{ $dato->getFullName() }}</td>
                                    <td>{{ $dato->telefono }}</td>
                                    <td>{{ $dato->sexo }}</td>
                                    <td>{{ $dato->direccion }}</td>
                                    <td>{{ $dato->lider->getFullName() }}</td>
	                                  <td>{{ $dato->puesto->nombre }}</td>
	                                  <td><a href="{{ route('lider.votantes.edit',$dato->id )}}">Editar</a></td>
	                                  <td><button class="btn btn-danger deleted"  data-url="{{ route('lider.votantes.destroy', $dato->id ) }}">Eliminar</button></td>
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
                    <h4 class="modal-title">Modal Tittle</h4>
                </div>
                <div class="modal-body">
                  ¿Seguro que desea eliminar?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                    {!! Form::open(['method' => 'DELETE', 'id' => "form-delete" ]) !!}
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
            $(".deleted").click(function (e) {
                $("#form-delete").attr('action', $(this).data('url') );
                $("#myModal2").modal('show');
            });
      </script>
@endsection
