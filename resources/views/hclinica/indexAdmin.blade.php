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
    <li class="breadcrumb-item active"><a href="{{ url('/paciente') }}">Opciones para pacientes</a></li>
    <li class="breadcrumb-item" aria-current="page">Historia clínica</li>
    
  </ol>
</nav>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
    <p style="text-align: right;"><b>Paciente: </b>{{$paciente->Nombre}} {{$paciente->Apellido}}</p>
      <div class="card">
        <div class="card-header text-white bg-success mb-3">Inicio de la hormonización</div>
          <div class="card-body">
            <div class="form-group row">
              <div class="col-lg-12">
              <!--INICIO DE TABLA-->
                <table class="table table-responsive-lg table-hover">
                  <thead>
                    <th>DIA DE INICIO</th>
                    <th>AÑOS DE HORMONIZACIÓN</th>
                    <th>ACCIONES</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <form action="{{url('saveHormonizacion')}}" method="POST">
                          @csrf
                          <input name="id" value="{{$paciente->id}}" type="hidden">
                          <input type="date" name="inicio_hormonizacion" id="inicio_hormonizacion" class="form-control" value="{{Carbon\Carbon::parse($paciente->FechaInicioHormonizacion)->format('Y-m-d')}}"required>
                          </td>
                          <td>
                          @if($paciente->FechaInicioHormonizacion != null)
                            {{$diff2}}
                          @else
                            <p>Complete Fecha</p>
                          @endif
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary">Guardar/modificar hormonización</button>
                        </form>
                          </td>
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
<br><br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Consultas realizadas</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                     <p class="text-right"><a class="btn btn-primary" href="{{ url('consulta/' .$paciente->id) }}">Cargar nueva consulta</a></p>
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>DIA</th>
                                            <th>OBSERVACIONES</th>
                                        </thead>
                                        <tbody>
                                        @foreach($consultas as $consulta)
                                          <tr>
                                              <td>{{Carbon\Carbon::parse($consulta->fecha)->toFormattedDateString('d-m-Y')}}</td>
                                              <td>{{$consulta->observaciones}}</td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        {{$consultas->links()}}
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
                                              <td>{{Carbon\Carbon::parse($estudio->created_at)->toFormattedDateString('d-m-Y')}}</td>
                                              <td>{{$estudio->Estudios}}</td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        {{$estudios->links()}}
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
                                              <td>{{Carbon\Carbon::parse($receta->created_at)->toFormattedDateString('d-m-Y')}}</td>
                                              <td>{{$receta->Recetas}}</td>
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
  <div class="container"> 
    <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Estudios realizados (Muestra los estudios subidos por los paciente)</div>
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
                                              <td><a href="{{url($estudioFile->path)}}" target="_blank">Descargar</a></td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        {{$estudioFiles->links()}}
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
              <div class="card-header text-white bg-success mb-3">SUBIR ESTUDIO/LABORATORIO</div>
                <div class="body">    
                
                <div class="form-group row">
                  <form action="{{ url('estudio/uploadAdminEstudio') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input name="id" value="{{$paciente->id}}" type="hidden">
                      <div class="col-md-6 offset-md-3">
                        <input type="file" name="estudioFile" id="estudioFile" accept="application/pdf,image/*" value="" required>
                        @error('estudioFile')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
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
