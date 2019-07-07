<?php

include 'dbh.php';

$email=mysqli_real_escape_string($conn,$_POST['email']);

// checking if a user with this email exists
$sql="SELECT id FROM faculty_table WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	$facultyId=mysqli_real_escape_string($conn,$row['id']);

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
	// $to      = 'sharvai_spqr@yahoo.com';
	$to 	 =  $email;
	$subject = 'OTP from CAS';
	$message = 'This email consists of your OTP. Please use it to login to your CAS account. Once logged in, the OTP can no longer be used and we therefore advise you to change your password immediately. This is your OTP: '.$otp;
	$headers = 'From: sharvai@gmail.com' . "\r\n" .
	    'Reply-To: sharvai101@gmail.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);


	echo "success";
}
else
{
	echo "failure";
}

