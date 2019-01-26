<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);


$last_academicA_last=mysqli_real_escape_string($conn,$_POST['last_academicA_last']);
$pi_academic_last=mysqli_real_escape_string($conn,$_POST['pi_academic_last']);
$current_academicA_current=mysqli_real_escape_string($conn,$_POST['current_academicA_current']);
$pi_academicA_current=mysqli_real_escape_string($conn,$_POST['pi_academicA_current']);
$last_academicBI_last=mysqli_real_escape_string($conn,$_POST['last_academicBI_last']);
$pi_academicBI_last=mysqli_real_escape_string($conn,$_POST['pi_academicBI_last']);
$current_academicBI_current=mysqli_real_escape_string($conn,$_POST['current_academicBI_current']);
$pi_academicBI_current=mysqli_real_escape_string($conn,$_POST['pi_academicBI_current']);
$last_academicBII_last=mysqli_real_escape_string($conn,$_POST['last_academicBII_last']);
$pi_academicBII_last=mysqli_real_escape_string($conn,$_POST['pi_academicBII_last']);
$current_academicBII_current=mysqli_real_escape_string($conn,$_POST['current_academicBII_current']);
$pi_academicBII_current=mysqli_real_escape_string($conn,$_POST['pi_academicBII_current']);
$last_academicBIII_last=mysqli_real_escape_string($conn,$_POST['last_academicBIII_last']);
$pi_academicBIII_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIII_last']);
$current_academicBIII_current=mysqli_real_escape_string($conn,$_POST['current_academicBIII_current']);
$pi_academicBIII_current=mysqli_real_escape_string($conn,$_POST['pi_academicBIII_current']);
$last_academicBIV_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_last']);
$pi_academicBIV_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_last']);
$current_academicBIV_current=mysqli_real_escape_string($conn,$_POST['current_academicBIV_current']);
$pi_academicBIV_current=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_current']);
$last_academicBIV_avgA_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgA_last']);
$pi_academicBIV_avgA_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_avgA_last']);
$last_academicBIV_avgB_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgB_last']);
$pi_academicBIV_avgB_last=mysqli_real_escape_string($conn,$_POST['pi_academicBIV_avgB_last']);
$last_academicBIV_avgpi_last=mysqli_real_escape_string($conn,$_POST['last_academicBIV_avgpi_last']);

echo $last_academicA_last;

	$sql="INSERT INTO summary_table (last_academicA_last, pi_academic_last, current_academicA_current, pi_academicA_current, last_academicBI_last, pi_academicBI_last, current_academicBI_current, pi_academicBI_current, last_academicBII_last, pi_academicBII_last, current_academicBII_current, pi_academicBII_current, last_academicBIII_last, pi_academicBIII_last, current_academicBIII_current, pi_academicBIII_current, last_academicBIV_last, pi_academicBIV_last, current_academicBIV_current, pi_academicBIV_current, last_academicBIV_avgA_last, pi_academicBIV_avgA_last, last_academicBIV_avgB_last, pi_academicBIV_avgB_last, last_academicBIV_avgpi_last) VALUES ('$last_academicA_last', '$pi_academic_last', '$current_academicA_current', '$pi_academicA_current', '$last_academicBI_last', '$pi_academicBI_last', '$current_academicBI_current', '$pi_academicBI_current', '$last_academicBII_last', '$pi_academicBII_last', '$current_academicBII_current', '$pi_academicBII_current', '$last_academicBIII_last', '$pi_academicBIII_last', '$current_academicBIII_current', '$pi_academicBIII_current', '$last_academicBIV_last', '$pi_academicBIV_last', '$current_academicBIV_current', '$pi_academicBIV_current', '$last_academicBIV_avgA_last', '$pi_academicBIV_avgA_last', '$last_academicBIV_avgB_last', '$pi_academicBIV_avgB_last', '$last_academicBIV_avgpi_last')";

	$result=mysqli_query($conn,$sql);

echo "Hello";



