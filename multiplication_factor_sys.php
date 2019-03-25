<?php

session_start();

include 'dbh.php';

$currentyearmf=mysqli_real_escape_string($conn, $_POST['v1forcurryear']);

$previousyearmf=mysqli_real_escape_string($conn, $_POST['v2forcurryear']);

$sql="UPDATE multiplication_factor_table SET currentyear='$currentyearmf', previousyear='$previousyearmf' WHERE id=1";
$result=mysqli_query($conn, $sql);

header("LOCATION: adminpanel.php");