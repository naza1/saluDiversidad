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
            @foreach($pacients as $pacient)
            <tr>
              <td>{{$pacient->FirstName}}</td>
              <td>{{$pacient->LastName}}</td>
              <td>{{$pacient->Dni}}</td>
              <td>{{$pacient->Email}}</td>
              <td>{{$pacient->NroHistorial}}</td>
              <td>{{$pacient->Address}}</td>
              <td>{{$pacient->City}}</td>
              <td>{{$pacient->PostalCode}}</td>
              <td>{{$pacient->Country}}</td>
              <td>{{$pacient->Nationality}}</td>
              <td>{{$pacient->SocialWork}}</td>
              <td>{{$pacient->State}}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <p class="text-right"><a class="btn btn-sm btn-default" href="{{ url('pacient/create') }}">Crear</a></p>
      </div>
    </div>
  </div>
</div>
