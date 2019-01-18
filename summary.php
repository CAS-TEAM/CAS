<?php

include 'top.php';

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>

	<div class="container partb">
		<header class="heading"><b>Summary of PI Scores(to be filled by applicant)</b></header><br>

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
											<input type="text" name='last-academicA-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academic-1617' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='current-academicA-1718' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicA-1718' class="form-control" style="width: 100%" />
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
											<input type="text" name='last-academicBI-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBI-1617' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='current-academicBI-1718' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBI-1718' class="form-control" style="width: 100%" />
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
											<input type="text" name='last-academicBII-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBII-1617' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='current-academicBII-1718' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBII-1718' class="form-control" style="width: 100%" />
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
											<input type="text" name='last-academicBIII-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBIII-1617' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='current-academicBIII-1718' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBIII-1718' class="form-control" style="width: 100%" />
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
											<input type="text" name='last-academicBIV-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBIV-1617' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='current-academicBIV-1718' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBIV-1718' class="form-control" style="width: 100%" />
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
											<input type="text" name='last-academicBIV-avgA-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBIV-avgA-1617' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-4" style="margin:0;padding:0;padding-right:5px">
											<input type="text" name='last-academicBIV-avgB-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="text" name='pi-academicBIV-avgB-1617' class="form-control" style="width: 100%" />
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
											<input type="text" name='last-academicBIV-avgpi-1617' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
		</div>

	</div>

