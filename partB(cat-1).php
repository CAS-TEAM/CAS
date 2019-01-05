<?php

include 'top.php';

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>

	<div class="container">
    
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
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic3">
							<thead>
								<th colspan="3">Details of additional resource provided to the students to enrich course content/syllabus (Max. PI=10)</th>
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


  



   
