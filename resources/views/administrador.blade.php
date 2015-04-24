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
    </div>
    <div class="row state-overview">
      <div class="col-lg-4">
          <section class="panel">
            <div class="twt-feed blue-bg">
                <h1>Sandra Nieto A. </h1>
                <p>sna@snaconcejo.com.co</p>
                <a href="#">
                  <img src="img/profile-avatar.jpg" alt="">
                </a>
            </div>
            <div class="weather-category twt-category">
              <ul>
                  <li class="active">
                      <h5>320</h5>
                      Tweet
                  </li>
                  <li>
                    <h5>1245</h5>
                    Siguiendo
                  </li>
                  <li>
                      <h5>24657</h5>
                        Seguidores
                  </li>
              </ul>
            </div>
            <div class="twt-write col-sm-12">
                <textarea class="form-control  t-text-area" rows="2" placeholder="Tweet Here"></textarea>
            </div>
            <footer class="twt-footer">
                <button class="btn btn-space btn-white" data-toggle="button">
                    <i class="fa fa-map-marker"></i>
                </button>
                <button class="btn btn-space btn-white" data-toggle="button">
                    <i class="fa fa-camera"></i>
                </button>
                <button class="btn btn-space btn-info pull-right" type="button">
                    <i class="fa fa-twitter"></i>
                    Tweet
                </button>
            </footer>
        </section>
      </div> 
      <div class="col-lg-4">
        <section class="panel">
          <header class="panel-heading red">
            <span style="color:white;">Ultimos usuarios</span>             
            <span class="tools pull-right">
                <a class="fa fa-chevron-down" href="javascript:;"></a>
                <a class="fa fa-times" href="javascript:;"></a>
            </span>
            </header>
              <div class="panel-body">
                <div class="row col-lg-12">
                <section id="unseen">
                  <table class="table table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Primer Nombre</th>
                                  <th>Segundo Nombre</th>
                                  <th>Tipo de Usuario</th> 
                              </tr>
                              </thead>
                              <tbody>
                                @foreach($last_users as $key => $user)
                              <tr>
                                  <td>{{ $key + 1 }}</td>
                                  <td>{{ $user->primer_nombre }}</td>
                                  <td>{{ $user->segundo_nombre }}</td>
                                  <td>{{ $user->tipoUsuario->perfil }}</td>
                              </tr>
                              @endforeach
                              </tbody>
                  </table>
                </section>
                </div>
              </div>
        </section>
      </div>
      <div class="col-lg-4">
        <section class="panel">
          <header class="panel-heading terques">
          <span style="color:white;">Ultimos Votantes</span>
             
            <span class="tools pull-right">
                <a class="fa fa-chevron-down" href="javascript:;"></a>
                <a class="fa fa-times" href="javascript:;"></a>
            </span>
            </header>
              <div class="panel-body">
                <table class="table table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Nombre</th>
                                  <th>Lider</th>
                                  <th>Puesto de votación</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                              @foreach($last_votantes as $key => $v)
                                  <td>{{ $key + 1 }}</td>
                                  <td>{{ $v->getFullName() }}</td>
                                  <td>{{ $v->lider->getFullName() }}</td>
                                  <td>{{ $v->puesto->nombre }}</td>
                              </tr>
                              @endforeach
                              </tbody>
                  </table>
              </div>
        </section>
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