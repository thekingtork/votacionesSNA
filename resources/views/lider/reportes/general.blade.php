<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
  @page { margin: 0in; }
  body {
    background-image: url({{ asset('img/fodo_lider_pdf.jpg') }});
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 100%;
    width:100%;
    height:100%;
  }
</style>
</head>
<body>
    <h1 style="text-align:center;padding-top:30px;">REPORTE DE VOTANTES</h1>
    
    <table style="width:90%;padding-left:100px;padding-top:50px;">
        <tbody>
            <tr>
                <td>NOMBRE DEL LIDER: {{ $lider->getFullName() }}: </td>
                <td>
                    TELEFONO: {{ $lider->telefono }}
                </td>
                <td>
                    SECTOR: {{ $lider->sector }}
                </td>
            </tr>
        </tbody>
    </table>
    <table style="text-align:center;width:90%;padding-left:100px;padding-top:50px;">
        <thead style="border-bottom: 2px solid #000;background:rgb(247,201,10)">
            <tr>
                <td>N°</td>
                <td style="border-left: 1px solid #000;">CEDULA</td>
                <td style="border-left: 1px solid #000;">PRIMER NOMBRE</td>
                <td style="border-left: 1px solid #000;">SEGUNDO NOMBRE</td>
                <td style="border-left: 1px solid #000;">PRIMER APELLIDO</td>
                <td style="border-left: 1px solid #000;">SEGUNDO APELLIDO</td>
                <td style="border-left: 1px solid #000;">DIRECCION</td>
                <td style="border-left: 1px solid #000;">TELEFONO</td>
            </tr>
        </thead>
        <tbody style="background:#FFF;">
            @foreach( $lider->votantes as $key => $votante )
            <tr>
                <td style="border-top: 1px solid #000;">{{ $key + 1 }}</td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->cedula }} </td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->primer_nombre }} </td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->segundo_apellido }}</td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->primer_apellido }}</td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->segundo_apellido }}</td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->direccion }}</td>
                <td style="border-left: 1px solid #000;border-top: 1px solid #000;">{{ $votante->telefono }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
