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
    <li class="breadcrumb-item active"><a href="{{ url('/noticia') }}">Opciones para noticias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear noticia</li>
  </ol>
</nav>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">Crear Noticia</div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{url('noticia')}}" method="POST">
            @csrf
                <div class="form-group row">
                    <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="fecha" name="fecha" value="{{old('fecha')}}" placeholder="Fecha" maxlength="250" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contenido" class="col-md-4 col-form-label text-md-right">Contenido</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="contenido" value="{{old('contenido')}}" name="contenido" maxlength="250" placeholder="Contenido">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="titulo" class="col-md-4 col-form-label text-md-right">Titulo</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="titulo" value="{{old('titulo')}}" name="titulo" maxlength="250" placeholder="Titulo" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Guardar noticia</button>
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
