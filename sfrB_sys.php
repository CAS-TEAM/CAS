<?php

session_start();

include 'dbh.php';

$year=mysqli_real_escape_string($conn,$_POST['year']);
$facultyId=mysqli_real_escape_string($conn,$_SESSION['id']);


$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$facultyId' AND year='$year'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO submitted_for_review_table (facultyId,year,partB) VALUES ('$facultyId','$year',1)";
	$result1=mysqli_query($conn,$sql1);
}
else
{

	$sql2="UPDATE submitted_for_review_table SET partB=1 WHERE facultyId='$facultyId' AND year='$year'";
	$result2=mysqli_query($conn,$sql2);
}

header("LOCATION: partB.php?id=".$facultyId."&year=".$year);