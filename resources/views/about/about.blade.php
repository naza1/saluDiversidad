@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item">Sobre el desarrollo de la app</li>
    
    </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">    
<h3 style="color:#3C5DA8;"><strong>Sobre el desarrollo de la APP</strong></h3>
<p>Esta app fue desarrollada en el marco del proyecto "Diseño de una aplicación para Centros de Atención Primaria de la Salud en Mar del Plata" financiado por la Secretaría de Políticas Universitarias a través de la convocatoria "Universidades Agregando Valor". Participaron las cátedras Sociología de la Ciencia y la Tecnología y el Grupo de Investigación sobre Familia, Género y Subjetividades de la Facultad de Humanidades de la Universidad Nacional de Mar del Plata; el equipo de desarrollo formado por Gladys V. Fernández (Analista funcional y Desarrollo) y Nazareno Real (Desarrollo); el equipo del Programa Salud y Diversidad y el área de Comunicación de la Secretaría de Salud de la Municipalidad de General Pueyrredón.</p>
</div>
</div>
</div>
@include('layouts.footer')
@endsection