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
							<a style="cursor:pointer"><p type="" data-toggle="modal" data-target="#forgotpasswordmodal" style="color: #44a0b3;text-align: right">
							Forgot Password?
							</p></a>
						</div>

					 	<!-- The Modal -->
					 	<div class="modal fade" id="forgotpasswordmodal">
					    	<div class="modal-dialog">
					      		<div class="modal-content">
					      			<!-- Modal Header -->
							        <div class="modal-header">
							        	<h4 class="modal-title" style="text-align: right">Forgot Password</h4>
							         	<button type="button" class="close" data-dismiss="modal">&times;</button>
							        </div>
							        
							        <!-- Modal body -->
							        <div class="modal-body">
							        	<!-- SEND OTP FORM -->
							        	<form class="send-otp-form" action="" method="POST">
								        	<div class="row">
								        		<div class="col-md-8 text-left">
								         			<input type="text" class="form-control register-form-input" name="email" placeholder="Enter E-mail" required>
								         		</div>
								         		<div class="col-md-4 text-center">
								         			<button type="submit" id="send-otp" class="btn btn-success" style="margin-top: 15px">Send OTP</button>
								         		</div>
								         	</div>
							         	</form>

							         	<p class="text-center my-0" id="otpsent-message" style="display:none"><br>The OTP has been sent to your email address. Please enter the <br>OTP in the field below and press "Verify" to log-in.</p>

							         	<!-- LOGIN THROUGH OTP FORM -->
							         	<form class="verify-otp-form" action="" method="POST">
								         	<div class="row">
								         		<div class="col-md-12 text-left">
								         			<input type="number" class="form-control register-form-input" name="otp" placeholder="Enter OTP" required>
								         		</div>
								         	</div><br>

								         	<div class="row justify-content-center">
								         		<div class="loader" style="margin-top:5px;margin-right:10px;display: none"></div>
	  											<button type="submit" id="verify-otp" class="btn btn-primary">Verify</button>
								         	</div>
								         </form>
								         <br>

								         <p class="text-center my-0" id="verifyotp-message" style="display:none">The OTP you entered was wrong. Please try again or resend the<br> OTP.</p>


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