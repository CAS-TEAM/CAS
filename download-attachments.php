<?php

include 'dbh.php';

$department=mysqli_real_escape_string($conn,$_GET['department']);
$year=mysqli_real_escape_string($conn,$_GET['year']);

$zipcreated = $year.$department."_zippedfiles.zip";
header('Content-Type: application/zip');
header('Content-disposition: attachment; filename='.$zipcreated);
header('Content-Length: ' . filesize($zipcreated));
readfile($zipcreated);
