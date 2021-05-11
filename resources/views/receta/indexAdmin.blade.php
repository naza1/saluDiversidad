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
    <li class="breadcrumb-item active" aria-current="page">Opciones para recetas</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">BÚSQUEDA POR PACIENTE</div>

                <div class="card-body">
                    <form class="row g-2" action="" method="get">
                        @csrf

                        <div class="form-group row">
                            <label for="termino" class="col-md-4 col-form-label text-md-right">Ingrese apellido nombre o DNI...</label>

                            <div class="col-md-8">
                                  <input type="text" name="texto" value="" class="form-control" autofocus>  
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Opciones para recetas</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                        <!--INICIO DE TABLA-->
                                  <table class="table table-responsive-lg table-hover">
                                    <thead>
                                      <th>APELLIDO</th>
                                      <th>NOMBRE</th>
                                      <th>FECHA DE SOLICITUD</th>
                                      <th>DROGAS SOLICITADAS</th>
                                      <th>FRECUENCIA</th>
                                      <th>CANTIDAD</th>
                                      <th>ESTADO</th>
                                      <th>ACCIONES</th>
                                    </thead>
                                    <tbody>
                                    @foreach($recetas as $receta)
                                      <tr>
                                        <td>{{$receta->ApellidoPaciente}}</td>
                                        <td>{{$receta->NombrePaciente}}</td>
                                        <td>{{Carbon\Carbon::parse($receta->created_at)->toFormattedDateString('d-m-Y')}}</td>
                                        <td><!--{{$receta->Recetas}} las drogas bene aparecer una vez que el medico las aprueba--></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$receta->Estado}}</td>
                                        <td>
                                          <div class="btn-group">
                                            <a href="{{ url('receta/'.$receta->id) }}" class="btn btn-success btn-sm">Recetar</a><br>
                                          </div>
                                          <div class="btn-group">
                                            <a href="{{ url('receta/'.$receta->id) }}" class="btn btn-success btn-sm">Repetir receta</a><br>
                                          </div>
                                          <div class="btn-group">
                                            <form method="POST" action="{{ url('receta/'.$receta->id) }}">
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
