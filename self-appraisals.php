<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
else if(!isset($_GET['id']))
{
	header("LOCATION: userprofile.php");
}
else
{

include 'dbh.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);//the one who is viewing the form

$userId=mysqli_real_escape_string($conn,$_GET['id']);//the one whose form is being viewed

if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;	
}

$sqlx="SELECT profilePicLocation, hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];

include 'top.php';
include 'left-nav.php';
?>
	  	
    <div class="container">
    <div class="row">    		
    <div class="col offset-md-2 parta" id="part-a-container">

    	
    	<header>
    		<h2 class="heading" style="font-size: 22px;text-align: left"><b>My Self Appraisals</b></h2>    		
    	</header>
    	<hr style="border: 0.5px solid #c8c8c8">

    	<ul style="padding:8px;margin-top: 12px">
			<?php

			for($a=$currentyear; $a>=2017; $a--)
			{
				?>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<p style="font-size: 20px">YEAR: <?php echo ($a-1).'-'.$a; ?></p>
						<a href="self-appraisal-partA.php?id=<?php echo $userId; ?>&year=<?php echo $a; ?>" class="btn btn-success" style="background-color: #DCEDC8;border: 1px solid #DCEDC8;color:black">
			  			Part A Self Appraisal 
						</a>
						<a href="self-appraisal-partB.php?id=<?php echo $userId; ?>&year=<?php echo $a; ?>" class="btn btn-success" style="background-color: #DCEDC8;border: 1px solid #DCEDC8;color:black">
			  			Part B Self Appraisal 
						</a>
						<br>
						<hr style="border: 0.5px solid #c8c8c8">
					</div>
				</div>
				
				<?php
			}
			/*
			<li>
				<a href="partB.php?id=<?php echo $_SESSION['id']; ?>&year=<?php echo $previousyear; ?>"><?php echo $previousyear.'-'.($previousyear-1); ?></a>
			</li>
			*/
			?>
		</ul>
    	
    </div>
	</div>
	</div>
</body>
</html>

<?php

}

?>