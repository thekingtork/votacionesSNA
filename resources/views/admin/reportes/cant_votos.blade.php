<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
  @page { margin: 0in; }
  body {
    background-image: url({{ asset('img/fodo_pdf_2.jpg') }});
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 100%;
    width:100%;
    height:100%;
  }
</style>
</head>
<body>
    <h2 style="text-align:right;padding-top:100px;padding-right:80px;font-weight: normal;">INFORME DEL PROCESO DE VOTACIONES</h2>
    
    <div style="padding:40px;">
        <div style=" border:double 5px rgb(247,201,10);min-height:100px;">
            <div style="padding:10px;">
                <p>Cantidad de votos registrados: {{ $cant_votos }}</p>
                <p>Detalles de votantes en puesto de votación</p>
            </div>
            <table style="width:100%;">
                <thead style="background:rgb(247,201,10);color:white;height:50px;">
                    <tr>
                        <th>
                            <h3>PUESTO DE VOTACIÓN</h3>
                        </th>
                        <th>
                            <h3>CANTIDAD DE VOTOS REGISTADOS</h3>
                        </th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    @foreach( $puestos as $puesto )
                     <tr>
                        <td>
                            {{ $puesto->nombre }}
                        </td>
                        <td>
                            {{ $puesto->votantes()->where('sufrago','=',1)->count() }}
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            TOTAL:
                        </td>
                        <td>
                            {{ $cant_votos }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="padding:10px;text-align:center">
                <p> Este informe es expedido el {{ $fecha }} generado por el usuario {{ Auth::user()->getFullName() }} </p>
            </div>
        </div>
    </div>
</body>
</html>
