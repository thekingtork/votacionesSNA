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
                      Listado de usuarios
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <button id="editable-sample_new" class="btn green">
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
                                  <th>Correo de Acceso</th>
                                  <th>Nombre</th>
                                  <th>Tipo de Usuario</th>
                                  <th>Telefono</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                              </tr>
                              </thead>
                              <tbody>
                              	@foreach ($datos as $dato)
	                              <tr class="">
	                                  <td>{{ $dato->email }}</td>
	                                  <td>{{ $dato->getFullName()}}</td>
	                                  <td>{{ $dato->tipoUsuario->perfil }}</td>
	                                  <td>{{ $dato->telefono }}</td>
	                                  <td><a href="{{ route('administrador.users.edit',$dato->id )}}">Editar</a></td>
	                                  <td><a class="delete" href="javascript:;">Eliminar</a></td>
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
@endsection