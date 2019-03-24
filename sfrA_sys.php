<?php

session_start();

include 'dbh.php';

$year=mysqli_real_escape_string($conn,$_POST['year']);
$facultyId=mysqli_real_escape_string($conn,$_SESSION['id']);


$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$facultyId' AND year='$year'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO submitted_for_review_table (facultyId,year,partA) VALUES ('$facultyId','$year',1)";
	$result1=mysqli_query($conn,$sql1);
}
else
{

	$sql2="UPDATE submitted_for_review_table SET partA=1 WHERE facultyId='$facultyId' AND year='$year'";
	$result2=mysqli_query($conn,$sql2);
}

//making entry into summary table
$sql="SELECT id FROM summary_table WHERE year='$year' AND facultyId='$facultyId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sqlx="INSERT INTO summary_table (year, facultyId) VALUES ('$year', '$facultyId')";
	$resultx=mysqli_query($conn, $sqlx);
}

header("LOCATION: partA.php?id=".$facultyId."&year=".$year);