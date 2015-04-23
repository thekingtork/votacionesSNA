@extends('app')
@section('menuLateral')
	@include('admin.menuLateral')
@endsection
@section('content')
<section class="wrapper">
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <a href="{{ url('/administrador/users') }}">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="value">
                        <h1 class="count2"></h1>
                        <p>Usuarios</p>
                    </div>
                </section>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="{{ url('/administrador/lideres') }}">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-male"></i>
                    </div>
                    <div class="value">
                        <h1 class="count"></h1>
                        <p>Lideres</p>
                    </div>
                </section>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="value">
                        <h1 class="count3"></h1>
                        <p>Votantes</p>
                    </div>
                </section>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="{{ url('/administrador/puestos') }}">
                <section class="panel">
                    <div class="symbol blue">
                        <i class="fa fa-laptop"></i>
                    </div>
                    <div class="value">
                        <h1 class="count4"></h1>
                        <p>Puestos de votacion</p>
                    </div>
                </section>
            </a>
        </div>
        <div class="col-lg-3 col-sm-12">
            <a href="{{ url('/administrador/votos') }}">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-archive"></i>
                    </div>
                    <div class="value">
                        <h1>Votar</h1>
                    </div>
                </section>
            </a>
        </div>
    </div>
</section>
@endsection
@section('script')
  <script src="{{ asset('/js/sparkline-chart.js') }}"></script>
  <script src="{{ asset('/js/easy-pie-chart.js') }}"></script>
  <script src="{{ asset('/js/count.js') }}"></script>
  <script>
      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });
      });
      $(function(){
          $('select.styled').customSelect();
      });
      countUp({{ $lideres }},".count");
      countUp({{ $usuarios }},".count2");
      countUp({{ $votantes }},".count3");
      countUp({{ $votantes }},".count4");
  </script>
@endsection