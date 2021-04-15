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
                   <p><a href="{{ action('App\Http\Controllers\PacienteController@showPaciente') }}" class="btn btn-success btn-md btn-block">Editar mis datos</a></p>
                   <p><a href="#" class="btn btn-success btn-md btn-block">Solicitar y ver turnos</a></p>
                   <p><a href="#" class="btn btn-success btn-md btn-block">Solicitar y ver recetas</a></p>
                   <p><a href="#" class="btn btn-success btn-md btn-block">Solicitar y órdenes para la realización de estudios</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-info mb-3">NOTICIAS</div>
                @foreach($noticias as $noticia)
                    <p>{{$noticia->Titulo}}</p>
                    <p>{{$noticia->Contenido}}</p>
                    <p>{{$noticia->Fecha}}</p>
                @endforeach
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

