@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Noticia</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/dashboardAdmin') }}">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="{{ url('/paciente') }}">Opciones para noticia</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ver y editar noticias</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Datos de Noticia</div>
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

            <form action="{{ url('noticia/' .$noticia->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                <input name="id" value="{{$noticia->id}}" type="hidden">
                </div>
                </div>

                <div class="form-group row">
                    <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="fecha" name="fecha" maxlength="250" placeholder="Fecha" value="{{$noticia->Fecha}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contenido" class="col-md-4 col-form-label text-md-right">Contenido</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="contenido" name="contenido" maxlength="250" placeholder="Contenido" value="{{$noticia->Contenido}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="titulo" class="col-md-4 col-form-label text-md-right">Titulo</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="titulo" name="titulo" maxlength="250" placeholder="Titulo" value="{{$noticia->Titulo}}">
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
<br>
 </form>
 @include('layouts.footer')
</body>
</html>

