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


$sql="SELECT id from part_a_gpi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO part_a_gpi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);

	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}

if(isset($_POST['parta_gpi_pi_self_a']) && $viewerId==$userId)
{
	$parta_gpi_pi_self_a=mysqli_real_escape_string($conn,$_POST['parta_gpi_pi_self_a']);
	$sql2="UPDATE part_a_gpi SET parta_gpi_pi_self_a='$parta_gpi_pi_self_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

if(isset($_POST['parta_gpi_pi_hod_a']) && $_POST['parta_gpi_pi_hod_a']!=-1 && $hod==1)
{
	$parta_gpi_pi_hod_a=mysqli_real_escape_string($conn,$_POST['parta_gpi_pi_hod_a']);
	$sql2="UPDATE part_a_gpi SET parta_gpi_pi_hod_a='$parta_gpi_pi_hod_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

if(isset($_POST['parta_gpi_pi_committee_a']) && $_POST['parta_gpi_pi_committee_a']!=-1 && $committee==1)
{
	$parta_gpi_pi_committee_a=mysqli_real_escape_string($conn,$_POST['parta_gpi_pi_committee_a']);
	$sql2="UPDATE part_a_gpi SET parta_gpi_pi_committee_a='$parta_gpi_pi_committee_a' WHERE id='$id'";
	$result2=mysqli_query($conn,$sql2);
}

echo "success";