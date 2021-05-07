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
              <th>DROGA</th>
              <th>FRECUENCIA</th>
              <th>CANTIDAD</th>
              <th>COMENTARIOS PARA EL PACIENTE <!--SOLO VISIBLES PARA EL PACIENTE, ESTA COLUMNA NO VA A LA RECETA--></th>
            </thead>
            <tbody>
           <form action="" method="POST">
            
            <tr>
                <td><input type="checkbox" class="form-check-input" name="Acetato de triptorelina - ampolla inyectable 11.25 mg-kit"> Acetato de triptorelina - ampolla inyectable 11.25 mg-kit</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="cantidad" name="cantidad" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="form-check-input" name="Acetato de triptorelina - ampolla inyectable 3,75 mg-kit">Acetato de triptorelina - ampolla inyectable 3,75 mg-kit</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            
            <tr>
                <td><input type="checkbox" class="form-check-input" name="Finasteride - comprimidos 5 mg">Finasteride - comprimidos 5 mg</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="form-check-input" name="Acetato de ciproterona - comprimido 50 mg">Acetato de ciproterona - comprimido 50 mg</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="form-check-input" name="Estradiol cápsulas/comprimidos 2 mg">Estradiol cápsulas/comprimidos 2 mg</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>
            
            <tr>
                <td><input type="checkbox" class="form-check-input" name="Estradiol gel 0,06% - envase x 80 grs">Estradiol gel 0,06% - envase x 80 grs</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="form-check-input" name="Testosterona gel 1% - envase por 150 grs">Testosterona gel 1% - envase por 150 grs</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="form-check-input" name="Undecanoato de testosterona - ampolla 1000 mg/4ml">Undecanoato de testosterona - ampolla 1000 mg/4ml</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>

            <tr>
                <td><input type="checkbox" class="form-check-input" name="Espironolactona - comprimidos 100 mg">Espironolactona - comprimidos 100 mg</td>
                <td><select class="form-control" id="frecuencia" name="frecuencia">
                  <option value="">-- Escoja Frecuencia --</option>
                  <option value="Diaria" required>Diaria</option>
                  <option value="Semanal" required>Semanal</option>
                  <option value="Mensual" required>Quincenal</option>
                  <option value="Mensual" required>Mensual</option>
                  <option value="Semanal" required>Trimestral</option>
                  </select></td>
                <td><input type="text" class="form-control" id="apellido" name="apellido" maxlength="250" placeholder="Ingrese cantidad" value="" required></td>
                <td><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Comentario para el paciente sobre la administración de la droga"></textarea></td>
            </tr>
            <tr>
            <td colspan="4"><textarea class="form-control" id="comentario" value="" name="comentario" maxlength="250" placeholder="Añadir más medicación manualmente"></textarea>
            </tr>

            <tr>
            <td colspan="4">
              <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-info btn-md btn-block text-white">Recetar</button>
              </div>
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
@include('layouts.footer')
</body>
</html>
