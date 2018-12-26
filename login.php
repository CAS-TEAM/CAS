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

	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">CAS</a>
		<div class="navbar-nav ml-auto">
			<a href="index.php">
				<button type="button" class="btn btn-outline-primary signin-link">Sign-Up</button>
			</a>
		</div>
		
	</nav>

	
  	<div class="container">
	    <div class="row">
	      	<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        	<div class="card card-signin my-5">
		        	
		        	<div class="row">
		        		<div class="col-12 user-img">
			        		<img src="img/face.jpg">
			        	</div>
		        	</div>
	        	

	          		<div class="card-body" style="margin-top: 0px">
	                <!--<h5 class="card-title text-center signin-header">Sign In</h5>-->
	            	<form class="form-signin" method="POST" action="login_sys.php">
	              			<div class="form-label-group">
	                			<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
	               				<!--  <label for="inputEmail">Email address</label> -->
	              			</div>

	              			<div class="form-label-group">
	                			<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
	                			<!--<label for="inputPassword">Password</label>-->              
	              			</div>
	              			<br>

	              			<div class="custom-control custom-checkbox mb-3">
	                			<input type="checkbox" class="custom-control-input" id="customCheck1">
	                			<label class="custom-control-label remember" for="customCheck1">Remember password</label>
	              			</div>
	              			<br>
	              			<button class="btn btn-lg btn-primary btn-block text-uppercase signin-btnn" type="submit">Sign in</button>
	              		</form>
	              		<hr class="my-4">
	              		<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><!-- <i class="fa fa-google" aria-hidden="true"></i> --><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="google-i">  Sign in with Google</button>
	<!--               	<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fa fa-facebook" aria-hidden="true" ></i>  Sign in with Facebook</button> -->
	            
	          		</div>
	        	</div>
	      	</div>
	    </div>
  	</div>

  	<?php 

	if (isset($_GET['error']))
	{
		if($_GET['error']=='notfound')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="There is an error in the input email or password.";
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

</body>
</html>

<?php

}

?>