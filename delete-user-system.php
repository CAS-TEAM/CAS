<?php

include 'dbh.php';

$faculty_id=mysqli_real_escape_string($conn,$_POST['userId']);

$sql="DELETE FROM faculty_table WHERE id='$faculty_id'";
$result=mysqli_query($conn,$sql);

echo $faculty_id;