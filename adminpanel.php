<?php

session_start();

include 'dbh.php';



date_default_timezone_set('Asia/Kolkata');


$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlp="SELECT profilePicLocation,admin FROM faculty_table WHERE id='$userId'";
$resultp=mysqli_query($conn,$sqlp);

$rowp=mysqli_fetch_assoc($resultp);

$profilePicLocation=$rowp['profilePicLocation'];
$admin=$rowp['admin'];
if($admin==1)
{

include 'top.php';
include 'left-nav.php';

?>


	<div class="container">
    <div class="row">    		
    <div class="col-md-10 offset-md-2">
		
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="container-fluid">
				  	<div class="row">
				  		<div class="col-md-6 text-left"> 
						   <p style="color: white;font-size: 30px">Admin Panel</p>
				        </div>
				        <div class="col-md-6 text-right">
				        	<form class="" method="POST" action="createuser.php">
							 	<button type="submit" class="btn btn-info custom-button-width .navbar-right" style="font-size: 17px">Create User</button>
					    	</form>
						</div>
				  	</div>
				</div>


				<div class="admin-table">
				<table class="table table-bordered" style="background-color: white">
				  	<thead style="color: white">
					    <tr>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Sr.No</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Faculty Name</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Email</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Department</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Date of Joining</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Eligibility for CAS</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Faculty</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">H.O.D.</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Committee</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Principal</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Admin</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Update</th>
					 		<th scope="col" style="background-color: #343a40;text-align: center">Delete User</th>

					    </tr>
				  	</thead>
				  	<tbody>
				  		<?php

				  		$sql="SELECT id, faculty_name, email, date_of_joining, department, faculty, hod, committee, principal, admin FROM faculty_table";
				  		$result=mysqli_query($conn,$sql);

				  		$counter=1;

				  		while($row=mysqli_fetch_assoc($result))
				  		{

				  			$id=$row['id'];
				  			$faculty_name=$row['faculty_name'];
				  			$email=$row['email'];
				  			$date_of_joining=$row['date_of_joining'];
				  			$department=$row['department'];
				  			$faculty=$row['faculty'];
				  			$hod=$row['hod'];
				  			$committee=$row['committee'];
				  			$principal=$row['principal'];
				  			$admin=$row['admin'];

					  		?>
						    <tr id="user<?php echo $id; ?>">
						      	<th scope="row"><?php echo $counter; ?></th>
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

		  								if($faculty==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="faculty" id="faculty<?php echo $id; ?>" value="faculty" checked>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="faculty" id="faculty<?php echo $id; ?>" value="faculty">
		  									<?php
		  								}

		  								?>							      		
		  							</td>

						      		<td class="table-center">
						      			<?php

						      			if($hod==1)
						      			{
						      				?>
						      				<input type="checkbox" class="admin-table-checkbox" name="hod" id="hod<?php echo $id; ?>" value="hod" checked>
						      				<?php
						      			}
						      			else
						      			{
						      				?>
						      				<input type="checkbox" class="admin-table-checkbox" name="hod" id="hod<?php echo $id; ?>" value="hod">
						      				<?php
						      			}

						      			?>							      		
		  							</td>
		  							<td class="table-center">
		  								<?php

		  								if($committee==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="committee" id="committee<?php echo $id; ?>" value="committee" checked>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="committee" id="committee<?php echo $id; ?>" value="committee">
		  									<?php
		  								}

		  								?>							      		
		  							</td>
		  							<td class="table-center">
		  								<?php

		  								if($principal==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="principal" id="principal<?php echo $id; ?>" value="principal" checked>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="principal"id="principal<?php echo $id; ?>"  value="principal">
		  									<?php
		  								}

		  								?>							      		
		  							</td>
		  							<td class="table-center">
		  								<?php

		  								if($admin==1)
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="admin" id="admin<?php echo $id; ?>" value="admin" checked>
		  									<?php
		  								}
		  								else
		  								{
		  									?>
		  									<input type="checkbox" class="admin-table-checkbox" name="admin" id="admin<?php echo $id; ?>" value="admin">
		  									<?php
		  								}

		  								?>							      		
		  							</td>
		  							<td class="table-center">
		  								<input type="hidden" name="userId" value="<?php echo $id; ?>">
		  								<button type="submit" name="submit" class="btn btn-default" id="update<?php echo $id; ?>" disabled>Update</button>
		  							</td>	  							

						      	</form>

						      	<form class="delete-user-form" action="" method="POST">
						      		<td class="table-center">
		  								<input type="hidden" name="userId" value="<?php echo $id; ?>">
		  								<button type="submit" name="submit" class="btn btn-primary" id="delete<?php echo $id; ?>">Delete</button>
		  							</td>
						      	</form>
						      	
						    </tr>						   
						    
						    <?php
						    $counter+=1;
						}

					    ?>
				  </tbody>
				</table>
				</div>

				<br>

			</div>
		</div>
	</div>
	</div>
	</div>

	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Rights Updated Successfully</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
else
{
	header("LOCATION: index.php");
}