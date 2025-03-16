<?php
// if(count(get_included_files()) ==1) exit("Direct access not permitted.");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if ( !isset( $_POST["Email-7"] ) ) {
    exit;
}
$email = $_POST["Email-7"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

$emailTrap = $_POST['emailn'];
if ( !empty( $emailTrap ) ) {
    exit;
}

$msg = 'Mail: ' . $email;

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.transylvaniasummit.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@transylvaniasummit.com';                     //SMTP username
    $mail->Password   = '_4-{H!puE8P^';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contact@transylvaniasummit.com', 'TransylvaniaSummit');
    $mail->addAddress('contact@transylvaniasummit.com', 'TransylvaniaSummit');     //Add a recipient
    $mail->addReplyTo($email, '');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

   
    //Content
    $mail->isHTML(true);
    $mail->Subject = 'New invite request';
    $mail->Body    = $msg;
    $mail->AltBody = $msg;

    $mail->send();
    header("Location: https://transylvaniasummit.com/thankyou.html");
    die();

    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
