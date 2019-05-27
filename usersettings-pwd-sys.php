<?php

session_start();

include 'dbh.php';
$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

//get data
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$sql="UPDATE faculty_table SET password='$hashed_password' WHERE id='$userId'";
	$result=mysqli_query($conn,$sql);

	header("LOCATION: usersettings.php?result=password");
}
else
{
	header("LOCATION: usersettings.php?result=perror");
}