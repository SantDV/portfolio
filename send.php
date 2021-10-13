<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 3;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vsantiago360@gmail.com';                     //SMTP username
    $mail->Password   = '$Asd35447359';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom('vsantiago360@gmail.com', 'santiago');
    $mail->addAddress('adsada@fakemail213.com', 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>
            innerHTML
        </script>';
            

die();
} catch (Exception $e) {
    echo '<script>
    alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}")
        </script>';
}

header('Location: index.html');


/*
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por:" . $name . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el:" . date('d/m/Y', time());

$para = 'santiagoviva90@gmail.com';
$asunto = 'Contacto via web';

mail($para, $asunto, utf8_decode($message), $header);



*/

?>