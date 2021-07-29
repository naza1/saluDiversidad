@extends('layouts.app')

@section('content')

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
<nav aria-label="breadcrumb" style="padding-top: -50px !important;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Diversidad y Salud</li>
    </ol>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">            
            <h3 style="color:#38AB4E;">Diversidad y salud</h3>
            <h4 style="color:#38AB4E;"><i class="icon-check"></i><a href="#os" style="color:#38AB4E;">- Obligaciones de las obras sociales y prepagas</a></h4>
            <h4 style="color:#38AB4E;"><i class="icon-check"></i><a href="#hormo" style="color:#38AB4E;">- Hormonización</a></h4>
            <h4 style="color:#38AB4E;"><i class="icon-check"></i><a href="#ciru" style="color:#38AB4E;">- Cirugías</a></h4>
            <h4 style="color:#38AB4E;"><i class="icon-check"></i><a href="#control" style="color:#38AB4E;">- Es importante que realices controles periódicos</a></h4>
            <br><br><br><br>
            
            
            <a name="os"></a><h2 style="color:#38AB4E;" id="os"><strong>Obligaciones de las obras sociales y prepagas</strong></h2>

            <p><strong>Las obras sociales y prepagas deben garantizar la gratuidad de todos los procedimientos de modificación corporal de una persona trans para expresar su identidad de género. </strong></p>
            <p>La Ley de Identidad de Género Nº 26.743 es la que garantiza este derecho en el sistema de salud estatal, privado o de obras sociales. <strong>Esto incluye tanto las intervenciones quirúrgicas como las hormonizaciones. Desde 2019, las obras sociales y prepagas deben cubrir el 100% de los procesos hormonales.</strong> Es decir que son gratuitos para quienes los requieran. La Resolución 3159/2019 de la Secretaría de Salud de la Nación los incorporó al Programa Médico Obligatorio.</p>

            <p><strong>Con la receta expedida por el equipo de salud del sistema público, la obra social o prepaga está obligada</strong>, por Ley, a cubrir el tratamiento de hormonación y las intervenciones quirúrgicas de modificaciones corporales. </p>

            <p>Si sos una persona trans y vas a comenzar tu <strong>hormonización</strong>, o ya estás en tratamiento, acércate a tu obra social para pedir que cubra la medicación. </p>

            <h4 style="color:#38AB4E;"><strong>¿Qué documentación se debe presentar? </strong></h4>

            <p>En la obra social te van a pedir la siguiente documentación:  </p>
            <ul>
            <li>Resumen de tu historia clínica</li>
            <li>Receta médica de las hormonas </li>
            <li>Análisis de laboratorio </li>
            <li>Una carta o nota donde explicas el pedido, podés descargar un modelo <a href="https://drive.google.com/file/d/15NflWQuLFQHHgREPkMPLaZsfH2qj-UK1/view?usp=sharing">aquí</a></li>
            </ul>
            <p>En caso de que tu obra social se niegue a brindar el tratamiento, puedes iniciar un reclamo a través de una nota. <a href="https://drive.google.com/file/d/1ygqFVXDZl0awf1gZY3PPRRA1g7bDjeyC/view?usp=sharing">Aquí podés descargar el modelo.</a></p><br />

            <a name="hormo"></a><h2 style="color:#38AB4E;" id="hormo"><strong>Hormonización</strong></h2>

            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Qué es la hormonización?</strong><br />
            La hormonización consiste en la administración de fármacos que intervienen en los cuerpos modificando los caracteres físicos que suelen asociarse con lo masculino o lo femenino. </p>

            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Es posible realizar un tratamiento de hormonización sin supervisión médica?</strong><br />
            Es importante que realices los procesos de hormonización bajo supervisión médica. No utilices medicamentos recetados para otras personas, o adquiridos por otros medios. La legislación argentina garantiza que accedas a ellos de manera gratuita en el sistema de salud público y privado.
            Los procesos de hormonización deben ser realizados bajo supervisión profesional especializada (medicina general, clínica, ginecología o endocrinología). Siguen esquemas personalizados que se establecen de acuerdo a las expectativas y necesidades de cada persona usuaria, junto a un profesional, luego de una evaluación clínica y de los riesgos y beneficios. 
            </p>
            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Cuánto tiempo pasa para ver los efectos de las hormonas en el cuerpo?</strong><br />
            Aunque cada cuerpo tiene sus propios ritmos y respuestas, existen estándares sobre <strong>los efectos esperados y los plazos de aparición a partir del uso de las hormonas disponibles en nuestro país. </strong>Compartimos las <strong>tablas elaboradas por el Ministerio de Salud de la Nación </strong>(Atención de la salud integral de personas trans, travestis y no binarias. Guía para equipos de salud. Actualización 2020):</p>
            
            <!--Tabla-->
            <table class="table table-responsive-lg table-hover">
			<thead>
			<tr style="background-color:#38AB4E;">
			<td colspan="3"><strong><p style="color:#fff;">HORMONIZACIÓN CON ESTRÓGENOS Y ANTIANDRÓGENOS</strong></td></tr>
            <tbody>
			<tr><td><strong>Efecto</strong></td>
			<td><strong>Inicio</strong></td>
			<td><strong>Máximo efecto</strong></td></tr>
			<tr><td>Redistribución de la grasa corporal</p></td>
			<td>3 a 6 meses</td><td>2 a 3 años</td></tr>
			<tr><td>Disminución de la masa muscular</td>
			<td>3 a 6 meses</td><td>1 a 2 años</td></tr>
			<tr><td>Piel más suave y menos grasa</td>
			<td>3 a 6 meses</td>
			<td>Desconocido</td></tr>
			<tr><td>Disminución del deseo sexual</td>
			<td>1 a 3 meses</td>
			<td>3 a 6 meses</td></tr>
			<tr><td>Disminución de las erecciones espontáneas</td>
			<td>1 a 3 meses</td>
			<td>3 a 6 meses</td></tr>
			<tr><td>Disfunción sexual eréctil</td>
			<td>Variable</td>
			<td>Variable</td></tr>
			<tr><td>Crecimiento mamario</td>
			<td>3 a 6 meses</td>
			<td>2 a 3 años</td></tr>
			<tr><td>Disminución del volumen testicular</td>
			<td>3 a 6 meses</td>
			<td>2 a 3 años</td></tr>
			<tr><td>Disminución de la producción de esperma</td>
			<td>Desconocido </td>
			<td>Más de 3 años</td></tr>
			<tr><td>Disminución de la velocidad de crecimiento y grosor del vello corporal</td>
			<td>6 a 12 meses</td>
			<td>Más de 3 años</td></tr>
			<tr><td>Cambios en la voz</td>
			<td>Ninguno</td>
			<td></td></tr>
			</tbody>
			</table>
            <!--tabla-->
            <table class="table table-responsive-lg table-hover">
			<thead style="background-color:#38AB4E;">
			<td colspan="3"><p style="color:#fff;"><strong>HORMONIZACIÓN CON TESTOSTERONA</strong></td></tr></thead>
            <tbody>
			<tr><td><strong>Efecto</strong></td>
			<td><strong>Inicio</strong></td>
			<td><strong>Máximo efecto</strong></td></tr>
			<tr><td>Piel grasa/acné</td>
			<td>1 a 6 meses</td>
			<td>1 a 2 años</td>
			</tr>
			<tr><td>Redistribución de la grasa corporal</td>
			<td>1 a 6 meses</td><td>2 a 5 años</td></tr>
			<tr><td>Cese de la menstruación</td><td>2 a 6 meses</td>
			<td>----</td></tr>
			<tr><td>Atrofia vaginal</td>
			<td>3 a 6 meses</td>
			<td>1 a 2 años</td>
			</tr><tr><td>Aumento del tamaño del clítoris</td>
			<td>3 a 6 meses</td><td>1 a 2 años</td></tr>
			<tr><td>Crecimiento del vello facial y corporal</td>
			<td>6 a 12 meses</td>
			<td>4 a 5 años</td></tr>
			<tr><td>Voz más grave</td>
			<td>6 a 12 meses</td>
			<td>1 a 2 años</td></tr>
			<tr><td>Aumento de la masa muscular</td>
			<td>6 a 12 meses </td>
			<td>2 a 5 años</td>
			</tr>
            </tbody>
            </table>
       <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿En qué consiste el seguimiento médico de la hormonización?</strong><br />
            <strong>Durante el primer año</strong> de hormonización, deberás asistir a controles médicos <strong>cada 3 meses</strong>. Posteriormente podrás pautarlos<strong> cada 6 meses durante el segundo año y una vez por año a partir del tercer año.</strong> Esto permitirá realizar un seguimiento clínico de los resultados esperados y advertir sobre la aparición de efectos adversos o complicaciones. 
            </p>
            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Las hormonas pueden producir efectos no deseados?</strong><br />
            Los efectos adversos y complicaciones dependen de cada organismo, pero también es posible estandarizarlas. Compartimos nuevamente las tablas <strong>elaboradas por el Ministerio de Salud de la Nación</strong> (Atención de la salud integral de personas trans, travestis y no binarias. Guía para equipos de salud. Actualización 2020):</p>

            <!--Tabla2-->
            <table class="table table-responsive-lg table-hover">
			<thead style="background-color:#38AB4E;">
			<td colspan="3"><p style="color:#fff;"><strong>ESTRÓGENOS Y ANTIANDRÓGENOS: CONTRAINDICACIONES Y PRECAUCIONES</strong></td></tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Droga</strong></td>
                    <td><strong>Contraindicaciones</strong></td>
                    <td><strong>Precauciones</strong></td>
                </tr>
                
                <tr>
                    <td>Estradiol</td>
                    
                <td>Hipersensibilidad<br>
            Presencia activa o antecedentes de tromboembolia venosa confirmada<br>
            Enfermedad tromboembólica arterial activa o reciente<br>
            Trombofilias<br>
            Enfermedad hepática activa e insuficiencia hepática<br>
            Insuficiencia renal aguda o avanzada<br>
            Hipertrigliceridemia severa<br></td>
                
                <td>Obesidad mórbida<br>
            Hipertensión arterial<br>
            Diabetes mellitus<br>
            Dislipemias no controladas<br>
            Varices moderadas a severas<br>
            Migraña<br>
            Litiasis biliar<br></td>
                
                </tr>
                
                <tr><td>Acetato de ciproterona</td>
                
                <td>Obesidad mórbida<br>
                        Hipersensibilidad<br>
                        Hepatopatías<br>
                        Síndrome de Dubin-Johnson y síndrome de Rotor<br>
                        Presencia o antecedentes de tumores hepáticos<br>
                        Enfermedades caquécticas (excepto carcinoma de próstatahormono-dependiente)<br>
                        Depresión crónica grave<br>
                        Presencia o antecedentes de procesos tromboembólicos<br>
                        Diabetes grave con alteraciones vasculares<br>
                        Anemia de células falciformes<br>
                        Presencia o antecedentes de meningioma<br></span></p></td>
                
                <td>Diabetes</td>
                
                </tr>
                
                <tr><td>Espironolactona</td>
                
                <td>Hipersensibilidad<br>
            Insuficiencia renal aguda o deterioro significativo de la función renal<br>
            Enfermedad de Addison<br>
            Hiperpotasemia<br></td>
                
                <td>Diabetes<br>
            Hepatopatías</td></tr>
                
                </tbody></table>

            <!--tabla3-->

            <table class="table table-responsive-lg table-hover">
			<thead style="background-color:#38AB4E;">
			<td colspan="3"><p style="color:#fff;"><strong>TESTOSTERONA: CONTRAINDICACIONES Y PRECAUCIONES</strong></td></tr>
            </thead>
            <tbody>
            <tr><td><strong>Contraindicaciones</strong></span></p></td>
            <td><strong>Precauciones</strong></td></tr>
            <tr><td>Hipersensibilidad<br>
            Embarazo<br>
            Lactancia<br>
            Tumores hepáticos actuales o pasados<br></td>
            <td>
            Enfermedad Pulmonar Crónica<br>
            Insuficiencia hepática<br>
            Apnea del sueño<br>
            Insuficiencia cardíaca<br>
            Migraña<br>
            Insuficiencia renal<br>
            </td></tr>
            </tbody>
            </table>
                
                <p>Si tenés entre 13 y 16 años:</p>
            <ul>
            <li>Podrás acceder a la atención de tu salud y a tratamientos de forma autónoma, sólo manifestando tu consentimiento, siempre y cuando no impliquen un riesgo grave para tu salud o para tu vida.</li>
            <li>Únicamente en las situaciones en que las prácticas médicas impliquen un riesgo grave para tu salud o tu vida, deberás contar con el asentimiento de una persona adulta referente (padre, madre, representante legal, personas que ejerzan roles de cuidado sobre vos, allegadas o referentes afectivos).</li>
            <li>Para el acceso a intervenciones quirúrgicas, vinculadas a tus necesidades para expresar tu identidad de género, necesitas manifestar tu consentimiento y el de una persona adulta referente.</li>
            <li>Para el acceso a la hormonización, sólo necesitas manifestar tu consentimiento de manera autónoma. Se requerirá el consentimiento de una <li>persona adulta referente en caso de que el tratamiento ponga en riesgo grave tu salud o tu vida. </li>
            <li>Para el acceso a hormonización en personas menores de 13 años, se necesita contar con tu consentimiento y el asentimiento de una persona adulta referente.</li>
            </ul><br />

            <a name="ciru"></a><h2  style="color:#38AB4E;" id="ciru"><strong>Cirugías</strong></h2>

            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Todas las personas trans pueden acceder a cirugías de modificación corporal?</strong><br />
            Si. Todas las personas mayores de 16 años pueden acceder a intervenciones quirúrgicas de modificación corporal. No se necesita autorización administrativa, ni judicial. Tampoco se exige un tratamiento hormonal ni una evaluación psicológica o psiquiátrica. Sólo basta con el consentimiento informado.
            En el caso de las personas menores de 16 años, además del consentimiento informado, debe contar con el asentimiento de una persona adulta referente.</p>

            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Los procedimientos quirúrgicos de modificación corporal son cirugías estéticas?</strong><br />
            No, son un derecho. El decreto 903/2015, que reglamenta la Ley de Identidad de Género, enuncia que los procedimientos quirúrgicos de modificación corporal relativos a la expresión de género no deben ser considerados como intervenciones estéticas. Por lo tanto, son un derecho y deben ser garantizadas por el sistema de salud público y privado.
            Se pueden realizar cirugías de modificación genital (vulvovaginoplastía, metadoioplastía, faloplastía o escrotoplastía), mamarias (mamoplastías de aumento o mastectomías), de la voz, de los glúteos y facial.</p>

            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Todas las personas trans se realizan cirugías de modificación corporal?</strong><br />
            No, depende de cada persona. Tampoco es un requisito realizarlas para acceder al derecho a la identidad de género. La elección de cada procedimiento debe ser ejercida con autonomía por cada persona.</p>

            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Todos los procedimientos hay que realizarlos bajo supervisión médica?</strong><br />
            Si, es importante que te acerques a un centro de salud y no te expongas a procedimientos peligrosos como la aplicación de aceite, sustancias de relleno o silicona líquida.</p><br />

            <a name="control"></a><h2  style="color:#38AB4E;" id="control"><strong>Es importante que realices controles periódicos</strong></h2>

            <p>Es importante que realices controles de tu estado de salud integral. Los chequeos periódicos pueden ayudar a identificar tempranamente y prevenir posibles enfermedades. Te sugerimos que tengas un/a médico/a de cabecera.</p>


            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Las personas trans deben realizarse mamografías y PAP?</strong><br />
            Las mujeres trans o las personas no binarias que realizan procesos de hormonización con estrogenos deben realizarse controles mamarios periódicos, siguiendo las recomendaciones para las mujeres cis. 
            Las personas que no se han realizado mastectomías radicales también deben realizarse controles mamarios periódicos, como las mujeres cis.
            Los hombres trans y las personas no binarias con útero deben realizarse controles ginecológicos periódicos o PAP, siguiendo las mismas recomendaciones que las mujeres cis.</p>


            <p><strong><i class="icon-right-thin" style="color:#38AB4E;"></i>¿Es peligroso usar vendas elásticas en las mamas?</strong><br />
            Si usás elementos para aplanar el pecho, debes evitar el uso de cintas adhesivas o vendas elásticas porque pueden dañar tu piel. Lo recomendable es utilizar binders (fajas o camisas  especiales) de telas respirables. Y hacerlo el menor tiempo posible, durante el día. Es mejor que te las quites para dormir.</p>
            </div>    
    </div>
</div>
@include('layouts.footer')
@endsection
