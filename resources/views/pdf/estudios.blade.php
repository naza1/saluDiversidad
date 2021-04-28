<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    <h1>Nombre {{ $nombre }}</h1>
    <p>Apellido {{ $apellido }}</p>
    <p>Fecha {{ $fecha }}</p>
    @foreach($estudios as $estudio)
    <p>{{ $estudio }}</p>
    @endforeach
</body>
</html>