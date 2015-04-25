<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body class="lock-screen">
    <h1>Reporte General</h1>
    <h2>Datos Generales</h2>
    <table style="width:100%">
        <tbody>
            <tr>
                <td>Cantidad de votantes registrados con {{ Auth::user()->getFullName() }}: </td>
                <td>
                    {{ $cantidad_votantes }}
                </td>
            </tr>
        </tbody>
    </table>
    <h2>Votantes del lider</h2>
    <table style="width:100%">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Puesto de votación</td>
                <td>Numero de la mesa</td>
            </tr>
        </thead>
        <tbody>
            @foreach( $votantes as $votante )
            <tr>
                <td>{{ $votante->primer_nombre }} {{ $votante->segundo_apellido }}</td>
                <td>{{ $votante->primer_apellido }} {{ $votante->segundo_apellido }}</td>
                <td>{{ $votante->puesto->nombre }}</td>
                <td>{{ $votante->numero_mesa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
