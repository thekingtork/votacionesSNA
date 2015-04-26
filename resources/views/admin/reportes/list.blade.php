<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <h1>Lista de votantes</h1>
    <table style="width:100%">
        <thead>
            <tr>
                <td>Nombre completo</td>
                <td>Cedula</td>
                <td>Lider</td>
                <td>Puesto de votación</td>
                <td>Numero de mesa</td>
            </tr>
        </thead>
        <tbody>
            @foreach( $votantes as $votante )
            <tr>
                <td>{{ $votante->primer_nombre . $votante->segundo_nombre . $votante->primer_apellido . $votante->segundo_apellido }}</td>
                <td>{{ $votante->cedula }}</td>
                <td>{{ $votante->lider->getFullName() }}</td>
                <td>{{ $votante->puesto->nombre }}</td>
                <td>{{ $votante->numero_mesa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
