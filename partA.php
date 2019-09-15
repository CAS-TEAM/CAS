<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
else if(!isset($_GET['id']) || !isset($_GET['year']))
{
	header("LOCATION: userprofile.php");
}
else
{

include 'dbh.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);//the one who is viewing the form

$userId=mysqli_real_escape_string($conn,$_GET['id']);//the one whose form is being viewed
$year=mysqli_real_escape_string($conn,$_GET['year']);

if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;	
}

$sqll="SELECT faculty_name FROM faculty_table WHERE id='$userId'";
$resultl=mysqli_query($conn,$sqll);
$rowl=mysqli_fetch_assoc($resultl);
$fn=$rowl['faculty_name'];

//making entry of this form in the PIs of all tables
$sql="SELECT id from part_a_gpi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO part_a_gpi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
}

$sqlx="SELECT profilePicLocation, hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];

$sqly="SELECT parta_ugpggpi_self_a, parta_ugpggpi_hod_a, parta_ugpggpi_committee_a, parta_gpi_self_a, parta_gpi_hod_a, parta_gpi_committee_a, parta_gpi_pi_self_a, parta_gpi_pi_hod_a, parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$year'";
$resulty=mysqli_query($conn,$sqly);
$rowy=mysqli_fetch_assoc($resulty);

$parta_ugpggpi_self_a=$rowy['parta_ugpggpi_self_a'];
$parta_ugpggpi_hod_a=$rowy['parta_ugpggpi_hod_a'];
$parta_ugpggpi_committee_a=$rowy['parta_ugpggpi_committee_a'];
$parta_gpi_self_a=$rowy['parta_gpi_self_a'];
$parta_gpi_hod_a=$rowy['parta_gpi_hod_a'];
$parta_gpi_committee_a=$rowy['parta_gpi_committee_a'];
$parta_gpi_pi_self_a=$rowy['parta_gpi_pi_self_a'];
$parta_gpi_pi_hod_a=$rowy['parta_gpi_pi_hod_a'];
$parta_gpi_pi_committee_a=$rowy['parta_gpi_pi_committee_a'];

$submitted_for_review=false;

$sqlsfr="SELECT partA FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$year'";
$resultsfr=mysqli_query($conn,$sqlsfr);
if(mysqli_num_rows($resultsfr)==1)
{
	$rowsfr=mysqli_fetch_assoc($resultsfr);
	if($rowsfr['partA']==1)
	{
		$submitted_for_review=true;
	}	
}

