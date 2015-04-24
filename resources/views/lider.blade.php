@extends('app')
@section('menuLateral')
	@include('lider.menuLateral')
@endsection
@section('content')
<section class="wrapper">
	<div class="row">
		<h2>Bienvenido Lider</h2>
	</div>
	<div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <a href="#">
                <section class="panel">
                    <div class="symbol terques">
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
</section>
@endsection

@section('script')
  <script src="{{ asset('/js/count.js') }}"></script>
  <script>
      countUp({{ $votantes }},".count");
  </script>
@endsection
