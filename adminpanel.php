<?php

session_start();

include 'dbh.php';

include 'top.php';


date_default_timezone_set('Asia/Kolkata');

?>


	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center">CAS</p>
	</nav>

	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h1 style="text-align:center">ADMIN PANEL</h1>

				<br>


				<table class="table table-bordered" style="text-align: center;vertical-align: middle;">
				  	<thead class="thead-dark">
					    <tr>
					      	<th scope="col">#</th>
					      	<th scope="col">Faculty Name</th>
					      	<th scope="col">Email</th>
					      	<th scope="col">Department</th>
					      	<th scope="col">Date of Joining</th>
					      	<th scope="col">Eligibility for CAS</th>
					      	<th scope="col">H.O.D.</th>
					      	<th scope="col">Committee</th>
					      	<th scope="col">Principal</th>
					      	<th scope="col">Admin</th>
					      	<th scope="col">Update</th>
					    </tr>
				  	</thead>
				  	<tbody>
				  		<?php

				  		$sql="SELECT id, faculty_name, email, date_of_joining, department, hod, committee, principal, admin FROM faculty_table";
				  		$result=mysqli_query($conn,$sql);

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
						      	<th scope="row"><?php echo $id; ?></th>
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
						      	<form>
						      		<td>
							      		<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
		  							</td>
		  							<td>
							      		<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
		  							</td>
		  							<td>
							      		<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
		  							</td>
		  							<td>
							      		<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
		  							</td>
		  							<td>
		  								<button type="submit" class="btn btn-default" disabled>Update</button>
		  							</td>
						      	</form>
						      	
						    </tr>						   
						    
						    <?php
						}

					    ?>
				  </tbody>
				</table>



			</div>
		</div>
	</div>



</body>
</html>