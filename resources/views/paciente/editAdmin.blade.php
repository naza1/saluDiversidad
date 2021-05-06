@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/dashboardAdmin') }}">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="{{ url('/paciente') }}">Opciones para pacientes</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ver y editar pacientes</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Datos personales</div>
                @if($errors->any())

                <div class="card-body">
                 <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row d-flex justify-content-center">
            @if($paciente->ImageUrl != null)
                <div class="card justify-content-center" style="width: 18rem;">
                <img class="card-img-top" src="{{url($paciente->ImageUrl)}}" alt="Imagen de perfil"></div>
            @endif
            </div>
           
            <form action="{{ url('paciente/' .$paciente->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                <input name="id" value="{{$paciente->id}}" type="hidden" >
                </div>
                </div>

                <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="250" placeholder="Nombre" value="{{$paciente->Nombre}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Apellido" value="{{$paciente->Apellido}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-md-4 col-form-label text-md-right">DNI o PASAPORTE</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="dni" name="dni" maxlength="250" placeholder="Dni" value="{{$paciente->Dni}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nacimiento" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="nacimiento" name="nacimiento" maxlength="250" placeholder="Fecha de Nacimiento" value="{{$paciente->FechaNacimiento}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tutor" class="col-md-4 col-form-label text-md-right">Tutor</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="tutor" name="tutor" maxlength="250" placeholder="Tutor" value="{{$paciente->tutor}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronombre" class="col-md-4 col-form-label text-md-right">Pronombre</label>
                    <div class="col-md-6">
                        <select class="form-control" id="pronombre" name="pronombre" required>
                            @if($paciente->Pronombre != null)
                                <option value="{{$paciente->Pronombre}}">{{$paciente->Pronombre}}</option>
                            @else
                                <option value="">-- Escoja el Pronombre --</option>
                            @endif
                            @foreach($pronombres as $pronombre)
                                <option value="{{ $pronombre['Nombre'] }}" required>{{$pronombre['Nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genero" class="col-md-4 col-form-label text-md-right">Género</label>
                    <div class=col-md-6>
                        <select class="form-control" id="genero" name="genero">
                        @if($paciente->Genero != null)
                            <option value="{{$paciente->Genero}}">{{$paciente->Genero}}</option>
                        @else
                            <option value="">-- Escoja el Genero --</option>
                        @endif
                        @foreach($generos as $genero)
                            <option value="{{ $genero['Nombre'] }}" required>{{$genero['Nombre']}}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>

                <div class="form-group row">
                    <label for="nationality" class="col-md-4 col-form-label text-md-right">Nacionalidad</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nationality" name="nationality" maxlength="250" placeholder="Nacionalidad" value="{{$paciente->Nationality}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nivelEducativo" class="col-md-4 col-form-label text-md-right">Nivel educativo</label>
                    <div class="col-md-6">
                        <select class="form-control" id="nivelEducativo" name="nivelEducativo">
                            @if($paciente->NivelEducativo != null)
                                <option value="{{$paciente->NivelEducativo}}">{{$paciente->NivelEducativo}}</option>
                            @else
                                <option value="">-- Escoja el Nivel Educativo --</option>
                            @endif
                            @foreach($educaciones as $educacion)
                                <option value="{{ $educacion['Nombre'] }}" required>{{$educacion['Nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">Datos de contacto</div>
               
                <div class="card-body">
                
                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" maxlength="250" placeholder="email" value="{{$paciente->Email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Telefóno</label>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" id="telefono" name="telefono" value="{{$paciente->telefono}}" maxlength="250" placeholder="(Código de área) Número" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Telefóno alternativo</label>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" id="telefono_alternativo" name="telefono_alternativo" value="{{$paciente->telefono_alternativo}}" maxlength="250" placeholder="(Código de área) Número" required>
                    </div>
                </div>           
                <div class="form-group row">
                    <label for="socialWork" class="col-md-4 col-form-label text-md-right">Obra social</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="socialWork" maxlength="250" name="socialWork" placeholder="Obra social" value="{{$paciente->SocialWork}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nroAfiliado" class="col-md-4 col-form-label text-md-right">Nro de afiliado</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nroAfiliado" maxlength="250" name="nroAfiliado" placeholder="Nro de afiliado de la Obra social" value="{{$paciente->NroAfiliado}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-md-4 col-form-label text-md-right">Nro de historia clínica</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nroHistorial" maxlength="250" name="nroHistorial" placeholder="Historia clínica en CAPS" value="{{$paciente->NroHistorial}}">
                    </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-primary mb-3">Dirección postal</div>
                  <div class="card-body">
                
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">Calle y número</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="address" name="address" maxlength="250" placeholder="Dirección" value="{{$paciente->Address}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">Ciudad</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="city" name="city" maxlength="250" placeholder="Ciudad" value="{{$paciente->City}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postalCode" class="col-md-4 col-form-label text-md-right">Codigo postal</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="postalCode" maxlength="250" name="postalCode" placeholder="Codigo postal" value="{{$paciente->PostalCode}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="state" class="col-md-4 col-form-label text-md-right">Provincia</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="state" name="state" maxlength="250" placeholder="Provincia" value="{{$paciente->State}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-md-4 col-form-label text-md-right">País</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="country" name="country" maxlength="250" placeholder="País" value="{{$paciente->Country}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
 </form>
 @include('layouts.footer')
</body>
</html>

