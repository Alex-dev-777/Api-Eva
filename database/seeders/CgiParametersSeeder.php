<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CgiParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cgi_parameters')->insert([
            'acuerdo' => '<p><b>ACUERDO DE CONFIDENCIALIDAD Y NO DIVULGACIÓN DE INFORMACIÓN</b></p>
            <p><b>DECLARO </b>conocer:</p>
            <p><b>Que,</b> el Instituto Nacional de Evaluación Educativa –Ineval- es la entidad encargada de la evaluación integral del Sistema Nacional de Educación, de conformidad al artículo 346 de la Constitución de la República del Ecuador y artículo 67 de la Ley Orgánica de Educación Intercultural.</p> 
            <p><b>Que,</b> la normativa aplicable a la evaluación se encuentra cargada en la página institucional del Ministerio de Educación y el Instituto Nacional de Evaluación Educativa.</p>
            <p><b>Que,</b> el Ineval aplica protocolos de seguridad en el diseño y desarrollo de las evaluaciones.</p>
            <p><b>Que, </b>el Ineval mantiene políticas de privacidad para el tratamiento de datos personales, así como, términos y condiciones de uso para las plataformas, aplicativos y demás canales electrónicos.<b> </b></p>
            <p><b>Que,</b> toda la información elaborada y desarrollada por Ineval es de propiedad exclusiva del Ineval.</p>
            <p><b>Que,</b> las preguntas de la evaluación son única y exclusivamente para la aplicación de evaluación.</p>
            <p><b>Que,</b> el instrumento de evaluación contenido en el aplicativo o plataforma tiene el carácter de reservado.</p>
            <p><b>Que,</b> el usuario y clave de acceso para la evaluación y demás información reservada no debe ser entregada a terceros, sea en físico, redes sociales, mensajería o cualquier medio electrónico.</p>
            <p><b>Que,</b> si durante la evaluación digito la tecla “<b>Impr Pant</b>” o “<b>PrtSc</b>” u otras con funciones similares, el aplicativo se cerrará automáticamente, dándose por finalizada la evaluación.</p>
            <p><b>Que, </b>la información personal proporcionada en el registro o inscripción de la evaluación será utilizada por el Ineval para el ejercicio de sus competencias, por lo que, podrá verificar dicha información para determinar la posesión, uso o difusión de información de los aplicativos, y demás información categorizada como reservada conforme la Ley. </p>
            <p><b>Que, </b>el sustentante deberá cumplir con las siguientes instrucciones: a) Mantener encendida la cámara y micrófono durante toda la evaluación; b) No estar acompañado de personas, ni levantarse del espacio donde rinda la evaluación; c) Mantener su celular apagado y no podrá usarlo en la evaluación; d) Ingresar a la evaluación en el horario que le corresponda; e) Abstenerse de mal utilizar la plataforma, puesto que cualquier uso inadecuado de la plataforma cerrará la misma; f) Cerrar los programas y documentos que no estén autorizados para la evaluación; g) No ingresar a otras páginas web; h)            No usar teléfono celular, tableta, calculadora, reproductores de audio o video, o algún otro dispositivo electrónico, usar smartwatch o cualquier tipo de relojes. i) No utilizar calculadora o demás funciones del computador, al realizar esta acción la evaluación se cerrará; j) No podrá hacer uso de materiales de apoyo tales como folletos, libros, etc; k) Utilizar únicamente el mouse, y no presionar la tecla captura de pantalla u otras similar. De presionarse será considerado intento de copia; l) Desinstalar del computador los programas frezzer, camtasia, keylogger entre otros programas similares a los expuestos; m) No realizar capturas de pantalla, fotografiar, grabar, imprimir u otra acción similar. n) Cumplir con las disposiciones sobre la confidencialidad y reserva de la información del Ineval.</p>
            <p><b>Que,</b> si durante la evaluación incurro en el cometimiento de las prohibiciones señaladas y demás tipificadas en la normativa aplicable, me comprometo a colaborar con los actores de aplicación de la evaluación.</p>
            <p><b>Que,</b> ante el cometimiento de las prohibiciones tipificadas, previo, durante o después de la evaluación, las entidades competentes iniciarán con el procedimiento administrativo correspondiente.</p>
            <p><b>Que,</b> en caso de incumplimiento de este Acuerdo, el Ineval iniciará con las acciones legales que correspondan.</p>
            <p>He leído y acepto el presente Acuerdo.</p>
            ',
            'instrucciones' => '<p>En la prueba que va a resolver encontrará diferentes preguntas.</p>

            <p><b>Es importante que:</b></p>
            
            <ul>
             <li>Lea atentamente cada texto y cada pregunta antes de responder.</li>
             <li>Responda solo lo que sabe, sin copiar a sus compañeros.</li>
             <li>Si quiere cambiar alguna de sus respuestas, marque el círculo de su nueva respuesta.</li>
             <li>El cuestionario está libre de restricciones para cambiar de pregunta, es decir que puede adelantar y retroceder las preguntas cuantas veces necesite, hasta estar seguro de su respuesta. </li>
             <li>Si necesita hacer operaciones, puede hacerlas en hojas de papel, al final deberá entregar las mismas.</li>
             <li>Recuerde que el cronómetro ubicado en la parte superior le indica el tiempo que le queda para responder la prueba.</li>
            </ul>
            
            <ul>
            </ul>
            
            <ul>
            </ul>
            
            <p>Cada pregunta tiene cuatro opciones de respuesta, de las cuales solo <b>una</b> es la <b>correcta.</b></p>
            
            <p> </p>
            
            <p><b>¡Que tenga éxito!</b></p>
            ',
            'navegacion_tipo_id' => '1',
            'finalizar_al_error' => '',
            'finalizar_al_intento' => '0',
            'sp' => '1',
            'periodo' => '704',
            'results' => '<p><img alt="" height="64" src="files/banner-para-SEIN-2023.png" width="964" /></p>

            <table border="2" cellpadding="8" cellspacing="0" style="height:189px; width:995px">
             <tbody>
              <tr>
               <td colspan="2" style="width:651px"><span style="font-size:11px"><b>Nombres: </b>{{apellidos}} <b> </b>{{nombres}}</span></td>
               <td colspan="1" rowspan="4" style="text-align:center; width:307px">{{qr_250}}</td>
              </tr>
              <tr>
               <td colspan="2" style="width:651px"><span style="font-size:11px"><b>Cédula: </b>{{identificacion}}</span></td>
              </tr>
              <tr>
               <td colspan="2" style="width:651px"><span style="font-size:11px"><b>Provincia: </b>{{provincia}}</span></td>
              </tr>
              <tr>
               <td colspan="2" style="width:651px"><span style="font-size:11px"><b>Fecha de aplicación: </b>{{fecha}}</span></td>
              </tr>
              <tr>
               <td colspan="3" style="width:690px"><span style="font-size:11px"><b>Total de Ítems contestados:</b> {{total_contestados}}</span></td>
              </tr>
              <tr>
               <td colspan="3">
               <p><b>Total aciertos: </b>{{aciertos}}</p>
               </td>
              </tr>
              <tr>
               <td colspan="3" style="text-align:center">{{letras_4}}</td>
              </tr>
             </tbody>
            </table>
            
            <table border="0" cellpadding="1" cellspacing="1" style="height:110px; margin-top:30px; width:1000px">
             <tbody>
              <tr>
               <td>
               <p style="text-align:center">Ineval agradece su participación en la evaluación</p>
            
               <p style="text-align:center"><b>Juntos, ¡lo logramos!</b></p>
               </td>
              </tr>
              <tr>
               <td style="text-align:center">{{barras_300}}</td>
              </tr>
             </tbody>
            </table>
            
            <p> </p>
            
            <table border="0" cellpadding="1" cellspacing="1" style="height:73px; width:1000px">
             <tbody>
              <tr>
               <td>
               <p style="text-align:center">_______________________________________</p>
            
               <p style="text-align:center"><span style="font-size:11px"><b>{{identificacion}}</b></span></p>
            
               <p style="text-align:center"><span style="font-size:11px"><b>{{apellidos}} {{nombres}}</b></span></p>
               </td>
               <td>
               <p style="text-align:center">_______________________________________</p>
            
               <p style="text-align:center"><span style="font-size:11px"><b>Guía evaluador</b></span></p>
            
               <p style="text-align:center">.</p>
               </td>
              </tr>
             </tbody>
            </table>
            ',
            'dishonesty_results' => '1',
            'accesibility' => '<p>La sesión de evaluación finalizó</p>

            <p> </p>
            
            <p>En el Acuerdo de Confidencialidad se declaró conocer: <i>“</i><b><i>Que</i></b><i> si durante la evaluación digito la tecla “<b>Impr Pant</b>” o “<b>PrtSc</b>” u otros similares con esta función, el aplicativo se cerrará automáticamente, dándose por finalizada la encuesta.</i><i>”</i></p>
            
            <p>Agradecemos su comprensión.</p>
            ',
            'tolerancia_login' => '2700',
        ]);
    }
}
