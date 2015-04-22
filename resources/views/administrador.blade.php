@extends('app')
@section('menuLateral')
	@include('admin.menuLateral')
@endsection
@section('content')
<section class="wrapper">
	<div class="row">
		<h2>Bienvenido Administrador</h2>
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
  </script>
@endsection