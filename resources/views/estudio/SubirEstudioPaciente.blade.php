@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Opciones para estudios y laboratorio</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/laravel.js') }}"></script>
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/homePaciente') }}">Inicio</a></li>
 </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header text-white bg-primary mb-3">SUBIR ESTUDIO</div>
                <div class="body">    
                <div class="alert alert-primary">
                    <ul>
                        <p>Desde esta opción podrá subir los estudios realizados para que el equipo médico pueda visualizarlos</p>
                    </ul>
                </div>
                <div class="form-group row">
                  <form action="{{ url('estudio/uploadPacienteEstudio') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input name="id" value="{{$paciente->id}}" type="hidden">
                      <div class="col-md-6 offset-md-3">
                        <input type="file" name="estudioFile" id="estudioFile" accept="application/pdf,image/*" value="" required>
                        @error('estudioFile')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                      <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary btn-md btn-block text-white">Subir archivo</button>
                    </div>
                </div>
            </form> 
 </div>
</div>
</div>
</div>
</div>

@include('layouts.footer')
</body>
</html>
