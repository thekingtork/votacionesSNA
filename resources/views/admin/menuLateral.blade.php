<li>
        <a class="active" href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i>
            <span>Escritorio</span>
        </a>
    </li>
    <li class="sub-menu">
    	<a href="javascript:;" >
    		<i class="fa fa-book"></i>
        <span>Administrar Usuarios</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/administrador/users') }}">Usuarios Activos</a></li>
        <li><a  href="{{ url('/administrador/users/create') }}">Agregar</a></li>
        <li><a  href="">Modificar</a></li>
        <li><a  href="#">Eliminar</a></li>
      </ul>
    </li>