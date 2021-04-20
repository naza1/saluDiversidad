@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar mis datos</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/homePaciente') }}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar mis datos</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Mis datos personales</div>
            
            <form action="{{ url('paciente/' .$paciente->id) }}" method="post" enctype="multipart/form-data">
            <div class="row d-flex justify-content-center">
            @if($paciente->ImageUrl != null)
            <div class="card justify-content-center" style="width: 18rem;">
                <img class="card-img-top" src="{{url($paciente->ImageUrl)}}" alt="Imagen de perfil"></div>
                    @endif
            </div>        
            @csrf
            {{ method_field('PUT') }}
                <input name="id" value="{{$paciente->id}}" type="hidden">
                <div class="card-body">
                <div class="form-group row">
                    <label for="imagen" class="col-md-4 col-form-label text-md-right">Cambiar o subir mi foto de perfil</label>
                    <div class="col-md-6">
                            <input type="file" name="perfilFoto" id="perfilFoto" accept="image/*" value="{{$paciente->ImageUrl}}">
                            @error('perfilFoto')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                    </div>
                   
                </div>

                <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="250" placeholder="Nombre" value="{{$paciente->Nombre}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Apellido" value="{{$paciente->Apellido}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-md-4 col-form-label text-md-right">DNI</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="dni" name="dni" maxlength="250" placeholder="Dni" value="{{$paciente->Dni}}" {{$paciente->Dni ? 'readonly':''}}>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pronombre" class="col-md-4 col-form-label text-md-right">Pronombre</label>
                    <div class="col-md-6">
                    <select class="form-control" id="pronombre" name="pronombre">
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
                    <div class="col-md-6">
                        <select class="form-control" id="genero" name="genero" >
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
                        <input type="text" class="form-control" id="nationality" name="nationality" maxlength="250" placeholder="Nacionalidad" value="{{$paciente->Nationality}}" >
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
                        <input type="text" class="form-control" id="email" name="email" maxlength="250" placeholder="email" value="{{$paciente->Email}}" {{$paciente->Email ? 'readonly':''}}>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefóno</label>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="250" placeholder="(Código de área) Número" value="{{$paciente->telefono}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefóno alternativo</label>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" id="telefono_alternativo" name="telefono_alternativo" maxlength="250" placeholder="(Código de área) Número" value="{{$paciente->telefono_alternativo}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="socialWork" class="col-md-4 col-form-label text-md-right">Obra social</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="socialWork" maxlength="250" name="socialWork" placeholder="Obra social" value="{{$paciente->SocialWork}}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nroAfiliado" class="col-md-4 col-form-label text-md-right">Nro de Afiliado</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nroAfiliado" maxlength="250" name="nroAfiliado" placeholder="Nro de afiliado de la Obra social" value="{{$paciente->NroAfiliado}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-md-4 col-form-label text-md-right">Nro de historia clínica</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nroHistorial" maxlength="250" name="nroHistorial" placeholder="Historia clínica en CAPS" value="{{$paciente->NroHistorial}}" {{$paciente->NroHistorial ? 'readonly':''}}>
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
                        <input type="text" class="form-control" id="address" name="address" maxlength="250" placeholder="Dirección" value="{{$paciente->Address}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">Ciudad</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="city" name="city" maxlength="250" placeholder="Ciudad" value="{{$paciente->City}}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postalCode" class="col-md-4 col-form-label text-md-right">Código postal</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="postalCode" maxlength="250" name="postalCode" placeholder="Codigo postal" value="{{$paciente->PostalCode}}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state" class="col-md-4 col-form-label text-md-right">Provincia</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="state" name="state" maxlength="250" placeholder="Estado" value="{{$paciente->State}}" >
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
</div>
 </form>
 @include('layouts.footer')
</body>
</html>

