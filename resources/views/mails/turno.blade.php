<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Aprobación de turno</title>
</head>
<body><img src="{{ url('http://c2170987.ferozo.com/wp-content/uploads/2021/03/logo.png') }}" alt="Logo Salud y Diversidad" class="logo" width="30%">
    <p>Estimadx: {{$turnoDato->NombrePaciente}} {{$turnoDato->ApellidoPaciente}} <br><br>
    Se ha confirmado su turno para el día {{Carbon\Carbon::parse($turnoDato->Dia)->toFormattedDateString('d-m-Y')}} a las {{$turnoDato->Hora}}
    con el medico {{$turnoDato->Medico}} en el Centro de Salud {{$turnoDato->Lugar}}.</p>
    <br>
    ----------------------------------------<br>
    Programa Municipal de Salud y Diversidad<br>
    Municipalidad del Partido de Gral. Pueyrredón
</body>
</html>