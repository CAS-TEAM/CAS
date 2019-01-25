<?php

include 'top.php';

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>

	<div class="container partb">
		<header class="heading"><b>Summary of PI Scores(to be filled by applicant)</b></header><br>

		<form action="summary_sys.php" method="POST">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab-summary">
						<tr>
							<th class="text-center">Category</th>
							<th class="text-center">Max.<br> Marks for PI</th>
							<th class="text-center">Criteria</th>
							<th class="text-center">A<br> Last Academic Year 2016-17</th>
							<th class="text-center">B<br> Current Academic Year 2017-18</th>

						</tr>
						<tbody>
							<tr id='summ10'>
								<td>Part A</td>
								<td>50</td>
								<td>General</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicA_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academic_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicA_current' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicA_current' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='summ11'>
		                    	<td>Part B: I</td>
								<td>100</td>
								<td>Teaching and Learning</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBI_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBI_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBI_current' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBI_current' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ12'>
		                    	<td>Part B: II</td>
								<td>100</td>
								<td>Co-Curricular and administrative activities in college</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBII_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBII_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBII_current' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBII_current' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ13'>
		                    	<td>Part B: III</td>
								<td>175</td>
								<td>Publications, supervisor, guide, research, consultancy, intellectual properties</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIII_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIII_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIII_current' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIII_current' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ14'>
		                    	<td>Part B: IV</td>
								<td>75</td>
								<td>Co-Curricular and administrative activities outside college</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIV_current' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_current' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='summ14'>
		                    	<td colspan="3">Average PI for total out of 500</td>
		                    	<td>
		                    		<div class="row">
										<div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">A =</label>
										</div>
										<div class="col-md-4" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_avgA_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">A =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_avgA_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-4" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_avgB_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_avgB_last' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='summ15'>
		                    	<td colspan="5">
									<div class="row justify-content-center">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">Average PI = [ (0.25 * A) + (0.75 * B) ] = </label>
										</div>
										<div class="col-md-3" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='last_academicBIV_avgpi_last' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-1 text-left" style="margin:0;padding:0">
											<label class="col-form-label">%</label>
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
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Grade</th>
		        <th>% Average PI score</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Satisfactory</td>
		        <td>50-100</td>
		      </tr>
		      <tr>
		        <td>Not Satisfactory</td>
		        <td>0-49</td>
		      </tr>
		    </tbody>
		  </table>
		</div><br>
<!-- 		<hr style="border: 0.5px solid #c8c8c8">
 -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<p><b>List of Enclosures: (Please attach copies of certificates, sanction orders, papers etc. wherever necessary)</b></p>
				</div>
			</div>
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic4">
						    <tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Description</th>
							</tr>
						
							 
							<tbody>
								<tr id='addr50'>
									<td id='hasr1'>1</td>
									<td>
									<input type="text" name='ecs[]' id='Enclosures1' class="form-control" maxlength="200" />
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
					<p>NB: The proforma duly filled along with all enclosures, submitted will be verified by the authorities.</p>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p><b>Evaluation by the committee (for office use)</b></p>
				</div>
			</div>
			<ul>
			<div class="row">
				<div class="col-md-12 text-left">
					<li><p>State whether the facts / documentation stated / attached above correct, if not then state the incorrect facts</p></li>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-left">
					<li><p>Final Verification and Evaluation in respects of PI by committee</p></li>
				</div>
			</div>
			</ul>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab-evaluation">
						<tr>
							<th class="text-center">Item</th>
							<th class="text-center">Correct</th>
							<th class="text-center">Exaggerated</th>
							<th class="text-center">Reasons/Remarks if any</th>
							<th class="text-center">Current Academic Year 20__-20__</th>

						</tr>
						<tbody>
							<tr id='eval10'>
								<td>Part A</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='correct-parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='exaggerated-parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='remarks-parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicA' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicA' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='eval11'>
		                    	<td>Part B: I</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct-partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated-partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks-partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBI' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBI' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval12'>
		                    	<td>Part B: II</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBII' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBII' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval13'>
		                    	<td>Part B: III</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIII' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIII' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval14'>
		                    	<td>Part B: IV</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='correct_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='exaggerated_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" name='remarks_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" name='current_academicBIV' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval14'>
		                    	<td colspan="5">
			                    	<div class="row justify-content-center">
			                    		<div class="col-md-5 text-left">
			                    			<label class="col-form-label">Average PI for total out of 500 (Committee):</label>
			                    		</div>

				                    	<div class="col-md-2" style="margin:0;padding:0">
											<input type="number" name='last_academicBIV_avg_comm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-1 text-center" style="margin:0;padding:0;padding-left: 5px">
											<label class="col-form-label">% /5  =</label>
										</div>
										<div class="col-md-2" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" name='pi_academicBIV_avg_comm' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>

		                    <tr id='eval15'>
		                    	<td colspan="5">
									<div class="row justify-content-center">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">Grade of Average PI (Committee):</label>
										</div>
										<div class="col-md-3" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='last_academicBIV_avgpi_comm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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

		<div class="row justify-content-center">
			<div class="col-md-4">
				<label class="col-form-label"><b>Final Recommendation:</b></label>
			</div>
			<div class="col-md-6">
				<input type="text" name='final_recomm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
			</div>
		</div><br><br>

		<div class="row form-inline justify-content-center">

			<div class="col se-btn">
				<button type="submit" class="btn btn-success" id="part-a-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SUBMIT 
				</button>

				<!-- <button type="button" class="btn btn-primary mx-2" id="part-a-edit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will allow you to edit the form data that you might have previously filled.">
	  			EDIT 
				</button> -->

				<button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>
			</div>
		</div>
	
	</div>

	</form>


 	<script type="text/javascript">
     $(document).ready(function()
    {
      var l=1;
     $("#add_row4").click(function(){
      $('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><input type="number" name="ecs[]" id="enclosure1'+(l+1)+'" class="form-control" maxlength="200" /></td>');

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
	function myFunction() {
		$("#part-a-submit-form").toggle();
		$("#part-a-print-form").toggle();
	  	window.print();

	  	$("#part-a-submit-form").toggle();
		$("#part-a-print-form").toggle();
	}
	</script>