@extends('app')

@section('menuLateral')
	@include('admin.menuLateral')
@endsection
@section('content')
<section class="wrapper site-min-height">
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/administrador/reportes/general/pdf') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="value">
                            <p>Reporte general</p>
                            <h1 class="">PDF</h1>
                        </div>
                    </section> 
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/administrador/reportes/general/excel') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <div class="value">
                            <p>Reporte general</p>
                            <h1 class="">EXCEL</h1>
                        </div>
                    </section> 
                </a>
            </div>
      </div>
      <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/administrador/reportes/lista/pdf') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="value">
                            <p>Lista de Votantes</p>
                            <h1 class="">PDF</h1>
                        </div>
                    </section> 
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/administrador/reportes/lista/excel') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <div class="value">
                            <p>Lista de Votantes</p>
                            <h1 class="">EXCEL</h1>
                        </div>
                    </section> 
                </a>
            </div>
      </div>
      <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/administrador/reportes/proceso/pdf') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol yellow">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="value">
                            <p>proceso de votación</p>
                            <h1 class="">PDF</h1>
                        </div>
                    </section> 
                </a>
            </div>
      </div>

</section>
</section>
@endsection
@section('script')
@endsection
