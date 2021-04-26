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
    <li class="breadcrumb-item active" aria-current="page">Crear orden de exámenes</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3">Estudios</div>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="row d-flex justify-content-center">
                <div class="card-body">
                <div class="form-group row">
                    <label for="laboratorio-inicio" class="col-md-4 col-form-label text-md-right">Seleccionar laboratorios de inicio</label>
                    <div class="col-md-6">
                       <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Hemograma</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Glucemia</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Urea</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Creatinina</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Colesterol total/HDL/LDL/Triglicéridos</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Hepatograma</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">TSH</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">LH</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">FSH</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Estradiol</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Testosterona libre y total</label>
                            </div>             
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="laboratorio-inicio" class="col-md-4 col-form-label text-md-right">Seleccionar laboratorios de seguimiento</label>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Hemograma</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Glucemia</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Urea</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Creatinina</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Colesterol total/HDL/LDL/Triglicéridos</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Hepatograma</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">TSH</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Estradiol</label>
                            </div> 
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Testosterona libre y total</label>
                            </div>             
                    </div>
                </div>

                <div class="form-group row">
                    <label for="otros-laboratorio" class="col-md-4 col-form-label text-md-right">Otros estudios de laboratorio</label>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="defaultCheck1">Ionograma</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Prolactina</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">VIH</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Hepatitis B</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">Hepatitis C</label>
                            </div> 
                    </div>  
                </div>

                <div class="form-group row">
                   <label for="Otros-estudios" class="col-md-4 col-form-label text-md-right">Agregue manualmente otros estudios</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Asignar orden</button>
                    </div>
                </div>
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

