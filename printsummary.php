<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Self Appraisal Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- general.js import -->
	<script type="text/javascript" src="general.js"></script>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

	<!-- animate css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- printThis files -->
	<script src="printThis.js"></script>	
    </head>

    <body>

    	<?php
    	session_start();

    	include 'dbh.php';

    	$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);
	    $userId=mysqli_real_escape_string($conn,$_GET['id']);
		$year=mysqli_real_escape_string($conn,$_GET['year']);

		$sqlx="SELECT faculty_name, email, date_of_joining, ecode, mobileno FROM faculty_table WHERE id='$userId'";
		$resultx=mysqli_query($conn,$sqlx);
		$rowx=mysqli_fetch_assoc($resultx);
		$faculty_name=$rowx['faculty_name'];

		$currentyear=mysqli_real_escape_string($conn,$_GET['year']);
		$previousyear=$currentyear-1;
		$lasttolastyear=$previousyear-1;

		$sqlx="SELECT  hod, committee FROM faculty_table WHERE id='$viewerId'";
		$resultx=mysqli_query($conn,$sqlx);
		$rowx=mysqli_fetch_assoc($resultx);

		$hod=$rowx['hod'];
		$committee=$rowx['committee'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////
		//PI FILLED BY FACULTY

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$cparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];


		/////////////////////////////////////////////////////////////////


		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];

		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];

		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];


		///////////////////////////////////////////////////////////////
		$PPpartAself=$lparta_gpi_pi_self_a;
		$PPpartBcat1self=$lcat1_pitotal_self_a;
		$PPpartBcat2self=$lcat2_piitotal_self_a;
		$PPpartBcat3self=$lcat3_piiitotal_self_a;
		$PPpartBcat4self=$lcat4_pivtotal_self_a;

		$PP = $lparta_gpi_pi_self_a+$lcat1_pitotal_self_a+$lcat2_piitotal_self_a+$lcat3_piiitotal_self_a+$lcat4_pivtotal_self_a;

		$PpartAself=$pparta_gpi_pi_self_a;
		$PpartBcat1self=$pcat1_pitotal_self_a;
		$PpartBcat2self=$pcat2_piitotal_self_a;
		$PpartBcat3self=$pcat3_piiitotal_self_a;
		$PpartBcat4self=$pcat4_pivtotal_self_a;

		$A = $pparta_gpi_pi_self_a+$pcat1_pitotal_self_a+$pcat2_piitotal_self_a+$pcat3_piiitotal_self_a+$pcat4_pivtotal_self_a;

		$CpartAself=$cparta_gpi_pi_self_a;
		$CpartBcat1self=$ccat1_pitotal_self_a;
		$CpartBcat2self=$ccat2_piitotal_self_a;
		$CpartBcat3self=$ccat3_piiitotal_self_a;
		$CpartBcat4self=$ccat4_pivtotal_self_a;

		$B = $cparta_gpi_pi_self_a+$ccat1_pitotal_self_a+$ccat2_piitotal_self_a+$ccat3_piiitotal_self_a+$ccat4_pivtotal_self_a;

		$avgpi=($PP+$A+$B)/3;

		?>
		<div id="printsummary">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						<img src="img/logo3.jpg" style="width:35%;margin-left: 100px">
					</div>
					<div class="col-md-8">
					    <h2 class="heading" style="font-size:25px; margin-top: 15px;text-align: center"><b>K. J. Somaiya College of Engineering, Mumbai -77</b></h2>
						<h2 class="heading" style="font-size:25px;text-align: center">(Autonomous College Affiliated to University of Mumbai)</h2>
					</div>
					<div class="col-md-2">
						<img src="img/logo1.jpg" style="width: 50%;margin-left: 60px">
					</div>
				</div>
			</div>
		</div>

		<h2 class="heading" style="text-align: center;font-size: 25px"><b>Summary of PI Scores of <?php echo $faculty_name; ?></h2>

		<div class="container" id="part-a-container" style="border:1px solid black;width: 90%;margin-left: 100px"><br>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab-summary">
							<tr>
								<th class="text-center" style="font-size: 25px">Category</th>
								<th class="text-center" style="font-size: 25px">Max.<br> Marks for PI</th>
								<th class="text-center" style="font-size: 25px">Criteria</th>
								<th class="text-center" style="column-width: 260px;font-size: 25px">A<br> Last to Last Academic Year<br> <?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
								<th class="text-center" style="column-width: 260px;font-size: 25px">B<br> Last Academic Year<br><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?> </th>
								<th class="text-center" style="column-width: 260px;font-size: 25px">C<br> Current Academic Year<br><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							</tr>
							<tbody>
								<tr>
									<td style="font-size: 25px">Part A</td>
									<td style="font-size: 25px">50</td>
									<td style="font-size: 25px">General</td>
									<td style="font-size: 25px"><?php echo $lparta_gpi_pi_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $pparta_gpi_pi_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $cparta_gpi_pi_self_a; ?></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: I</td>
									<td style="font-size: 25px">100</td>
									<td style="font-size: 25px">Teaching and Learning</td>
									<td style="font-size: 25px"><?php echo $lcat1_pitotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $pcat1_pitotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $ccat1_pitotal_self_a; ?></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: II</td>
									<td style="font-size: 25px">100</td>
									<td style="font-size: 25px">Co-Curricular and administrative activities in college</td>
									<td style="font-size: 25px"><?php echo $lcat2_piitotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $pcat2_piitotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $ccat2_piitotal_self_a; ?></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: III</td>
									<td style="font-size: 25px">175</td>
									<td style="font-size: 25px">Publications, supervisor, guide, research, consultancy, intellectual properties</td>
									<td style="font-size: 25px"><?php echo $lcat3_piiitotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $pcat3_piiitotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $ccat3_piiitotal_self_a; ?></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: IV</td>
									<td style="font-size: 25px">75</td>
									<td style="font-size: 25px">Co-Curricular and administrative activities outside college</td>
									<td style="font-size: 25px"><?php echo $lcat4_pivtotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $pcat4_pivtotal_self_a; ?></td>
									<td style="font-size: 25px"><?php echo $ccat4_pivtotal_self_a; ?></td>
								</tr>
								<tr>
									<td colspan="3" style="text-align: center;font-size: 25px" >PI total out of 500</td>
									<td style="font-size: 25px"><?php echo $PP; ?></td>
									<td style="font-size: 25px"><?php echo $A; ?></td>
									<td style="font-size: 25px"><?php echo $B; ?></td>
								</tr>
								<tr>
									<td colspan="6" style="text-align: center;font-size: 25px" >Average PI = (A + B + C) / 3 = <?php echo number_format((float)$avgpi, 2, '.', ''); ?></td>
								</tr>
								<tr>
									<td colspan="6" style="text-align: center;font-size: 25px" >Average PI % = ((Average PI)/500)*100 =<?php echo number_format((float)($avgpi/5), 2, '.', ''); ?> </td>
								</tr>
							</tbody>
						</table><br>

						<table class="table table-bordered table-hover" id="tab-summary">
							<tr>
								<th class="text-center" style="font-size: 25px">Grade</th>
								<th class="text-center" style="font-size: 25px">% Average PI score</th>
							</tr>
							<tbody>
								<tr>
									<td class="text-center" style="font-size: 25px">Satisfactory</td>
									<td class="text-center" style="font-size: 25px">50-100</td>
								</tr>
								<tr>
									<td class="text-center" style="font-size: 25px">Not Satisfactory</td>
									<td class="text-center" style="font-size: 25px">0-49</td>
								</tr>
							</tbody>
						</table>
						</div>
						
						<?php

						if($committee==1 || $hod==1)
						{
						?>
						<div class="row">
							<div class="col-md-12 text-center">
								<p style="font-size: 25px"><b>Evaluation by the head of department and committee (for office use)</b></p>
							</div>
						</div>
						<ul>
						<div class="row">
							<div class="col-md-12 text-left">
								<li><p style="font-size: 25px">State whether the facts / documentation stated / attached above correct, if not then state the incorrect facts</p></li>
							</div>
						</div>
						<?php 
						if($committee==1)
						{
						?>
						<div class="row">
							<div class="col-md-12 text-left">
								<li><p style="font-size: 25px">Final Verification and Evaluation in respects of PI by committee</p></li>
							</div>
						</div>
						<?php
						}
						}	
						?>
						</ul>
					</div>

					<?php

					if($committee==1 || $hod==1)
					{

					$sqlpartA="SELECT parta_gpi_pi_hod_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$cparta_gpi_pi_hod_a=$rowpartA['parta_gpi_pi_hod_a'];

					$sqlpartA="SELECT parta_gpi_pi_hod_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pparta_gpi_pi_hod_a=$rowpartA['parta_gpi_pi_hod_a'];

					$sqlpartA="SELECT parta_gpi_pi_hod_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lparta_gpi_pi_hod_a=$rowpartA['parta_gpi_pi_hod_a'];

					// echo "current=".$sqlpartA.",".$pparta_gpi_pi_self_a;
					///////////////////////////////////////////////////////////////////////////////////////////////////////////

					$sqlpartA="SELECT cat1_pitotal_hod_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat1_pitotal_hod_a=$rowpartA['cat1_pitotal_hod_a'];

					$sqlpartA="SELECT cat1_pitotal_hod_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat1_pitotal_hod_a=$rowpartA['cat1_pitotal_hod_a'];

					$sqlpartA="SELECT cat1_pitotal_hod_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat1_pitotal_hod_a=$rowpartA['cat1_pitotal_hod_a'];

					///////////////////////////////////////////////////////////////////////////////////////////////////////////

					$sqlpartA="SELECT cat2_piitotal_hod_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat2_piitotal_hod_a=$rowpartA['cat2_piitotal_hod_a'];

					$sqlpartA="SELECT cat2_piitotal_hod_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat2_piitotal_hod_a=$rowpartA['cat2_piitotal_hod_a'];

					$sqlpartA="SELECT cat2_piitotal_hod_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat2_piitotal_hod_a=$rowpartA['cat2_piitotal_hod_a'];

					////////////////////////////////////////////////////////////

					$sqlpartA="SELECT cat3_piiitotal_hod_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat3_piiitotal_hod_a=$rowpartA['cat3_piiitotal_hod_a'];

					$sqlpartA="SELECT cat3_piiitotal_hod_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat3_piiitotal_hod_a=$rowpartA['cat3_piiitotal_hod_a'];

					$sqlpartA="SELECT cat3_piiitotal_hod_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat3_piiitotal_hod_a=$rowpartA['cat3_piiitotal_hod_a'];


					/////////////////////////////////////////////////////////////////


					$sqlpartA="SELECT cat4_pivtotal_hod_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat4_pivtotal_hod_a=$rowpartA['cat4_pivtotal_hod_a'];

					$sqlpartA="SELECT cat4_pivtotal_hod_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat4_pivtotal_hod_a=$rowpartA['cat4_pivtotal_hod_a'];

					$sqlpartA="SELECT cat4_pivtotal_hod_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat4_pivtotal_hod_a=$rowpartA['cat4_pivtotal_hod_a'];


					///////////////////////////////////////////////////////////////

					$PPpartAhod=$lparta_gpi_pi_hod_a;
					$PPpartBcat1hod=$lcat1_pitotal_hod_a;
					$PPpartBcat2hod=$lcat2_piitotal_hod_a;
					$PPpartBcat3hod=$lcat3_piiitotal_hod_a;
					$PPpartBcat4hod=$lcat4_pivtotal_hod_a;

					$PPhod= ($PPpartAhod + $PPpartBcat1hod + $PPpartBcat2hod + $PPpartBcat3hod + $PPpartBcat4hod);

					$PpartAhod=$pparta_gpi_pi_hod_a;
					$PpartBcat1hod=$pcat1_pitotal_hod_a;
					$PpartBcat2hod=$pcat2_piitotal_hod_a;
					$PpartBcat3hod=$pcat3_piiitotal_hod_a;
					$PpartBcat4hod=$pcat4_pivtotal_hod_a;

					$Ahod= ($PpartAhod + $PpartBcat1hod + $PpartBcat2hod + $PpartBcat3hod + $PpartBcat4hod);

					$CpartAhod=$cparta_gpi_pi_hod_a;
					$CpartBcat1hod=$ccat1_pitotal_hod_a;
					$CpartBcat2hod=$ccat2_piitotal_hod_a;
					$CpartBcat3hod=$ccat3_piiitotal_hod_a;
					$CpartBcat4hod=$ccat4_pivtotal_hod_a;

					$Bhod = ($CpartAhod +	$CpartBcat1hod +	$CpartBcat2hod + $CpartBcat3hod +	$CpartBcat4hod);

					$avgpihod=number_format(($PPhod +$Ahod + $Bhod)/3, 2);

					$sqlss="SELECT hodremarkscum FROM summary_table WHERE year='$currentyear' AND facultyId='$userId'";
					$resultss=mysqli_query($conn,$sqlss);
					$rowss=mysqli_fetch_assoc($resultss);
					$hodremarkscum=$rowss['hodremarkscum'];

					if($committee==1)
					{

					$sqlpartA="SELECT parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$cparta_gpi_pi_committee_a=$rowpartA['parta_gpi_pi_committee_a'];

					$sqlpartA="SELECT parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pparta_gpi_pi_committee_a=$rowpartA['parta_gpi_pi_committee_a'];

					$sqlpartA="SELECT parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lparta_gpi_pi_committee_a=$rowpartA['parta_gpi_pi_committee_a'];

					// echo "current=".$sqlpartA.",".$pparta_gpi_pi_self_a;
					///////////////////////////////////////////////////////////////////////////////////////////////////////////

					$sqlpartA="SELECT cat1_pitotal_committee_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat1_pitotal_committee_a=$rowpartA['cat1_pitotal_committee_a'];

					$sqlpartA="SELECT cat1_pitotal_committee_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat1_pitotal_committee_a=$rowpartA['cat1_pitotal_committee_a'];

					$sqlpartA="SELECT cat1_pitotal_committee_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat1_pitotal_committee_a=$rowpartA['cat1_pitotal_committee_a'];

					///////////////////////////////////////////////////////////////////////////////////////////////////////////

					$sqlpartA="SELECT cat2_piitotal_committee_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat2_piitotal_committee_a=$rowpartA['cat2_piitotal_committee_a'];

					$sqlpartA="SELECT cat2_piitotal_committee_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat2_piitotal_committee_a=$rowpartA['cat2_piitotal_committee_a'];

					$sqlpartA="SELECT cat2_piitotal_committee_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat2_piitotal_committee_a=$rowpartA['cat2_piitotal_committee_a'];

					////////////////////////////////////////////////////////////

					$sqlpartA="SELECT cat3_piiitotal_committee_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat3_piiitotal_committee_a=$rowpartA['cat3_piiitotal_committee_a'];

					$sqlpartA="SELECT cat3_piiitotal_committee_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat3_piiitotal_committee_a=$rowpartA['cat3_piiitotal_committee_a'];

					$sqlpartA="SELECT cat3_piiitotal_committee_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat3_piiitotal_committee_a=$rowpartA['cat3_piiitotal_committee_a'];

					/////////////////////////////////////////////////////////////////


					$sqlpartA="SELECT cat4_pivtotal_committee_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$ccat4_pivtotal_committee_a=$rowpartA['cat4_pivtotal_committee_a'];

					$sqlpartA="SELECT cat4_pivtotal_committee_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$pcat4_pivtotal_committee_a=$rowpartA['cat4_pivtotal_committee_a'];

					$sqlpartA="SELECT cat4_pivtotal_committee_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
					$resultpartA=mysqli_query($conn,$sqlpartA);
					$rowpartA=mysqli_fetch_assoc($resultpartA);

					$lcat4_pivtotal_committee_a=$rowpartA['cat4_pivtotal_committee_a'];

					///////////////////////////////////////////////////////////////

					$PPpartAcommittee=$lparta_gpi_pi_committee_a;
					$PPpartBcat1committee=$lcat1_pitotal_committee_a;
					$PPpartBcat2committee=$lcat2_piitotal_committee_a;
					$PPpartBcat3committee=$lcat3_piiitotal_committee_a;
					$PPpartBcat4committee=$lcat4_pivtotal_committee_a;

					$PPcommittee=($PPpartAcommittee + $PPpartBcat1committee + $PPpartBcat2committee + $PPpartBcat3committee + $PPpartBcat4committee);

					$PpartAcommittee=$pparta_gpi_pi_committee_a;
					$PpartBcat1committee=$pcat1_pitotal_committee_a;
					$PpartBcat2committee=$pcat2_piitotal_committee_a;
					$PpartBcat3committee=$pcat3_piiitotal_committee_a;
					$PpartBcat4committee=$pcat4_pivtotal_committee_a;

					$Acommittee= ($PpartAcommittee + $PpartBcat1committee + $PpartBcat2committee + $PpartBcat3committee + $PpartBcat4committee);

					$CpartAcommittee=$cparta_gpi_pi_committee_a;
					$CpartBcat1committee=$ccat1_pitotal_committee_a;
					$CpartBcat2committee=$ccat2_piitotal_committee_a;
					$CpartBcat3committee=$ccat3_piiitotal_committee_a;
					$CpartBcat4committee=$ccat4_pivtotal_committee_a;

					$Bcommittee = ($CpartAcommittee +	$CpartBcat1committee +	$CpartBcat2committee + $CpartBcat3committee +	$CpartBcat4committee);

					$avgpicommittee=number_format(($PPcommittee + $Acommittee + $Bcommittee)/3, 2);

					$sqlss="SELECT final_recomm FROM summary_table WHERE year='$currentyear' AND facultyId='$userId'";
					$resultss=mysqli_query($conn,$sqlss);
					$rowss=mysqli_fetch_assoc($resultss);
					$final_recomm=$rowss['final_recomm'];
					}

					?>
					<table class="table table-bordered table-hover" id="tab-evaluation">
						<tr>
							<th class="text-center" rowspan="2" style="font-size: 25px">Item</th>
							<th class="text-center" colspan="3" style="font-size: 25px">API given by Faculty Member</th>
							<th class="text-center" colspan="3" style="font-size: 25px">API after verfication by HOD</th>
							<?php
							if($committee==1)
							{
								?>
								<th class="text-center" colspan="3" style="font-size: 25px">Final Score by Screening Cum Evaluation/Selection Committee</th>
								<?php
							}
							?>
						</tr>
						<tr>
							<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th> 
							<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th> 
							<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<?php
							if($committee==1)
							{
								?>
								<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
								<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
								<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
								<?php
							}
							?>
						</tr>
						<tbody>
							<tr>
								<td style="font-size: 25px">Part A</td>
								<td style="font-size: 25px"><?php echo $PPpartAself; ?></td>
								<td style="font-size: 25px"><?php echo $PpartAself; ?></td>
								<td style="font-size: 25px"><?php echo $CpartAself; ?></td>
								<td style="font-size: 25px"><?php echo $PPpartAhod; ?></td>
								<td style="font-size: 25px"><?php echo $PpartAhod; ?></td>
								<td style="font-size: 25px"><?php echo $CpartAhod; ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td style="font-size: 25px"><?php echo $PPpartAcommittee; ?></td>
									<td style="font-size: 25px"><?php echo $PpartAcommittee; ?></td>	
									<td style="font-size: 25px"><?php echo $CpartAcommittee; ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: I</td>
								<td style="font-size: 25px"><?php echo $PPpartBcat1self; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat1self; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat1self; ?></td>
								<td style="font-size: 25px"><?php echo $PPpartBcat1hod; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat1hod; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat1hod; ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td style="font-size: 25px"><?php echo $PPpartBcat1committee; ?></td>
									<td style="font-size: 25px"><?php echo $PpartBcat1committee; ?></td>	
									<td style="font-size: 25px"><?php echo $CpartBcat1committee; ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: II</td>
								<td style="font-size: 25px"><?php echo $PPpartBcat2self; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat2self; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat2self; ?></td>
								<td style="font-size: 25px"><?php echo $PPpartBcat2hod; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat2hod; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat2hod; ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td style="font-size: 25px"><?php echo $PPpartBcat2committee; ?></td>
									<td style="font-size: 25px"><?php echo $PpartBcat2committee; ?></td>	
									<td style="font-size: 25px"><?php echo $CpartBcat2committee; ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: III</td>
								<td style="font-size: 25px"><?php echo $PPpartBcat3self; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat3self; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat3self; ?></td>
								<td style="font-size: 25px"><?php echo $PPpartBcat3hod; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat3hod; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat3hod; ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td style="font-size: 25px"><?php echo $PPpartBcat3committee; ?></td>
									<td style="font-size: 25px"><?php echo $PpartBcat3committee; ?></td>	
									<td style="font-size: 25px"><?php echo $CpartBcat3committee; ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: IV</td>
								<td style="font-size: 25px"><?php echo $PPpartBcat4self; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat4self; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat4self; ?></td>
								<td style="font-size: 25px"><?php echo $PPpartBcat4hod; ?></td>
								<td style="font-size: 25px"><?php echo $PpartBcat4hod; ?></td>
								<td style="font-size: 25px"><?php echo $CpartBcat4hod; ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td style="font-size: 25px"><?php echo $PPpartBcat4committee; ?></td>
									<td style="font-size: 25px"><?php echo $PpartBcat4committee; ?></td>	
									<td style="font-size: 25px"><?php echo $CpartBcat4committee; ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">PI total out of 500</td>
								<td style="font-size: 25px"><?php echo $PP; ?></td>
								<td style="font-size: 25px"><?php echo $A; ?></td>
								<td style="font-size: 25px"><?php echo $B; ?></td>
								<td style="font-size: 25px"><?php echo $PPhod; ?></td>
								<td style="font-size: 25px"><?php echo $Ahod; ?></td>
								<td style="font-size: 25px"><?php echo $Bhod; ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td style="font-size: 25px"><?php echo $PPcommittee; ?></td>
									<td style="font-size: 25px"><?php echo $Acommittee; ?></td>	
									<td style="font-size: 25px"><?php echo $Bcommittee; ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">Average PI</td>
								<td colspan="3" style="font-size: 25px"><?php echo number_format((float)$avgpi, 2, '.', ''); ?></td>
								<td colspan="3" style="font-size: 25px"><?php echo number_format((float)$avgpihod, 2, '.', ''); ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td colspan="3" style="font-size: 25px"><?php echo number_format((float)$avgpicommittee, 2, '.', ''); ?></td>
									<?php
								}
								?>
							</tr>
							<tr>
								<td style="font-size: 25px">Average PI %</td>
								<td colspan="3" style="font-size: 25px"><?php echo number_format((float)($avgpi/5), 2, '.', ''); ?></td>
								<td colspan="3" style="font-size: 25px"><?php echo number_format((float)($avgpihod/5), 2, '.', ''); ?></td>
								<?php
								if($committee==1)
								{
									?>
									<td colspan="3" style="font-size: 25px"><?php echo number_format((float)($avgpicommittee/5), 2, '.', ''); ?></td>
									<?php
								}
								?>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<label class="col-form-label" style="font-size: 25px">HOD Remarks: <?php echo $hodremarkscum; ?></label>
					</div>
				</div>

				<?php
				if($committee==1)
				{
					?>
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<label class="col-form-label" style="font-size: 25px">Final Remarks by Committee: <?php echo $final_recomm; ?></label>
						</div>
					</div>
					<?php

					$sqla="SELECT cas_approved FROM cas_approval_table WHERE facultyId='$userId' AND currentyear='$currentyear'";
					$resulta=mysqli_query($conn, $sqla);
					if(mysqli_num_rows($resulta)!=0)
					{
						$rowsa=mysqli_fetch_assoc($resulta);
						if($rowsa['cas_approved']=='Approved')
						{
							?>
							<br><p class="card-text text-center"><img src="checked.png" style="width:32px"> This CAS application has been approved.</p><br>		
							<?php
						}
						else
						{
							?>
							<br><p class="card-text text-center"><img src="error.png" style="width:32px"> This CAS application has not been approved.</p><br>
							<?php
						}
					}
				}

				}
				?>
			</div>
		</div> 
		</div> 


	<script type="text/javascript">
	$(document).ready(function(){
		
		window.print();
		$("#printsummary").printThis({
			// beforePrint: bp(),
			// afterPrint: ap()
			importStyle: false
		});  	
		
	});
	</script>

    </body>
</html>