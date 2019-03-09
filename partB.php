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
include 'top.php';
include 'left-nav.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);

$userId=mysqli_real_escape_string($conn,$_GET['id']);
$year=mysqli_real_escape_string($conn,$_GET['year']);

if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;
	
}

$sqlx="SELECT hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
// echo "committee=".$committee;

$submitted_for_review=false;

$sqly="SELECT * FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$year'";
$resulty=mysqli_query($conn,$sqly);
$rowy=mysqli_fetch_assoc($resulty);
$cat1_pi1_self_a=$rowy['cat1_pi1_self_a'];
$cat1_pi1_hod_a=$rowy['cat1_pi1_hod_a'];
$cat1_pi1_committee_a=$rowy['cat1_pi1_committee_a'];
$cat1_pi2_self_a=$rowy['cat1_pi2_self_a'];
$cat1_pi2_hod_a=$rowy['cat1_pi2_hod_a'];
$cat1_pi2_committee_a=$rowy['cat1_pi2_committee_a'];
$cat1_pi3_self_a=$rowy['cat1_pi3_self_a'];
$cat1_pi3_hod_a=$rowy['cat1_pi3_hod_a'];
$cat1_pi3_committee_a=$rowy['cat1_pi3_committee_a'];
$cat1_pi4_self_a=$rowy['cat1_pi4_self_a'];
$cat1_pi4_hod_a=$rowy['cat1_pi4_hod_a'];
$cat1_pi4_committee_a=$rowy['cat1_pi4_committee_a'];
$cat1_pitotal_self_a=$rowy['cat1_pitotal_self_a'];
$cat1_pitotal_hod_a=$rowy['cat1_pitotal_hod_a'];
$cat1_pitotal_committee_a=$rowy['cat1_pitotal_committee_a'];

// echo "cat=".$cat1_pi1_self_a;

$sqlz="SELECT * FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$year'";
$resultz=mysqli_query($conn,$sqlz);
$rowz=mysqli_fetch_assoc($resultz);
$cat2_pii1_self_a=$rowz['cat2_pii1_self_a'];
$cat2_pii1_hod_a=$rowz['cat2_pii1_hod_a'];
$cat2_pii1_committee_a=$rowz['cat2_pii1_committee_a'];
$cat2_pii2_self_a=$rowz['cat2_pii2_self_a'];
$cat2_pii2_hod_a=$rowz['cat2_pii2_hod_a'];
$cat2_pii2_committee_a=$rowz['cat2_pii2_committee_a'];
$cat2_pii3_self_a=$rowz['cat2_pii3_self_a'];
$cat2_pii3_hod_a=$rowz['cat2_pii3_hod_a'];
$cat2_pii3_committee_a=$rowz['cat2_pii3_committee_a'];
$cat2_pii4_self_a=$rowz['cat2_pii4_self_a'];
$cat2_pii4_hod_a=$rowz['cat2_pii4_hod_a'];
$cat2_pii4_committee_a=$rowz['cat2_pii4_committee_a'];
$cat2_piitotal_self_a=$rowz['cat2_piitotal_self_a'];
$cat2_piitotal_hod_a=$rowz['cat2_piitotal_hod_a'];
$cat2_piitotal_committee_a=$rowz['cat2_piitotal_committee_a'];

$sqlzz="SELECT * FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$year'";
$resultzz=mysqli_query($conn,$sqlzz);
$rowzz=mysqli_fetch_assoc($resultzz);
$cat3_piii1_self_a=$rowzz['cat3_piii1_self_a'];
$cat3_piii1_hod_a=$rowzz['cat3_piii1_hod_a'];
$cat3_piii1_committee_a=$rowzz['cat3_piii1_committee_a'];
$cat3_piii2_self_a=$rowzz['cat3_piii2_self_a'];
$cat3_piii2_hod_a=$rowzz['cat3_piii2_hod_a'];
$cat3_piii2_committee_a=$rowzz['cat3_piii2_committee_a'];
$cat3_piii3_self_a=$rowzz['cat3_piii3_self_a'];
$cat3_piii3_hod_a=$rowzz['cat3_piii3_hod_a'];
$cat3_piii3_committee_a=$rowzz['cat3_piii3_committee_a'];
$cat3_piii4_self_a=$rowzz['cat3_piii4_self_a'];
$cat3_piii4_hod_a=$rowzz['cat3_piii4_hod_a'];
$cat3_piii4_committee_a=$rowzz['cat3_piii4_committee_a'];
$cat3_piii5_self_a=$rowzz['cat3_piii5_self_a'];
$cat3_piii5_hod_a=$rowzz['cat3_piii5_hod_a'];
$cat3_piii5_committee_a=$rowzz['cat3_piii5_committee_a'];
$cat3_piii6_self_a=$rowzz['cat3_piii6_self_a'];
$cat3_piii6_hod_a=$rowzz['cat3_piii6_hod_a'];
$cat3_piii6_committee_a=$rowzz['cat3_piii6_committee_a'];
$cat3_piii7_self_a=$rowzz['cat3_piii7_self_a'];
$cat3_piii7_hod_a=$rowzz['cat3_piii7_hod_a'];
$cat3_piii7_committee_a=$rowzz['cat3_piii7_committee_a'];
$cat3_piii8_self_a=$rowzz['cat3_piii8_self_a'];
$cat3_piii8_hod_a=$rowzz['cat3_piii8_hod_a'];
$cat3_piii8_committee_a=$rowzz['cat3_piii8_committee_a'];
$cat3_piii9_self_a=$rowzz['cat3_piii9_self_a'];
$cat3_piii9_hod_a=$rowzz['cat3_piii9_hod_a'];
$cat3_piii9_committee_a=$rowzz['cat3_piii9_committee_a'];
$cat3_piii10_self_a=$rowzz['cat3_piii10_self_a'];
$cat3_piii10_hod_a=$rowzz['cat3_piii10_hod_a'];
$cat3_piii10_committee_a=$rowzz['cat3_piii10_committee_a'];
$cat3_piii11_self_a=$rowzz['cat3_piii11_self_a'];
$cat3_piii11_hod_a=$rowzz['cat3_piii11_hod_a'];
$cat3_piii11_committee_a=$rowzz['cat3_piii11_committee_a'];
$cat3_piiitotal_self_a=$rowzz['cat3_piiitotal_self_a'];
$cat3_piiitotal_hod_a=$rowzz['cat3_piiitotal_hod_a'];
$cat3_piiitotal_committee_a=$rowzz['cat3_piiitotal_committee_a'];


$sqlzzz="SELECT * FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$year'";
$resultzzz=mysqli_query($conn,$sqlzzz);
$rowzzz=mysqli_fetch_assoc($resultzzz);
$cat4_piv1_self_a=$rowzzz['cat4_piv1_self_a'];
$cat4_piv1_hod_a=$rowzzz['cat4_piv1_hod_a'];
$cat4_piv1_committee_a=$rowzzz['cat4_piv1_committee_a'];
$cat4_piv2_self_a=$rowzzz['cat4_piv2_self_a'];
$cat4_piv2_hod_a=$rowzzz['cat4_piv2_hod_a'];
$cat4_piv2_committee_a=$rowzzz['cat4_piv2_committee_a'];
$cat4_piv3_self_a=$rowzzz['cat4_piv3_self_a'];
$cat4_piv3_hod_a=$rowzzz['cat4_piv3_hod_a'];
$cat4_piv3_committee_a=$rowzzz['cat4_piv3_committee_a'];
$cat4_pivtotal_self_a=$rowzzz['cat4_pivtotal_self_a'];
$cat4_pivtotal_hod_a=$rowzzz['cat4_pivtotal_hod_a'];
$cat4_pivtotal_committee_a=$rowzzz['cat4_pivtotal_committee_a'];

