<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <table style="width:100%">
        <thead>
            <tr>
                <td>N°</td>
                <td>CEDULA </td>
                <td>PRIMER NOMBRE</td>
                <td>SEGUNDO NOMBRE</td>
                <td>PRIMER APELLIDO</td>
                <td>SEGUNDO APELLIDO</td>
                <td>DIRECCIÓN</td>
                <td>TELEFONO</td>
                <td>LIDER POLITICO</td>
            </tr>
        </thead>
        <tbody>
            @foreach( $votantes as $key => $votante )
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $votante->cedula }}</td>
                <td>{{ $votante->primer_nombre }}</td>
                <td>{{ $votante->segundo_nombre }}</td>
                <td>{{ $votante->primer_apellido }}</td>
                <td>{{ $votante->segundo_apellido }}</td>
                <td>{{ $votante->direccion }}</td>
                <td>{{ $votante->telefono }}</td>
                <td>{{ $votante->lider->getFullName() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
