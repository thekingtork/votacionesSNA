@extends('app')

@section('menuLateral')
	@include('admin.menuLateral')
@endsection
@section('content')
<section class="wrapper site-min-height">
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/administrador/reportes/general') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-info"></i>
                        </div>
                        <div class="value">
                            <p>Reporte</p>
                            <h1 class="">general</h1>
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
