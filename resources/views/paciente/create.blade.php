@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Crear Paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/dashboardAdmin') }}">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="{{ url('/paciente') }}">Opciones para usuaries</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear usuarie</li>
  </ol>
</nav>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">Crear usuarie</div>
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
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="Nombre" maxlength="250" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="apellido" value="{{old('apellido')}}" name="apellido" maxlength="250" placeholder="Apellido" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dni" class="col-md-4 col-form-label text-md-right">DNI O PASAPORTE</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="dni" value="{{old('dni')}}" name="dni" maxlength="250" placeholder="DNI o pasaporte" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" maxlength="250" placeholder="Fecha de Nacimiento" value="{{old('fechaNacimiento')}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronombre" class="col-md-4 col-form-label text-md-right">Pronombre</label>
                    <div class="col-md-6">
                        <select class="form-control" id="pronombre" name="pronombre" required>
                            @if (old('pronombre') != null)
                                <option value="{{old('pronombre')}}" selected>{{old('pronombre')}}</option>
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
                        <select class="form-control" id="genero" name="genero">
                        @if (old('genero') != null)
                            <option value="{{old('genero')}}" selected>{{old('genero')}}</option>
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
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{old('nationality')}}" maxlength="250" placeholder="Nacionalidad" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nivelEducativo" class="col-md-4 col-form-label text-md-right">Nivel educativo</label>
                    <div class="col-md-6">
                         <select class="form-control" id="nivelEducativo" name="nivelEducativo">
                        @if (old('nivelEducativo') != null)
                            <option value="{{old('nivelEducativo')}}" selected>{{old('nivelEducativo')}}</option>
                        @else
                            <option value="">-- Escoja el Nivel Educativo --</option>
                        @endif
                        @foreach($educaciones as $educacion)
                            <option value="{{ $educacion['Nombre'] }}" required>{{$educacion['Nombre']}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" maxlength="250" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefóno</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" maxlength="250" placeholder="Teléfono" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono_alternativo" class="col-md-4 col-form-label text-md-right">Telefóno alternativo</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="telefono_alternativo" name="telefono_alternativo" value="{{old('telefono_alternativo')}}" maxlength="250" placeholder="Teléfono alternativo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="socialWork" class="col-md-4 col-form-label text-md-right">Obra social</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="socialWork" name="socialWork" value="{{old('socialWork')}}" maxlength="250" placeholder="Obra social">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nroAfiliado" class="col-md-4 col-form-label text-md-right">Nro de Afiliado</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nroAfiliado" name="nroAfiliado" value="{{old('nroAfiliado')}}" maxlength="250" placeholder="Nro de afiliado de la Obra Social">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nroHistorial" class="col-md-4 col-form-label text-md-right">Nro de historia clínica</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nroHistorial" name="nroHistorial" value="{{old('nroHistorial')}}" maxlength="250" placeholder="Historia clínica en CAPS">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">Calle y número</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" maxlength="250" placeholder="Dirección" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">Ciudad</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" maxlength="250" placeholder="Ciudad">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postalCode" class="col-md-4 col-form-label text-md-right">Código postal</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="postalCode" name="postalCode" value="{{old('postalCode')}}" maxlength="250" placeholder="Codigo postal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="state" class="col-md-4 col-form-label text-md-right">Provincia</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}" maxlength="250" placeholder="Provincia">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country" class="col-md-4 col-form-label text-md-right">País</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="country" name="country" value="{{old('country')}}" maxlength="250" placeholder="País">
                    </div>
                </div>                       
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Guardar paciente</button>
                    </div>
                </div>
            </form>
            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
@include('layouts.footer')           
</body>
</html>
