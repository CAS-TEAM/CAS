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

$userId=mysqli_real_escape_string($conn,$_GET['id']);
$year=mysqli_real_escape_string($conn,$_GET['year']);

?>

	
	<div class="container">
		<div class="row">       
		<div class="col offset-md-2 parta">
			<header class="heading"><b>Printing Options</b></header>
			<hr style="border: 0.5px solid #c8c8c8"><br>

			<div class="row">
				
				<div class="col-md-6">
					<a class="btn btn-primary" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" href="printpartA.php?id=<?php echo $userId; ?>&year=<?php echo $year; ?>">Print without PI values (For Self Appraisals)</a>
				</div>
				<div class="col-md-5">
					<a class="btn btn-primary" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" href="printpartA.php?id=<?php echo $userId; ?>&year=<?php echo $year; ?>&pivalues=true">Print with PI values (For Career Advancement Scheme)</a>
				</div>

			</div>
			<br><br>

		</div>
		</div>
	</div>