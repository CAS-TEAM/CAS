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
	<title>CAS | Career Advancement Scheme</title>
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
					<a class="navbar-brand" href="index.php">CAS</a>
					<div class="navbar-nav ml-auto">
						<a href="login.php"><button type="button" class="btn btn-outline-primary signin-link">Sign-In</button></a>
					</div>
				</nav>
			</div>
			
		</div>
		

		<div class="row justify-content-center flex-fill">
			<div class="col-md-10 align-self-center">
				<h1 class="text-center index-h1 fadeInUp animated delay-1s">CAREER ADVANCEMENT SCHEME</h1><br>
				<!-- <p class="text-center index-text fadeInUp animated">~ CAS INFO ~</p> -->
				<a class=" fadeInUp animated delay-2s" style="width:107px;display:block;margin:0 auto;" href="login.php"><button type="button" class="btn btn-outline-primary signin-link get-started-btn">Get Started</button></a>
				<br><br><br>
			</div>


			<!-- <div class="col-md-5 regist-form-div">
				<div class="row">
					<div class="col-md-12"><br>
						<h3 class="text-center">Registration Form</h3>
					</div>
				</div>
				<hr style="border: 1px solid #a6a6a6">

				<form action="regist_sys.php" method="POST">
				<div class="row">
					<label class="label col-md-2 control-label">Name</label>
					<div class="col-md-10">
						<input type="text" class="form-control register-form" name="faculty_name" placeholder="Full Name" required>
					</div>
				</div>

				<div class="row">
					<label class="label col-md-2 control-label">Email</label>
					<div class="col-md-10">
						<input type="email" class="form-control register-form" name="email" placeholder="E-mail" required>
					</div>
				</div>

				<div class="row">
					<label class="label col-md-2 control-label">Password</label>
					<div class="col-md-10">
						<input type="password" class="form-control register-form" name="password" placeholder="Password" required>
					</div>
				</div>

				<div class="row">
					<label class="label col-md-2 control-label">Confirm Password</label>
					<div class="col-md-10">
						<input type="password" class="form-control register-form" name="cpassword" placeholder="Retype-Password" required>
					</div>
				</div>
				
				<div class="row">
					<label class="label col-md-2 control-label">Date of Joining</label>
					<div class="col-md-10">
						<input type="date" class="form-control register-form" name="date_of_joining" placeholder="" required>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 col-sm-2" style="margin:0">
						<label class="label control-label">Department</label>
					</div>
					
					<div class="col-md-9 col-sm-10" style="margin:0;padding:0">

						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" class="custom-control-input" id="defaultInlineComputer" name="department" value="Computer" checked>
						  <label class="custom-control-label" for="defaultInlineComputer">Computer</label>
						</div>

						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" class="custom-control-input" id="defaultInlineExtc" name="department" value="Extc">
						  <label class="custom-control-label" for="defaultInlineExtc">Extc</label>
						</div>

						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" class="custom-control-input" id="defaultInlineEtrx" name="department" value="Etrx">
						  <label class="custom-control-label" for="defaultInlineEtrx">Etrx</label>
						</div>

						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" class="custom-control-input" id="defaultInlineIT" name="department" value="IT">
						  <label class="custom-control-label" for="defaultInlineIT">IT</label>
						</div>

						<div class="custom-control custom-radio custom-control-inline">
						  	<input type="radio" class="custom-control-input" id="defaultInlineMechanical" name="department" value="Mechanical">
						  	<label class="custom-control-label" for="defaultInlineMechanical">Mechanical</label>
						</div>
					</div>
				</div><br>

				<div class="row">
					<label class="label col-md-2 control-label">Role</label>
					<div class="col-md-10">

						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="defaultCheckedH.O.D" name="hod">
						  <label class="custom-control-label" for="defaultCheckedH.O.D">H.O.D</label>
						</div>

						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="defaultCheckedCommittee" name="committee">
						  <label class="custom-control-label" for="defaultCheckedCommittee">Committee</label>
						</div>

						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="defaultCheckedPrincipal" name="principal">
						  <label class="custom-control-label" for="defaultCheckedPrincipal">Principal</label>
						</div>
					</div>
				</div>

				<input type="submit" name="submit" value="Sign Up" class="btn btn-index-info" />

			</form>

			</div> -->
		</div>
	</div>
	
	<?php 

	if (isset($_GET['error']))
	{
		if($_GET['error']=='already_exists')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="This email already exists.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		else
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="Passwords do not match.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
	}
	?>

	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Error</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<div class="modal-body">
			        <p id="signin-error"></p>
			    </div>

		      	<!-- Modal footer -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      	</div>

		    </div>
	  	</div>
	</div>

</section>

</body>
</html>

<?php

}

?>