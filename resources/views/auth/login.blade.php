<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Votaciones 2015 Ingrid Pestana</title>

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
  <body class="login-body">
    <div class="container">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Ups!</strong> Hubo algunos problemas con sus datos.<br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
      <form class="form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2 class="form-signin-heading">Acceder al sistema</h2>
        <div class="login-wrap">
            <input type="email" class="form-control" name="email" placeholder="E-mail" autofocus>
            <input type="password" class="form-control" placeholder="Contraseña" name="password">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordar datos
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Olvido su Contraseña?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Acceder</button>
            <p>Usted puede registrarse usando sus redes sociales</p>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </div>
            <div class="registration">
                ¿No tienes una cuenta todavía?
                <a class="" href="#">
                    Crear una cuenta
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Olvido su Contraseña ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Ingrese su dirección de correo electrónico para restablecer su contraseña.</p>
                          <input type="text" name="emailr" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                          <button class="btn btn-success" type="button">Enviar</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
      </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>