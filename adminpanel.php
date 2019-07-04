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

if(isset($_GET['filter']))
{
	$filter=mysqli_real_escape_string($conn, $_GET['filter']);
}

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
						   <p style="color: white;font-size: 30px"><i class="fas fa-hammer" style="font-size: 28px"></i> Admin Panel</p>
				        </div>				        
				        <div class="col-md-6 text-right" style="height:100%">
						 	<a href="createuser.php" class="btn btn-info custom-button-width navbar-right my-auto" style="font-size: 17px">Create User</a>
						</div>
				  	</div>
				  	<div class="row justify-content-center">
				  		<div class="col-md-12 text-center admin-filter-box"> 
				        	<div class="row align-items-center" style="padding-bottom: 10px;padding-top: 10px">
				        		<div class="col-md-2 offset-md-1">
				        			<p style="color: white;font-size: 15px" class="my-auto text-right">Filter by:</p>
				        		</div>
				        		<div class="col-md-3 align-items-center">
				        			<select id="filter" name="filter" class="form-control" onchange="adminfilters(this);">
				        				<option value="0">Choose</option>
				        				<option value="faculty_name">Faculty Name</option>
				        				<option value="department">Department</option>
				        				<option value="date_of_joining">Date of Joining</option>
				        			</select>
				        		</div>
				        		<div class="col-md-4 align-items-center">
				        			<form method="POST" action="admin-panel-fetch-data.php">
				        				<div class="input-group">
										  	<input type="text" class="form-control" name="query" placeholder="Search faculty name" aria-label="Search faculty name" aria-describedby="basic-addon2">
										  	<div class="input-group-append">
										    	<button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
										  	</div>
										</div>
				        			</form>				        			
				        		</div>
				        	</div>
				        </div>
				  	</div>
				</div>

				<div class="admin-table" style="max-height:500px">
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
				  	<tbody id="admin-panel-tbody">
				  		<?php

				  		if(isset($_GET['filter']) && $_GET['filter']!="search")
				  		{
				  			$sql="SELECT id, faculty_name, email, date_of_joining, department, faculty, hod, committee, principal, admin FROM faculty_table ORDER BY $filter ASC";
				  		}
				  		else if(isset($_GET['filter']) && $_GET['filter']=="search")
				  		{
				  			$query=mysqli_real_escape_string($conn,$_GET['q']);
				  			$sql="SELECT id, faculty_name, email, date_of_joining, department, faculty, hod, committee, principal, admin FROM faculty_table WHERE faculty_name LIKE '%$query%'";
				  		}
				  		else
				  		{
				  			$sql="SELECT id, faculty_name, email, date_of_joining, department, faculty, hod, committee, principal, admin FROM faculty_table";
				  		}
				  		
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

				<br>
				<!-- <hr style="border: 0.5px solid #c8c8c8"> -->

				<?php
				/*
				<div class="col-md-12">
					<div class="container-fluid">
					  	<div class="row">
					  		<div class="col-md-6 text-left"> 
							   <p style="color: white;font-size: 20px">Add New Field</p>
					        </div>
					  	</div>
					  	<div class="row justify-content-center">
					  		<div class="col-md-12 text-center admin-filter-box"> 
					  			<form method="POST" action="add-field-sys.php" onsubmit="return confirm('Do you want to create a new field?');">

						        	<div class="row align-items-center" style="padding-bottom: 10px;padding-top: 10px">
						        		<div class="col-md-4">
						        			<input type="text" class="form-control" name="fieldtitle" id="fieldtitle" placeholder="Enter the title of the field">
						        		</div>
						        		<div class="col-md-4 align-items-center">
						        			<input type="number" class="form-control" name="maxpi" id="maxpi" placeholder="Enter the max PI for the field">
						        		</div>
						        		<div class="col-md-4 align-items-center">						        			
					        				<select id="inputtype" name="inputtype" class="form-control">
						        				<option value="0">Choose Input Type</option>
						        				<option value="text">Text</option>
						        				<option value="number">Number</option>
						        				<option value="date">Date</option>
						        			</select>					        					        			
						        		</div>
						        	</div>
						        	<div class="row align-items-center" style="padding-bottom: 10px;padding-top: 10px">
						        		<div class="col-md-4">
						        			<input type="text" class="form-control" name="fieldname" id="fieldname" placeholder="Enter the name of the field">
						        		</div>
						        		<div class="col-md-4 align-items-center">
						        			<input type="text" class="form-control" name="fieldid" id="fieldid" placeholder="Enter the id for the field">
						        		</div>
						        		<div class="col-md-4 align-items-center">
						        			<input type="text" class="form-control" name="fieldplaceholder" id="fieldplaceholder" placeholder="Enter the placeholder for the field">
						        		</div> 
						        	</div>
						        	<div class="row align-items-center" style="padding-bottom: 10px;padding-top: 10px">
						        		<div class="col-md-4">
						        			<select id="fieldform" name="fieldform" class="form-control">
						        				<option value="0">Choose The Form</option>
						        				<option value="A">Form A</option>
						        				<option value="B cat 1">Form B Category 1</option>
						        				<option value="B cat 2">Form B Category 2</option>
						        				<option value="B cat 3">Form B Category 3</option>
						        				<option value="B cat 4">Form B Category 4</option>
						        			</select>	
						        		</div>
						        		<div class="col-md-4 align-items-center">
						        			<input type="date" class="form-control" name="fielddate" id="fielddate" placeholder="Enter the start date for the field">
						        		</div>
						        		<div class="col-md-4 align-items-center">
						        			<button type="submit" class="btn btn-success h-100 w-100">Create Field</button>
						        		</div>
						        	</div>

					        	</form>		
					        </div>
					  	</div>
					</div>
				</div>

				<div class="admin-table" style="max-height:500px">
				<table class="table table-bordered" style="background-color: white">
				  	<thead style="color: white">
					    <tr>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Sr.No</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Field Title</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Max PI</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Input Type</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Field HTML Name</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Field HTML ID</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Field Placehlder</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Field Form</th>
					      	<th scope="col" style="background-color: #343a40;text-align: center">Field Date</th>
					 		<th scope="col" style="background-color: #343a40;text-align: center">Delete Field</th>
					    </tr>
				  	</thead>
				  	<tbody id="admin-panel-tbody">
				  		<?php

				  		
				  		$sql="SELECT id, fieldtitle, maxpi, inputtype, fieldname, fieldid, fieldplaceholder, fieldform, fielddate FROM fields_table";
				  		$result=mysqli_query($conn,$sql);
				  		$counter=1;

				  		while($row=mysqli_fetch_assoc($result))
				  		{
				  			$id=$row['id'];
				  			$fieldtitle=$row['fieldtitle'];
				  			$maxpi=$row['maxpi'];
				  			$inputtype=$row['inputtype'];
				  			$fieldname=$row['fieldname'];
				  			$fieldid=$row['fieldid'];
				  			$fieldplaceholder=$row['fieldplaceholder'];
				  			$fieldform=$row['fieldform'];
				  			$fielddate=$row['fielddate'];

					  		?>
						    <tr id="field<?php echo $id; ?>">
						      	<th scope="row"><?php echo $counter; ?></th>
						      	<td><?php echo $fieldtitle; ?></td>
						      	<td><?php echo $maxpi; ?></td>
						      	<td><?php echo $inputtype; ?></td>
						      	<td><?php echo $fieldname; ?></td>	
						      	<td><?php echo $fieldid; ?></td>
						      	<td><?php echo $fieldplaceholder; ?></td>
						      	<td><?php echo $fieldform; ?></td>
						      	<td><?php echo $fielddate; ?></td>

						      	<form class="delete-field-form" action="" method="POST">
						      		<td class="table-center">
		  								<input type="hidden" name="fieldidvalue" value="<?php echo $id; ?>">
		  								<button type="submit" name="submit" class="btn btn-primary" id="deletefield<?php echo $id; ?>">Delete</button>
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
				*/
				?>

			</div>
		</div>
		</div>
		<br>

		<?php

		$sqlmf="SELECT currentyear, previousyear FROM multiplication_factor_table";
		$resultmf=mysqli_query($conn, $sqlmf);
		$rowmf=mysqli_fetch_assoc($resultmf);
		$currentyearmf=$rowmf['currentyear'];
		$previousyearmf=$rowmf['previousyear'];

		?>
		
		<!-- <form action="multiplication_factor_sys.php" method="POST">
			<div class="row justify-content-center">
	  			<div class="col-md-10 text-center admin-filter-box">

	  				<div class="row justify-content-center">
	  					<div class="col-md-12 text-center">
	  						<label class="col-form-label text-center" style="font-size: 23px;color: white;">Multiplication Factor</label>
	  					</div>
	  				</div> 
	  				<hr style="border: 0.5px solid #c8c8c8">

	  				<div class="row">
	  					<div class="col-md-3 offset-md-1">
	  						<label for="" class="col-form-label" style="font-size: 18px;color: white;margin-left: -101px">Current Year</label>
	  					</div>
	  					<div class="col-md-3 offset-md-1">
	  						<label for="" class="col-form-label" style="font-size: 18px;color: white;margin-left: -240px">Previous Year</label>
	  					</div>
	  					<div class="col-md-3 offset-md-1">
	  						<label for="" class="col-form-label" style="font-size: 18px;color: white;margin-left: -395px">Last to last Year</label>
	  					</div>
	  				</div>
	        		<div class="row align-items-center" style="padding-bottom: 10px;padding-top: 10px;padding-left: 7px">
						<div class="col-md-2 offset-md-1">
	    					<input class="form-control" type="number" step="0.01" style="width: 120%;margin-left: -25px" value="<?php echo $currentyearmf; ?>" name="v1forcurryear" id="v1forcurryear"/>
	    				</div>
			    		<div class="col-md-2 offset-md-1">
			    			<input class="form-control" type="number" step="0.01" style="width: 120%;margin-left: -30px" value="<?php echo $previousyearmf; ?>" name="v2forcurryear" id="v2forcurryear"/>
			    		</div>
			    		<div class="col-md-2 offset-md-1">
			    			<input class="form-control" type="number" step="0.01" style="width: 120%;margin-left: -50px" value="<?php echo $previousyearmf; ?>" name="v3forcurryear" id="v3forcurryear"/>
			    		</div>
			    		<div class="col-md-3">
							<button type="submit" class="btn btn-success" id="saveforv" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">SAVE</button>
						</div>
					</div><br>
				</div>
			</div>
		</form> -->


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