@include('layouts.app')
<html>
    <head>
        <meta charset="utf-8">
        <title>Estudio</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/dashboardAdmin') }}">Inicio</a></li>
    <!-- agregar segundo nivel -->
    <li class="breadcrumb-item active" aria-current="page">Crear orden de exámenes</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Estudios</div>
                <form action="{{url('estudio/'.$estudio->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                    <div class="row d-flex justify-content-center">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="laboratorio-inicio" class="col-md-4 col-form-label text-md-right">Seleccionar laboratorios de inicio/seguimiento</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="hemograma" id="hemograma" name="estudios[]">
                                        <label class="form-check-label" for="hemograma">Hemograma</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="glucemia" id="glucemia" name="estudios[]">
                                        <label class="form-check-label" for="glucemia">Glucemia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="urea" id="urea" name="estudios[]">
                                        <label class="form-check-label" for="urea">Urea</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="creatinina" id="creatinina" name="estudios[]">
                                        <label class="form-check-label" for="creatinina">Creatinina</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Colesterol total/HDL/LDL/Triglicéridos" id="colesterol" name="estudios[]">
                                        <label class="form-check-label" for="colesterol">Colesterol total/HDL/LDL/Triglicéridos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="hepatograma" id="hepatograma" name="estudios[]">
                                        <label class="form-check-label" for="hepatograma">Hepatograma</label>
                                    </div> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="TSH" id="tsh" name="estudios[]">
                                        <label class="form-check-label" for="tsh">TSH</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="LH" id="lh" name="estudios[]">
                                        <label class="form-check-label" for="lh">LH</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="FSH" id="fsh" name="estudios[]">
                                        <label class="form-check-label" for="fsh">FSH</label>
                                    </div> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Estradiol" id="estradiol" name="estudios[]">
                                        <label class="form-check-label" for="estradiol">Estradiol</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Testosterona libre y total" id="testosterona" name="estudios[]">
                                        <label class="form-check-label" for="testosterona">Testosterona libre y total</label>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group row">
                        <label for="otros-laboratorio" class="col-md-4 col-form-label text-md-right">Otros estudios de laboratorio</label>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Ionograma" id="ionograma" name="estudios[]">
                                <label class="form-check-label" for="ionograma">Ionograma</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Prolactina" id="prolactina" name="estudios[]">
                                <label class="form-check-label" for="Prolactina">Prolactina</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="VIH" id="vih" name="estudios[]">
                                <label class="form-check-label" for="vih">VIH</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Hepatitis B" id="hepatitisb" name="estudios[]">
                                <label class="form-check-label" for="hepatitisb">Hepatitis B</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Hepatitis C" id="Hepatitisc" name="estudios[]">
                                <label class="form-check-label" for="hepatitisc">Hepatitis C</label>
                            </div> 
                        </div>  
                    </div>

                    <div class="form-group row">
                        <label for="Otros-estudios" class="col-md-4 col-form-label text-md-right">Agregue manualmente otros estudios</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="estudioManual" name="estudioManual" rows="3" maxlength="450"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Asignar orden</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
 </div>
 </div>
</div>
</div>
</div>
 </form>
 @include('layouts.footer')
</body>
</html>