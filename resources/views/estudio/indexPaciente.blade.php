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
    <li class="breadcrumb-item active" aria-current="page">Opciones para estudios y laboratorios</li>
  </ol>
</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-info mb-3">SOLICITAR ORDEN DE ESTUDIO</div>
                        <div class="body">
                            <div class="alert alert-info">
                                <ul>
                                    <p>Desde esta opción podrá solicitar una orden para la realización de exámenes de laboratorio. <br>Una vez aprobada la órden podrá descargarla en la tabla inferior.</p>
                                </ul>
                            </div>
                            <form action="{{url('estudio')}}" method="POST">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-info btn-md btn-block text-white">Solicitar orden</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">ÓRDENES DE ESTUDIOS</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
<!--INICIO DE TABLA-->
      <table class="table table-responsive-lg table-hover">
        <thead>
            <th>ESTADO</th>
            <th>DESCARGAR</th>
        </thead>
        <tbody> 
            @foreach($estudios as $estudio)
            <tr>
              <td>{{$estudio->Estado}}</td>
               <td>
               @if($estudio->Estado == "Espera")
                <p>Descargar Orden</p>
               @else
                <p><a href="{{ action('App\Http\Controllers\PdfController@generateOrden',['estudio' => $estudio]) }}">Descargar Orden</a></p></td>
               @endif
            </tr>
            @endforeach
        </tbody>
        </table>
       
<!--FIN DE TABLA-->               
                          </div>
                        </div>
                    </form>
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
              <div class="card-header text-white bg-primary mb-3">SUBIR ESTUDIO</div>
                <div class="body">    
                <div class="alert alert-primary">
                    <ul>
                        <p>Desde esta opción podrá subir los estudios realizados para que el equipo médico pueda visualizarlos</p>
                    </ul>
                </div>
                <div class="form-group row">
                  <form action="" method="POST">
                      <div class="col-md-6 offset-md-3">
                        <input type="file" name="" id="" accept="" value="">  
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
