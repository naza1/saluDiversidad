@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
		<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Inicio</li>

  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

		<h2 style="color:#b91818;"><strong>Sobre el programa</strong></h2>
		<p>El Programa Municipal de Salud y Diversidad es un espacio, dependiente de la División de Medicina General, enfocado en la población LGBTIQ+. 
		Busca fortalecer las estrategias de promoción, prevención y atención sanitaria integral de calidad para todas las personas.<br />
		Pretende garantizar el pleno acceso a la salud para las personas del colectivo LGBTIQ+. Para ello, promueve la superación de los mecanismos que producen el estigma, la discriminación, la violencia y la desigualdad social.
		</p>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/info/quienes') }}" style="background-color:#e52035!important;color:#ffffff;border:none;"><span class="button_label"><strong>QUIENES SOMOS</strong></span></a>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/info/donde') }}" style="background-color:#ee7321!important;color:#ffffff;border:none;"    ><span class="button_label"><strong>DÓNDE ENCONTRARNOS</strong></span></a>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/info/derechos') }}" style="background-color:#fce22a!important;color:#ffffff;border:none;"    ><span class="button_label"><strong>CONOCÉ TUS DERECHOS</strong></span></a>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/info/diversidad') }}" style="background-color:#38ab4e!important;color:#ffffff;border:none;"    ><span class="button_label"><strong>DIVERSIDAD Y SALUD</strong></span></a>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/info/interes') }}" style="background-color:#3c5da8!important;color:#ffffff;border:none;"    ><span class="button_label"><strong>INFORMACIÓN DE INTERÉS</strong></span></a>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/info/faq') }}" style="background-color:#65358c!important;color:#ffffff;border:none;"    ><span class="button_label"><strong>PREGUNTAS FRECUENTES</strong></span></a>
		<a class="btn btn-success btn-md btn-block" href="{{ url('/login') }}" style="background-color:#8bcfdd!important;color:#b91817;border:none;"    ><span class="button_icon"><i class="icon-guest"  style="color:#b91817!important;"></i></span><span class="button_label"><strong>TURNOS Y RECETAS</strong></span></a>
	
</div>
</div>
</div>
@include('layouts.footer')
@endsection