?>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark"  style="height: 50px">
	  	<a class="navbar-brand" href="index.php">CAS</a>
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
    <div class="row">       
    <div class="col offset-md-2 parta">

		<header>
			<h2 class="heading"><b>'Part B'</b></h2>
			<?php 

			if($_SESSION['id']==$userId)
			{

				$sqlsfr="SELECT partB FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$year'";
				$resultsfr=mysqli_query($conn,$sqlsfr);

				if(mysqli_num_rows($resultsfr)==0)
				{

					?>
					<form method="POST" action="sfrB_sys.php">
						<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
						<input type="submit" id="sfrb_submit" name="sfrb_submit" class="btn btn-primary" value="Submit for review">
					</form><br>
					<?php

				}
				else
				{
					$rowsfr=mysqli_fetch_assoc($resultsfr);

					if($rowsfr['partB']==0)
					{
						?>
						<form method="POST" action="sfrB_sys.php">
							<input type="hidden" name="year" id="year" value="<?php echo $year; ?>">
							<input type="submit" id="sfrb_submit" name="sfrb_submit" class="btn btn-primary" value="Submit for review">
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

			?>

		</header>
		<!-- <br> -->

		<nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-cat1-tab" data-toggle="tab" href="#nav-cat1" role="tab" aria-controls="nav-cat1" aria-selected="true">Category I</a>
			<a class="nav-item nav-link" id="nav-cat2-tab" data-toggle="tab" href="#nav-cat2" role="tab" aria-controls="nav-cat2" aria-selected="false">Category II</a>
			<a class="nav-item nav-link" id="nav-cat3-tab" data-toggle="tab" href="#nav-cat3" role="tab" aria-controls="nav-cat3" aria-selected="false">Category III</a>
            <a class="nav-item nav-link" id="nav-cat4-tab" data-toggle="tab" href="#nav-cat4" role="tab" aria-controls="nav-cat4" aria-selected="false">Category IV</a>
		  </div>
		</nav>

	<form method="POST" action="partBsys.php" class="part-b-form" id="part-b-form" enctype="multipart/form-data">
    <input type="hidden" name="formFacultyId" id="formFacultyId" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
    <input type="hidden" name="alreadybegun" id="alreadybegun" value="0">

    <input type="hidden" name="userId" id="userId" value="<?php echo $userId; ?>">
    <input type="hidden" name="viewerId" id="viewerId" value="<?php echo $viewerId; ?>">
    <input type="hidden" name="hod" id="hod" value="<?php echo $hod; ?>">
    <input type="hidden" name="committee" id="committee" value="<?php echo $committee; ?>">
		
		<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-cat1" role="tabpanel" aria-labelledby="nav-cat1-tab"><br>
		
		<div class="row">
			<div class="col-md-12">
				<p class="cat-info"><b>Category I: Teaching and Learning (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">
		
		<div class="row">
			<div class="col-md-12 text-left">
				<p><b>Courses Taught (Max. PI: 40)</b></p>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="admin-table">
				<table class="table table-bordered table-hover" id="tab_logic1">
					<thead>
						<th colspan="10">ODD SEMESTER</th>
					</thead>
						<tr>
							<th class="text-center">Sr.No</th>
							<th class="text-center">Course</th>
							<th class="text-center">Type L/P/T</th>
							<th class="text-center">UG/PG</th>
							<th class="text-center">Class/Semester</th>
							<th class="text-center">Hrs./Week</th>
							<th class="text-center">Total no. of Hours engagaed(A)</th>
							<th class="text-center">*Max. Hrs.(B)</th>
							<th class="text-center">C=(A/B)*100</th>
							<th class="text-center">Attachments</th>
						</tr>
					<tbody>
						<tr id='addr10'>
							<td id="ctosrno1">1</td>
							<td>
							<input type="text" name='ctocourse[]' id="ctocourse1" class="form-control" maxlength="200" />
							</td>
							<td>
							<input type="text" name='ctotyprlpt[]' id="ctotyprlpt1" class="form-control" maxlength="200" />
							</td>
							<td>
							<input type="text" name='ctougpg[]' id="ctougpg1" class="form-control" maxlength="200" />
							</td>
							<td>
							<input type="text" name='ctoclasssemester[]' id="ctoclasssemester1" class="form-control" maxlength="200" />
							</td>
							<td>
							<input type="number" name='ctohrsweek[]' id="ctohrsweek1" class="form-control" maxlength="200" />
							</td>
							<td>
							<input type="number" name='ctohrsengaged[]' id="ctohrsengaged1" class="form-control" maxlength="200" />
							</td>
							<td>
							<input type="number" name='ctomaxhrs[]' id="ctomaxhrs1" class="form-control" maxlength="200" />
							</td> 
							<td>
							<input type="number" name='ctoc[]' id="ctoc1" class="form-control" maxlength="200" />
							</td>
							<td>
							<div class="filepartb">
								<div class="row justify-content-center">
									<div class="col-3 offset-md-3" style="padding:0;margin:0">
										<div class="file-upload mx-auto" style="width:26px">
										    <label for="ctofile1" style="cursor:pointer">
										        <img src="https://img.icons8.com/material/26/000000/attach.png">
										    </label>
										    <input type="file" class="dynamic-four" id="ctofile1" name="ctofile[]" value="" placeholder="">
										    <input type="hidden" name="ctofilelocation[]" id="ctofilelocation1" value="">
										</div>
									</div>
									<div class="col-md-3" style="padding:0;margin:0">
										<a href="viewfile.php?location=none" id="ctoviewfile1" target="_blank">
											<img src="https://img.icons8.com/ios/24/000000/document.png">
										</a>										
									</div>
								</div>
							</div>	
							</td>
						</tr>
	                    <tr id='addr11'></tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
			<a id="add_row1" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row1' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
		</div><br><br><br>
		<!-- <hr style="border: 0.5px solid grey"> -->

		<div class="container">
    		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="admin-table">
				<table class="table table-bordered table-hover" id="tab_logic2">
					<thead>
						<th colspan="10">EVEN SEMESTER</th>
					</thead>
					     	
						<tr>
							<th class="text-center">Sr.No</th>
							<th class="text-center">Course</th>
							<th class="text-center">Type L/P/T</th>
							<th class="text-center">UG/PG</th>
							<th class="text-center">Class/Semester</th>
							<th class="text-center">Hrs./Week</th>
							<th class="text-center">Total no. of Hours engagaed(A)</th>
							<th class="text-center">*Max. Hrs.(B)</th>
							<th class="text-center">C=(A/B)*100</th>
							<th class="text-center">Attachments</th>
						</tr>
					<tbody>
						<tr id='addr20'>
							<td id="ctesrno1">1</td>
							<td>
							<input type="text" name='ctecourse[]' id="ctecourse1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<input type="text" name='ctetyprlpt[]' id="ctetyprlpt1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<input type="text" name='cteugpg[]' id="cteugpg1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<input type="text" name='cteclasssemester[]' id="cteclasssemester1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<input type="number" name='ctehrsweek[]' id="ctehrsweek1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<input type="number" name='ctehrsengaged[]' id="ctehrsengaged1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<input type="number" name='ctemaxhrs[]' id="ctemaxhrs1" class="form-control" maxlength="200"/>
							</td> 
							<td>
							<input type="number" name='ctec[]' id="ctec1" class="form-control" maxlength="200"/>
							</td>
							<td>
							<div class="filepartb">
								<div class="row justify-content-center">
									<div class="col-3 offset-md-3" style="padding:0;margin:0">
										<div class="file-upload mx-auto" style="width:26px">
										    <label for="ctefile1" style="cursor:pointer">
										        <img src="https://img.icons8.com/material/26/000000/attach.png">
										    </label>
										    <input type="file" class="dynamic-four" id="ctefile1" name="ctefile[]" value="" placeholder="">
										    <input type="hidden" name="ctefilelocation[]" id="ctefilelocation1" value="">
										</div>
									</div>
									<div class="col-md-3" style="padding:0;margin:0">
										<a href="viewfile.php?location=none" id="cteviewfile1" target="_blank">
											<img src="https://img.icons8.com/ios/24/000000/document.png">
										</a>										
									</div>
								</div>
							</div>	
							</td>
						</tr>
	                    <tr id='addr21'></tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
			<a id="add_row2" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row2' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
		</div><br><br><br>

		<div class="row">
			<div class="col-md-4">
				<label class="col-form-label"><b>*Max hours(B)=(Hrs./week)*(13)</b></label>
			</div>
			<div class="col-md-5" >
    			<div class="form-group row justify-content-center">
    				<div class="col-6 text-right" style="margin:0;padding:0;padding-right: 10px">
    					<label for="avg_c" class="col-form-label"><b>Average of C(AVC) :</b></label>
    				</div>
					  
					<div class="col-3" style="margin:0;padding:0">
					   <input class="form-control" type="text" name="avg_c" id="avg_c" maxlength="200"/>
					</div>
				</div>							
    		</div>
    		<div class="col-md-3">
    			<div class="form-group row justify-content-center">
    				<div class="col-6 text-right" style="margin:0;padding:0;padding-right: 10px">
    					<label for="total_c" class="col-form-label"><b>Total of C :</b></label>
    				</div>
					  
					<div class="col-4" style="margin:0;padding:0;padding-right:10px">
					   <input class="form-control" type="text" name="total_c" id="total_c" maxlength="200"/>
					</div>
				</div>							
    		</div>
		</div><br>

		<div class="row">
			<div class="col-md-3 offset-md-9">
				<label class="col-form-label"><b>PI 1 =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat1-1" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 40</b>
				</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat1-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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

									      		<td><input class="form-control selfapp" id="cat1_pi1_self_a" type="number"  min="0" max="40" value="<?php echo $cat1_pi1_self_a; ?>"></td>

												<?php

										      	if($hod==1 || $committee==1)
										      	{
										      		?>
													<td><input class="form-control hodapp" id="cat1_pi1_hod_a" type="number" min="0" max="40" value="<?php echo $cat1_pi1_hod_a; ?>"></td>
													<?php
										      	}
										      	

										      	if($committee==1)
										      	{
										      		?>
													 <td><input class="form-control commapp" id="cat1_pi1_committee_a" type="number" min="0" max="40" value="<?php echo $cat1_pi1_committee_a; ?>"></td>
													<?php
										      	}
										      	?>
										      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									      	</tr>
									 	</tbody>
									</table>
									<p id="partb_cat1_pi1_msg"></p>

								</div>
								<div class="modal-footer">
									<button id="partb_cat1_pi1_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
		    </div>
		</div>			
		

		<div class="row">
			<div class="col">
				<div class="col-md-12 text-left" style="border: 1px solid #b7b7b7"><br>
					<p style="font-size: 16px">Classes Taken (Max.40for 90%-100% performance, and proportionate score upto 75% performance below which no score may be given. If (AVC)*100 is 90%-100% then PI 1=40, If (AVC)*100>75% then PI 1=((AVC)*40), If (AVC)*100 < 75 then PI 1=0)</p>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">
		<div class="row">
			<div class="col-md-12 text-left">
				<p><b>Examination Duties Assigned and Performed (Max. PI: 40)</b></p>
			</div>
		</div>

		<div class="container">
	    	<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="5">ODD SEMESTER</th>
						</thead>
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Type of Examination Duties</th>
								<th class="text-center">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
								<th class="text-center">Extent to which carried out (%) (Max.100%) (A)</th>
								<th>Attachments</th>
							</tr>
						<tbody>
							<tr id='addr10'>
								<td>1</td>
								<td>Paper setting Test 1</td>
								<td>
								<input type="text" name='odpstest1' id='odpstest1' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oepstest1' id='oepstest1' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o1file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o1file" name="o1file" value="" placeholder="">
											    <input type="hidden" name="o1filelocation" id="o1filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o1viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
							</tr>
		                    <tr id='addr11'>
		                    	<td>2</td>
								<td>Paper setting Test 2</td>
								<td>
								<input type="text" name='odpstest2' id='odpstest2' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oepstest2' id='oepstest2' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o2file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o2file" name="o2file" value="" placeholder="">
											    <input type="hidden" name="o2filelocation" id="o2filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o2viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr12'>
		                    	<td>3</td>
								<td>Test 1 invigilation</td>
								<td>
								<input type="text" name='odtest1in' id='odtest1in' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest1in' id='oetest1in' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o3file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o3file" name="o3file" value="" placeholder="">
											    <input type="hidden" name="o3filelocation" id="o3filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o3viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr13'>
		                    	<td>4</td>
								<td>Test 2 invigilation</td>
								<td>
								<input type="text" name='odtest2in' id='odtest2in' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest2in' id='oetest2in' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o4file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o4file" name="o4file" value="" placeholder="">
											    <input type="hidden" name="o4filelocation" id="o4filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o4viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>5</td>
								<td>Test 1 paper assessment</td>
								<td>
								<input type="text" name='odtest1ass' id='odtest1ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest1ass' id='oetest1ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o5file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o5file" name="o5file" value="" placeholder="">
											    <input type="hidden" name="o5filelocation" id="o5filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o5viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>6</td>
								<td>Test 2 paper assessment</td>
								<td>
								<input type="text" name='odtest2ass' id='odtest2ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest2ass' id='oetest2ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o6file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o6file" name="o6file" value="" placeholder="">
											    <input type="hidden" name="o6filelocation" id="o6filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o6viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr15'>
		                    	<td>7</td>
								<td>ESE paper setting</td>
								<td>
								<input type="text" name='odeseps' id='odeseps' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeeseps' id='oeeseps' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o7file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o7file" name="o7file" value="" placeholder="">
											    <input type="hidden" name="o7filelocation" id="o7filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o7viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr16'>
		                    	<td>8</td>
								<td>ESE invigilation/Squad team member</td>
								<td>
								<input type="text" name='odesein' id='odesein' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeesein' id='oeesein' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o8file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o8file" name="o8file" value="" placeholder="">
											    <input type="hidden" name="o8filelocation" id="o8filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o8viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr18'>
		                    	<td>9</td>
								<td>ESE Theory paper assessment</td>
								<td>
								<input type="text" name='odeseth' id='odeseth' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeeseth' id='oeeseth' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o9file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o9file" name="o9file" value="" placeholder="">
											    <input type="hidden" name="o9filelocation" id="o9filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o9viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr19'>
		                    	<td>10</td>
								<td>ESE Practical/oral examination</td>
								<td>
								<input type="text" name='odesepo' id='odesepo' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeesepo' id='oeesepo' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o10file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o10file" name="o10file" value="" placeholder="">
											    <input type="hidden" name="o10filelocation" id="o10filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o10viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr20'>
		                    	<td>11</td>
								<td>ESE re-assessment</td>
								<td>
								<input type="text" name='odesere_ass' id='odesere_ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeesere_ass' id='oeesere_ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o11file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o11file" name="o11file" value="" placeholder="">
											    <input type="hidden" name="o11filelocation" id="o11filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o11viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>

		                    </tr>
		                    <tr id='addr21'>
		                    	<td>12</td>
								<td>Proof reading</td>
								<td>
								<input type="text" name='odproofr' id='odproofr' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeproofr' id='oeproofr' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o12file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o12file" name="o12file" value="" placeholder="">
											    <input type="hidden" name="o12filelocation" id="o12filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o12viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr22'>
		                    	<td>13</td>
								<td>Open day</td>
								<td>
								<input type="text" name='odopenday' id='odopenday' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeopenday' id='oeopenday' class="form-control" maxlength="200" />
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="o13file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="o13file" name="o13file" value="" placeholder="">
											    <input type="hidden" name="o13filelocation" id="o13filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="o13viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div><br>

		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="5">EVEN SEMESTER</th>
						</thead>
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Type of Examination Duties</th>
								<th class="text-center">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
								<th class="text-center">Extent to which carried out (%) (Max.100%) (A)</th>
								<th>Attachments</th>
							</tr>
						<tbody>
							<tr id='addr10'>
								<td>1</td>
								<td>Paper setting Test 1</td>
								<td>
								<input type="text" name='edpstest1' id='edpstest1' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eepstest1' id='eepstest1' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e1file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e1file" name="e1file" value="" placeholder="">
											    <input type="hidden" name="e1filelocation" id="e1filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e1viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
							</tr>
		                    <tr id='addr11'>
		                    	<td>2</td>
								<td>Paper setting Test 2</td>
								<td>
								<input type="text" name='edpstest2' id='edpstest2' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eepstest2' id='eepstest2' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e2file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e2file" name="e2file" value="" placeholder="">
											    <input type="hidden" name="e2filelocation" id="e2filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e2viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr12'>
		                    	<td>3</td>
								<td>Test 1 invigilation</td>
								<td>
								<input type="text" name='edtest1in' id='edtest1in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest1in' id='eetest1in' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e3file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e3file" name="e3file" value="" placeholder="">
											    <input type="hidden" name="e3filelocation" id="e3filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e3viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr13'>
		                    	<td>4</td>
								<td>Test 2 invigilation</td>
								<td>
								<input type="text" name='edtest2in' id='edtest2in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest2in' id='eetest2in' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e4file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e4file" name="e4file" value="" placeholder="">
											    <input type="hidden" name="e4filelocation" id="e4filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e4viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>5</td>
								<td>Test 1 paper assessment</td>
								<td>
								<input type="text" name='edtest1ass' id='edtest1ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest1ass' id='eetest1ass' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e5file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e5file" name="e5file" value="" placeholder="">
											    <input type="hidden" name="e5filelocation" id="e5filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e5viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>6</td>
								<td>Test 2 paper assessment</td>
								<td>
								<input type="text" name='edtest2ass' id='edtest2ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest2ass' id='eetest2ass' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e6file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e6file" name="e6file" value="" placeholder="">
											    <input type="hidden" name="e6filelocation" id="e6filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e6viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr15'>
		                    	<td>7</td>
								<td>ESE paper setting</td>
								<td>
								<input type="text" name='edeseps' id='edeseps' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeeseps' id='eeeseps' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e7file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e7file" name="e7file" value="" placeholder="">
											    <input type="hidden" name="e7filelocation" id="e7filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e7viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr16'>
		                    	<td>8</td>
								<td>ESE invigilation/Squad team member</td>
								<td>
								<input type="text" name='edesein' id='edesein' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeesein' id='eeesein' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e8file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e8file" name="e8file" value="" placeholder="">
											    <input type="hidden" name="e8filelocation" id="e8filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e8viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr18'>
		                    	<td>9</td>
								<td>ESE Theory paper assessment</td>
								<td>
								<input type="text" name='edeseth' id='edeseth' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeeseth' id='eeeseth' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e9file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e9file" name="e9file" value="" placeholder="">
											    <input type="hidden" name="e9filelocation" id="e9filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e9viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr19'>
		                    	<td>10</td>
								<td>ESE Practical/oral examination</td>
								<td>
								<input type="text" name='edesepo' id='edesepo' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeesepo' id='eeesepo' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e10file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e10file" name="e10file" value="" placeholder="">
											    <input type="hidden" name="e10filelocation" id="e10filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e10viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr20'>
		                    	<td>11</td>
								<td>ESE re-assessment</td>
								<td>
								<input type="text" name='edesere_ass' id='edesere_ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeesere_ass' id='eeesere_ass' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e11file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e11file" name="e11file" value="" placeholder="">
											    <input type="hidden" name="e11filelocation" id="e11filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e11viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr21'>
		                    	<td>12</td>
								<td>Proof reading</td>
								<td>
								<input type="text" name='edproofr' id='edproofr' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeproofr' id='eeproofr' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e12file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e12file" name="e12file" value="" placeholder="">
											    <input type="hidden" name="e12filelocation" id="e12filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e12viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
		                    <tr id='addr22'>
		                    	<td>13</td>
								<td>Open day</td>
								<td>
								<input type="text" name='edopenday' id='edopenday' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeopenday' id='eeopenday' class="form-control"/>
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="e13file" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="e13file" name="e13file" value="" placeholder="">
											    <input type="hidden" name="e13filelocation" id="e13filelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="e13viewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>	
								</td>
		                    </tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-8">
    			<div class="form-group row justify-content-center">
    				<div class="col-6 text-right" style="padding:0">
    					<label for="avg-ap" class="col-form-label"><b>Average of A in % =</b></label>
    				</div>
					  
					<div class="col-2">
					   <input class="form-control" type="text" name="avg_ap" id="avg_ap" maxlength="200"/>
					</div>
				</div>							
    		</div>
		</div>

		<div class="row">
			<div class="col-md-6 offset-md-6">
				<label class="col-form-label"><b>PI2 = (Average A in % * 40)/100 =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat1-2" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 40</b>
				</label>
			</div>
						<!-- The modal -->
				<div class="modal fade" id="flipFlop-cat1-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      	<td><input class="form-control selfapp" id="cat1_pi2_self_a" type="number"  min="0" max="40" value="<?php echo $cat1_pi2_self_a; ?>"></td>

									      	<?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
								      			<td><input class="form-control hodapp" id="cat1_pi2_hod_a" type="number" min="0" max="40" value="<?php echo $cat1_pi2_hod_a; ?>"></td>
												<?php
									      	}


									      	if($committee==1)
									      	{
									      		?>
								      			<td><input class="form-control commapp" id="cat1_pi2_committee_a" type="number" min="0" max="40" value="<?php echo $cat1_pi2_committee_a; ?>"></td>
												<?php
									      	}
											
											?>
											<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

									    </tr>
								 	</tbody>
								</table>
								<p id="partb_cat1_pi2_msg"></p>
							</div>
							<div class="modal-footer">
								<button type="button" id="partb_cat1_pi2_btn" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			
		    
		</div>			

		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic3">
							<thead>
								<th colspan="3">Details of additional resource provided to the students to enrich course content/syllabus (Max. PI=10)</th>
								<th>Attachments</th>
							</thead>
							 
							<tbody>
								<tr id='addr30'>
									<td id='dar1'>1</td>
									<td>
									<input type="text" name='dara[]' id='a1' class="form-control"/>
									</td>
									<td>
									<input type="text" name='darb[]' id='b1' class="form-control"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="darfile1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="darfile1" name="darfile[]" value="" placeholder="">
												    <input type="hidden" name="darfilelocation[]" id="darfilelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="darviewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
									</td>
									
								</tr>
			                    <tr id='addr31'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row3" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row3' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
		</div><br><br>

		<div class="row">
			<div class="col-md-7 offset-md-8">
				<label class="col-form-label"><b>PI 3 = 
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat1-3" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 10</b>
				</label>
			</div>
			<!-- The modal -->
			<div class="modal fade" id="flipFlop-cat1-3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
								      	<td><input class="form-control selfapp" id="cat1_pi3_self_a" type="number" min="0" max="10" value="<?php echo $cat1_pi3_self_a; ?>"></td>
								      	<?php

								      	if($hod==1 || $committee==1)
								      	{
								      		?>
							      			<td><input class="form-control hodapp" id="cat1_pi3_hod_a" type="number" min="0" max="10"  value="<?php echo $cat1_pi3_hod_a; ?>"></td>
											<?php
								      	}

								      	if($committee==1)
								      	{
								      		?>
							      			<td><input class="form-control commapp" id="cat1_pi3_committee_a" type="number" min="0" max="10" value="<?php echo $cat1_pi3_committee_a; ?>"></td>
											<?php
								      	}

								      	?>
								      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
							    	</tr>
							 	</tbody>
							</table>
							<p id="partb_cat1_pi3_msg"></p>
						</div>
						<div class="modal-footer">
							<button type="button" id="partb_cat1_pi3_btn" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
			
		    
		</div>	

		<div class="row justify-content-center">
			<div class="col-md-11 text-left">
				<label class="col-form-label"><b>2 marks for each compliance</b></label>
			</div>
		</div>		

		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column text-left">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="3">Use of Participatory and innovative Teaching-Learning Methodologies (Max. PI=10)</th>
							<th>Attachments</th>
						</thead>
						
						<tbody>
							<tr id='addr40'>
								<td>1</td>
								<td>Problem based learning, case studies, group discussions, activity based learning etc.</td>
								<td>
								<input type="text" name='dpstest1' id='dpstest1' class="form-control" maxlength="200" />
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps1file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps1file" name="dps1file" value="" placeholder="">
												    <input type="hidden" name="dps1filelocation" id="dps1filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps1viewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
									</td>
							</tr>
		                    <tr id='addr41'>
		                    	<td>2</td>
								<td>Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board</td>
								<td>
								<input type="text" name='dpstest2' id='dpstest2' class="form-control" maxlength="200" />
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps2file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps2file" name="dps2file" value="" placeholder="">
												    <input type="hidden" name="dps2filelocation" id="dps2filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps2rviewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
									</td>
		                    </tr>
		                    <tr id='addr42'>
		                    	<td>3</td>
								<td>Developing and imparting Remedial / Bridge Courses</td>
								<td>
								<input type="text" name='dtest1in' id='dtest1in' class="form-control" maxlength="200" />
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps3file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps3file" name="dps3file" value="" placeholder="">
												    <input type="hidden" name="dps3filelocation" id="dps3filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps3viewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>
		                    </tr>
		                    <tr id='addr43'>
		                    	<td>4</td>
								<td>Developing and imparting soft skills / communication skills / personality / development courses / modules</td>
								<td>
								<input type="text" name='dtest2in' id='dtest2in' class="form-control" maxlength="200" />
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps4file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps4file" name="dps4file" value="" placeholder="">
												    <input type="hidden" name="dps4filelocation" id="dps4filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps4viewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
									</td>
		                    </tr>
		                    <tr id='addr44'>
		                    	<td>5</td>
								<td>Developing and imparting specialized teaching-learning programmes in physical education, library; innovative compositions and creations in music, performing and visual arts and other tradition areas</td>
								<td>
								<input type="text" name='dtest1ass' id='dtest1ass' class="form-control"/>
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps5file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps5file" name="dps5file" value="" placeholder="">
												    <input type="hidden" name="dps5filelocation" id="dps5filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps5viewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>
		                    </tr>
		                    <tr id='addr45'>
		                    	<td>6</td>
								<td>Audit courses taken (given name/semester/term)</td>
								<td>
								<input type="text" name='dtest2ass' id='dtest2ass' class="form-control"/>
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps6file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps6file" name="dps6file" value="" placeholder="">
												    <input type="hidden" name="dps6filelocation" id="dps6filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps6viewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>
		                    </tr>
		                    <tr id='addr46'>
		                    	<td>7</td>
								<td>Other:</td>
								<td>
								<input type="text" name='deseps' id='deseps' class="form-control"/>
								</td>
								<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dps7file" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dps7file" name="dps7file" value="" placeholder="">
												    <input type="hidden" name="dps7filelocation" id="dps7filelocation" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dps7viewfile" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>
		                    </tr>
		                </tbody>
					</table>
					</div>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-7 offset-md-7">
				<label class="col-form-label"><b>PI 4 = 
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat1-4" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 10</b>
				</label>
			</div>
						<!-- The modal -->
			<div class="modal fade" id="flipFlop-cat1-4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
								      	<td><input class="form-control selfapp" id="cat1_pi4_self_a" type="number" min="0" max="10" value="<?php echo $cat1_pi4_self_a; ?>"></td>
								      	<?php

								      	if($hod==1 || $committee==1)
								      	{
								      		?>
							      			<td><input class="form-control hodapp" id="cat1_pi4_hod_a" type="number" min="0" max="10" value="<?php echo $cat1_pi4_hod_a; ?>"></td>
											<?php
								      	}

								      	if($committee==1)
								      	{
								      		?>
							      			<td><input class="form-control commapp" id="cat1_pi4_committee_a" type="number" min="0" max="10"  value="<?php echo $cat1_pi4_committee_a; ?>"></td>
							      			<?php

								      	}

								      	?>
								      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

							   		</tr>
							 	</tbody>
							</table>
							<p id="partb_cat1_pi4_msg"></p>
						</div>
						<div class="modal-footer">
							<button type="button" id="partb_cat1_pi4_btn" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>   
		</div>	

		<div class="row justify-content-center">
			<div class="col-md-11 text-left">
				<label class="col-form-label"><b>2 marks for each compliance</b></label>
			</div>
		</div>	
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row">
			<div class="col-md-12 text-center">
				<label class="col-form-label"><b>Teaching and Learning Total = PI1 + PI2 + PI3 + PI4 = 
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat1-5" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 100</b>
				</label>
			</div>
						<!-- The modal -->
			<div class="modal fade" id="flipFlop-cat1-5" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
							      <td><input class="form-control selfapp" id="cat1_pitotal_self_a" type="number" min="0" max="100" value="<?php echo $cat1_pitotal_self_a; ?>"></td>
							      <?php

							      	if($hod==1 || $committee==1)
							      	{
							      		?>
							      		<td><input class="form-control hodapp" id="cat1_pitotal_hod_a" type="number" min="0" max="100" value="<?php echo $cat1_pitotal_hod_a; ?>"></td>
										<?php
							      	}
							      	

							      	if($committee==1)
							      	{
							      		?>
							      		<td><input class="form-control commapp" id="cat1_pitotal_committee_a" type="number" min="0" max="100" value="<?php echo $cat1_pitotal_committee_a; ?>"></td>
										<?php
							      	}
							      	?>
							      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">


							    </tr>
							 </tbody>
							</table>
							<p id="partb_cat1_pitotal_msg"></p>
						</div>
						<div class="modal-footer">
							<button type="button" id="partb_cat1_pitotal_btn" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>   
		</div>	

	

		<a href="partB.php"><img src="img/next.png" style="height: 40px;width: 40px;margin-left: 807px"></a>


		</div>
		<br>
		<!-- <hr style="border: 0.5px solid #c8c8c8"><br> -->
		<!-- <div class="tab-pane fade show" id="nav-cat2" role="tabpanel" aria-labelledby="nav-cat2-tab"> -->
		<div class="tab-pane fade" id="nav-cat2" role="tabpanel" aria-labelledby="nav-cat2-tab">
		<div class="row">
			<div class="col-md-12">
				<p class="cat-info"><b>Category II: Co-curricular and administrative activities done in college (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic4">
							<thead>
								<th colspan="4">Administrative Post</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD/<br>Type of Activity</th>
								<th class="text-center"></th>
								<th>Attachments</th>
							</tr>
						
							 
							<tbody>
								<tr id='addr50'>
									<td id='hasr1'>1</td>
									<td>
									<input type="text" name='ha[]' id='ha1' class="form-control" maxlength="200" />
									</td>
									<td>
									<input type="text" name='hb[]' id='hb1' class="form-control" maxlength="200" />
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="hfile1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="hfile1" name="hfile[]" value="" placeholder="">
												    <input type="hidden" name="hfilelocation[]" id="hfilelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="hviewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
									</td>	
								</tr>
			                    <tr id='addr51'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row4" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row4' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
		
			<div class="row">
				<div class="col-md-12 text-center">
					<p>For HOD/Dean/Vice Principal 40 PI and for Associate HOD/NBA and NAAC co-ordinator/IQAC co-ordinator/Purchase Committee member 20 PI</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PII 1 =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop1-cat2-1" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop1-cat2-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat2_pii1_self_a" type="number" min="0" max="40" value="<?php echo $cat2_pii1_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
									      		<td><input class="form-control hodapp" id="cat2_pii1_hod_a" type="number" min="0" max="40" value="<?php echo $cat2_pii1_hod_a; ?>"></td>
												<?php
									      	}

									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat2_pii1_committee_a" type="number" min="0" max="40" value="<?php echo $cat2_pii1_committee_a; ?>"></td>
												<?php
									      	}
									      	?>

									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat2_pii1_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat2_pii1_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div><br><br>

		

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic5">
							<thead>
								<th colspan="4">Activities</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Extension, Co-Curricular and Field based activities / internships in college<br> Type of Activity</th>
								<th class="text-center"></th>
								<th>Attachments</th>
							</tr>
							 
							<tbody>
								<tr id='addr60'>
									<td id='actsr1'>1</td>
									<td>
									<input type="text" name='ea[]' id='ea1' class="form-control"/>
									</td>
									<td>
									<input type="text" name='eb[]' id='eb1' class="form-control"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="efile1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="efile1" name="efile[]" value="" placeholder="">
												    <input type="hidden" name="efilelocation[]" id="efilelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="eviewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>	
								</tr>
			                    <tr id='addr61'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row5" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row5' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>5 Marks for each compliance. Max.20</p>
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PII 2 =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat2-2" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat2-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat2_pii2_self_a" type="number" min="0" max="20" value="<?php echo $cat2_pii2_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
								     			<td><input class="form-control hodapp" id="cat2_pii2_hod_a" type="number" min="0" max="20" value="<?php echo $cat2_pii2_hod_a; ?>"></td>

												<?php
									      	}

								      		if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat2_pii2_committee_a" type="number" min="0" max="20" value="<?php echo $cat2_pii2_committee_a; ?>"></td>

												<?php
									      	}

								      		?>
								      		<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat2_pii2_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat2_pii2_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			

		</div><br><br>
		

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic6">
							<thead>						     	
								<tr>
									<th class="text-center">Sr.No</th>
									<th class="text-center">Extra-curricular and social activities in college<br> Type of Activity</th>
									<th class="text-center"></th>
									<th>Attachments</th>
								</tr>
							</thead>
							 
							<tbody>
								<tr id='addr70'>
									<td id="exca1">1</td>
									<td>
									<input type="text" name="eca[]" id="eca1" class="form-control"/>
									</td>
									<td>
									<input type="text" name="ecb[]" id="ecb1" class="form-control"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="ecfile1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="ecfile1" name="ecfile[]" value="" placeholder="">
												    <input type="hidden" name="ecfilelocation[]" id="ecfilelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="ecviewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>	
								</tr>
			                    <tr id='addr71'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row6" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row6' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>5 Marks for each compliance. Max.20</p>
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PII 3 =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat2-3" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat2-3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat2_pii3_self_a" type="number" min="0" max="20" value="<?php echo $cat2_pii3_self_a; ?>"></td>
									      	<?php

											if($hod==1 || $committee==1)
									      	{
									      		?>
								     			<td><input class="form-control hodapp" id="cat2_pii3_hod_a" type="number" min="0" max="20" value="<?php echo $cat2_pii3_hod_a; ?>"></td>

												<?php
									      	}

									      	if($committee==1)
									      	{
									      		?>
								     			<td><input class="form-control commapp" id="cat2_pii3_committee_a" type="number" min="0" max="20" value="<?php echo $cat2_pii3_committee_a; ?>"></td>

												<?php
									      	}
									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat2_pii3_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat2_pii3_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div><br><br>
			

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic7">
							<thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">College administration/organization member/committee member/NBA/NAAC of college: <br> Type of Activity</th>
								<th class="text-center"></th>
								<th>Attachments</th>
							</tr>
						</thead>
							 
							<tbody>
								<tr id='addr80'>
									<td id="csr1">1</td>
									<td>
									<input type="text" name="ca[]" id="ca1" class="form-control"/>
									</td>
									<td>
									<input type="text" name="cb[]" id="cb1" class="form-control"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="cfile1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="cfile1" name="cfile[]" value="" placeholder="">
												    <input type="hidden" name="cfilelocation[]" id="cfilelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="cviewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>	
								</td>	
								</tr>
			                    <tr id='addr81'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row7" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row7' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>5 Marks for each compliance. Max.20</p>
				</div>
			</div><br>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PII 4 =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat2-4" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

					<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat2-4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat2_pii4_self_a" type="number" min="0" max=20" value="<?php echo $cat2_pii4_self_a; ?>"></td>

									      	<?php
									      	if($hod==1 || $committee==1)
									      	{
									      		?>
								     			<td><input class="form-control hodapp" id="cat2_pii4_hod_a" type="number" min="0" max=20" value="<?php echo $cat2_pii4_hod_a; ?>"></td>

												<?php
									      	}
									      	if($committee==1)
									      	{
									      		?>
								     			<td><input class="form-control commapp" id="cat2_pii4_committee_a" type="number" min="0" max=20" value="<?php echo $cat2_pii4_committee_a; ?>"></td>

												<?php
									      	}
									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat2_pii4_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat2_pii4_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row">
			<div class="col-md-12 text-center">
				<label class="col-form-label"><b>Co-Curricular and administrative activities Total = PII1+PII2+PII3+PII4 = 
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat2-t" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 100</b>
				</label>
			</div>
						<!-- The modal -->
			<div class="modal fade" id="flipFlop-cat2-t" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
							      <td><input class="form-control selfapp" id="cat2_piitotal_self_a" type="number" min="0" max="100" value="<?php echo $cat2_piitotal_self_a; ?>"></td>
							      <?php

							      	if($hod==1 || $committee==1)
							      	{
							      		?>
							      		<td><input class="form-control hodapp" id="cat2_piitotal_hod_a" type="number" min="0" max="100" value="<?php echo $cat2_piitotal_hod_a; ?>"></td>

										<?php
							      	}

							      	if($committee==1)
							      	{
							      		?>
							      		<td><input class="form-control commapp" id="cat2_piitotal_committee_a" type="number" min="0" max="100" value="<?php echo $cat2_piitotal_committee_a; ?>"></td>

										<?php
							      	}
							      	?>

							    </tr>
							 </tbody>
							</table>
							<p id="partb_cat2_piitotal_msg"></p>
						</div>
						<div class="modal-footer">
							<button type="button" id="partb_cat2_piitotal_btn" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>   
		</div>	

	

		<a href="partB.php"><img src="img/next.png" style="height: 40px;width: 40px;margin-left: 807px">
		</a>

		</div>	
		<!-- <br> -->
		<!-- <hr style="border: 0.5px solid #c8c8c8"><br> -->

		<div class="tab-pane fade" id="nav-cat3" role="tabpanel" aria-labelledby="nav-cat3-tab">
		<div class="row">
			<div class="col-md-12">
				<p class="cat-info"><b>Category III: Publication, research/thesis supervisor,project guide,research,consultancy and intellectual properties (Max.PI=175)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container" style="border: 1px solid #c8c8c8" id="ppr1"><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p style="text-align: center"><b>Published Papers In Peer Reviewed Journals (Max. PI=100)</b></p>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">
			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name="pptitle[]" id="pptitle1" class="form-control my-0 my-sm-0" maxlength="200"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of peer review Journals (not online journals)</label>
						<input type="text" name="ppnpr[]" id="ppnpr1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name="ppisbn[]" id="ppisbn1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name="ppif[]" id="ppif1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>						
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-2 text-left">
					<label>Whether you are main author</label>
				</div>
		    	<div class="col-md-3 text-left">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline11" name="customRadioInline1[1]" class="custom-control-input yesradio" value="Yes" checked>
					  <label class="custom-control-label yes" for="customRadioInline11">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline21" name="customRadioInline1[1]" class="custom-control-input noradio" value="No">
					  <label class="custom-control-label no" for="customRadioInline21">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name="ppnca[]" id="ppnca1" class="col-3 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<!-- <div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name="pppi[]" id="pppi1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div> -->
				
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-10 text-left">
					<p>20 marks for peer review journal first author and 10 marks for second author</p>
				</div>
				<div class="col-md-2">
					<div class="filepartb-cat3">
						<div class="row justify-content-center">
							<div class="col-3 offset-md-3" style="padding:0;margin:0">
								<div class="file-upload mx-auto" style="width:26px">
								    <label for="ppfile1" style="cursor:pointer">
								        <img src="https://img.icons8.com/material/26/000000/attach.png">
								    </label>
								    <input type="file" class="dynamic-four" id="ppfile1" name="ppfile[]" value="" placeholder="">
								    <input type="hidden" name="ppfilelocation[]" id="ppfilelocation1" value="">
								</div>
							</div>
							<div class="col-md-3" style="padding:0;margin:0">
								<a href="viewfile.php?location=none" id="ppviewfile1" target="_blank">
									<img src="https://img.icons8.com/ios/24/000000/document.png">
								</a>										
							</div>
						</div>
					</div>	
				</div>
			</div>

		</div>

		<br id="br2" style="display: none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppr2"></div>

		<a id="add_row_ppr" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
		<a id='delete_row_ppr' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
		<br><br>

		<div class="row justify-content-center">
			<div class="col-md-3">
				<label class="col-form-label"><b>PI  =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-1" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat3-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii1_self_a" type="number"  min="0" max="100" value="<?php echo $cat3_piii1_self_a; ?>"></td>
									      	<?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
									      		<td><input class="form-control hodapp" id="cat3_piii1_hod_a" type="number" min="0" max="100" value="<?php echo $cat3_piii1_hod_a; ?>"></td>
												<?php
									      	}

									 
									      	
									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat3_piii1_committee_a" type="number" min="0" max="100" value="<?php echo $cat3_piii1_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

									      
									      
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii1_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii1_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
		    </div>
		</div>		

		<hr><br>




	
		<div class="container" style="border: 1px solid #c8c8c8" id="ppric1"><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p style="text-align: center"><b>Published Papers in International/National Conference Abroad (Max.PI=15)</b></p>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name="pptitleic[]" id="pptitleic1" class="form-control my-0 my-sm-0" maxlength="200"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of International Conference held Abroad</label>
						<input type="text" name="ppnpric[]" id="ppnpric1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name="ppisbnic[]" id="ppisbnic1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name="ppific[]" id="ppific1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>						
				</div>
			</div>		
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-2 text-left">
					<p>Whether you are main author</p>
				</div>
		    	<div class="col-md-3 text-left">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline11ic" name="customRadioInline1ic[1]" class="custom-control-input yesradio" value="Yes" checked>
					  <label class="custom-control-label yes" for="customRadioInline11ic">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline21ic" name="customRadioInline1ic[1]" class="custom-control-input noradio" value="No">
					  <label class="custom-control-label no" for="customRadioInline21ic">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name="ppncaic[]" id="ppncaic1" class="col-3 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<!-- <div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name="pppiic[]" id="pppiic1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div> -->						
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-10 text-left">
					<p>15 marks for International conference for first author and 08 marks for second author</p>
				</div>
				<div class="col-md-2">
					<div class="filepartb-cat3">
						<div class="row justify-content-center">
							<div class="col-3 offset-md-3" style="padding:0;margin:0">
								<div class="file-upload mx-auto" style="width:26px">
								    <label for="pp1file1" style="cursor:pointer">
								        <img src="https://img.icons8.com/material/26/000000/attach.png">
								    </label>
								    <input type="file" class="dynamic-four" id="pp1file1" name="pp1file[]" value="" placeholder="">
								    <input type="hidden" name="pp1filelocation[]" id="pp1filelocation1" value="">
								</div>
							</div>
							<div class="col-md-3" style="padding:0;margin:0">
								<a href="viewfile.php?location=none" id="pp1viewfile1" target="_blank">
									<img src="https://img.icons8.com/ios/24/000000/document.png">
								</a>										
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<br id="bric2" style="display: none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppric2"></div>

		<a id="add_row_ppric" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
		<a id='delete_row_ppric' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>

		<br><br>

		<div class="row justify-content-center">
			<div class="col-md-3">
				<label class="col-form-label"><b>PI  =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-2" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat3-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii2_self_a" type="number"  min="0" max="15" value="<?php echo $cat3_piii2_self_a; ?>"></td>
									      	<?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii2_hod_a" type="number" min="0" max="15" value="<?php echo $cat3_piii2_hod_a; ?>"></td>
												<?php
									      	}

									 
									      	
									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat3_piii2_committee_a" type="number" min="0" max="15" value="<?php echo $cat3_piii2_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									      
									      
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii2_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii2_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
		    </div>
		</div>

		<hr><br>







		<div class="container" style="border: 1px solid #c8c8c8" id="pprinc1"><br>

			<div class="row">
				<div class="col-md-12 text-left">
					<p style="text-align: center"><b>Published Papers in International/National Conference in India (Max.PI=10)</b></p>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name="pptitleinc[]" id="pptitleinc1" class="form-control my-0 my-sm-0" maxlength="200"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of International Conference held in India</label>
						<input type="text" name="ppnprinc[]" id="ppnprinc1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name="ppisbnpinc[]" id="ppisbninc1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name="ppifinc[]" id="ppifinc1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>						
				</div>
			</div>		
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-2 text-left">
					<p>Whether you are main author</p>
				</div>
		    	<div class="col-md-3 text-left">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline11inc" name="customRadioInline1inc[1]" class="custom-control-input yesradio" value="Yes" checked>
					  <label class="custom-control-label yes" for="customRadioInline11inc">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline21inc" name="customRadioInline1inc[1]" class="custom-control-input noradio" value="No">
					  <label class="custom-control-label no" for="customRadioInline21inc">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name="ppncainc[]" id="ppncainc1" class="col-3 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<!-- <div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name="pppiinc[]" id="pppiinc1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div> -->						
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-10 text-left">
					<p>10 marks for International conference for first author and 05 marks for second author</p>
				</div>
				<div class="col-md-2">
					<div class="filepartb-cat3">
						<div class="row justify-content-center">
							<div class="col-3 offset-md-3" style="padding:0;margin:0">
								<div class="file-upload mx-auto" style="width:26px">
								    <label for="pp2file1" style="cursor:pointer">
								        <img src="https://img.icons8.com/material/26/000000/attach.png">
								    </label>
								    <input type="file" class="dynamic-four" id="pp2file1" name="pp2file[]" value="" placeholder="">
								    <input type="hidden" name="pp2filelocation[]" id="pp2filelocation1" value="">
								</div>
							</div>
							<div class="col-md-3" style="padding:0;margin:0">
								<a href="viewfile.php?location=none" id="pp2viewfile1" target="_blank">
									<img src="https://img.icons8.com/ios/24/000000/document.png">
								</a>										
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<br id="brinc2" style="display: none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprinc2"></div>

		<a id="add_row_pprinc" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
		<a id='delete_row_pprinc' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>

		<br><br>

		<div class="row justify-content-center">
			<div class="col-md-3">
				<label class="col-form-label"><b>PI  =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-3" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat3-3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii3_self_a" type="number"  min="0" max="15" value="<?php echo $cat3_piii3_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii3_hod_a" type="number" min="0" max="15" value="<?php echo $cat3_piii3_hod_a; ?>"></td>
												<?php
									      	}

									 
									      	
									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat3_piii3_committee_a" type="number" min="0" max="15" value="<?php echo $cat3_piii3_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
										</tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii3_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii3_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
		    </div>
		</div>

		<hr><br>

		<div class="container" style="border: 1px solid #c8c8c8" id="pprbk1"><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p style="text-align: center"><b>Books/Articles/Chapters published in Books (Max.PI=15)</b></p>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name="pptitlebk[]" id="pptitlebk1" class="form-control my-0 my-sm-0" maxlength="200"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Publisher</label>
						<input type="text" name="ppnprbk[]" id="ppnprbk1" class="form-control my-0 my-sm-0" maxlength="200" />
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name="ppisbnbk[]" id="ppisbnbk1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Date of Publication</label>
						<input type="date" name="ppdatebk[]" id="ppdatebk1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>						
				</div>
			</div>		
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">

				<div class="col-md-5 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name="ppifbk[]" id="ppifbk1" class="form-control my-0 my-sm-0" maxlength="200"/>
					</div>						
				</div>

				<div class="col-md-2 text-left">
					<p>Whether you are main author</p>
				</div>
		    	<div class="col-md-3">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline11bk" name="customRadioInline1bk[1]" class="custom-control-input yesradio" value="Yes" checked>
					  <label class="custom-control-label yes" for="customRadioInline11bk">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline21bk" name="customRadioInline1bk[1]" class="custom-control-input noradio" value="No">
					  <label class="custom-control-label no" for="customRadioInline21bk">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name="ppncabk[]" id="ppncabk1" class="col-3 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<!-- <div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name="pppibk[]" id="pppibk1" class="col-4 form-control my-0 my-sm-0" maxlength="200"/>	
					</div>
				</div> -->					
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-10 text-left">
					<p>15 marks for first author and 08 marks for co-author</p>
				</div>
				<div class="col-md-2">
					<div class="filepartb-cat3">
						<div class="row justify-content-center">
							<div class="col-3 offset-md-3" style="padding:0;margin:0">
								<div class="file-upload mx-auto" style="width:26px">
								    <label for="pp3file1" style="cursor:pointer">
								        <img src="https://img.icons8.com/material/26/000000/attach.png">
								    </label>
								    <input type="file" class="dynamic-four" id="pp3file1" name="pp3file[]" value="" placeholder="">
								    <input type="hidden" name="pp3filelocation[]" id="pp3filelocation1" value="">
								</div>
							</div>
							<div class="col-md-3" style="padding:0;margin:0">
								<a href="viewfile.php?location=none" id="pp3viewfile1" target="_blank">
									<img src="https://img.icons8.com/ios/24/000000/document.png">
								</a>										
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<br id="brbk2" style="display: none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprbk2"></div>

		<a id="add_row_pprbk" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
		<a id='delete_row_pprbk' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>

		<br><br>


		<div class="row justify-content-center">
			<div class="col-md-3">
				<label class="col-form-label"><b>PI  =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-4" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop-cat3-4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii4_self_a" type="number"  min="0" max="15" value="<?php echo $cat3_piii4_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii4_hod_a" type="number" min="0" max="15" value="<?php echo $cat3_piii4_hod_a; ?>"></td>
												<?php
									      	}

									      	if($committee==1)
									      	{
									      		?>
												<td><input class="form-control commapp" id="cat3_piii4_committee_a" type="number" min="0" max="15" value="<?php echo $cat3_piii4_committee_a; ?>"></td>
												<?php
									      	}
									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

									      
									      
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii4_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii4_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
		    </div>
		</div>

		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
	    	<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="6">Research/thesis supervisor and project guide (Max.PI=40)</th>
						</thead>
						     	
							<tr>
								<th class="text-center">Degree</th>
								<th class="text-center">Number Enrolled</th>
								<th class="text-center">Thesis submitted</th>
								<th class="text-center">No. of Degree Awarded</th>
								<th class="text-center">PI</th>
								<th>Attachments</th>
							</tr>
						<tbody>
							<tr id='addr90'>
								<td>Ph.D</td>
								<td>
									<input type="number" id='phdne' name='phdne' class="form-control"/>
								</td>
								<td>
									<input type="number" id='phdts' name='phdts' class="form-control"/>
								</td>
								<td>
									<input type="number" id='phdda' name='phdda' class="form-control"/>
								</td>
								<td>
									<!-- <input type="number" name='phdpi' class="form-control"/> -->
									<label class="col-form-label"><b><button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-phd" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button></b>
									</label>
									 
									<div class="modal fade" id="flipFlop-cat3-phd" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
													      <td><input class="form-control selfapp" id="cat3_piii5_self_a" type="number" min="0" max="40" value="<?php echo $cat3_piii5_self_a; ?>"></td>
													      <?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
															<td><input class="form-control hodapp" id="cat3_piii5_hod_a" type="number" min="0" max="40" value="<?php echo $cat3_piii5_hod_a; ?>"></td>
															<?php
												      	}

												      	if($committee==1)
												      	{
												      		?>
															<td><input class="form-control commapp" id="cat3_piii5_committee_a" type="number" min="0" max="40" value="<?php echo $cat3_piii5_committee_a; ?>"></td>
															<?php
												      	}
													      
													    ?>
													    <input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
													    </tr>
													 </tbody>
													</table>
													<p id="partb_cat3_piii5_msg"></p>
												</div>
												<div class="modal-footer">
													<button type="button" id="partb_cat3_piii5_btn" class="btn btn-primary" >Save</button>
												</div>
											</div>
										</div>
									</div>  
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="phdfile" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="phdfile" name="phdfile" value="" placeholder="">
											    <input type="hidden" name="phdfilelocation" id="phdfilelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="phdviewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>
								</td>
							</tr>
		                    <tr id='addr91'>
		                    	<td>M.Tech</td>
								<td>
									<input type="number" id='mtechne' name='mtechne' class="form-control"/>
								</td>
								<td>
									<input type="number" id='mtechts' name='mtechts' class="form-control"/>
								</td>
								<td>
									<input type="number" id='mtechda' name='mtechda' class="form-control"/>
								</td>
								<td>
									<!-- <input type="number" name='mtechpi' class="form-control"/> -->
									<label class="col-form-label"><b><button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-mtech" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button></b>
									</label>

									<div class="modal fade" id="flipFlop-cat3-mtech" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
													      <td><input class="form-control selfapp" id="cat3_piii6_self_a" type="text" min="0" max="40" value="<?php echo $cat3_piii6_self_a; ?>"></td>

													      <?php

												      	if($hod==1 || $committee==1)
												      	{
												      		?>
															<td><input class="form-control hodapp" id="cat3_piii6_hod_a" type="text" min="0" max="40" value="<?php echo $cat3_piii6_hod_a; ?>"></td>
															<?php
												      	}

												 
												      	
												      	if($committee==1)
												      	{
												      		?>
												      		<td><input class="form-control commapp" id="cat3_piii6_committee_a" type="text" min="0" max="40" value="<?php echo $cat3_piii6_committee_a; ?>"></td>
															<?php
												      	}

												      	?>
												      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

													      
													      
													    </tr>
													 </tbody>
													</table>
													<p id="partb_cat3_piii6_msg"></p>
												</div>
												<div class="modal-footer">
													<button type="button" id="partb_cat3_piii6_btn" class="btn btn-primary">Save</button>
												</div>
											</div>
										</div>
									</div>  
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="mtechfile" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="mtechfile" name="mtechfile" value="" placeholder="">
											    <input type="hidden" name="mtechfilelocation" id="mtechfilelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="mtechviewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>
								</td>
		                    </tr>
		                    <tr id='addr92'>
		                    	<td>B.Tech</td>
								<td>
									<input type="number" id='btechne' name='btechne' class="form-control"/>
								</td>
								<td>
									<input type="number" id='btechts' name='btechts' class="form-control"/>
								</td>
								<td>
									<input type="number" id='btechda' name='btechda' class="form-control"/>
								</td>
								<td>
									<!-- <input type="number" name='btechpi' class="form-control"/> -->
									<label class="col-form-label"><b><button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-btech" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button></b>
									</label>

									<div class="modal fade" id="flipFlop-cat3-btech" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
													      <td><input class="form-control selfapp" id="cat3_piii7_self_a" type="number" min="0" max="40" value="<?php echo $cat3_piii7_self_a; ?>"></td>
													      <?php

													      	if($hod==1 || $committee==1)
													      	{
													      		?>
																<td><input class="form-control hodapp" id="cat3_piii7_hod_a" type="number" min="0" max="40" value="<?php echo $cat3_piii7_hod_a; ?>"></td>
																<?php
													      	}

													      	if($committee==1)
													      	{
													      		?>
																<td><input class="form-control commapp" id="cat3_piii7_committee_a" type="number" min="0" max="40" value="<?php echo $cat3_piii7_committee_a; ?>"></td>
																<?php
													      	}
													      	?>
													      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
													      
													     
													    </tr>
													 </tbody>
													</table>
													<p id="partb_cat3_piii7_msg"></p>
												</div>
												<div class="modal-footer">
													<button type="button" id="partb_cat3_piii7_btn" class="btn btn-primary">Save</button>
												</div>
											</div>
										</div>
									</div>  
								</td>
								<td>
								<div class="filepartb">
									<div class="row justify-content-center">
										<div class="col-3 offset-md-3" style="padding:0;margin:0">
											<div class="file-upload mx-auto" style="width:26px">
											    <label for="btechfile" style="cursor:pointer">
											        <img src="https://img.icons8.com/material/26/000000/attach.png">
											    </label>
											    <input type="file" class="dynamic-four" id="btechfile" name="btechfile" value="" placeholder="">
											    <input type="hidden" name="btechfilelocation" id="btechfilelocation" value="">
											</div>
										</div>
										<div class="col-md-3" style="padding:0;margin:0">
											<a href="viewfile.php?location=none" id="btechviewfile" target="_blank">
												<img src="https://img.icons8.com/ios/24/000000/document.png">
											</a>										
										</div>
									</div>
								</div>
								</td>
		                    </tr>
						</tbody>
						<!-- <thead>
							<th colspan="5" style="text-align: right"><label class="mr-sm-2">PI =</label>
								<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3" title="Clicking this button will allow you to appraise this entry" style="height: 35px;width: 35px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button></b>
								 
								<div class="modal fade" id="flipFlop-cat3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
												      <th scope="col">H.O.D</th>
												      <th scope="col">Committee</th>
												    </tr>
												  </thead>
												  <tbody>
												    <tr>
												      <td><input class="form-control" id="research-self-a" type="text"></td>
												      <td><input class="form-control" id="research-hod-a" type="text"></td>
												      <td><input class="form-control" id="research-committee-a" type="text"></td>
												    </tr>
												 </tbody>
												</table>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
											</div>
										</div>
									</div>
								</div>  
							</th>
						</thead> -->
						<thead>
							<th colspan="6">10 marks awarded/8 marks for thesis submitted/6 marks for enrolled Ph.D students as a guide during academic year. 8 marks for awarded/6 marks for thesis submitted/4 marks for enrolled M.Tech students as guide during academic year. 6 marks for awarded/4 marks for thesis submitted/2 marks per enrolled B.Tech student groups as a guide during academic year. For co-guide the marks will be half.</th>
						</thead>
					</table>
					</div>
				</div>
			</div>
		</div><br><br>


		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic8">
							<thead>
								<th colspan="6">Research/project/consultancy proposals submitted in academic year 20__/20__ but yet to get approval (Max. PI=15)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Title</th>
								<th class="text-center">Agency</th>
								<th class="text-center">Date of Submission</th>
								<th class="text-center">Grant/Amount Mobilized (Rs.)</th>
								<th>Attachments</th>
							</tr>
							<tbody>
								<tr id='addr100'>
									<td id="res1">1</td>
									<td>
									<input type="text" name="ta[]" id="ta1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="text" name="ab[]" id="ab1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="date" name="dc[]" id="dc1" class="form-control"/>
									</td>
									<td>
									<input type="number" name="gd[]" id="gd1" class="form-control"/>
									</td>	
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="research1file1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="research1file1" name="research1file[]" value="" placeholder="">
												    <input type="hidden" name="research1filelocation[]" id="research1filelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="research1viewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>
								</tr>
			                    <tr id='addr101'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row8" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row8' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>10 Marks for more than 5 Lacs/8 marks for between 1 to 5 Lacs/6 marks for less than 1 Lacs as a principle investigator. If second/third investigator then marks will be 5,4 and 3 respectively</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PI =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop1-cat3-res" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop1-cat3-res" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii8_self_a" type="number" min="0" max="15" value="<?php echo $cat3_piii8_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii8_hod_a" type="number" min="0" max="15" value="<?php echo $cat3_piii8_hod_a; ?>"></td>

												<?php
									      	}

									      	if($committee==1)
									      	{
									      		?>
												<td><input class="form-control commapp" id="cat3_piii8_committee_a" type="number" min="0" max="15" value="<?php echo $cat3_piii8_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii8_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii8_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div><br><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic9">
							<thead>
								<th colspan="6">Ongoing Research/project/consultancy proposals approved/initiated in academic year 20__/20__ but yet to complete (Max. PI=15)</th>
							</thead>
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Title</th>
								<th class="text-center">Agency</th>
								<th class="text-center">Period in years</th>
								<th class="text-center">Grant/Amount Mobilized (Rs.)</th>
								<th>Attachments</th>
							</tr>

							 
							<tbody>
								<tr id='addr110'>
									<td id="ores1">1</td>
									<td>
									<input type="text" name="tta[]" id="tta1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="text" name="aab[]" id="aab1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="date" name="ddc[]" id="ddc1" class="form-control"/>
									</td>
									<td>
									<input type="number" name="ggd[]" id="ggd1" class="form-control"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="research2file1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="research2file1" name="research2file[]" value="" placeholder="">
												    <input type="hidden" name="research2filelocation[]" id="research2filelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="research2viewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>	
								</tr>
			                    <tr id='addr111'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row9" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row9' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>10 Marks for more than 5 Lacs/8 marks for between 1 to 5 Lacs/6 marks for less than 1 Lacs as a principle investigator. If second/third investigator then marks will be 5,4 and 3 respectively</p>
				</div>
			</div>


			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PI =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop1-cat3-ores" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop1-cat3-ores" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii9_self_a" type="number" min="0" max="15" value="<?php echo $cat3_piii9_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii9_hod_a" type="number" min="0" max="15" value="<?php echo $cat3_piii9_hod_a; ?>"></td>

												<?php
									      	}

									 
									      	
									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat3_piii9_committee_a" type="number" min="0" max="15" value="<?php echo $cat3_piii9_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

									      
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii9_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii9_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br><br>


		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic10">
							<thead>
								<th colspan="6">Completed Research Project and Consultancies initiated in academic year 20__/20__ but completed in academic year 20__/20__ (Max. PI=20) (Max. PI=20)</th>
							</thead>
							
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Title</th>
								<th class="text-center">Agency</th>
								<th class="text-center">Date of Completion</th>
								<th class="text-center">Grant/Amount Mobilized (Rs.)</th>
								<th>Attachments</th>
							</tr>
							<tbody>
								<tr id='addr120'>
									<td id="cres1">1</td>
									<td>
									<input type="text" name="tca[]" id="tca1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="text" name="acb[]" id="acb1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="date" name="dcc[]" id="dcc1" class="form-control"/>
									</td>
									<td>
									<input type="number" name="gcd[]" id="gcd1" class="form-control"/>
									</td>	
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="research3file1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="research3file1" name="research3file[]" value="" placeholder="">
												    <input type="hidden" name="research3filelocation[]" id="research3filelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="research3viewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>
								</tr>
			                    <tr id='addr121'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row10" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row10' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>10 Marks for more than 5 Lacs/8 marks for between 1 to 5 Lacs/6 marks for less than 1 Lacs as a principle investigator completed in the academic year.If second/third investigator then marks will be 5,4 and 3 respectively</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PI =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop1-cat3-cres" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop1-cat3-cres" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii10_self_a" type="number" min="0" max="20" value="<?php echo $cat3_piii10_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii10_hod_a" type="number" min="0" max="20" value="<?php echo $cat3_piii10_hod_a; ?>"></td>

												<?php
									      	}

									 
									      	
									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat3_piii10_committee_a" type="number" min="0" max="20" value="<?php echo $cat3_piii10_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									      
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii10_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii10_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic11">
							<thead>
								<th colspan="6">Patent/Intellectual property filed/received (Max.PI=25)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of patent/intellectual property</th>
								<th class="text-center">Date of received/filed</th>
								<th>Attachments</th>
							</tr>
							
							 
							<tbody>
								<tr id='addr130'>
									<td id="pip1">1</td>
									<td>
									<input type="text" name="dpi[]" id="dpi1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="date" name="drf[]" id="drf1" class="form-control"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="dfile1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="dfile1" name="dfile[]" value="" placeholder="">
												    <input type="hidden" name="dfilelocation[]" id="dfilelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="dviewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>
								</tr>
			                    <tr id='addr131'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row11" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row11' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>25 Marks each for patent/intellectual property received and 10 each for filed in the academic year</p>
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-4 offset-md-9">
					<label class="col-form-label"><b>PI =
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop1-cat3-d" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
					</b>
					</label>

						<!-- The modal -->
					<div class="modal fade" id="flipFlop1-cat3-d" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
									      <td><input class="form-control selfapp" id="cat3_piii11_self_a" type="number" min="0" max="25" value="<?php echo $cat3_piii11_self_a; ?>"></td>
									      <?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
												<td><input class="form-control hodapp" id="cat3_piii11_hod_a" type="number" min="0" max="25" value="<?php echo $cat3_piii11_hod_a; ?>"></td>

												<?php
									      	}

									 
									      	
									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat3_piii11_committee_a" type="number" min="0" max="25" value="<?php echo $cat3_piii11_committee_a; ?>"></td>
												<?php
									      	}

									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
									      
									    </tr>
									 </tbody>
									</table>
									<p id="partb_cat3_piii11_msg"></p>
								</div>
								<div class="modal-footer">
									<button type="button" id="partb_cat3_piii11_btn" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8"><br>


		<div class="row">
			<div class="col-md-12 text-center">
				<label><b>Publication, supervisor, guide, research, consultancy and intellectual properties</b></label>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<label class="col-form-label"><b>Category III: PI =   
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-t" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 175</b>
				</label>
			</div>
						<!-- The modal -->
			<div class="modal fade" id="flipFlop-cat3-t" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
							      <td><input class="form-control selfapp" id="cat3_piiitotal_self_a" type="number" min="0" max="175" value="<?php echo $cat3_piiitotal_self_a; ?>"></td>
							      <?php

							      	if($hod==1 || $committee==1)
							      	{
							      		?>
										<td><input class="form-control hodapp" id="cat3_piiitotal_hod_a" type="number" min="0" max="175" value="<?php echo $cat3_piiitotal_hod_a; ?>"></td>
										<?php
							      	}

							 
							      	
							      	if($committee==1)
							      	{
							      		?>
							      		<td><input class="form-control commapp" id="cat3_piiitotal_committee_a" type="number" min="0" max="175" value="<?php echo $cat3_piiitotal_committee_a; ?>"></td>
										<?php
							      	}

							      	?>
							      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

							    </tr>
							 </tbody>
							</table>
							<p id="partb_cat3_piiitotal_msg"></p>
						</div>
						<div class="modal-footer">
							<button type="button" id="partb_cat3_piiitotal_btn" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>   
		</div>	

	

		<a href="partB.php"><img src="img/next.png" style="height: 40px;width: 40px;margin-left: 807px">
		</a>

		</div>
		<br>
		<!-- <hr style="border: 0.5px solid #c8c8c8"> -->
		<div class="tab-pane fade" id="nav-cat4" role="tabpanel" aria-labelledby="nav-cat4-tab">
		<div class="row">
			<div class="col-md-12">
				<p class="cat-info"><b>Category IV: Curricular/Co-curricular/Administrative activities done outside college (Max. PI=75)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic12">
							<thead>
								<th colspan="5">Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college (Max.PI=30)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of Programme</th>
								<th class="text-center">Date</th>
								<th class="text-center">Organized by</th>
								<th>Attachments</th>
							</tr>
									 
							<tbody>
								<tr id='addr140'>
									<td id="sem1">1</td>
									<td>
									<input type="text" name="cativ_dp[]" id="cativ_dp1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="date" name="cativ_datee[]" id="cativ_datee1" class="form-control"/>
									</td>
									<td>
									<input type="text" name="cativ_o[]" id="cativ_o1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="cativ1file1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="cativ1file1" name="cativ1file[]" value="" placeholder="">
												    <input type="hidden" name="cativ1filelocation[]" id="cativ1filelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="cativ1viewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>
								</tr>
			                    <tr id='addr141'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row12" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row12' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>05 Marks for each at national level and 10 marks for international level abroad</p>
				</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-md-4 offset-md-9">
				<label class="col-form-label"><b>PI =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat4-1" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

					<!-- The modal -->
				<div class="modal fade" id="flipFlop-cat4-1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
								      		<td><input class="form-control selfapp" id="cat4_piv1_self_a" type="number" min="0" max="30" value="<?php echo $cat4_piv1_self_a; ?>"></td>
									      	<?php

									      	if($hod==1 || $committee==1)
									      	{
									      		?>
									      		<td><input class="form-control hodapp" id="cat4_piv1_hod_a" type="number" min="0" max="30" value="<?php echo $cat4_piv1_hod_a; ?>"></td>
												<?php
									      	}

									      	if($committee==1)
									      	{
									      		?>
									      		<td><input class="form-control commapp" id="cat4_piv1_committee_a" type="number" min="0" max="30" value="<?php echo $cat4_piv1_committee_a; ?>"></td>
												<?php
									      	}
									      	?>
									      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

								    	</tr>
							 		</tbody>
								</table>
								<p id="partb_cat4_piv1_msg"></p>
							</div>
							<div class="modal-footer">
								<button type="button" id="partb_cat4_piv1_btn" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br>

	

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic13">
							<thead>
								<th colspan="5">Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college (Max. PI=30)</th>
							</thead>

							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of Programme</th>
								<th class="text-center">Date</th>
								<th class="text-center">Organized by</th>
								<th>Attachments</th>
							</tr>
							
							 
							<tbody>
								<tr id='addr150'>
									<td id="inv1">1</td>
									<td>
									<input type="text" name="cativ1_dp[]" id="cativ1_dp1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="date" name="cativ1_datee[]" id="cativ1_datee1" class="form-control"/>
									</td>
									<td>
									<input type="text" name="cativ1_o[]" id="cativ1_o1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="cativ2file1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="cativ2file1" name="cativ2file[]" value="" placeholder="">
												    <input type="hidden" name="cativ2filelocation[]" id="cativ2filelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="cativ2viewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>
								</tr>
			                    <tr id='addr151'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row13" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row13' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>05 Marks for each at national level and 10 marks for international level abroad</p>
				</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col-md-4 offset-md-9">
				<label class="col-form-label"><b>PI =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat4-2" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

					<!-- The modal -->
				<div class="modal fade" id="flipFlop-cat4-2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
								      <td><input class="form-control selfapp" id="cat4_piv2_self_a" type="number" min="0" max="30" value="<?php echo $cat4_piv2_self_a; ?>"></td>
								      <?php

								      	if($hod==1 || $committee==1)
								      	{
								      		?>
								      		<td><input class="form-control hodapp" id="cat4_piv2_hod_a" type="number" min="0" max="30" value="<?php echo $cat4_piv2_hod_a; ?>"></td>
											<?php
								      	}

								      	if($committee==1)
								      	{
								      		?>
								      		<td><input class="form-control commapp" id="cat4_piv2_committee_a" type="number" min="0" max="30" value="<?php echo $cat4_piv2_committee_a; ?>"></td>
											<?php
								      	}
								      	
								      	?>
								      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
								    </tr>
								 </tbody>
								</table>
								<p id="partb_cat4_piv2_msg"></p>
							</div>
							<div class="modal-footer">
								<button type="button" id="partb_cat4_piv2_btn" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		
		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic14">
							<thead>
								<th colspan="5">Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned. (Max. PI=15)</th>
							</thead>
							
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details</th>
								<th class="text-center"></th>
								<th>Attachments</th>
							</tr>
							 
							<tbody>
								<tr id='addr160'>
									<td id="creds1">1</td>
									<td>
									<input type="text" name="cativ2_dp[]" id="cativ2_dp1" class="form-control" maxlength="200"/>
									</td>
									<td>
									<input type="text" name="cativ2[]" id="cativ21" class="form-control" maxlength="200"/>
									</td>
									<td>
									<div class="filepartb">
										<div class="row justify-content-center">
											<div class="col-3 offset-md-3" style="padding:0;margin:0">
												<div class="file-upload mx-auto" style="width:26px">
												    <label for="cativ3file1" style="cursor:pointer">
												        <img src="https://img.icons8.com/material/26/000000/attach.png">
												    </label>
												    <input type="file" class="dynamic-four" id="cativ3file1" name="cativ3file[]" value="" placeholder="">
												    <input type="hidden" name="cativ3filelocation[]" id="cativ3filelocation1" value="">
												</div>
											</div>
											<div class="col-md-3" style="padding:0;margin:0">
												<a href="viewfile.php?location=none" id="cativ3viewfile1" target="_blank">
													<img src="https://img.icons8.com/ios/24/000000/document.png">
												</a>										
											</div>
										</div>
									</div>
									</td>
								</tr>
			                    <tr id='addr161'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row14" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row14' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>05 Marks for international/national credentials/activity/contribution not mentioned in application</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 offset-md-9">
				<label class="col-form-label"><b>PI =
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat4-3" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				</b>
				</label>

					<!-- The modal -->
				<div class="modal fade" id="flipFlop-cat4-3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
								      <td><input class="form-control selfapp" id="cat4_piv3_self_a" type="number" min="0" max="15" value="<?php echo $cat4_piv3_self_a; ?>"></td>

								      <?php
								      if($hod==1 || $committee==1)
								      	{
								      		?>
								      		<td><input class="form-control hodapp" id="cat4_piv3_hod_a" type="number" min="0" max="15" value="<?php echo $cat4_piv3_hod_a; ?>"></td>

											<?php
								      	}

							      		if($committee==1)
								      	{
								      		?>
								      		<td><input class="form-control commapp" id="cat4_piv3_committee_a" type="number" min="0" max="15" value="<?php echo $cat4_piv3_committee_a; ?>"></td>

											<?php
								      	}

							      		?>
							      		<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
								    </tr>
								 </tbody>
								</table>
								<p id="partb_cat4_piv3_msg"></p>
							</div>
							<div class="modal-footer">
								<button type="button" id="partb_cat4_piv3_btn" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		<hr style="border: 0.5px solid #c8c8c8">

		<!-- <a href="partB.php"><img src="img/next.png" style="height: 40px;width: 40px;margin-left: 807px"></a><br><br><br> -->
		
		<div class="row">
			<div class="col-md-12 text-center">
				<label class="col-form-label"><b>Category IV: PI =   
						<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat4-4" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
				out of 75</b>
				</label>
			</div>
						<!-- The modal -->
			<div class="modal fade" id="flipFlop-cat4-4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
							      <td><input class="form-control selfapp" id="cat4_pivtotal_self_a" type="number" min="0" max="75" value="<?php echo $cat4_pivtotal_self_a; ?>"></td>
							      <?php

							      	if($hod==1 || $committee==1)
							      	{
							      		?>
							      		<td><input class="form-control hodapp" id="cat4_pivtotal_hod_a" type="number" min="0" max="75" value="<?php echo $cat4_pivtotal_hod_a; ?>"></td>
										<?php
							      	}

							      	if($committee==1)
							      	{
							      		?>
							      		<td><input class="form-control commapp" id="cat4_pivtotal_committee_a" type="number" min="0" max="75" value="<?php echo $cat4_pivtotal_committee_a; ?>"></td>
										<?php
							      	}
							      	?>
							      	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">

							    </tr>
							 </tbody>
							</table>
							<p id="partb_cat4_pivtotal_msg"></p>
						</div>
						<div class="modal-footer">
							<button type="button" id="partb_cat4_pivtotal_btn" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>   
		</div>	


		<a href="partB.php"><img src="img/next.png" style="height: 40px;width: 40px;margin-left: 807px">
		</a><br>

		
	</div>
