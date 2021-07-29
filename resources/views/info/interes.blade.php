@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
		<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Información de interés</li>
  </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">


                <h3 style="color:#3C5DA8;">Información de interés</h3>
                <h4 style="color:#3C5DA8;"><i class="icon-check"></i><a href="#confiable" style="color:#3C5DA8;">- ¿Dónde puedo acceder a información confiable sobre temas de salud?</a></h4>
                <h4 style="color:#3C5DA8;"><i class="icon-check"></i><a href="#video" style="color:#3C5DA8;">- Videoteca</a></h4>
                <h4 style="color:#3C5DA8;"><i class="icon-check"></i><a href="#guia" style="color:#3C5DA8;">- Guías para profesionales de la salud</a></h4>
                <h4 style="color:#3C5DA8;"><i class="icon-check"></i><a href="#efemerides" style="color:#3C5DA8;">- Efemérides</a></h4></a></h4>
                <br><br><br><br>


                <a name="confiable"></a><h2 style="color:#3C5DA8;" id="confiable"><strong>¿Dónde puedo acceder a información confiable sobre temas de salud?</strong></h2>

                <p>En internet hay mucha información disponible sobre cuestiones de salud, pero no toda es confiable. Por eso, compartimos algunas páginas web de entidades científicas y gubernamentales donde podrás encontrar datos claros sobre ciertas enfermedades, infecciones y consejos vinculados a la prevención.</p>
                <i class="icon-direction" style="color:#3C5DA8;"></i><a href="https://www.argentina.gob.ar/salud/prevencionycuidados">Ministerio de Salud del Gobierno de la Nación</a><br />
                <i class="icon-direction" style="color:#3C5DA8;"></i><a href="https://www.paho.org/es/topics">Organización Panamericana de la Salud</a><br />
                <i class="icon-direction" style="color:#3C5DA8;"></i><a href="https://www.who.int/es">Organización Mundial de la Salud</a><br />
                <i class="icon-direction" style="color:#3C5DA8;"></i><a href="https://medlineplus.gov/spanish/">National Library of Medicine (Biblioteca Nacional de Medicina de Estados Unidos) </a><br /><br />

                <a name="video"></a><h2 style="color:#3C5DA8;" id="video"><strong>Videoteca </strong></h2>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>Campaña diversidad</strong>
                Campaña Diversidad realizada por el Grupo de Estudios sobre Familia, Género y Subjetividades de la Universidad Nacional de Mar del Plata. Participaron referentes locales de la comunidad trans, familiares y profesionales de la ciudad.<br />
                Fue editado por el Canal de la UNMDP.<br />
                <a href="https://www.youtube.com/watch?v=NMS7xA_tkzY&list=PLIjoTZYLpt7SjwwACJJpqkQwDlmuFXNub&index=2">Accedé a la campaña completa</a></p>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>La fábrica del deseo: Infancias trans - Canal Encuentro</strong><br />
                <a href="https://www.youtube.com/watch?v=WATNOwYuhGc&ab_channel=CanalEncuentro ">ACCEDER</a></p>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>La fábrica del deseo: Identidad - Canal Encuentro</strong><br />
                <a href="https://www.youtube.com/watch?v=2njww6ipVxo&ab_channel=CanalEncuentro">ACCEDER</a> </p>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>La fábrica del deseo: Cuerpo - Canal Encuentro</strong><br />
                <a href="https://www.youtube.com/watch?v=QVdvOG76xWs">ACCEDER</a></p>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>Conurbano: Entrevista a Diana Sacayán - Canal Encuentro</strong><br />
                <a href="https://www.youtube.com/watch?v=85tKM6oQwJg&ab_channel=CanalEncuentro ">ACCEDER</a>
                </p>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>Pibxs-La Tribu Audiovisual. </strong><br />
                <a href="https://www.youtube.com/watch?v=herfeGrC4hE&ab_channel=LaTribuAudiovisual ">ACCEDER</a></p>

                <p><strong><i class="icon-videocam-line" style="color:#3C5DA8;"></i>Canal FALGT</strong><br />
                <a href="https://www.youtube.com/user/federacionarglgbt">ACCEDER</a></p><br />


                <a name="guia"></a><h2 style="color:#3C5DA8;" id="guia"><strong>Guías para profesionales de la salud</strong></h2>

                <p><strong><i class="icon-direction" style="color:#3C5DA8;"></i>Guía del Ministerio de Salud de la Nación para atención de la salud integral de personas trans, travestis y no binarias</strong><br /><a href="https://bancos.salud.gob.ar/sites/default/files/2020-10/guia-salud-personas-trans-travestis-nobinarias.pdf">ACCEDER</a></p>

                <p><strong><i class="icon-direction" style="color:#3C5DA8;"></i>Guías del Programa Provincial de Implementación de Políticas de Género y Diversidad en Salud </strong><br /><a href="http://www.ms.gba.gov.ar/sitios/generoydiversidad/documentos/">ACCEDER</a></p>


                <p><strong><i class="icon-direction" style="color:#3C5DA8;"></i>Guía sobre derechos de adolescentes para el acceso al sistema de salud. Ministerio de Salud de la Nación.</strong><br />
                <a href="https://www.argentina.gob.ar/sites/default/files/guia_sobre_derechos_de_adolescentes_para_el_acceso_al_sistema_de_salud.pdf">ACCEDER</a></p>

                <a name="efemerides"></a><h3 style="color:#3C5DA8;" id="efemerides"><strong>Efemérides</strong></h3>

                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>6 de febrero. Día Internacional de Tolerancia Cero con la Mutilación genital Femenina. </strong><br />
                Se conmemora para denunciar los efectos de la extirpación total o parcial de tejido de los órganos genitales femeninos, particularmente del clítoris, con el objetivo de eliminar el placer sexual en las mujeres. La práctica es considerada por la ONU como una violación de los derechos humanos de las mujeres y de las niñas. La fecha alude a la aprobación por parte de este organismo de una declaración presentada por Stella Obasanjo, portavoz de esta lucha. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>7 de marzo. Día de la Visibilidad Lésbica </strong><br />
                Conmemoración de la muerte de “Pepa” Gáitan y en nombre de todas las mujeres bisexuales y lesbianas que sufren discriminación cotidiana en los diferentes ámbitos sociales. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>8 de marzo. Día Internacional de la Mujer</strong><br />
                Se conmemora la lucha de las mujeres por sus derechos, emancipación y desarrollo íntegro como persona. La fecha alude a lo sucedido el 8 de marzo de 1908 cuando 129 mujeres murieron asesinadas en un incendio en la fábrica Cotton, de Nueva York, Estados Unidos, luego de que se declararan en huelga con permanencia en su lugar de trabajo.</p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>11 de marzo. Día Nacional de la Lucha contra la Violencia de Género en los Medios de Comunicación. </strong><br />
                Esta fecha busca promover el tratamiento plural, igualitario y no estereotipado, evitando toda discriminación por orientación sexual en los medios. 
                18 de marzo. Día de la Promoción de los Derechos de las Personas Trans en Argentina. 
                En conmemoración del fallecimiento de la activista Claudia Pia Baudracco, una de las principales referentes de la lucha por los derechos humanos de las personas trans. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>31 de marzo. Día Internacional de la Visibilidad Trans.</strong><br />
                Creado en 2009, por Rachel Crandall, una activista transgénero de Michigan en Estados Unidos, para celebrar la identidad de las personas trans y concientizar de la discriminación que sufren. Desde 2014, ha sido recuperado por distintas organizaciones LGBTTT de todo el mundo.
                </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>9 de mayo. Aniversario de la Ley de Identidad de Género en Argentina</strong><br />
                Se conmemora la sanción de la Ley 26743 de Identidad de Género en Argentino. Se trata de una normativa modelo reconoce el derecho a la identidad de género de las personas trans y a su libre expresión y desarrollo. Al mismo tiempo que despatologiza las identidades, desjudicializa los cambios registrales.</p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>17 de mayo. Día Internacional contra la Discriminación por Orientación Sexual e Identidad de Género. </strong><br />
                El 17 de mayo de 1990 la Asamblea General de la OMS suprimió la homosexualidad de la lista de enfermedades mentales, lo que sirvió de base para la lucha del reconocimiento de derechos y la creación de politicas publicas para la población LGBTIQ. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>28 de mayo. Día Internacional de Acción por la Salud de las Mujeres.</strong><br />
                En 1988, la Red de Salud de las Mujeres Latinoamericanas y del Caribe (RSMLAC) sentó las bases para reafirmar el acceso a la salud de las mujeres como un derecho; y propuso instaurar este día de acción global como un recordatorio para abordar las múltiples causas de enfermedad y muerte que afectan a las mujeres y trabajar en favor de su atención, prevención y tratamiento. Tiene como objetivo reafirmar el derecho a la salud como derecho humano de las mujeres que debe garantizarse sin ninguna restricción o exclusión a lo largo de todo su ciclo de vida.</p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>28 de junio. Día Internacional del Orgullo LGBTIQ.</strong><br />
                El 28 de junio se conmemoran los disturbios que sucedieron en Stonewall (New York) donde personas trans, gays y lesbianas respondieron a una redada policial con una revuelta que marcó el inicio del movimiento moderno por los derechos LGBTIQ en el mundo entero. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>15 de julio. Aniversario de la sanción de la Ley de Matrimonio Igualitario.</strong><br />
                Se celebra la sanción de la Ley Nº 26618 de Matrimonio Igualitario que modificó la norma de matrimonio civil en Argentina y se garantizó el derecho a que todas las personas puedan contraer matrimonio independientemente de su sexo y género. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>20 de agosto. Día del Activismo por la Diversidad Sexual.</strong><br />
                Se lleva a cabo en la Argentina por la conmemoración de la muerte de Carlos Jáuregui en 1996, uno de los referentes más importantes del movimiento por los derechos humanos de la población LGBTIQ. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>23 de septiembre. Día Internacional contra la Explotación Sexual y la trata de mujeres, niños y niñas.</strong><br />
                Se conmemora a nivel mundial la primera ley aprobada en el mundo contra la trata de personas, en el 1913 conocida como “Ley Palacios”.  </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>Tercer sábado de octubre. Día Internacional por la despatologización trans.</strong><br />
                Desde el 2007, esta fecha es impulsada por la Campaña Stop Trans Pathologization (STP) para los terceros sábados de octubre de cada año. Es una jornada de lucha contra los diagnósticos patologizantes de la identidades trans y para denunciar los procedimientos mutilantes a los que son sometidas las personas intersex.</p><br />

                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>26 de octubre. Día de la visibilidad intersex.</strong><br />
                A través de esta conmemoración, las organizaciones de personas intersexuales buscan visibilizar sus demandas con el fin de terminar con la discriminación contra las personas intersex y asegurar el derecho a la integridad corporal, la autonomía física y la auto-determinación. Ese día marca la primera demostración pública hecha por personas intersex en Estados Unidos, cuando Morgan Holmes y Max Beck, de la Intersex Society of North America (ISNA), se unieron a los aliados de Transexual Menace y otras organizaciones, para protestar en la convención anual de la Academia Americana de Pediatría (AAP) realizada el 26 de octubre de 1996 en Boston. </p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>25 de noviembre. Día internacional de la Lucha contra la Violencia hacia la Mujer.</strong><br />
                Se conmemora para denunciar la violencia que se ejerce sobre las mujeres en todo el mundo y reclamar políticas en todos los países para su erradicación. La convocatoria fue iniciada por el movimiento feminista latinoamericano en 1981, en conmemoración a la fecha en la que fueron asesinadas, en 1960, las tres hermanas Mirabal (Patria, Minerva y María Teresa), en la República Dominicana. En 1999, la fecha fue reconocida por la Asamblea General de la ONU.</p><br />
                <p><strong><i class="icon-calendar" style="color:#3C5DA8;"></i>1 de diciembre. Día Mundial de la Lucha contra el SIDA.</strong><br />
                Este día es una oportunidad para apoyar a  aquellas personas  involucradas en la lucha contra el VIH y para mejorar la comprensión de la enfermedad como un problema de salud pública mundial.  </p>
</div>
</div>
</div>
@include('layouts.footer')
@endsection