@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Opciones para usuarie paciente</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/laravel.js') }}"></script>
    </head>
<body>
<div class="page-content">
  <div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-10">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Opciones para pacientes</h3>
        </div>
        <!--<div class="col-xl-12">
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
        </div>-->
        <div class="panel-body">
        <p class="text-right"><a class="btn btn-primary" href="{{ url('paciente/create') }}">Crear</a></p>
          <table class="table table-responsive table-hover">
            <thead>
              <th class="">Apellido</th>
              <th>Nombre</th>
              <th>Dni</th>
              <th>Género</th>
              <th>Pronombre</th>
              <th>Obra social</th>
              <th>Acciones</th>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
            <tr>
              <td>{{$paciente->Apellido}}</td>
              <td>{{$paciente->Nombre}}</td>
              <td>{{$paciente->Dni}}</td>
              <td>{{$paciente->Genero}}</td>
              <td>{{$paciente->Pronombre}}</td>
              <td>{{$paciente->SocialWork}}</td>
              <td>
              <form method="POST" action="{{ url('paciente/'.$paciente->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-danger btn-delete">Eliminar</button>
              </form>
              <a href="{{ url('paciente/'.$paciente->id) }}" class="btn btn-xs btn-danger btn-delete">Editar</a>
              <a href="#" class="btn btn-xs btn-danger btn-delete">Recetar</a>
              <a href="#" class="btn btn-xs btn-danger btn-delete">+Datos</a>
              <a href="#" class="btn btn-xs btn-danger btn-delete">Historia Clínica</a>
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
  <div class="col-md-2"></div>
</div>

</body>
</html>
