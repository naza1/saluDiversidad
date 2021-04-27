@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Opciones para estudios y laboratorio</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/laravel.js') }}"></script>
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/homePaciente') }}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Opciones para recetas</li>
  </ol>
</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-info mb-3">SOLICITAR RECETAS</div>
                        <div class="body">
                            <div class="alert alert-info">
                                <ul>
                                    <p>Desde esta opción podrá solicitar recetas de medicamentos. <br>Una vez aprobada la órden podrá descargarla en la tabla inferior.</p>
                                </ul>
                            </div>
                            <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="SeleccionDroga">Seleccionar drogas</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option value="">Acetato de ciproterona - comprimido 50 mg</option>
                                    <option value="">Acetato de triptorelina - ampolla inyectable 3,75 mg-kit x 1 mensual</option>
                                    <option value="">Acetato de triptorelina - ampolla inyectable 11.25 mg-kit x 1 trimestral</option>
                                    <option value="">Espironolactona - comprimidos 100 mg</option>
                                    <option value="">Estradiol gel 0,06% - envase x 80 grs</option>
                                    <option value="">Estradiol cápsulas/comprimidos 2 mg</option>
                                    <option value="">Finasteride - comprimidos 5 mg</option>
                                    <option value="">Testosterona gel 1% - envase por 150 grs</option>
                                    <option value="">Undecanoato de testosterona - ampolla 1000 mg/4ml</option>
                                </select>
                            </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-info btn-md btn-block text-white">Solicitar orden</button>
                                    </div>
                                </div>
                            </form>
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
                <div class="card-header text-white bg-success mb-3">RECETAS</div>
                <div class="card-body">
                   <div class="form-group row">
                     <div class="col-lg-12">
                                <!--INICIO DE TABLA-->
                                    <table class="table table-responsive-lg table-hover">
                                        <thead>
                                            <th>RECETA</th>
                                            <th>DESCARGAR</th>
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
  
</div>
@include('layouts.footer')
</body>
</html>
