<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class InscripcionController extends Controller
{
    public function addInscripcion(Request $request)
    {
        if ($request->ajax()) {
            $deposito = 0.0;
            $deposito_invitados = 0.0;
            $inscripcion = new Inscripcion();

            $inscripcion->nombre = $request->input('nombre');
            $inscripcion->motoclub = $request->input('motoclub');
            $inscripcion->telefono_contacto = $request->input('telefonocontacto');
            $inscripcion->telefono_emergencia = $request->input('telefonoemergencia');
            $inscripcion->correo_electronico = $request->input('correo');
            $inscripcion->talla = $request->input('talla');
            $inscripcion->tipo_sangre = $request->input('tiposangre');
            $inscripcion->fecha_nac = $request->input('fechanac');

       
                 
            $deposito = $inscripcion->cantidad_deposito = $request->input('paquete');
            

            if ($request->has('invitado1')) {
                $inscripcion->invitado1 = $request->input('invitado1');
                $deposito_invitados += 2200;
            }

            if ($request->has('invitado2')) {
                $inscripcion->invitado2 = $request->input('invitado2');
                $deposito_invitados += 2200;
            }

            if ($request->has('invitado3')) {
                $inscripcion->invitado3 = $request->input('invitado3');
                $deposito_invitados += 2200;
            }

            if ($request->has('invitado4')) {
                $inscripcion->invitado4 = $request->input('invitado4');
                $deposito_invitados += 2200;
            }

            if ($request->has('invitado5')) {
                $inscripcion->invitado5 = $request->input('invitado5');
                $deposito_invitados += 2200;
            }

            $inscripcion->save();

            $id = $inscripcion->id;

              //mandar correo
              $mail = new PHPMailer(true);
              $mail->CharSet = "UTF-8";
  
  
              $deposito_piloto = number_format($deposito, 2);
  
              $deposito_total = ($deposito + $deposito_invitados);
  
              $mensaje = "<!DOCTYPE html>
            <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                    <link href='https://fonts.gstatic.com' rel='preconnect'>
                    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' rel='stylesheet'>
                    <link href='https://fonts.googleapis.com/css2?family=Anton&display=swap' rel='stylesheet'>
                
                    <title>Inscripción exitosa</title>
                
                    <style>
                        body{
                            margin: 0;
                            padding: 0;
                        }

                        p {
                            color: rgb(40, 40, 40);
                        }
                
                        ::-webkit-scrollbar {
                            width: 8px;
                        }
                
                        ::-webkit-scrollbar-track {
                            background: #fff;
                        }
                
                        ::-webkit-scrollbar-thumb {
                            background: #232b35;
                        }
                
                        ::-webkit-scrollbar-thumb:hover {
                            background: #1d242c;
                        }
                
                        .contenedor{
                            width: 100%;
                            overflow-x: hidden;
                        }
                
                        .header{
                            background-color: rgb(40, 40, 40);
                            color: #000000;
                        }
                
                        .header .header_contenido{
                            width: 100%;
                            padding-left: 5px;
                            height: 4.5rem;
                            display: flex;
                            align-items: center;
                        }
                
                        .header .header_contenido img {
                            display: block;
                            height: 3.5rem;
                            border: 0;
                            width: 180px;
                            max-width: 100%;
                            padding-left: 5px;
                            padding-top: 5px;
                        }
                
                        .contenido{
                            background-color: #FFFFFF;
                            color: #000000;
                            margin: auto;
                        }
                
                        .contenido_mensaje {
                            text-align: justify;
                            mso-table-lspace: 0pt;
                            mso-table-rspace: 0pt;
                            font-weight: 400;
                            vertical-align: top;
                            padding-top: 40px;
                            padding-bottom: 20px;
                            border-top: 0px;
                            border-right: 0px;
                            border-bottom: 0px;
                            border-left: 0px;
                        }
                
                        .contenido_mensaje_texto{
                            padding-bottom: 30px;
                            padding-left: 50px;
                            padding-right: 50px;
                            font-size: 12px;
                            font-family: Open Sans, Tahoma, Verdana, Segoe, sans-serif;
                            color: rgb(40, 40, 40);
                            line-height: 1.5;
                        }
                
                        .contenido_mensaje_texto p {
                            margin: 0; font-size: 14px;
                        }
                
                        .contenido_mensaje_texto p span{
                            font-size:18px;
                            font-weight: bold;
                        }
                
                        .contenido_mensaje_contenedorBoton{
                            padding-bottom: 30px;
                            padding-right: 10px;
                            padding-top: 8px;
                            text-align: left;
                        }
                        
                        a {
                            transition: .5s;
                        }
                
                        .contenido_mensaje hr{
                            height: 1px;
                            margin-left: 20px;
                            margin-right: 20px;
                            background-color: rgb(40, 40, 40);
                        }
                
                        .contenido_imagen{
                            padding: 5px 20px 20px 20px;
                            line-height: 10px;
                            display: flex;
                        }
                
                        .contenido_imagen img{
                            display: block;
                            height: auto;
                            border: 0;
                            width: 96px;
                            max-width: 100%;
                        }
                        .contenido_imagen_info{
                            padding-top: 5px;
                            padding-bottom: 20px;
                            margin-left: 15px;
                            font-size: 12px;
                            font-family: Ubuntu, Tahoma, Verdana, Segoe, sans-serif;
                            color: rgb(40, 40, 40);
                            line-height: 1.5;
                        }
                
                        .contenido_imagen_info p {
                            margin: 0; font-size: 14px; text-align: left;
                        }
                
                        .footer{
                            background-color: #404040;
                            margin: auto;
                        }
                        .footer_imagen {
                            text-align: left;
                            font-weight: 400;
                            vertical-align: top;
                            padding: 25px 0px 15px 30px;
                            line-height:10px;
                        }
                        .footer_imagen img {
                            display: block; height: auto; border: 0; width: 155px; max-width: 100%;
                        }
                
                        .footer_redes {
                            text-align: left;
                            font-weight: 400;
                            vertical-align: top;
                            padding: 0px 5px 15px 20px;
                        }
                
                        .footer_redes a {
                            text-decoration: none;
                            margin-left: 2px;
                        }
                
                        .footer_direccion {
                            padding: 15px 10px 25px 30px;
                            font-size: 12px;
                            font-family: Ubuntu, Tahoma, Verdana, Segoe, sans-serif;
                            color: #999999;
                            line-height: 1.2;
                        }
                    </style>
                </head>
                <body>
                    <div class='contenedor'>
                        <div class='header'>
                            <div class='header_contenido'>
                                <img src='https://endurofest.com.mx/img/logo.png' alt='Enduro' title='Enduro'>
                            </div>
                        </div>
                        <div class='contenido'>
                            <div class='contenido_mensaje'>
                                <div class='contenido_mensaje_texto'>
                                    <p><span style='color: #000000; font-family: Anton, sans-serif; text-transform: uppercase; font-style: italic; font-weight: bolder'>Inscripción exitosa</span></p>
                                    <br>
                                    <p><span style='color: #000000; font-family: Anton, sans-serif; text-transform: uppercase; font-style: italic; font-weight: bolder'>Folio: $id</span></p>
                                    <br>
                                    <p style='margin-bottom: 8px; color: rgb(40, 40, 40);'>
                                        ¡Hola, <b>$request->nombre</b>!, te has registrado exitosamente en el próximo <b>Enduro Fest 2023</b> que tendrá fecha los días <b>7, 8 y 9 de septiembre</b>.
                                    </p>
                                    <p style='color: rgb(40, 40, 40);'>A continuación te dejamos la información de las cuentas a la cual debes de hacer la transferencia por <b> $" .
                number_format($deposito_total, 2) .
                "</b>: <b>(FAVOR DE HACER LA TRANSFERENCIA CON LA CANTIDAD EXACTA TENIENDO EN CUENTA LOS CENTAVOS, ESTO PARA TENER UN MEJOR CONTROL DE LOS DEPÓSITOS)</b>. Puedes realizar la transferencia en la siguiente cuenta:</p><br>
                                    <p>Titular cuenta Hey Banco: <strong>JORGE ALBERTO HERRERA COSSAIN</strong></p>
                                    <p>Cuenta CLABE: <strong>058597000032316133</strong></p>
                                    <p>Número de cuenta: <strong>957387590016</strong></p>
                                    <p>TD para déposito en OXXO: <strong>4741 7429 0897 2188</strong></p>
                                    <br>
                                    <p><b>Piloto:</b> $request->nombre $$deposito_piloto</p>";
            if ($request->has('invitado1')) {
                $mensaje .= "<p><b>Invitado 1:</b> $request->invitado1 $2,200.00</p>";
            }
            if ($request->has('invitado2')) {
                $mensaje .= "<p><b>Invitado 2:</b> $request->invitado2 $2,200.00</p>";
            }
            if ($request->has('invitado3')) {
                $mensaje .= "<p><b>Invitado 3:</b> $request->invitado3 $2,200.00</p>";
            }
            if ($request->has('invitado4')) {
                $mensaje .= "<p><b>Invitado 4:</b> $request->invitado4 $2,200.00</p>";
            }
            if ($request->has('invitado5')) {
                $mensaje .= "<p><b>Invitado 5:</b> $request->invitado5 $2,200.00</p>";
            }
            $mensaje .= "<br><p style='color: rgb(40, 40, 40);' style='max-width: 80%'>Cuando hayas realizado el deposito, envíanos tu comprobante de pago respondiendo este correo o a:</p>
                                    <div class='contenido_mensaje_contenedorBoton'>
                                        <a style='font-size: 14px' title='endurofestmexico@gmail.com' href='mailto:endurofestmexico@gmail.com'>endurofestmexico@gmail.com</a>
                                    </div>
                                    <p style='color: rgb(40, 40, 40);'>Una vez que hayas realizado tu pago y revisemos tu comprobante de pago, te enviaremos otro correo electrónico confirmando tu asistencia.</p>
                                    <br>
                                    <p>¡Gracias por ser parte de esta aventura!</p>
                                    <p><b>Enduro Fest 2023.</b></p>
                                </div>
                                <div class='divider'>
                                    <hr>
                                </div>
                            </div>
                            <div class='contenido_imagen'>
                                <div>
                                    <img src='https://endurofest.com.mx/img/logo.png' alt='Enduro' title='Enduro'>
                                </div>
                                <div class='contenido_imagen_info'>
                                    <p><strong style='color: #000000;'>Enduro Fest 2023</strong></p>
                                    <p>Equipo</p>
                                    <p><a title='endurofestmexico@gmail.com' href='mailto:endurofestmexico@gmail.com'>endurofestmexico@gmail.com</a>
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='footer'>
                            <div class='footer_imagen'>
                                <img src='https://endurofest.com.mx/img/logo.png' alt='Enduro' title='Enduro'>
                            </div>
                            <div class='footer_redes'>
                                <a href='https://www.facebook.com/people/Enduro-Fest-MX/100090821874664/' target='_blank'>
                                    <img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/facebook@2x.png' width='32' height='32' alt='Facebook' title='Facebook'>
                                </a>
                                <a href='https://www.instagram.com/endurofestmx/' target='_blank'>
                                    <img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/instagram@2x.png' width='32' height='32' alt='Instagram' title='Instagram'>
                                </a>
                            </div>
                            <div class='footer_direccion'>
                                <p style='margin: 0; font-size: 12px; text-align: left; color: #999999;'>
                                    <strong>Enduro Fest 2023</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </body>
            </html>";

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = env('MAILER_HOST');                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = env('MAILER_USERNAME');                     //SMTP username
                $mail->Password   = env('MAILER_PASS');                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = env('MAILER_PORT');                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('endurofestmexico@gmail.com', 'Enduro Fest 2023');
                $mail->addAddress("$request->correo", "$request->nombre"); //Add a recipient

                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'INSCRIPCIÓN EXITOSA';
                $mail->Body = $mensaje;

                $mail->send();

                return response($inscripcion);
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            }
        }
    }

    public function index()
    {
        if (Auth::user()->privilegio == 'Estándar') {
            return redirect()->to('/admin/inscripciones');
        } else {
            return view('admin.show');
        }
    }

    public function getInscripciones()
    {
        $inscripciones = Inscripcion::all();

        return datatables()
            ->of($inscripciones)
            ->addColumn('btn', 'admin.buttons')
            ->rawColumns(['btn'])
            ->toJson();
    }

    public function editInscripcion(Request $request)
    {
        if ($request->ajax()) {
            $inscripcion = Inscripcion::find($request->id);

            // $inscripcion->nombre = $request->input('nombre');
            // $inscripcion->motoclub = $request->input('motoclub');
            // $inscripcion->telefono_contacto = $request->input('telefonocontacto');
            // $inscripcion->telefono_emergencia = $request->input('telefonoemergencia');
            // $inscripcion->correo_electronico = $request->input('correo');
            // $inscripcion->talla = $request->input('talla');
            // $inscripcion->tipo_sangre = $request->input('tiposangre');
            // $inscripcion->fecha_nac = $request->input('fechanac');
            $inscripcion->status_pago = $request->input('status_pago');

            $inscripcion->update();

            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = env('MAILER_HOST'); //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = env('MAILER_USERNAME'); //SMTP username
                $mail->Password = env('MAILER_PASS'); //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
                $mail->Port = env('MAILER_PORT'); //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('endurofestmexico@gmail.com', 'Enduro Fest 2023');
                $mail->addAddress("$request->correo", "$request->nombre"); //Add a recipient

                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'PAGO DE INSCRIPCIÓN RECIBIDO';
                $mail->Body = "<!DOCTYPE html>
                <html lang='es'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                        <link href='https://fonts.gstatic.com' rel='preconnect'>
                        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' rel='stylesheet'>
                        <link href='https://fonts.googleapis.com/css2?family=Anton&display=swap' rel='stylesheet'>
                    
                        <title>PAGO DE INSCRIPCIÓN RECIBIDO</title>
                    
                        <style>
                            body{
                                margin: 0;
                                padding: 0;
                            }
                    
                            ::-webkit-scrollbar {
                                width: 8px;
                            }
                    
                            ::-webkit-scrollbar-track {
                                background: #fff;
                            }
                    
                            ::-webkit-scrollbar-thumb {
                                background: #232b35;
                            }
                    
                            ::-webkit-scrollbar-thumb:hover {
                                background: #1d242c;
                            }
                    
                            .contenedor{
                                width: 100%;
                                overflow-x: hidden;
                            }
                    
                            .header{
                                background-color: rgb(40, 40, 40);
                                color: #000000;
                            }
                    
                            .header .header_contenido{
                                width: 100%;
                                padding-left: 5px;
                                height: 4.5rem;
                                display: flex;
                                align-items: center;
                            }
                    
                            .header .header_contenido img {
                                display: block;
                                border: 0;
                                max-width: 100%;
                                padding-left: 5px;
                                padding-top: 5px;
                            }
                    
                            .contenido{
                                background-color: #FFFFFF;
                                color: #000000;
                                margin: auto;
                            }
                    
                            .contenido_mensaje {
                                text-align: justify;
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                font-weight: 400;
                                vertical-align: top;
                                padding-top: 40px;
                                padding-bottom: 20px;
                                border-top: 0px;
                                border-right: 0px;
                                border-bottom: 0px;
                                border-left: 0px;
                            }
                    
                            .contenido_mensaje_texto{
                                padding-bottom: 30px;
                                padding-left: 50px;
                                padding-right: 50px;
                                font-size: 12px;
                                font-family: Ubuntu, Tahoma, Verdana, Segoe, sans-serif;
                                color: rgb(40, 40, 40);
                                line-height: 1.5;
                            }
                    
                            .contenido_mensaje_texto p {
                                margin: 0; font-size: 14px;
                            }
                    
                            .contenido_mensaje_texto p span{
                                font-size:18px;
                                font-weight: bold;
                            }
                    
                            .contenido_mensaje_contenedorBoton{
                                padding-bottom: 30px;
                                padding-right: 10px;
                                padding-top: 8px;
                                text-align: left;
                            }
                            
                            a {
                                transition: .5s;
                            }
                    
                            .contenido_mensaje hr{
                                height: 1px;
                                margin-left: 20px;
                                margin-right: 20px;
                                background-color: rgb(40, 40, 40);
                            }
                    
                            .contenido_imagen{
                                padding: 5px 20px 20px 20px;
                                line-height: 10px;
                                display: flex;
                            }
                    
                            .contenido_imagen img{
                                display: block;
                                height: auto;
                                border: 0;
                                width: 96px;
                                max-width: 100%;
                            }
                            .contenido_imagen_info{
                                padding-top: 5px;
                                padding-bottom: 20px;
                                margin-left: 15px;
                                font-size: 12px;
                                font-family: Ubuntu, Tahoma, Verdana, Segoe, sans-serif;
                                color: rgb(40, 40, 40);
                                line-height: 1.5;
                            }
                    
                            .contenido_imagen_info p {
                                margin: 0; font-size: 14px; text-align: left;
                            }
                    
                            .footer{
                                background-color: #404040;
                                margin: auto;
                            }
                            .footer_imagen {
                                text-align: left;
                                font-weight: 400;
                                vertical-align: top;
                                padding: 25px 0px 15px 30px;
                                line-height:10px;
                            }
                            .footer_imagen img {
                                display: block; height: auto; border: 0; width: 155px; max-width: 100%;
                            }
                    
                            .footer_redes {
                                text-align: left;
                                font-weight: 400;
                                vertical-align: top;
                                padding: 0px 5px 15px 20px;
                            }
                    
                            .footer_redes a {
                                text-decoration: none;
                                margin-left: 2px;
                            }
                    
                            .footer_direccion {
                                padding: 15px 10px 25px 30px;
                                font-size: 12px;
                                font-family: Ubuntu, Tahoma, Verdana, Segoe, sans-serif;
                                color: #999999;
                                line-height: 1.2;
                            }
                        </style>
                    </head>
                    <body>
                        <div class='contenedor'>
                            <div class='header'>
                                <div class='header_contenido'>
                                    <img src='https://endurofest.com.mx/img/logo.png' alt='Enduro' title='Enduro'>
                                </div>
                            </div>
                            <div class='contenido'>
                                <div class='contenido_mensaje'>
                                    <div class='contenido_mensaje_texto'>
                                        <p><span style='color: #000000; font-family: Anton, sans-serif; text-transform: uppercase; font-style: italic; font-weight: bolder'>PAGO DE INSCRIPCIÓN RECIBIDA</span></p>
                                        <br>
                                        <p style='margin-bottom: 8px; color: rgb(40, 40, 40);'>
                                            ¡Hola, <b>$request->nombre</b>!, hemos recibido tu pago de inscripción del próximo <b>Enduro Fest 2023</b>.
                                        </p>
                                        <p>¡Gracias por ser parte de esta aventura!</p>
                                        <p><b>Enduro Fest 2023.</b></p>
                                    </div>
                                    <div class='divider'>
                                        <hr>
                                    </div>
                                </div>
                                <div class='contenido_imagen'>
                                    <div>
                                        <img src='https://endurofest.com.mx/img/logo.png' alt='Enduro' title='Enduro'>
                                    </div>
                                    <div class='contenido_imagen_info'>
                                        <p><strong style='color: #000000;'>Enduro Fest 2023</strong></p>
                                        <p>Equipo</p>
                                        <p><a title='endurofestmexico@gmail.com' href='mailto:endurofestmexico@gmail.com'>endurofestmexico@gmail.com</a>
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class='footer'>
                                <div class='footer_imagen'>
                                    <img src='https://endurofest.com.mx/img/logo.png' alt='Enduro' title='Enduro'>
                                </div>
                                <div class='footer_redes'>
                                    <a href='https://www.facebook.com/people/Enduro-Fest-MX/100090821874664/' target='_blank'>
                                        <img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/facebook@2x.png' width='32' height='32' alt='Facebook' title='Facebook'>
                                    </a>
                                    <a href='https://www.instagram.com/endurofestmx/' target='_blank'>
                                        <img src='https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/instagram@2x.png' width='32' height='32' alt='Instagram' title='Instagram'>
                                    </a>
                                </div>
                                <div class='footer_direccion'>
                                    <p style='margin: 0; font-size: 12px; text-align: left;'>
                                        <strong>Enduro Fest 2023</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </body>
                </html>";

                $mail->send();

                return response($inscripcion);
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            return response($inscripcion);
        }
    }

    public function deleteInscripcion(Request $request)
    {
        if ($request->ajax()) {
            Inscripcion::destroy($request->id);
        }
    }
}
