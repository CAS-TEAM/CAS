<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
else
{

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];

include 'top.php';
include 'left-nav.php';

?>

	<div class="container">
    	<div class="row justify-content-center">       
    		<div class="col-md-6 col-sm-12 parta" style="margin-top: 5px">
				
				<?php

				$sql="SELECT email, faculty_name, date_of_joining, department, hod, committee, principal, admin FROM faculty_table WHERE id='$userId'";
				$result=mysqli_query($conn,$sql);

				$row=mysqli_fetch_assoc($result);

				$email=$row['email'];
				$faculty_name=$row['faculty_name'];
				$date_of_joining=$row['date_of_joining'];
				$department=$row['department'];
				$hod=$row['hod'];
				$committee=$row['committee'];
				$principal=$row['principal'];
				$admin=$row['admin'];

				?>

				<div class="card userprofile-card">
			      	<div class="card-body">
			      		<!-- <h1 class="text-center" style="background-color: #44a0b3;color: white">SETTINGS</h1>
 						<hr> -->
 						<div class="row justify-content-center">
 							<div class="col-12">
 								<h4 class="text-center" style="color: #44a0b3">General Settings</h4>
 								<hr style="border: 0.3px solid #c8c8c8"><br>
 								<form action="usersettings-sys.php" method="POST">

		 							<div class="form-inline">
									  	<label for="email" class="col-form-label mr-sm-3">Email:</label>
									  	<input type="email" class="form-control d-inline mb-3" id="email" name="email" style="width: 280px;margin-left: 60px" value="<?php echo $email; ?>">
									</div>

									<div class="form-inline">
									  	<label for="faculty_name" class="mr-sm-3">Name:</label>
									  	<input class="form-control partalabel mb-3" type="text" name="faculty_name" style="width: 280px;margin-left: 58px" id="faculty_name" value="<?php echo $faculty_name; ?>"/>
									</div> 

									<div class="form-inline">
									  	<label for="department" class="mr-sm-3">Department:</label>
									  	<input class="form-control partalabel mb-3" type="text" name="department" style="width: 280px;margin-left: 20px" id="department" value="<?php echo $department; ?>"/>
									</div> 
									
									<div class="form-inline">
									  	<label for="date_of_joining" class="mr-sm-3">Date of Joining:</label>
									  	<input class="form-control partalabel mb-3" type="date" name="date_of_joining" style="width: 280px;margin-left: 1px" id="date_of_joining" value="<?php echo $date_of_joining; ?>"/>
									</div><br> 
								  	
								  	<div class="row justify-content-center">
								  		<div class="col-md-3">
								  			<button type="submit" class="btn btn-primary mb-2 setting-save">Save</button>
										</div>
									</div>
								</form> 
 							</div>
 						</div>
 						
						<hr style="border: 0.5px solid #c8c8c8">
			        	<div class="row justify-content-center">
 							<div class="col-12">
 								<h4 class="text-center" style="color: #44a0b3">Change Password</h4><br>
								<!-- <hr style="border: 0.3px solid #c8c8c8"><br>-->
 								<form action="usersettings-pwd-sys.php" method="POST">

		 							<div class="form-inline">
									  	<!-- <label for="password" class="mr-sm-3">Password:</label> -->
									  	<input type="password" class="form-control d-inline mb-3 w-100" id="password" name="password" placeholder="New Password"/>
									</div>

									<div class="form-inline">
									  	<!-- <label for="cpassword" class="mr-sm-3">Confirm Password:</label> -->
									  	<input class="form-control partalabel mb-3 w-100" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"/>
									</div> 
								  	
								  	<div class="row justify-content-center">
								  		<div class="col-md-3">
								  			<button type="submit" class="btn btn-primary mb-2 change-btn">Submit</button>
										</div>
									</div>
								</form> 
 							</div>
 						</div>
			        	
 						<hr style="border: 0.3px solid #c8c8c8">

			        	<div class="row justify-content-center">
 							<div class="col-12">
 								<h4 class="text-center" style="color: #44a0b3">Change Profile Picture</h4><br>
								<!-- <hr style="border: 0.3px solid #c8c8c8"><br>-->
 								<form action="usersettings-pic-sys.php" method="POST" enctype='multipart/form-data'>

		 							<!-- <div class="form-inline">
									  	<input type="file" name="pic">								  	
									</div>
								  	<br>
								  	<div class="row justify-content-center">
								  		<div class="col-md-3">
								  			<button type="submit" class="btn btn-primary mb-2 change-btn">Submit</button>
										</div>
									</div> -->

									<div class="custom-file">
						                <input type="file" class="custom-file-input" id="pic" name="pic" />
						                <label class="custom-file-label" for="pic">Choose file</label>
						            </div>
						            <br>
						            <div class="input-group-append">
						                <button class="btn btn-primary" style="width:100px;display:block;margin:10px auto">Upload</button>
						            </div>

								</form> 
 							</div>
 						</div>

			        	
			      	</div>
			    </div>

			</div>
		</div>
	</div>



	<?php 

	if (isset($_GET['result']))
	{
		if($_GET['result']=='general')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="Changes successfully applied.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		else if($_GET['result']=='gerror')
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
		else if($_GET['result']=='password')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="Password changed successfully.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		else if($_GET['result']=='perror')
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
		else if($_GET['result']=='profilepic')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="Profile picture successfully changed.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		else if($_GET['result']=='ierror')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="There was an error during profile pic change.";
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
			        <h4 class="modal-title">Notice</h4>
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

<!-- Change file name custom label on upload -->
<script>
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>


</body>
</html>

<?php

}

?>