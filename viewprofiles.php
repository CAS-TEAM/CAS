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

$lasttolastyear=$currentyear-2;
$lasttolastyear2=$currentyear-3;
?>
  	
   	<div class="container">
		<div class="row justify-content-center">
			<div class="col offset-md-2" id="part-b-container">

				<h2 class="text-center" style="color:white">VIEW PROFILES</h2><br>

				<div class="admin-table" style="margin-left:70px;max-height:500px">
				<table class="table table-bordered" style="background-color: white">
				  	<thead style="color: white">
					    <tr>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">#</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Faculty Name</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Email</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Department</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Date of Joining</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Eligibility<br> for CAS</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Self Appraisal Forms</th>
					      	<th scope="col" colspan="3" style="background-color: #343a40;text-align: center">CAS Forms</th>
					      	<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Faculty Summary</th>

					      	<!-- <th scope="col" style="background-color: #343a40">H.O.D.</th>
					      	<th scope="col" style="background-color: #343a40">Committee</th>
					      	<th scope="col" style="background-color: #343a40">Principal</th>
					      	<th scope="col" style="background-color: #343a40">Admin</th> -->
					    </tr>
					    <tr>
					    	<th scope="col" rowspan="2" style="background-color: #343a40"><?php echo ($previousyear-3).'-'.($previousyear-2); ?></th>
					    	<th scope="col" rowspan="2" style="background-color: #343a40"><?php echo ($previousyear-2).'-'.($previousyear-1) ?></th>
					    	<th scope="col" rowspan="2" style="background-color: #343a40"><?php echo ($previousyear-1).'-'.($currentyear-1) ?></th>
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
				  			// $hod=$row['hod'];
				  			// $committee=$row['committee'];
				  			// $principal=$row['principal'];
				  			// $admin=$row['admin'];

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
							$eligible=false;
							$sfr=false;
						    // echo $years;
						    if($years>=5)
						    {
						    	$eligible=true;
						    	?>
						    	<td><img src="checked.png" style="width:25px;display: block;margin-top: 30px" class="mx-auto"></td>	
						    	<?php

								$sqlsfr="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$id' AND year='$previousyear' AND partA=1 AND partB=1";
								$resultsfr=mysqli_query($conn,$sqlsfr);

								if(mysqli_num_rows($resultsfr)!=0)
								{	
									$sqlsfrp="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$id' AND year='$lasttolastyear' AND partA=1 AND partB=1";
									$resultsfrp=mysqli_query($conn,$sqlsfrp);

									if(mysqli_num_rows($resultsfrp)!=0)
									{	
										$sqlsfrl="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$id' AND year='$lasttolastyear2' AND partA=1 AND partB=1";
										$resultsfrl=mysqli_query($conn,$sqlsfrl);

										if(mysqli_num_rows($resultsfrl)!=0)
										{
											$sfr=true;
										}
									}
								}

						    }
						    else
						    {
						    	?>
						    	<td><img src="error.png" style="width:25px;display: block;margin-top: 30px" class="mx-auto"></td>
						    	<?php
						    }

						    ?>

						    <td><a href="self-appraisals.php?id=<?php echo $id; ?>" class="btn btn-info" style="margin-top: 25px" target="_blank">View</a></td>
						    <td>
						    	<?php

						    	if($eligible==true && $sfr==true)
						    	{
							    	?>
							    	<a href="partA.php?id=<?php echo $id; ?>&year=<?php echo ($previousyear-2); ?>" class="btn btn-info" target="_blank">Part A</a>
							    	<a href="partB.php?id=<?php echo $id; ?>&year=<?php echo ($previousyear-2); ?>" class="btn btn-info" style="margin-top: 10px" target="_blank">Part B</a>
							    	<?php
							    }
							    else
							    {
							    	?>
							    	<img src="error.png" style="width:25px;display: block;margin-top: 30px" class="mx-auto">
							    	<?php
							    }
							    ?>
						    </td>
						    <td>
							    <?php
							    if($eligible==true && $sfr==true)
							    {
							    	?>
							    	<a href="partA.php?id=<?php echo $id; ?>&year=<?php echo ($previousyear-1); ?>" class="btn btn-info" target="_blank">Part A</a>
							    	<a href="partB.php?id=<?php echo $id; ?>&year=<?php echo ($previousyear-1); ?>" class="btn btn-info" style="margin-top: 10px" target="_blank">Part B</a>
							    	<?php
							    }
							    else
							    {
							    	?>
							    	<img src="error.png" style="width:25px;display: block;margin-top: 30px" class="mx-auto">
							    	<?php
							    }
							    ?>
						    </td>
						    <td>
						    	<?php
							    if($eligible==true && $sfr==true)
							    {
							    ?>
							    	<a href="partA.php?id=<?php echo $id; ?>&year=<?php echo ($currentyear-1); ?>" class="btn btn-info" target="_blank">Part A</a>
							    	<a href="partB.php?id=<?php echo $id; ?>&year=<?php echo ($currentyear-1); ?>" class="btn btn-info" style="margin-top: 10px" target="_blank">Part B</a>
							    	<?php
							    }
							    else
							    {
							    	?>
							    	<img src="error.png" style="width:25px;display: block;margin-top: 30px" class="mx-auto">
							    	<?php
							    }
						   		?>
						    </td>

						    <td>
								<?php
							    if($eligible==true && $sfr==true)
							    {
							    	?>
						    		<a href="summary.php?id=<?php echo $id; ?>&year=<?php echo ($currentyear-1); ?>" class="btn btn-success" style="margin-top: 25px" target="_blank">Summary</a></td>
						    		<?php
							    }
							    else
							    {
							    	?>
							    	<img src="error.png" style="width:25px;display: block;margin-top: 30px" class="mx-auto">
							    	<?php
							    }
						   		?>
						      	<!-- <form class="update-rights-form" id="update-rights-form-<?php echo $id; ?>" action="" method="POST">
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

						      	</form> -->
						      	
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