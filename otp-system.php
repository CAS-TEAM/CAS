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

include 'dbh.php';

$email=mysqli_real_escape_string($conn,$_POST['email']);

// checking if a user with this email exists
$sql="SELECT id,faculty_name FROM faculty_table WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	$facultyId=mysqli_real_escape_string($conn,$row['id']);
	$faculty_name=mysqli_real_escape_string($conn,$row['faculty_name']);

	//now deleting all otp's that might have been sent to this user previously
	$sql="DELETE FROM otp_table WHERE facultyEmail='$email'";
	$result=mysqli_query($conn,$sql);

	// infinite loop to generate an OTP that doesn't already exist in the table
	while(true)
	{
		$otp=rand(100000, 999999);//OTP generate
		$sql="SELECT id FROM otp_table WHERE otp='$otp'";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)==0)
		{
			break;
		}
	}

	//otp obtained .. storing it to the database
	$sql="INSERT INTO otp_table (facultyId, facultyEmail, otp) VALUES ('$facultyId', '$email', '$otp')";
	$result=mysqli_query($conn, $sql);

	//now mailing the otp to the respective user
	//$to 	 =  $email;
	//$subject = 'OTP from CAS';
	//$message = 'This email consists of your OTP. Please use it to login to your CAS account. Once logged in, the OTP can no longer be used and we therefore advise you to change your password immediately. This is your OTP: '.$otp;
	$headers = 'From: cassaf19@gmail.com' . "\r\n" .
	    'Reply-To: cassaf19@gmail.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	//mail($to, $subject, $message, $headers);

	try {
	    //Server settings
	    $mail->SMTPDebug = 4;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'cassaf19@gmail.com';                     // SMTP username
	    $mail->Password   = 'Cas#saf#';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;
         //$mail->Port       = 25;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('cassaf19@gmail.com', 'CAS & SAF');
	    $mail->addAddress($email, $faculty_name);     // Add a recipient
	    $mail->addReplyTo('cassaf19@gmail.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    // Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'OTP from CAS';
	    $mail->Body    = 'This email consists of your OTP. Please use it to login to your CAS account. Once logged in, the OTP can no longer be used and we therefore advise you to change your password immediately. This is your OTP: '.$otp;
	    $mail->AltBody = 'This email consists of your OTP. Please use it to login to your CAS account. Once logged in, the OTP can no longer be used and we therefore advise you to change your password immediately. This is your OTP: '.$otp;

	    $mail->send();
	    echo 'Message has been sent';
	    $ms=true;
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    $ms=false;
	}


	echo "success";
}
else
{
	echo "failure";
}

