<?php

include 'dbh.php';

$fieldidvalue=mysqli_real_escape_string($conn,$_POST['fieldidvalue']);

$sql="DELETE FROM fields_table WHERE id='$fieldidvalue'";
$result=mysqli_query($conn,$sql);

echo $fieldidvalue;