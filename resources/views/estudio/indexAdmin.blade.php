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
    <li class="breadcrumb-item active" aria-current="page">Opciones para estudios y laboratorios</li>
  </ol>
</nav>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Opciones para estudios y laboratorios</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
<!--INICIO DE TABLA-->
          <table class="table table-responsive-lg table-hover">
            <thead>
              <th>APELLIDO</th>
              <th>NOMBRE</th>
              <th>FECHA DE SOLICITUD</th>
              <th>ESTADO</th>
              <th>ACCIONES</th>
            </thead>
            <tbody>
            @foreach($estudios as $estudio)
              <tr>
                <td>{{$estudio->NombrePaciente}}</td>
                <td>{{$estudio->ApellidoPaciente}}</td>
                <td>{{$estudio->created_at}}</td>
                <td>{{$estudio->Estado}}</td>
                <td></td>
                <td>
                <div class="btn-group">
                  <a href="{{ url('estudio/'.$estudio->id) }}" class="btn btn-success btn-sm">Asignar</a><br>
                </div>
                 <div class="btn-group">
                    <form method="POST" action="{{ url('estudio/'.$estudio->id) }}">
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
       
<!--FIN DE TABLA-->
                
                          </div>
                        </div>
                   </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