</div>
</div>

	<?php

	if($same_user==1)
	{

		?>
	
		<div class="row form-inline justify-content-center">
			<div class="col se-btn">
				<?php
				if($submitted_for_review==false)
				{
				?>
				<button type="button" class="btn btn-success" id="part-b-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE 
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-b-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT 
				</button>
				<?php
				}
				?>

				<button type="button" class="btn btn-success" onclick="myFunction()" id="part-b-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>
			</div>
		</div>

		<?php

	}

	?> 


	</div>
	</div>
	</form>

	<input type="hidden" id="i" name="i" value="1" />
	<input type="hidden" id="j" name="j" value="1" />
	<input type="hidden" id="k" name="k" value="1" />
	<input type="hidden" id="l" name="l" value="1" />
	<input type="hidden" id="m" name="m" value="1" />
	<input type="hidden" id="n" name="n" value="1" />
	<input type="hidden" id="o" name="o" value="1" />
	<input type="hidden" id="p" name="p" value="1" />
	<input type="hidden" id="q" name="q" value="1" />
	<input type="hidden" id="r" name="r" value="1" />
	<input type="hidden" id="s" name="s" value="1" />
	<input type="hidden" id="t" name="t" value="1" />
	<input type="hidden" id="u" name="u" value="1" />
	<input type="hidden" id="v1" name="v1" value="1" />
	<input type="hidden" id="w" name="w" value="1" />
	<input type="hidden" id="x" name="x" value="1" />
	<input type="hidden" id="y" name="y" value="1" />
	<input type="hidden" id="z" name="z" value="1" />
	<input type="hidden" id="ppr" name="ppr" value="2" />
	<input type="hidden" id="ppric" name="ppric" value="2" />
	<input type="hidden" id="pprinc" name="pprinc" value="2" />
	<input type="hidden" id="pprbk" name="pprbk" value="2" />

	<script type="text/javascript">
    $(document).ready(function()
    {
      	// var i=1;

     	$("#add_row1").click(function(){
     		var i=parseInt(document.getElementById('i').value);
      		// alert("i="+i);
      		$('#addr1'+i).html('<td id="ctosrno'+(i+1)+'">'+(i+1)+'</td><td><input type="text" name="ctocourse[]" id="ctocourse'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="ctotyprlpt[]" id="ctotyprlpt'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="ctougpg[]" id="ctougpg'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="ctoclasssemester[]" id="ctoclasssemester'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctohrsweek[]" id="ctohrsweek'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctohrsengaged[]" id="ctohrsengaged'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctomaxhrs[]" id="ctomaxhrs'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctoc[]" id="ctoc'+(i+1)+'" class="form-control" maxlength="200" /></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ctofile'+(i+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ctofile'+(i+1)+'" name="ctofile[]" value="" placeholder=""><input type="hidden" name="ctofilelocation[]" id="ctofilelocation'+(i+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="ctoviewfile'+(i+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic1').append('<tr id="addr1'+(i+1)+'"></tr>');
      		$('#addr1'+i).after('<tr id="addr1'+(i+1)+'"></tr>');
      		i++; 
      		document.getElementById("i").value=i;
  		});
     	$("#delete_row1").click(function(){
     		var i=parseInt(document.getElementById('i').value);
    	 	if(i>1){
		 		$("#addr1"+(i-1)).html('');
		 		$("#addr1"+(i)).remove();
		 		i--;
				document.getElementById("i").value=i;
			}
		});
	});

    </script>


	<script type="text/javascript">
    $(document).ready(function()
    {
      	// var j=1;      
     	$("#add_row2").click(function(){
     		var j=parseInt(document.getElementById('j').value);
      		$('#addr2'+j).html('<td id="ctesrno'+(j+1)+'">'+(j+1)+'</td><td><input type="text" name="ctecourse[]" id="ctecourse'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="ctetyprlpt[]" id="ctetyprlpt'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="cteugpg[]" id="cteugpg'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="cteclasssemester[]" id="cteclasssemester'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctehrsweek[]" id="ctehrsweek'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctehrsengaged[]" id="ctehrsengaged'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctemaxhrs[]" id="ctemaxhrs'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctec[]" id="ctec'+(j+1)+'" class="form-control" maxlength="200"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ctefile'+(i+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ctefile'+(i+1)+'" name="ctefile[]" value="" placeholder=""><input type="hidden" name="ctefilelocation[]" id="ctefilelocation'+(i+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="cteviewfile'+(i+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic2').append('<tr id="addr2'+(j+1)+'"></tr>');
      		$('#addr2'+j).after('<tr id="addr2'+(j+1)+'"></tr>');
      		j++; 
      		document.getElementById("j").value=j;
  		});
     	$("#delete_row2").click(function(){
     		var j=parseInt(document.getElementById('j').value);
    	 	if(j>1){
		 		$("#addr2"+(j-1)).html('');
		 		$("#addr2"+(j)).remove();
		 		j--;
		 		document.getElementById("j").value=j;
			}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var k=1;
	    $("#add_row3").click(function(){
     		var k=parseInt(document.getElementById('k').value);
      		$('#addr3'+k).html('<td id="dar'+(k+1)+'">'+(k+1)+'</td><td><input type="text" name="dara[]" id="a'+(k+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="darb[]" id="b'+(k+1)+'" class="form-control" maxlength="200"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="darfile'+(k+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="darfile'+(k+1)+'" name="darfile[]" value="" placeholder=""><input type="hidden" name="darfilelocation[]" id="darfilelocation'+(k+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="darviewfile'+(k+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a>	</div></div></div></td>');

      		// $('#tab_logic3').append('<tr id="addr3'+(k+1)+'"></tr>');
       		$('#addr3'+k).after('<tr id="addr3'+(k+1)+'"></tr>');
      		k++; 
      		document.getElementById("k").value=k;
  		});
     	$("#delete_row3").click(function(){
     		var k=parseInt(document.getElementById('k').value);
    	 	if(k>1){
		 		$("#addr3"+(k-1)).html('');
		 		$("#addr3"+(k)).remove();
		 		k--;
		 		document.getElementById("k").value=k;
		 	}
		});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      	// var l=1;      
     	$("#add_row4").click(function(){
     		var l=parseInt(document.getElementById('l').value);
      		$('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><input type="text" name="ha[]" id="ha'+(l+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="hb[]" id="hb'+(l+1)+'" class="form-control" maxlength="200" /></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="hfile'+(l+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="hfile'+(l+1)+'" name="hfile[]" value="" placeholder=""><input type="hidden" name="hfilelocation[]" id="hfilelocation'+(l+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="hviewfile'+(l+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic4').append('<tr id="addr5'+(l+1)+'"></tr>');
      		$('#addr5'+l).after('<tr id="addr5'+(l+1)+'"></tr>');
      		l++; 
      		document.getElementById("l").value=l;
  		});
     	$("#delete_row4").click(function(){
     		var l=parseInt(document.getElementById('l').value);
    	 	if(l>1){
		 		$("#addr5"+(l-1)).html('');
		 		$("#addr5"+(l)).remove();
		 		l--;
		 		document.getElementById("l").value=l;
		 	}
		});
	});

    </script>


    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var m=1;      
     	$("#add_row5").click(function(){
     		var m=parseInt(document.getElementById('m').value);
      		$('#addr6'+m).html('<td id="actsr'+(m+1)+'">'+(m+1)+'</td><td><input type="text" name="ea[]" id="ea'+(m+1)+'" class="form-control"/></td><td><input type="text" name="eb[]" id="eb'+(m+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="efile'+(m+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="efile'+(m+1)+'" name="efile[]" value="" placeholder=""><input type="hidden" name="efilelocation[]" id="efilelocation'+(m+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="eviewfile'+(m+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic5').append('<tr id="addr6'+(m+1)+'"></tr>');
      		$('#addr6'+m).after('<tr id="addr6'+(m+1)+'"></tr>');
      		m++; 
      		document.getElementById("m").value=m;
  		});
     	$("#delete_row5").click(function(){
     		var m=parseInt(document.getElementById('m').value);
    	 	if(m>1){
		 		$("#addr6"+(m-1)).html('');
		 		$("#addr6"+(m)).remove();
		 		m--;
		 		document.getElementById("m").value=m;
		 	}
		});
	});

    </script>


    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var n=1;
      	$("#add_row6").click(function(){
     		var n=parseInt(document.getElementById('n').value);
      		$('#addr7'+n).html('<td id="exca'+(n+1)+'">'+(n+1)+'</td><td><input type="text" name="eca[]" id="eca'+(n+1)+'" class="form-control"/></td><td><input type="text" name="ecb[]" id="ecb'+(n+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ecfile'+(n+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ecfile'+(n+1)+'" name="ecfile[]" value="" placeholder=""><input type="hidden" name="ecfilelocation[]" id="ecfilelocation'+(n+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="ecviewfile'+(n+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic6').append('<tr id="addr7'+(n+1)+'"></tr>');
       		$('#addr7'+n).after('<tr id="addr7'+(n+1)+'"></tr>');
      		n++; 
      		document.getElementById("n").value=n;
  		});
     	$("#delete_row6").click(function(){
     		var n=parseInt(document.getElementById('n').value);
    	 	if(n>1){
		 		$("#addr7"+(n-1)).html('');
		 		$("#addr7"+(n)).remove();
		 		n--;
		 		document.getElementById("n").value=n;
		 	}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var o=1;     
     	$("#add_row7").click(function(){
     	 	var o=parseInt(document.getElementById('o').value);
      		$('#addr8'+o).html('<td id="csr'+(o+1)+'">'+(o+1)+'</td><td><input type="text" name="ca[]" id="ca'+(o+1)+'" class="form-control"/></td><td><input type="text" name="cb[]" id="cb'+(o+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cfile'+(o+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cfile'+(o+1)+'" name="cfile[]" value="" placeholder=""><input type="hidden" name="cfilelocation[]" id="cfilelocation'+(o+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="cviewfile'+(o+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic7').append('<tr id="addr8'+(o+1)+'"></tr>');
      		$('#addr8'+o).after('<tr id="addr8'+(o+1)+'"></tr>');
      		o++; 
      		document.getElementById("o").value=o;
  		});
     	$("#delete_row7").click(function(){
     		var o=parseInt(document.getElementById('o').value);
    	 	if(o>1){
		 		$("#addr8"+(o-1)).html('');
		 		$("#addr8"+(o)).remove();
		 		o--;
		 		document.getElementById("o").value=o;
		 	}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var p=1;      
     	$("#add_row8").click(function(){
     		var p=parseInt(document.getElementById('p').value);
      		$('#addr10'+p).html('<td id="res'+(p+1)+'">'+(p+1)+'</td><td><input type="text" name="ta[]" id="ta'+(p+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="ab[]" id="ab'+(p+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="dc[]" id="dc'+(p+1)+'" class="form-control"/></td><td><input type="number" name="gd[]" id="gd'+(p+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="research1file'+(p+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="research1file'+(p+1)+'" name="research1file[]" value="" placeholder=""><input type="hidden" name="research1filelocation[]" id="research1filelocation'+(p+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="research1viewfile'+(p+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td></tr>');

      		// $('#tab_logic8').append('<tr id="addr10'+(p+1)+'"></tr>');
      		$('#addr10'+p).after('<tr id="addr10'+(p+1)+'"></tr>');
      		p++; 
      		document.getElementById("p").value=p;
  		});
     	$("#delete_row8").click(function(){
     		var p=parseInt(document.getElementById('p').value);
    	 	if(p>1){
		 		$("#addr10"+(p-1)).html('');
		 		$("#addr10"+(p)).remove();
		 		p--;
		 		document.getElementById("p").value=p;
		 	}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var q=1;
     	$("#add_row9").click(function(){
     		var q=parseInt(document.getElementById('q').value);
      		$('#addr11'+q).html('<td id="ores'+(q+1)+'">'+(q+1)+'</td><td><input type="text" name="tta[]" id="tta'+(q+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="aab[]" id="aab'+(q+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="ddc[]" id="ddc'+(q+1)+'" class="form-control"/></td><td><input type="number" name="ggd[]" id="ggd'+(q+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="research2file'+(q+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="research2file'+(q+1)+'" name="research2file[]" value="" placeholder=""><input type="hidden" name="research2filelocation[]" id="research2filelocation'+(q+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="research2viewfile'+(q+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td></tr>');

      		// $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
      		$('#addr11'+q).after('<tr id="addr11'+(q+1)+'"></tr>');
      		q++; 
      		document.getElementById("q").value=q;
  		});
     	$("#delete_row9").click(function(){
     		var q=parseInt(document.getElementById('q').value);
    	 	if(q>1){
		 		$("#addr11"+(q-1)).html('');
		 		$("#addr11"+(q)).remove();
		 		q--;
		 		document.getElementById("q").value=q;
		 	}
		});
	});

    </script>


    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var r=1;      
     	$("#add_row10").click(function(){
     		var r=parseInt(document.getElementById('r').value);
      		$('#addr12'+r).html('<td id="cres'+(r+1)+'">'+(r+1)+'</td><td><input type="text" name="tca[]" id="tca'+(r+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="acb[]" id="acb'+(r+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="dcc[]" id="dcc'+(r+1)+'" class="form-control"/></td><td><input type="number" name="gcd[]" id="gcd'+(r+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="research2file'+(r+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="research2file'+(r+1)+'" name="research2file[]" value="" placeholder=""><input type="hidden" name="research2filelocation[]" id="research2filelocation'+(r+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="research2viewfile'+(r+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic10').append('<tr id="addr12'+(r+1)+'"></tr>');
      		$('#addr12'+r).after('<tr id="addr12'+(r+1)+'"></tr>');
      		r++; 
      		document.getElementById("r").value=r;
  		});
     	$("#delete_row10").click(function(){
     		var r=parseInt(document.getElementById('r').value);
    	 	if(r>1){
		 		$("#addr12"+(r-1)).html('');
		 		$("#addr12"+(r)).remove();
		 		r--;
		 		document.getElementById("r").value=r;
		 	}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var s=1;      	
     	$("#add_row11").click(function(){
     		var s=parseInt(document.getElementById('s').value);
      		$('#addr13'+s).html('<td id="pip'+(s+1)+'">'+(s+1)+'</td><td><input type="text" name="dpi[]" id="dpi'+(s+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="drf[]" id="drf'+(s+1)+'" class="form-control"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="dfile'+(s+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="dfile'+(s+1)+'" name="dfile[]" value="" placeholder=""><input type="hidden" name="dfilelocation[]" id="dfilelocation'+(s+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="dviewfile'+(s+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic11').append('<tr id="addr13'+(s+1)+'"></tr>');
      		$('#addr13'+s).after('<tr id="addr13'+(s+1)+'"></tr>');
      		s++; 
      		document.getElementById("s").value=s;
  		});
     	$("#delete_row11").click(function(){
     		var s=parseInt(document.getElementById('s').value);
    	 	if(s>1){
		 		$("#addr13"+(s-1)).html('');
		 		$("#addr13"+(s)).remove();
		 		s--;
		 		document.getElementById("s").value=s;
			}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var t=1;      
     	$("#add_row12").click(function(){
     		var t=parseInt(document.getElementById('t').value);
     		$('#addr14'+t).html('<td id="sem'+(t+1)+'">'+(t+1)+'</td><td><input type="text" name="cativ_dp[]" id="cativ_dp'+(t+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="cativ_datee[]" id="cativ_datee'+(t+1)+'" class="form-control"/></td><td><input type="text" name="cativ-o[]" id="cativ-o'+(t+1)+'" class="form-control" maxlength="200"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cativ1file'+(t+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cativ1file'+(t+1)+'" name="cativ1file[]" value="" placeholder=""><input type="hidden" name="cativ1filelocation[]" id="cativ1filelocation'+(t+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="cativ1viewfile'+(t+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic12').append('<tr id="addr14'+(t+1)+'"></tr>');
      		$('#addr14'+t).after('<tr id="addr14'+(t+1)+'"></tr>');
      		t++; 
      		document.getElementById("t").value=t;
  		});
     	$("#delete_row12").click(function(){
     		var t=parseInt(document.getElementById('t').value);
    	 	if(t>1){
		 		$("#addr14"+(t-1)).html('');
		 		$("#addr14"+(t)).remove();
		 		t--;
		 		document.getElementById("t").value=t;
		 	}
		});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      	// var u=1;      
     	$("#add_row13").click(function(){
     		var u=parseInt(document.getElementById('u').value);
      		$('#addr15'+u).html('<td id="inv'+(u+1)+'">'+(u+1)+'</td><td><input type="text" name="cativ1_dp[]" id="cativ1_dp'+(u+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="cativ1_datee[]" id="cativ1_datee'+(u+1)+'" class="form-control"/></td><td><input type="text" name="cativ1_o[]" id="cativ1_o'+(u+1)+'" class="form-control" maxlength="200"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cativ2file'+(u+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cativ2file'+(u+1)+'" name="cativ2file[]" value="" placeholder=""><input type="hidden" name="cativ2filelocation[]" id="cativ2filelocation'+(u+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="cativ2viewfile'+(u+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic13').append('<tr id="addr15'+(u+1)+'"></tr>');
      		$('#addr15'+u).after('<tr id="addr15'+(u+1)+'"></tr>');
      		u++; 
      		document.getElementById("u").value=u;
  		});
     	$("#delete_row13").click(function(){
     		var u=parseInt(document.getElementById('u').value);
    	 	if(u>1){
		 		$("#addr15"+(u-1)).html('');
		 		$("#addr15"+(u)).remove();
		 		u--;
		 		document.getElementById("u").value=u;
		 	}
		});
	});

    </script>


    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var v=1;      
     	$("#add_row14").click(function(){
     		var v=parseInt(document.getElementById('v1').value);
      		$('#addr16'+v).html('<td id="creds'+(v+1)+'">'+(v+1)+'</td><td><input type="text" name="cativ2_dp[]" id="cativ2_dp'+(v+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="cativ2[]" id="cativ2'+(v+1)+'" class="form-control" maxlength="200"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cativ3file'+(v+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cativ3file'+(v+1)+'" name="cativ3file[]" value="" placeholder=""><input type="hidden" name="cativ3filelocation[]" id="cativ3filelocation'+(v+1)+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="cativ3viewfile'+(v+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

      		// $('#tab_logic14').append('<tr id="addr16'+(v+1)+'"></tr>');
      		$('#addr16'+v).after('<tr id="addr16'+(v+1)+'"></tr>');
      		v++; 
      		document.getElementById("v1").value=v;
  		});
     	$("#delete_row14").click(function(){
     		var v=parseInt(document.getElementById('v1').value);
    	 	if(v>1){
		 		$("#addr16"+(v-1)).html('');
		 		$("#addr16"+(v)).remove();
		 		v--;
		 		document.getElementById("v1").value=v;
		 	}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var ppr=2;      
     	$("#add_row_ppr").click(function(){
     		var ppr=parseInt(document.getElementById('ppr').value);
     		// alert(ppr);
      		$('#ppr'+ppr).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers In Peer Reviewed Journals (Max. PI=100)</b></p></div></div<div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitle[]" id="pptitle'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of peer review Journals (not online journals)</label><input type="text" name="ppnpr[]" id="ppnpr'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbn[]" id="ppisbn'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppif[]" id="ppif'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><label>Whether you are main author</label></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+ppr+'">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppr+'">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppnca[]" id="ppnca'+ppr+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/>	</div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-10 text-left"><p>20 marks for peer review journal first author and 10 marks for second author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ppfile'+ppr+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ppfile'+ppr+'" name="ppfile[]" value="" placeholder=""><input type="hidden" name="ppfilelocation[]" id="ppfilelocation'+ppr+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="ppviewfile'+ppr+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

	      	// $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      	$('#ppr'+ppr).toggle();
	      	$('#br'+ppr).toggle();
	     	$('#ppr'+ppr).after('<br id="br'+(ppr+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppr'+(ppr+1)+'"></div>');
	      	ppr++; 
	      	document.getElementById("ppr").value=ppr;
  		});
     	$("#delete_row_ppr").click(function(){
     		var ppr=parseInt(document.getElementById('ppr').value);
     		// alert(ppr);
	    	if(ppr>2){
			 	$("#ppr"+(ppr-1)).html('');
			 	$('#ppr'+(ppr-1)).toggle();
			 	$("#br"+(ppr-1)).toggle();
			 	$("#ppr"+(ppr)).remove();
			 	$("#br"+(ppr)).remove();
			 	ppr--;
			 	document.getElementById("ppr").value=ppr;
			}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var ppric=2;      
     	$("#add_row_ppric").click(function(){
     		var ppric=parseInt(document.getElementById('ppric').value);
      		$('#ppric'+ppric).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference Abroad (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitleic[]" id="pptitleic"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held Abroad</label><input type="text" name="ppnpric[]" id="ppnpric"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbnic[]" id="ppisbnic"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppific[]" id="ppific"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+ppric+'ic">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppric+'ic">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppncaic[]" id="ppncaic"'+ppric+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-10 text-left"><p>15 marks for International conference for first author and 08 marks for second author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="pp1file'+ppric+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="pp1file'+ppric+'" name="pp1file[]" value="" placeholder=""><input type="hidden" name="pp1filelocation[]" id="pp1filelocation'+ppric+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="pp1viewfile'+ppric+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

		    // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
		    $('#ppric'+ppric).toggle();
		    $('#bric'+ppric).toggle();
		    $('#ppric'+ppric).after('<br id="bric'+(ppric+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppric'+(ppric+1)+'"></div>');
		    ppric++; 
		    document.getElementById("ppric").value=ppric;
  		});
     	$("#delete_row_ppric").click(function(){
     		var ppric=parseInt(document.getElementById('ppric').value);
	    	if(ppric>2){
			 	$("#ppric"+(ppric-1)).html('');
			 	$('#ppric'+(ppric-1)).toggle();
			 	$("#bric"+(ppric-1)).toggle();
			 	$("#ppric"+(ppric)).remove();
			 	$("#bric"+(ppric)).remove();
			 	ppric--;
			 	document.getElementById("ppric").value=ppric;
			}
		});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      	// var pprinc=2;      
     	$("#add_row_pprinc").click(function(){
     		var pprinc=parseInt(document.getElementById('pprinc').value);
      		$('#pprinc'+pprinc).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference in India (Max.PI=10)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitleinc[]" id="pptitleinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held in India</label><input type="text" name="ppnprinc[]" id="ppnprinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbnpinc[]" id="ppisbninc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppifinc[]" id="ppifinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+pprinc+'inc">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+pprinc+'inc">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncainc[]" id="ppncainc'+pprinc+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-10 text-left"> <p>10 marks for International conference for first author and 05 marks for second author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="pp2file'+pprinc+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="pp2file'+pprinc+'" name="pp2file[]" value="" placeholder=""><input type="hidden" name="pp2filelocation[]" id="pp2filelocation'+pprinc+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="pp2viewfile'+pprinc+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

	      	// $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      	$('#pprinc'+pprinc).toggle();
	      	$('#brinc'+pprinc).toggle();
	      	$('#pprinc'+pprinc).after('<br id="brinc'+(pprinc+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprinc'+(pprinc+1)+'"></div>');
	      	pprinc++; 
	      	document.getElementById("pprinc").value=pprinc;
  		});
     	$("#delete_row_pprinc").click(function(){
     		var pprinc=parseInt(document.getElementById('pprinc').value);
	    	if(pprinc>2){
			 	$("#pprinc"+(pprinc-1)).html('');
			 	$('#pprinc'+(pprinc-1)).toggle();
			 	$("#brinc"+(pprinc-1)).toggle();
			 	$("#pprinc"+(pprinc)).remove();
			 	$("#brinc"+(pprinc)).remove();
			 	pprinc--;
			 	document.getElementById("pprinc").value=pprinc;
			}
		});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	// var pprbk=2;      
     	$("#add_row_pprbk").click(function(){
     		var pprbk=parseInt(document.getElementById('pprbk').value);
      		$('#pprbk'+pprbk).html('<div class="row"> <div class="col-md-12 text-left"> <br><p style="text-align: center"><b>Books/Articles/Chapters published in Books (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Title with page no.</label> <input type="text" name="pptitlebk[]" id="pptitlebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Publisher</label><input type="text" name="ppnprbk[]" id="ppnprbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200/> </div></div></div><div class="row"> <div class="col-md-6 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">ISSN/ISBN No.</label> <input type="text" name="ppisbnbk[]" id="ppisbnbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-6 text-right"> <div class="form-inline my-2"> <label class="mr-sm-2">Date of Publication</label> <input type="date" name="ppdatebk[]" id="ppdatebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-5 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Impact factor</label> <input type="text" name="ppifbk[]" id="ppifbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-2 text-left"> <p>Whether you are main author</p></div><div class="col-md-3"> <div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline1'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input yesradio" value="Yes" checked> <label class="custom-control-label yes" for="customRadioInline1'+pprbk+'bk">Yes</label> </div><div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline2'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input noradio" value="No"> <label class="custom-control-label no" for="customRadioInline2'+pprbk+'bk">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncabk[]" id="ppncabk'+pprbk+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-10 text-left"> <p>15 marks for first author and 08 marks for co-author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="pp3file'+pprbk+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="pp3file'+pprbk+'" name="pp3file[]" value="" placeholder=""><input type="hidden" name="pp3filelocation[]" id="pp3filelocation'+pprbk+'" value=""></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="pp3viewfile'+pprbk+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

	      	// $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      	$('#pprbk'+pprbk).toggle();
	      	$('#brbk'+pprbk).toggle();
	      	$('#pprbk'+pprbk).after('<br id="brbk'+(pprbk+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprbk'+(pprbk+1)+'"></div>');
	      	pprbk++; 
	      	document.getElementById("pprbk").value=pprbk;
  		});
     	$("#delete_row_pprbk").click(function(){
     		var pprbk=parseInt(document.getElementById('pprbk').value);
	    	if(pprbk>2){
			 	$("#pprbk"+(pprbk-1)).html('');
			 	$('#pprbk'+(pprbk-1)).toggle();
			 	$("#brbk"+(pprbk-1)).toggle();
			 	$("#pprbk"+(pprbk)).remove();
			 	$("#brbk"+(pprbk)).remove();
			 	pprbk--;
			 	document.getElementById("pprbk").value=pprbk;
			}
		});
	});

    </script>

    <!-- DISABLING INPUT WHEREVER NECESSARY -->

	<?php

	if($same_user==0)
	{
		?>
		<!-- Disabling all forms for other viewers -->
		<script type="text/javascript">
			disableBinput();
		</script>
		<?php
	}

	?>

	<!-- GET DATA OF FORM -->

	<script type="text/javascript">
		getPartBData();
	</script>

    <script type="text/javascript">
	function myFunction() {
		$("#part-a-save-form").toggle();
		$("#part-a-edit-form").toggle();
		$("#part-a-print-form").toggle();
	  	window.print();

	  	$("#part-a-save-form").toggle();
		$("#part-a-edit-form").toggle();
		$("#part-a-print-form").toggle();
	}
	</script>

	<!-- DISABLING ALL INPUTS -->
	<script type="text/javascript">
		// $("#part-a-form :input").prop("disabled", true);//disabling all inputs
		// $(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also
		
	</script>


	<?php
	/*
	if($userId==$viewerId)
	{
		?>
		<script type="text/javascript">
			enableself();
		</script>
		<?php
	}
	if($hod==1)
	{
		?>
		<script type="text/javascript">
			enablehod();
		</script>
		<?php
	}
	if($committee==1)
	{
		?>
		<script type="text/javascript">
			enablecomm();
		</script>
		<?php
	}
	*/
	?>

</body>
</html>

<?php

}

?>


