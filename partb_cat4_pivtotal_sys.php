
<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_POST['userId']);

$year=mysqli_real_escape_string($conn,$_POST['year']);

// echo "$userId";
$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);
$sqlx="SELECT hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];


$sql="SELECT id from partb_cat4_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat4_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);

	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}

if(isset($_POST['cat4_pivtotal_self_a']) && $viewerId==$userId)
{
	$cat4_pivtotal_self_a=mysqli_real_escape_string($conn,$_POST['cat4_pivtotal_self_a']);
	$sql2="UPDATE partb_cat4_pi SET cat4_pivtotal_self_a='$cat4_pivtotal_self_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

if(isset($_POST['cat4_pivtotal_hod_a']) && $_POST['cat4_pivtotal_hod_a']!=-1 && $hod==1)
{
	$cat4_pivtotal_hod_a=mysqli_real_escape_string($conn,$_POST['cat4_pivtotal_hod_a']);
	$sql2="UPDATE partb_cat4_pi SET cat4_pivtotal_hod_a='$cat4_pivtotal_hod_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

if(isset($_POST['cat4_pivtotal_committee_a']) && $_POST['cat4_pivtotal_committee_a']!=-1 && $committee==1)
{
	$cat4_pivtotal_committee_a=mysqli_real_escape_string($conn,$_POST['cat4_pivtotal_committee_a']);
	$sql2="UPDATE partb_cat4_pi SET cat4_pivtotal_committee_a='$cat4_pivtotal_committee_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

echo "success";