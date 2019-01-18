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

include 'top.php';

?>

   	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
	  	<a class="navbar-brand" href="#">CAS</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      	<!-- <li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      	</li> -->
		      	<?php
		      	if(!isset($_SESSION['id']))
		      	{
			      	?>
			      	<li class="nav-item">
			        	<a class="nav-link" href="index.php">Sign Up | Sign In</a>
			      	</li>
			      	<?php
			    }			      	
			    else
			    {
			    	?>			    	
			      	<li class="nav-item dropdown">
				        <img class="nav-link dropdown-toggle" src="defaults/default_userprofile_pic.png" width="50px" style="cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          	<!-- <img src="defaults/default_userprofile_pic.png" width="30px" style="display:block;margin:0 auto"> -->
				        <!-- </a> -->
				        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				        	<h6 class="dropdown-header"><?php echo $_SESSION['faculty_name']; ?></h6>
				          	<a class="dropdown-item" href="userprofile.php"><img src="defaults/default_userprofile_pic.png" style="width:30px;height:auto"><span class="my-auto ml-2">My Profile</span></a>
				          	<a class="dropdown-item" href="usersettings.php"><img src="settings.png" style="width:30px;height:auto"><span class="my-auto ml-2">Settings</span></a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="logout.php">Log out</a>
				        </div>
			      	</li>
			      	<?php
		      	}
		      	?>
		    </ul>
	  	</div>
	</nav>
	
  	
   	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">

				<h1 class="text-center" style="color:white">VIEW PROFILES</h1>

				<div class="admin-table">
				<table class="table table-bordered" style="background-color: white">
				  	<thead style="color: white">
					    <tr>
					      	<th scope="col" style="background-color: #343a40">#</th>
					      	<th scope="col" style="background-color: #343a40">Faculty Name</th>
					      	<th scope="col" style="background-color: #343a40">Email</th>
					      	<th scope="col" style="background-color: #343a40">Department</th>
					      	<th scope="col" style="background-color: #343a40">Date of Joining</th>
					      	<th scope="col" style="background-color: #343a40">Eligibility for CAS</th>
					      	<th scope="col" style="background-color: #343a40">H.O.D.</th>
					      	<th scope="col" style="background-color: #343a40">Committee</th>
					      	<th scope="col" style="background-color: #343a40">Principal</th>
					      	<th scope="col" style="background-color: #343a40">Admin</th>
					    </tr>
				  	</thead>
				  	<tbody>
				  		<?php

				  		//finding if the user is an HOD or committee member

				  		$sqlc="SELECT hod,committee,department FROM faculty_table WHERE id='$userId'";
				  		$resultc=mysqli_query($conn,$sqlc);
				  		$rowc=mysqli_fetch_assoc($resultc);
				  		$check;
				  		if($rowc['hod']==1)
				  		{
				  			$check="hod";
				  		}

				  		if($rowc['committee']==1)
				  		{
				  			$check="committee";
				  		}

				  		if($check=="hod")
				  		{
				  			$departmentc=mysqli_real_escape_string($conn,$rowc['department']);
				  			//means hod
				  			$sql="SELECT id, faculty_name, email, date_of_joining, department, hod, committee, principal, admin FROM faculty_table WHERE department='$departmentc' AND hod=0";
				  			$result=mysqli_query($conn,$sql);

				  		}
				  		else
				  		{
				  			//means committee member
				  			$sql="SELECT id, faculty_name, email, date_of_joining, department, hod, committee, principal, admin FROM faculty_table";
				  			$result=mysqli_query($conn,$sql);

				  		}

				  		$count=1;
				  		while($row=mysqli_fetch_assoc($result))
				  		{

				  			$id=$row['id'];
				  			$faculty_name=$row['faculty_name'];
				  			$email=$row['email'];
				  			$date_of_joining=$row['date_of_joining'];
				  			$department=$row['department'];
				  			$hod=$row['hod'];
				  			$committee=$row['committee'];
				  			$principal=$row['principal'];
				  			$admin=$row['admin'];

					  		?>
						    <tr>
						      	<th scope="row"><?php echo $count; ?></th>
						      	<td><?php echo $faculty_name; ?></td>
						      	<td><?php echo $email; ?></td>
						      	<td><?php echo $department; ?></td>
						      	<td><?php echo $date_of_joining; ?></td>					      	

						    <?php
							$now = time();
							$your_date = strtotime($date_of_joining);
							$datediff = $now - $your_date;
							$years = floor($datediff / (365*60*60*24));
						    // echo $years;
						    if($years>=5)
						    {
						    	?>
						    	<td>Eligible</td>	
						    	<?php
						    }
						    else
						    {
						    	?>
						    	<td>Not Eligible</td>
						    	<?php
						    }

						    ?>
						      	<form class="update-rights-form" id="update-rights-form-<?php echo $id; ?>" action="" method="POST">
						      		<td class="table-center">
						      			<?php

						      			if($hod==1)
						      			{
						      				?>
						      				<input type="checkbox" class="admin-table-checkbox" name="hod" id="hod<?php echo $id; ?>" value="hod" checked disabled>
						      				<?php
						      			}
						      			else
						      			{
						      				?>
						      				<input type="checkbox" class="admin-table-checkbox" name="hod" id="hod<?php echo $id; ?>" value="hod" disabled>
						      				<?php
						      			}

						      			?>							      		
		  							</td>
		  							<td class="table-center">
		  								<?php

		  								if($committee==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="committee" id="committee<?php echo $id; ?>" value="committee" checked disabled>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="committee" id="committee<?php echo $id; ?>" value="committee" disabled>
		  									<?php
		  								}

		  								?>							      		
		  							</td>
		  							<td class="table-center">
		  								<?php

		  								if($principal==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="principal" id="principal<?php echo $id; ?>" value="principal" checked disabled>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="principal"id="principal<?php echo $id; ?>"  value="principal" disabled>
		  									<?php
		  								}

		  								?>							      		
		  							</td>
		  							<td class="table-center">
		  								<?php

		  								if($admin==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="admin" id="admin<?php echo $id; ?>" value="admin" checked disabled>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="admin" id="admin<?php echo $id; ?>" value="admin" disabled>
		  									<?php
		  								}

		  								?>							      		
		  							</td>		  							
						      	</form>
						      	
						    </tr>						   
						    
						    <?php
						    $count+=1;
						}

					    ?>
				  </tbody>
				</table>
				</div>

			</div>
		</div>
	</div>

</body>
</html>

<?php
}
?>