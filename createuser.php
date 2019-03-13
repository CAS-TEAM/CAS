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

?>

	<div class="container">
		<div class="row justify-content-center">
		    <div class="col-md-5 regist-form-div">
				<div class="row">
					<div class="col-md-12"><br>
						<h3 class="text-center" style="font-size: 25px;color:#44a0b3">Create User</h3>
					</div>
				</div>
				<hr style="border: 1px solid #44a0b3">

				<form action="regist_sys.php" method="POST">
				<div class="row">
					<label class="label-user col-md-2 control-label">Name</label>
					<div class="col-md-10">
						<input type="text" class="form-control register-form-input" name="faculty_name" placeholder="Full Name" required>
					</div>
				</div>

				<div class="row">
					<label class="label-user col-md-2 control-label">Email</label>
					<div class="col-md-10">
						<input type="email" class="form-control register-form-input" name="email" placeholder="E-mail" required>
					</div>
				</div>

				<div class="row">
					<label class="label-user col-md-2 control-label">Password</label>
					<div class="col-md-10">
						<input type="password" class="form-control register-form-input" name="password" placeholder="Password" required>
					</div>
				</div>

				<div class="row">
					<label class="label-user col-md-2 control-label">Confirm Password</label>
					<div class="col-md-10">
						<input type="password" class="form-control register-form-input" name="cpassword" placeholder="Retype-Password" required>
					</div>
				</div>
				
				<div class="row">
					<label class="label-user col-md-3 control-label">Date of Joining</label>
					<div class="col-md-7">
						<input type="date" class="form-control register-form-input" style="margin-left: -17px" name="date_of_joining" placeholder="" required>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 col-sm-2" style="margin:0">
						<label class="label-user control-label">Department</label>
					</div>
					
					<div class="col-md-9 col-sm-10" style="margin:0;padding:0">

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
					<label class="label-user col-md-2 control-label">Role</label>
					<div class="col-md-10">

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
		<!-- </div> -->
		<br>
	<!-- </div> -->

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
				$hod = $myData[5];
				$committee = $myData[6];
				$principal = $myData[7];
				$admin = $myData[8];	

				$sqle="SELECT email FROM faculty_table WHERE email='$email'";
				$resulte=mysqli_query($conn,$sqle);

				if(mysqli_num_rows($resulte)==0)
				{

					$sql="INSERT INTO faculty_table (faculty_name, email, password, date_of_joining, department, hod, committee, principal,admin) VALUES ('$faculty_name','$email', '$hashed_password','$date_of_joining','$department','$hod', '$committee', '$principal','$admin')";
		   			$result=mysqli_query($conn, $sql);

		   		}

			}
		
			if(!$result)
			{
				die("error in uploading file");
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
    	<div class="col-md-2" style="height: 100%;color:#44a0b3">
    		<div class="row justify-content-center" style="height:100%">
    			<div class="col align-items-center"><p class="text-center" style="height:100%;font-size: 25px">OR</p></div>
    		</div>
    	</div>
		<!-- <div class="container"> -->
			<!-- <div class="row justify-content-center"> -->
		    	<div class="col-md-5 upload-form-div"><br>
	    			<form action="" method="POST" enctype="multipart/form-data">
			    		<h3 class="text-center" style="color: #44a0b3">Upload your file</h3>
			    		<hr style="border: 0.5px solid #44a0b3">
			    		<div class="row justify-content-center">
			    			<div class="col-md-12 text">
			    				<div class="form-group">
			    					<input type="file" name="myFile" class="form-control upload-form-input">
			    				</div>
			    			</div>
			    		</div>
			    		<div class="row justify-content-center">
			    			<div class="col-md-3">
			    				<div class="form-group">
			    					<input type="submit" name="uploadBtn" class="btn btn-info submit-user-btn">
			    				</div>
			    			</div>
			    		</div>	
    				</form>
    			</div>
    		<!-- </div> -->
    	<!-- </div> -->
   </div>
</div>
<br><br>

<?php 

	if (isset($_GET['error']))
	{
		if($_GET['error']=='none')
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="User created Successfully!";
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