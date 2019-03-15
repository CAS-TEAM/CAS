<?php

session_start();

include 'dbh.php';

$fieldtitle=$_POST['fieldtitle'];
$maxpi=$_POST['maxpi'];
$inputtype=$_POST['inputtype'];
$fieldname=$_POST['fieldname'];
$fieldid=$_POST['fieldid'];
$fieldplaceholder=$_POST['fieldplaceholder'];
$fieldform=$_POST['fieldform'];
$fielddate=$_POST['fielddate'];

$sql="INSERT INTO fields_table (fieldtitle, maxpi, inputtype, fieldname, fieldid, fieldplaceholder, fieldform, fielddate) VALUES ('$fieldtitle', '$maxpi', '$inputtype', '$fieldname', '$fieldid', '$fieldplaceholder', '$fieldform', '$fielddate')";
$result=mysqli_query($conn,$sql);
$id=mysqli_insert_id($conn);

header("LOCATION: adminpanel.php#field".$id);