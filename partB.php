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
    
    <form method="POST" action="partBsys.php" class="part-b-form" id="part-b-form">
    <input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
    <input type="hidden" name="alreadybegun" id="alreadybegun" value="0">
	<div class="container partb">

		<header class="heading"><b>'Part B'</b></header><br>

		<nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-cat1-tab" data-toggle="tab" href="#nav-cat1" role="tab" aria-controls="nav-cat1" aria-selected="true">Category I</a>
			<a class="nav-item nav-link" id="nav-cat2-tab" data-toggle="tab" href="#nav-cat2" role="tab" aria-controls="nav-cat2" aria-selected="false">Category II</a>
			<a class="nav-item nav-link" id="nav-cat3-tab" data-toggle="tab" href="#nav-cat3" role="tab" aria-controls="nav-cat3" aria-selected="false">Category III</a>
            <a class="nav-item nav-link" id="nav-cat4-tab" data-toggle="tab" href="#nav-cat4" role="tab" aria-controls="nav-cat4" aria-selected="false">Category IV</a>
		  </div>
		</nav>
		
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
						<th colspan="9">ODD SEMESTER</th>
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
						<th colspan="9">EVEN SEMESTER</th>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_self_a" type="text"  min="0" max="40"></td>
									      <td><input class="form-control" id="pi_hod_a" type="text" min="0" max="40"></td>
									      <td><input class="form-control" id="pi_committee_a" type="text" min="0" max="40"></td>
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
							<th colspan="4">ODD SEMESTER</th>
						</thead>
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Type of Examination Duties</th>
								<th class="text-center">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
								<th class="text-center">Extent to which carried out (%) (Max.100%) (A)</th>
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
							<th colspan="4">EVEN SEMESTER</th>
						</thead>
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Type of Examination Duties</th>
								<th class="text-center">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
								<th class="text-center">Extent to which carried out (%) (Max.100%) (A)</th>
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
								      <th scope="col">H.O.D</th>
								      <th scope="col">Committee</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td><input class="form-control" id="pi2_self_a" type="text"></td>
								      <td><input class="form-control" id="pi2_hod_a" type="text"></td>
								      <td><input class="form-control" id="pi2_committee_a" type="text"></td>
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
			
		    
		</div>			

		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic3">
							<thead>
								<th colspan="3">Details of additional resource provided to the students to enrich course content/syllabus (Max. PI=10)</th>
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
							      <th scope="col">H.O.D</th>
							      <th scope="col">Committee</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td><input class="form-control" id="pi3_self_a" type="text"></td>
							      <td><input class="form-control" id="pi3_hod_a" type="text"></td>
							      <td><input class="form-control" id="pi3_committee_a" type="text"></td>
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
						</thead>
						
						<tbody>
							<tr id='addr40'>
								<td>1</td>
								<td>Problem based learning, case studies, group discussions, activity based learning etc.</td>
								<td>
								<input type="text" name='dpstest1' id='dpstest1' class="form-control" maxlength="200" />
								</td>
							</tr>
		                    <tr id='addr41'>
		                    	<td>2</td>
								<td>Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board</td>
								<td>
								<input type="text" name='dpstest2' id='dpstest2' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr42'>
		                    	<td>3</td>
								<td>Developing and imparting Remedial / Bridge Courses</td>
								<td>
								<input type="text" name='dtest1in' id='dtest1in' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr43'>
		                    	<td>4</td>
								<td>Developing and imparting soft skills / communication skills / personality / development courses / modules</td>
								<td>
								<input type="text" name='dtest2in' id='dtest2in' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr44'>
		                    	<td>5</td>
								<td>Developing and imparting specialized teaching-learning programmes in physical education, library; innovative compositions and creations in music, performing and visual arts and other tradition areas</td>
								<td>
								<input type="text" name='dtest1ass' id='dtest1ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr45'>
		                    	<td>6</td>
								<td>Audit courses taken (given name/semester/term)</td>
								<td>
								<input type="text" name='dtest2ass' id='dtest2ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr46'>
		                    	<td>7</td>
								<td>Other:</td>
								<td>
								<input type="text" name='deseps' id='deseps' class="form-control"/>
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
							      <th scope="col">H.O.D</th>
							      <th scope="col">Committee</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td><input class="form-control" id="pi4_self_a" type="text"></td>
							      <td><input class="form-control" id="pi4_hod_a" type="text"></td>
							      <td><input class="form-control" id="pi4_committee_a" type="text"></td>
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
							      <th scope="col">H.O.D</th>
							      <th scope="col">Committee</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td><input class="form-control" id="pi3_self_a" type="text"></td>
							      <td><input class="form-control" id="pi3_hod_a" type="text"></td>
							      <td><input class="form-control" id="pi3_committee_a" type="text"></td>
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
								<th colspan="3">Administrative Post</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD/<br>Type of Activity</th>
								<th class="text-center"></th>
							</tr>
						
							 
							<tbody>
								<tr id='addr50'>
									<td id='hasr1'>1</td>
									<td>
									<input type="text" name='ha[]' id='ha1' class="form-control" maxlength="200" />
									</td>
									<td>
									<input type="text" name='hb[]' id='hb2' class="form-control" maxlength="200" />
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
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat2-1" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pii1_self_a" type="text"></td>
									      <td><input class="form-control" id="pii1_hod_a" type="text"></td>
									      <td><input class="form-control" id="pii1_committee_a" type="text"></td>
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
				</div>
			</div>			
		</div><br><br>

		

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic5">
							<thead>
								<th colspan="3">Activities</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Extension, Co-Curricular and Field based activities / internships in college<br> Type of Activity</th>
								<th class="text-center"></th>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pii2_self_a" type="text"></td>
									      <td><input class="form-control" id="pii2_hod_a" type="text"></td>
									      <td><input class="form-control" id="pii2_committee_a" type="text"></td>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pii3_self_a" type="text"></td>
									      <td><input class="form-control" id="pii3_hod_a" type="text"></td>
									      <td><input class="form-control" id="pii3_committee_a" type="text"></td>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pii4_self_a" type="text"></td>
									      <td><input class="form-control" id="pii4_hod_a" type="text"></td>
									      <td><input class="form-control" id="pii4_committee_a" type="text"></td>
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
							      <th scope="col">H.O.D</th>
							      <th scope="col">Committee</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td><input class="form-control" id="pii3_total_self_a" type="text"></td>
							      <td><input class="form-control" id="pii3_total_hod_a" type="text"></td>
							      <td><input class="form-control" id="pii3_total_committee_a" type="text"></td>
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
				<div class="col-md-12 text-left">
					<p>20 marks for peer review journal first author and 10 marks for second author</p>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_self_a" type="text"  min="0" max="100"></td>
									      <td><input class="form-control" id="pi_hod_a" type="text" min="0" max="100"></td>
									      <td><input class="form-control" id="pi_committee_a" type="text" min="0" max="100"></td>
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
				<div class="col-md-12 text-left">
					<p>15 marks for International conference for first author and 08 marks for second author</p>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_self_a" type="text"  min="0" max="15"></td>
									      <td><input class="form-control" id="pi_hod_a" type="text" min="0" max="15"></td>
									      <td><input class="form-control" id="pi_committee_a" type="text" min="0" max="15"></td>
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
				<div class="col-md-12 text-left">
					<p>10 marks for International conference for first author and 05 marks for second author</p>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_self_a" type="text"  min="0" max="10"></td>
									      <td><input class="form-control" id="pi_hod_a" type="text" min="0" max="10"></td>
									      <td><input class="form-control" id="pi_committee_a" type="text" min="0" max="10"></td>
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
				<div class="col-md-12 text-left">
					<p>15 marks for first author and 08 marks for co-author</p>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_self_a" type="text"  min="0" max="15"></td>
									      <td><input class="form-control" id="pi_hod_a" type="text" min="0" max="15"></td>
									      <td><input class="form-control" id="pi_committee_a" type="text" min="0" max="15"></td>
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
		    </div>
		</div>





		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
	    	<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="5">Research/thesis supervisor and project guide (Max.PI=40)</th>
						</thead>
						     	
							<tr>
								<th class="text-center">Degree</th>
								<th class="text-center">Number Enrolled</th>
								<th class="text-center">Thesis submitted</th>
								<th class="text-center">No. of Degree Awarded</th>
								<th class="text-center">PI</th>
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
									<label class="col-form-label"><b><button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-phd" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button></b>
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
													      <th scope="col">H.O.D</th>
													      <th scope="col">Committee</th>
													    </tr>
													  </thead>
													  <tbody>
													    <tr>
													      <td><input class="form-control" id="research_self_a" type="text"></td>
													      <td><input class="form-control" id="research_hod_a" type="text"></td>
													      <td><input class="form-control" id="research_committee_a" type="text"></td>
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
									<label class="col-form-label"><b><button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-phd" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button></b>
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
													      <th scope="col">H.O.D</th>
													      <th scope="col">Committee</th>
													    </tr>
													  </thead>
													  <tbody>
													    <tr>
													      <td><input class="form-control" id="research_self_a" type="text"></td>
													      <td><input class="form-control" id="research_hod_a" type="text"></td>
													      <td><input class="form-control" id="research_committee_a" type="text"></td>
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
							<th colspan="5">10 marks awarded/8 marks for thesis submitted/6 marks for enrolled Ph.D students as a guide during academic year. 8 marks for awarded/6 marks for thesis submitted/4 marks for enrolled M.Tech students as guide during academic year. 6 marks for awarded/4 marks for thesis submitted/2 marks per enrolled B.Tech student groups as a guide during academic year. For co-guide the marks will be half.</th>
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
								<th colspan="5">Research/project/consultancy proposals submitted in academic year 20__/20__ but yet to get approval (Max. PI=15)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Title</th>
								<th class="text-center">Agency</th>
								<th class="text-center">Date of Submission</th>
								<th class="text-center">Grant/Amount Mobilized (Rs.)</th>
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
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-res" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_project_self_a" type="text"></td>
									      <td><input class="form-control" id="pi_project_hod_a" type="text"></td>
									      <td><input class="form-control" id="pi_project_committee_a" type="text"></td>
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
				</div>
			</div>		
		</div><br><br>








		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic9">
							<thead>
								<th colspan="5">Ongoing Research/project/consultancy proposals approved/initiated in academic year 20__/20__ but yet to complete (Max. PI=15)</th>
							</thead>
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Title</th>
								<th class="text-center">Agency</th>
								<th class="text-center">Period in years</th>
								<th class="text-center">Grant/Amount Mobilized (Rs.)</th>
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
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-ores" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_ongoing_self_a" type="text"></td>
									      <td><input class="form-control" id="pi_ongoing_hod_a" type="text"></td>
									      <td><input class="form-control" id="pi_ongoing_committee_a" type="text"></td>
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
				</div>
			</div>
		</div><br><br>


		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic10">
							<thead>
								<th colspan="5">Completed Research Project and Consultancies initiated in academic year 20__/20__ but completed in academic year 20__/20__ (Max. PI=20) (Max. PI=20)</th>
							</thead>
							
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Title</th>
								<th class="text-center">Agency</th>
								<th class="text-center">Date of Completion</th>
								<th class="text-center">Grant/Amount Mobilized (Rs.)</th>
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
							<button type="button" class="btn btn-primary btn-lg parta-self-btn" data-toggle="modal" data-target="#flipFlop-cat3-cres" title="Clicking this button will allow you to appraise this entry" style="height: 60px;width: 60px"><img src="img/appraisals.png" class="parta-self-img" style="height: 30px;width: 30px"></button>
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
									      <th scope="col">H.O.D</th>
									      <th scope="col">Committee</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><input class="form-control" id="pi_completed_self_a" type="text"></td>
									      <td><input class="form-control" id="pi_completed_hod_a" type="text"></td>
									      <td><input class="form-control" id="pi_completed_committee_a" type="text"></td>
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
				</div>
			</div>
		</div><br><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic11">
							<thead>
								<th colspan="5">Patent/Intellectual property filed/received (Max.PI=25)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of patent/intellectual property</th>
								<th class="text-center">Date of received/filed</th>
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
							      <th scope="col">H.O.D</th>
							      <th scope="col">Committee</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td><input class="form-control" id="cat3_self" type="text"></td>
							      <td><input class="form-control" id="cat3_hod" type="text"></td>
							      <td><input class="form-control" id="cat3_committee" type="text"></td>
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
								<th colspan="4">Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college (Max.PI=30)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of Programme</th>
								<th class="text-center">Date</th>
								<th class="text-center">Organized by</th>
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
								      <th scope="col">H.O.D</th>
								      <th scope="col">Committee</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td><input class="form-control" id="seminar_self_a" type="text"></td>
								      <td><input class="form-control" id="seminar_hod_a" type="text"></td>
								      <td><input class="form-control" id="seminar_committee_a" type="text"></td>
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
			</div>
		</div><br>

	

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic13">
							<thead>
								<th colspan="4">Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college (Max. PI=30)</th>
							</thead>

							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of Programme</th>
								<th class="text-center">Date</th>
								<th class="text-center">Organized by</th>
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
								      <th scope="col">H.O.D</th>
								      <th scope="col">Committee</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td><input class="form-control" id="cheifguest_self_a" type="text"></td>
								      <td><input class="form-control" id="cheifguest_hod_a" type="text"></td>
								      <td><input class="form-control" id="cheifguest_committee_a" type="text"></td>
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
			</div>
		</div><br>
		
		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic14">
							<thead>
								<th colspan="4">Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned. (Max. PI=15)</th>
							</thead>
							
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details</th>
								<th class="text-center"></th>
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
								      <th scope="col">H.O.D</th>
								      <th scope="col">Committee</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td><input class="form-control" id="please_self_a" type="text"></td>
								      <td><input class="form-control" id="please_hod_a" type="text"></td>
								      <td><input class="form-control" id="please_committee_a" type="text"></td>
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
							      <th scope="col">H.O.D</th>
							      <th scope="col">Committee</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td><input class="form-control" id="cat4_self" type="text"></td>
							      <td><input class="form-control" id="cat4_hod" type="text"></td>
							      <td><input class="form-control" id="cat4_committee" type="text"></td>
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
		</div>	


		<a href="partB.php"><img src="img/next.png" style="height: 40px;width: 40px;margin-left: 807px">
		</a><br>

		
	</div>

	<?php

	if($same_user==1)
	{

		?>
	
		<div class="row form-inline justify-content-center">
			<div class="col se-btn">
				<button type="button" class="btn btn-success" id="part-b-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE 
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-b-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT 
				</button>

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



	<script type="text/javascript">
     $(document).ready(function()
    {
      var i=1;
     $("#add_row1").click(function(){
      $('#addr1'+i).html('<td id="ctosrno'+(i+1)+'">'+(i+1)+'</td><td><input type="text" name="ctocourse[]" id="ctocourse'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="ctotyprlpt[]" id="ctotyprlpt'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="ctougpg[]" id="ctougpg'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="ctoclasssemester[]" id="ctoclasssemester'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctohrsweek[]" id="ctohrsweek'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctohrsengaged[]" id="ctohrsengaged'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctomaxhrs[]" id="ctomaxhrs'+(i+1)+'" class="form-control" maxlength="200" /></td><td><input type="number" name="ctoc[]" id="ctoc'+(i+1)+'" class="form-control" maxlength="200" /></td>');

      // $('#tab_logic1').append('<tr id="addr1'+(i+1)+'"></tr>');
      $('#addr1'+i).after('<tr id="addr1'+(i+1)+'"></tr>');
      i++; 
  	});
     $("#delete_row1").click(function(){
    	 if(i>1){
		 $("#addr1"+(i-1)).html('');
		 $("#addr1"+(i)).remove();
		 i--;
		 }
	});
	});

    </script>


	<script type="text/javascript">
     $(document).ready(function()
    {
      var j=1;
     $("#add_row2").click(function(){
      $('#addr2'+j).html('<td id="ctesrno'+(j+1)+'">'+(j+1)+'</td><td><input type="text" name="ctecourse[]" id="ctecourse'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="ctetyprlpt[]" id="ctetyprlpt'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="cteugpg[]" id="cteugpg'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="cteclasssemester[]" id="cteclasssemester'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctehrsweek[]" id="ctehrsweek'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctehrsengaged[]" id="ctehrsengaged'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctemaxhrs[]" id="ctemaxhrs'+(j+1)+'" class="form-control" maxlength="200"/></td><td><input type="number" name="ctec[]" id="ctec'+(j+1)+'" class="form-control" maxlength="200"/></td>');

      // $('#tab_logic2').append('<tr id="addr2'+(j+1)+'"></tr>');
      $('#addr2'+j).after('<tr id="addr2'+(j+1)+'"></tr>');
      j++; 
  	});
     $("#delete_row2").click(function(){
    	 if(j>1){
		 $("#addr2"+(j-1)).html('');
		 $("#addr2"+(j)).remove();
		 j--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var k=1;
     $("#add_row3").click(function(){
      $('#addr3'+k).html('<td id="dar'+(k+1)+'">'+(k+1)+'</td><td><input type="text" name="dara[]" id="a'+(k+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="darb[]" id="b'+(k+1)+'" class="form-control" maxlength="200"/></td>');

      // $('#tab_logic3').append('<tr id="addr3'+(k+1)+'"></tr>');
       $('#addr3'+k).after('<tr id="addr3'+(k+1)+'"></tr>');
      k++; 
  	});
     $("#delete_row3").click(function(){
    	 if(k>1){
		 $("#addr3"+(k-1)).html('');
		 $("#addr3"+(k)).remove();
		 k--;
		 }
	});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      var l=1;
     $("#add_row4").click(function(){
      $('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><input type="text" name="ha[]" id="ha'+(l+1)+'" class="form-control" maxlength="200" /></td><td><input type="text" name="hb[]" id="hb'+(l+1)+'" class="form-control" maxlength="200" /></td>');

      // $('#tab_logic4').append('<tr id="addr5'+(l+1)+'"></tr>');
      $('#addr5'+l).after('<tr id="addr5'+(l+1)+'"></tr>');
      l++; 
  	});
     $("#delete_row4").click(function(){
    	 if(l>1){
		 $("#addr5"+(l-1)).html('');
		 $("#addr5"+(l)).remove();
		 l--;
		 }
	});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      var m=1;
     $("#add_row5").click(function(){
      $('#addr6'+m).html('<td id="actsr'+(m+1)+'">'+(m+1)+'</td><td><input type="text" name="ea[]" id="ea'+(m+1)+'" class="form-control"/></td><td><input type="text" name="eb[]" id="eb'+(m+1)+'" class="form-control"/></td>');

      // $('#tab_logic5').append('<tr id="addr6'+(m+1)+'"></tr>');
      $('#addr6'+m).after('<tr id="addr6'+(m+1)+'"></tr>');
      m++; 
  	});
     $("#delete_row5").click(function(){
    	 if(m>1){
		 $("#addr6"+(m-1)).html('');
		 $("#addr6"+(m)).remove();
		 m--;
		 }
	});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      var n=1;
     $("#add_row6").click(function(){
      $('#addr7'+n).html('<td id="exca'+(n+1)+'">'+(n+1)+'</td><td><input type="text" name="eca[]" id="eca'+(n+1)+'" class="form-control"/></td><td><input type="text" name="ecb[]" id="ecb'+(n+1)+'" class="form-control"/></td>');

      // $('#tab_logic6').append('<tr id="addr7'+(n+1)+'"></tr>');
       $('#addr7'+n).after('<tr id="addr7'+(n+1)+'"></tr>');
      n++; 
  	});
     $("#delete_row6").click(function(){
    	 if(n>1){
		 $("#addr7"+(n-1)).html('');
		 $("#addr7"+(n)).remove();
		 n--;
		 }
	});
	});

    </script>

     <script type="text/javascript">
     $(document).ready(function()
    {
      var o=1;
     $("#add_row7").click(function(){
      $('#addr8'+o).html('<td id="csr'+(o+1)+'">'+(o+1)+'</td><td><input type="text" name="ca[]" id="ca'+(o+1)+'" class="form-control"/></td><td><input type="text" name="cb[]" id="cb'+(o+1)+'" class="form-control"/></td>');

      // $('#tab_logic7').append('<tr id="addr8'+(o+1)+'"></tr>');
      $('#addr8'+o).after('<tr id="addr8'+(o+1)+'"></tr>');
      o++; 
  	});
     $("#delete_row7").click(function(){
    	 if(o>1){
		 $("#addr8"+(o-1)).html('');
		 $("#addr8"+(o)).remove();
		 o--;
		 }
	});
	});

    </script>

     <script type="text/javascript">
     $(document).ready(function()
    {
      var p=1;
     $("#add_row8").click(function(){
      $('#addr10'+p).html('<td id="res'+(p+1)+'">'+(p+1)+'</td><td><input type="text" name="ta[]" id="ta'+(p+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="ab[]" id="ab'+(p+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="dc[]" id="dc'+(p+1)+'" class="form-control"/></td><td><input type="number" name="gd[]" id="gd'+(p+1)+'" class="form-control"/></td></tr>');

      // $('#tab_logic8').append('<tr id="addr10'+(p+1)+'"></tr>');
      $('#addr10'+p).after('<tr id="addr10'+(p+1)+'"></tr>');
      p++; 
  	});
     $("#delete_row8").click(function(){
    	 if(p>1){
		 $("#addr10"+(p-1)).html('');
		 $("#addr10"+(p)).remove();
		 p--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var q=1;
     $("#add_row9").click(function(){
      $('#addr11'+q).html('<td id="ores'+(q+1)+'">'+(q+1)+'</td><td><input type="text" name="tta[]" id="tta'+(q+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="aab[]" id="aab'+(q+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="ddc[]" id="ddc'+(q+1)+'" class="form-control"/></td><td><input type="number" name="ggd[]" id="ggd'+(q+1)+'" class="form-control"/></td></tr>');

      // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
      $('#addr11'+q).after('<tr id="addr11'+(q+1)+'"></tr>');
      q++; 
  	});
     $("#delete_row9").click(function(){
    	 if(q>1){
		 $("#addr11"+(q-1)).html('');
		 $("#addr11"+(q)).remove();
		 q--;
		 }
	});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      var r=1;
     $("#add_row10").click(function(){
      $('#addr12'+r).html('<td id="cres'+(r+1)+'">'+(r+1)+'</td><td><input type="text" name="tca[]" id="tca'+(r+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="acb[]" id="acb'+(r+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="dcc[]" id="dcc'+(r+1)+'" class="form-control"/></td><td><input type="number" name="gcd[]" id="gcd'+(r+1)+'" class="form-control"/></td>');

      // $('#tab_logic10').append('<tr id="addr12'+(r+1)+'"></tr>');
      $('#addr12'+r).after('<tr id="addr12'+(r+1)+'"></tr>');
      r++; 
  	});
     $("#delete_row10").click(function(){
    	 if(r>1){
		 $("#addr12"+(r-1)).html('');
		 $("#addr12"+(r)).remove();
		 r--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
      	var s=1;
     	$("#add_row11").click(function(){
      	$('#addr13'+s).html('<td id="pip'+(s+1)+'">'+(s+1)+'</td><td><input type="text" name="dpi[]" id="dpi'+(s+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="drf[]" id="drf'+(s+1)+'" class="form-control"/></td>');

      	// $('#tab_logic11').append('<tr id="addr13'+(s+1)+'"></tr>');
      	$('#addr13'+s).after('<tr id="addr13'+(s+1)+'"></tr>');
      	s++; 
  	});
     $("#delete_row11").click(function(){
    	 if(s>1){
		 $("#addr13"+(s-1)).html('');
		 $("#addr13"+(s)).remove();
		 s--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var t=1;
     $("#add_row12").click(function(){
      $('#addr14'+t).html('<td id="sem'+(t+1)+'">'+(t+1)+'</td><td><input type="text" name="cativ_dp[]" id="cativ_dp'+(t+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="cativ_datee[]" id="cativ_datee'+(t+1)+'" class="form-control"/></td><td><input type="text" name="cativ-o[]" id="cativ-o'+(t+1)+'" class="form-control" maxlength="200"/></td>');

      // $('#tab_logic12').append('<tr id="addr14'+(t+1)+'"></tr>');
      $('#addr14'+t).after('<tr id="addr14'+(t+1)+'"></tr>');
      t++; 
  	});
     $("#delete_row12").click(function(){
    	 if(t>1){
		 $("#addr14"+(t-1)).html('');
		 $("#addr14"+(t)).remove();
		 t--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var u=1;
     $("#add_row13").click(function(){
      $('#addr15'+u).html('<td id="inv'+(u+1)+'">'+(u+1)+'</td><td><input type="text" name="cativ1_dp[]" id="cativ1_dp'+(u+1)+'" class="form-control" maxlength="200"/></td><td><input type="date" name="cativ1_datee[]" id="cativ1_datee'+(u+1)+'" class="form-control"/></td><td><input type="text" name="cativ1_o[]" id="cativ1_o'+(u+1)+'" class="form-control" maxlength="200"/></td>');

      // $('#tab_logic13').append('<tr id="addr15'+(u+1)+'"></tr>');
      $('#addr15'+u).after('<tr id="addr15'+(u+1)+'"></tr>');
      u++; 
  	});
     $("#delete_row13").click(function(){
    	 if(u>1){
		 $("#addr15"+(u-1)).html('');
		 $("#addr15"+(u)).remove();
		 u--;
		 }
	});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      var v=1;
     $("#add_row14").click(function(){
      $('#addr16'+v).html('<td id="creds'+(v+1)+'">'+(v+1)+'</td><td><input type="text" name="cativ2_dp[]" id="cativ2_dp'+(v+1)+'" class="form-control" maxlength="200"/></td><td><input type="text" name="cativ2[]" id="cativ2'+(v+1)+'" class="form-control" maxlength="200"/></td>');

      // $('#tab_logic14').append('<tr id="addr16'+(v+1)+'"></tr>');
      $('#addr16'+v).after('<tr id="addr16'+(v+1)+'"></tr>');
      v++; 
  	});
     $("#delete_row14").click(function(){
    	 if(v>1){
		 $("#addr16"+(v-1)).html('');
		 $("#addr16"+(v)).remove();
		 v--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var ppr=2;
     $("#add_row_ppr").click(function(){
      $('#ppr'+ppr).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers In Peer Reviewed Journals (Max. PI=100)</b></p></div></div<div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitle[]" id="pptitle'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of peer review Journals (not online journals)</label><input type="text" name="ppnpr[]" id="ppnpr'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbn[]" id="ppisbn'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppif[]" id="ppif'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><label>Whether you are main author</label></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+ppr+'">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppr+'">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppnca[]" id="ppnca'+ppr+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/>	</div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><p>20 marks for peer review journal first author and 10 marks for second author</p></div></div>');

	      // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      $('#ppr'+ppr).toggle();
	      $('#br'+ppr).toggle();
	      $('#ppr'+ppr).after('<br id="br'+(ppr+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppr'+(ppr+1)+'"></div>');
	      ppr++; 
  	});
     $("#delete_row_ppr").click(function(){
    	if(ppr>2){
		 	$("#ppr"+(ppr-1)).html('');
		 	$('#ppr'+(ppr-1)).toggle();
		 	$("#br"+(ppr-1)).toggle();
		 	$("#ppr"+(ppr)).remove();
		 	$("#br"+(ppr)).remove();
		 	ppr--;
		}
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var ppric=2;
     $("#add_row_ppric").click(function(){
      $('#ppric'+ppric).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference Abroad (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitleic[]" id="pptitleic"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held Abroad</label><input type="text" name="ppnpric[]" id="ppnpric"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbnic[]" id="ppisbnic"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppific[]" id="ppific"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+ppric+'ic">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppric+'ic">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppncaic[]" id="ppncaic"'+ppric+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><p>15 marks for International conference for first author and 08 marks for second author</p></div></div>');

	      // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      $('#ppric'+ppric).toggle();
	      $('#bric'+ppric).toggle();
	      $('#ppric'+ppric).after('<br id="bric'+(ppric+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppric'+(ppric+1)+'"></div>');
	      ppric++; 
  	});
     $("#delete_row_ppric").click(function(){
    	if(ppric>2){
		 	$("#ppric"+(ppric-1)).html('');
		 	$('#ppric'+(ppric-1)).toggle();
		 	$("#bric"+(ppric-1)).toggle();
		 	$("#ppric"+(ppric)).remove();
		 	$("#bric"+(ppric)).remove();
		 	ppric--;
		}
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var pprinc=2;
     $("#add_row_pprinc").click(function(){
      $('#pprinc'+pprinc).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference in India (Max.PI=10)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitleinc[]" id="pptitleinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held in India</label><input type="text" name="ppnprinc[]" id="ppnprinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbnpinc[]" id="ppisbninc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppifinc[]" id="ppifinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+pprinc+'inc">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+pprinc+'inc">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncainc[]" id="ppncainc'+pprinc+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <p>10 marks for International conference for first author and 05 marks for second author</p></div></div>');

	      // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      $('#pprinc'+pprinc).toggle();
	      $('#brinc'+pprinc).toggle();
	      $('#pprinc'+pprinc).after('<br id="brinc'+(pprinc+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprinc'+(pprinc+1)+'"></div>');
	      pprinc++; 
  	});
     $("#delete_row_pprinc").click(function(){
    	if(pprinc>2){
		 	$("#pprinc"+(pprinc-1)).html('');
		 	$('#pprinc'+(pprinc-1)).toggle();
		 	$("#brinc"+(pprinc-1)).toggle();
		 	$("#pprinc"+(pprinc)).remove();
		 	$("#brinc"+(pprinc)).remove();
		 	pprinc--;
		}
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var pprbk=2;
     $("#add_row_pprbk").click(function(){
      $('#pprbk'+pprbk).html('<div class="row"> <div class="col-md-12 text-left"> <br><p style="text-align: center"><b>Books/Articles/Chapters published in Books (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Title with page no.</label> <input type="text" name="pptitlebk[]" id="pptitlebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Publisher</label><input type="text" name="ppnprbk[]" id="ppnprbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200/> </div></div></div><div class="row"> <div class="col-md-6 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">ISSN/ISBN No.</label> <input type="text" name="ppisbnbk[]" id="ppisbnbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-6 text-right"> <div class="form-inline my-2"> <label class="mr-sm-2">Date of Publication</label> <input type="date" name="ppdatebk[]" id="ppdatebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-5 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Impact factor</label> <input type="text" name="ppifbk[]" id="ppifbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-2 text-left"> <p>Whether you are main author</p></div><div class="col-md-3"> <div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline1'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input yesradio" value="Yes" checked> <label class="custom-control-label yes" for="customRadioInline1'+pprbk+'bk">Yes</label> </div><div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline2'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input noradio" value="No"> <label class="custom-control-label no" for="customRadioInline2'+pprbk+'bk">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncabk[]" id="ppncabk'+pprbk+'" class="col-3 form-control my-0 my-sm-0" maxlength="200"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <p>15 marks for first author and 08 marks for co-author</p></div></div>'
      	);

	      // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
	      $('#pprbk'+pprbk).toggle();
	      $('#brbk'+pprbk).toggle();
	      $('#pprbk'+pprbk).after('<br id="brbk'+(pprbk+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprbk'+(pprbk+1)+'"></div>');
	      pprbk++; 
  	});
     $("#delete_row_pprbk").click(function(){
    	if(pprbk>2){
		 	$("#pprbk"+(pprbk-1)).html('');
		 	$('#pprbk'+(pprbk-1)).toggle();
		 	$("#brbk"+(pprbk-1)).toggle();
		 	$("#pprbk"+(pprbk)).remove();
		 	$("#brbk"+(pprbk)).remove();
		 	pprbk--;
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

</body>
</html>

<?php

}

?>



