<?php

include 'top.php';

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>
    
	<div class="container partb">
		<header class="heading"><b>'Part B'</b></header><br>
		<div class="row">
			<div class="col-md-12">
				<p><b>Category I: Teaching and Learning (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">
		
		<div class="row">
			<div class="col-md-12 text-left">
				<p>Courses Taught (Max. PI: 40)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<p>ODD SEMESTER</p>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="admin-table">
				<table class="table table-bordered table-hover" id="tab_logic1">
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
							<th class="text-center">Course</th>
							<th class="text-center">Type L/P/T</th>
							<th class="text-center">UG/PG</th>
							<th class="text-center">Class/Semester</th>
							<th class="text-center">Hrs./Week</th>
							<th class="text-center">Total no. of Hours engagaed(A)</th>
							<th class="text-center">*Max. Hrs.(B)</th>
							<th class="text-center">C=(A/B)*100</th>
						</tr>
					</thead>
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

		<div class="row">
			<div class="col-md-12">
				<p>EVEN SEMESTER</p>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="admin-table">
				<table class="table table-bordered table-hover" id="tab_logic2">
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
							<th class="text-center">Course</th>
							<th class="text-center">Type L/P/T</th>
							<th class="text-center">UG/PG</th>
							<th class="text-center">Class/Semester</th>
							<th class="text-center">Hrs./Week</th>
							<th class="text-center">Total no. of Hours engagaed(A)</th>
							<th class="text-center">*Max. Hrs.(B)</th>
							<th class="text-center">C=(A/B)*100</th>
						</tr>
					</thead>
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
					<p style="font-size: 18px">Classes Taken (Max.40for 90%-100% performance, and proportionate score upto 75% performance below which no score may be given. If (AVC)*100 is 90%-100% then PI 1=40, If (AVC)*100>75% then PI 1=((AVC)*40), If (AVC)*100 < 75 then PI 1=0)</p>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">
		<div class="row">
			<div class="col-md-12 text-left">
				<p>Examination Duties Assigned and Performed (Max. PI: 40)</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<p>ODD SEMESTER</p>
			</div>
		</div>

		<div class="container">
	    	<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
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
								<th class="text-center">Type of Examination Duties</th>
								<th class="text-center">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
								<th class="text-center">Extent to which carried out (%) (Max.100%) (A)</th>
							</tr>
						</thead>
						<tbody>
							<tr id='addr10'>
								<td>1</td>
								<td>Paper setting Test 1</td>
								<td>
								<input type="text" name='dpstest1' class="form-control"/>
								</td>
								<td>
								<input type="text" name='epstest1' class="form-control"/>
								</td>
							</tr>
		                    <tr id='addr11'>
		                    	<td>2</td>
								<td>Paper setting Test 2</td>
								<td>
								<input type="text" name='dpstest1' class="form-control"/>
								</td>
								<td>
								<input type="text" name='epstest2' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr12'>
		                    	<td>3</td>
								<td>Test 1 invigilation</td>
								<td>
								<input type="text" name='dtest1in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest1in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr13'>
		                    	<td>4</td>
								<td>Test 2 invigilation</td>
								<td>
								<input type="text" name='dtest2in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest2in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>5</td>
								<td>Test 1 paper assessment</td>
								<td>
								<input type="text" name='dtest1ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest1ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>6</td>
								<td>Test 2 paper assessment</td>
								<td>
								<input type="text" name='dtest2ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest2ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr15'>
		                    	<td>7</td>
								<td>ESE paper setting</td>
								<td>
								<input type="text" name='deseps' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeseps' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr16'>
		                    	<td>8</td>
								<td>ESE invigilation/Squad team member</td>
								<td>
								<input type="text" name='desein' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eesein' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr18'>
		                    	<td>9</td>
								<td>ESE Theory paper assessment</td>
								<td>
								<input type="text" name='deseth' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeseth' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr19'>
		                    	<td>10</td>
								<td>ESE Practical/oral examination</td>
								<td>
								<input type="text" name='desepo' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eesepo' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr20'>
		                    	<td>11</td>
								<td>ESE re-assessment</td>
								<td>
								<input type="text" name='desere-ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eesere-ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr21'>
		                    	<td>12</td>
								<td>Proof reading</td>
								<td>
								<input type="text" name='dproofr' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eproofr' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr22'>
		                    	<td>13</td>
								<td>Open day</td>
								<td>
								<input type="text" name='dopenday' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eopenday' class="form-control"/>
								</td>
		                    </tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<p>EVEN SEMESTER</p>
			</div>
		</div>

		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
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
								<th class="text-center">Type of Examination Duties</th>
								<th class="text-center">Description of Duties Assigned(If duties not assigned then not to be taken into account)</th>
								<th class="text-center">Extent to which carried out (%) (Max.100%) (A)</th>
							</tr>
						</thead>
						<tbody>
							<tr id='addr10'>
								<td>1</td>
								<td>Paper setting Test 1</td>
								<td>
								<input type="text" name='dpstest1' class="form-control"/>
								</td>
								<td>
								<input type="text" name='epstest1' class="form-control"/>
								</td>
							</tr>
		                    <tr id='addr11'>
		                    	<td>2</td>
								<td>Paper setting Test 2</td>
								<td>
								<input type="text" name='dpstest1' class="form-control"/>
								</td>
								<td>
								<input type="text" name='epstest2' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr12'>
		                    	<td>3</td>
								<td>Test 1 invigilation</td>
								<td>
								<input type="text" name='dtest1in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest1in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr13'>
		                    	<td>4</td>
								<td>Test 2 invigilation</td>
								<td>
								<input type="text" name='dtest2in' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest2in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>5</td>
								<td>Test 1 paper assessment</td>
								<td>
								<input type="text" name='dtest1ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest1ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr14'>
		                    	<td>6</td>
								<td>Test 2 paper assessment</td>
								<td>
								<input type="text" name='dtest2ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='etest2ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr15'>
		                    	<td>7</td>
								<td>ESE paper setting</td>
								<td>
								<input type="text" name='deseps' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeseps' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr16'>
		                    	<td>8</td>
								<td>ESE invigilation/Squad team member</td>
								<td>
								<input type="text" name='desein' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eesein' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr18'>
		                    	<td>9</td>
								<td>ESE Theory paper assessment</td>
								<td>
								<input type="text" name='deseth' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eeseth' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr19'>
		                    	<td>10</td>
								<td>ESE Practical/oral examination</td>
								<td>
								<input type="text" name='desepo' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eesepo' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr20'>
		                    	<td>11</td>
								<td>ESE re-assessment</td>
								<td>
								<input type="text" name='desere-ass' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eesere-ass' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr21'>
		                    	<td>12</td>
								<td>Proof reading</td>
								<td>
								<input type="text" name='dproofr' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eproofr' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr22'>
		                    	<td>13</td>
								<td>Open day</td>
								<td>
								<input type="text" name='dopenday' class="form-control"/>
								</td>
								<td>
								<input type="text" name='eopenday' class="form-control"/>
								</td>
		                    </tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>	
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row">
			<div class="col-md-12 text-left">
				<p>Details of additional resource provided to the students to enrich course content/syllabus (Max. PI=10)</p>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic3">
							

								<!-- <col style="width: 40px;">
						     	<col style="width: 380px;">
						     	<col style="width: 40px;">
						     	<col style="width: 10px;">
						     	<col style="width: 10px;">
						     	<col style="width: 0px;">
						     	<col style="width: 40px;">
						     	<col style="width: 380px;">
						     	<col style="width: 40px;"> -->
							 
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
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row">
			<div class="col-md-12 text-left">
				<p>Use of Participatory and innovative Teaching-Learning Methodologies (Max. PI=10)</p>
			</div>
		</div>

		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column text-left">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab_logic1">
						
						<tbody>
							<tr id='addr40'>
								<td>1</td>
								<td>Problem based learning, case studies, group discussions, activity based learning etc.</td>
								<td>
								<input type="text" name='dpstest1' class="form-control"/>
								</td>
							</tr>
		                    <tr id='addr41'>
		                    	<td>2</td>
								<td>Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board</td>
								<td>
								<input type="text" name='dpstest1' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr42'>
		                    	<td>3</td>
								<td>Developing and imparting Remedial / Bridge Courses</td>
								<td>
								<input type="text" name='dtest1in' class="form-control"/>
								</td>
		                    </tr>
		                    <tr id='addr43'>
		                    	<td>4</td>
								<td>Developing and imparting soft skills / communication skills / personality / development courses / modules</td>
								<td>
								<input type="text" name='dtest2in' class="form-control"/>
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
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="row">
			<div class="col-md-12">
				<p><b>Category II: Co-curricular and administrative activities done in college (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="row">
			<div class="col-md-12 text-left">
				<p>Administrative Post</p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic4">
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
								<th class="text-center">Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD/<br>Type of Activity</th>
								<th class="text-center"></th>
							</tr>
						</thead>
							 
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
		</div><br><br><br>
			<div class="row">
			<div class="col-md-12 text-left">
				<p>For HOD/Dean/Vice Principal 40 PI and for Associate HOD/NBA and NAAC co-ordinator/IQAC co-ordinator/Purchase Committee member 20 PI</p>
			</div>
		</div><br>

		<div class="row">
			<div class="col-md-12 text-left">
				<p>Activities</p>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic5">
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
								<th class="text-center">Extension, Co-Curricular and Field based activities / internships in college<br> Type of Activity</th>
								<th class="text-center"></th>
							</tr>
						</thead>
							 
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
		</div><br><br><br>
			<div class="row">
			<div class="col-md-12 text-left">
				<p>5 Marks for each compliance. Max.20</p>
			</div>
		</div>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic6">
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
		</div><br><br><br>
			<div class="row">
			<div class="col-md-12 text-left">
				<p>5 Marks for each compliance. Max.20</p>
			</div>
		</div>

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
		</div><br><br><br>
			<div class="row">
			<div class="col-md-12 text-left">
				<p>5 Marks for each compliance. Max.20</p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="row">
			<div class="col-md-12">
				<p><b>Category III: Publication, research/thesis supervisor,project guide,research,consultancy and intellectual properties (Max.PI=175) Published Papers in peer reviewed Journals (Max. PI=100)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="container" style="border: 1px solid #c8c8c8"><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>Title with page no.</p>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>Name of peer review Journals (not online journals)</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<p>ISSN/ISBN No.</p>
				</div>

				<div class="col-md-6 text-right">
					<p>Impact factor</p>
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
					<p>No. of co-author</p>
				</div>
					<div class="col-md-1">
					<div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;">
					</div>
				</div>
				<div class="col-md-1 text-left">
					<p>PI=</p>
				</div>
			</div>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row">
				<div class="col-md-12 text-left">
					<p>20 marks for peer review journal first author and 10 marks for second author</p>
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

