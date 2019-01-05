<?php

include 'top.php';
include'dbh.php'

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>

    
    <div class="container">

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
    	<form action="" method="POST" enctype="multipart/form-data">
    		<h3 class="text-center">Upload your file</h3><hr />
    		<div class="row justify-content-center">
    			<div class="col-md-6 text">
    				<div class="form-group">
    					<input type="file" name="myFile" class="form-control">
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class="col-md-1">
    				<div class="form-group">
    					<input type="submit" name="uploadBtn" class="btn btn-info">
    				</div>
    			</div>
    		</div>	
    	</form>
    </div>