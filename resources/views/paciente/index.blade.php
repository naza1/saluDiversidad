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
    <li class="breadcrumb-item active" aria-current="page">Opciones para pacientes</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">BÚSQUEDA POR PACIENTE</div>

                <div class="card-body">
                    <form class="row g-2" action="{{route('paciente.index')}}" method="get">
                        @csrf

                        <div class="form-group row">
                            <label for="termino" class="col-md-4 col-form-label text-md-right">Ingrese apellido nombre o DNI...</label>

                            <div class="col-md-8">
                                  <input type="text" name="texto" value="{{$texto}}" class="form-control" autofocus>  
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">Buscar</button>
                                                                  
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>
<BR>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">PACIENTES</div>

                <div class="card-body">
                <div class="form-group row">
                <div class="col-lg-12">
                <p class="text-right"><a class="btn btn-primary" href="{{ url('paciente/create') }}">Crear paciente</a></p>
                </div>
                </div>
                       <div class="form-group row">
                          <div class="col-lg-12">
          <table class="table table-responsive-lg table-hover">
            <thead>
              <th class="">Apellido</th>
              <th>Nombre</th>
              <th>Dni</th>
              <th>Acciones</th>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
            <tr>
              <td>{{$paciente->Apellido}}</td>
              <td>{{$paciente->Nombre}}</td>
              <td>{{$paciente->Dni}}</td>
              <td>
              <div class="btn-group">
              <a href="{{ url('paciente/'.$paciente->id) }}" class="btn btn-success btn-sm">Ver+</a><br></div>
              <a href="{{ url('showHistorial/'.$paciente->id) }}" class="btn btn-info btn-sm text-white">Historial</a>
              <div class="btn-group">
              <form method="POST" action="{{ url('paciente/'.$paciente->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-danger btn-delete btn-sm">Eliminar</button>
              </form>
              </div>
                
              </div>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          {{$pacientes->links()}}
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
