<?php

session_start();

include 'dbh.php';

$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// echo $email.','.$password;

$sql="SELECT id,faculty_name,password FROM faculty_table WHERE email='$email'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];

	$faculty_name=$row['faculty_name'];
	$password1=$row['password'];

	if(password_verify($password, $password1)) 
	{
       $_SESSION['id']=$id;
	   $_SESSION['faculty_name']=$faculty_name;

		header("LOCATION: userprofile.php");
    } 
    else
    {
	header("LOCATION: login.php?error=notfound");
    }
}
else
{
	header("LOCATION: login.php?error=notfound");
}