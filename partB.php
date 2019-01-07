<?php

include 'top.php';

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>
    
	<div class="container partb">

		<header class="heading"><b>'Part B'</b></header><br>

		<nav>
		  <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active cat-tabs" id="nav-cat1-tab" data-toggle="tab" href="#nav-cat1" role="tab" aria-controls="nav-cat1" aria-selected="true">Category I</a>
		    <a class="nav-item nav-link cat-tabs" id="nav-cat2-tab" data-toggle="tab" href="#nav-cat2" role="tab" aria-controls="nav-cat2" aria-selected="false">Category II</a>
		    <a class="nav-item nav-link cat-tabs" id="nav-cat3-tab" data-toggle="tab" href="#nav-cat3" role="tab" aria-controls="nav-cat3" aria-selected="false">Category III</a>
		    <a class="nav-item nav-link cat-tabs" id="nav-cat4-tab" data-toggle="tab" href="#nav-cat4" role="tab" aria-controls="nav-cat4" aria-selected="false">Category IV</a>
		  </div>
		</nav>
		<br><br>
		<div class="tab-content" id="nav-tabContent">
		    <div class="tab-pane fade show active" id="nav-cat1" role="tabpanel" aria-labelledby="nav-cat1-tab">

		
		<div class="row">
			<div class="col-md-12">
				<p class="cat-info"><b>Category I: Teaching and Learning (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">
		
		<div class="row">
			<div class="col-md-12 text-left">
				<p>Courses Taught (Max. PI: 40)</p>
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
							<td>1</td>
							<td>
							<input type="text" name='course' class="form-control"/>
							</td>
							<td>
							<input type="text" name='typrlpt' class="form-control"/>
							</td>
							<td>
							<input type="text" name='ugpg' class="form-control"/>
							</td>
							<td>
							<input type="text" name='classsemester' class="form-control"/>
							</td>
							<td>
							<input type="text" name='hrsweek' class="form-control"/>
							</td>
							<td>
							<input type="text" name='hrsengaged' class="form-control"/>
							</td>
							<td>
							<input type="text" name='maxhrs' class="form-control"/>
							</td> 
							<td>
							<input type="text" name='c' class="form-control"/>
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
							<td>1</td>
							<td>
							<input type="text" name='course' class="form-control"/>
							</td>
							<td>
							<input type="text" name='typrlpt' class="form-control"/>
							</td>
							<td>
							<input type="text" name='ugpg' class="form-control"/>
							</td>
							<td>
							<input type="text" name='classsemester' class="form-control"/>
							</td>
							<td>
							<input type="text" name='hrsweek' class="form-control"/>
							</td>
							<td>
							<input type="text" name='hrsengaged' class="form-control"/>
							</td>
							<td>
							<input type="text" name='maxhrs' class="form-control"/>
							</td> 
							<td>
							<input type="text" name='c' class="form-control"/>
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
		</div><br><br><br><br>

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
				<p>Examination Duties Assigned and Performed (Max. PI: 40)</p>
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
								<input type="text" name='odpstest1' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oepstest1' class="form-control" maxlength="200" />
								</td>
							</tr>
		                    <tr id='addr11'>
		                    	<td>2</td>
								<td>Paper setting Test 2</td>
								<td>
								<input type="text" name='odpstest2' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oepstest2' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr12'>
		                    	<td>3</td>
								<td>Test 1 invigilation</td>
								<td>
								<input type="text" name='odtest1in' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest1in' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr13'>
		                    	<td>4</td>
								<td>Test 2 invigilation</td>
								<td>
								<input type="text" name='odtest2in' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest2in' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>5</td>
								<td>Test 1 paper assessment</td>
								<td>
								<input type="text" name='odtest1ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest1ass' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>6</td>
								<td>Test 2 paper assessment</td>
								<td>
								<input type="text" name='odtest2ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oetest2ass' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr15'>
		                    	<td>7</td>
								<td>ESE paper setting</td>
								<td>
								<input type="text" name='odeseps' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeeseps' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr16'>
		                    	<td>8</td>
								<td>ESE invigilation/Squad team member</td>
								<td>
								<input type="text" name='odesein' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeesein' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr18'>
		                    	<td>9</td>
								<td>ESE Theory paper assessment</td>
								<td>
								<input type="text" name='odeseth' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeeseth' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr19'>
		                    	<td>10</td>
								<td>ESE Practical/oral examination</td>
								<td>
								<input type="text" name='odesepo' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeesepo' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr20'>
		                    	<td>11</td>
								<td>ESE re-assessment</td>
								<td>
								<input type="text" name='odesere-ass' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeesere-ass' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr21'>
		                    	<td>12</td>
								<td>Proof reading</td>
								<td>
								<input type="text" name='odproofr' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeproofr' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr22'>
		                    	<td>13</td>
								<td>Open day</td>
								<td>
								<input type="text" name='odopenday' class="form-control" maxlength="200" />
								</td>
								<td>
								<input type="text" name='oeopenday' class="form-control" maxlength="200" />
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
								<input type="text" name='edpstest1' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eepstest1' class="form-control"/>
								</td>
							</tr>
		                    <tr id='addr11'>
		                    	<td>2</td>
								<td>Paper setting Test 2</td>
								<td>
								<input type="text" name='edpstest2' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eepstest2' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr12'>
		                    	<td>3</td>
								<td>Test 1 invigilation</td>
								<td>
								<input type="text" name='edtest1in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest1in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr13'>
		                    	<td>4</td>
								<td>Test 2 invigilation</td>
								<td>
								<input type="text" name='edtest2in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest2in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>5</td>
								<td>Test 1 paper assessment</td>
								<td>
								<input type="text" name='edtest1ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest1ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>6</td>
								<td>Test 2 paper assessment</td>
								<td>
								<input type="text" name='edtest2ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eetest2ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr15'>
		                    	<td>7</td>
								<td>ESE paper setting</td>
								<td>
								<input type="text" name='edeseps' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeeseps' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr16'>
		                    	<td>8</td>
								<td>ESE invigilation/Squad team member</td>
								<td>
								<input type="text" name='edesein' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeesein' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr18'>
		                    	<td>9</td>
								<td>ESE Theory paper assessment</td>
								<td>
								<input type="text" name='edeseth' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeeseth' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr19'>
		                    	<td>10</td>
								<td>ESE Practical/oral examination</td>
								<td>
								<input type="text" name='edesepo' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeesepo' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr20'>
		                    	<td>11</td>
								<td>ESE re-assessment</td>
								<td>
								<input type="text" name='edesere-ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeesere-ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr21'>
		                    	<td>12</td>
								<td>Proof reading</td>
								<td>
								<input type="text" name='edproofr' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeproofr' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr22'>
		                    	<td>13</td>
								<td>Open day</td>
								<td>
								<input type="text" name='edopenday' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeopenday' class="form-control"/>
								</td>
		                    </tr>
						</tbody>
					</table>
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
									<td>1</td>
									<td>
									<input type="text" name='a' class="form-control"/>
									</td>
									<td>
									<input type="text" name='b' class="form-control"/>
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
		</div><br><br><br>
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
								<input type="text" name='dpstest1' class="form-control" maxlength="200" />
								</td>
							</tr>
		                    <tr id='addr41'>
		                    	<td>2</td>
								<td>Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board</td>
								<td>
								<input type="text" name='dpstest2' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr42'>
		                    	<td>3</td>
								<td>Developing and imparting Remedial / Bridge Courses</td>
								<td>
								<input type="text" name='dtest1in' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr43'>
		                    	<td>4</td>
								<td>Developing and imparting soft skills / communication skills / personality / development courses / modules</td>
								<td>
								<input type="text" name='dtest2in' class="form-control" maxlength="200" />
								</td>
		                    </tr>
		                    <tr id='addr44'>
		                    	<td>5</td>
								<td>Developing and imparting specialized teaching-learning programmes in physical education, library; innovative compositions and creations in music, performing and visual arts and other tradition areas</td>
								<td>
								<input type="text" name='dtest1ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr45'>
		                    	<td>6</td>
								<td>Audit courses taken (given name/semester/term)</td>
								<td>
								<input type="text" name='dtest2ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr46'>
		                    	<td>7</td>
								<td>Other:</td>
								<td>
								<input type="text" name='deseps' class="form-control"/>
								</td>
		                    </tr>
		                </tbody>
					</table>
					</div>
				</div>
			</div>	
		</div>
		<div class="row form-inline justify-content-center">

			<div class="col se-btn">
				<button type="button" class="btn btn-success" id="part-a-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE FORM
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-a-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT FORM
				</button>
			</div>
		</div>
		</div>
		<br>
		<!-- <hr style="border: 0.5px solid #c8c8c8"><br> -->
		<div class="tab-pane fade show" id="nav-cat2" role="tabpanel" aria-labelledby="nav-cat2-tab">
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
							
							<!-- <col style="width: 40px;">
					     	<col style="width: 380px;">
					     	<col style="width: 40px;">
					     	<col style="width: 10px;">
					     	<col style="width: 10px;">
					     	<col style="width: 0px;">
					     	<col style="width: 40px;">
					     	<col style="width: 380px;">
					     	<col style="width: 40px;"> -->
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD/<br>Type of Activity</th>
								<th class="text-center"></th>
							</tr>
						
							 
							<tbody>
								<tr id='addr50'>
									<td>1</td>
									<td>
									<input type="text" name='ha' class="form-control"/>
									</td>
									<td>
									<input type="text" name='hb' class="form-control"/>
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
									<td>1</td>
									<td>
									<input type="text" name='ea' class="form-control"/>
									</td>
									<td>
									<input type="text" name='eb' class="form-control"/>
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
			</div>
		</div><br><br><br>
		

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
									<td>1</td>
									<td>
									<input type="text" name='eca' class="form-control"/>
									</td>
									<td>
									<input type="text" name='ecb' class="form-control"/>
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
			</div>		
		</div><br><br><br>
			

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic7">
							<thead>

							<!-- <col style="width: 40px;">
					     	<col style="width: 380px;">
					     	<col style="width: 40px;">
					     	<col style="width: 10px;">
					     	<col style="width: 10px;">
					     	<col style="width: 0px;">
					     	<col style="width: 40px;">
					     	<col style="width: 380px;">
					     	<col style="width: 40px;"> -->
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">College administration/organization member/committee member/NBA/NAAC of college: <br> Type of Activity</th>
								<th class="text-center"></th>
							</tr>
						</thead>
							 
							<tbody>
								<tr id='addr80'>
									<td>1</td>
									<td>
									<input type="text" name='ca' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cb' class="form-control"/>
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
			</div>
		</div><br><br>
		<div class="row form-inline justify-content-center">

			<div class="col se-btn">
				<button type="button" class="btn btn-success" id="part-a-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE FORM
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-a-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT FORM
				</button>
			</div>
		</div>
		</div>	
		<br>
		<!-- <hr style="border: 0.5px solid #c8c8c8"><br> -->
		<div class="tab-pane fade show" id="nav-cat3" role="tabpanel" aria-labelledby="nav-cat3-tab">
		<div class="row">
			<div class="col-md-12">
				<p class="cat-info"><b>Category III: Publication, research/thesis supervisor,project guide,research,consultancy and intellectual properties (Max.PI=175) Published Papers in peer reviewed Journals (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container" style="border: 1px solid #c8c8c8"><br>
			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name='pptitle' class="form-control my-0 my-sm-0"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of peer review Journals (not online journals)</label>
						<input type="text" name='ppnpr' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
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
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio">
					  <label class="custom-control-label yes" for="customRadioInline1">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio">
					  <label class="custom-control-label no" for="customRadioInline2">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name='ppnca' class="col-3 form-control my-0 my-sm-0"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name='ppnca' class="col-4 form-control my-0 my-sm-0"/>	
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>20 marks for peer review journal first author and 10 marks for second author</p>
				</div>
			</div>
		</div><br><br>

		<div class="container" style="border: 1px solid #c8c8c8"><br>
			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name='pptitle' class="form-control my-0 my-sm-0"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of peer review Journals (not online journals)</label>
						<input type="text" name='ppnpr' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
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
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio">
					  <label class="custom-control-label yes" for="customRadioInline1">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio">
					  <label class="custom-control-label no" for="customRadioInline2">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name='ppnca' class="col-3 form-control my-0 my-sm-0"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name='ppnca' class="col-4 form-control my-0 my-sm-0"/>	
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>20 marks for peer review journal first author and 10 marks for second author</p>
				</div>
			</div>
		</div><br><br>

	
		<div class="container" style="border: 1px solid #c8c8c8"><br>
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
		    			<input type="text" name='pptitle' class="form-control my-0 my-sm-0"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of International Conference held Abroad</label>
						<input type="text" name='ppnpr' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
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
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio">
					  <label class="custom-control-label yes" for="customRadioInline1">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio">
					  <label class="custom-control-label no" for="customRadioInline2">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name='ppnca' class="col-3 form-control my-0 my-sm-0"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name='ppnca' class="col-4 form-control my-0 my-sm-0"/>	
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>15 marks for International conference for first author and 08 marks for second author</p>
				</div>
			</div>
		</div><br><br>

		<div class="container" style="border: 1px solid #c8c8c8"><br>

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
		    			<input type="text" name='pptitle' class="form-control my-0 my-sm-0"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of International Conference held in India</label>
						<input type="text" name='ppnpr' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
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
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio">
					  <label class="custom-control-label yes" for="customRadioInline1">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio">
					  <label class="custom-control-label no" for="customRadioInline2">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name='ppnca' class="col-3 form-control my-0 my-sm-0"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name='ppnca' class="col-4 form-control my-0 my-sm-0"/>	
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>10 marks for International conference for first author and 05 marks for second author</p>
				</div>
			</div>
		</div><br><br>


		<div class="container" style="border: 1px solid #c8c8c8"><br>
			<div class="row">
				<div class="col-md-12 text-left">
		    		<div class="form-inline my-2">
		    			<label class="mr-sm-2">Title with page no.</label>
		    			<input type="text" name='pptitle' class="form-control my-0 my-sm-0"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Name of International Conference held in India</label>
						<input type="text" name='ppnpr' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
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
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio">
					  <label class="custom-control-label yes" for="customRadioInline1">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio">
					  <label class="custom-control-label no" for="customRadioInline2">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name='ppnca' class="col-3 form-control my-0 my-sm-0"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name='ppnca' class="col-4 form-control my-0 my-sm-0"/>	
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>10 marks for International conference for first author and 05 marks for second author</p>
				</div>
			</div>
		</div><br><br>

		<div class="container" style="border: 1px solid #c8c8c8"><br>
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
		    			<input type="text" name='pptitle' class="form-control my-0 my-sm-0"/>						
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Publisher</label>
						<!-- <input type="text" name='ppnpr' class="form-control my-0 my-sm-0"/> -->
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">ISSN/ISBN No.</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>					
				</div>

				<div class="col-md-6 text-right">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Date of Publication</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>						
				</div>
			</div>		
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">

				<div class="col-md-5 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">Impact factor</label>
						<input type="text" name='ppisbn' class="form-control my-0 my-sm-0"/>
					</div>						
				</div>

				<div class="col-md-2 text-left">
					<p>Whether you are main author</p>
				</div>
		    	<div class="col-md-3">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio">
					  <label class="custom-control-label yes" for="customRadioInline1">Yes</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio">
					  <label class="custom-control-label no" for="customRadioInline2">No</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-3 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">No. of co-author</label>
						<input type="text" name='ppnca' class="col-3 form-control my-0 my-sm-0"/>	
					</div>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-2 text-left">
					<div class="form-inline my-2">
						<label class="mr-sm-2">PI=</label>
						<input type="text" name='ppnca' class="col-4 form-control my-0 my-sm-0"/>	
					</div>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>15 marks for first author and 08 marks for co-author</p>
				</div>
			</div>
		</div><br>
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
	    	<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						<thead>
							<th colspan="5">Research/thesis supervisor and project guide (Max.PI=40)</th>
						</thead>
							<!-- <col style="width: 40px;">
					     	<col style="width: 380px;">
					     	<col style="width: 40px;">
					     	<col style="width: 10px;">
					     	<col style="width: 10px;">
					     	<col style="width: 0px;">
					     	<col style="width: 40px;">
					     	<col style="width: 380px;">
					     	<col style="width: 40px;"> -->
						     	
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
								<input type="number" name='phdne' class="form-control"/>
								</td>
								<td>
								<input type="number" name='phdts' class="form-control"/>
								</td>
								<td>
								<input type="number" name='phdda' class="form-control"/>
								</td>
								<td>
								<input type="number" name='phdpi' class="form-control"/>
								</td>
							</tr>
		                    <tr id='addr91'>
		                    	<td>M.Tech</td>
								<td>
								<input type="number" name='mtechne' class="form-control"/>
								</td>
								<td>
								<input type="number" name='mtechts' class="form-control"/>
								</td>
								<td>
								<input type="number" name='mtechda' class="form-control"/>
								</td>
								<td>
								<input type="number" name='mtechpi' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr92'>
		                    	<td>B.Tech</td>
								<td>
								<input type="number" name='btechne' class="form-control"/>
								</td>
								<td>
								<input type="number" name='btechts' class="form-control"/>
								</td>
								<td>
								<input type="number" name='btechda' class="form-control"/>
								</td>
								<td>
								<input type="number" name='btechpi' class="form-control"/>
								</td>
		                    </tr>
						</tbody>
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
								<th colspan="5">Research/project/consultancy proposals submitted in academic year 20__/2-__ but yet to get approval (Max. PI=15)</th>
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
									<td>1</td>
									<td>
									<input type="text" name='ta' class="form-control"/>
									</td>
									<td>
									<input type="text" name='ab' class="form-control"/>
									</td>
									<td>
									<input type="date" name='dc' class="form-control"/>
									</td>
									<td>
									<input type="number" name='gd' class="form-control"/>
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
		</div><br><br>


		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic9">
							<thead>
								<th colspan="5">Ongoing Research/project/consultancy proposals approved/initiated in academic year 20__/2-__ but yet to complete (Max. PI=15)</th>
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
									<td>1</td>
									<td>
									<input type="text" name='tta' class="form-control"/>
									</td>
									<td>
									<input type="text" name='aab' class="form-control"/>
									</td>
									<td>
									<input type="date" name='ddc' class="form-control"/>
									</td>
									<td>
									<input type="number" name='ggd' class="form-control"/>
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
		</div><br><br>


		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic10">
							<thead>
								<th colspan="5">Completed Research Project and Consultancies initiated in academic year 20__/2-__ but completed in academic year 20__/20__ (Max. PI=20) (Max. PI=20)</th>
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
									<td>1</td>
									<td>
									<input type="text" name='tca' class="form-control"/>
									</td>
									<td>
									<input type="text" name='acb' class="form-control"/>
									</td>
									<td>
									<input type="date" name='dcc' class="form-control"/>
									</td>
									<td>
									<input type="number" name='gcd' class="form-control"/>
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
									<td>1</td>
									<td>
									<input type="text" name='dpi' class="form-control"/>
									</td>
									<td>
									<input type="date" name='drf' class="form-control"/>
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
		</div><br>
		<div class="row form-inline justify-content-center">

			<div class="col se-btn">
				<button type="button" class="btn btn-success" id="part-a-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE FORM
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-a-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT FORM
				</button>
			</div>
		</div>
		</div>
		<br>
		<!-- <hr style="border: 0.5px solid #c8c8c8"> -->
		<div class="tab-pane fade show" id="nav-cat4" role="tabpanel" aria-labelledby="nav-cat4-tab">
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
									<td>1</td>
									<td>
									<input type="text" name='cativ-dp' class="form-control"/>
									</td>
									<td>
									<input type="date" name='cativ-datee' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cativ-o' class="form-control"/>
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
		</div><br><br><br>

	

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
									<td>1</td>
									<td>
									<input type="text" name='cativ1-dp' class="form-control"/>
									</td>
									<td>
									<input type="date" name='cativ1-datee' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cativ1-o' class="form-control"/>
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
		</div><br><br>
		
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
									<td>1</td>
									<td>
									<input type="text" name='cativ2-dp' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cativ2' class="form-control"/>
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
		</div><br><br>
		<div class="row form-inline justify-content-center">

			<div class="col se-btn">
				<button type="button" class="btn btn-success" id="part-a-save-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SAVE FORM
				</button>

				<button type="button" class="btn btn-primary mx-2" id="part-a-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT FORM
				</button>
			</div>
		</div>
	</div>
	</div>


		
	</div>





	<script type="text/javascript">
     $(document).ready(function()
    {
      var i=1;
     $("#add_row1").click(function(){
      $('#addr1'+i).html("<td>"+ (i+1) +"</td><td><input name='course"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='typrlpt"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='ugpg"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='classsemester"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='hrsweek"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='hrsengaged"+i+"' type='text' class='form-control input-md'  /> </td><td><input name='maxhrs"+i+"' type='text' class='form-control input-md'></td><td><input name='c"+i+"' type='text' class='form-control input-md'></td>");

      $('#tab_logic1').append('<tr id="addr1'+(i+1)+'"></tr>');
      i++; 
  	});
     $("#delete_row1").click(function(){
    	 if(i>1){
		 $("#addr1"+(i-1)).html('');
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
      $('#addr2'+j).html("<td>"+ (j+1) +"</td><td><input name='course"+j+"' type='text' class='form-control input-md'  /> </td><td><input name='typrlpt"+j+"' type='text' class='form-control input-md'  /> </td><td><input name='ugpg"+j+"' type='text' class='form-control input-md'  /> </td><td><input name='classsemester"+j+"' type='text' class='form-control input-md'  /> </td><td><input name='hrsweek"+j+"' type='text' class='form-control input-md'  /> </td><td><input name='hrsengaged"+j+"' type='text' class='form-control input-md'  /> </td><td><input name='maxhrs"+j+"' type='text' class='form-control input-md'></td><td><input name='c"+j+"' type='text' class='form-control input-md'></td>");

      $('#tab_logic2').append('<tr id="addr2'+(j+1)+'"></tr>');
      j++; 
  	});
     $("#delete_row2").click(function(){
    	 if(j>1){
		 $("#addr2"+(j-1)).html('');
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
      $('#addr3'+k).html("<td>"+ (k+1) +"</td><td><input name='a"+k+"' type='text' class='form-control input-md'  /> </td><td><input name='b"+k+"' type='text' class='form-control input-md'  />");

      $('#tab_logic3').append('<tr id="addr3'+(k+1)+'"></tr>');
      k++; 
  	});
     $("#delete_row3").click(function(){
    	 if(k>1){
		 $("#addr3"+(k-1)).html('');
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
      $('#addr5'+l).html("<td>"+ (l+1) +"</td><td><input name='ha"+l+"' type='text' class='form-control input-md'  /> </td><td><input name='hb"+l+"' type='text' class='form-control input-md'  />");

      $('#tab_logic4').append('<tr id="addr5'+(l+1)+'"></tr>');
      l++; 
  	});
     $("#delete_row4").click(function(){
    	 if(l>1){
		 $("#addr5"+(l-1)).html('');
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
      $('#addr6'+m).html("<td>"+ (m+1) +"</td><td><input name='ea"+m+"' type='text' class='form-control input-md'  /> </td><td><input name='eb"+m+"' type='text' class='form-control input-md'  />");

      $('#tab_logic5').append('<tr id="addr6'+(m+1)+'"></tr>');
      m++; 
  	});
     $("#delete_row5").click(function(){
    	 if(m>1){
		 $("#addr6"+(m-1)).html('');
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
      $('#addr7'+n).html("<td>"+ (n+1) +"</td><td><input name='eca"+n+"' type='text' class='form-control input-md'  /> </td><td><input name='ecb"+n+"' type='text' class='form-control input-md'  />");

      $('#tab_logic6').append('<tr id="addr7'+(n+1)+'"></tr>');
      n++; 
  	});
     $("#delete_row6").click(function(){
    	 if(n>1){
		 $("#addr7"+(n-1)).html('');
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
      $('#addr8'+o).html("<td>"+ (o+1) +"</td><td><input name='ca"+o+"' type='text' class='form-control input-md'  /> </td><td><input name='cb"+o+"' type='text' class='form-control input-md'  />");

      $('#tab_logic7').append('<tr id="addr8'+(o+1)+'"></tr>');
      o++; 
  	});
     $("#delete_row7").click(function(){
    	 if(o>1){
		 $("#addr8"+(o-1)).html('');
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
      $('#addr10'+p).html("<td>"+ (p+1) +"</td><td><input name='ta"+p+"' type='text' class='form-control input-md'  /> </td><td><input name='ab"+p+"' type='text' class='form-control input-md'  /> </td><td><input name='dc"+p+"' type='date' class='form-control input-md'  /> </td><td><input name='gd"+p+"' type='number' class='form-control input-md'  />");

      $('#tab_logic8').append('<tr id="addr10'+(p+1)+'"></tr>');
      p++; 
  	});
     $("#delete_row8").click(function(){
    	 if(p>1){
		 $("#addr10"+(p-1)).html('');
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
      $('#addr11'+q).html("<td>"+ (q+1) +"</td><td><input name='tta"+q+"' type='text' class='form-control input-md'  /> </td><td><input name='aab"+q+"' type='text' class='form-control input-md'  /> </td><td><input name='ddc"+q+"' type='date' class='form-control input-md'  /> </td><td><input name='ggd"+q+"' type='number' class='form-control input-md'  />");

      $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
      q++; 
  	});
     $("#delete_row9").click(function(){
    	 if(q>1){
		 $("#addr11"+(q-1)).html('');
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
      $('#addr12'+r).html("<td>"+ (r+1) +"</td><td><input name='tca"+r+"' type='text' class='form-control input-md'  /> </td><td><input name='acb"+r+"' type='text' class='form-control input-md'  /> </td><td><input name='dcc"+r+"' type='date' class='form-control input-md'  /> </td><td><input name='gcd"+r+"' type='number' class='form-control input-md'  />");

      $('#tab_logic10').append('<tr id="addr12'+(r+1)+'"></tr>');
      r++; 
  	});
     $("#delete_row10").click(function(){
    	 if(r>1){
		 $("#addr12"+(r-1)).html('');
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
      $('#addr13'+s).html("<td>"+ (s+1) +"</td><td><input name='dpi"+s+"' type='text' class='form-control input-md'  /> </td><td><input name='drf"+s+"' type='date' class='form-control input-md'  /> ");

      $('#tab_logic11').append('<tr id="addr13'+(s+1)+'"></tr>');
      s++; 
  	});
     $("#delete_row11").click(function(){
    	 if(s>1){
		 $("#addr13"+(s-1)).html('');
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
      $('#addr14'+t).html("<td>"+ (t+1) +"</td><td><input name='cativ-dp"+t+"' type='text' class='form-control input-md'  /> </td><td><input name='cativ-datee"+t+"' type='date' class='form-control input-md'  /> </td><td><input name='cativ-o"+t+"' type='text' class='form-control input-md'  />");

      $('#tab_logic12').append('<tr id="addr14'+(t+1)+'"></tr>');
      t++; 
  	});
     $("#delete_row12").click(function(){
    	 if(t>1){
		 $("#addr14"+(t-1)).html('');
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
      $('#addr15'+u).html("<td>"+ (u+1) +"</td><td><input name='cativ1-dp"+u+"' type='text' class='form-control input-md'  /> </td><td><input name='cativ1-datee"+u+"' type='date' class='form-control input-md'  /> </td><td><input name='cativ1-o"+u+"' type='text' class='form-control input-md'  />");

      $('#tab_logic13').append('<tr id="addr15'+(u+1)+'"></tr>');
      u++; 
  	});
     $("#delete_row13").click(function(){
    	 if(u>1){
		 $("#addr15"+(u-1)).html('');
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
      $('#addr16'+v).html("<td>"+ (v+1) +"</td><td><input name='cativ2-dp"+v+"' type='text' class='form-control input-md'  /> </td><td><input name='cativ2"+v+"' type='text' class='form-control input-md'  /> ");

      $('#tab_logic14').append('<tr id="addr16'+(v+1)+'"></tr>');
      v++; 
  	});
     $("#delete_row14").click(function(){
    	 if(v>1){
		 $("#addr16"+(v-1)).html('');
		 v--;
		 }
	});
	});

    </script>

</body>
</html>




