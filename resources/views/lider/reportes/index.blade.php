@extends('app')

@section('menuLateral')
	@include('lider.menuLateral')
@endsection
@section('content')
<section class="wrapper site-min-height">
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ url('/lider/reportes/general') }}" target="_blank">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="value">
                            <p>Reporte general</p>
                            <h1 class="">votantes</h1>
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
