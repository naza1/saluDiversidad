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
                    <label for="pronombre" class="col-sm-2 col-form-label">Pronombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pronombre" name="pronombre" placeholder="Pronombre" value="{{$paciente->Pronombre}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genero" name="genero" placeholder="Genero" value="{{$paciente->Genero}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nationality" class="col-sm-2 col-form-label">Nacionalidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nacionalidad" value="{{$paciente->Nationality}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nivelEducativo" class="col-sm-2 col-form-label">Educación</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nivelEducativo" name="nivelEducativo" placeholder="Educación" value="{{$paciente->NivelEducativo}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroAfiliado" class="col-sm-2 col-form-label"># Afiliado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroAfiliado" name="nroAfiliado" placeholder="# Afiliado" value="{{$paciente->NroAfiliado}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-sm-2 col-form-label"># Historial</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroHistorial" name="nroHistorial" placeholder="# Hitorial" value="{{$paciente->NroHistorial}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Dirección" value="{{$paciente->Address}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Ciudad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad" value="{{$paciente->City}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state" class="col-sm-2 col-form-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="state" name="state" placeholder="Estado" value="{{$paciente->State}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label">País</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="country" name="country" placeholder="País" value="{{$paciente->Country}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postalCode" class="col-sm-2 col-form-label">Codigo postal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Codigo postal" value="{{$paciente->PostalCode}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="socialWork" class="col-sm-2 col-form-label">Obra social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="socialWork" name="socialWork" placeholder="Obra social" value="{{$paciente->SocialWork}}">
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

