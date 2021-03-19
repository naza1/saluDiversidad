@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
    <div class="container">
        <div class="col-sm-8">
            <h1>Editar Paciente</h1>
            <form action="{{ url('paciente/' .$paciente->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
                <input name="id" value="{{$paciente->id}}" type="hidden">

                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$paciente->Nombre}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{$paciente->Apellido}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-sm-2 col-form-label">Dni</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Dni" value="{{$paciente->Dni}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$paciente->Email}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
</body>
</html>

