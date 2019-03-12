<?php

include 'dbh.php';

$otp=mysqli_real_escape_string($conn,$_POST['otp']);

$sql="SELECT facultyId FROM otp_table WHERE otp='$otp'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	$facultyId=mysqli_real_escape_string($conn,$row['facultyId']);

	//deleting the otp entry from the faculty table
	$sqlx="DELETE FROM otp_table WHERE facultyId='$facultyId'";
	$resultx=mysqli_query($conn,$sqlx);


	//fetching faculty name
	$sqlx="SELECT faculty_name FROM faculty_table WHERE id='$facultyId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);
	$faculty_name=$rowx['faculty_name'];

	session_start();

	//logging in the user
	$_SESSION['id']=$facultyId;
	$_SESSION['faculty_name']=$faculty_name;

	echo "usersettings.php#changepassword";
}
else
{
	echo "failure";
}