<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

//get data
$faculty_name=mysqli_real_escape_string($conn,$_POST['faculty_name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
// $date_of_joining=mysqli_real_escape_string($conn,$_POST['date_of_joining']);
// $department=mysqli_real_escape_string($conn,$_POST['department']);
$mobileno=mysqli_real_escape_string($conn,$_POST['mobileno']);

$sqle="SELECT email FROM faculty_table WHERE email='$email' AND id <> '$userId'";
$resulte=mysqli_query($conn,$sqle);

if(mysqli_num_rows($resulte)==0)
{

	$sql="UPDATE faculty_table SET faculty_name='$faculty_name', mobileno='$mobileno' WHERE id='$userId'";
	$result=mysqli_query($conn,$sql);

	header("LOCATION: usersettings.php?result=general");

}
else
{
	header("LOCATION: usersettings.php?result=gerror");
}