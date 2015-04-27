@extends('app')
@section('menuLateral')
	@include('lider.menuLateral')
@endsection
@section('content')
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <div class="panel-body">
          <h1>Bienvenid@:  {{Auth::user()->getFullName()}}</h1>
        </div>
      </section>
    </div>
  </div>
	<div class="row">
    <div class="col-lg-4">
      <div class="col-lg-12">
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
    </div>
    <div class="col-lg-5">
        <section class="panel terques-chart">
          <header class="panel-heading">
          <span style="color:white;">Ultimos votantes registrado </span>
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
    <div class="col-lg-3">
        <div class="row state-overview">
          <div class="col-lg-12 col-sm-6">
            <a href="#">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="value">
                        <h1 class="count"></h1>
                        <p>Votantes</p>
                    </div>
                </section>
            </a>
          </div>
      </div>
       <div class="row state-overview">
            <div class="col-lg-12 col-sm-6">
                <a href="{{ url('/lider/reportes/general') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="value">
                            <h4 style="color: #c6cad6;">Reporte de</h4>
                            <h4 style="color: #c6cad6;">votantes</h4>
                        </div>
                    </section> 
                </a>
            </div>
      </div>
       <div class="row state-overview">
            <div class="col-lg-12 col-sm-6">
                <a href="{{ url('/lider/reportes/general') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol yellow">
                            <i class="fa fa-archive"></i>
                        </div>
                        <div class="value">
                            <h4 style="color: #c6cad6;">Mesa de</h4>
                            <h4 style="color: #c6cad6;">Votación</h4>
                        </div>
                    </section> 
                </a>
            </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
  <script src="{{ asset('/js/count.js') }}"></script>
  <script>
      countUp({{ $votantes }},".count");
  </script>
@endsection
