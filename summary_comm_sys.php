<?php

session_start();

if(isset($_SESSION['id']))
{

	include 'dbh.php';

	$userId=mysqli_real_escape_string($conn,$_POST['userId']);
	$year=mysqli_real_escape_string($conn,$_POST['year']);

	// $sqle="SELECT email FROM faculty_table WHERE id='$userId'";
	// $resulte=mysqli_query($conn,$sqle);
	// $rowe=mysqli_fetch_assoc($resulte);
	// $email=mysqli_real_escape_string($conn,$rowe['email']);

	// $viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);
	$correct_parta=mysqli_real_escape_string($conn,$_POST['correct_parta']);
	$exaggerated_parta=mysqli_real_escape_string($conn,$_POST['exaggerated_parta']);
	$remarks_parta=mysqli_real_escape_string($conn,$_POST['remarks_parta']);
	$current_academicA=mysqli_real_escape_string($conn,$_POST['current_academicA']);
	$pi_academicA=mysqli_real_escape_string($conn,$_POST['pi_academicA']);
	$correct_partbi=mysqli_real_escape_string($conn,$_POST['correct_partbi']);
	$exaggerated_partbi=mysqli_real_escape_string($conn,$_POST['exaggerated_partbi']);
	$remarks_partbi=mysqli_real_escape_string($conn,$_POST['remarks_partbi']);
	$current_academicBI=mysqli_real_escape_string($conn,$_POST['current_academicBI']);
	$pi_academicBI=mysqli_real_escape_string($conn,$_POST['pi_academicBI']);
	$correct_partbii=mysqli_real_escape_string($conn,$_POST['correct_partbii']);
	$exaggerated_partbii=mysqli_real_escape_string($conn,$_POST['exaggerated_partbii']);
	$remarks_partbii=mysqli_real_escape_string($conn,$_POST['remarks_partbii']);
	$current_academicBII=mysqli_real_escape_string($conn,$_POST['current_academicBII']);
	$pi_academicBII=mysqli_real_escape_string($conn,$_POST['pi_academicBII']);
	$correct_partbiii=mysqli_real_escape_string($conn,$_POST['correct_partbiii']);
	$exaggerated_partbiii=mysqli_real_escape_string($conn,$_POST['exaggerated_partbiii']);
	$remarks_partbiii=mysqli_real_escape_string($conn,$_POST['remarks_partbiii']);
	$current_academicBIII=mysqli_real_escape_string($conn,$_POST['current_academicBIII']);
	$pi_academicBIII=mysqli_real_escape_string($conn,$_POST['pi_academicBIII']);
	$correct_partbiv=mysqli_real_escape_string($conn,$_POST['correct_partbiv']);
	$exaggerated_partbiv=mysqli_real_escape_string($conn,$_POST['exaggerated_partbiv']);
	$remarks_partbiv=mysqli_real_escape_string($conn,$_POST['remarks_partbiv']);
	$current_academicBIV=mysqli_real_escape_string($conn,$_POST['current_academicBIV']);
	$pi_academicBIV=mysqli_real_escape_string($conn,$_POST['pi_academicBIV']);
	$last_academicBIV_avg_comm=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avg_comm']);
	$pi_academicBIV_avg_comm=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_avg_comm']);
	$last_academicBIV_avgpi_comm=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgpi_comm']);
	$final_recomm=mysqli_real_escape_string($conn,$_POST['final_recomm']);

	$sql="INSERT INTO summary_comm_table (year, facultyId, correct_parta, exaggerated_parta, remarks_parta, current_academicA, pi_academicA, correct_partbi, exaggerated_partbi, remarks_partbi, current_academicBI, pi_academicBI, correct_partbii, exaggerated_partbii, remarks_partbii, current_academicBII, pi_academicBII, correct_partbiii, exaggerated_partbiii, remarks_partbiii, current_academicBIII, pi_academicBIII, correct_partbiv, exaggerated_partbiv, remarks_partbiv, current_academicBIV, pi_academicBIV, last_academicBIV_avg_comm, pi_academicBIV_avg_comm, last_academicBIV_avgpi_comm, final_recomm) VALUES ('$year', '$userId', '$correct_parta', '$exaggerated_parta', '$remarks_parta', '$current_academicA', '$pi_academicA', '$correct_partbi', '$exaggerated_partbi', '$remarks_partbi', '$current_academicBI', '$pi_academicBI', '$correct_partbii', '$exaggerated_partbii', '$remarks_partbii', '$current_academicBII', '$pi_academicBII', '$correct_partbiii', '$exaggerated_partbiii', '$remarks_partbiii', '$current_academicBIII', '$pi_academicBIII', '$correct_partbiv', '$exaggerated_partbiv', '$remarks_partbiv', '$current_academicBIV', '$pi_academicBIV', '$last_academicBIV_avg_comm', '$pi_academicBIV_avg_comm', '$last_academicBIV_avgpi_comm', '$final_recomm')";
	$result=mysqli_query($conn,$sql);

	header("LOCATION: summary.php?id=".$userId."&updated=1");

}