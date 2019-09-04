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