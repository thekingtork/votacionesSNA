<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Votaciones SNAC</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    
     <!-- Custom styles for this template -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/js/html5shiv.js') }}"></script>
      <script src="{{ asset('/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>

<body class="lock-screen">
    <div class="lock-wrapper">
        <div class="lock-box text-center">
            
            <h1>Revisar lugar de votación</h1>
            <span class="locked">Ingrese su cedula</span>
            <form role="form" class="form-inline">
                <div class="form-group col-lg-12">
                    <input type="text" id="cedula" placeholder="CEDULA" class="form-control lock-input">
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                    <button class="btn btn-lock solicitar" type="button">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Lugar de votación</h4>
                </div>
                <div class="modal-body">
                	<div class="row">
                		
	                	<div class="col-sm-6"><h4>Puesto de votación</h4></div> 
		                <div class="col-sm-6">
		                    <h3>
		                      <span id="n-puesto">0</span>
		                    </h3>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-sm-6">
		                    <h4>Mesa:</h4>
		                </div>
		                <div class="col-sm-6">
		                    <h3>
		                      <span id="n-mesa">0</span>
		                    </h3>
		                </div>
                	</div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                </div>
            </div>
        </div>
	</div>
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header red">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Error!</h4>
                </div>
                <div class="modal-body">
                	<div class="row">
                		
                	</div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                </div>
            </div>
        </div>
	</div>
	<!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/respond.min.js') }}" ></script>

    <!--common script for all pages-->
    <script src="{{ asset('/js/common-scripts.js') }}"></script>

	<script type="text/javascript">
		jQuery(document).ready(function() {
            $(".solicitar").click(function (e) {
            	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            	var c = $('#cedula').val();
            	$.ajax({
				  type    :"POST",
				  url     :"{{ url('/votante/consultar') }}",
				  dataType:"json",
				  data    :{ _token: CSRF_TOKEN, cedula : c  },
				  success :function(response) {
				    if( response.datos != null )
				    {
				    	$('#n-puesto').html(response.datos.puesto);
				    	$('#n-mesa').html(response.datos.mesa);
                		$("#myModal2").modal('show');
				    }
				    else
				    {
				    	$("#myModal3 .modal-body .row").html("<h4>Error: Cedula no encontrada.</h4>")
                		$("#myModal3").modal('show');

				    }
				  },
				  error: function(e) {
				    console.log(e.responseText);
				  }
				});
            });
          });
      </script>
</body>
</html>
