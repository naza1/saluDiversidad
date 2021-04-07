@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario en laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/laravel.js') }}"></script>
    </head>
<body>
<div class="">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Listado de Pacientes</div>
        <div class="col-xl-12">
          <form action="{{route('paciente.index')}}" method="get">
            <div class="form-row">
              <div class="col-sm-4 my-1">
                <input type="text" class="form-control" name="texto" value="{{$texto}}">
              </div>
              <div class="col-auto my-1">
                <input type="submit" class="btn btn-primary" value="Buscar">
              </div>
            </div>
          </form>
        </div>
        <div class="panel-body">
        <p class="text-right"><a class="btn btn-primary" href="{{ url('paciente/create') }}">Crear</a></p>
          <table class="table table-bordered">
            <thead>
              <th class="">Nombre</th>
              <th>Apellido</th>
              <th>Dni</th>
              <th>Email</th>
              <th>NroHistorial</th>
              <th>Direccion</th>
              <th>Ciudad</th>
              <th>Codigo Postal</th>
              <th>Pais</th>
              <th>Nacionalidad</th>
              <th>Obra social</th>
              <th>Estado</th>
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
              <form method="POST" action="{{ url('paciente/'.$paciente->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-danger btn-delete">Eliminar</button>
              </form>
              <a href="{{ url('paciente/'.$paciente->id) }}" class="btn btn-xs btn-danger btn-delete">Editar</a>
              <a href="#" class="btn btn-xs btn-danger btn-delete">Recetar</a>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          {{$pacientes->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
