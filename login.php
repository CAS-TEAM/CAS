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
		
  	<div class="container">
	    <div class="row">
	      	<div class="col-sm-12 col-md-7 col-lg-5 mx-auto">
	        	<div class="card card-signin my-1 login-card">
	        			<div class="row">
			        		<div class="col-md-12 user-img">
				        		<img src="img/face.png">
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12 text-center">
		        				<p style="color: #44a0b3;font-size: 22px">Sign In to continue </p>
		        			</div>
		        		</div>

	          		<div class="card-body" style="margin-top: -10px">
	                <!--<h5 class="card-title text-center signin-headr">Sign In</h5>-->
	            	<form class="form-signin" method="POST" action="login_sys.php">
            	      		<div class="form-label-group">
            	      		 	<input type="email" id="inputEmail" name="email" class="form-control signin-form-input fontAwesome-signin" placeholder="&#xf0e0;  Email address" required autofocus>
              				</div><br>

	              			<div class="form-label-group">
	                			<input type="password" id="inputPassword" name="password" class="form-control signin-form-input fontAwesome-signin" placeholder="&#xf13e;   Password" required autofocus>
	                		</div>
	              			
	              			<br>
	              			<button class="btn btn-lg btn-primary btn-block text-uppercase signin-btnn" type="submit">Sign in</button>
	              		</form><br>
	              		<div class="row">
	              			<div class="col-md-6 text-left">		              			
		              		</div>
		              		<div class="col-md-6 text-right">
	              				<a href="" style="color: #44a0b3">Forgot Password?</a>
	              			</div>
	              		</div>
	              		<!-- <hr style="border:1px solid #44a0b3"><br> -->
	              		<!-- <button class="btn btn-lg btn-google btn-block signin-google-btn" type="submit"><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="google-i"> Sign in with Google</button> -->	            
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