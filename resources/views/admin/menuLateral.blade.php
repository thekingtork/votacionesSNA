<li>
        <a class="active" href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i>
            <span>Escritorio</span>
        </a>
    </li>
    <li class="sub-menu">
    	<a href="javascript:;" >
    		<i class="fa fa-user"></i>
        <span>Administrar Usuarios</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/administrador/users') }}">Usuarios Activos</a></li>
        <li><a  href="{{ url('/administrador/users/create') }}">Agregar</a></li>
      </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-male"></i>
        <span>Administrar Lideres</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/administrador/lideres') }}">Lideres</a></li>
        <li><a  href="{{ url('/administrador/lideres/create') }}">Agregar</a></li>
      </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-laptop"></i>
        <span>Administrar puestos</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/administrador/puestos') }}">Puestos</a></li>
        <li><a  href="{{ url('/administrador/puestos/create') }}">Agregar</a></li>
      </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-group"></i>
        <span>Administrar votantes</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/administrador/votantes') }}">Votantes</a></li>
        <li><a  href="{{ url('/administrador/votantes/create') }}">Agregar</a></li>
      </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-archive"></i>
        <span>Administrar votación</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/administrador/votos') }}">Votaciones</a></li>
        <li><a  href="{{ url('/administrador/votos/reiniciar') }}">Agregar</a></li>
      </ul>
    </li>