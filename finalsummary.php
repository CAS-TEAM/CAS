<?php

session_start();

include 'dbh.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);
$sqlx="SELECT profilePicLocation, hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];


include 'top.php';
include 'left-nav.php';

$lasttolastyear=$previousyear-1;

?>
<div class="container">
    <div class="row justify-content-center">    		
    	<div class="col offset-md-2 parta" id="summary-container">
	    	<header>
	    		<h2 class="heading"><b>CONSOLIDATED REPORT OF ALL APPLICATION RECEIVED FOR CAS</b></h2><br>
	    	</header>

	    	<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab-summary">
							<tr>
								<th class="text-center" rowspan="2">Sr.No</th>
								<th class="text-center" rowspan="2">Name of Faculty Members</th>
								<th class="text-center" colspan="4">Average API given by Faculty Member(in %)</th>
								<th class="text-center" colspan="4">Average API after verification by HOD(in %)</th>
								<th class="text-center" colspan="4">Final Score by Screening Cum Evaluation/Selection Committee</th>
								<th class="text-center" rowspan="2">Final Remarks by Committee</th>
								<th class="text-center" rowspan="2">Approved / Disapproved for CAS</th>
							</tr>

							<tr> 
								<th><?php echo $previousyear-3; ?>-<?php echo $previousyear-2; ?></th>
								<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
								<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
								<!-- <th>Cumulated Score=0.33% of API of <?php echo $previousyear-3; ?>-<?php echo $previousyear-2; ?>+0.33% of API of <?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?>+0.33% of API of <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th> -->
								<th>Average PI %</th>

								<th><?php echo $previousyear-3; ?>-<?php echo $previousyear-2; ?></th>
								<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
								<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
								<!-- <th>Cumulated Score=0.33% of API of <?php echo $previousyear-3; ?>-<?php echo $previousyear-2; ?>+0.33% of API of <?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?>+0.33% of API of <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th> -->
								<th>Average PI %</th>

								<th><?php echo $previousyear-3; ?>-<?php echo $previousyear-2; ?></th>
								<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
								<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
								<!-- <th>Cumulated Score=0.33% of API of <?php echo $previousyear-3; ?>-<?php echo $previousyear-2; ?>+0.33% of API of <?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?>+0.33% of API of <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th> -->
								<th>Average PI %</th>
							</tr>

							<tbody>
								<?php

								$sql="SELECT facultyId, selfPP, selfA, selfB, self_avgpi, hodPP, hodA, hodB, hod_avgpi, committeePP, committeeA, committeeB, committee_avgpi, final_recomm FROM summary_table WHERE year='$previousyear'";
								$result=mysqli_query($conn, $sql);
								if(mysqli_num_rows($result)>0)
								{
									$counter=1;
									while($row=mysqli_fetch_assoc($result))
									{
										$facultyId=mysqli_real_escape_string($conn, $row['facultyId']);

										$sqln="SELECT faculty_name FROM faculty_table WHERE id='$facultyId'";
										$resultn=mysqli_query($conn, $sqln);
										$rown=mysqli_fetch_assoc($resultn);
										$faculty_name=$rown['faculty_name'];

										$sqlap="SELECT cas_approved FROM cas_approval_table WHERE facultyId='$facultyId' AND currentyear='$previousyear' AND previousyear='$lasttolastyear'";
										$resultap=mysqli_query($conn, $sqlap);
										if(mysqli_num_rows($resultap)!=0)
										{
											$rowap=mysqli_fetch_assoc($resultap);
											$cas_approved=$rowap['cas_approved'];
										}
										else
										{
											$cas_approved='Pending';
										}
										
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td><?php echo $faculty_name; ?></td>
											<td><?php echo $row['selfPP']; ?></td>
											<td><?php echo $row['selfA']; ?></td>
											<td><?php echo $row['selfB']; ?></td>
											<td><?php echo number_format((float)($row['self_avgpi']/5), 2, '.', ''); ?></td>
											<td><?php echo $row['hodPP']; ?></td>
											<td><?php echo $row['hodA']; ?></td>
											<td><?php echo $row['hodB']; ?></td>
											<td><?php echo number_format((float)($row['hod_avgpi']/5), 2, '.', ''); ?></td>
											<td><?php echo $row['committeePP']; ?></td>
											<td><?php echo $row['committeeA']; ?></td>
											<td><?php echo $row['committeeB']; ?></td>
											<td><?php echo number_format((float)($row['committee_avgpi']/5), 2, '.', ''); ?></td>
											<td><?php echo $row['final_recomm']; ?></td>
											<td><?php echo $cas_approved; ?></td>
										</tr>									
										<?php

										$counter+=1;
									}

								}
								else
								{
									?>
									<td colspan="12"><p class="text-center">No results</p></td>
									<?php
								}

								?>							
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
			<br>
			<!-- <a href="generate_fs_csv.php" target="_blank" class="btn btn-primary" style="margin-bottom: 10px">
	  			GENERATE CSV 
			</a> -->
			<button type="button" class="btn btn-success" onclick="myFunction()" id="fs-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000;margin-bottom: 10px">
	  			PRINT 
			</button>
	    </div>
	</div>
	<br>
</div>

<script type="text/javascript">
	function myFunction() {
		$("#fs-print-form").toggle();
	  	
	  	// window.print();
	  	$("#summary-container").printThis({
	  		importStyle: true
	  	});

	  	setTimeout(function () { 
			$("#fs-print-form").toggle();
		}, 700);

	}
</script>

</body>
</html>