include 'top.php';
include 'left-nav.php';
?>
	  	
    <div class="container" style="margin-top: 8px">
    <div class="row">    		
    <div class="col offset-md-2 parta" id="part-a-container">

    	
    	<header>
    		<div class="row">
    			<div class="col-md-2">
    				<img src="img/logo3.jpg" style="width: 70%">
    			</div>
    			<div class="col-md-8">
    			    <h2 class="heading" style="font-size:18px; margin-top: 15px"><b>K. J. Somaiya College of Engineering, Mumbai - 77</b></h2>
	    			<h2 class="heading" style="font-size:18px">(Autonomous College Affiliated to University of Mumbai)</h2>
	    		</div>
	    		<div class="col-md-2">
    				<img src="img/logo1.jpg" style="width: 100%">
    			</div>

    		</div>
    		<h2 class="heading" style="margin-top: -25px"><b>'Part A: GENERAL INFORMATION'<br> Faculty Name: <?php echo $fn; ?> | Academic Year: <?php echo ($year-1).'-'.($year); ?></b></h2>
    		<?php 

    		//SUBMIT FOR CAS REVIEW    		
			if($_SESSION['id']==$userId)
			{

				$sqlsfr="SELECT partA FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$year'";
				$resultsfr=mysqli_query($conn,$sqlsfr);

				if(mysqli_num_rows($resultsfr)==0)
				{	
					
					?>
					<form method="POST" action="sfrA_sys.php" onsubmit="return confirm('Do you want to submit the form for review?');">
						<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
						<input type="submit" id="sfra_submit" name="sfra_submit" class="btn btn-primary" value="Submit for CAS review">
					</form><br>
					<?php
					
				}
				else
				{
					$rowsfr=mysqli_fetch_assoc($resultsfr);

					if($rowsfr['partA']==0)
					{
						
						?>
						<form method="POST" action="sfrA_sys.php" onsubmit="return confirm('Do you want to submit the form for review?');">
							<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
							<input type="submit" id="sfra_submit" name="sfra_submit" class="btn btn-primary" value="Submit for CAS review" >
						</form>	<br>
						<?php
						
					}
					else
					{
						$submitted_for_review=true;
						?>
						<p class=""><i class="fas fa-check" style="color: green;font-size: 20px" class="mr-1"></i> Submitted for Review</p>
						<?php
					}
					
				}

			}
			

			// SUBMIT FOR SELF APPRAISAL
			$submitted_for_self_appraisal=false;
			/*if($_SESSION['id']==$userId)
			{

				$sqlssa="SELECT partA FROM submitted_for_self_appraisal WHERE facultyId='$userId' AND year='$year'";
				$resultssa=mysqli_query($conn,$sqlssa);

				if(mysqli_num_rows($resultssa)==0)
				{
					?>
					<form method="POST" action="ssaA_sys.php" onsubmit="return confirm('Do you want to submit the form for Self Appraisal?');">
						<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
						<input type="submit" id="ssaa_submit" name="ssaa_submit" class="btn btn-primary" value="Submit for Self Appraisal">
					</form><br>
					<?php
				}
				else
				{
					$rowssa=mysqli_fetch_assoc($resultssa);

					if($rowssa['partA']==0)
					{
						?>
						<form method="POST" action="ssaA_sys.php" onsubmit="return confirm('Do you want to submit the form for Self Appraisal?');">
							<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
							<input type="submit" id="ssaa_submit" name="ssaa_submit" class="btn btn-primary" value="Submit for Self Appraisal" >
						</form>	<br>
						<?php
					}
					else
					{
						$submitted_for_self_appraisal=true;
						?>
						<p class=""><i class="fas fa-check" style="color: green;font-size: 20px" class="mr-1"></i> Submitted for Self Appraisal</p>
						<?php
					}
					
				}

			}*/

			// Request edit access
			if($_SESSION['id']==$userId)
			{
				// uncomment '$submitted_for_review==true &&' when enabling cas stuff
				if($submitted_for_review==true || $submitted_for_self_appraisal==true)
				{

					$sqlrfea="SELECT id FROM request_edit_access WHERE year='$year' AND facultyId='$userId' AND form='A'";
					$resultrfea=mysqli_query($conn,$sqlrfea);
					if(mysqli_num_rows($resultrfea)==0)
					{
						?>
						<form method="POST" action="reqedit_sys.php" onsubmit="return confirm('Do you want to request edit access for this form?');">
							<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
							<input type="hidden" name="form" id="form" value="A">
							<input type="submit" id="reqeditA_submit" name="reqeditA_submit" class="btn btn-info" value="Request Edit Access" >
						</form>
						<?php
					}
					else
					{
						?>
						<p class="">Edit Access for this form has been Requested</p>
						<?php
					}
				}
			}

			?>

    	</header>
    	

    	<form method="POST" action="partAsys.php" class="part-a-form" id="part-a-form" enctype="multipart/form-data">    	
    	<hr style="border: 0.5px solid #c8c8c8"><br>
    	<input type="hidden" name="formFacultyId" id="formFacultyId" value="<?php echo $_GET['id']; ?>">
    	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
    	<input type="hidden" name="alreadybegun" id="alreadybegun" value="0">
    	<div class="row">
    		<div class="col-md-12">

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="faculty_name" class="col-form-label">Name</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="faculty_name" id="faculty_name" maxlength="100"/>
							</div>
						</div>							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="ecode" class="col-form-label">Emp. Code</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							    <input class="form-control partalabel partaformcontrol" type="text" name="ecode" id="ecode"/>
							</div>
						</div>
		    		</div>
    			</div>

    			<br>

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="praddr" class="col-form-label">Present Address</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   	<textarea class="form-control partalabel partaformcontrol" name="praddr" id="praddr" maxlength="200"></textarea>
							</div>
						</div>							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="peaddr" class="col-form-label">Permanent Address</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <textarea class="form-control partalabel partaformcontrol" name="peaddr" id="peaddr" maxlength="200"></textarea>
							</div>
						</div>
		    		</div>
    			</div>

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="email" class="col-form-label">Email</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="email" name="email" id="email" maxlength="50"/>
							</div>
						</div>					
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="mobileno" class="col-form-label">Mobile No.</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="mobileno" id="mobileno" maxlength="15"/>
							</div>	  
						</div>
		    		</div>
    			</div>

    			<br>

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="highq" class="col-form-label">Highest qualification</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="highq" id="highq" maxlength="50"/>
							</div>
						</div>

							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="dob" class="col-form-label">Date of Birth</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="date" name="dob" id="dob"  />
							</div>
						</div>
		    		</div>
    			</div>
    		</div>
    	</div>		
    	<hr style="border: 1px solid #c8c8c8">

    	<div class="row">
    		<div class="col-md-6 text-left">
    			<p style="font-size: 18px"><b>Details of last service i.e before joining KJSCE:-</b></p>
    		</div>
    	</div>

    	<br>

    	<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="desi" class="col-form-label">Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="desi" id="desi" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="nameo" class="col-form-label">Name of Organization</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabe partaformcontrol" type="text" name="nameo" id="nameo" maxlength="50"/>
					</div>
				</div>
			</div>		
		</div>
		<hr style="border: 1px solid #c8c8c8"><br>

		<div class="row">
    		<div class="col-md-6 text-left">
    			<p style="font-size: 18px"><b>Details of service in KJSCE:-</b></p>
    		</div>
    	</div>

    	<br>

		<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pdesi" class="col-form-label">Present Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="pdesi" id="pdesi"  maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="dojkjsce" class="col-form-label">DOJ KJSCE</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="date" name="dojkjsce" id="dojkjsce" />
					</div>
				</div>
			</div>		

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pscale" class="col-form-label">Present Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="pscale" id="pscale"  />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pbg" class="col-form-label text-left">Present basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="pbg" id="pbg"  />
					</div>
				</div>
			</div>		
		</div>
		<hr style="border: 1px solid #c8c8c8">

		<div class="row">
    		<div class="col-md-5 text-left">
    			<p style="font-size: 18px"><b>Details of last promotion by selection:-</b></p>
    		</div>
    	</div><br>
    	<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="lastdesisel" class="col-form-label">Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="lastdesisel" id="lastdesisel" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="promowef" class="col-form-label">Promotion w.e.f</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="date" name="promowef" id="promowef"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cscales" class="col-form-label">Changed Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="cscales" id="cscales"  />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cbasics" class="col-form-label">Changed basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="cbasics" id="cbasics"  />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 1px solid #c8c8c8">

		<div class="row">
    		<div class="col-md-5 text-left">
    			<p style="font-size: 18px"><b>Details of last promotion through CAS:-</b></p>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="lastdesicas" class="col-form-label">Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="lastdesicas" id="lastdesicas" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="promowefcas" class="col-form-label">Promotion w.e.f</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="date" name="promowefcas" id="promowefcas"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cscalecas" class="col-form-label">Changed Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partaformcontrol" type="text" name="cscalecas" id="cscalecas" />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cbasiccas" class="col-form-label">Changed basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partaformcontrol" type="text" name="cbasiccas" id="cbasiccas"  />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 1px solid #c8c8c8">

		<div class="row">
			<div class="col-md-6">
				<p>Whether acquired any fresh educational qualification during said academic year?</p>
			</div>
	    	<div class="col-md-6 text-left">
				<div class="custom-control custom-radio custom-control-inline">
				  	<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio" value="Yes" checked/>
				  	<label class="custom-control-label yes" for="customRadioInline1">Yes</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  	<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio" value="No"/>
				  	<label class="custom-control-label no" for="customRadioInline2">No</label>
				</div>	
				<div class="custom-control custom-radio custom-control-inline">
				<p>If yes: 20 PI</p>
			</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col text-left">
				<p>If yes, details of qualification:-</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="nameofdegree" class=" col-form-label">Name of Degree</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="nameofdegree" id="nameofdegree" maxlength="100"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="institute" class="col-form-label">Institute</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="institute" id="institute" maxlength="100" />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="form-group row">
			<div class="col-md-6 text-left">
				<label for="ugpg" class="col-form-label">* 20 PI for Ph.D and M.Phil. <br> * 10 PI for other UG/PG Degree/Diploma/Certificate Courses</label>
			</div>
				  
			<div class="col-md-5" style="padding-left: 0">
				<div class="col-md-3">
	    			<div class="form-group row justify-content-center">
	    				<div class="col-6">
	    					<label for="ugpggpi-parta" class="col-form-label"><b>GPI:</b></label>
	    				</div>

						<div class="col-6" style="padding-left: 0">
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop_partA_ugpggpi" title="Clicking this button will allow you to appraise this entry"><img src="img/appraisals.png" class="parta-self-img"></button>

							<!-- The modal -->
							<div class="modal fade" id="flipFlop_partA_ugpggpi" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog  modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="modalLabel">Appraisals</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-bordered">
											  	<thead>
												    <tr>
												      	<th scope="col">Self</th>

												      	<?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
												      		<th scope="col">H.O.D</th>
															<?php
												      	}
												      	if($committee==1)
												      	{
												      		?>
												      		<th scope="col">Committee</th>
															<?php
												      	}
												      	?>

												    </tr>
											  	</thead>
											  	<tbody>
												    <tr>
												      	<td><input class="form-control selfapp pipartb" id="parta_ugpggpi_self_a" type="number" value="<?php echo $parta_ugpggpi_self_a; ?>"></td>

												      	<?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
															<td><input class="form-control hodapp pipartb" id="parta_ugpggpi_hod_a" type="number" value="<?php echo $parta_ugpggpi_hod_a; ?>"></td>
															<?php
												      	}

												 
												      	
												      	if($committee==1)
												      	{
												      		?>
												      		<td><input class="form-control commapp pipartb" id="parta_ugpggpi_committee_a" type="number" value="<?php echo $parta_ugpggpi_committee_a; ?>"></td>
															<?php
												      	}

												      	?>
												      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

												    </tr>
											 	</tbody>
											</table>
											<p id="parta_ugpggpi_msg"></p>
										</div>

										<div class="modal-footer">
											<button  id="parta_ugpggpi_btn" class="btn btn-primary pisave">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>							
		    	</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row">
    		<div class="col-md-12">
    			<p style="font-size: 18px"><b>Details of course/summer school/STTP/online course attended/completed/organised during academic year</b></p>
    		</div>
    	</div>

		<div class="panel panel-default">
		  
		  	<div class="panel-body">

		  		<input type="hidden" name="room" value="1" id="room">
		  
		  		<!-- <div id="parta_dynamic_form"></div> -->

		  		<div class="row form-inline justify-content-center">
		  			<div class="nopadding">
				  		<div class="form-group">
				    		<input type="text" class="dynamic-four sttppartasrno" id="srno1" name="srno[]" value="" data-toggle="tooltip" title="SrNo." placeholder="Sr.no">
				  		</div>
					</div>

					<div class="nopadding">
				  		<div class="form-group">
				    		<input type="text" class="dynamic-four" id="course1" name="course[]" value="" data-toggle="tooltip" title="Name of summer school/course" maxlength="100" placeholder="Name of summer school/course">
				  		</div>
					</div>

					<div class="nopadding">
				  		<div class="form-group">
				   			<input type="text" class="dynamic-four sttppartaduration" id="days1" name="days[]" value="" data-toggle="tooltip" title="Duration(Days)" placeholder="Duration(Days)">
				  		</div>
					</div>

					<div class="nopadding">
						<div class="form-group">
				    		<input type="text" class="dynamic-four sttppartaog" id="agency1" name="agency[]" value="" data-toggle="tooltip" title="Organising Agency" placeholder="Organising Agency">
				  		</div>
					</div>

					<div class="nopadding">
						<div class="form-group">
				    		<input type="text" class="dynamic-four" id="rolee1" name="rolee[]" value="" data-toggle="tooltip" title="If organised in KJSCE, mention the role played" placeholder="If organised in KJSCE, mention the role played">
				  		</div>
					</div>
					
					<!-- <div class="nopadding">
						<div class="form-group">
				    		<input type="file" class="dynamic-four" id="file1" name="file[]" value="" placeholder="">
				  		</div>
					</div> -->

					<div class="nopadding">
						<div class="form-group dynamic-four">
							<div class="filepart">
								<div class="row justify-content-center">
									<div class="col-3 offset-md-3" style="padding:0;margin:0">
										<div class="file-upload mx-auto" style="width:26px">
										    <label for="file1" style="cursor:pointer">
										        <img src="https://img.icons8.com/material/26/000000/attach.png">
										    </label>
										    <input type="file" class="dynamic-four" id="file1" name="file[]" value="" placeholder="">
										    <input type="hidden" name="filelocation[]" id="filelocation1" value="">
										</div>
									</div>
									<div class="col-md-3" style="padding:0;margin:0">
										<a href="viewfile.php?location=none" id="viewfile1" target="_blank">
											<img src="https://img.icons8.com/ios/24/000000/document.png">
										</a>										
									</div>
								</div>
							</div>										    		
				  		</div>
					</div>

				  	<div class="input-group-btn">
				        <img src="https://img.icons8.com/color/48/000000/plus.png" class="part-a-plus-btn" onclick="parta_dynamic_form();" style="cursor:pointer"/>
				    </div>

					<div class="clear"></div>		
				</div>

				<div id="parta_dynamic_form"></div>

			</div><br>
			<div class="row">
				<div class="col-md-4 text-left">
	    			<label for="gpi-parta" class="col-form-label"><b>Three GPI per day but maximum 30</b></label>
	    		</div>

				<div class="col-md-3">
	    			<div class="form-group row justify-content-center">
	    				<div class="col-3">
	    					<label for="gpi-parta" class="col-form-label"><b>GPI:</b></label>
	    				</div>

						<div class="col-2" style="padding-left: 0">
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop_partA_gpi" title="Clicking this button will allow you to appraise this entry"><img src="img/appraisals.png" class="parta-self-img"></button>

							<!-- The modal -->
							<div class="modal fade" id="flipFlop_partA_gpi" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog  modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="modalLabel">Appraisals</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-bordered">
											  	<thead>
												    <tr>
												      	<th scope="col">Self</th>

												      	<?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
												      		<th scope="col">H.O.D</th>
															<?php
												      	}
												      	if($committee==1)
												      	{
												      		?>
												      		<th scope="col">Committee</th>
															<?php
												      	}
												      	?>

												    </tr>
											  	</thead>
											  	<tbody>
												    <tr>
												      	<td><input class="form-control selfapp pipartb" id="parta_gpi_self_a" type="number" value="<?php echo $parta_gpi_self_a; ?>"></td>

												      	<?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
															<td><input class="form-control hodapp pipartb" id="parta_gpi_hod_a" type="number" value="<?php echo $parta_gpi_hod_a; ?>"></td>
															<?php
												      	}

												 
												      	
												      	if($committee==1)
												      	{
												      		?>
												      		<td><input class="form-control commapp pipartb" id="parta_gpi_committee_a" type="number" value="<?php echo $parta_gpi_committee_a; ?>"></td>
															<?php
												      	}

												      	?>
												      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

												    </tr>
											 	</tbody>
											</table>
											<p id="parta_gpi_msg"></p>
										</div>

										<div class="modal-footer">
											<button  id="parta_gpi_btn" class="btn btn-primary pisave">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>							
		    	</div>

				<div class="col-md-5">
	    			<label ><b>PI Part A = GPI =
	    				
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop_partA_gpi_pi" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
							out of 50</b></label>
							<!-- The modal -->
							<div class="modal fade" id="flipFlop_partA_gpi_pi" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog  modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="modalLabel">Appraisals</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<!-- <form action="parta_gpi_pi_sys.php" method="POST"> -->
										<div class="modal-body">
											<table class="table table-bordered">
											  	<thead>
											    	<tr>
												      	<th scope="col">Self</th>

												      	<?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
												      		<th scope="col">H.O.D</th>
															<?php
												      	}
												      	if($committee==1)
												      	{
												      		?>
												      		<th scope="col">Committee</th>
															<?php
												      	}
												      	?>
											   		</tr>
											  	</thead>

											  	<tbody>
											    	<tr>
											      		<td><input class="form-control selfapp pipartb" id="parta_gpi_pi_self_a" type="text" value="<?php echo $parta_gpi_pi_self_a; ?>"></td>
												      	<?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
											     			<td><input class="form-control hodapp pipartb" id="parta_gpi_pi_hod_a" type="text" value="<?php echo $parta_gpi_pi_hod_a; ?>"></td>
															<?php
												      	}

											      		if($committee==1)
												      	{
												      		?>
												      		<td><input class="form-control commapp pipartb" id="parta_gpi_pi_committee_a" type="text" value="<?php echo $parta_gpi_pi_committee_a; ?>"></td>
															<?php
												      	}

											      		?>
											      		<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

											    	</tr>
											 	</tbody>
											</table>
											<p id="parta_gpi_pi_msg"></p>

										</div>
										<div class="modal-footer">
											<button type="button" id="parta_gpi_pi_btn" class="btn btn-primary pisave">Save</button>
										</div>
										<!-- </form> -->
									</div>
								</div>
							</div>
							
					
	    		</div>			
			</div>
			<?php

			if($userId!=$viewerId)
			{
				?>
				<a class="btn btn-info" href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $year; ?>">View Form B for this faculty for year <?php echo $year; ?></a>
				<?php
			}

			?>
		</div>
