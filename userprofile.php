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
				          	<a class="dropdown-item" href="userprofile.php">My Profile</a>
				          	<a class="dropdown-item" href="#">Upload Profile Picture</a>
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
			<div class="col-md-10">
				
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
			        	<h5 class="card-title"><?php echo $faculty_name; ?></h5>
			        	<div class="row">

			        		<div class="col-md-4">
			        			<img src="defaults/default_userprofile_pic.png" width="216px" style="display:block;margin:0 auto">
			        			<?php
			        			if($admin==1)
			        			{
			        				?>
			        				<a class="btn btn-primary" href="adminpanel.php" style="display:block;margin:0 auto">Access Admin Panel</a>
			        				<?php
			        			}
			        			?>
			        		</div>
			        		
			        		<div class="col-md-4">
			        			<p class="card-text" style="margin-top:1rem"><b>Date of Joining:</b> <?php echo $date_of_joining; ?></p>
			        			<p class="card-text"><b>Email:</b> <?php echo $email; ?></p>

			        			<?php 

			        			if($hod==1)
			        			{
			        				?>
			        				<p class="card-text"><b>H.O.D. of <?php echo $department; ?> department.</b></p>
			        				<?php
			        			}

			        			if($committee==1)
			        			{
			        				?>
			        				<p class="card-text"><b>Member of CAS committee.</b></p>
			        				<?php
			        			}

			        			

			        			?>
			        		</div>

			        		<div class="col-md-4">
			        			<p class="card-text" style="margin-top:1rem"><b>Department:</b> <?php echo $department; ?></p>
			        		</div>

			        	</div>
			        	
			      	</div>
			    </div>

			    <div class="card userprofile-card">
			      	<div class="card-body">
			        	<h5 class="card-title">MY PROFILE</h5>
			        	<ul class="nav nav-pills mb-3 justify-content-center nav-fill" id="pills-tab" role="tablist">
						  	<li class="nav-item">
						    	<a class="nav-link active" id="pills-apply-tab" data-toggle="pill" href="#pills-apply" role="tab" aria-controls="pills-apply" aria-selected="true"><img src="apply.png" style="width:30px;height:30px"></a>
						  	</li>
						  	<?php
							if($hod==1)
							{							
							?>
						  	<li class="nav-item">
						    	<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="profile.png" style="width:30px;height:30px"></a>
						  	</li>
						  	<?php
						  	}
						  	?>
						  	<?php							
							if($committee==1 || $principal==1)
							{
							?>
						  	<li class="nav-item">
						    	<a class="nav-link" id="pills-all-faculty-tab" data-toggle="pill" href="#pills-all-faculty" role="tab" aria-controls="pills-all-faculty" aria-selected="false"><img src="all-profile.png" style="width:30px;height:30px"></a>
						  	</li>
							<?php
							}
							?>
						</ul>
						<div class="tab-content" id="pills-tabContent">

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CHECK CAS ELIGBILITY TAB ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					  		<div class="tab-pane fade show active" id="pills-apply" role="tabpanel" aria-labelledby="pills-apply-tab">	
					  			<!-- CHECK ELIGIBILITY STATUS -->
					  			<p>
								  	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseEligible" aria-expanded="false" aria-controls="collapseEligible">
								    Check CAS Eligibility Status
								  	</button>						  	
								</p>
								<div class="collapse" id="collapseEligible">
								  	<div class="card card-body">
								    	<?php
										$now = time();
										$your_date = strtotime($date_of_joining);
										$datediff = $now - $your_date;
										$years = floor($datediff / (365*60*60*24));
										$eligible=0; // if user is eligible for CAS, $eligible=1 else 0
									    if($years>=5)
									    {
									    	$eligible=1;
									    	?>
									    	<p class="card-text"><img src="checked.png" style="width:32px"> Eligible for CAS</p>
									    	<?php
									    }
									    else
									    {
									    	?>
									    	<p class="card-text"><img src="error.png" style="width:32px"> Not Eligible for CAS</p>
									    	<?php
									    }
									    ?>

									    <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseEligibleCriteria" aria-expanded="false" aria-controls="collapseEligibleCriteria">
									    Check CAS Eligibility Criteria
									  	</button>
									  	<div class="collapse" id="collapseEligibleCriteria">
								  			<div class="card card-body">
								  				Criteria
								  			</div>
								  		</div>
								  	</div>
								</div>
								
								<!-- CHECK ELIGIBILITY STATUS OVER -->
								<!-- <hr> -->
								<!-- FORMS -->
								<?php

								if($eligible==1)
								{
									?>
									
									<hr>
									<p class="card-text"><b>APPLY FOR CAS</b></p>
									<p>
									  	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFormMenu" aria-expanded="false" aria-controls="collapseFormMenu">
									    APPLY FOR CAS
									  	</button>
									</p>
								  	<div class="collapse" id="collapseFormMenu">
									  	<div class="card card-body">
									  		<?php
									  		// echo date("Y");
									  		$currentyear=date("Y");
									  		$previousyear=$currentyear-1;

									  		?>
									    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $currentyear; ?></b></p>
									    	<div class="row">							    		
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
									    			<a href="partA.php?id=<?php echo $userId; ?>&year=<?php echo $currentyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM A</a>
									    		</div>
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
									    			<a href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $currentyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM B</a>	
									    		</div> 
									    	</div>
									    	<hr>
									    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $previousyear; ?></b></p>
									    	<div class="row">							    		
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
									    			<a href="partA.php?id=<?php echo $userId; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM A</a>
									    		</div>
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
									    			<a href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM B</a>
									    		</div>
									    	</div>
									    	<?php

									    	?>
									  	</div>
									</div>
									
									<?php
								}

								?>
								<!-- FORMS OVER -->
					  		</div>

					  		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ VIEW PROFILES OF FACULTY IN YOUR DEPARTMENT TAB ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					  		<?php

							if($hod==1)
							{
							
							?>
					  		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  			<!-- VIEW OTHER PROFILES -->						
								<!-- <hr> -->
								<p class="card-text"><b>VIEW PROFILES OF FACULTY IN YOUR (<?php echo $department; ?>) DEPARTMENT</b></p>							
								<p>
								  	<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseHODFaculty<?php echo $department; ?>" aria-expanded="false" aria-controls="collapseHODFaculty<?php echo $department; ?>">
								    View profiles
								  	</button>
								</p>
								<div class="collapse" id="collapseHODFaculty<?php echo $department; ?>">
								  	<div class="card card-body">
								  		<?php

								  		$sql2="SELECT id, faculty_name, date_of_joining FROM faculty_table WHERE department='$department' AND hod=0";
								  		$result2=mysqli_query($conn,$sql2);

								  		$now = time();

								  		while($row2=mysqli_fetch_assoc($result2))
								  		{
								  			$facultyId1=mysqli_real_escape_string($conn,$row2['id']);
								  			$faculty_name1=mysqli_real_escape_string($conn,$row2['faculty_name']);
								  			$date_of_joining1=mysqli_real_escape_string($conn,$row2['date_of_joining']);

								  			?>
								  			<p>
											  	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseHODFacultyInner<?php echo $facultyId1; ?>" aria-expanded="false" aria-controls="collapseHODFacultyInner<?php echo $facultyId1; ?>">
											    <?php echo $faculty_name1; ?>
											  	</button>
											</p>
											<div class="collapse" id="collapseHODFacultyInner<?php echo $facultyId1; ?>" style="margin-bottom:10px">
											  	<div class="card card-body">
									  			<?php

									  			// echo $date_of_joining1;
									  			$your_date = strtotime($date_of_joining1);
												$datediff = $now - $your_date;
												$years = floor($datediff / (365*60*60*24));
											    if($years>=5)
											    {
											    	?>
											    	<p class="card-text"><img src="checked.png" style="width:32px"> Eligible for CAS</p>
											    	<p>
													  	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFormMenuUnderHOD<?php echo $facultyId1; ?>" aria-expanded="false" aria-controls="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
													    VIEW FORMS
													  	</button>
													</p>
												  	<div class="collapse" id="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
													  	<div class="card card-body">
													  		<?php
													  		// echo date("Y");
													  		$currentyear=date("Y");
													  		$previousyear=$currentyear-1;

													  		?>
													    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $currentyear; ?></b></p>
													    	<div class="row">							    		
													    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
													    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM A</a>
													    		</div>
													    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
													    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM B</a>
													    		</div>
													    	</div>
													    	<hr>
													    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $previousyear; ?></b></p>
													    	<div class="row">							    		
													    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
													    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM A</a>
													    		</div>
													    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
													    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM B</a>
													    		</div>
													    	</div>
													    	<?php

													    	?>
													  	</div>
													</div>

											    	<?php
											    }
											    else
											    {
											    	?>
											    	<p class="card-text"><img src="error.png" style="width:32px"> Not Eligible for CAS</p>
											    	<?php
											    }
												?>
												</div>
											</div>
										<?php
								  		}																  		

								    	?>
								  	</div>
								</div>
							<!-- VIEW OTHER PROFILES END -->
					  		</div>
					  		<?php
					  		}
					  		?>
					  		<!-- VIEW ALL PROFILES AS A COMMITTEE MEMBER -->
							<?php							
							if($committee==1 || $principal==1)
							{
							?>
					  		<div class="tab-pane fade" id="pills-all-faculty" role="tabpanel" aria-labelledby="pills-all-faculty-tab">
					  			
					  			<!-- <hr> -->
								<p class="card-text"><b>VIEW PROFILES OF ALL FACULTY</b></p>							
								<p>
								  	<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseAllFaculty" aria-expanded="false" aria-controls="collapseAllFaculty">
								    View profiles
								  	</button>
								</p>
								<div class="collapse" id="collapseAllFaculty">
								  	<div class="card card-body">
								  		<?php

								  		$sql00="SELECT DISTINCT department FROM faculty_table";
								  		$result00=mysqli_query($conn,$sql00);

								  		while($row3=mysqli_fetch_assoc($result00))
								  		{
								  			$department=mysqli_real_escape_string($conn,$row3['department']);

								  			?>
								  			<p>
											  	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseAll<?php echo $department; ?>" aria-expanded="false" aria-controls="collapseAll<?php echo $department; ?>">
											    <?php echo $department; ?>
											  	</button>
											</p>
											<div class="collapse" id="collapseAll<?php echo $department; ?>">
								  				<div class="card card-body">

									  			<?php

										  		$sql2="SELECT id, faculty_name, date_of_joining, hod FROM faculty_table WHERE department='$department' AND id!='$userId'";
										  		$result2=mysqli_query($conn,$sql2);

										  		$now = time();

										  		while($row2=mysqli_fetch_assoc($result2))
										  		{
										  			$facultyId1=mysqli_real_escape_string($conn,$row2['id']);
										  			$faculty_name1=mysqli_real_escape_string($conn,$row2['faculty_name']);
										  			$date_of_joining1=mysqli_real_escape_string($conn,$row2['date_of_joining']);
										  			$hod=mysqli_real_escape_string($conn,$row2['hod']);

										  			?>
										  			<p>
													  	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseHODFacultyInner<?php echo $facultyId1; ?>" aria-expanded="false" aria-controls="collapseHODFacultyInner<?php echo $facultyId1; ?>">
													    <?php echo $faculty_name1; ?>
													    <?php 

													    if($hod==1)
													    {
													    	?>
													    	(HOD)
													    	<?php
													    }

													    ?>
													  	</button>
													</p>
													<div class="collapse" id="collapseHODFacultyInner<?php echo $facultyId1; ?>" style="margin-bottom:10px">
													  	<div class="card card-body">
											  			<?php

											  			// echo $date_of_joining1;
											  			$your_date = strtotime($date_of_joining1);
														$datediff = $now - $your_date;
														$years = floor($datediff / (365*60*60*24));
													    if($years>=5)
													    {
													    	?>
													    	<p class="card-text"><img src="checked.png" style="width:32px"> Eligible for CAS</p>
													    	<p>
															  	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFormMenuUnderHOD<?php echo $facultyId1; ?>" aria-expanded="false" aria-controls="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
															    VIEW FORMS
															  	</button>
															</p>
														  	<div class="collapse" id="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
															  	<div class="card card-body">
															  		<?php
															  		// echo date("Y");
															  		$currentyear=date("Y");
															  		$previousyear=$currentyear-1;

															  		?>
															    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $currentyear; ?></b></p>
															    	<div class="row">							    		
															    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
															    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM A</a>
															    		</div>
															    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
															    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM B</a>
															    		</div>
															    	</div>
															    	<hr>
															    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $previousyear; ?></b></p>
															    	<div class="row">							    		
															    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
															    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM A</a>
															    		</div>
															    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
															    			<a href="#" class="btn btn-primary" style="margin-top: 10px;width:100%">FORM B</a>
															    		</div>
															    	</div>

															  	</div>
															</div>

													    	<?php


													    }
													    else
													    {
													    	?>
													    	<p class="card-text"><img src="error.png" style="width:32px"> Not Eligible for CAS</p>
													    	<?php
													    }

														?>
														</div>
													</div>
												<?php
										  		}

										  		?>
										  		</div>		
										  	</div>	
										<?php												  		
									  	}

								    	?>
								  	</div>
								</div>
					  		</div>
					  		<?php
							}							
							?>
							<!-- VIEW ALL PROFILES AS A COMMITTEE MEMBER OVER -->
						</div>	        	
			        							

						
			      	</div>
			    </div>
			</div>
		</div>
	</div>
	<br>
	
</body>
</html>

<?php

}

?>

<script type="text/javascript">
	$('.tree-toggle').click(function () {
	$(this).parent().children('ul.tree').toggle(200);
});
</script>