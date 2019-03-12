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
	              		<div class="col-md-12 text-right">
							<a href="#"><p type="" data-toggle="modal" data-target="#myModal" style="color: #44a0b3;text-align: right">
							Forgot Password?
							</p></a>
						</div>

					 	<!-- The Modal -->
					 	<div class="modal" id="myModal">
					    	<div class="modal-dialog">
					      		<div class="modal-content">
					      			<!-- Modal Header -->
							        <div class="modal-header">
							        	<h4 class="modal-title" style="text-align: right">Forgot Password</h4>
							         	<button type="button" class="close" data-dismiss="modal">&times;</button>
							        </div>
							        
							        <!-- Modal body -->
							        <div class="modal-body">
							        	<div class="row">
							        		<div class="col-md-8 text-left">
							         			<input type="text" class="form-control register-form-input" name="email" placeholder="Enter E-mail" required>
							         		</div>
							         		<div class="col-md-4 text-center">
							         			<button type="button" class="btn btn-success" style="margin-top: 15px">Send OTP</button>
							         		</div>

							         		<?php
											
											$rndno=rand(100000, 999999);//OTP generate
											// echo $rndno;
											$message = urlencode("otp number.".$rndno);
											// $to=$_POST['email'];
											// $subject = "OTP";
											// $txt = "OTP: ".$rndno."";
											// $headers = "From: otp@studentstutorial.com" . "\r\n" .
											// "CC: divyasundarsahu@gmail.com";
											// mail($to,$subject,$txt,$headers);
											if(isset($_POST['btn-save']))
											{
											$_SESSION['name']=$_POST['name'];
											$_SESSION['email']=$_POST['email'];
											$_SESSION['phone']=$_POST['phone'];
											$_SESSION['otp']=$rndno;
											header( "Location: otp.php" ); 

											} ?>
							         	</div>

							         	<div class="row">
							         		<div class="col-md-12 text-left">
							         			<input type="number" class="form-control register-form-input" name="otp" placeholder="Enter OTP" required>
							         		</div>
							         	</div><br>

							         	<div class="row justify-content-center">
  											<button type="submit" class="btn btn-primary">Verify</button>
							         	</div>

							        </div>
							        
							        <!-- Modal footer -->
							        <div class="modal-footer">
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							    </div>
							</div>
  						</div>       
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