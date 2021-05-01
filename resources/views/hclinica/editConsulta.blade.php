@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Opciones para paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/laravel.js') }}"></script>
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/dashboardAdmin') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Historia clínica</a></li>
    <li class="breadcrumb-item" aria-current="page">Crear consulta</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">CREAR CONSULTA</div>
                  <div class="alert alert-danger">
                    <ul>
                      <li></li>
                    </ul>
                </div>
            <form action="" method="POST">
             <div class="form-group row">
                    <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="fecha" name="fecha" value="" placeholder="Fecha" maxlength="250" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contenido" class="col-md-4 col-form-label text-md-right">Observaciones</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="observaciones" value="" name="observaciones" maxlength="250" placeholder="Observaciones de la consulta" required></textarea>
                    </div>
                </div>           
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Guardar consulta</button>
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
