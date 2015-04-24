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
                      Agregar un Usuario
                  </header>
                  <div class="panel-body">
                    @include('admin.partials.messages')
                    {!! Form::open(['route' => 'administrador.users.store', 'method' => 'post']) !!}
                      @include('admin.usuarios.partials.fields')
                      <button type="submit" class="btn btn-default">Crear usuario</button>
                    {!! Form::close() !!}
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