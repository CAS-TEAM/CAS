<?php

session_start();

if(isset($_SESSION['id']))
{
	header("LOCATION: userprofile.php");
}
else
{

include 'top.php';

?>

	
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