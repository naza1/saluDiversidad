@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Conocé tus derechos</li>
    </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <h3 style="color:#9ED115;">Conocé tus derechos</h3>
                <h4 style="color:#9ED115;"><i class="icon-check"></i><a href="#como" style="color:#9ED115;">- ¿Cómo se puede acceder al cambio de nombre en el DNI y en todos los registros?</a></h4>
                <h4 style="color:#9ED115;"><i class="icon-check"></i><a href="#significa" style="color:#9ED115;">- ¿Qué significa una atención de la salud respetuosa de la diversidad sexual?</a></h4>
                <h4 style="color:#9ED115;"><i class="icon-check"></i><a href="#13y18" style="color:#9ED115;">- Si tenés entre 13 y 16 años</a></h4></a></h4>
                <h4 style="color:#9ED115;"><i class="icon-check"></i><a href="#leyes" style="color:#9ED115;">- Las leyes que te protegen</a></h4></a></h4>
                <h4 style="color:#9ED115;"><i class="icon-check"></i><a href="#ayuda" style="color:#9ED115;">- Ayuda y asesoramiento</a></h4></a></h4>
                <br><br><br><br>

                <h2 style="color:#9ED115;"><strong>Tenés derecho a que se respete tu identidad de género </strong></h2>

                <p>En Argentina, la Ley Nacional de Identidad de Género Nº 26.743 garantiza el derecho de todas las personas a decidir, desarrollar y expresar libremente su identidad de género.</p><br />

                <h3 style="color:#9ED115";><strong>¿Qué es la identidad de género?</strong></h3>
                <p>De acuerdo con los Principios de Yogyakarta, la 26.743 define la identidad de género como <strong>“la vivencia interna e individual del género tal como cada persona la siente”.</strong> </p>
                <p>La Ley de Identidad de Género establece que <strong>las identidades trans no deben ser interpretadas como patológicas, o enfermedades.
                Ser una persona trans es no identificarse con el sexo asignado al nacer, a partir de los genitales.</strong> </p>
                <p>Todas las personas trans tienen derecho a que se reconozca su identidad de género, más allá de su apariencia y de si inicie, o no, modificaciones corporales.</p><br />

                <a name="como"></a><h3 style="color:#9ED115; id="como"><strong>¿Cómo se puede acceder al cambio de nombre en el DNI y en todos los registros?</strong></h3>
                
                <p>La Ley de Identidad de Género Nº 26.743 reconoce el derecho de todas las personas trans a realizar el cambio de nombre y sexo. El cambio registral se puede realizar en toda tu documentación: partida de nacimiento, DNI, pasaporte, etc.</p>

                <p><strong>Es un trámite administrativo que se realiza en el Registro Civil, sin otro requisito más que completar una solicitud y la expresión del nombre de pila elegido.</strong></p>
                <p><strong>No se requiere ningún diagnóstico ni peritaje médico, psiquiátrico o psicológico para realizarlo</strong>.</p> 
                <p>Para iniciar este trámite debes acercarte al Registro Civil donde te inscribieron al nacer y llevar el DNI que vas a cambiar y tu partida de nacimiento original.</p>
                <p>Para más información sobre el trámite y solicitar un turno, ingresá <a href="https://www.argentina.gob.ar/solicitar-mi-dni-de-acuerdo-con-mi-identidad-de-genero">aquí</a></p>

                <p><strong>Una persona extranjera también puede tramitar el cambio de nombre y sexo. Si ya cuenta con residencia permanente y posee DNI, puede solicitar la rectificación de tus datos personales.</strong></p>
                <p>Se debe completar un formulario y presentarlo <strong>en la Delegación de la Dirección Nacional de Migraciones que corresponda a su domicilio (en Mar del Plata se ubica en San Martín 3161). </strong></p>
                <p>Allí se requiere presentar: </p>
                <ul>
                <li>DNI donde conste su condición de residente permanente (original y copia)</li>
                <li>Nota emitida por el consulado de su nacionalidad en la que se informe que no se encuentra prevista la rectificación de nombre y sexo en su país de origen (en original, legalizada) o partida de nacimiento legalizada donde conste la modificación de su nombre y sexo.</li>
                <li>Formulario completo que podés descargar <a href="http://www.migraciones.gov.ar/pdf/residencias/identidad_genero.pdf">aquí</a></li>
                <li>Más información: <a href="https://www.argentina.gob.ar/interior/migraciones/identidad-de-genero">aquí</a></li>
                </ul>
                <br />

                <h3 style="color:#9ED115;"><strong>En los centros de salud tenés derecho a no sufrir ningún tipo de discriminación o estigmatización</strong></h3>

                <a name="significa"></a><h4 style="color:#9ED115;" id="significa"><strong>¿Qué significa una atención de la salud respetuosa de la diversidad sexual?</strong></h4>



                <div class="content_video iframe has-wh"><iframe class="scale-with-grid" width="700" height="400" src="http://www.youtube.com/embed/ARa1bKFP5vU?wmode=opaque" allowfullscreen></iframe></div>
                <p>En los centros de salud, como en cualquier otra institución, se debe garantizar tu derecho a la identidad de género y a no sufrir ningún tipo de discriminación o estigmatización.</p>
                <p>Si sos una persona trans, esto significa que tenés derecho:</p>
                <ul>
                <li>A que se <strong>te llame por tu nombre y tu identidad autopercibida, aunque no tengas un nuevo DNI.</strong> En las instituciones de salud, tanto tu historia clínica, los expedientes, las planillas, los certificados y cuando te llamen en la sala de espera debe respetarse tu identidad. </li>
                <li>A que <strong>tu identidad de género autopercibida sea reconocida a través de un trámite administrativo</strong>, sin necesidad de someterte a ningún diagnóstico y/o peritaje médico, psicológico y/o psiquiátrico.</li>
                <li>A acceder a una <strong>atención de tu salud integral,</strong> respetuosa de tu identidad de género y tu orientación sexual.</li>
                <li>A que se te <strong>garantice la confidencialidad y el secreto médico</strong> de lo que acontezca en la consulta.</li>
                <li><strong>A realizar las modificaciones corporales que desees</strong>, solo manifestando tu consentimiento informado. No es necesario que cuentes con diagnósticos médicos, psicológicos o psiquiátricos sobre tu identidad (como “disforia de género” o “trastorno de identidad de género”) para acceder a ellas. </li>
                <li>A que <strong>el sistema de salud garantice tu acceso a aquellas modificaciones corporales que consideres necesarias</strong> para expresar tu identidad de género, como la hormonización y/o las intervenciones quirúrgicas. </li>
                </ul>
                <a name="13y18"></a><h2 style="color:#9ED115;" id="13y18"><strong>Si tenés entre 13 y 16 años:</strong></h2>
                <ul>
                <li>Podrás acceder a la atención de tu salud y a tratamientos de <strong>forma autónoma</strong>, sólo manifestando tu consentimiento, siempre y cuando no impliquen un riesgo grave para tu salud o para tu vida.</li>
                <li><strong>Únicamente en las situaciones en que las prácticas médicas impliquen un riesgo grave para tu salud o tu vida, deberás contar con el asentimiento de una persona adulta referente</strong> (padre, madre, representante legal, personas que ejerzan roles de cuidado sobre vos, allegadas o referentes afectivos).</li>
                <li>Para el acceso a intervenciones quirúrgicas, vinculadas a tus necesidades para expresar tu identidad de género, necesitas manifestar tu consentimiento y el de una persona adulta referente.</li>
                <li>Para el acceso a la hormonización, sólo necesitas manifestar tu consentimiento de manera autónoma. Se requerirá el consentimiento de una persona adulta referente en caso de que el tratamiento ponga en riesgo grave tu salud o tu vida. </li>
                <li>Para el acceso a hormonización en personas menores de 13 años, se necesita contar con tu consentimiento y el asentimiento de una persona adulta referente.</li>
                </ul>


                <img class="scale-with-grid" src="{{ asset('img/grafico1.png') }}" alt="image1" title="image1" width="848" height="600"/><p class="wp-caption-text">Fuente: Ministerio de Salud de la Provincia de Buenos Aires. Atención integral de niñxs y adolescentes trans. 2019. Disponible en:  <a href="http://www.ms.gba.gov.ar/sitios/generoydiversidad/files/2019/11/Documento-T%C3%A9cnico-Atenci%C3%B3n-Integral-de-la-Salud-de-Ni%C3%B1xs-y-Adolescentes-Trans.pdf">[ACCEDER]</a></p>
                <a name="leyes"></a><h3 style="color:#9ED115;" id="leyes"><strong>Las leyes que te protegen</strong></h3>
                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley Nacional de Identidad de Género Nº 26.743</strong><br />
                Garantiza que las personas trans sean tratadas de acuerdo a su identidad autopercibida. Habilita el cambio de nombre y sexo en todos los registros a través de un trámite administrativo, sin necesidad de una orden judicial, médica o psiquiátrica. Despatologiza las identidades trans. <br />Garantiza el derecho al desarrollo de las personas de acuerdo a su identidad y al acceso a procedimientos médicos relacionados a ello.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/195000-199999/197860/norma.htm"><em>Texto completo de la ley</em> </a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Resolución 3159/2019 que incluye hormonizaciones y cirugías al Plan Médico Obligatorio</strong>.<br />Es una Resolución del Ministerio de Salud que establece que las obras sociales deben incluir en sus prestaciones gratuitas para todas las personas afiliadas los tratamientos de hormonización y cirugías relacionadas con la expresión de género.<br />
                <a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/221509/20191121"><em>Texto completo de la norma</em></a></p>


                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley de Derechos del Paciente Nº 26.529</strong><br />Garantiza el derecho de todas las personas a ser asistido por un profesional de la salud, sin importar las creencias religiosas, políticas, condición socioeconómica, raza, sexo, orientación sexual u otra condición. <br />
                Garantiza el trato digno y respetuoso en las instituciones de salud.<br />
                Reconoce el derecho a la confidencialidad, a la intimidad y a la autonomía. Esto implica que puedas aceptar o rechazar tratamientos o procedimientos médicos, y que tu documentación clínica sea confidencial. También el derecho a recibir información clara, completa y comprensible sobre tu estado de salud. Y que se le brinde esa información a quienes vos autorices.<br />
                Establece que sos el titular de tu historia clínica y podés solicitarla cuando lo necesites. <br />
                Garantiza tu derecho a realizar interconsultas.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/160000-164999/160432/norma.htm"><em>Texto completo de la ley</em> </a></p>

                    
                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Decreto 492/1995 Programa Médico Obligatorio</strong><br />El Programa Médico Obligatorio incluye todas las prestaciones que tu Obra Social o prepaga tiene que cubrir de manera obligatoria, cualquiera sea tu plan.<br />
                <a href="https://www.argentina.gob.ar/normativa/nacional/decreto-492-1995-27540/actualizacion"><em>Texto completo de la norma</em></a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley Nacional de Creación del Programa Nacional de Salud Sexual y Procreación Responsable Nº 25673</strong><br />Crea el Programa Nacional de Salud Sexual y Procreación Responsable en el ámbito del Ministerio de Salud. Se basa en que la salud sexual y reproductiva es un derecho y compromete al Estado a garantizarlo.<br />
                Garantiza el derecho a obtener información y atención gratuitas en materia de salud sexual, incluyendo cuestiones tales como: anticonceptivos, SIDA, patologías genitales y mamarias, entre otras. <br />
                Garantiza la provisión gratuita de anticonceptivos orales e inyectables, implante hormonal, DIU y preservativos, tanto en el sistema público como en las obras sociales y empresas de medicina prepaga.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/75000-79999/79831/norma.htm"><em>Texto completo de la ley</em></a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>La Ley Nacional de Derecho a la Protección de la Salud Mental Nº 26.657</strong><br />Garantiza el derecho a la protección de la salud mental de todas las personas, y el pleno goce de los derechos humanos de quienes atraviesan padecimientos mentales. También incluye a las personas con usos problemáticos de drogas.<br />
                Establece que no deben realizarse diagnósticos de salud mental basados solamente en la identidad de género o la orientación sexual. Tampoco por estatus político o socioeconómico, por pertenecer a un grupo cultural, racial o religioso. O por tener antecedentes de tratamiento u hospitalización. <br />
                También plantea que las personas con padecimiento mental deben ser tratadas en hospitales comunes y no en instituciones psiquiátricas. La internación debe ser breve y notificada al juez.<br />
                Garantiza el derecho a recibir la alternativa terapéutica que limite menos sus derechos y libertades, y que colabore para la integración familiar, laboral o comunitaria. A ser acompañado antes, durante y luego del tratamiento por sus familiares. Y a tomar las decisiones relacionadas con su atención y su tratamiento dentro de sus posibilidades.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/175000-179999/175977/norma.htm"><em>Texto completo de la Ley</em> </a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley Declárase de interés nacional a la lucha contra el SIDA Nº 23978</strong><br />
                Esta ley establece que tener VIH nunca puede impedirte el ingreso a una obra social o prepaga. Además, los tratamientos están cubiertos en un 100%.<br />
                <a href="https://www.argentina.gob.ar/normativa/nacional/ley-23798-199/texto"><em>Texto completo de la ley</em></a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>La Ley Nacional de Acceso integral a los procedimientos y técnicas médico-asistenciales de reproducción médicamente asistida Nº 26.862</strong><br />La ley de técnicas de reproducción asistida establece que las Obras Sociales y las prepagas deben cubrir los tratamientos necesarios para lograr el embarazo.<br />
                <a href="https://www.argentina.gob.ar/normativa/nacional/ley-26862-216700/texto"><em>Texto completo de la ley</em> </a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley Régimen para las intervenciones de contracepción quirúrgica Nº 26130</strong><br />
                Establece que toda persona mayor de edad tiene derecho a acceder a la realización de las prácticas denominadas "ligadura de trompas de Falopio" y "ligadura de conductos deferentes o vasectomía" en los servicios del sistema de salud.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/115000-119999/119260/norma.htm"><em>Texto completo de la ley</em> </a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley de Protección integral para prevenir, sancionar y erradicar la violencia contra las mujeres en los ámbitos en que desarrollen sus relaciones interpersonales Nº 26.485</strong><br />
                Esta ley reconoce que la violencia contra las mujeres constituye una violación de los derechos humanos. Establece los distintos tipos y ámbitos en los cuales esta se manifiesta.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/150000-154999/152155/norma.htm"><em>Texto completo de la ley</em></a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley de Interrupción Voluntaria del Embarazo Nº 27.610 (IVE)</strong><br />
                Garantiza el derecho al aborto hasta la semana 14 de gestación inclusive. Luego de ese plazo, puede realizarse en caso de violación o riesgo para la vida o la salud de la madre. <br />
                Las Obras Sociales y Empresas de Medicina Prepaga que integran el Sistema Nacional del Seguro de Salud, deben garantizar a partir del 24 de Enero de 2021 la prestación incorporando la cobertura integral y gratuita de la interrupción voluntaria del embarazo prevista en esta ley, en todas las formas que la Organización Mundial de la Salud recomienda.<br />
                <a href="https://www.argentina.gob.ar/noticias/ley-no-27610-acceso-la-interrupcion-voluntaria-del-embarazo-ive-obligatoriedad-de-brindar"><em>Texto completo de la ley</em></a>
                </p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Código Civil y Comercial de la Nación.</strong><br />
                Es la normativa que garantiza y regula el ejercicio de tus derechos civiles y comerciales. Regula la autonomía y la responsabilidad progresiva de las personas menores de edad.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm"><em>Texto completo de la norma</em></a></p>

                <p><strong><i class="icon-pinboard"  style="color:#9ED115;"></i>Ley Nacional de Protección Integral de los Derechos de Niñas, Niños y Adolescentes Nº 26.061</strong><br />
                Tiene como objetivo proteger de manera integral los derechos de las niñas, niños y adolescentes para garantizar su ejercicio y disfrute pleno, efectivo y permanente. <br />
                Garantiza la autonomía y establece la responsabilidad progresiva. Junto con el Código Civil, es la norma que permite que las personas menores de edad puedan tomar decisiones relativas a su salud y bienestar integral.<br />
                <a href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/110000-114999/110778/norma.htm"><em>Texto completo de la ley</em></a>
                <a name="ayuda"></a><h3 style="color:#9ED115;" id="ayuda"><strong>Ayuda y asesoramiento</strong></h3>

                <p>Si sos una persona del colectivo LGBTIQ+ y necesitás orientación sobre tus derechos, o realizar una denuncia podés dirigirte a alguno de estos lugares:</p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Subsecretaría de Derechos Humanos de la Municipalidad de General Pueyrredon  </strong>
                <a href="mailto:derechoshumanos@mardelplata.gob.ar ">derechoshumanos@mardelplata.gob.ar </a> <br />
                Fb: @DerechosHumanosMGP<br />
                Tw: @DDDHHMGP<br />
                Ig: @ddhh.mgp</p>
                
                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Dirección de Políticas de Género - Municipalidad de General Pueyrredon</strong>
                Alberti 1518. TE: 0223 451 1184 Lunes a viernes de 8 a 15 horas.<br />
                <a href="mailto:genero@mardelplata.gov.ar">genero@mardelplata.gov.ar</a><br />
                FB: Género MGP<br />
                Tw: @generomgp<br />
                Ig: @generomgp<br /></p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Defensoría del Pueblo del Municipio de General Pueyrredón</strong><br />
                Belgrano 2740 TE: 0223-499650 Lunes a viernes de 8 a 13:30 horas.</p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Defensoría del Pueblo de la Provincia de Buenos Aires</strong><br />
                25 de Mayo 3022. TE: 0223- 4912372. Lunes a viernes de 8 a 14 horas.</p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Comisaría de la Mujer y la Familia</strong><br />
                Av. Juan B. Justo 3649. TE 0223- 4720804. Abierto las 24 horas.</p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Fiscalía General</strong><br />
                Av. Independencia 3179. TE: 0223 628-7000 Lunes a viernes de 7:30 a 13:30 horas.</p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Defensoría Oficial-Casa de Justicia</strong><br />
                San Luis 4107. TE: 0223 491-5068. Lunes a viernes de 8 a 14 horas.</p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>INADI - Instituto Nacional contra la Discriminación, la Xenofobia y el Racismo</strong><br />
                Dirección: Avenida de Mayo 1401 - Ciudad Autónoma de Buenos Aires<br />
                Código postal: C1085ABE<br />
                Correo electrónico: <a href="mailto:info@inadi.gob.ar">info@inadi.gob.ar</a></p><br />

                <h4 style="color:#9ED115;"><strong>Organizaciones civiles y movimientos sociales</strong></h4>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>FALG Federación Argentina de Lesbianas, Gays, Bisexuales y Trans</strong> <br />
                <a href="https://www.falgbt.org">https://www.falgbt.org</a></p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Fundación Huesped</strong><br />
                Gianantonio, Carlos Dr. (ex Pje. Peluffo) 3932 (C1202ABB)<br />
                Ciudad Autónoma de Buenos Aires - Argentina<br />
                Tel/Fax: (5411) 4981 7777 ó 0 800 222 HUESPED (4837)<br />
                <a href="mailto:info@huesped.org.ar">info@huesped.org.ar</a></p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>Asociación Civil Infancias Libres </strong><br />
                @infanciaslibres<br />
                <a href="mailto:infanciaslibres2017@gmail.com">infanciaslibres2017@gmail.com</a></p>

                <p><strong><i class="icon-location" style="color:#9ED115;"></i>AMI Asociación Mundo Igualitario</strong><br />
                Córdoba 1882. 1º Piso. Oficina 14. Mar del Plata<br />
                TE: 223 539-1458<br />
                <a href="mailto:asociacion.mundo.igualitario@gmail.com">asociacion.mundo.igualitario@gmail.com</a></p>
                </div>    
    </div>
</div>
@include('layouts.footer')
@endsection