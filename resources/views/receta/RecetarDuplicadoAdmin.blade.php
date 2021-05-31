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
    <li class="breadcrumb-item"><a href="{{ url('/indexRecetaAdmin') }}">Opciones para recetas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Recetar</li>
  </ol>
</nav>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">RECETAR</div>
                <div class="card-body">
                <div class="alert alert-info">
                                <ul>
                                    <p>
                                    <br><b>Datos del usuarie: </b>{{$paciente->Nombre}} {{$paciente->Apellido}} ({{$paciente->Dni}})</br>
                                    <b>Fecha de inicio de hormonización: </b>{{$diff2}}
                                    <br><b>Medicación actual: </b>{{$paciente->Medicacion}}</p>
                                </ul>
                            </div>
                   <div class="form-group row">
                     <div class="col-lg-12">
<!--INICIO DE TABLA-->
          <table class="table table-responsive-lg table-hover">
            <thead>
              <th>DROGA</th>
              <th>FRECUENCIA</th>
              <th>CANTIDAD</th>
              <th>COMENTARIOS PARA EL USUARIE <!--SOLO VISIBLES PARA EL PACIENTE, ESTA COLUMNA NO VA A LA RECETA--></th>
            </thead>
            <tbody>
              <form action="{{url('receta/'.$id)}}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <input name="id" value="{{$id}}" type="hidden" >
              @foreach($medicamentos as $medicamento)
              <tr>
                <td>
                  @if(!$medicamentoChecks->isEmpty())
                    <input type="checkbox" class="form-check-input" name="drogas[]" value="{{$medicamento->nombre}}" {{ in_array($medicamento->id, $medicamentoChecks->pluck('medicamento_id')->toArray()) ? 'checked' : '' }}> {{$medicamento->nombre}}
                  @else
                    <input type="checkbox" class="form-check-input" name="drogas[]" value="{{$medicamento->nombre}}"> {{$medicamento->nombre}}
                  @endif
                </td>
                <td>
                @if(!$medicamentoChecks->isEmpty())
                    @foreach($medicamentoChecks as $medicamentoCheck)
                      @if($medicamentoCheck->medicamento_id == $medicamento->id)
                        <select class="form-control" id="frec_{{$medicamento->id}}" name="frec_{{$medicamento->id}}">
                          <option value="{{$medicamentoCheck->frecuencia}}">{{ $medicamentoCheck->frecuencia}}</option>
                          <option value="Diaria">Diaria</option>
                          <option value="Semanal">Semanal</option>
                          <option value="Quincenal">Quincenal</option>
                          <option value="Mensual">Mensual</option>
                          <option value="Trimestral">Trimestral</option>
                          <option value="">-- Escoja Frecuencia --</option>
                        </select>
                        @break
                      @endif
                      @if($loop->last)
                        <select class="form-control" id="frec_{{$medicamento->id}}" name="frec_{{$medicamento->id}}">
                          <option value="">-- Escoja Frecuencia --</option>
                          <option value="Diaria">Diaria</option>
                          <option value="Semanal">Semanal</option>
                          <option value="Quincenal">Quincenal</option>
                          <option value="Mensual">Mensual</option>
                          <option value="Trimestral">Trimestral</option>
                        </select>
                      @endif
                    @endforeach
                @else
                    <select class="form-control" id="frec_{{$medicamento->id}}" name="frec_{{$medicamento->id}}">
                      <option value="">-- Escoja Frecuencia --</option>
                      <option value="Diaria">Diaria</option>
                      <option value="Semanal">Semanal</option>
                      <option value="Quincenal">Quincenal</option>
                      <option value="Mensual">Mensual</option>
                      <option value="Trimestral">Trimestral</option>
                    </select>
                @endif
                </td>
                <td>
                @if(!$medicamentoChecks->isEmpty())
                  @foreach($medicamentoChecks as $medicamentoCheck)
                    @if($medicamentoCheck->medicamento_id == $medicamento->id)
                      <input type="text" class="form-control" id="cant_{{$medicamento->id}}" name="cant_{{$medicamento->id}}" maxlength="250" placeholder="Ingrese cantidad" value="{{$medicamentoCheck->cantidad}}">
                      @break
                    @endif
                    @if($loop->last)
                    <input type="text" class="form-control" id="cant_{{$medicamento->id}}" name="cant_{{$medicamento->id}}" maxlength="250" placeholder="Ingrese cantidad" value="">
                    @endif
                  @endforeach
                @else
                  <input type="text" class="form-control" id="cant_{{$medicamento->id}}" name="cant_{{$medicamento->id}}" maxlength="250" placeholder="Ingrese cantidad" value="">
                @endif
                </td>
                <td>
                @if(!$medicamentoChecks->isEmpty())
                  @foreach($medicamentoChecks as $medicamentoCheck)
                    @if($medicamentoCheck->medicamento_id == $medicamento->id)
                      <textarea class="form-control" id="com_{{$medicamento->id}}" name="com_{{$medicamento->id}}" maxlength="250" placeholder="Comentario para paciente">{{$medicamentoCheck->comentario}}</textarea>
                      @break
                    @endif
                    @if($loop->last)
                    <textarea class="form-control" id="com_{{$medicamento->id}}" value="" name="com_{{$medicamento->id}}" maxlength="250" placeholder="Comentario para paciente"></textarea>
                    @endif
                  @endforeach
                @else
                  <textarea class="form-control" id="com_{{$medicamento->id}}" value="" name="com_{{$medicamento->id}}" maxlength="250" placeholder="Comentario para paciente"></textarea>
                @endif
                </td>
              </tr>
              @endforeach
              <tr>
                <td colspan="4"><p><b>MEDICACION ADICIONAL</b></p>
                  <textarea class="form-control" id="adicional" name="adicional" maxlength="250" placeholder="Añadir más medicación manualmente">{{$recetaLast->Adicional}}</textarea>
                </td>
              </tr>
            
              <tr>
                <td colspan="4"><p><b>SELECCIONE FIRMA DEL PROFESIONAL</b></p>
                  <select class="form-control" id="medico" name="medico" required>
                    <option value="{{$recetaLast->Medico}}">{{$recetaLast->Medico}}</option>
                    <option value="Nicolás Zanier">Nicolás Zanier</option>
                    <option value="Virginia Barreneche">Virginia Barreneche</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td colspan="4">
                  <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-info btn-md btn-block text-white">Recetar</button>
                  </div>
                </td>
              </tr>
              </form>
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
@include('layouts.footer')
</body>
</html>
