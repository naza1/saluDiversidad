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
    <li class="breadcrumb-item"><a href="{{ url('/homePaciente') }}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Opciones para turnos</li>
  </ol>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">SOLICITAR TURNO</div>
           
                <div class="alert alert-info">
                    <ul>
                       
                            <p>Aquí podrá solicitar un turno para los especialistas.Una vez asignado el turno podrá visualizarlo en el cuadro inferior de "Turnos asignados"</p>
                        
                    </ul>
                </div>
            
 <form action="" method="POST">

 <div class="form-group row">
    <label for="genero" class="col-md-4 col-form-label text-md-right">Elegir profesional</label>
        <div class="col-md-6">
            <select class="form-control" id="medico" name="medico" value="{{old('genero')}}">
                <option value="">-- Escoja médico --</option>
                                  <option value="" required>Nicolás Zanier</option>
                                  <option value="" required>Virginia Barreneche</option>
                           
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Solicitar turno</button>
                    </div>
                </div>
            </form>
 
</div>
</div>
</div>
</div>
<BR><BR>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">TURNOS ASIGNADOS</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
<!--INICIO DE TABLA-->
          <table class="table table-responsive-lg table-hover">
            <thead>
              <th class="">DÍA</th>
              <th>HORA</th>
              <th>PROFESIONAL</th>
              <th>LUGAR</th>
            </thead>
            <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
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
</div>
@include('layouts.footer')
</body>
</html>
