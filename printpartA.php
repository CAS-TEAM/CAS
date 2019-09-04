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
	<br>
	
	</head>

<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #;
}

</style>

	<body>

	<?php
	session_start();

	include 'dbh.php';

	$userId=mysqli_real_escape_string($conn,$_GET['id']);
	$year=mysqli_real_escape_string($conn,$_GET['year']);

	$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);//the one who is viewing the form
	$sqlx="SELECT hod, committee FROM faculty_table WHERE id='$viewerId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);

	$hod=$rowx['hod'];
	$committee=$rowx['committee'];
	// echo $committee;

	$sqlx="SELECT faculty_name, email, date_of_joining, ecode, mobileno FROM faculty_table WHERE id='$userId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);
	$faculty_name=$rowx['faculty_name'];
	$email=$rowx['email'];
	$dojkjsce=$rowx['date_of_joining'];
	$ecode=$rowx['ecode'];
	$mobileno=$rowx['mobileno'];

	$sql="SELECT * FROM part_a_table WHERE year='$year' AND faculty_id='$userId'";
	$result=mysqli_query($conn,$sql);		
	$row=mysqli_fetch_assoc($result);

	$praddr=$row['praddr'];
	$peaddr=$row['peaddr'];
	$highq=$row['highq'];
	$dob=$row['dob'];
	$desi=$row['desi'];
	$nameo=$row['nameo'];
	$pdesi=$row['pdesi'];
	$pscale=$row['pscale'];
	$pbg=$row['pbg'];
	$lastdesisel=$row['lastdesisel'];
	$promowef=$row['promowef'];
	$cscales=$row['cscales'];
	$cbasics=$row['cbasics'];
	$lastdesicas=$row['lastdesicas'];
	$promowefcas=$row['promowefcas'];
	$cscalecas=$row['cscalecas'];
	$cbasiccas=$row['cbasiccas'];
	$customRadioInline1=$row['customRadioInline1'];
	$nameofdegree=$row['nameofdegree'];
	$institute=$row['institute'];

	$formId=$row['id'];

	if(isset($_GET['pivalues']) && $_GET['pivalues']==true)
	{
		$sqly="SELECT parta_ugpggpi_self_a, parta_ugpggpi_hod_a, parta_ugpggpi_committee_a, parta_gpi_self_a, parta_gpi_hod_a, parta_gpi_committee_a, parta_gpi_pi_self_a, parta_gpi_pi_hod_a, parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$year'";
		$resulty=mysqli_query($conn,$sqly);
		$rowy=mysqli_fetch_assoc($resulty);

		$parta_ugpggpi_self_a=$rowy['parta_ugpggpi_self_a'];
		$parta_ugpggpi_hod_a=$rowy['parta_ugpggpi_hod_a'];
		$parta_ugpggpi_committee_a=$rowy['parta_ugpggpi_committee_a'];
		$parta_gpi_self_a=$rowy['parta_gpi_self_a'];
		$parta_gpi_hod_a=$rowy['parta_gpi_hod_a'];
		$parta_gpi_committee_a=$rowy['parta_gpi_committee_a'];
		$parta_gpi_pi_self_a=$rowy['parta_gpi_pi_self_a'];
		$parta_gpi_pi_hod_a=$rowy['parta_gpi_pi_hod_a'];
		$parta_gpi_pi_committee_a=$rowy['parta_gpi_pi_committee_a'];
	}

	// $sql1="SELECT * FROM part_a_doc WHERE formId='$formId' ORDER BY srno ASC";
	// $result1=mysqli_query($conn,$sql1);
	// if(mysqli_num_rows($result1)>0)
	// {
	// 	while($row1=mysqli_fetch_assoc($result1))
	// 	{
	// 		$srno=$row1['srno'];
	// 		$course=$row1['course'];
	// 		$days=$row1['days'];
	// 		$agency=$row1['agency'];
	// 		$rolee=$row1['rolee'];
	// 	}
	// }

	?>
	
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
	<h2 class="heading" style="text-align: center;font-size: 22px"><b>'Part A: GENERAL INFORMATION'</b><br> Faculty Name: <?php echo $faculty_name; ?> | Academic Year: <?php echo ($year-1).'-'.($year); ?></h2>  

	<div class="container" id="part-a-container" style="border:1px solid black;width: 90%;margin-left: 100px">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Name:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $faculty_name; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Emp. Code:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $ecode; ?></p>
					</div>
				</div>
			</div>
		</div>		

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Present Address:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $praddr; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Permanent Address :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $peaddr; ?></p>
					</div>
				</div>
			</div>
		</div>		

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Email :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $email; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Mobile No. :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $mobileno; ?></p>
					</div>
				</div>
			</div>
		</div>		

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Highest Qualification:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $highq; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Date of Birth :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $dob; ?></p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-6 text-left">
				<p style="font-size: 25px"><b>Details of last service i.e before joining KJSCE:-</b></p>
			</div>
		</div>

			<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Designation:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $desi; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Name of Organization:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $nameo; ?></p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Present Designation:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $pdesi; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>DOJ KJSCE:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $dojkjsce; ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Present Scale :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $pscale; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Present basic and grade pay :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $pbg; ?></p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-5 text-left">
				<p style="font-size: 25px"><b>Details of last promotion by selection:-</b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Designation:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $lastdesisel; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Promotion w.e.f :</<b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px;margin-left: 10px"><?php echo $promowef; ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Changed Scale :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $cscales; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Changed basic and grade pay :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $cbasics; ?></p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-5 text-left">
				<p style="font-size: 25px"><b>Details of last promotion through CAS:-</b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Designation:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $lastdesicas; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Promotion w.e.f :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px;margin-left: 10px"><?php echo $promowefcas; ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Changed Scale :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $cscalecas; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Changed basic and grade pay :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label" style="font-size: 25px"><?php echo $cbasiccas; ?></p>
					</div>
				</div>
			</div>
		</div>

		<hr>


		<div class="row">
			<div class="col-md-6">
				<p style="font-size: 25px">Whether acquired any fresh educational qualification during said academic year?</p>
			</div>
			<div class="col-md-6 text-left">
				<div class="custom-control custom-radio custom-control-inline">
					<p style="font-size: 25px"><?php echo $customRadioInline1; ?>  </p>
					<!-- <p>If yes: 20 PI</p> -->
				</div>
			</div>
		</div>
		
		<hr>

		<div class="row">
			<div class="col text-left">
				<p style="font-size: 25px">If yes, details of qualification:-</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Name of Degree :</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label" style="font-size: 25px"><?php echo $nameofdegree; ?></p>
					</div>
				</div>							
			</div>
			<div class="col-md-6">
				<div class="form-group row">
					<div class="col-3">
						<label class="col-form-label" style="font-size: 25px"><b>Institute:</b></label>
					</div>
					  
					<div class="col-8" style="padding-left: 0">
						<p class="col-form-label"><?php echo $institute; ?></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<div class="row pipart">
			<div class="col-md-12">
				<div class="form-group row">
					<div class="col-6">
						<label class="col-form-label" style="font-size: 25px">20 PI for Ph.D and M.Phil. 10 PI for other UG/PG Degree/Diploma/Certificate Courses/</label>
					</div>
					  
					<div class="col-4">
					   <!-- <p class="col-form-label"><?php echo 20; ?></p> -->
						<table class="table table-bordered">
						<thead>
							<tr>
								<th style="text-align: center;font-size: 25px" colspan="3">GPI</th>
							</tr>
						  <tr>
							<th style="text-align: center;font-size: 25px">Self Appraisals</th>
							<th style="text-align: center;font-size: 25px">Hod Appraisals</th>
							<th style="text-align: center;font-size: 25px">Committee Appraisals</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td style="text-align: center;font-size: 25px"><?php echo $parta_ugpggpi_self_a; ?></td>
							<?php
							if($hod==1 || $committee==1)
							{
							?>
							<td style="text-align: center;font-size: 25px"><?php echo $parta_ugpggpi_hod_a; ?></td>
							<?php
						  	}
						  	if($committee==1)
						  	{
							?>
							<td style="text-align: center;font-size: 25px"><?php echo $parta_ugpggpi_committee_a; ?></td> 
							<?php
						  	}
						  	?>
						</tbody>
						</table>


					</div>
				</div>							
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-12">
				<p style="font-size: 25px"><b>Details of course/summer school/STTP/online course attended/completed during academic year</b></p>
			</div>
		</div>

		<table class="table table-bordered table-hover">
			<tr>
				<th style="font-size: 25px"><b>Sr.no</b></th>
				<th style="font-size: 25px"><b>Name of summer school/course</b></th>
				<th style="font-size: 25px"><b>Duration(Days)</b></th>
				<th style="font-size: 25px"><b>Organising Agency</b></th>
				<th style="font-size: 25px"><b>If organised in KJSCE, mention the role played</b></th>
			</tr>
			<?php

			$sql1="SELECT * FROM part_a_doc WHERE formId='$formId' ORDER BY srno ASC";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
			{
				while($row1=mysqli_fetch_assoc($result1))
				{
					$srno=$row1['srno'];
					$course=$row1['course'];
					$days=$row1['days'];
					$agency=$row1['agency'];
					$rolee=$row1['rolee'];
					// $data_doc[]=array('file'=>$row1['file']);

					?>
					<tr>
						<td style="font-size: 25px"><?php echo $srno; ?></td>
						<td style="font-size: 25px"><?php echo $course; ?></td>
						<td style="font-size: 25px"><?php echo $days; ?></td>
						<td style="font-size: 25px"><?php echo $agency; ?></td>
						<td style="font-size: 25px"><?php echo $rolee; ?></td>
					</tr>
					<?php
				}
			}
				

			?>
		</table><br>

		<div class="row pipart">
			<div class="col-md-12">
				<div class="form-group row">
					<div class="col-6">
						<label class="col-form-label" style="font-size: 25px">Three GPI per day but maximum 30</label>
					</div>
					  
					<div class="col-4">
					   <!-- <p class="col-form-label"><?php echo 20; ?></p> -->
						<table class="table table-bordered">
						<thead>
							<tr>
								<th style="text-align: center;font-size: 25px" colspan="3">GPI</th>
							</tr>
						  <tr>
							<th style="text-align: center;font-size: 25px">Self Appraisals</th>
							<th style="text-align: center;font-size: 25px">Hod Appraisals</th>
							<th style="text-align: center;font-size: 25px">Committee Appraisals</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td style="text-align: center;font-size: 25px"><?php echo $parta_gpi_self_a; ?></td>
							<?php
							if($hod==1 || $committee==1)
							{
							?>
							<td style="text-align: center;font-size: 25px"><?php echo $parta_gpi_hod_a; ?></td>
							<?php
							}
							if($committee==1)
							{
							?>
							<td style="text-align: center;font-size: 25px"><?php echo $parta_gpi_committee_a; ?></td> 
							<?php
						  	}
						  	?>
						</tbody>
						</table>


					</div>
				</div>							
			</div>
		</div>

		<div class="row pipart">
			<div class="col-md-12">
				<table class="table table-bordered">
				<thead>
					<tr>
						<th style="text-align: center;font-size: 25px" colspan="3">PI Part A = GPI out of 50</th>
					</tr>
				  <tr>
					<th style="text-align: center;font-size: 25px">Self Appraisals</th>
					<th style="text-align: center;font-size: 25px">Hod Appraisals</th>
					<th style="text-align: center;font-size: 25px">Committee Appraisals</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td style="text-align: center;font-size: 25px"><?php echo $parta_gpi_pi_self_a; ?></td>
					<?php
					if($hod==1 || $committee==1)
					{
					?>
					<td style="text-align: center;font-size: 25px"><?php echo $parta_gpi_pi_hod_a; ?></td>
					<?php
				  	}
				  	if($committee==1)
				  	{
					?>
					<td style="text-align: center;font-size: 25px"><?php echo $parta_gpi_pi_committee_a; ?></td> 
					<?php
				  	}
				  	?>
				</tbody>
				</table>
			</div>
		</div>

		<hr>


		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<p style="font-size: 25px"><b>List of Enclosures</b></p>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic4">
							<tr>
								<th class="text-center" style="font-size: 25px" style="font-size: 25px"><b>Sr. No.</b></th>
								<th class="text-center" style="font-size: 25px" style="font-size: 25px"><b>Description</b></th>
								<!-- <th class="text-center">Attached File</th> -->
							</tr>				
							 
							<tbody>

								<?php

								$xx=$year;

								?>
									<tr>
										<td style="font-size: 25px"><b>~</b></td>
										<td style="font-size: 25px"><b>Part A</b></td>
									</tr>
									<?php

									$sqlxxx="SELECT id FROM part_a_table WHERE faculty_id='$userId' AND year='$xx'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$formId=mysqli_real_escape_string($conn,$rowxxx['id']);

									$counter=1;

									// echo $formId.',';
									// Part A
									$sql="SELECT file FROM part_a_doc WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										// echo $counter;
										if($row['file']!='NAN')
										{
											// echo 'here';
											?>
											<tr>
												<td style="font-size: 25px"><?php echo $counter; ?></td>
												<td style="font-size: 25px"><?php echo basename($row['file']); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $row['file']; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

								

									?>											
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="font-size: 25px">NB: The proforma duly filled along with all enclosures, submitted will be verified by the authorities.</p>
				</div>
			</div>
			  

		</div>        
			  


		<!-- <div class="row">
			<div class="col-md-8 text-left">
				<label class="col-form-label"><b>Three GPI per day but maximum 30</b></label>
			</div>

			<div class="col-md-4">
				<div class="form-group row justify-content-center">
					<div class="col-2">
						<label class="col-form-label"><b>GPI:</b></label>
					</div>
					<div class="col-2">
						<p class="col-form-label"><?php echo 30; ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<p class="text-center" style="margin-left:-270px"><b>PI Part A = GPI = <?php echo 50; ?> out of 50</b></p>
			</div>
		</div> -->


	</div>

	<br><br>

	<script type="text/javascript">
	$(document).ready(function(){
		
		window.print();
		// $("#part-a-container").printThis({
		// 	// beforePrint: bp(),
		// 	// afterPrint: ap()
		// 	importStyle: true
		// });  	
		
	});
	</script>

	<?php
	//removing PI part if pivalues is not set
	if(!isset($_GET['pivalues']) || (isset($_GET['pivalues']) && $_GET['pivalues']!='true'))
	{
		?>
		<script type="text/javascript">
			$(".pipart").remove();
		</script>
		<?php
	}
	?>
	</body>
</html>

	
