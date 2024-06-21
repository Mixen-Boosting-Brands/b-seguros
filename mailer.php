<?php
    /**
     * PHPMailer multiple files upload and send
     */

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';
    require './PHPMailer/Exception.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    //Server settings
    //Mailjet User: bsegurosmailjet@gmail.com
    //Mailjet Password: bgDThZr32gz7McR8bcst.
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'in-v3.mailjet.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '1091dd18dcc70171746ca17feb22c4c6';                     //SMTP username
    $mail->Password   = '835a71ea79dc604cb2b7cf35dd078b19';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;
    // $mail->SMTPDebug = 1;

    if(isset($_POST['nombre']) {
        $name = strip_tags(trim($_POST["nombre"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $lastName = trim($_POST["apellido"]);
        $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["telefono"]);
        $insuranceType = trim($_POST["tipo-de-seguro"]);

        try {
            //Recipients
            $mail->setFrom('golivas@b-seguros.com.mx', 'Correo B-Seguros');
            $mail->addAddress('ynavarro@b-seguros.com.mx');     //Add a recipient
            // $mail->addAddress('luis.pando@mixen.mx');     //Add a recipient
            // $mail->addAddress('');     //Add extra recipient
            $mail->addReplyTo($email, 'Me interesa obtener información');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nuevo mensaje desde el sitio de B-Seguros';
            $mail->Body    = 'Nombre completo: ' . $name . ' ' . $lastName . '<br>Correo electrónico: ' . $email  .'<br>Teléfono: ' . $phone . '<br>Tipo de seguro:<br>' . $insuranceType . '<br><br>Este mensaje fue enviado a través del formulario de contacto del sitio web de B-Seguros.';

            $mail->send();
            echo 'Gracias por contactarnos, nos comunicaremos contigo a la brevedad.';
        } catch (Exception $e) {
            echo 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>
