@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Crear Paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
    <div class="container">
        <div class="col-sm-8">
            <h1>Crear Paciente</h1>
            <form action="{{url('paciente')}}" method="POST">
            @csrf
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-sm-2 col-form-label">Dni</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Dni">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronombre" class="col-sm-2 col-form-label">Pronombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pronombre" name="pronombre" placeholder="Pronombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genero" name="genero" placeholder="Genero">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nationality" class="col-sm-2 col-form-label">Nacionalidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nacionalidad">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nivelEducativo" class="col-sm-2 col-form-label">Educación</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nivelEducativo" name="nivelEducativo" placeholder="Educación">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroAfiliado" class="col-sm-2 col-form-label"># Afiliado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroAfiliado" name="nroAfiliado" placeholder="# Afiliado">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-sm-2 col-form-label"># Historial</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroHistorial" name="nroHistorial" placeholder="# Historial">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Dirección">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Ciudad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state" class="col-sm-2 col-form-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label">País</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="country" name="country" placeholder="País">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postalCode" class="col-sm-2 col-form-label">Codigo postal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Codigo postal">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="socialWork" class="col-sm-2 col-form-label">Obra social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="socialWork" name="socialWork" placeholder="Obra social">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
            <a href="{{ URL::previous() }}">Go Back</a>
</body>
</html>
