<?php

session_start();

include 'dbh.php';

//get data
$faculty_name=$_POST['faculty_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$date_of_joining=$_POST['date_of_joining'];

// echo $faculty_name.','.$email;

$department=$_POST['department'];
// echo $_POST['department'];



if(isset($_POST['hod']))
{
	$hod=1;
}
else
{
	$hod=0;
}

if(isset($_POST['principal']))
{
	$principal=1;
}
else
{
	$principal=0;
}

if(isset($_POST['committee']))
{
	$committee=1;
}
else
{
	$committee=0;
}

// echo $hod.','.$principal.','.$committee;

if($password==$cpassword)
{

	$sqle="SELECT email FROM faculty_table WHERE email='$email'";
	$resulte=mysqli_query($conn,$sqle);

	if(mysqli_num_rows($resulte)==0)
	{
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		// echo "Password matches";
		$sql="INSERT INTO faculty_table (faculty_name, email, password, date_of_joining, department, hod, committee, principal) VALUES ('$faculty_name','$email','$hashed_password','$date_of_joining','$department','$hod', '$committee', '$principal')";
	    $result=mysqli_query($conn, $sql);

		// echo "Successfully ADded new User";

		$_SESSION['id']=$conn->insert_id;

		$_SESSION['faculty_name']=$faculty_name;

		mkdir('users/'.$email, 0777, true);

		header("LOCATION: adminpanel.php");
	}
	else
	{
		header("LOCATION: index.php?error=already_exists");
	}
	
}
else
{
	header("LOCATION: index.php?error=password_not_matching");
}

