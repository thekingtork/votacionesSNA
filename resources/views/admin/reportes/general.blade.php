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
                <td>Cantidad de votantes: </td>
                <td>
                    {{ $cantidad_votantes }}
                </td>
            </tr>
            <tr>
                <td>Cantidad de lideres: </td>
                <td>
                    {{ $cantidad_lideres }}
                </td>
            </tr>
        </tbody>
    </table>
    <h2>Votantes por lider</h2>
    <table style="width:100%">
        <thead>
            <tr>
                <td>Lider</td>
                <td>Cantidad de votantes</td>
            </tr>
        </thead>
        <tbody>
            @foreach( $lideres as $lider )
            <tr>
                <td>{{ $lider->getFullName() }}</td>
                <td>
                    {{ count($lider->votantes) }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
