<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
/*else if(!isset($_GET['id']) || !isset($_GET['year']))
{
	header("LOCATION: userprofile.php");
}*/
else
{

include 'dbh.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);//the one who is viewing the form

$sqlx="SELECT profilePicLocation, hod, committee, department FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];
$department=$rowx['department'];

include 'top.php';
include 'left-nav.php';
?>
	  	
    <div class="container" style="margin-top: 8px">
    <div class="row">    		
    <div class="col offset-md-2 parta" id="part-a-container">
    	<br><h2 class="text-center">PRINT ALL SELF APPRAISALS' DATA</h2>
    	<hr>
    	<a href="print-sa-data.php?year=2019&department=<?php echo $department; ?>" class="btn btn-info">PRINT FOR YEAR 2019</a>
        <a href="download-fac-attachments.php?year=2019&department=<?php echo $department; ?>" class="btn btn-primary">DOWNLOAD FACULTY ATTACHMENTS</a>
    	<br><br>
    </div>
	</div>
	</div>

<?php
}