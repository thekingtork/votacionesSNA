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
                      Reiniciar sufragos
                  </header>
                  <div class="panel-body">
                    <section class="panel post-wrap pro-box">
                          <aside class="post-highlight terques v-align">
                              <div class="panel-body" style="color:#FFF">
                                  <h4>Para un nuevo proceso de votación, por favor presionar el botón de "Reinicio de sufragos".</h4>
                              </div>
                          </aside>
                          <aside>
                              <div class="post-info">
                                  <span class="arrow-pro left"></span>
                                  <div class="panel-body">
                                      <div class="text-center twite">
                                        <button type="button" class="btn btn-danger btn-lg reiniciar">Reinicio de sufragos</button>
                                      </div>
                                  </div>
                              </div>
                          </aside>
                      </section>
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
                    <h4 class="modal-title">¿Reiniciar?</h4>
                </div>
                <div class="modal-body">
                  ¿Desea reiniciar todos los sufragos?
                </div>
                <div class="modal-footer">
                    {!! Form::open(['route' => 'administrador.votos.reiniciar','method' => 'POST' ]) !!}
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
            $(".reiniciar").click(function (e) {
                $("#myModal2").modal('show');
            });
      </script>
@endsection
