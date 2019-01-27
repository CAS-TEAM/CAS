<?php

session_start();

if(isset($_SESSION['id']))
{

	include 'dbh.php';

	$userId=mysqli_real_escape_string($conn,$_POST['userId']);

	$sqle="SELECT email FROM faculty_table WHERE id='$userId'";
	$resulte=mysqli_query($conn,$sqle);
	$rowe=mysqli_fetch_assoc($resulte);
	$email=mysqli_real_escape_string($conn,$rowe['email']);

	// $viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);
	$year=mysqli_real_escape_string($conn,$_POST['year']);

	$last_academicA_last=mysqli_real_escape_string($conn,$_POST['last_academicA_last']);
	$pi_academic_last=mysqli_real_escape_string($conn,$_POST['pi_academic_last']);
	$current_academicA_current=mysqli_real_escape_string($conn,$_POST['current_academicA_current']);
	$pi_academicA_current=mysqli_real_escape_string($conn,$_POST['pi_academicA_current']);
	$last_academicBI_last=mysqli_real_escape_string($conn,$_POST['last_academicBI_last']);
	$pi_academicBI_last=mysqli_real_escape_string($conn,$_POST['pi_academicBI_last']);
	$current_academicBI_current=mysqli_real_escape_string($conn,$_POST['current_academicBI_current']);
	$pi_academicBI_current=mysqli_real_escape_string($conn,$_POST['pi_academicBI_current']);
	$last_academicBII_last=mysqli_real_escape_string($conn,$_POST['last_academicBII_last']);
	$pi_academicBII_last=mysqli_real_escape_string($conn,$_POST['pi_academicBII_last']);
	$current_academicBII_current=mysqli_real_escape_string($conn,$_POST['current_academicBII_current']);
	$pi_academicBII_current=mysqli_real_escape_string($conn,$_POST['pi_academicBII_current']);
	$last_academicBIII_last=mysqli_real_escape_string($conn,$_POST['last_academicBIII_last']);
	$pi_academicBIII_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIII_last']);
	$current_academicBIII_current=mysqli_real_escape_string($conn,$_POST['current_academicBIII_current']);
	$pi_academicBIII_current=mysqli_real_escape_string($conn,$_POST['pi_academicBIII_current']);
	$last_academicBIV_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_last']);
	$pi_academicBIV_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_last']);
	$current_academicBIV_current=mysqli_real_escape_string($conn,$_POST['current_academicBIV_current']);
	$pi_academicBIV_current=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_current']);
	$last_academicBIV_avgA_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgA_last']);
	$pi_academicBIV_avgA_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_avgA_last']);
	$last_academicBIV_avgB_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgB_last']);
	$pi_academicBIV_avgB_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_avgB_last']);
	$last_academicBIV_avgpi_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgpi_last']);

	$ecs=$_POST['ecs'];
	// $papers=$_POST['papers'];

	// echo $last_academicA_last;

	$sql="INSERT INTO summary_table (year, facultyId, last_academicA_last, pi_academic_last, current_academicA_current, pi_academicA_current, last_academicBI_last, pi_academicBI_last, current_academicBI_current, pi_academicBI_current, last_academicBII_last, pi_academicBII_last, current_academicBII_current, pi_academicBII_current, last_academicBIII_last, pi_academicBIII_last, current_academicBIII_current, pi_academicBIII_current, last_academicBIV_last, pi_academicBIV_last, current_academicBIV_current, pi_academicBIV_current, last_academicBIV_avgA_last, pi_academicBIV_avgA_last, last_academicBIV_avgB_last, pi_academicBIV_avgB_last, last_academicBIV_avgpi_last) VALUES ('$year','$userId','$last_academicA_last', '$pi_academic_last', '$current_academicA_current', '$pi_academicA_current', '$last_academicBI_last', '$pi_academicBI_last', '$current_academicBI_current', '$pi_academicBI_current', '$last_academicBII_last', '$pi_academicBII_last', '$current_academicBII_current', '$pi_academicBII_current', '$last_academicBIII_last', '$pi_academicBIII_last', '$current_academicBIII_current', '$pi_academicBIII_current', '$last_academicBIV_last', '$pi_academicBIV_last', '$current_academicBIV_current', '$pi_academicBIV_current', '$last_academicBIV_avgA_last', '$pi_academicBIV_avgA_last', '$last_academicBIV_avgB_last', '$pi_academicBIV_avgB_last', '$last_academicBIV_avgpi_last')";
	$result=mysqli_query($conn,$sql);

	$formId=$conn->insert_id;

	// echo $formId;

	$total = count($_FILES['papers']['name']);


	for($l=0;$l<$total;$l++)
	{		

		$tmpFilePath = $_FILES['papers']['tmp_name'][$l];
		// echo "temp->".$tmpFilePath;
		if ($tmpFilePath != ""){
		    //Setup our new file path
		    $dest = "users/".$email. "/".$_FILES['papers']['name'][$l];

			echo '<br>'.$ecs[$l].','.$dest;

			if(move_uploaded_file($tmpFilePath, $dest)) {
				$sql3="INSERT INTO summary_hasr (formId, ecs, papers) VALUES ('$formId','$ecs[$l]', '$dest')";
				$result3=mysqli_query($conn,$sql3);		
			}			
		}
		else
		{
			$sql3="INSERT INTO summary_hasr (formId, ecs, papers) VALUES ('$formId','$ecs[$l]', 'NAN')";
			$result3=mysqli_query($conn,$sql3);	
		}
	}

	header("LOCATION: summary.php?id=".$userId."&year=".$year);

}
else
{
	header("LOCATION: index.php");
}



