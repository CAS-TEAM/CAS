<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqle="SELECT email FROM faculty_table WHERE id='$userId'";
$resulte=mysqli_query($conn,$sqle);
$rowe=mysqli_fetch_assoc($resulte);
$email=mysqli_real_escape_string($conn,$rowe['email']);

$filename=$_FILES['pic']['name'];
$filesize=$_FILES['pic']['size'];

// echo $filename.",".$filesize;

$file_ext=pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION);

$dest="users/".$email."/profilepic.".$file_ext;

// echo '<br>'.$dest;

if(move_uploaded_file($_FILES['pic']['tmp_name'],$dest))
{

	$sql="UPDATE faculty_table SET profilePicLocation='$dest' WHERE id='$userId'";
	$result=mysqli_query($conn,$sql);

	header("LOCATION: usersettings.php?result=profilepic");
}
else
{
	header("LOCATION: usersettings.php?result=ierror");
}
