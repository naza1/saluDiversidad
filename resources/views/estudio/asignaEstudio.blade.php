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
                    <label for="laboratorio" class="col-md-4 col-form-label text-md-right">Seleccionar laboratorio</label>
                    <div class="col-md-6">
                    <select class="form-control" id="" name="">
                                <option value="">--Escoja el laboratorio--</option>
                                <option value="">Laboratorio de inicio</option>
                                <option value="">Laboratorio de seguimiento</option>
                    </select>
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
                            <label for="Otros-estudios">Agregue manualmente otros estudios</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

