@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Opciones para noticia</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/laravel.js') }}"></script>
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/dashboardAdmin') }}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Opciones para noticias</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">GESTIÓN DE NOTICIAS</div>

                <div class="card-body">
                <div class="form-group row">
                <div class="col-lg-12">
                <p class="text-right"><a class="btn btn-primary" href="{{ url('noticia/create') }}">Crear noticia</a></p>
                </div>
                </div>
                       <div class="form-group row">
                          <div class="col-lg-12">
          <table class="table table-responsive-lg table-hover">
            <thead>
              <th class="">Fecha</th>
              <th>Titulo</th>
              <th>Contenido</th>
              <th>Acciones</th>
            </thead>
            <tbody>
            @foreach($noticias as $noticia)
            <tr>
              <td>{{$noticia->Fecha}}</td>
              <td>{{$noticia->Titulo}}</td>
              <td>{{$noticia->Contenido}}</td>
              
              <td>
              <div class="btn-group">
              <a href="{{ url('noticia/'.$noticia->id) }}" class="btn btn-success btn-sm">Editar</a><br></div>
              <div class="btn-group">
              <form method="POST" action="{{ url('noticia/'.$noticia->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-danger btn-delete btn-sm">Eliminar</button>
              </form>
              </div>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          {{$noticias->links()}}
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>
</div>
<BR>
<BR>
@include('layouts.footer')
</body>
</html>