<!-- 
		<hr style="border: 0.5px solid #c8c8c8">
 -->

 		<div class="modal fade" id="enclosuresmodal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">List of Enclosures for Part A</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<div class="container">
					<div class="row">
						<div class="col-md-12 text-left">
							<p><b>Please attach copies of certificates, sanction orders, papers etc. wherever necessary</b></p>
						</div>
					</div>
		    		<div class="row clearfix">
						<div class="col-md-12 column">
							<div class="admin-table">
								<table class="table table-bordered table-hover" id="tab_logic4">
								    <tr>
										<th class="text-center">Sr. No.</th>
										<th class="text-center">Description</th>
										<th class="text-center">Attached File</th>
									</tr>				
									 
									<tbody>

										<?php

										for($xx=$currentyear-1;$xx>=($currentyear-1);$xx--)
										{

										?>
											<tr>
												<td><b>~</b></td>
												<td><b>Part A</b></td>
												<td><b>~</b></td>
											</tr>
											<?php

											$sqlxxx="SELECT id FROM part_a_table WHERE faculty_id='$userId' AND year='$xx'";
											$resultxxx=mysqli_query($conn,$sqlxxx);
											$rowxxx=mysqli_fetch_assoc($resultxxx);
											$formId=mysqli_real_escape_string($conn,$rowxxx['id']);

											$counter=1;

											
											// Part A
											$sql="SELECT file FROM part_a_doc WHERE formId='$formId'";
											$result=mysqli_query($conn,$sql);
											while($row=mysqli_fetch_assoc($result))
											{
												if($row['file']!='NAN')
												{
													?>
													<tr>
														<td><?php echo $counter; ?></td>
														<td><?php echo basename($row['file']); ?></td>
														<td><a href="viewfile.php?location=<?php echo $row['file']; ?>" target="_blank">View File</a></td>
													</tr>
													<?php
													$counter+=1;
												}
											}

										}

											?>											
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>NB: The proforma duly filled along with all enclosures, submitted will be verified by the authorities.</p>
						</div>
					</div>
				</div>

		      	<!-- Modal footer -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      	</div>

		    </div>
	  	</div>
	</div>

		<a class="text-right" style="position: absolute; right:10px" href="partB.php?id=<?php echo $_GET['id']; ?>&year=<?php echo $_GET['year']; ?>">Proceed to Part B >></a><br>

		<div class="row form-inline justify-content-center">

			<div class="col se-btn">
				<?php
				if($submitted_for_review==false && $same_user==1 && $submitted_for_self_appraisal==false)
				{
				?>

				<button type="button" class="btn btn-success" id="part-a-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE 
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-a-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT 
				</button>

				<?php				
				}
				?>

				<a class="btn btn-primary" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000" href="printAintermediate.php?id=<?php echo $userId; ?>&year=<?php echo $year; ?>">PRINT</a>

				<button type="button" class="btn btn-info" onclick="enclosures()">View Attachments</button>

				<!-- <button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button> -->

				
			</div>
		</div>	

		<!-- <br> -->

	</form>
	</div>
	</div>
	</div>

	<br><br>

	<script type="text/javascript">

	// var room = 1;
	function parta_dynamic_form()
	{	 
		var room=document.getElementById('room').value;
	    room++;
	    // var objTo = document.getElementById('parta_dynamic_form')
	    var divtest = document.createElement("div");
		divtest.setAttribute("class", "form-group removeclass"+room);
		var rdiv = 'removeclass'+room;
	    divtest.innerHTML = '<div class="row form-inline justify-content-center"><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four sttppartasrno" id="srno'+room+'" name="srno[]" value="" data-toggle="tooltip" title="SrNo." placeholder="Sr.no"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="course'+room+'" name="course[]" value="" data-toggle="tooltip" title="Name of summer school/course" placeholder="Name of summer school/course"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four sttppartaduration" id="days'+room+'" name="days[]" value="" data-toggle="tooltip" title="Duration(days)" placeholder="Duration(days)"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four sttppartaog" id="agency'+room+'" name="agency[]" value="" data-toggle="tooltip" title="Organising Agency" placeholder="Organising Agency"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="rolee'+room+'" name="rolee[]" value="" data-toggle="tooltip" title="If organised in KJSCE, mention the role played" placeholder="If organised in KJSCE, mention the role played"></div></div><div class="nopadding"><div class="form-group dynamic-four"><div class="filepart"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="file'+room+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="file'+room+'" name="file[]" value="" placeholder=""><input type="hidden" name="filelocation[]" id="filelocation'+room+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="viewfile'+room+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div><div class="input-group-btn"> <img class="part-a-minus-button" src="https://img.icons8.com/color/48/000000/minus.png" onclick="remove_education_fields('+ room +');" style="cursor:pointer"></div></div><div class="clear"></div></div>';
	    
	    // objTo.appendChild(divtest);
	    $("#parta_dynamic_form").append(divtest);
	    document.getElementById("room").value=room;
	}
	function remove_education_fields(rid) {
		$('.removeclass'+rid).remove();
		var room=document.getElementById('room').value;
		document.getElementById("room").value=room-1;
	}


	$(document).ready(function(){
 		$('[data-toggle="tooltip"]').tooltip();   
	});

	</script>

	<!-- GET DATA OF FORM -->

	<script type="text/javascript">
		getPartAData();		
	</script>

	<?php

	// if($same_user==1 && $submitted_for_review==false && $year!=2017 && !isset($_GET['updated']))
	if($same_user==1 && $submitted_for_review==false && ($year!=2019 && $year!=2018 && $year!=2017) && !isset($_GET['updated']))
	{
		// 2017 since our forms from the year 2017
		$sqldc="SELECT id FROM part_a_table WHERE year='$year' AND faculty_id='$userId'";
		$resultdc=mysqli_query($conn,$sqldc);
		if(mysqli_num_rows($resultdc)==0)
		{		
			?>
			<script type="text/javascript">
				getDataChange();
			</script>
			<?php
		}
	}

	?>

	<!-- DISABLING INPUT WHEREVER NECESSARY -->

	<?php

	if($same_user==0)
	{
		?>
		<!-- Disabling all forms for other viewers -->
		<script type="text/javascript">
			disableAinput();
		</script>

		<?php
	}

	?>

	

	<!-- FORM UPDATED MODAL -->

	<script type="text/javascript">
	function myFunction() {
		$("#part-a-save-form").toggle();
		$("#part-a-edit-form").toggle();
		$("#part-a-print-form").toggle();
		$(".filepart").hide();
		$(".part-a-plus-btn").hide();
		$(".part-a-minus-btn").hide();
	  	
	  	// window.print();
	  	$("#part-a-container").printThis({
	  		// beforePrint: bp(),
	  		// afterPrint: ap()
	  		importStyle: true
	  	});

	  	setTimeout(function () { 
	  		$("#part-a-save-form").toggle();
			$("#part-a-edit-form").toggle();
			$("#part-a-print-form").toggle();
			$(".filepart").show();
			$(".part-a-plus-btn").show();
			$(".part-a-minus-btn").show(); 
		}, 700);
		
	}
	</script>

	<script type="text/javascript">
		function enclosures()
		{
			$('#enclosuresmodal').modal('show');
		}
	</script>

	<?php 

	if (isset($_GET['updated']))
	{
		if($_GET['updated']==1)
		{
			?>
		    <script type="text/javascript">
		    $(document).ready(function(){	
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
			        <h4 class="modal-title">Form Updated!</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal footer -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      	</div>

		    </div>
	  	</div>
	</div>

	<!-- DISABLING ALL INPUTS -->
	<script type="text/javascript">
		$("#part-a-form :input").prop("disabled", true);//disabling all inputs
		$(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also		
	</script>

	<?php	

	if(($submitted_for_review==true && $viewerId==$userId && $hod==0 && $committee==0)/* || (($currentyear-$year)>1)*/)
	{
		?>
		<script type="text/javascript">
			$('.pisave').remove();
		</script>
		<?php
	}

	/*if($submitted_for_self_appraisal==true && $viewerId==$userId && $hod==0 && $committee==0)
	{
		?>
		<script type="text/javascript">
			$('.pisave').remove();
		</script>
		<?php
	}*/

	$nyear=$year+1;
	$cyear=$year;
	$pyear=$year-1;
	$sqll="SELECT recommend FROM recommend_for_cas WHERE (currentyear='$cyear' AND facultyId='$userId') OR (currentyear='$nyear' AND facultyId='$userId')";
	$resultl=mysqli_query($conn, $sqll);
	if(mysqli_num_rows($resultl)>0)
	{
		$rowl=mysqli_fetch_assoc($resultl);
		if($rowl['recommend']==0 && $committee==1)
		{
			/*
			?>
			<script type="text/javascript">
				$('.pisave').remove();
			</script>
			<?php
			*/
		}
		else if(/*$rowl['recommend']==1 && */$hod==1)
		{
			?>
			<script type="text/javascript">
				$('.pisave').remove();
			</script>
			<?php
		}
	}
	else
	{
		if($committee==1 && $hod==0 && $submitted_for_review==false && $viewerId!=$userId)
		{
			?>
			<script type="text/javascript">
				$('.pisave').remove();
			</script>
			<?php
		}		
	}

	$sqlx="SELECT cas_approved FROM cas_approval_table WHERE facultyId='$userId' AND ((currentyear='$cyear' AND previousyear='$pyear') OR (currentyear='$nyear' AND previousyear='$cyear'))";
    $resultx=mysqli_query($conn,$sqlx);
    if(mysqli_num_rows($resultx)>0)
    {
    	?>
		<script type="text/javascript">
			$('.pisave').remove();
		</script>
		<?php
    }	

	if($userId==$viewerId && $submitted_for_review==false)
	{
		?>
		<script type="text/javascript">
			enableself();
		</script>
		<?php
	}
	if($hod==1 && $submitted_for_review==true)
	{
		?>
		<script type="text/javascript">
			enablehod();
		</script>
		<?php
	}
	if($committee==1 && $submitted_for_review==true)
	{
		?>
		<script type="text/javascript">
			enablecomm();
		</script>
		<?php
	}


	// Controls width of PI inputs
	if($userId==$viewerId)
	{
		?>
		<script type="text/javascript">
			$(".pipartb").width(700);
		</script>
		<?php
	}
	if($hod==1)
	{
		?>
		<script type="text/javascript">
			$(".pipartb").addClass('pipartbhod');
		</script>
		<?php
	}
	if($committee==1)
	{
		?>
		<script type="text/javascript">
			$(".pipartb").addClass('pipartbcomm');
		</script>
		<?php
	}

	?>

	<script type="text/javascript">
		if(localStorage.getItem("change")!=null)
		{
			// alert("inner->"+localStorage.getItem("change"));
			// alert(parseInt(localStorage.getItem("change"))==0);
			// alert('Checking viewing conditions')
			if(parseInt(localStorage.getItem("change"))==0)
			{
				// alert('inner->nikaldo');
				$('#part-a-save-form').remove();
				$('#part-a-edit-form').remove();
				change=1;
				localStorage.setItem("change", change);
			}
		}
	</script>

</div>
</body>
</html>

<?php

}

?>