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
include 'top.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);

$userId=mysqli_real_escape_string($conn,$_GET['id']);
// $year=mysqli_real_escape_string($conn,$_GET['year']);

if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;
	
}

$sqlx="SELECT hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
// echo "committee=".$committee;

$currentyear=date("Y");
$previousyear=$currentyear-1;

?>

	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
	  	<a class="navbar-brand" href="#">CAS</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      	<!-- <li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      	</li> -->
		      	<?php
		      	if(!isset($_SESSION['id']))
		      	{
			      	?>
			      	<li class="nav-item">
			        	<a class="nav-link" href="index.php">Sign Up | Sign In</a>
			      	</li>
			      	<?php
			    }			      	
			    else
			    {
			    	?>			    	
			      	<li class="nav-item dropdown">
				        <img class="nav-link dropdown-toggle" src="defaults/default_userprofile_pic.png" width="50px" style="cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          	<!-- <img src="defaults/default_userprofile_pic.png" width="30px" style="display:block;margin:0 auto"> -->
				        <!-- </a> -->
				        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				        	<h6 class="dropdown-header"><?php echo $_SESSION['faculty_name']; ?></h6>
				          	<a class="dropdown-item" href="userprofile.php"><img src="defaults/default_userprofile_pic.png" style="width:30px;height:auto"><span class="my-auto ml-2">My Profile</span></a>
				          	<a class="dropdown-item" href="usersettings.php"><img src="settings.png" style="width:30px;height:auto"><span class="my-auto ml-2">Settings</span></a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="logout.php">Log out</a>
				        </div>
			      	</li>
			      	<?php
		      	}
		      	?>
		    </ul>
	  	</div>
	</nav>



	<div class="container partb">

		<?php 

		if($viewerId==$userId)
		{

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$cparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		// echo "current=".$cparta_gpi_pi_self_a.",".$pparta_gpi_pi_self_a;

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];


		/////////////////////////////////////////////////////////////////


		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];

		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];


		///////////////////////////////////////////////////////////////
		//calculating percentages
		$Atotal= ($pparta_gpi_pi_self_a/50*100 + ($pcat1_pitotal_self_a/50)*100 + $pcat2_piitotal_self_a + $pcat3_piiitotal_self_a/175*100 + $pcat4_pivtotal_self_a/75*100);
		$A=$Atotal/5;

		$Btotal = ($cparta_gpi_pi_self_a/50*100 +	$ccat1_pitotal_self_a +	$ccat2_piitotal_self_a +	$ccat3_piiitotal_self_a/175*100 +	$ccat4_pivtotal_self_a/75*100);

		$B=$Btotal/5;

		$avgpi=0.25*$A + 0.75*$B;


		?>
		
		<header class="heading"><b>Summary of PI Scores(to be filled by applicant)</b></header><br>
		<!-- <form class="summary_self_form.php" action="summary_sys.php" enctype="multipart/form-data" method="POST"> -->

		<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
		<input type="hidden" name="userId" id="userId" value="<?php echo $userId; ?>">
   		<!-- <input type="hidden" name="viewerId" id="viewerId" value="<?php echo $viewerId; ?>"> -->

		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab-summary">
						<tr>
							<th class="text-center">Category</th>
							<th class="text-center">Max.<br> Marks for PI</th>
							<th class="text-center">Criteria</th>
							<th class="text-center">A<br> Last Academic Year 2017-18</th>
							<th class="text-center">B<br> Current Academic Year 2018-19</th>

						</tr>
						<tbody>
							<tr id='summ10'>
								<td>Part A</td>
								<td>50</td>
								<td>General</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicA_last' value="<?php echo $pparta_gpi_pi_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academic_last' value="<?php echo $pparta_gpi_pi_self_a/50*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicA_current' value="<?php echo $cparta_gpi_pi_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicA_current' value="<?php echo $cparta_gpi_pi_self_a/50*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='summ11'>
		                    	<td>Part B: I</td>
								<td>100</td>
								<td>Teaching and Learning</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBI_last' value="<?php echo $pcat1_pitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBI_last' value="<?php echo ($pcat1_pitotal_self_a/100)*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBI_current' value="<?php echo $ccat1_pitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBI_current' value="<?php echo $ccat1_pitotal_self_a; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ12'>
		                    	<td>Part B: II</td>
								<td>100</td>
								<td>Co-Curricular and administrative activities in college</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBII_last' value="<?php echo $pcat2_piitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBII_last' value="<?php echo $pcat2_piitotal_self_a; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBII_current' value="<?php echo $ccat2_piitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBII_current' value="<?php echo $ccat2_piitotal_self_a; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ13'>
		                    	<td>Part B: III</td>
								<td>175</td>
								<td>Publications, supervisor, guide, research, consultancy, intellectual properties</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIII_last' value="<?php echo $pcat3_piiitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIII_last' value="<?php echo $pcat3_piiitotal_self_a/175*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIII_current' value="<?php echo $ccat3_piiitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIII_current' value="<?php echo $ccat3_piiitotal_self_a/175*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ14'>
		                    	<td>Part B: IV</td>
								<td>75</td>
								<td>Co-Curricular and administrative activities outside college</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_last' value="<?php echo $pcat4_pivtotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_last' value="<?php echo $pcat4_pivtotal_self_a/75*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIV_current' value="<?php echo $ccat4_pivtotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_current' value="<?php echo $ccat4_pivtotal_self_a/75*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ14'>
		                    	<td colspan="3">Average PI for total out of 500</td>
		                    	<td>
		                    		<div class="row">
										<div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">A =</label>
										</div>
										<div class="col-md-4" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_avgA_last' class="form-control" style="width: 100%;margin: 0;padding: 0" value="<?php echo $Atotal; ?>" disabled/>
										</div>
										<div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">A =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_avgA_last' value="<?php echo $A; ?>" class="form-control" style="width: 100%"  disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-4" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_avgB_last' class="form-control" style="width: 100%;margin: 0;padding: 0" value="<?php echo $Btotal; ?>" disabled/>
										</div>
										<div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_avgB_last' value="<?php echo number_format((float)$B, 2, '.', ''); ?>" class="form-control" style="width: 100%"  disabled/>
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='summ15'>
		                    	<td colspan="5">
									<div class="row justify-content-center">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">Average PI = [ (0.25 * A) + (0.75 * B) ] = </label>
										</div>
										<div class="col-md-3" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_avgpi_last' class="form-control" style="width: 100%;margin: 0;padding: 0" value='<?php echo number_format((float)$avgpi, 2, '.', ''); ?>' disabled/>
										</div>
										<div class="col-md-1 text-left" style="margin:0;padding:0">
											<label class="col-form-label">%</label>
										</div>
									</div>
								</td>
		                    </tr>
		                </tbody>
					</table>
					</div>
				</div>
			</div>	
		</div><br>

		<div class="container">         
		  	<table class="table table-bordered">
			    <thead>
			      	<tr>
			        	<th>Grade</th>
			        	<th>% Average PI score</th>
			      	</tr>
			    </thead>
			    <tbody>
			      	<tr>
			        	<td>Satisfactory</td>
			        	<td>50-100</td>
			      	</tr>
			      	<tr>
			        	<td>Not Satisfactory</td>
			        	<td>0-49</td>
			      	</tr>
			    </tbody>
		  	</table>
		</div><br>
		<!-- <hr style="border: 0.5px solid #c8c8c8"> -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<p><b>List of Enclosures: (Please attach copies of certificates, sanction orders, papers etc. wherever necessary)</b></p>
				</div>
			</div>
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic4">
						    <tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Description</th>
								<th class="text-center">Attach File</th>
							</tr>				
							 
							<tbody>
								<tr id='addr50'>
									<td id='hasr1'>1</td>
									<td>
									<input type="number" name='ecs[]' id='ecs1' class="form-control" maxlength="200" />
									</td>
									<td>
										<div class="custom-file">
							                <input type="file" class="custom-file-input" id="papers1" name="papers[]" multiple="multiple"/>
							                <label class="custom-file-label" for="papers1">Choose file</label>
							            </div>
									</td>
								</tr>
			                    <tr id='addr51'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row4" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row4' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>

			<div class="row">
				<div class="col-md-12 text-center">
					<p>NB: The proforma duly filled along with all enclosures, submitted will be verified by the authorities.</p>
				</div>
			</div>
		</div>

		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row form-inline justify-content-center">

			<div class="col">
				<!-- <button type="submit" class="btn btn-success" id="part-a-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SUBMIT 
				</button> -->

				<button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>
			</div>
		</div><br>
		<!-- </form> -->
		

		<?php

		}
		
		if($committee==1)
		{

		?>	

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ EVALUATION BY THE COMMITTEE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<!-- <form class="summary_comm_form" action="" method="POST"> -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p><b>Evaluation by the committee (for office use)</b></p>
				</div>
			</div>
			<ul>
			<div class="row">
				<div class="col-md-12 text-left">
					<li><p>State whether the facts / documentation stated / attached above correct, if not then state the incorrect facts</p></li>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<li><p>Final Verification and Evaluation in respects of PI by committee</p></li>
				</div>
			</div>
			</ul>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab-evaluation">
						<tr>
							<th class="text-center">Item</th>
							<th class="text-center">Correct</th>
							<th class="text-center">Exaggerated</th>
							<th class="text-center">Reasons/Remarks if any</th>
							<th class="text-center">Current Academic Year 20__-20__</th>

						</tr>
						<tbody>
							<tr id='eval10'>
								<td>Part A</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct-parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated-parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks-parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicA' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 number-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicA' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='eval11'>
		                    	<td>Part B: I</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct-partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated-partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks-partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBI' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBI' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval12'>
		                    	<td>Part B: II</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBII' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBII' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval13'>
		                    	<td>Part B: III</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIII' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIII' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval14'>
		                    	<td>Part B: IV</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIV' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval14'>
		                    	<td colspan="5">
			                    	<div class="row justify-content-center">
			                    		<div class="col-md-5 text-left">
			                    			<label class="col-form-label">Average PI for total out of 500 (Committee):</label>
			                    		</div>

				                    	<div class="col-md-2" style="margin:0;padding:0">
											<input type="number" name='last_academicBIV_avg_comm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-1 text-center" style="margin:0;padding:0;padding-left: 5px">
											<label class="col-form-label">% /5  =</label>
										</div>
										<div class="col-md-2" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_avg_comm' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>

		                    <tr id='eval15'>
		                    	<td colspan="5">
									<div class="row justify-content-center">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">Grade of Average PI (Committee):</label>
										</div>
										<div class="col-md-3" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='last_academicBIV_avgpi_comm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
									</div>
								</td>
		                    </tr>
		                </tbody>
					</table>
					</div>
				</div>
			</div>	
		</div><br>

		<div class="row justify-content-center">
			<div class="col-md-4">
				<label class="col-form-label"><b>Final Recommendation:</b></label>
			</div>
			<div class="col-md-6">
				<input type="text" name='final_recomm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
			</div>
		</div><br>

		<div class="row form-inline justify-content-center">

			<div class="col">
				<!-- <button type="submit" class="btn btn-success" id="part-a-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SUBMIT 
				</button> -->

				<button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>
			</div>
		</div><br>

		<!-- </form> -->

		<?php

		}

		?>

		
	
	</div>


	<br><br>


 	<script type="text/javascript">
     $(document).ready(function()
    {
      var l=1;
     $("#add_row4").click(function(){
      $('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><input type="number" name="ecs[]" id="ecs'+(l+1)+'" class="form-control" maxlength="200" /></td><td><div class="custom-file"><input type="file" class="custom-file-input" id="papers'+(l+1)+'" name="papers[]" multiple/><label class="custom-file-label" for="papers'+(l+1)+'">Choose file</label></div></td>');

      // $('#tab_logic4').append('<tr id="addr5'+(l+1)+'"></tr>');
      $('#addr5'+l).after('<tr id="addr5'+(l+1)+'"></tr>');
      l++; 
  	});
     $("#delete_row4").click(function(){
    	 if(l>1){
		 $("#addr5"+(l-1)).html('');
		 $("#addr5"+(l)).remove();
		 l--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
	function myFunction() {
		$("#part-a-submit-form").toggle();
		$("#part-a-print-form").toggle();
	  	window.print();

	  	$("#part-a-submit-form").toggle();
		$("#part-a-print-form").toggle();
	}
	</script>

</body>
</html>

<?php

}

?>