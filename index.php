<?php

session_start();

if(isset($_SESSION['id']))
{
	header("LOCATION: userprofile.php");
}
else
{

?>
<!DOCTYPE html>
<html>
<head>
	<!-- <title>CAS | Career Advancement Scheme</title> -->
	<title>Self Appraisal Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	
	<!-- global.css import -->
	<link rel="stylesheet" type="text/css" href="Frontend/global.css">


	<!-- general.js import -->
	<script type="text/javascript" src="general.js"></script>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

	<!-- animate css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	
<section class="container-fluid" style="height:100vh;width:100vw;margin:0px;padding:0px">
 	
	<div class="container-fluid d-flex h-100 flex-column bg-overlay">

		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark bg-transparent">
					<a class="navbar-brand" href="index.php"><img src="img\logo1.jpg" style="width: 70px;height: 65px;margin-left: -15px;border-radius:50%"></a>
					<div class="navbar-nav">
						<!-- <a href="login.php"><button type="button" class="btn btn-outline-primary signin-link">Sign-In</button></a> -->
						<h3 class="text-center index-h1" style="font-size: 25px">K. J Somaiya College of Engineering, Vidyavihar</h3>
						<!-- <a class="navbar-brand" href="index.php"><img src="img\logo2.jpg" style="width: 80px;height: 68px;margin-left: -15px"></a> -->

					</div>
				</nav>
			</div>
			
		</div>
		

		<div class="row justify-content-center flex-fill">
			<div class="col-md-10 align-self-center">
				<h1 class="text-center index-h1 fadeInUp animated delay-1s">SELF-APPRAISAL PORTAL <br> & <br> CAREER ADVANCEMENT SCHEME</h1><br>
				<!-- <p class="text-center index-text fadeInUp animated">~ CAS INFO ~</p> -->
				<a class=" fadeInUp animated delay-2s" style="width:107px;display:block;margin:0 auto;" href="login.php"><button type="button" class="btn btn-outline-primary signin-link get-started-btn">Get Started</button></a>
				<br>
			</div>

		</div>

		<div class="row justify-content-left">
			<div class="col-md-4 align-self-center">
				<h3 class="text-center index-h1 " style="font-size: 20px">DEVELOPED BY</h3>
				<h3 class="text-center index-h1 " style="font-size: 20px">ANJALI CHAUDHARI | SHARVAI PATIL</h3>
				
			</div>
			<div class="col-md-4 offset-md-4 align-self-center">
				<h3 class="text-center index-h1 " style="font-size: 20px">DEVELOPED UNDER</h3>
				<h3 class="text-center index-h1 " style="font-size: 20px">SOFTWARE DEVELOPMENT CELL</h3>
				
			</div>
		</div>
	</div>
	
</section>

</body>
</html>

<?php

}

?>