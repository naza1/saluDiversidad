<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario en laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/laravel.js"></script>
    </head>
<body>
<div class="">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Listado de Pacientes</div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <th class="">Nombre del paciente</th>
              <th>D.N.I.</th>
              <th>Teléfono</th>
              <th>Celular</th>
              <th>Acciones</th>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
            <tr>
              <td>{{$paciente->Nombre}}</td>
              <td>{{$paciente->Apellido}}</td>
              <td>{{$paciente->Dni}}</td>
              <td>{{$paciente->Email}}</td>
              <td>{{$paciente->NroHistorial}}</td>
              <td>{{$paciente->Address}}</td>
              <td>{{$paciente->City}}</td>
              <td>{{$paciente->PostalCode}}</td>
              <td>{{$paciente->Country}}</td>
              <td>{{$paciente->Nationality}}</td>
              <td>{{$paciente->SocialWork}}</td>
              <td>{{$paciente->State}}</td>
              <td>
              <a href="#" onclick="eliminarPaciente('{{$paciente->Id}}', '{{ csrf_token() }}')" class="btn btn-xs btn-danger btn-delete">Eliminar</a>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <p class="text-right"><a class="btn btn-primary" href="{{ url('paciente/create') }}">Crear</a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
