@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Inicio</li>

  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-success mb-3 ">OPCIONES</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>Seleccione la opción a realizar...</p>
                   <p><a href="{{ action('App\Http\Controllers\PacienteController@index') }}" class="btn btn-success btn-md btn-block">Buscar y editar paciente</a></p>
                   <p><a href="#" class="btn btn-success btn-md btn-block">Procesar turnos</a></p>
                   <p><a href="#" class="btn btn-success btn-md btn-block">Procesar solicitudes de recetas</a></p>
                   <p><a href="#" class="btn btn-success btn-md btn-block">Procesar órdenes para la realización de estudios</a></p>
                   <p><a href="{{ action('App\Http\Controllers\NoticiaController@index') }}" class="btn btn-success btn-md btn-block">Gestionar noticias</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">NOTICIAS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection