<!DOCTYPE html>
<html>
<head>
    <title>Orden estudios</title>
    
</head>
<body>
<div id="content" class="col" style="width: 400px; margin: auto; min-height: 700px !important; border-color: gray; border-width: 1px; border-style: solid; padding: 40px 20px 20px 20px;">
<div>
    <div style="width: 200px; display: inline-block;"><p style="font-family: Verdana,Geneva,sans-serif; font-weight: 700; font-size: 20px;">Unidades sanitarias</p></div>
    <div style="width: 150px; display: inline-block;"><img src="{{ public_path('img/logo_mgp_sin_fondo.png') }}"></div>
    <hr style="height: 10px; background-color: black; width: 100%;">
</div>
    <p style="font-family: Verdana,Geneva,sans-serif;"><b>Nombre y Apellido:</b> {{ $nombre }} {{ $apellido }}</p>
    <p style="font-family: Verdana,Geneva,sans-serif;"><b>DNI:</b> {{ $dni }}</p>
    <p style="font-family: Verdana,Geneva,sans-serif;"><b>Obra social:</b> {{ $SocialWork }}  <b>Nro:</b> {{ $NroAfiliado }} </p> 
    <hr style="height: 10px; background-color: #cccccc; border-color: #cccccc; width: 100%;">
    <p style="font-family: Verdana,Geneva,sans-serif;">Rp/</p>
    <div style="background-image: url('{{ public_path('img/back_receta.png')}}');background-repeat: no-repeat; background-position: center; min-height: 75% !important;">
            @foreach($estudios as $estudio)
        <p style="font-family: Verdana,Geneva,sans-serif; text-align: left; font-size: 14px; line-height:1px;">{{ $estudio }}</p>
        @endforeach
        <p style="font-family: Verdana,Geneva,sans-serif; text-align: left; font-size: 14px;"><i>Diagnóstico: Proceso hormonal de modificación</i></p>
        @if($medico == "Nicolás Zanier")
            <p style="font-family: Verdana,Geneva,sans-serif; text-align: right;"><img src="{{ public_path('img/firma.png') }}"></p>
        @else
            <p style="font-family: Verdana,Geneva,sans-serif; text-align: right;"><img src="{{ public_path('img/firma_virginia.png') }}"></p>
        @endif
    <p style="font-family: Verdana,Geneva,sans-serif; text-align: right;">Mar del Plata {{ $fecha }}</p>
</div>
    <hr style="height: 10px; background-color: black; width: 100%; ">
</div>
</body>
</html>