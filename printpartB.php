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

    include 'dbh.php';

    $userId=mysqli_real_escape_string($conn,$_GET['id']);
	$year=mysqli_real_escape_string($conn,$_GET['year']);

	$sqll="SELECT faculty_name FROM faculty_table WHERE id='$userId'";
	$resultl=mysqli_query($conn,$sqll);
	$rowl=mysqli_fetch_assoc($resultl);
	$fn=$rowl['faculty_name'];

	$sqlx="SELECT id FROM part_b_table WHERE year='$year' AND facultyId='$userId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);

	$formId=$rowx['id'];

	$sql1="SELECT * FROM part_b_cat_1 WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result1);

	$avg_c=$row['avg_c'];
	$total_c=$row['total_c'];

	$odpstest1=$row['odpstest1'];
	$oepstest1=$row['oepstest1'];
	$odpstest2=$row['odpstest2'];
	$oepstest2=$row['oepstest2'];
	$odtest1in=$row['odtest1in'];
	$oetest1in=$row['oetest1in'];
	$odtest2in=$row['odtest2in'];
	$oetest2in=$row['oetest2in'];
	$odtest1ass=$row['odtest1ass'];
	$oetest1ass=$row['oetest1ass'];
	$odtest2ass=$row['odtest2ass'];
	$oetest2ass=$row['oetest2ass'];
	$odesesup=$row['odesesup'];
	$oeesesup=$row['oeesesup'];
	$odeseps=$row['odeseps'];
	$oeeseps=$row['oeeseps'];
	$odesein=$row['odesein'];
	$oeesein=$row['oeesein'];
	$odeseth=$row['odeseth'];
	$oeeseth=$row['oeeseth'];
	$odesepo=$row['odesepo'];
	$oeesepo=$row['oeesepo'];
	$odesere_ass=$row['odesere_ass'];
	$oeesere_ass=$row['oeesere_ass'];
	$odproofr=$row['odproofr'];
	$oeproofr=$row['oeproofr'];
	$odopenday=$row['odopenday'];
	$oeopenday=$row['oeopenday'];
	$edpstest1=$row['edpstest1'];
	$eepstest1=$row['eepstest1'];
	$edpstest2=$row['edpstest2'];
	$eepstest2=$row['eepstest2'];
	$edtest1in=$row['edtest1in'];
	$eetest1in=$row['eetest1in'];
	$edtest2in=$row['edtest2in'];
	$eetest2in=$row['eetest2in'];
	$edtest1ass=$row['edtest1ass'];
	$eetest1ass=$row['eetest1ass'];
	$edtest2ass=$row['edtest2ass'];
	$eetest2ass=$row['eetest2ass'];
	$edesesup=$row['edesesup'];
	$eeesesup=$row['eeesesup'];
	$edeseps=$row['edeseps'];
	$eeeseps=$row['eeeseps'];
	$edesein=$row['edesein'];
	$eeesein=$row['eeesein'];
	$edeseth=$row['edeseth'];
	$eeeseth=$row['eeeseth'];
	$edesepo=$row['edesepo'];
	$eeesepo=$row['eeesepo'];
	$edesere_ass=$row['edesere_ass'];
	$eeesere_ass=$row['eeesere_ass'];
	$edproofr=$row['edproofr'];
	$eeproofr=$row['eeproofr'];
	$edopenday=$row['edopenday'];
	$eeopenday=$row['eeopenday'];
	$avg_ap=$row['avg_ap'];
	$dpstest1=$row['dpstest1'];
	$dpstest2=$row['dpstest2'];
	$dtest1in=$row['dtest1in'];
	$dtest2in=$row['dtest2in'];
	$dtest1ass=$row['dtest1ass'];
	$dtest2ass=$row['dtest2ass'];
	$deseps=$row['deseps'];

	// CATEGORY 2 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



	?>
    
    <div class="row justify-content-center">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<img src="img/logo3.jpg" style="width:35%;margin-left: 85px">
				</div>
				<div class="col-md-8">
				    <h2 class="heading" style="font-size:25px; margin-top: 15px;text-align: center"><b>K. J. Somaiya College of Engineering, Mumbai -77</b></h2>
					<h2 class="heading" style="font-size:25px;text-align: center">(Autonomous College Affiliated to University of Mumbai)</h2>
				</div>
				<div class="col-md-2">
					<img src="img/logo1.jpg" style="width: 50%;margin-left: 50px">
				</div>
			</div>
		</div>
	</div>
	<h2 class="heading" style="text-align: center;font-size: 22px"><b>'Part B'</b><br>Faculty Name: <?php echo $fn; ?> | Academic Year: <?php echo ($year-1).'-'.($year); ?></b></h2>

	<div class="container" style="border:1px solid black;width: 98%;margin-left: 65px">

		<div class="row">
			<div class="col-md-12">
				<p style="font-size: 18px;margin-top: 10px;font-size: 22px"><b>Category I: Teaching and Learning (Max. PI=100)</b></p>
			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-md-12 text-left">
				<p style="font-size: 22px"><b>Courses Taught (Max. PI: 40)</b></p>
			</div>
		</div>

		<table class="table table-bordered table-hover">
			<thead>
				<th colspan="10" style="text-align: center;font-size: 22px">ODD SEMESTER :</th>					
			</thead>

				<tr>
					<th class="text-center" style="width:40px;font-size: 18px">Sr.No</th>
					<th class="text-center" style="width:1400px;font-size: 18px">Course</th>
					<th class="text-center" style="width:80px;font-size: 18px">Type L/P/T</th>
					<th class="text-center" style="width:150px;font-size: 18px">UG/PG</th>
					<th class="text-center" style="width:150px;font-size: 18px">Class/<br>Semester</th>
					<th class="text-center" style="width:800px;font-size: 18px">Hrs./<br>Week</th>
					<th class="text-center" style="font-size: 18px">Total no. of Hours engaged(A)</th>
					<th class="text-center" style="width:680px;font-size: 18px">*Max. Hrs.(B)</th>
					<th class="text-center" style="width:640px;font-size: 18px">C=(A/B)*100</th>
					<th class="text-center" style="width:640px;font-size: 18px">Student Feedback For Theory</th>
				</tr>
				<?php

				$sql1="SELECT * FROM part_b_cat_1_cto WHERE formId='$formId'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>=1)
				{
					$data_doc=array();
					while($row1=mysqli_fetch_assoc($result1))
					{
						$ctocourse=$row1['ctocourse'];
						$ctotyprlpt=$row1['ctotyprlpt'];
						$ctougpg=$row1['ctougpg'];
						$ctoclasssemester=$row1['ctoclasssemester'];
						$ctohrsweek=$row1['ctohrsweek'];
						$ctohrsengaged=$row1['ctohrsengaged'];
						$ctomaxhrs=$row1['ctomaxhrs'];
						$ctoc=$row1['ctoc'];
						$ctofbk=$row1['ctofbk'];
						// $ctofile=$row1['ctofile'];
						$srno=1;
						?>
						<tr>
							<td style="font-size: 18px"><?php echo $srno; ?></td>
						    <td style="font-size: 18px"><?php echo $ctocourse; ?></td>
						    <td style="font-size: 18px"><?php echo $ctotyprlpt; ?></td>
						    <td style="font-size: 18px"><?php echo $ctougpg; ?></td>
						    <td style="font-size: 18px"><?php echo $ctoclasssemester; ?></td>
						    <td style="font-size: 18px"><?php echo $ctohrsweek; ?></td>
						    <td style="font-size: 18px"><?php echo $ctohrsengaged; ?></td>
						    <td style="font-size: 18px"><?php echo $ctomaxhrs; ?></td>
						    <td style="font-size: 18px"><?php echo $ctoc; ?></td>
						    <td style="font-size: 18px"><?php echo $ctofbk; ?></td>
					  	</tr>
						<?php
						$srno+=1;
					}
				}

				?>			 	
				
		</table><br>

		<table class="table table-bordered table-hover">
			<thead>
				<th colspan="10" style="text-align: center;font-size: 22px">EVEN SEMESTER :</th>					
			</thead>

				<tr>
					<th class="text-center" style="width:40px;font-size: 18px">Sr.No</th>
					<th class="text-center" style="width:1400px;font-size: 18px">Course</th>
					<th class="text-center" style="width:80px;font-size: 18px">Type L/P/T</th>
					<th class="text-center" style="width:150px;font-size: 18px">UG/PG</th>
					<th class="text-center" style="width:150px;font-size: 18px">Class/<br>Semester</th>
					<th class="text-center" style="width:800px;font-size: 18px">Hrs./<br>Week</th>
					<th class="text-center" style="font-size: 18px">Total no. of Hours engaged(A)</th>
					<th class="text-center" style="width:680px;font-size: 18px">*Max. Hrs.(B)</th>
					<th class="text-center" style="width:640px;font-size: 18px">C=(A/B)*100</th>
					<th class="text-center" style="width:640px;font-size: 18px">Student Feedback For Theory</th>
				</tr>
				<?php

				$sql1="SELECT * FROM part_b_cat_1_cte WHERE formId='$formId'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>=1)
				{
					$data_doc=array();
					while($row1=mysqli_fetch_assoc($result1))
					{
						$ctecourse=$row1['ctecourse'];
						$ctetyprlpt=$row1['ctetyprlpt'];
						$cteugpg=$row1['cteugpg'];
						$cteclasssemester=$row1['cteclasssemester'];
						$ctehrsweek=$row1['ctehrsweek'];
						$ctehrsengaged=$row1['ctehrsengaged'];
						$ctemaxhrs=$row1['ctemaxhrs'];
						$ctec=$row1['ctec'];
						$ctefbk=$row1['ctefbk'];

						$srno=1;
						?>
						<tr>
						    <td style="font-size: 18px"><?php echo $srno; ?></td>
						    <td style="font-size: 18px"><?php echo $ctecourse; ?></td>
						    <td style="font-size: 18px"><?php echo $ctetyprlpt; ?></td>
						    <td style="font-size: 18px"><?php echo $cteugpg; ?></td>
						    <td style="font-size: 18px"><?php echo $cteclasssemester; ?></td>
						    <td style="font-size: 18px"><?php echo $ctehrsweek; ?></td>
						    <td style="font-size: 18px"><?php echo $ctehrsengaged; ?></td>
						    <td style="font-size: 18px"><?php echo $ctemaxhrs; ?></td>
						    <td style="font-size: 18px"><?php echo $ctec; ?></td>
						    <td style="font-size: 18px"><?php echo $ctefbk; ?></td>
					  	</tr>
						<?php
						$srno+=1;
					}
				}

				?>
			 	
		</table>

		<div class="row">
			<div class="col-md-4">
				<label class="col-form-label" style="font-size: 22px"><b>*Max hours(B)=(Hrs./week)*(15)</b></label>
			</div>
			<div class="col-md-5" >
    			<div class="form-group row justify-content-center">
    				<div class="col-6 text-right" style="margin:0;padding:0;padding-right: 10px">
    					<label class="col-form-label" style="font-size: 22px"><b>Average of C(AVC) :</b></label>
    				</div>
					  
					<div class="col-3" style="margin:0;padding:0">
					   <p class="col-form-label" style="font-size: 22px"><?php echo $avg_c; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-3">
    			<div class="form-group row justify-content-center">
    				<div class="col-6 text-right" style="margin:0;padding:0;padding-right: 10px">
    					<label class="col-form-label" style="font-size: 22px"><b>Total of C :</b></label>
    				</div>
					  
					<div class="col-4" style="margin:0;padding:0;padding-right:10px">
					   <p class="col-form-label" style="font-size: 22px"><?php echo $total_c; ?></p>
					</div>
				</div>							
    		</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-3 offset-md-9">
				<label class="col-form-label"><b>PI 1 = Data out of 40</b></label>
			</div>
		</div> -->

		<div class="row">
			<div class="col">
				<div class="col-md-12 text-left" style="border: 1px solid #b7b7b7"><br>
					<p style="font-size: 22px">Classes Taken (Max.40 for 90%-100% performance, and proportionate score upto 75% performance below which no score may be given. <br> * If (AVC)*100 is 90%-100% then PI 1=40 <br> * If (AVC)*100>75% then PI 1=((AVC)*40) <br>* If (AVC)*100 < 75 then PI 1=0)</p>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-12 text-left">
				<p style="font-size: 22px"><b>Examination Duties Assigned and Performed (Max. PI: 40)</b></p>
			</div>
		</div>

		<table class="table table-bordered table-hover">
			<thead>
				<th colspan="4" style="text-align: center;font-size: 22px"><b>ODD SEMESTER</b></th>
			</thead>
				<tr>
					<th class="text-center" style="font-size: 22px">Sr.No</th>
					<th class="text-center" style="font-size: 22px">Type of Examination Duties</th>
					<th class="text-center" style="font-size: 22px">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
					<th class="text-center" style="font-size: 22px">Extent to which carried out (%) (Max.100%) (A)</th>
				</tr>
			<tr>
			    <td style="font-size: 22px">1</td>
			    <td style="font-size: 22px">Paper Setting Test 1</td>
			    <td style="font-size: 22px"><?php echo $odpstest1; ?></td>
			    <td style="font-size: 22px"><?php echo $oepstest1; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">2</td>
			    <td style="font-size: 22px">Paper Setting Test 2</td>
			    <td style="font-size: 22px"><?php echo $odpstest2; ?></td>
			    <td style="font-size: 22px"><?php echo $oepstest2; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">3</td>
			    <td style="font-size: 22px">Test 1 invigilation</td>
			    <td style="font-size: 22px"><?php echo $odtest1in; ?></td>
			    <td style="font-size: 22px"><?php echo $oetest1in; ?></td>		  	
			</tr>
		  	<tr>
			    <td style="font-size: 22px">4</td>
			    <td style="font-size: 22px">Test 2 invigilation</td>
			    <td style="font-size: 22px"><?php echo $odtest2in; ?></td>
			    <td style="font-size: 22px"><?php echo $oetest2in; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">5</td>
			    <td style="font-size: 22px">Test 1 paper assessment</td>
			    <td style="font-size: 22px"><?php echo $odtest1ass; ?></td>
			    <td style="font-size: 22px"><?php echo $oetest1ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">6</td>
			    <td style="font-size: 22px">Test 2 paper assessment</td>
			    <td style="font-size: 22px"><?php echo $odtest2ass; ?></td>
			    <td style="font-size: 22px"><?php echo $oetest2ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">7</td>
			    <td style="font-size: 22px">ESE Supervisor</td>
			    <td style="font-size: 22px"><?php echo $odesesup; ?></td>
			    <td style="font-size: 22px"><?php echo $oeesesup; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">8</td>
			    <td style="font-size: 22px">ESE paper setting</td>
			    <td style="font-size: 22px"><?php echo $odeseps; ?></td>
			    <td style="font-size: 22px"><?php echo $oeeseps; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">9</td>
			    <td style="font-size: 22px">ESE invigilation/Squad team member</td>
			    <td style="font-size: 22px"><?php echo $odesein; ?></td>
			    <td style="font-size: 22px"><?php echo $oeesein; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">10</td>
			    <td style="font-size: 22px">ESE Theory paper assessment</td>
			    <td style="font-size: 22px"><?php echo $odeseth; ?></td>
			    <td style="font-size: 22px"><?php echo $oeeseth; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">11</td>
			    <td style="font-size: 22px">ESE Practical/oral examination</td>
			    <td style="font-size: 22px"><?php echo $odesepo; ?></td>
			    <td style="font-size: 22px"><?php echo $oeesepo; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">12</td>
			    <td style="font-size: 22px">ESE re-assessment</td>
			    <td style="font-size: 22px"><?php echo $odesere_ass; ?></td>
			    <td style="font-size: 22px"><?php echo $oeesere_ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">13</td>
			    <td style="font-size: 22px">Proof reading</td>
			    <td style="font-size: 22px"><?php echo $odproofr; ?></td>
			    <td style="font-size: 22px"><?php echo $oeproofr; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">14</td>
			    <td style="font-size: 22px">Open day</td>
			    <td style="font-size: 22px"><?php echo $odopenday; ?></td>
			    <td style="font-size: 22px"><?php echo $oeopenday; ?></td>
		  	</tr>
		</table>


		<table class="table table-bordered table-hover">
			<thead>
				<th colspan="4" style="text-align: center;font-size: 22px">EVEN SEMESTER</th>
			</thead>
			<tr>
				<th class="text-center" style="font-size: 22px">Sr.No</th>
				<th class="text-center" style="font-size: 22px">Type of Examination Duties</th>
				<th class="text-center" style="font-size: 22px">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
				<th class="text-center" style="font-size: 22px">Extent to which carried out (%) (Max.100%) (A)</th>
			</tr>
			<tr>
			    <td style="font-size: 22px">1</td>
			    <td style="font-size: 22px">Paper Setting Test 1</td>
			    <td style="font-size: 22px"><?php echo $edpstest1; ?></td>
			    <td style="font-size: 22px"><?php echo $eepstest1; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">2</td>
			    <td style="font-size: 22px">Paper Setting Test 2</td>
			    <td style="font-size: 22px"><?php echo $edpstest2; ?></td>
			    <td style="font-size: 22px"><?php echo $eepstest2; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">3</td>
			    <td style="font-size: 22px">Test 1 invigilation</td>
			    <td style="font-size: 22px"><?php echo $edtest1in; ?></td>
			    <td style="font-size: 22px"><?php echo $eetest1in; ?></td>		  	
			</tr>
		  	<tr>
			    <td style="font-size: 22px">4</td>
			    <td style="font-size: 22px">Test 2 invigilation</td>
			    <td style="font-size: 22px"><?php echo $edtest2in; ?></td>
			    <td style="font-size: 22px"><?php echo $eetest2in; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">5</td>
			    <td style="font-size: 22px">Test 1 paper assessment</td>
			    <td style="font-size: 22px"><?php echo $edtest1ass; ?></td>
			    <td style="font-size: 22px"><?php echo $eetest1ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">6</td>
			    <td style="font-size: 22px">Test 2 paper assessment</td>
			    <td style="font-size: 22px"><?php echo $edtest2ass; ?></td>
			    <td style="font-size: 22px"><?php echo $eetest2ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">7</td>
			    <td style="font-size: 22px">ESE Supervisor</td>
			    <td style="font-size: 22px"><?php echo $edesesup; ?></td>
			    <td style="font-size: 22px"><?php echo $eeesesup; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">8</td>
			    <td style="font-size: 22px">ESE paper setting</td>
			    <td style="font-size: 22px"><?php echo $edeseps; ?></td>
			    <td style="font-size: 22px"><?php echo $eeeseps; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">9</td>
			    <td style="font-size: 22px">ESE invigilation/Squad team member</td>
			    <td style="font-size: 22px"><?php echo $edesein; ?></td>
			    <td style="font-size: 22px"><?php echo $eeesein; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">10</td>
			    <td style="font-size: 22px">ESE Theory paper assessment</td>
			    <td style="font-size: 22px"><?php echo $edeseth; ?></td>
			    <td style="font-size: 22px"><?php echo $eeeseth; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">11</td>
			    <td style="font-size: 22px">ESE Practical/oral examination</td>
			    <td style="font-size: 22px"><?php echo $edesepo; ?></td>
			    <td style="font-size: 22px"><?php echo $eeesepo; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">12</td>
			    <td style="font-size: 22px">ESE re-assessment</td>
			    <td style="font-size: 22px"><?php echo $edesere_ass; ?></td>
			    <td style="font-size: 22px"><?php echo $eeesere_ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">13</td>
			    <td style="font-size: 22px">Proof reading</td>
			    <td style="font-size: 22px"><?php echo $edproofr; ?></td>
			    <td style="font-size: 22px"><?php echo $eeproofr; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">14</td>
			    <td style="font-size: 22px">Open day</td>
			    <td style="font-size: 22px"><?php echo $edopenday; ?></td>
			    <td style="font-size: 22px"><?php echo $eeopenday; ?></td>
		  	</tr>
		</table>

		<div class="row">
			<div class="col-md-12">
    			<div class="form-group row justify-content-center">
    				<div class="col-6 text-right" style="padding:0">
    					<label class="col-form-label" style="font-size: 22px"><b>Average of A in % =</b></label>
    				</div>
					  
					<div class="col-6">
					   <p class="col-form-label" style="font-size: 22px"><?php echo $avg_ap; ?></p>
					</div>
				</div>							
    		</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-12">
				<p class="col-form-label" style="text-align: right"><b>PI2 = (Average A in % * 40)/100 = Data out of 40</b></p>
				</label>
			</div>
		</div><br> -->

		<table class="table table-bordered table-hover">
			<thead>
				<th colspan="3" style="font-size: 22px">Details of additional resource provided to the students to enrich course content/syllabus (Max. PI=10)</th>
			</thead>
			<?php

			$sql1="SELECT * FROM part_b_cat_1_dar WHERE formId='$formId'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>=1)
			{
				$data_doc=array();
				while($row1=mysqli_fetch_assoc($result1))
				{
					$dara=$row1['dara'];
					$darb=$row1['darb'];
					$srno=1;
					?>
					<tr>
					    <td style="width: 5%"><?php echo $srno; ?></td>
					    <td style="font-size: 22px"><?php echo $dara; ?></td>
					    <td style="font-size: 22px"><?php echo $darb; ?></td>
				  	</tr>
					<?php
					$srno+=1;
				}
			}

			?>
		</table>

		<div class="row">
			<div class="col-md-6 text-left">
				<label class="col-form-label" style="font-size: 22px">* 2 marks for each compliance</label>
			</div>
			<!-- <div class="col-md-6">
				<p class="col-form-label" style="text-align: right"><b>PI 3 = Data out of 10</b></p>
			</div> -->
		</div><br>
		
		<table class="table table-bordered table-hover" id="tab_logic1">
			<thead>
				<th colspan="2" style="font-size: 22px">Use of Participatory and innovative Teaching-Learning Methodologies (Max. PI=10)</th>
				<th style="font-size: 22px">Description</th>
				<!-- <th>Attachments</th> -->
			</thead>
			<tr>
			    <td style="font-size: 22px">1</td>
				<td style="font-size: 22px">Problem based learning, case studies, group discussions, activity based learning etc.</td>
				<td style="width: 50%;font-size: 22px"><?php echo $dpstest1; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">2</td>
				<td style="font-size: 22px">Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board</td>
				<td style="width: 50%;font-size: 22px"><?php echo $dpstest2; ?></td>
		  	</tr>
			<tr>
			    <td style="font-size: 22px">3</td>
				<td style="font-size: 22px">Developing and imparting Remedial / Bridge Courses</td>
				<td style="width: 50%;font-size: 22px"><?php echo $dtest1in; ?></td>
		  	</tr>	
		  	<tr>
			    <td style="font-size: 22px">4</td>
				<td style="font-size: 22px">Developing and imparting soft skills / communication skills / personality / development courses / modules</td>
				<td style="width: 50%;font-size: 22px"><?php echo $dtest2in; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">5</td>
				<td style="font-size: 22px">Developing and imparting specialized teaching-learning programmes in physical education, library; innovative compositions and creations in music, performing and visual arts and other tradition areas</td>
				<td style="width: 50%;font-size: 22px"><?php echo $dtest1ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">6</td>
				<td style="font-size: 22px">Audit courses taken (given name/semester/term)</td>
				<td style="width: 50%;font-size: 22px"><?php echo $dtest2ass; ?></td>
		  	</tr>
		  	<tr>
			    <td style="font-size: 22px">7</td>
				<td style="font-size: 22px">Other:</td>
				<td style="width: 50%;font-size: 22px"><?php echo $deseps; ?></td>
		  	</tr>		  	

		</table>

		<div class="row">
			<div class="col-md-6 text-left">
				<label class="col-form-label" style="font-size: 22px">* 2 marks for each compliance</label>
			</div>
			<!-- <div class="col-md-6">
				<p class="col-form-label" style="text-align: right"><b>PI 4 = Data out of 10</b></p>
			</div> -->
		</div>

		<!-- <div class="row">
			<div class="col-md-12 text-center">
				<label class="col-form-label"><b>Teaching and Learning Total = PI1 + PI2 + PI3 + PI4 = Data	out of 100</b></label>
			</div>
		</div>
 -->
		<hr>

		<div class="row">
			<div class="col-md-12">
				<p style="font-size: 22px;margin-top: 10px"><b>Category II: Co-curricular and administrative activities done in college (Max. PI=100)</b></p>
			</div>
		</div>

		<table>
			<thead>
				<th colspan="3" style="text-align: center;font-size: 22px">Administrative Post</th>
			</thead>
		     	
			<tr>
				<th class="text-center" style="font-size: 22px">Sr.No</th>
				<th class="text-center" style="font-size: 22px">Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD/<br>Type of Activity</th>
				<th class="text-center" style="font-size: 22px">Role</th>
			</tr>
			<?php

			$sql1="SELECT * FROM part_b_cat_2_ha WHERE formId='$formId'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>=1)
			{
				$data_doc=array();
				while($row1=mysqli_fetch_assoc($result1))
				{
					$ha=$row1['ha'];
					$hb=$row1['hb'];
					
					$srno=1;
					?>
					<tr>
						<td style="font-size: 22px"><?php echo $srno; ?></td>
						<td style="font-size: 22px"><?php echo $ha; ?></td>
						<td style="font-size: 22px"><?php echo $hb; ?></td>
					</tr>
					<?php
					$srno+=1;
				}
			}

			?>			
		</table><br>

		<div class="row">
			<div class="col-md-12 text-left">
				<p style="font-size: 22px">* For HOD/Dean/Vice Principal 40 PI <br> * For Associate HOD/NBA & NAAC co-ordinator/IQAC co-ordinator/Purchase Committee member 20 PI</p>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-12">
				<p style="text-align: right"><b>PII 1 = Data</b></p>
			</div>
		</div> -->

		<table>
			<thead>
				<th colspan="3" style="text-align: center;font-size: 22px">Activities</th>
			</thead>
			<tr>
				<th class="text-center" style="font-size: 22px">Sr.No</th>
				<th class="text-center" style="font-size: 22px">Extension, Co-Curricular and Field based activities / internships in college<br> Type of Activity</th>
				<th class="text-center" style="font-size: 22px">Role</th>
			</tr>
			<?php

			$sql1="SELECT * FROM part_b_cat_2_act WHERE formId='$formId'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>=1)
			{
				$data_doc=array();
				while($row1=mysqli_fetch_assoc($result1))
				{
					$ea=$row1['ea'];
					$eb=$row1['eb'];
					
					$srno=1;
					?>
					<tr>
						<td style="font-size: 22px"><?php echo $srno; ?></td>
						<td style="font-size: 22px"><?php echo $ea; ?></td>
						<td style="font-size: 22px"><?php echo $eb; ?></td>
					</tr>
					<?php
					$srno+=1;
				}
			}
			?>
		</table><br>

		<div class="row">
			<div class="col-md-12 text-left">
				<p style="font-size: 22px">* 5 Marks for each compliance. Max.20</p>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-12">
				<p style="text-align: right;"><b>PII 2 = Data</b></p>
			</div>
		</div> -->

		<table>
			<thead>						     	
				<tr>
					<th class="text-center" style="font-size: 22px">Sr.No</th>
					<th class="text-center" style="font-size: 22px">Extra-curricular and social activities in college<br> Type of Activity</th>
					<th class="text-center" style="font-size: 22px">Role</th>
				</tr>
				<?php

				$sql1="SELECT * FROM part_b_cat_2_exc WHERE formId='$formId'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>=1)
				{
					$data_doc=array();
					while($row1=mysqli_fetch_assoc($result1))
					{
						$eca=$row1['eca'];
						$ecb=$row1['ecb'];
						
						$srno=1;
						?>
						<tr>
							<td style="font-size: 22px"><?php echo $srno; ?></td>
							<td style="font-size: 22px"><?php echo $eca; ?></td>
							<td style="font-size: 22px"><?php echo $ecb; ?></td>
						</tr>
						<?php
						$srno+=1;
					}
				}
				?>
			</thead>
		</table><br>

		<div class="row">
			<div class="col-md-12 text-left">
				<p style="font-size: 22px">* 5 Marks for each compliance. Max.20</p>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-12">
				<p style="text-align: right;"><b>PII 3 = Data</b></p>
			</div>
		</div> -->

		<table>
			<thead>						     	
				<tr>
					<th class="text-center" style="font-size: 22px">Sr.No</th>
					<th class="text-center" style="font-size: 22px">College administration/organization member/committee member/NBA/NAAC of college: <br> Type of Activity</th>
					<th class="text-center" style="font-size: 22px">Role</th>
				</tr>
				<?php

				$sql1="SELECT * FROM part_b_cat_2_c WHERE formId='$formId'";
				$result1=mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>=1)
				{
					while($row1=mysqli_fetch_assoc($result1))
					{
						$ca=$row1['ca'];
						$cb=$row1['cb'];
						
						$srno=1;
						?>
						<tr>
							<td style="font-size: 22px"><?php echo $srno; ?></td>
							<td style="font-size: 22px"><?php echo $ca; ?></td>
							<td style="font-size: 22px"><?php echo $cb; ?></td>
						</tr>
						<?php
						$srno+=1;
					}
				}
				?>
			</thead>
		</table><br>

		<div class="row">
			<div class="col-md-12 text-left">
				<p style="font-size: 22px">* 5 Marks for each compliance. Max.20</p>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-md-12">
				<p style="text-align: right;"><b>PII 4 = Data</b></p>
			</div>
		</div> -->

		<!-- <div class="row">
			<div class="col-md-12 text-center">
				<p><b>Co-Curricular and administrative activities Total = PII1+PII2+PII3+PII4 = Data out of 100</b></p>
			</div>
		</div> -->

		<hr>

		<div class="row">
			<div class="col-md-12">
				<p style="font-size: 22px;margin-top: 10px"><b>Category III: Publication, research/thesis supervisor,project guide,research,consultancy and intellectual properties (Max.PI=175)</b></p>
			</div>
		</div>

		<?php

		$sql1="SELECT * FROM part_b_cat_3_pp WHERE formId='$formId'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>=1)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
				$pptitle=$row1['pptitle'];
				$ppnpr=$row1['ppnpr'];
				$ppisbn=$row1['ppisbn'];
				$ppif=$row1['ppif'];
				$customRadioInline1=$row1['customRadioInline1'];
				$ppnca=$row1['ppnca'];

				?>
				<div class="container" style="border: 1px solid #c8c8c8"><br>
					<div class="row">
						<div class="col-md-12 text-left">
							<p style="text-align: center;font-size: 22px"><b>Published Papers In Peer Reviewed Journals (Max. PI=20)</b></p>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">
					<div class="row">
						<div class="col-md-12 text-left">
				    		<div class="form-inline my-2">
				    			<p style="font-size: 22px">Title with page no.: </p>
				    			<p style="font-size: 22px"><?php echo $pptitle; ?></p>						
							</div>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px">Name of peer review Journals (not online journals)</p>
								<p style="font-size: 22px"><?php echo $ppnpr; ?></p>
							</div>					
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px">ISSN/ISBN No.: </p>
								<p style="font-size: 22px"><?php echo $ppisbn; ?></p>
							</div>					
						</div>

						<div class="col-md-6 text-right">
							<div class="form-inline my-2">
								<p style="font-size: 22px">Impact factor: </p>
								<p style="font-size: 22px"><?php echo $ppif; ?></p>
							</div>						
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-2 text-left">
							<p style="font-size: 22px">Whether you are main author: </p>
						</div>
				    	<div class="col-md-3 text-left">
							<p style="font-size: 22px"><?php echo $customRadioInline1; ?></p>
						</div>
						<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<div class="col-md-3 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px">No. of co-author: </p>
								<p style="font-size: 22px"><?php echo $ppnca; ?></p>	
							</div>
						</div>
						<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-10 text-left">
							<p style="font-size: 22px">* 20 marks for peer review journal first author <br>* 10 marks for second author</p>
						</div>
					</div>

				</div>
				<?php
			}
		}

		?>
		<?php

		$sql1="SELECT * FROM part_b_cat_3_ppic WHERE formId='$formId'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>=1)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
				$pptitleic=$row1['pptitleic'];
				$ppnpric=$row1['ppnpric'];
				$ppisbnic=$row1['ppisbnic'];
				$ppific=$row1['ppific'];
				$customRadioInline1ic=$row1['customRadioInline1ic'];
				$ppncaic=$row1['ppncaic'];

				?>
				<br>
				<div class="container" style="border: 1px solid #c8c8c8"><br>
					<div class="row">
						<div class="col-md-12 text-left">
							<p style="text-align: center;font-size: 22px"><b>Published Papers in International/National Conference Abroad (Max.PI=15)</b></p>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
				    		<div class="form-inline my-2">
				    			<p style="font-size: 22px"><b>Title with page no.:</b></p>
				    			<p style="font-size: 22px"><?php echo $pptitleic; ?></p>						
							</div>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Name of International Conference held Abroad:</b></p>
								<p style="font-size: 22px"><?php echo $ppnpric; ?></p>
							</div>					
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>ISSN/ISBN No.:</b></p>
								<p style="font-size: 22px"><?php echo $ppisbnic; ?></p>
							</div>					
						</div>

						<div class="col-md-6 text-right">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Impact factor:</b></p>
								<p style="font-size: 22px"><?php echo $ppific; ?></p>
							</div>						
						</div>
					</div>		
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-2 text-left">
							<p style="font-size: 22px"><b>Whether you are main author:</b></p>
						</div>
				    	<div class="col-md-3 text-left">
				    		<p style="font-size: 22px"><?php echo $customRadioInline1ic; ?></p>
						</div>
						<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<div class="col-md-3 text-left">
							<div class="form-inline my-2">
								<p class="mr-sm-2" style="font-size: 22px"><b>No. of co-author:</b></p>
								<p style="font-size: 22px"><?php echo $ppncaic; ?></p>
							</div>
						</div>
							<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<!-- <div class="col-md-2 text-left">
							<div class="form-inline my-2">
								<p class="mr-sm-2">PI=</p>
								<input type="text" name="pppiic[]" id="pppiic1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
							</div>
						</div> -->						
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-10 text-left">
							<p style="font-size: 22px">* 15 marks for International conference for first author <br>* 08 marks for second author</p>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>

		<?php

		$sql1="SELECT * FROM part_b_cat_3_ppinc WHERE formId='$formId'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>=1)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
				$pptitleinc=$row1['pptitleinc'];
				$ppnprinc=$row1['ppnprinc'];
				$ppisbnpinc=$row1['ppisbnpinc'];
				$ppifinc=$row1['ppifinc'];
				$customRadioInline1inc=$row1['customRadioInline1inc'];
				$ppncainc=$row1['ppncainc'];

				?>
				<br>
				<div class="container" style="border: 1px solid #c8c8c8"><br>
					<div class="row">
						<div class="col-md-12 text-left">
							<p style="text-align: center;font-size: 22px"><b>Published Papers in International/National Conference in India (Max.PI=10)</b></p>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
				    		<div class="form-inline my-2">
				    			<p style="font-size: 22px"><b>Title with page no.:</b></p>
				    			<p style="font-size: 22px"><?php echo $pptitleinc; ?></p>						
							</div>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Name of International Conference held in India:</b></p>
								<p style="font-size: 22px"><?php echo $ppnprinc; ?></p>
							</div>					
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>ISSN/ISBN No.:</b></p>
								<p style="font-size: 22px"><?php echo $ppisbnpinc; ?></p>
							</div>					
						</div>

						<div class="col-md-6 text-right">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Impact factor:</b></p>
								<p style="font-size: 22px"><?php echo $ppifinc; ?></p>
							</div>						
						</div>
					</div>		
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-2 text-left">
							<p style="font-size: 22px"><b>Whether you are main author:</b></p>
						</div>
				    	<div class="col-md-3 text-left">
							<p style="font-size: 22px"><?php echo $customRadioInline1inc; ?></p>
						</div>
						<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<div class="col-md-3 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>No. of co-author:</b></p>
								<p style="font-size: 22px"><?php echo $ppncainc; ?></p>
							</div>
						</div>
							<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<!-- <div class="col-md-2 text-left">
							<div class="form-inline my-2">
								<label class="mr-sm-2">PI=</label>
								<input type="text" name="pppiinc[]" id="pppiinc1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
							</div>
						</div> -->						
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-10 text-left">
							<p style="font-size: 22px">* 10 marks for International conference for first author <br>* 05 marks for second author</p>
						</div>				
					</div>
				</div>

				<?php
				
			}
		}

		?>

		<?php

		$sql1="SELECT * FROM part_b_cat_3_bk WHERE formId='$formId'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>=1)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
				$pptitlebk=$row1['pptitlebk'];
				$ppnprbk=$row1['ppnprbk'];
				$ppisbnbk=$row1['ppisbnbk'];
				$ppdatebk=$row1['ppdatebk'];
				$ppifbk=$row1['ppifbk'];
				$customRadioInline1bk=$row1['customRadioInline1bk'];
				$ppncabk=$row1['ppncabk'];

				?>
				<br>
				<div class="container" style="border: 1px solid #c8c8c8"><br>
					<div class="row">
						<div class="col-md-12 text-left">
							<p style="text-align: center;font-size: 22px"><b>Books/Articles/Chapters published in Books (Max.PI=15)</b></p>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
				    		<div class="form-inline my-2">
				    			<p style="font-size: 22px"><b>Title with page no.:</b></p>
				    			<p style="font-size: 22px"><?php echo $pptitlebk; ?></p>					
							</div>
						</div>
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-12 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Publisher:</b></p>
								<p style="font-size: 22px"><?php echo $ppnprbk; ?></p>
							</div>					
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>ISSN/ISBN No.:</b></p>
								<p style="font-size: 22px"><?php echo $ppisbnbk; ?></p>
							</div>					
						</div>

						<div class="col-md-6 text-right">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Date of Publication:</b></p>
								<p style="font-size: 22px"><?php echo $ppdatebk; ?></p>
							</div>						
						</div>
					</div>		
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">

						<div class="col-md-5 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px"><b>Impact factor:</b></p>
								<p style="font-size: 22px"><?php echo $ppifbk; ?></p>
							</div>						
						</div>

						<div class="col-md-2 text-left">
							<p style="font-size: 22px"><b>Whether you are main author:</b></p>
						</div>
				    	<div class="col-md-3">
							<p style="font-size: 22px"><?php echo $customRadioInline1bk; ?></p>
						</div>
						<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<div class="col-md-3 text-left">
							<div class="form-inline my-2">
								<p style="font-size: 22px">No. of co-author</p>
								<p style="font-size: 22px"><?php echo $ppncabk; ?></p>
							</div>
						</div>
							<div class="col-md-1">
							<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
							</div>
						</div>
						<!-- <div class="col-md-2 text-left">
							<div class="form-inline my-2">
								<p class="mr-sm-2">PI=</p>
								<input type="text" name="pppibk[]" id="pppibk1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
							</div>
						</div> -->					
					</div>
					<hr style="border: 0.5px solid #c8c8c8">

					<div class="row">
						<div class="col-md-10 text-left">
							<p style="font-size: 22px">*15 marks for first author <br>* 08 marks for co-author</p>
						</div>
					</div>
				</div>
				<?php
			}
		}

		?>	

		<?php

		$sql1="SELECT * FROM part_b_cat_3 WHERE formId='$formId'";
		$result1=mysqli_query($conn,$sql1);
		$row=mysqli_fetch_assoc($result1);

		$phdne=$row['phdne'];
		$phdts=$row['phdts'];
		$phdda=$row['phdda'];
		$mtechne=$row['mtechne'];
		$mtechts=$row['mtechts'];
		$mtechda=$row['mtechda'];
		$btechne=$row['btechne'];
		$btechts=$row['btechts'];
		$btechda=$row['btechda'];

		?>
		<br>
		<div class="container">
	    	<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="6" style="font-size: 22px">Research/thesis supervisor and project guide (Max.PI=40)</th>
						</thead>
						     	
							<tr>
								<th class="text-center" style="font-size: 22px">Degree</th>
								<th class="text-center" style="font-size: 22px">Number Enrolled</th>
								<th class="text-center" style="font-size: 22px">Thesis submitted</th>
								<th class="text-center" style="font-size: 22px">No. of Degree Awarded</th>
							</tr>
						<tbody>
							<tr id='addr90'>
								<td style="font-size: 22px">Ph.D</td>
								<td>
									<p style="font-size: 22px"><?php echo $phdne; ?></p>
								</td>
								<td>
									<p style="font-size: 22px"><?php echo $phdts; ?></p>
								</td>
								<td>
									<p style="font-size: 22px"><?php echo $phdda; ?></p>
								</td>								
							</tr>
		                    <tr id='addr91'>
		                    	<td style="font-size: 22px">M.Tech</td>
								<td>
									<p style="font-size: 22px"><?php echo $mtechne; ?></p>
								</td>
								<td>
									<p style="font-size: 22px"><?php echo $mtechts; ?></p>
								</td>
								<td>
									<p style="font-size: 22px"><?php echo $mtechda; ?></p>
								</td>								
		                    </tr>
		                    <tr id='addr92'>
		                    	<td style="font-size: 22px">B.Tech <br>(Number of groups)</td>
								<td>
									<p style="font-size: 22px"><?php echo $btechne; ?></p>
								</td>
								<td>
									<p style="font-size: 22px"><?php echo $btechts; ?></p>
								</td>
								<td>
									<p style="font-size: 22px"><?php echo $btechda; ?></p>
								</td>
		                    </tr>
						</tbody>
						<thead> 
							<th colspan="6" style="text-align: left;font-size: 22px">* 10 marks for awarded / 8 marks for thesis submitted / 6 marks for enrolled Ph.D students as a guide during academic year.<br>* 8 marks for awarded / 6 marks for thesis submitted / 4 marks for enrolled M.Tech students as guide during academic year.<br>* 6 marks for awarded / 4 marks for thesis submitted / 2 marks per enrolled B.Tech student groups as a guide during academic year.<br>* For co-guide the marks will be half.</th>
						</thead>					
					</table>
					

					</div>
				</div>
			</div>
		</div><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic8">
							<thead>
								<th colspan="6" style="font-size: 22px">Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval (Max. PI=15)</th>
							</thead>
						     	
							<tr>
								<th class="text-center" style="font-size: 22px">Sr.No</th>
								<th class="text-center" style="font-size: 22px">Title</th>
								<th class="text-center" style="font-size: 22px">Agency</th>
								<th class="text-center" style="font-size: 22px">Date of Submission</th>
								<th class="text-center" style="font-size: 22px">Grant/Amount Mobilized (Rs.)</th>
							</tr>
							<tbody>
								<?php

								$sql1="SELECT * FROM part_b_cat_3_res WHERE formId='$formId'";
								$result1=mysqli_query($conn,$sql1);
								if(mysqli_num_rows($result1)>=1)
								{
									while($row1=mysqli_fetch_assoc($result1))
									{
										$ta=$row1['ta'];
										$ab=$row1['ab'];
										$dc=$row1['dc'];
										$gd=$row1['gd'];

										$srno=1;
										?>
										<tr>
											<td style="font-size: 22px"><?php echo $srno; ?></td>
											<td style="font-size: 22px"><?php echo $ta; ?></td>
											<td style="font-size: 22px"><?php echo $ab; ?></td>
											<td style="font-size: 22px"><?php echo $dc; ?></td>
											<td style="font-size: 22px"><?php echo $gd; ?></td>									
										</tr>
										<?php
										$srno+=1;
									}
								}

								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic8">
							<thead>
								<th colspan="6" style="font-size: 22px">Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete (Max. PI=15)</th>
							</thead>
						     	
							<tr>
								<th class="text-center" style="font-size: 22px">Sr.No</th>
								<th class="text-center" style="font-size: 22px">Title</th>
								<th class="text-center" style="font-size: 22px">Agency</th>
								<th class="text-center" style="font-size: 22px">Period in years</th>
								<th class="text-center" style="font-size: 22px">Grant/Amount Mobilized (Rs.)</th>
							</tr>
							<tbody>
								<?php

								$sql1="SELECT * FROM part_b_cat_3_ores WHERE formId='$formId'";
								$result1=mysqli_query($conn,$sql1);
								if(mysqli_num_rows($result1)>=1)
								{
									while($row1=mysqli_fetch_assoc($result1))
									{
										$tta=$row1['tta'];
										$aab=$row1['aab'];
										$ddc=$row1['ddc'];
										$ggd=$row1['ggd'];

										$srno=1;
										?>
										<tr>
											<td style="font-size: 22px"><?php echo $srno; ?></td>
											<td style="font-size: 22px"><?php echo $tta; ?></td>
											<td style="font-size: 22px"><?php echo $aab; ?></td>
											<td style="font-size: 22px"><?php echo $ddc; ?></td>
											<td style="font-size: 22px"><?php echo $ggd; ?></td>									
										</tr>
										<?php
										$srno+=1;
									}
								}

								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic8">
							<thead>
								<th colspan="6" style="font-size: 22px">Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019 (Max. PI=20) (Max. PI=20)</th>
							</thead>
						     	
							<tr>
								<th class="text-center" style="font-size: 22px">Sr.No</th>
								<th class="text-center" style="font-size: 22px">Title</th>
								<th class="text-center" style="font-size: 22px">Agency</th>
								<th class="text-center" style="font-size: 22px">Date of Completion</th>
								<th class="text-center" style="font-size: 22px">Grant/Amount Mobilized (Rs.)</th>
							</tr>
							<tbody>
								<?php

								$sql1="SELECT * FROM part_b_cat_3_cres WHERE formId='$formId'";
								$result1=mysqli_query($conn,$sql1);
								if(mysqli_num_rows($result1)>=1)
								{
									while($row1=mysqli_fetch_assoc($result1))
									{
										$tca=$row1['tca'];
										$acb=$row1['acb'];
										$dcc=$row1['dcc'];
										$gcd=$row1['gcd'];

										$srno=1;
										?>
										<tr>
											<td style="font-size: 22px"><?php echo $srno; ?></td>
											<td style="font-size: 22px"><?php echo $tca; ?></td>
											<td style="font-size: 22px"><?php echo $acb; ?></td>
											<td style="font-size: 22px"><?php echo $dcc; ?></td>
											<td style="font-size: 22px"><?php echo $gcd; ?></td>									
										</tr>
										<?php
										$srno+=1;
									}
								}

								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic8">
							<thead>
								<th colspan="6" style="font-size: 22px">Patent/Intellectual property filed/received (Max.PI=25)</th>
							</thead>
						     	
							<tr>
								<th class="text-center" style="font-size: 22px">Sr.No</th>
								<th class="text-center" style="font-size: 22px">Details of patent/intellectual property</th>
								<th class="text-center" style="font-size: 22px">Date of received/filed</th>
							</tr>
							<tbody>
								<?php

								$sql1="SELECT * FROM part_b_cat_3_pip WHERE formId='$formId'";
								$result1=mysqli_query($conn,$sql1);
								if(mysqli_num_rows($result1)>=1)
								{
									while($row1=mysqli_fetch_assoc($result1))
									{
										$dpi=$row1['dpi'];
										$drf=$row1['drf'];

										$srno=1;
										?>
										<tr>
											<td style="font-size: 22px"><?php echo $srno; ?></td>
											<td style="font-size: 22px"><?php echo $dpi; ?></td>
											<td style="font-size: 22px"><?php echo $drf; ?></td>								
										</tr>
										<?php
										$srno+=1;
									}
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
				<p style="font-size: 22px;margin-top: 10px"><b>Category IV: Curricular/Co-curricular/Administrative activities done outside college (Max. PI=75)</b></p>
			</div>
		</div>

		<table>
			<thead>
				<th colspan="4" style="text-align: center;font-size: 22px">Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college (Max.PI=30)</th>
			</thead>
		     	
			<tr>
				<th class="text-center" style="font-size: 22px">Sr.No</th>
				<th class="text-center" style="font-size: 22px">Details of Programme</th>
				<th class="text-center" style="font-size: 22px">Date</th>
				<th class="text-center" style="font-size: 22px">Organized by</th>
			</tr>
			<?php

			$sql1="SELECT * FROM part_b_cat_4_sem WHERE formId='$formId'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>=1)
			{				
				while($row1=mysqli_fetch_assoc($result1))
				{
					$cativ_dp=$row1['cativ_dp'];
					$cativ_datee=$row1['cativ_datee'];
					$cativ_o=$row1['cativ_o'];

					$srno=1;
					?>
					<tr>
						<td style="text-align: center" style="font-size: 22px"><?php echo $srno; ?></td>
						<td style="font-size: 22px"><?php echo $cativ_dp; ?></td>
						<td style="font-size: 22px"><?php echo $cativ_datee; ?></td>
						<td style="font-size: 22px"><?php echo $cativ_o; ?></td>
					</tr>
					<?php
					$srno+=1;
				}
			}

			?>			
		</table><br>

		<div class="row">
			<div class="col-md-6 text-left">
				<p style="font-size: 22px">* 05 Marks for each at national level <br>* 10 marks for international level abroad</p>
			</div>
			<!-- <div class="col-md-6">
				<p class="col-form-label" style="text-align: right"><b>PI = Data</b></p>
			</div> -->
		</div><br>

		<table>
			<thead>
				<th colspan="4" style="text-align: center;font-size: 22px">Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college (Max. PI=30)</th>
			</thead>
		     	
			<tr>
				<th class="text-center" style="font-size: 22px">Sr.No</th>
				<th class="text-center" style="font-size: 22px">Details of Programme</th>
				<th class="text-center" style="font-size: 22px">Date</th>
				<th class="text-center" style="font-size: 22px">Organized by</th>
			</tr>
			<?php

			$sql1="SELECT * FROM part_b_cat_4_inv WHERE formId='$formId'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>=1)
			{				
				while($row1=mysqli_fetch_assoc($result1))
				{
					$cativ1_dp=$row1['cativ1_dp'];
					$cativ1_datee=$row1['cativ1_datee'];
					$cativ1_o=$row1['cativ1_o'];

					$srno=1;
					?>
					<tr>
						<td style="text-align: center;font-size: 22px"><?php echo $srno; ?></td>
						<td style="font-size: 22px"><?php echo $cativ1_dp; ?></td>
						<td style="font-size: 22px"><?php echo $cativ1_datee; ?></td>
						<td style="font-size: 22px"><?php echo $cativ1_o; ?></td>
					</tr>
					<?php
					$srno+=1;
				}
			}

			?>			
		</table><br>

		<div class="row">
			<div class="col-md-6 text-left">
				<p style="font-size: 22px">* 05 Marks for each at national level <br>* 10 marks for international level abroad</p>
			</div>
			<!-- <div class="col-md-6">
				<p style="text-align: right"><b>PI = Data</b></p>
			</div> -->
		</div><br>

		<table>
			<thead>
				<th colspan="4" style="text-align: center;font-size: 22px">Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned. (Max. PI=15)</th>
			</thead>
		     	
			<tr>
				<th class="text-center" style="font-size: 22px">Sr.No</th>
				<th class="text-center" style="font-size: 22px">Details of Programme</th>
				<th class="text-center" style="font-size: 22px">Extra Information (if any)</th>
			</tr>
			<?php

			$sql1="SELECT * FROM part_b_cat_4_creds WHERE formId='$formId'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>=1)
			{
				while($row1=mysqli_fetch_assoc($result1))
				{
					$cativ2_dp=$row1['cativ2_dp'];
					$cativ2=$row1['cativ2'];

					$srno=1;
					?>
					<tr>
						<td style="text-align: center" style="font-size: 22px"><?php echo $srno; ?></td>
						<td style="font-size: 22px"><?php echo $cativ2_dp; ?></td>
						<td style="font-size: 22px"><?php echo $cativ2; ?></td>
					</tr>
					<?php
					$srno+=1;
				}
			}

			?>
			
		</table><br>

		<div class="row">
			<div class="col-md-6 text-left">
				<p style="font-size: 22px">* 05 Marks for international / national credentials / activity / contribution not mentioned in application</p>
			</div>
			<!-- <div class="col-md-6">
				<p class="col-form-label" style="text-align: right"><b>PI = Data</b></p>
			</div> -->
		</div><br>


		<!-- <div class="row">
			<div class="col-md-12 text-center">
				<p><b>Category IV: PI = Data out of 75</b></p>
			</div>
		</div> -->
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<p class="text-center" style="font-size: 22px"><b>List of Enclosures</b></p>
				</div>
			</div>
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic4">
						    <tr>
								<th class="text-center" style="font-size: 22px">Sr. No.</th>
								<th class="text-center" style="font-size: 22px">Description</th>
								<!-- <th class="text-center">Attached File</th> -->
							</tr>				
							 
							<tbody>

								<?php

								// for($xx=$currentyear-1;$xx>=($currentyear-1);$xx--)
								// {

								$xx=$year;

								?>
									<?php

									$counter=1;

									?>

									<tr>
										<td style="font-size: 22px"><b>~</b></td>
										<td style="font-size: 22px"><b>Part B Category 1</b></td>
										<!-- <td><b>~</b></td> -->
									</tr>
									<?php

									$sqlxxx="SELECT id FROM part_b_table WHERE facultyId='$userId' AND year='$xx'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$formId=mysqli_real_escape_string($conn,$rowxxx['id']);	

									// echo $userId.','.$formId.','.$xx.'<br>';							

									// Part B
									// $sqlxxx="SELECT o1file,o2file,o3file,o4file,o5file,o6file,o7file,o8file,o9file,o10file,o11file,o12file,o13file,e1file,e2file,e3file,e4file,e5file,e6file,e7file,e8file,e9file,e10file,e11file,e12file,e13file,dps1file,dps2file,dps3file,dps4file, dps5file,dps6file,dps7file FROM part_b_cat_1 WHERE formId='$formId'";
									$sqlxxx="SELECT o1file,o2file,o3file,o4file,o5file,o6file,o7file,o8file,o9file,o10file,o11file,o12file,o13file,e1file,e2file,e3file,e4file,e5file,e6file,e7file,e8file,e9file,e10file,e11file,e12file,e13file,dps1file,dps2file,dps3file,dps4file, dps5file,dps6file,dps7file FROM part_b_cat_1 WHERE formId='$formId'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$o1file=mysqli_real_escape_string($conn,$rowxxx['o1file']);
									$o2file=mysqli_real_escape_string($conn,$rowxxx['o2file']);
									$o3file=mysqli_real_escape_string($conn,$rowxxx['o3file']);
									$o4file=mysqli_real_escape_string($conn,$rowxxx['o4file']);
									$o5file=mysqli_real_escape_string($conn,$rowxxx['o5file']);
									$o6file=mysqli_real_escape_string($conn,$rowxxx['o6file']);
									$o7file=mysqli_real_escape_string($conn,$rowxxx['o7file']);
									$o8file=mysqli_real_escape_string($conn,$rowxxx['o8file']);
									$o9file=mysqli_real_escape_string($conn,$rowxxx['o9file']);
									$o10file=mysqli_real_escape_string($conn,$rowxxx['o10file']);
									$o11file=mysqli_real_escape_string($conn,$rowxxx['o11file']);
									$o12file=mysqli_real_escape_string($conn,$rowxxx['o12file']);
									$o13file=mysqli_real_escape_string($conn,$rowxxx['o13file']);

									$e1file=mysqli_real_escape_string($conn,$rowxxx['e1file']);
									$e2file=mysqli_real_escape_string($conn,$rowxxx['e2file']);
									$e3file=mysqli_real_escape_string($conn,$rowxxx['e3file']);
									$e4file=mysqli_real_escape_string($conn,$rowxxx['e4file']);
									$e5file=mysqli_real_escape_string($conn,$rowxxx['e5file']);
									$e6file=mysqli_real_escape_string($conn,$rowxxx['e6file']);
									$e7file=mysqli_real_escape_string($conn,$rowxxx['e7file']);
									$e8file=mysqli_real_escape_string($conn,$rowxxx['e8file']);
									$e9file=mysqli_real_escape_string($conn,$rowxxx['e9file']);
									$e10file=mysqli_real_escape_string($conn,$rowxxx['e10file']);
									$e11file=mysqli_real_escape_string($conn,$rowxxx['e11file']);
									$e12file=mysqli_real_escape_string($conn,$rowxxx['e12file']);
									$e13file=mysqli_real_escape_string($conn,$rowxxx['e13file']);

									for ($x = 1; $x <= 13; $x++) {
										$file='o'.$x.'file';
										if($$file!='NAN' && $$file!='')
										{
										    ?>
										    <tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($$file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $$file; ?>" target="_blank">View File</a></td> -->
											</tr>
										    <?php
										    $counter+=1;
										}
									} 

									for ($x = 1; $x <= 13; $x++) {
										$file='e'.$x.'file';
										if($$file!='NAN' && $$file!='')
										{
										    ?>
										    <tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($$file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $$file; ?>" target="_blank">View File</a></td> -->
											</tr>
										    <?php
										    $counter+=1;
										}
									} 

									// part_b_cat_1_cte
									$sql="SELECT ctefile FROM part_b_cat_1_cte WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ctefile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_1_cto
									$sql="SELECT ctofile FROM part_b_cat_1_cto WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ctofile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_1_dar
									$sql="SELECT darfile FROM part_b_cat_1_dar WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['darfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									?>
									<tr>
										<td style="font-size: 22px"><b>~</b></td>
										<td style="font-size: 22px"><b>Part B Category 2</b></td>
										<!-- <td><b>~</b></td> -->
									</tr>
									<?php

									// part_b_cat_2_act
									$sql="SELECT efile FROM part_b_cat_2_act WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['efile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_2_c
									$sql="SELECT cfile FROM part_b_cat_2_c WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_2_exc
									$sql="SELECT ecfile FROM part_b_cat_2_exc WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ecfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_2_ha
									$sql="SELECT hfile FROM part_b_cat_2_ha WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['hfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									?>
									<tr>
										<td style="font-size: 22px"><b>~</b></td>
										<td style="font-size: 22px"><b>Part B Category 3</b></td>
										<!-- <td><b>~</b></td> -->
									</tr>
									<?php

									$sqlxxx="SELECT phdfile,mtechfile,btechfile FROM part_b_cat_3 WHERE formId='$formId'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$phdfile=mysqli_real_escape_string($conn,$rowxxx['phdfile']);
									$mtechfile=mysqli_real_escape_string($conn,$rowxxx['mtechfile']);
									$btechfile=mysqli_real_escape_string($conn,$rowxxx['btechfile']);

									?>
									<?php

									if($phdfile!='NAN' && $phdfile!='')
									{
										?>
										<tr>
											<td style="font-size: 22px"><?php echo $counter; ?></td>
											<td style="font-size: 22px"><?php echo basename($phdfile); ?></td>
											<!-- <td><a href="viewfile.php?location=<?php echo $phdfile; ?>" target="_blank">View File</a></td> -->
										</tr>
										<?php
									}
									if($mtechfile!='NAN' && $mtechfile!='')
									{
										?>									
										<tr>
											<td style="font-size: 22px"><?php echo $counter; ?></td>
											<td style="font-size: 22px"><?php echo basename($mtechfile); ?></td>
											<!-- <td><a href="viewfile.php?location=<?php echo $mtechfile; ?>" target="_blank">View File</a></td> -->
										</tr>
										<?php
									}
									if($btechfile!='NAN' && $btechfile!='')
									{
										?>
										<tr>
											<td style="font-size: 22px"><?php echo $counter; ?></td>
											<td style="font-size: 22px"><?php echo basename($btechfile); ?></td>
											<!-- <td><a href="viewfile.php?location=<?php echo $btechfile; ?>" target="_blank">View File</a></td> -->
										</tr>
										<?php
									}
									?>

									<?php

									// part_b_cat_3_pp
									$sql="SELECT ppfile FROM part_b_cat_3_pp WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ppfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_ppic
									$sql="SELECT pp1file FROM part_b_cat_3_ppic WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['pp1file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_ppinc
									$sql="SELECT pp2file FROM part_b_cat_3_ppinc WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['pp2file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_bk
									$sql="SELECT pp3file FROM part_b_cat_3_bk WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['pp3file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_res
									$sql="SELECT research1file FROM part_b_cat_3_res WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['research1file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_ores
									$sql="SELECT research2file FROM part_b_cat_3_ores WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['research2file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_cres
									$sql="SELECT research3file FROM part_b_cat_3_cres WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['research3file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_pip
									$sql="SELECT dfile FROM part_b_cat_3_pip WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['dfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									?>
									<tr>
										<td style="font-size: 22px"><b>~</b></td>
										<td style="font-size: 22px"><b>Part B Category 4</b></td>
										<!-- <td><b>~</b></td> -->
									</tr>
									<?php

									// part_b_cat_4_sem
									$sql="SELECT cativ1file FROM part_b_cat_4_sem WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cativ1file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_4_inv
									$sql="SELECT cativ2file FROM part_b_cat_4_inv WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cativ2file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_4_creds
									$sql="SELECT cativ3file FROM part_b_cat_4_creds WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cativ3file'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td style="font-size: 22px"><?php echo $counter; ?></td>
												<td style="font-size: 22px"><?php echo basename($file); ?></td>
												<!-- <td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td> -->
											</tr>
											<?php
											$counter+=1;
										}
									}



								//}//for loop ends

								?>
								<?php 
								/*
								$l=1;
								$flag=true;//flag to check if atleast one file has been previous;y uploaded or not..true means uploaded false means not uploaded

								$sqlxxx="SELECT id FROM summary_table WHERE facultyId='$userId' AND year='$currentyear'";
								$resultxxx=mysqli_query($conn,$sqlxxx);
								if(mysqli_num_rows($resultxxx)>0)
								{

									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$formId=mysqli_real_escape_string($conn,$rowxxx['id']);

									$sqlxx="SELECT ecs,papers FROM summary_hasr WHERE formId='$formId'";
									$resultxx=mysqli_query($conn,$sqlxx);
									if(mysqli_num_rows($resultxx)>0)
									{
										while($rowxx=mysqli_fetch_assoc($resultxx))
										{
											?>
											<tr id='addr5<?php echo $l-1; ?>'>
												<td id='hasr<?php echo $l; ?>'><?php echo $l; ?></td>
												<td>
												<input type="number" step="0.01" name='ecs[]' id='ecs<?php echo $l; ?>' class="form-control" value="<?php echo $rowxx['ecs']; ?>" maxlength="200" />
												</td>
												<td>
													<div class="custom-file">
										                <input type="file" class="custom-file-input" id="papers<?php echo $l; ?>" name="papers[]" value="<?php echo $rowxx['papers']; ?>"/>
										                <label class="custom-file-label" for="papers<?php echo $l; ?>"><?php echo basename($rowxx['papers']); ?></label>
										            </div>
												</td>
											</tr>						                    
											<?php
											$l+=1;
										}
										?>
										<tr id='addr5<?php echo $l-1; ?>'></tr>
										<?php
									}						
									else
									{
										$flag=false;
									}

								}
								else
								{
									$flag=false;
								}
								
								if($flag==false)
								{
								?>
									<tr id='addr50'>
										<td id='hasr1'>1</td>
										<td>
										<input type="number" step="0.01" name='ecs[]' id='ecs1' class="form-control" maxlength="200" />
										</td>
										<td>
											<div class="custom-file">
								                <input type="file" class="custom-file-input" id="papers1" name="papers[]"/>
								                <label class="custom-file-label" for="papers1">Choose file</label>
								            </div>
										</td>
									</tr>
				                    <tr id='addr51'></tr>
			                    <?php
			                	}
			                	?>
			                	<input type="hidden" name="l" id="l" value="<?php echo $l-1; ?>">
			                	*/
			                	?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="font-size: 22px">NB: The proforma duly filled along with all enclosures, submitted will be verified by the authorities.</p>
				</div>
			</div>
		</div>
									 

	</div>
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
</body>
</html>


