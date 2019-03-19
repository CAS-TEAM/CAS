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

$sqlx="SELECT profilePicLocation, admin FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];
$admin=$rowx['admin'];

include 'top.php';
include 'left-nav.php';


?>

<div class="container" style="background-color: #343a40">
    <div class="row">    		
	    <div class="col offset-md-2" style="background-color: #343a40">

			<ul class="nav nav-pills mb-3 justify-content-center nav-fill" id="pills-tab" role="tablist" style="background-color: #44a0b3;border: 1px solid #44a0b3;height: 50px;">
			  	<li class="nav-item">
			    	<a class="nav-link active" id="pills-apply-tab" data-toggle="pill" href="#pills-apply" role="tab" aria-controls="pills-apply" aria-selected="true" style="color: white;font-size: 20px">Create User</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="color: white;font-size: 20px">Upload CSV</a>
			  	</li>				
			</ul>

			<div class="tab-content" id="pills-tabContent" style="background-color: #343a40">	
				<div class="tab-pane fade show active" id="pills-apply" role="tabpanel" aria-labelledby="pills-apply-tab">		
					<div class="row">
					    <div class="col-md-12 regist-form-div">
							<form action="regist_sys.php" method="POST" onsubmit="return confirm('Do you want to create a new user?');">
							<div class="row">
								<label class="label-user col-md-2 control-label text-right">Name</label>
								<div class="col-md-4">
									<input type="text" class="form-control register-form-input" name="faculty_name" placeholder="Full Name" style="width:90%" required>
								</div>
								<label class="label-user col-md-2 control-label text-right">Email</label>
								<div class="col-md-4">
									<input type="email" class="form-control register-form-input" name="email" placeholder="E-mail" style="width:90%" required>
								</div>
							</div><br>

							<div class="row">
								<label class="label-user col-md-2 control-label text-right">Password</label>
								<div class="col-md-4">
									<input type="password" class="form-control register-form-input" name="password" placeholder="Password" style="width:90%" required>
								</div>
								<label class="label-user col-md-2 control-label text-right">Confirm Password</label>
								<div class="col-md-4">
									<input type="password" class="form-control register-form-input" name="cpassword" placeholder="Retype-Password" style="width:90%" required>
								</div>
							</div>

							
							
							<div class="row">
								<label class="label-user col-md-2 control-label text-right">Date of Joining</label>
								<div class="col-md-10">
									<input type="date" class="form-control register-form-input" name="date_of_joining" placeholder=""  style="width:34%" required>
								</div>
							</div><br>

							<div class="row">
								<div class="col-md-3 col-sm-2 text-center" style="margin:0">
									<label class="label-user control-label">Department</label>
								</div>
								
								<div class="col-md-7 col-sm-10" style="margin:0;padding:0;margin-top: 15px">

									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" class="custom-control-input" id="defaultInlineComputer" name="department" value="Computer" checked>
									  <label class="custom-control-label" for="defaultInlineComputer" style="color: #a6a6a6">Computer</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" class="custom-control-input" id="defaultInlineExtc" name="department" value="Extc">
									  <label class="custom-control-label" for="defaultInlineExtc" style="color: #a6a6a6">Extc</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" class="custom-control-input" id="defaultInlineEtrx" name="department" value="Etrx">
									  <label class="custom-control-label" for="defaultInlineEtrx" style="color: #a6a6a6">Etrx</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" class="custom-control-input" id="defaultInlineIT" name="department" value="IT">
									  <label class="custom-control-label" for="defaultInlineIT" style="color: #a6a6a6">IT</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
									  	<input type="radio" class="custom-control-input" id="defaultInlineMechanical" name="department" value="Mechanical">
									  	<label class="custom-control-label" for="defaultInlineMechanical" style="color: #a6a6a6">Mechanical</label>
									</div>
								</div>
							</div><br>

							<div class="row">
								<label class="label-user col-md-3 control-label text-center">Role</label>
								
								<div class="col-md-9">

									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" id="defaultCheckedFaculty" name="faculty" checked>
									  <label class="custom-control-label" for="defaultCheckedFaculty" style="color: #a6a6a6">Faculty</label>
									</div>

									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" id="defaultCheckedH.O.D" name="hod">
									  <label class="custom-control-label" for="defaultCheckedH.O.D" style="color: #a6a6a6">H.O.D</label>
									</div>

									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" id="defaultCheckedCommittee" name="committee">
									  <label class="custom-control-label" for="defaultCheckedCommittee" style="color: #a6a6a6">Committee</label>
									</div>

									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" id="defaultCheckedPrincipal" name="principal">
									  <label class="custom-control-label" for="defaultCheckedPrincipal" style="color: #a6a6a6">Principal</label>
									</div>
								</div>
							</div>

							<input type="submit" name="submit" value="Create" class="btn create-user-btn" />
							<!-- <a href="#"><div class="btn btn-warning">cancel</div></a> -->

							</form>
						</div>
					</div>
					</div>
				<br>
			<!-- </div> -->

				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">    	
			    	<!-- <form action="" method="POST" enctype="multipart/form-data">
				    	<div class="row upload-form-div justify-content-right"><br>
				    		<div class="col-md-12">
				    			<input type="file" name="myFile" class="form-control upload-form-input" style="margin-left: 180px;margin-bottom: 6px">
				    		</div>
				    	</div>
				    	<br>
					    	
			    		<div class="row justify-content-center">
			    			<div class="col-md-3">
			    				<div class="form-group">
			    					<input type="submit" name="uploadBtn" value="Upload" class="btn btn-info submit-user-btn" style="margin-left: 60px">
			    				</div>
			    			</div>
			    		</div>	
					</form> -->
					 <!-- <form action="" method="post" enctype="multipart/form-data" id="js-upload-form"> -->
				 	<form action="" method="POST" enctype="multipart/form-data">
		           		<div class="row">
		           			<div class="col-md-12 text-center">
				             	<span class="btn btn-success fileinput-button" style="background-color: #343a40;border: 1px solid #44a0b3">
			                   <!--  <i class="glyphicon glyphicon-plus"></i> -->
			                    <span style="color: #b8bfce">Add files</span>
			                    <input type="file" name="myFile" style="background-color: #343a40;color: #b8bfce">
				                </span>
				            </div>
				        </div><br>

				        <div class="row">
				        	<div class="col-md-12 text-center">
				         		<button type="submit" class="btn btn-primary start" name="uploadBtn" style="background-color: #44a0b3;;border: 1px solid #44a0b3">
				                  <!--   <i class="glyphicon glyphicon-upload"></i> -->
				                    <span>Upload</span>
				                </button>
			           		</div>
			           	</div>
		         	</form>


	  			</div>
	  		</div>
	

	<?php

	if(isset($_POST['uploadBtn']))
	{
		$fileName = $_FILES['myFile']['name'];
		$fileTmpName = $_FILES['myFile']['tmp_name'];
		$fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
		$allowedType = array('csv');
		if(!in_array($fileExtension,$allowedType))
		{
			?>
			<div class="alert alert-danger">Invalid File Extension</div>
			<?php
		}
		else
		{
			$result=null;
			$handle = fopen($fileTmpName,'r');
			while (($myData = fgetcsv($handle,1000,',')) !== FALSE) 
			{
				$faculty_name = $myData[0];
				$email = $myData[1];
				$password = $myData[2];

				$hashed_password = password_hash($password, PASSWORD_DEFAULT);

				$doj = $myData[3];

				$date_of_joining = date('Y-m-d',strtotime(str_replace('-','/', $doj)));

				$department = $myData[4];
				$faculty = $myData[5];
				$hod = $myData[6];
				$committee = $myData[7];
				$principal = $myData[8];
				$admin = $myData[9];	

				$sqle="SELECT email FROM faculty_table WHERE email='$email'";
				$resulte=mysqli_query($conn,$sqle);

				if(mysqli_num_rows($resulte)==0)
				{

					$sql="INSERT INTO faculty_table (faculty_name, email, password, date_of_joining, department, faculty, hod, committee, principal,admin) VALUES ('$faculty_name','$email', '$hashed_password','$date_of_joining','$department','$faculty','$hod', '$committee', '$principal','$admin')";
		   			$result=mysqli_query($conn, $sql);

		   		}

			}
		
			if(!$result)
			{
				?>
					<div class="alert alert-danger">Error in Uploading File</div>
				<?php  
			} 
			else
			{
				?>
					<div class="alert alert-success">File Uploaded Successfully</div>
				<?php  
			}
		}
	}
	?>

			<br>
	  		<div class="row">
	  			<div class="col-md-6">
	  				<button type="button" id="myBtn" class="btn btn-info">Info CSV</button>
	  				<div id="myModal" class="modal1">
					  	<div class="modal-content1">
					  	<span class="close1">&times;</span>
					  	<p style="font-size: 15px"><b>Column names to be filled accordingly in .csv file</b></p>
					  		 <table class="table table-bordered">
							    <thead>
							      <tr>
							        <th style="text-align: center">Faculty Name</th>
							        <th style="text-align: center">Email</th>
							        <th style="text-align: center">Password</th>
							        <th style="text-align: center">Date of Joining</th>
							        <th style="text-align: center">Department</th>
							        <th style="text-align: center">Faculty</th>
							        <th style="text-align: center">Hod</th>
							        <th style="text-align: center">Committee</th>
							        <th style="text-align: center">Principal</th>
							        <th style="text-align: center">Admin</th>
							      </tr>
							    </thead>
  							</table>
				  		</div>
				  	</div>
				</div>
				<div class="col-md-6">
<!-- 	  				<button type="button" id="myBtn" class="btn btn-info" style="margin-left: -370px">Download Example CSV</button>
 -->	  				<?php
					$filename = "read.csv"; //Let say If I put the file name Bang.png
					echo "<a href='download.php?name=".$filename."' class='btn btn-info' style='margin-left: -370px'>Download Example CSV</a> ";
					?>

	  			</div>
	  	
			</div>

			
	  			
		</div>
	</div>
</div>


<script type="text/javascript">
	// Get the modal
	var modal1 = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close1")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal1.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal1.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal1) {
	    modal1.style.display = "none";
	  }
	}
</script>


<?php 

	if (isset($_GET['error']))
	{
		if($_GET['error']=='none')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("modal-title").innerHTML="Success";
		    	document.getElementById("signin-error").innerHTML="User created successfully!";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		else if($_GET['error']=='already_exists')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="This user already exists.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		if($_GET['error']=='password_not_matching')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="The passwords do not match.";
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
			        <h4 class="modal-title" id="modal-title">Error</h4>
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