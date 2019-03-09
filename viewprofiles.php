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

?>
  	
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