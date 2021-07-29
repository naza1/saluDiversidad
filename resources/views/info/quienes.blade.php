@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
		<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">¿Quienes sómos?</li>

  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h3 style="color:#E52035;">¿Quienes sómos?</h3>
            <h4 style="color:#E52035;"><a href="#areasincum" style="color:#E52035;">- Áreas de incumbencia</a></h4>
            <h4 style="color:#E52035;"><a href="#equipo" style="color:#E52035;">- Equipo</a></h4>
            <br><br><br><br>
            <h2 style="color:#E52035;"><strong>¿Quienes sómos?</strong></h2>
            <p>El Programa Municipal de Salud y Diversidad es un espacio, dependiente de la División de Medicina General, enfocado en la población LGBTIQ+.</p> 
            <p><span style="color:#E52035; "><strong>Busca fortalecer las estrategias de promoción, prevención y atención sanitaria integral</strong> </span>de calidad para todas las personas.</p>
            <p><span style="color:#E52035; "><strong>Pretende garantizar el pleno acceso a la salud para las personas del colectivo LGBTIQ+.</strong></span> Para ello, promueve la superación de los mecanismos que producen el estigma, la discriminación, la violencia y la desigualdad social.</p>
            <h3 style="color:#E52035;"><strong><a name="areasincum"></a>Áreas de incumbencia</strong></h3>

            <p>Ofrece servicios de Medicina General, Enfermería, Trabajo Social, Psicología e Infectología.</p>
            <a name="equipo"><h3 style="color:#E52035;"><strong>Equipo</strong></h3>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Nicolás Zanier<br>Medicina General</p>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Virginia Barreneche<br>Medicina General </p>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Gabriel Celaya <br>Enfermería</p>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Magali Sánchez <br>Trabajo Social</p>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Lujan Di Marco <br> Trabajo Social</p>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Silvina Galarza <br>Psicología</p>
            <img class="scale-with-grid" src="{{ asset('img/img_profile.png') }}" style="display:block; margin:auto;"/><p class="wp-caption-text" style="text-align:center;">Bruno Boggia <br>Infectología</p>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection