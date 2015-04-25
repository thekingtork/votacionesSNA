@extends('app')
@section('estilos')
   <link href="{{ asset('/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
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
                      Listado: Puestos de votación
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <button class="btn btn-primary agregar" >
                                    Agregar <i class="fa fa-plus"></i>
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
                                  <th>Nombre</th>
                                  <th>Número de mesas</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                              </tr>
                              </thead>
                              <tbody>
                              	@foreach ($datos as $dato)
	                              <tr class="">
                                    <td>{{ $dato->nombre }}</td>
	                                  <td>{{ $dato->numero_de_mesa }}</td>
	                                  <td>
                                       <button class="btn btn-warning editar" style = "text-aling:center;" data-url="{{ route('administrador.puestos.edit',$dato->id )}}">
                                          Editar
                                       </button> 
                                    </td>

	                                  <td><button class="btn btn-danger deleted"  data-url="{{ route('administrador.puestos.destroy', $dato->id ) }}">Eliminar</button></td>
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
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Agregar puesto de votación</h4>
                </div>
                <div class="modal-body">
                      <div class="panel-body">
                       @include('admin.partials.messages')
                      {!! Form::open(['route' => 'administrador.puestos.store', 'method' => 'post']) !!}
                        @include('admin.puestos.partials.fields')
                    </div>                  
                </div>
                <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Crear puesto de votacion</button>
                    {!! Form::close() !!} 
                    <button data-dismiss="modal" class="btn btn-danger" type="button">Cerrar</button>
                </div>
            </div>
        </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Editar puesto de votación</h4>
                </div>
                <div class="modal-body">
                      <div class="panel-body">
                       @include('admin.partials.messages')
                      {!! Form::open(['route' => 'administrador.puestos.store', 'method' => 'post']) !!}
                        @include('admin.puestos.partials.fields')
                    </div>                  
                </div>
                <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Crear puesto de votacion</button>
                    {!! Form::close() !!} 
                    <button data-dismiss="modal" class="btn btn-danger" type="button">Cerrar</button>
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
            $(".agregar").click(function (e) {
                $("#myModal3").modal('show');
            });
            $(".editar").click(function (e) {
                $("#myModal4").modal('show');
            });
      </script>
@endsection
