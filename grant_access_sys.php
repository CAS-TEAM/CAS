<?php

session_start();

include 'dbh.php';

$counter=mysqli_real_escape_string($conn,$_POST['counter']);
$year=mysqli_real_escape_string($conn,$_POST['year']);
$form=mysqli_real_escape_string($conn,$_POST['form']);
$facultyId=mysqli_real_escape_string($conn,$_POST['facultyId']);

// echo $year.','.$form.','.$facultyId;

if($form=='A')
{
	//set entry to 0 in subit_for_review table if present
	$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$facultyId' AND year='$year'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)!=0)
	{
		$sql2="UPDATE submitted_for_review_table SET partA=0 WHERE facultyId='$facultyId' AND year='$year'";
		$result2=mysqli_query($conn,$sql2);

		//remove entry from summary table
		$sqlxx="SELECT id FROM summary_table WHERE year='$year' AND facultyId='$facultyId'";
		$resultxx=mysqli_query($conn,$sqlxx);
		if(mysqli_num_rows($resultxx)==0)
		{
			$sqlx="DELETE FROM summary_table WHERE year='$year' AND facultyId='$facultyId'";
			$resultx=mysqli_query($conn, $sqlx);
		}
	}

	//set entry to 0 in self appraisal if present
	$sql="SELECT id FROM submitted_for_self_appraisal WHERE facultyId='$facultyId' AND year='$year'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)!=0)
	{
		$sql2="UPDATE submitted_for_self_appraisal SET partA=0 WHERE facultyId='$facultyId' AND year='$year'";
		$result2=mysqli_query($conn,$sql2);
	}
}
else if($form=='B')
{
	//set entry to 0 in subit_for_review table if present
	$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$facultyId' AND year='$year'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)!=0)
	{
		$sql2="UPDATE submitted_for_review_table SET partB=0 WHERE facultyId='$facultyId' AND year='$year'";
		$result2=mysqli_query($conn,$sql2);

		//remove entry from summary table
		$sqlxx="SELECT id FROM summary_table WHERE year='$year' AND facultyId='$facultyId'";
		$resultxx=mysqli_query($conn,$sqlxx);
		if(mysqli_num_rows($resultxx)==0)
		{
			$sqlx="DELETE FROM summary_table WHERE year='$year' AND facultyId='$facultyId'";
			$resultx=mysqli_query($conn, $sqlx);
		}
	}

	//set entry to 0 in self appraisal if present
	$sql="SELECT id FROM submitted_for_self_appraisal WHERE facultyId='$facultyId' AND year='$year'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)!=0)
	{
		$sql2="UPDATE submitted_for_self_appraisal SET partB=0 WHERE facultyId='$facultyId' AND year='$year'";
		$result2=mysqli_query($conn,$sql2);
	}
}

$sql3="DELETE FROM request_edit_access WHERE facultyId='$facultyId' AND year='$year' AND form='$form'";
$result3=mysqli_query($conn,$sql3);

echo $counter;