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
    <li class="breadcrumb-item" aria-current="page">Historia clínica</li>
    
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Consultas realizadas</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                     <p class="text-right"><a class="btn btn-primary" href="{{ url('editConsulta') }}">Cargar nueva consulta</a></p>
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>DIA</th>
                                            <th>OBSERVACIONES</th>
                                        </thead>
                                        <tbody> 
                                          <tr>
                                              <td></td>
                                              <td></td>
                                          </tr>
                                       
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
<br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Estudios solicitados</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>DIA</th>
                                            <th>OBSERVACIONES</th>
                                        </thead>
                                        <tbody> 
                                        @foreach($estudios as $estudio)
                                          <tr>
                                              <td>{{$estudio->created_at}}</td>
                                              <td>{{$estudio->Estudios}}</td>
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
  <br>

<div class="container"> 
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Estudios realizados (Muestra los estudios subidos por los pacientes)</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>NOMBRE DEL ARCHIVO</th>
                                            <th>DESCARGAR</th>
                                        </thead>
                                        <tbody>
                                        @foreach($estudioFiles as $estudioFile)
                                          <tr>
                                              <td>{{$estudioFile->name}}</td>
                                              <td><a href="{{$estudioFile->path}}" target="_blank">Descargar</a></td>
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
  <br>

  <div class="container"> 
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Recetas</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>FECHA</th>
                                            <th>MEDICACIÓN SOLICITADA</th>
                                        </thead>
                                        <tbody> 
                                        @foreach($recetas as $receta)
                                          <tr>
                                              <td>{{$receta->created_at}}</td>
                                              <td>{{$receta->Recetas}}</td>
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
  <br>


     

@include('layouts.footer')
</body>
</html>
