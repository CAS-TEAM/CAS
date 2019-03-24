<?php

session_start();

include 'dbh.php';
include 'top.php';
include 'left-nav.php';

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
							<th class="text-center" colspan="3">Average API given by Faculty Member(in %)</th>
							<th class="text-center" colspan="3">Average API after verification by HOD(in %)</th>
							<th class="text-center" colspan="3">Final Score by Screening Cum Evaluation/Selection Committee</th>
							<th class="text-center" rowspan="2">Final Recommendation</th>
						</tr>

						<tr> 
							
							<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<th>Cumulated Score=0.25% of API of <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?>+0.75% of API of <?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<th>Cumulated Score=0.25% of API of <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?>+0.75% of API of <?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<th>Cumulated Score=0.25% of API of <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?>+0.75% of API of <?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
						</tr>

						<tbody>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	    </div>
	</div>
</div>