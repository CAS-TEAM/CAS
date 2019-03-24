<?php

session_start();

if(isset($_SESSION['id']))
{

include 'dbh.php';

$hodremarksA= mysqli_real_escape_string($conn, $_POST['hodremarksA']);
$hodremarksBcat1= mysqli_real_escape_string($conn, $_POST['hodremarksBcat1']);
$hodremarksBcat2= mysqli_real_escape_string($conn, $_POST['hodremarksBcat2']);
$hodremarksBcat3= mysqli_real_escape_string($conn, $_POST['hodremarksBcat3']);
$hodremarksBcat4= mysqli_real_escape_string($conn, $_POST['hodremarksBcat4']);
$hodremarksavgpi= mysqli_real_escape_string($conn, $_POST['hodremarksavgpi']);
$hodremarkscum= mysqli_real_escape_string($conn, $_POST['hodremarkscum']);

$casrecommend = mysqli_real_escape_string($conn, $_POST['casrecommend']);

$currentyear=mysqli_real_escape_string($conn, $_POST['year']);
$userId=mysqli_real_escape_string($conn, $_POST['userId']);

$sql="UPDATE summary_table SET hodremarksA='$hodremarksA', hodremarksBcat1='$hodremarksBcat1', hodremarksBcat2='$hodremarksBcat2', hodremarksBcat3='$hodremarksBcat3', hodremarksBcat4='$hodremarksBcat4', hodremarksavgpi='$hodremarksavgpi', hodremarkscum='$hodremarkscum' WHERE year='$currentyear' AND facultyId='$userId'";
$result=mysqli_query($conn, $sql);

$sqlx="INSERT INTO recommend_for_cas (facultyId, recommend, currentyear) VALUES ('$userId', '$casrecommend', '$currentyear')";
$resultx=mysqli_query($conn, $sqlx);

echo $casrecommend;

}
