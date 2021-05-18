<!DOCTYPE html>
<html>
<head>
    <title>Orden estudios</title>
    
</head>
<body>
<div id="content" class="col" style="max-width: 400px; margin: auto; height: 570px !important; border-color: gray; border-width: 1px; border-style: solid; padding: 30px 20px 10px 20px;">
<div>
    <div style="width: 200px; display: inline-block;"><p style="font-family: Verdana,Geneva,sans-serif; font-weight: 700; font-size: 16px;">Unidades sanitarias</p></div>
    <div style="width: 150px; display: inline-block;"><img src="{{ public_path('img/logo_mgp_sin_fondo.png') }}"></div>
    <hr style="height: 5px; background-color: black; width: 100%;">
</div>
    <p style="font-family: Verdana,Geneva,sans-serif;font-size: 12px;"><b>Nombre y Apellido:</b> {{ $nombre }} {{ $apellido }}<br>
    <b>DNI:</b> {{ $dni }}<br>
    <b>Obra social:</b> {{ $SocialWork }}  <b>Nro:</b> {{ $NroAfiliado }} <br></p>
    <hr style="height: 5px; background-color: #cccccc; border-color: #cccccc; width: 100%;">
    <p style="font-family: Verdana,Geneva,sans-serif; line-height:1.5px; font-size: 12px;">Rp/</p>
    <div style="background-image: url('{{ public_path('img/back_receta.png')}}');background-repeat: no-repeat; background-position: center; height: 300px !important;">
    @foreach($recetas as $receta)
        <p style="font-family: Verdana,Geneva,sans-serif; text-align: left; font-size: 13px; line-height:15px;">- {{ $receta }}</p>
        
        @endforeach
        <p style="font-family: Verdana,Geneva,sans-serif; text-align: left; font-size: 13px; line-height:1px;">{{$adicional}}</p>
        <p style="font-family: Verdana,Geneva,sans-serif; text-align: left; font-size: 12px;"><i>DG: Proceso hormonal de modificación corporal</i></p>
    <div style="column-count: 2; column-gap: 5px;">
                  
        @if($medico == "Nicolás Zanier")
            <div style="font-family: Verdana,Geneva,sans-serif; text-align: right;"><img src="{{ public_path('img/firma.png') }}"></div>
        @else
            <div style="font-family: Verdana,Geneva,sans-serif; text-align: right;"><img src="{{ public_path('img/firma_virginia.png') }}"></div>
        @endif
        <div style="font-family: Verdana,Geneva,sans-serif; text-align: left;font-size: 12px;">Mar del Plata {{ $fecha }}</div>
    </div>
</div>
<hr style="height: 5px; background-color: black; width: 100%;">
</div>
</body>
</html>