<?php
	
session_start();

include 'dbh.php';

$query=mysqli_real_escape_string($conn,$_POST['query']);
// echo $query;

header("LOCATION: adminpanel.php?filter=search&q=".$query);