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
    <li class="breadcrumb-item active" aria-current="page">Opciones para recetas</li>
  </ol>
</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-info mb-3">SOLICITAR RECETAS</div>
                        <div class="body">
                            <div class="alert alert-info">
                                <ul>
                                    <p>Desde esta opción podrá solicitar recetas de medicamentos. <br>Una vez aprobada la órden podrá descargarla en la tabla inferior.</p>
                                </ul>
                            </div>
                            <div class="alert alert-success">
                                <ul>
                                    <p>Recuerde que si está afiliado a una obra social, deberá completar el nombre y el nro de afiliado en la edición de su perfil.</p>
                                </ul>
                            </div>
                            
                            <form action="{{url('receta')}}" method="POST">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3">
                                        <br>
                                        <button type="submit" class="btn btn-info btn-md btn-block text-white">Solicitar receta</button>
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
                <div class="card-header text-white bg-success mb-3">RECETAS</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>ESTADO</th>
                                            <th>DESCARGAR</th>
                                            <th>FECHA DE SOLICITUD</th>
                                            <th>FRECUENCIA</th>
                                            <th>COMENTARIOS DEL MÉDICO</th>
                                        </thead>
                                        <tbody> 
                                        @foreach($recetas as $receta)
                                            <tr>
                                                <td>{{$receta->Estado}}</td>
                                                <td>
                                                @if($receta->Estado == "Espera")
                                                    <p>Descargar Orden</p>
                                                @else
                                                    <p><a href="{{ action('App\Http\Controllers\PdfController@generateReceta',['receta' => $receta]) }}">Descargar Receta</a></p></td>
                                                @endif
                                                </td>
                                                <td>{{Carbon\Carbon::parse($receta->created_at)->toFormattedDateString('d-m-Y')}}</td>
                                                <td>
                                                    @foreach($recetasMedicamentos as $recetasMedicamento)
                                                        @if($receta->id == $recetasMedicamento->receta_id)
                                                            {{$recetasMedicamento->frecuencia}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($recetasMedicamentos as $recetasMedicamento)
                                                        @if($receta->id == $recetasMedicamento->receta_id)
                                                            {{$recetasMedicamento->comentario}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                    {{$recetas->links()}}
                                <!--FIN DE TABLA-->               
                          </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
  <br>
  
</div>
@include('layouts.footer')
</body>
</html>
