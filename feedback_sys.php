<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$ms=false;

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'cassaf19@gmail.com';                     // SMTP username
    $mail->Password   = 'Cas#saf#';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    //$mail->Port       = 25;
    $mail->Port       = 587;                                    
// TCP port to connect to

    //Recipients
    $mail->setFrom('cassaf19@gmail.com', 'CAS & SAF');
    $mail->addAddress('cassaf19@gmail.com', 'CAS & SAF');     // Add a recipient
    $mail->addReplyTo($email, $name);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Feedback from '.$name;
    $mail->Body    = 'From - '.$name.'('.$email.')('.$phone.')<br><br> Message - '.$message;
    $mail->AltBody = 'From - '.$name.'('.$email.') Message - '.$message;

    $mail->send();
    echo 'Message has been sent';
    $ms=true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $ms=false;
}

//header('LOCATION: feedback.php?success='.$ms);
if($ms==1)
{
	echo "<script>window.location.assign('feedback.php?success=1')</script>";
}
else
{
	echo "<script>window.location.assign('feedback.php?success=0')</script>";

}