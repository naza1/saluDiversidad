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
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{url('paciente')}}" method="POST">
            @csrf
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="Nombre" maxlength="250" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" value="{{old('apellido')}}" name="apellido" maxlength="250" placeholder="Apellido">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-sm-2 col-form-label">Dni</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dni" value="{{old('dni')}}" name="dni" maxlength="250" placeholder="Dni" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" maxlength="250" placeholder="email" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronombre" class="col-sm-2 col-form-label">Pronombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pronombre" name="pronombre" value="{{old('pronombre')}}" maxlength="250" placeholder="Pronombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="genero" name="genero" value="{{old('genero')}}">
                            <option value="">-- Escoja el Genero --</option>
                            @foreach($generos as $genero)
                                <option value="{{ $genero['Nombre'] }}" required>{{$genero['Nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nationality" class="col-sm-2 col-form-label">Nacionalidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{old('nationality')}}" maxlength="250" placeholder="Nacionalidad">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nivelEducativo" class="col-sm-2 col-form-label">Educación</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nivelEducativo" name="nivelEducativo" value="{{old('nivelEducativo')}}" maxlength="250" placeholder="Educación">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroAfiliado" class="col-sm-2 col-form-label"># Afiliado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroAfiliado" name="nroAfiliado" value="{{old('nroAfiliado')}}" maxlength="250" placeholder="# Afiliado">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-sm-2 col-form-label"># Historial</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroHistorial" name="nroHistorial" value="{{old('nroHistorial')}}" maxlength="250" placeholder="# Historial">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" maxlength="250" placeholder="Dirección">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Ciudad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" maxlength="250" placeholder="Ciudad">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state" class="col-sm-2 col-form-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}" maxlength="250" placeholder="Estado">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label">País</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="country" name="country" value="{{old('country')}}" maxlength="250" placeholder="País">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postalCode" class="col-sm-2 col-form-label">Codigo postal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="postalCode" name="postalCode" value="{{old('postalCode')}}" maxlength="250" placeholder="Codigo postal">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="socialWork" class="col-sm-2 col-form-label">Obra social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="socialWork" name="socialWork" value="{{old('socialWork')}}" maxlength="250" placeholder="Obra social">
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
