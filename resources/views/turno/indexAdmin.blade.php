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
    <li class="breadcrumb-item active" aria-current="page">Opciones para turnos</li>
  </ol>
</nav>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">TURNOS SOLICITADOS</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
<!--INICIO DE TABLA-->
          <table class="table table-responsive-lg table-hover">
            <thead>
              <th>APELLIDO</th>
              <th>NOMBRE</th>
              <th>ESTADO</th>
              <th>PROFESIONAL</th>
              <th>PREFERENCIA</th>
              <th>FECHA</th>
              <th>HORA</th>
              <th>LUGAR</th>
              <th>ACCIONES</th>
            </thead>
            <tbody>
            @foreach($turnos as $turno)
            <tr>
              <form action="{{ url('turno/' .$turno->id) }}" method="POST">
              @csrf
              {{ method_field('PUT') }}
              <input name="id" value="{{$turno->id}}" type="hidden">
                <td>{{$turno->ApellidoPaciente}}</td>
                <td>{{$turno->NombrePaciente}}</td>
                <td>{{$turno->Estado == 'Aprobado' ? 'APROBADO' : ($turno->Estado != 'Cancelado' ? 'PENDIENTE' : 'CANCELADO')}}</td>
                <td>
                  <select class="form-control" id="medico" name="medico" required>
                    @if($turno->Medico != null)
                      <option value="{{$turno->Medico}}">{{$turno->Medico}}</option>
                    @else
                      <option value="">-- Escoja el Medico --</option>
                    @endif
                    <option value="Nicolás Zanier">Nicolás Zanier</option>
                    <option value="Virginia Barreneche">Virginia Barreneche</option>
                  </select>
                </td>
                <td>{{$turno->DiaHorarioPref}}</td>
                <td>
                  <input type="date" class="form-control" id="fecha"  name="fecha" placeholder="Día" value="{{ Carbon\Carbon::parse($turno->Dia)->format('Y-m-d') }}" required>
                </td>
                <td>
                  <input type="time" class="form-control" id="hora"  name="hora" placeholder="Hora" value="{{$turno->Hora}}" required>
                </td>
                <td>
                  <select class="form-control" id="lugar" name="lugar" value="CAPS1 - Colón y Salta" required>
                    <option value="CAPS1 - Colón y Salta" required>CAPS1 - Colón y Salta</option>
                  </select>
                </td>
                <td>
                  @if($turno->Estado != 'Cancelado')
                    <button type="submit" class="btn btn-success btn-sm">{{$turno->Estado == 'Espera' ? 'Asignar' :  'Reprogramar'}}</button>
                  @endif
                  </form>
                           
                <form method="POST" action="{{ url('turno/'.$turno->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-danger btn-delete btn-sm">Cancelar</button>
              </form>
                
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          {{$turnos->links()}}
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
