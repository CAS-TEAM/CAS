<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];

include 'top.php';
include 'left-nav.php';

?>

	
	<div class="container">
		<div class="row">       
		<div class="col offset-md-2 parta">
			<header class="heading"><b>P.I. Data Input Portal</b></header>
			<hr style="border: 0.5px solid #c8c8c8"><br>

			<!-- place all code here -->

		</div>
		</div>
	</div>