@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">¿Dónde encontrarnos?</li>
    </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h3 style="color:#EE7321;">Dónde encontrarnos</h3>
            <h4 style="color:#EE7321;"><i class="icon-check"></i><a href="#atendemos" style="color:#EE7321;">- Dónde atendemos</a></h4>
            <h4 style="color:#EE7321;"><i class="icon-check"></i><a href="#mas" style="color:#EE7321;">- También te podes atender en:</a></h4>
            <br>

            <a name="atendemos"><h2 style="color:#EE7321;"><strong>Dónde atendemos</strong></h2>

            <h4 style="color:#EE7321;"><strong>Centro N°1</strong></h4>
            <p>El <strong>Espacio de Salud y Diversidad</strong> funciona en el CAPS N°1 <br />
            <i class="icon-location" style="color:#EE7321;"></i>Av. Colón y Salta<br />
            <i class="icon-clock"  style="color:#EE7321;"></i>Los días miércoles de 12:00 a 18:00 hs. <br />
            <i class="icon-calendar"  style="color:#EE7321;"></i>Debes sacar turno previamente. </p><br />

            <a name="mas"><h2 style="color:#EE7321;"><strong>También te podes atender en:</strong></h2><br />
            <h4 style="color:#EE7321;"><strong>CAPS Libertad </strong></h2>

            <p><i class="icon-location" style="color:#EE7321;"></i>Leguizamón 552<br />
            <i class="icon-call" style="color:#EE7321;"></i>Teléfono: 487-3030 / 487-5541<br />
            <i class="icon-mail" style="color:#EE7321;"></i><a href="mailto:isslibertad@mardelplata.gob.ar">isslibertad@mardelplata.gob.ar</a><br />
            <i class="icon-right-thin" style="color:#EE7321;"></i>Líneas de transporte que llegan hasta el lugar: 531 - 532 - 533 - 522<br />
            <i class="icon-user-line" style="color:#EE7321;"></i>Responsable del Programa: Maria Diaz Ciarlo - Medicina General.<br />
            </p><br />
            <h4 style="color:#EE7321;"><strong>CAPS Santa Rita</strong></h2>

            <p><i class="icon-location" style="color:#EE7321;"></i>Guanahani 7751<br />
            <i class="icon-call" style="color:#EE7321;"></i>Teléfono: 483-0385<br />
            <i class="icon-mail" style="color:#EE7321;"></i><a href="mailto:isslibertad@mardelplata.gob.ar">ss_starita@mardelplata.gob.ar</a><br />
            <i class="icon-right-thin" style="color:#EE7321;"></i>Líneas de transporte que llegan hasta el lugar: 543 - 525 - 501<br />
            <i class="icon-user-line" style="color:#EE7321;"></i>Responsable del Programa: Lourdes Vignolo - Medicina General.</p>
            <br>
            <h4 style="color:#EE7321;"><strong>CAPS Newbery</strong></h2>

            <p><i class="icon-location" style="color:#EE7321;"></i>Moreno 9375<br />
            <i class="icon-call" style="color:#EE7321;"></i>Teléfono: 487-3401/8472<br />
            <i class="icon-mail" style="color:#EE7321;"></i><a href="mailto:ssnewbery@mardelplata.gob.ar">ssnewbery@mardelplata.gob.ar</a><br />
            <i class="icon-right-thin" style="color:#EE7321;"></i>Líneas de transporte que llegan hasta el lugar: 511 - 521<br />
            <i class="icon-user-line" style="color:#EE7321;"></i>Responsable del Programa: Medicina General.</p>
        </div>    
    </div>
</div>
@include('layouts.footer')
@endsection