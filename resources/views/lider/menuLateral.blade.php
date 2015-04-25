<li>
        <a class="active" href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i>
            <span>Escritorio</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-group"></i>
        <span>Administrar votantes</span>
      </a>
      <ul class="sub">
        <li><a  href="{{ url('/lider/votantes') }}">Votantes</a></li>
        <li><a  href="{{ url('/lider/votantes/create') }}">Agregar</a></li>
      </ul>
    </li>
    <li>
        <a class="" href="{{ url('/lider/reportes') }}">
            <i class="fa fa-print"></i>
            <span>Reportes</span>
        </a>
    </li>