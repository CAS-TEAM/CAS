
<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$year=mysqli_real_escape_string($conn,$_POST['year']);

// echo "$userId";


$sql="SELECT id from partb_cat3_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat3_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);

	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}

if(isset($_POST['cat3_piii7_self_a']))
{
	$cat3_piii7_self_a=mysqli_real_escape_string($conn,$_POST['cat3_piii7_self_a']);
	$sql2="UPDATE partb_cat3_pi SET cat3_piii7_self_a='$cat3_piii7_self_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

if(isset($_POST['cat3_piii7_hod_a']))
{
	$cat3_piii7_hod_a=mysqli_real_escape_string($conn,$_POST['cat3_piii7_hod_a']);
	$sql2="UPDATE partb_cat3_pi SET cat3_piii7_hod_a='$cat3_piii7_hod_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

if(isset($_POST['cat3_piii7_committee_a']))
{
	$cat3_piii7_committee_a=mysqli_real_escape_string($conn,$_POST['cat3_piii7_committee_a']);
	$sql2="UPDATE partb_cat3_pi SET cat3_piii7_committee_a='$cat3_piii7_committee_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

echo "success";