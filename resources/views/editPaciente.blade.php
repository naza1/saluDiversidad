@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Datos</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
    <div class="container">
        <div class="col-sm-8">
            <h1>Editar Datos</h1>
            <form action="{{ url('paciente/' .$paciente->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
                <input name="id" value="{{$paciente->id}}" type="hidden">

                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="250" placeholder="Nombre" value="{{$paciente->Nombre}}" {{$paciente->Nombre ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Apellido" value="{{$paciente->Apellido}}" {{$paciente->Apellido ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-sm-2 col-form-label">Dni</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dni" name="dni" maxlength="250" placeholder="Dni" value="{{$paciente->Dni}}" {{$paciente->Dni ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" maxlength="250" placeholder="email" value="{{$paciente->Email}}" {{$paciente->Email ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronombre" class="col-sm-2 col-form-label">Pronombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pronombre" name="pronombre" maxlength="250" placeholder="Pronombre" value="{{$paciente->Pronombre}}" {{$paciente->Pronombre ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="genero" name="genero">
                            <option value="{{$paciente->Genero}}">{{$paciente->Genero}}</option>
                            @foreach($generos as $genero)
                                <option value="{{ $genero['Nombre'] }}" required>{{$genero['Nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nationality" class="col-sm-2 col-form-label">Nacionalidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nationality" name="nationality" maxlength="250" placeholder="Nacionalidad" value="{{$paciente->Nationality}}" {{$paciente->Nationality ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nivelEducativo" class="col-sm-2 col-form-label">Educación</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nivelEducativo" maxlength="250" name="nivelEducativo" placeholder="Educación" value="{{$paciente->NivelEducativo}}" {{$paciente->NivelEducativo ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroAfiliado" class="col-sm-2 col-form-label"># Afiliado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroAfiliado" maxlength="250" name="nroAfiliado" placeholder="# Afiliado" value="{{$paciente->NroAfiliado}}" {{$paciente->NroAfiliado ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-sm-2 col-form-label"># Historial</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nroHistorial" maxlength="250" name="nroHistorial" placeholder="# Historial" value="{{$paciente->NroHistorial}}" {{$paciente->NroHistorial ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" maxlength="250" placeholder="Dirección" value="{{$paciente->Address}}" {{$paciente->Address ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">Ciudad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="city" name="city" maxlength="250" placeholder="Ciudad" value="{{$paciente->City}}" {{$paciente->City ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state" class="col-sm-2 col-form-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="state" name="state" maxlength="250" placeholder="Estado" value="{{$paciente->State}}" {{$paciente->State ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label">País</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="country" name="country" maxlength="250" placeholder="País" value="{{$paciente->Country}}" {{$paciente->Country ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postalCode" class="col-sm-2 col-form-label">Codigo postal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="postalCode" maxlength="250" name="postalCode" placeholder="Codigo postal" value="{{$paciente->PostalCode}}" {{$paciente->PostalCode ? 'readonly':''}}>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="socialWork" class="col-sm-2 col-form-label">Obra social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="socialWork" maxlength="250" name="socialWork" placeholder="Obra social" value="{{$paciente->SocialWork}}" {{$paciente->SocialWork ? 'readonly':''}}>
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

