<?php

session_start();

include 'dbh.php';

$year=mysqli_real_escape_string($conn,$_POST['year']);
$form=mysqli_real_escape_string($conn,$_POST['form']);
$facultyId=mysqli_real_escape_string($conn,$_SESSION['id']);

echo $year.','.$form;

if($form=='A' || $form=='B')
{
	$sql="INSERT INTO request_edit_access (year, facultyId, form) VALUES ('$year', '$facultyId', '$form')";
	$result=mysqli_query($conn,$sql);
}

if($form=='A')
{
	header("LOCATION: partA.php?id=".$facultyId."&year=".$year);
}
else
{
	header("LOCATION: partB.php?id=".$facultyId."&year=".$year);
}