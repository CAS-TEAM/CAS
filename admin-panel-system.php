<?php

include 'dbh.php';

$faculty_id=mysqli_real_escape_string($conn,$_POST['userId']);

if(isset($_POST['hod']))
{
	$hod=1;
}
else
{
	$hod=0;
}

if(isset($_POST['committee']))
{
	$committee=1;
}
else
{
	$committee=0;
}

if(isset($_POST['principal']))
{
	$principal=1;
}
else
{
	$principal=0;
}

if(isset($_POST['admin']))
{
	$admin=1;
}
else
{
	$admin=0;
}

// echo $hod.','.$committee.','.$principal.','.$admin;

$sql="UPDATE faculty_table SET hod='$hod',committee='$committee',principal='$principal',admin='$admin' WHERE id='$faculty_id'";
$result=mysqli_query($conn,$sql);

if(isset($_POST['department']))
{
	$department=mysqli_real_escape_string($conn,$_POST['department']);
	// echo $department;

	$sql="UPDATE faculty_table SET department='$department' WHERE id='$faculty_id'";
	$result=mysqli_query($conn,$sql);
}

if(isset($_POST['doj']))
{
	$doj=mysqli_real_escape_string($conn,$_POST['doj']);
	// echo $department;

	$sql="UPDATE faculty_table SET date_of_joining='$doj' WHERE id='$faculty_id'";
	$result=mysqli_query($conn,$sql);
}

echo "success";