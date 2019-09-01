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

if(isset($_SESSION['id']))
{

	include 'dbh.php';

	$userId=mysqli_real_escape_string($conn,$_POST['userId']);
	$year=mysqli_real_escape_string($conn,$_POST['year']);

	$sqle="SELECT email FROM faculty_table WHERE id='$userId'";
	$resulte=mysqli_query($conn,$sqle);
	$rowe=mysqli_fetch_assoc($resulte);
	$email=mysqli_real_escape_string($conn,$rowe['email']);

	// $viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);
	// $correct_parta=mysqli_real_escape_string($conn,$_POST['correct_parta']);
	// $exaggerated_parta=mysqli_real_escape_string($conn,$_POST['exaggerated_parta']);
	// $remarks_parta=mysqli_real_escape_string($conn,$_POST['remarks_parta']);
	// $current_academicA=mysqli_real_escape_string($conn,$_POST['current_academicA']);
	// $pi_academicA=mysqli_real_escape_string($conn,$_POST['pi_academicA']);
	// $correct_partbi=mysqli_real_escape_string($conn,$_POST['correct_partbi']);
	// $exaggerated_partbi=mysqli_real_escape_string($conn,$_POST['exaggerated_partbi']);
	// $remarks_partbi=mysqli_real_escape_string($conn,$_POST['remarks_partbi']);
	// $current_academicBI=mysqli_real_escape_string($conn,$_POST['current_academicBI']);
	// $pi_academicBI=mysqli_real_escape_string($conn,$_POST['pi_academicBI']);
	// $correct_partbii=mysqli_real_escape_string($conn,$_POST['correct_partbii']);
	// $exaggerated_partbii=mysqli_real_escape_string($conn,$_POST['exaggerated_partbii']);
	// $remarks_partbii=mysqli_real_escape_string($conn,$_POST['remarks_partbii']);
	// $current_academicBII=mysqli_real_escape_string($conn,$_POST['current_academicBII']);
	// $pi_academicBII=mysqli_real_escape_string($conn,$_POST['pi_academicBII']);
	// $correct_partbiii=mysqli_real_escape_string($conn,$_POST['correct_partbiii']);
	// $exaggerated_partbiii=mysqli_real_escape_string($conn,$_POST['exaggerated_partbiii']);
	// $remarks_partbiii=mysqli_real_escape_string($conn,$_POST['remarks_partbiii']);
	// $current_academicBIII=mysqli_real_escape_string($conn,$_POST['current_academicBIII']);
	// $pi_academicBIII=mysqli_real_escape_string($conn,$_POST['pi_academicBIII']);
	// $correct_partbiv=mysqli_real_escape_string($conn,$_POST['correct_partbiv']);
	// $exaggerated_partbiv=mysqli_real_escape_string($conn,$_POST['exaggerated_partbiv']);
	// $remarks_partbiv=mysqli_real_escape_string($conn,$_POST['remarks_partbiv']);
	// $current_academicBIV=mysqli_real_escape_string($conn,$_POST['current_academicBIV']);
	// $pi_academicBIV=mysqli_real_escape_string($conn,$_POST['pi_academicBIV']);
	// $last_academicBIV_avg_comm=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avg_comm']);
	// $pi_academicBIV_avg_comm=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_avg_comm']);
	// $last_academicBIV_avgpi_comm=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgpi_comm']);
	// $final_recomm=mysqli_real_escape_string($conn,$_POST['final_recomm']);

	// $sql="INSERT INTO summary_comm_table (year, facultyId, correct_parta, exaggerated_parta, remarks_parta, current_academicA, pi_academicA, correct_partbi, exaggerated_partbi, remarks_partbi, current_academicBI, pi_academicBI, correct_partbii, exaggerated_partbii, remarks_partbii, current_academicBII, pi_academicBII, correct_partbiii, exaggerated_partbiii, remarks_partbiii, current_academicBIII, pi_academicBIII, correct_partbiv, exaggerated_partbiv, remarks_partbiv, current_academicBIV, pi_academicBIV, last_academicBIV_avg_comm, pi_academicBIV_avg_comm, last_academicBIV_avgpi_comm, final_recomm) VALUES ('$year', '$userId', '$correct_parta', '$exaggerated_parta', '$remarks_parta', '$current_academicA', '$pi_academicA', '$correct_partbi', '$exaggerated_partbi', '$remarks_partbi', '$current_academicBI', '$pi_academicBI', '$correct_partbii', '$exaggerated_partbii', '$remarks_partbii', '$current_academicBII', '$pi_academicBII', '$correct_partbiii', '$exaggerated_partbiii', '$remarks_partbiii', '$current_academicBIII', '$pi_academicBIII', '$correct_partbiv', '$exaggerated_partbiv', '$remarks_partbiv', '$current_academicBIV', '$pi_academicBIV', '$last_academicBIV_avg_comm', '$pi_academicBIV_avg_comm', '$last_academicBIV_avgpi_comm', '$final_recomm')";
	// $result=mysqli_query($conn,$sql);

	// $committeeremarksA= mysqli_real_escape_string($conn, $_POST['committeeremarksA']);
	// $committeeremarksBcat1= mysqli_real_escape_string($conn, $_POST['committeeremarksBcat1']);
	// $committeeremarksBcat2= mysqli_real_escape_string($conn, $_POST['committeeremarksBcat2']);
	// $committeeremarksBcat3= mysqli_real_escape_string($conn, $_POST['committeeremarksBcat3']);
	// $committeeremarksBcat4= mysqli_real_escape_string($conn, $_POST['committeeremarksBcat4']);
	// $committeeremarksavgpi= mysqli_real_escape_string($conn, $_POST['committeeremarksavgpi']);
	// $committeeremarkscum= mysqli_real_escape_string($conn, $_POST['committeeremarkscum']);
	$final_recomm= mysqli_real_escape_string($conn, $_POST['final_recomm']);

	// echo $committeeremarksA;
	// echo $committeeremarksBcat1;
	// echo $committeeremarksBcat2;
	// echo $committeeremarksBcat3;
	// echo $committeeremarksBcat4;
	// echo $committeeremarksavgpi;
	// echo $committeeremarkscum;

	// $sql="UPDATE summary_table SET committeeremarksA='$committeeremarksA', committeeremarksBcat1='$committeeremarksBcat1', committeeremarksBcat2='$committeeremarksBcat2', committeeremarksBcat3='$committeeremarksBcat3', committeeremarksBcat4='$committeeremarksBcat4', committeeremarksavgpi='$committeeremarksavgpi', committeeremarkscum='$committeeremarkscum', final_recomm='$final_recomm' WHERE year='$year' AND facultyId='$userId'";
	$sql="UPDATE summary_table SET final_recomm='$final_recomm' WHERE year='$year' AND facultyId='$userId'";
	$result=mysqli_query($conn, $sql);

	$pyear=$year-1;

	$cas_approved=mysqli_real_escape_string($conn,$_POST['casapproval']);
	$sqlx="INSERT INTO cas_approval_table (facultyId, cas_approved, currentyear, previousyear) VALUES ('$userId', '$cas_approved', '$year', '$pyear')";
	$resultx=mysqli_query($conn,$sqlx);

	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'cassaf19@gmail.com';                     // SMTP username
	    $mail->Password   = 'Cas#saf#';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
$mail->Port       = 587;	    
// $mail->Port       = 25;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('cassaf19@gmail.com', 'CAS & SAF');
	    $mail->addAddress($email, 'User');     // Add a recipient
	    $mail->addReplyTo('cassaf19@gmail.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    // Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'CAS Application status';
	    $mail->Body    = 'Your Application for CAS has been '.$cas_approved;
	    $mail->AltBody = 'Your Application for CAS has been '.$cas_approved;

	    $mail->send();
	    echo 'Message has been sent';
	    $ms=true;
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    $ms=false;
	}

	// $to      = 'sharvai_spqr@yahoo.com';
	// $to 	 =  $email;
	// $subject = 'CAS Application status';
	// $message = 'Your Application for CAS has been '.$cas_approved;
	// $headers = 'From: cassaf19@gmail.com' . "\r\n" .
	//     'Reply-To: cassaf19@gmail.com' . "\r\n" .
	//     'X-Mailer: PHP/' . phpversion();

	// mail($to, $subject, $message, $headers);

	echo "summary.php?id=".$userId."&year=".$year."&updated=1";

}