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

    <body>

    	<?php

    	include 'dbh.php';

	    $userId=mysqli_real_escape_string($conn,$_GET['id']);
		$year=mysqli_real_escape_string($conn,$_GET['year']);

		$sqlx="SELECT faculty_name, email, date_of_joining, ecode, mobileno FROM faculty_table WHERE id='$userId'";
		$resultx=mysqli_query($conn,$sqlx);
		$rowx=mysqli_fetch_assoc($resultx);
		$faculty_name=$rowx['faculty_name'];

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
								<th class="text-center" style="column-width: 260px;font-size: 25px">A<br> Last to Last Academic Year<br> <!-- <?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?> --></th>
								<th class="text-center" style="column-width: 260px;font-size: 25px">B<br> Last Academic Year<br> <!-- <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?> --></th>
								<th class="text-center" style="column-width: 260px;font-size: 25px">C<br> Current Academic Year<br> <!-- <?php echo $previousyear; ?>-<?php echo $currentyear; ?> --></th>
							</tr>
							<tbody>
								<tr>
									<td style="font-size: 25px">Part A</td>
									<td style="font-size: 25px">50</td>
									<td style="font-size: 25px">General</td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: I</td>
									<td style="font-size: 25px">100</td>
									<td style="font-size: 25px">Teaching and Learning</td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: II</td>
									<td style="font-size: 25px">100</td>
									<td style="font-size: 25px">Co-Curricular and administrative activities in college</td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: III</td>
									<td style="font-size: 25px">175</td>
									<td style="font-size: 25px">Publications, supervisor, guide, research, consultancy, intellectual properties</td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
								</tr>
								<tr>
									<td style="font-size: 25px">Part B: IV</td>
									<td style="font-size: 25px">75</td>
									<td style="font-size: 25px">Co-Curricular and administrative activities outside college</td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
								</tr>
								<tr>
									<td colspan="3" style="text-align: center;font-size: 25px" >PI total out of 500</td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
									<td style="font-size: 25px"></td>
								</tr>
								<tr>
									<td colspan="6" style="text-align: center;font-size: 25px" >Average PI = (A + B + C) / 3 = </td>
								</tr>
								<tr>
									<td colspan="6" style="text-align: center;font-size: 25px" >Average PI % = ((Average PI)/500)*100 = </td>
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
						<div class="row">
							<div class="col-md-12 text-left">
								<li><p style="font-size: 25px">Final Verification and Evaluation in respects of PI by committee</p></li>
							</div>
						</div>
						</ul>
					</div>

					<table class="table table-bordered table-hover" id="tab-evaluation">
						<tr>
							<th class="text-center" rowspan="2" style="font-size: 25px">Item</th>
							<th class="text-center" colspan="3" style="font-size: 25px">API given by Faculty Member</th>
							<th class="text-center" colspan="3" style="font-size: 25px">API after verfication by HOD</th>
							<th class="text-center" colspan="3" style="font-size: 25px">Final Score by Screening Cum Evaluation/Selection Committee</th>
						</tr>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<tbody>
							<tr>
								<td style="font-size: 25px">Part A</td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>	
								<td style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: I</td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>	
								<td style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: II</td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>	
								<td style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: III</td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>	
								<td style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">Part B: IV</td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>	
								<td style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">PI total out of 500</td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>
								<td style="font-size: 25px"></td>	
								<td style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">Average PI</td>
								<td colspan="3" style="font-size: 25px"></td>
								<td colspan="3" style="font-size: 25px"></td>
								<td colspan="3" style="font-size: 25px"></td>
							</tr>
							<tr>
								<td style="font-size: 25px">Average PI %</td>
								<td colspan="3" style="font-size: 25px"></td>
								<td colspan="3" style="font-size: 25px"></td>
								<td colspan="3" style="font-size: 25px"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<label class="col-form-label" style="font-size: 25px">HOD Remarks:</label>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<label class="col-form-label" style="font-size: 25px">Final Remarks by Committee:</label>
					</div>
				</div>
			</div>
		</div>  

    </body>
</html>