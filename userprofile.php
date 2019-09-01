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


$sql="SELECT email, faculty_name, date_of_joining, department, ecode, mobileno, profilePicLocation, hod, committee, principal, admin FROM faculty_table WHERE id='$userId'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

$email=$row['email'];
$faculty_name=$row['faculty_name'];
$date_of_joining=$row['date_of_joining'];
$department=$row['department'];
$ecode=$row['ecode'];
$mobileno=$row['mobileno'];
$profilePicLocation=$row['profilePicLocation'];
$hod=$row['hod'];
$committee=$row['committee'];
$principal=$row['principal'];
$admin=$row['admin'];

include 'top.php';
include 'left-nav.php';		

$lasttolastyear=$previousyear-1;		
/*
?>

   	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark"  style="height: 50px">
	  	<a class="navbar-brand" href="index.php">CAS</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
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
				        <img class="nav-link dropdown-toggle" src="<?php echo $profilePicLocation; ?>" width="50px" height="50px" style="overflow: hidden;border-radius: 50%;display:block;margin:0 auto;object-fit: cover;cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				        	<h6 class="dropdown-header"><?php echo $_SESSION['faculty_name']; ?></h6>
				          	<a class="dropdown-item" href="userprofile.php"><img src="defaults/default_userprofile_pic.png" style="width:30px;height:auto;"><span class="my-auto ml-2">My Profile</span></a>
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
	<?php 
	*/ 
	?>
	<div class="container" style="margin-top: 8px">
    <div class="row justify-content-center">    		
    <div class="col offset-md-2">

				
				<?php

				// $sql="SELECT email, faculty_name, date_of_joining, department, profilePicLocation, hod, committee, principal, admin FROM faculty_table WHERE id='$userId'";
				// $result=mysqli_query($conn,$sql);

				// $row=mysqli_fetch_assoc($result);

				// $email=$row['email'];
				// $faculty_name=$row['faculty_name'];
				// $date_of_joining=$row['date_of_joining'];
				// $department=$row['department'];
				// $profilePicLocation=$row['profilePicLocation'];
				// $hod=$row['hod'];
				// $committee=$row['committee'];
				// $principal=$row['principal'];
				// $admin=$row['admin'];

				?>

				<div class="card userprofile-card">
			      	<div class="card-body">
			      		<div class="row">
			      			<div class="col-md-11 col-sm-10 col-xs-9">
			      				<h5><?php echo $faculty_name; ?></h5>
			      			</div>
			      			<!-- <div class="col-md-1 col-sm-2 col-xs-3">
			        			<a href="#" class="align-bottom"><img src="settings.png" style="width:auto;height:100%;margin-top:-10px"></a>
			      			</div> -->
			      		</div>
			        	
			        	<div class="row">

			        		<div class="col-md-4">
			        			<img class="img-responsive" src="<?php echo $profilePicLocation; ?>" width="180px" height="180px" style="overflow: hidden;border-radius: 50%;display:block;margin:0 auto;object-fit: cover;">
			        			<?php
			        			if($admin==1)
			        			{
			        				?>
			        				<a class="btn btn-primary my-2" href="adminpanel.php" style="display:block;margin:0 auto">Access Admin Panel</a>
			        				<?php
			        			}
			        			?>
			        		</div>
			        		
			        		<div class="col-md-4">
			        			<p class="card-text" style="margin-top:1rem"><b>Date of Joining:</b> <?php echo $date_of_joining; ?></p>
			        			<p class="card-text"><b>Email:</b> <?php echo $email; ?></p>
			        			<p class="card-text"><b>Employee Code:</b> <?php echo $ecode; ?></p>
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
			        			<p class="card-text"><b>Mobile No.:</b> <?php echo $mobileno; ?></p>
			        		</div>

			        	</div>
			        	
			      	</div>
			    </div>
			    <?php
			    $currentyear=date("Y");
			    if(date("m")>=7)
			    {
			    	$currentyear+=1;
			    }
				$previousyear=$currentyear-1;
				$lasttolastyear=$previousyear-1;
				// echo $currentyear;
			    $sqlx="SELECT cas_approved FROM cas_approval_table WHERE facultyId='$userId' AND currentyear='$previousyear' AND previousyear='$lasttolastyear'";
			    $resultx=mysqli_query($conn,$sqlx);
			    if(mysqli_num_rows($resultx)>0)
			    {
			    	$rowx=mysqli_fetch_assoc($resultx);
			    	$approval=$rowx['cas_approved'];

			    	?>
			    	<div class="card userprofile-card">
			    		<div class="card-body">
			    			<?php
				    		if($approval=='Approved')
				    		{
					    		?>
						       	<p class="card-text"><img src="checked.png" style="width:32px"> Your CAS application has been approved.</p>			    
					    		<?php
						    }
						    else
						    {
						    	?>
					    		<p class="card-text"><img src="error.png" style="width:32px"> Your CAS application has not been approved.</p>
						   		<?php
					    	}
					   		?>
				    	</div>
				    </div>
				    <?php 
				}
			    ?>
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
					  			<!-- <h3 class="text-center">CAS ELIGIBILITY AND APPLICATION</h3><br> -->
					  			<h3 class="text-center">SELF APPRAISAL FORM FILLING & APPLICATION</h3><br>
					  			<!-- CHECK ELIGIBILITY STATUS -->
					  			<p>
								  	<a href="partA.php?id=<?php echo $userId; ?>&year=2019"><button class="btn btn-info" type="button">
								    FORM A ~ 2018 - 2019
								  	</button></a>
								  	<a href="partB.php?id=<?php echo $userId; ?>&year=2019"><button class="btn btn-info ml-2" type="button">
									FORM B ~ 2018 - 2019
									</button></a>					  	
								</p>
								<hr>
								<p style="font-size:20px"><b>Form Submission Status:</b></p>
								<table class="table table-bordered" style="background-color: white">
									<thead style="color: white">
										<tr>
											<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">#</th>
											<th scope="col" rowspan="2" style="background-color: #343a40;text-align: center">Year</th>
											<th scope="col" colspan="2" style="background-color: #343a40;text-align: center">Submission Status</th>
										</tr>
										<tr>
									    	<th scope="col"style="background-color: #343a40">Form A</th>
									    	<th scope="col"style="background-color: #343a40">Form B</th>									    	
									    </tr>
									</thead>
									<tbody>
										<?php

										$sql="SELECT partA, partB, year FROM submitted_for_self_appraisal WHERE facultyId='$userId'";
										$result=mysqli_query($conn, $sql);
										$sfpartA=0;
										$sfpartB=0;
										if(mysqli_num_rows($result)!=0)
										{
											$counter=0;
											while($row=mysqli_fetch_assoc($result))
											{
												$sfpartB=$row['partB'];
												$sfpartA=$row['partA'];
												$sfyear=$row['year'];

												$counter+=1;
												?>
												<tr>
													<td class="text-center"><?php echo $counter; ?></td>
													<td class="text-center"><?php echo ($sfyear-1).'-'.$sfyear; ?></td>
													<?php 

													if($sfpartA==1)
													{
														?>
														<td class="text-center"><img src="checked.png" style="width:25px;display: block" class="mx-auto"></td>
														<?php
													}
													else
													{
														?>
														<td class="text-center"><img src="error.png" style="width:25px;display: block" class="mx-auto"></td>
														<?php
													}


													if($sfpartB==1)
													{
														?>
														<td class="text-center"><img src="checked.png" style="width:25px;display: block" class="mx-auto"></td>
														<?php
													}
													else
													{
														?>
														<td class="text-center"><img src="error.png" style="width:25px;display: block" class="mx-auto"></td>
														<?php
													}
													?>
												</tr>
												<?php
											}
										}

										?>
									</tbody>
								</table>

					  			<hr style="height:1px;border:none;color:#333;background-color:#333;">
					  			<h3 class="text-center">CAS ELIGIBILITY AND APPLICATION</h3><br>

					  			<p>
								  	<button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseEligible" aria-expanded="false" aria-controls="collapseEligible">
								    Check CAS Eligibility Status
								  	</button>	
								  	<a href="guidelines.php"><button class="btn btn-dark ml-2" type="button" data-toggle="collapse" data-target="#collapseGuidelines" aria-expanded="false" aria-controls="collapseGuidelines">
									Check CAS Guidelines
									</button></a>					  	
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

									    
								  	</div>
								</div>
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
									  		// $currentyear=date("Y");
									  		// $previousyear=$currentyear-1;

									    		if($_SESSION['id']==$userId)
												{

													$sqlsfr="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$currentyear' AND partA=1 AND partB=1";
													$resultsfr=mysqli_query($conn,$sqlsfr);

													if(mysqli_num_rows($resultsfr)!=0)
													{	
														$sqlsfrp="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$previousyear' AND partA=1 AND partB=1";
														$resultsfrp=mysqli_query($conn,$sqlsfrp);

														if(mysqli_num_rows($resultsfrp)!=0)
														{	

															$sqlsfrl="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$lasttolastyear' AND partA=1 AND partB=1";
															$resultsfrl=mysqli_query($conn,$sqlsfrl);

															if(mysqli_num_rows($resultsfrl)!=0)
															{	

																?>
																<div class="col-md-2 col-sm-6" style="margin-left:-15px;padding-right:0px;margin-bottom: 8px">
																	<a href="summary.php?id=<?php echo $userId; ?>&year=<?php echo $currentyear; ?>" class="btn btn-info" style="width:100%" target="_blank">Summary</a>
																</div>
															
																<?php
															}
														}
													}

												}

									    		
									  		?>
									    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $previousyear.'-'.($previousyear-1); ?></b></p>
									    	<div class="row">							    		
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
									    			<a href="partA.php?id=<?php echo $userId; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
									    		</div>
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
									    			<a href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>	
									    		</div> 
									    		

									    	</div>
									    	<hr>
									    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo ($previousyear-1).'-'.($previousyear-2); ?></b></p>
									    	<div class="row">							    		
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
									    			<a href="partA.php?id=<?php echo $userId; ?>&year=<?php echo $lasttolastyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
									    		</div>
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
									    			<a href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $lasttolastyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
									    		</div>
									    	</div>
									    	<hr>
									    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo ($lasttolastyear-1).'-'.($lasttolastyear-2); ?></b></p>
									    	<div class="row">							    		
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
									    			<a href="partA.php?id=<?php echo $userId; ?>&year=<?php echo $lasttolastyear-1; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
									    		</div>
									    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
									    			<a href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $lasttolastyear-1; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
									    		</div>
									    	</div>

									    	<?php

									    	?>
									  	</div>
									</div>
									
									<?php
								}
								
								?>								
					  		</div>

					  		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ VIEW PROFILES OF FACULTY IN YOUR DEPARTMENT TAB ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					  		<?php

							if($hod==1)
							{
							
							?>
					  		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  			<!-- VIEW OTHER PROFILES -->						
								<!-- <hr> -->
								<h3 class="text-center">VIEW FORMS AND PROFILES OF FACULTY IN YOUR (<?php echo $department; ?>) DEPARTMENT</h3><br>
								<!-- <p class="card-text"><b></b></p>							 -->
								<p>
								  	<!-- <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseHODFaculty<?php echo $department; ?>" aria-expanded="false" aria-controls="collapseHODFaculty<?php echo $department; ?>">
								    View Forms of Faculty
								  	</button> -->
								  	<a class="btn btn-info" href="viewprofiles.php">View Profiles of Faculty</a>
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
											    	<?php

										    		if($_SESSION['id']==$userId)
													{

														$sqlsfr="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$facultyId1' AND year='$currentyear' AND partA=1 AND partB=1";
														$resultsfr=mysqli_query($conn,$sqlsfr);

														if(mysqli_num_rows($resultsfr)!=0)
														{	
															$sqlsfrp="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$facultyId1' AND year='$previousyear' AND partA=1 AND partB=1";
															$resultsfrp=mysqli_query($conn,$sqlsfrp);

															if(mysqli_num_rows($resultsfrp)!=0)
															{	
																$sqlsfrl="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$facultyId1' AND year='$lasttolastyear' AND partA=1 AND partB=1";
																$resultsfrl=mysqli_query($conn,$sqlsfrl);

																if(mysqli_num_rows($resultsfrl)!=0)
																{
																	?>
															    	<p style="margin:0">
																	  	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFormMenuUnderHOD<?php echo $facultyId1; ?>" aria-expanded="false" aria-controls="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
																	    VIEW FORMS
																	  	</button>
																		<a href="summary.php?id=<?php echo $facultyId1; ?>&year=<?php echo $currentyear; ?>" class="btn btn-info" target="_blank">Summary</a>	
																	</p>
																  	<div class="collapse" id="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
																	  	<div class="card card-body">
																	    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $currentyear; ?></b></p>
																	    	<div class="row">							    		
																	    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
																	    			<a href="partA.php?id=<?php echo $facultyId1; ?>&year=<?php echo $currentyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
																	    		</div>
																	    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
																	    			<a href="partB.php?id=<?php echo $facultyId1; ?>&year=<?php echo $currentyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
																	    		</div>
																	    	</div>
																	    	<hr>
																	    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $previousyear; ?></b></p>
																	    	<div class="row">							    		
																	    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																	    			<a href="partA.php?id=<?php echo $facultyId1; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
																	    		</div>
																	    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																	    			<a href="partB.php?id=<?php echo $facultyId1; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
																	    		</div>
																	    	</div>
																	    	<hr>
																	    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $lasttolastyear; ?></b></p>
																	    	<div class="row">							    		
																	    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																	    			<a href="partA.php?id=<?php echo $facultyId1; ?>&year=<?php echo $lasttolastyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
																	    		</div>
																	    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																	    			<a href="partB.php?id=<?php echo $facultyId1; ?>&year=<?php echo $lasttolastyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
																	    		</div>
																	    	</div>
																	  	</div>
																	</div>
																	<?php
																}
															}
														}
													}
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
					  			<h3 class="text-center">VIEW PROFILES AND FORMS OF ALL FACULTY</h3><br>			
								<p>
								  	<!-- <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseAllFaculty" aria-expanded="false" aria-controls="collapseAllFaculty">
								    View Forms of Faculty
								  	</button> -->
								  	<a class="btn btn-info" href="viewprofiles.php">View Profiles of Faculty</a>
								  	<a class="btn btn-primary" href="finalsummary.php">View Final Summary</a>
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
													    	<?php

												    		if($_SESSION['id']==$userId)
															{

																$sqlsfr="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$facultyId1' AND year='$currentyear' AND partA=1 AND partB=1";
																$resultsfr=mysqli_query($conn,$sqlsfr);

																if(mysqli_num_rows($resultsfr)!=0)
																{	
																	$sqlsfrp="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$facultyId1' AND year='$previousyear' AND partA=1 AND partB=1";
																	$resultsfrp=mysqli_query($conn,$sqlsfrp);

																	if(mysqli_num_rows($resultsfrp)!=0)
																	{	
																		$sqlsfrl="SELECT partA,partB FROM submitted_for_review_table WHERE facultyId='$facultyId1' AND year='$lasttolastyear' AND partA=1 AND partB=1";
																		$resultsfrl=mysqli_query($conn,$sqlsfrl);

																		if(mysqli_num_rows($resultsfrl)!=0)
																		{
																			?>
														    				<p style="margin:0">
																  				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseFormMenuUnderHOD<?php echo $facultyId1; ?>" aria-expanded="false" aria-controls="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
																		    	VIEW FORMS
																		  		</button>
																				<a href="summary.php?id=<?php echo $facultyId1; ?>&year=<?php echo $currentyear; ?>" class="btn btn-info" target="_blank">Summary</a>	
																			</p>
																		  	<div class="collapse" id="collapseFormMenuUnderHOD<?php echo $facultyId1; ?>">
																			  	<div class="card card-body">
																			    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $currentyear; ?></b></p>
																			    	<div class="row">							    		
																			    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
																			    			<a href="partA.php?id=<?php echo $facultyId1; ?>&year=<?php echo $currentyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
																			    		</div>
																			    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0px">
																			    			<a href="partB.php?id=<?php echo $facultyId1; ?>&year=<?php echo $currentyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
																			    		</div>
																			    	</div>
																			    	<hr>
																			    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $previousyear; ?></b></p>
																			    	<div class="row">							    		
																			    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																			    			<a href="partA.php?id=<?php echo $facultyId1; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
																			    		</div>
																			    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																			    			<a href="partB.php?id=<?php echo $facultyId1; ?>&year=<?php echo $previousyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
																			    		</div>
																			    	</div>
																			    	<hr>
																			    	<p class="card-text" style="margin-bottom: 0px"><b><?php echo $lasttolastyear; ?></b></p>
																			    	<div class="row">							    		
																			    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																			    			<a href="partA.php?id=<?php echo $facultyId1; ?>&year=<?php echo $lasttolastyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM A</a>
																			    		</div>
																			    		<div class="col-md-2 col-sm-6" style="margin:0;padding-right:0">
																			    			<a href="partB.php?id=<?php echo $facultyId1; ?>&year=<?php echo $lasttolastyear; ?>" class="btn btn-primary" style="margin-top: 10px;width:100%" target="_blank">FORM B</a>
																			    		</div>
																			    	</div>
																			  	</div>
																			</div>
																			<?php	
																		}																	
																	}
																}

															}

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
	
	<br>
</div>
</div>

	
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