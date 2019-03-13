<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
else if(!isset($_GET['id']))
{
	header("LOCATION: userprofile.php");
}
else
{

include 'dbh.php';


$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);

$userId=mysqli_real_escape_string($conn,$_GET['id']);
// $year=mysqli_real_escape_string($conn,$_GET['year']);


if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;
	
}

$sqlx="SELECT profilePicLocation, hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];
// echo "committee=".$committee;

$currentyear=date("Y");
if(date("m")>=7)
{
	$currentyear+=1;
}
$previousyear=$currentyear-1;

include 'top.php';
include 'left-nav.php';

// echo $userId;

?>

	<div class="container">
    <div class="row justify-content-center">    		
    <div class="col offset-md-2 parta">

		<?php 

		if($viewerId==$userId || $committee==1)
		{

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$cparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		// echo "current=".$cparta_gpi_pi_self_a.",".$pparta_gpi_pi_self_a;

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];


		/////////////////////////////////////////////////////////////////


		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];

		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];


		///////////////////////////////////////////////////////////////
		//calculating percentages
		$Atotal= ($pparta_gpi_pi_self_a/50*100 + ($pcat1_pitotal_self_a/50)*100 + $pcat2_piitotal_self_a + $pcat3_piiitotal_self_a/175*100 + $pcat4_pivtotal_self_a/75*100);
		$A=$Atotal/5;

		$Btotal = ($cparta_gpi_pi_self_a/50*100 +	$ccat1_pitotal_self_a +	$ccat2_piitotal_self_a +	$ccat3_piiitotal_self_a/175*100 +	$ccat4_pivtotal_self_a/75*100);

		$B=$Btotal/5;

		$avgpi=0.25*$A + 0.75*$B;


		?>
		
		<header class="heading"><b>Summary of PI Scores(to be filled by applicant)</b></header><br>
		<!-- <form class="summary_self_form.php" action="summary_sys.php" enctype="multipart/form-data" method="POST"> -->

		<input type="hidden" name="year" id="year" value="<?php echo $currentyear; ?>">
		<input type="hidden" name="userId" id="userId" value="<?php echo $userId; ?>">
   		<!-- <input type="hidden" name="viewerId" id="viewerId" value="<?php echo $viewerId; ?>"> -->

		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
					<table class="table table-bordered table-hover" id="tab-summary">
						<tr>
							<th class="text-center">Category</th>
							<th class="text-center">Max.<br> Marks for PI</th>
							<th class="text-center">Criteria</th>
							<th class="text-center">A<br> Last Academic Year <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th class="text-center">B<br> Current Academic Year <?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>

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
											<input type="number" step="0.01" name='last_academicA_last' value="<?php echo $pparta_gpi_pi_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academic_last' value="<?php echo $pparta_gpi_pi_self_a/50*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicA_current' value="<?php echo $cparta_gpi_pi_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicA_current' value="<?php echo $cparta_gpi_pi_self_a/50*100; ?>" class="form-control" style="width: 100%" disabled/>
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
											<input type="number" step="0.01" name='last_academicBI_last' value="<?php echo $pcat1_pitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBI_last' value="<?php echo ($pcat1_pitotal_self_a/100)*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBI_current' value="<?php echo $ccat1_pitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBI_current' value="<?php echo $ccat1_pitotal_self_a; ?>" class="form-control" style="width: 100%" disabled/>
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
											<input type="number" step="0.01" name='last_academicBII_last' value="<?php echo $pcat2_piitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBII_last' value="<?php echo $pcat2_piitotal_self_a; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBII_current' value="<?php echo $ccat2_piitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBII_current' value="<?php echo $ccat2_piitotal_self_a; ?>" class="form-control" style="width: 100%" disabled/>
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
											<input type="number" step="0.01" name='last_academicBIII_last' value="<?php echo $pcat3_piiitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBIII_last' value="<?php echo $pcat3_piiitotal_self_a/175*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBIII_current' value="<?php echo $ccat3_piiitotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBIII_current' value="<?php echo $ccat3_piiitotal_self_a/175*100; ?>" class="form-control" style="width: 100%" disabled/>
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
											<input type="number" step="0.01" name='last_academicBIV_last' value="<?php echo $pcat4_pivtotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBIV_last' value="<?php echo $pcat4_pivtotal_self_a/75*100; ?>" class="form-control" style="width: 100%" disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBIV_current' value="<?php echo $ccat4_pivtotal_self_a; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBIV_current' value="<?php echo $ccat4_pivtotal_self_a/75*100; ?>" class="form-control" style="width: 100%" disabled/>
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
											<input type="number" step="0.01" name='last_academicBIV_avgA_last' class="form-control" style="width: 100%;margin: 0;padding: 0" value="<?php echo $Atotal; ?>" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBIV_avgA_last' value="<?php echo $A; ?>" class="form-control" style="width: 100%"  disabled/>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-4" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='last_academicBIV_avgB_last' class="form-control" style="width: 100%;margin: 0;padding: 0" value="<?php echo $Btotal; ?>" disabled/>
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
											<input type="number" step="0.01" name='pi_academicBIV_avgB_last' value="<?php echo number_format((float)$B, 2, '.', ''); ?>" class="form-control" style="width: 100%"  disabled/>
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
											<input type="number" step="0.01" name='last_academicBIV_avgpi_last' class="form-control" style="width: 100%;margin: 0;padding: 0" value='<?php echo number_format((float)$avgpi, 2, '.', ''); ?>' disabled/>
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
		<!-- <hr style="border: 0.5px solid #c8c8c8"> -->
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
								<th class="text-center">Sr. No.</th>
								<th class="text-center">Description</th>
								<th class="text-center">Attached File</th>
							</tr>				
							 
							<tbody>

								<?php

								for($xx=$currentyear;$xx>=($currentyear-1);$xx--)
								{

								?>
									<tr>
										<td><b>~</b></td>
										<td><b><?php echo $xx.'-'.($xx-1); ?></b></td>
										<td><b>~</b></td>
									</tr>
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

									?>
									<tr>
										<td><b>~</b></td>
										<td><b>Part B Category 1</b></td>
										<td><b>~</b></td>
									</tr>
									<?php

									$sqlxxx="SELECT id FROM part_b_table WHERE facultyId='$userId' AND year='$xx'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$formId=mysqli_real_escape_string($conn,$rowxxx['id']);	

									// echo $userId.','.$formId.','.$xx.'<br>';							

									// Part B
									$sqlxxx="SELECT o1file,o2file,o3file,o4file,o5file,o6file,o7file,o8file,o9file,o10file,o11file,o12file,o13file,e1file,e2file,e3file,e4file,e5file,e6file,e7file,e8file,e9file,e10file,e11file,e12file,e13file,dps1file,dps2file,dps3file,dps4file, dps5file,dps6file,dps7file FROM part_b_cat_1 WHERE formId='$formId'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$o1file=mysqli_real_escape_string($conn,$rowxxx['o1file']);
									$o2file=mysqli_real_escape_string($conn,$rowxxx['o2file']);
									$o3file=mysqli_real_escape_string($conn,$rowxxx['o3file']);
									$o4file=mysqli_real_escape_string($conn,$rowxxx['o4file']);
									$o5file=mysqli_real_escape_string($conn,$rowxxx['o5file']);
									$o6file=mysqli_real_escape_string($conn,$rowxxx['o6file']);
									$o7file=mysqli_real_escape_string($conn,$rowxxx['o7file']);
									$o8file=mysqli_real_escape_string($conn,$rowxxx['o8file']);
									$o9file=mysqli_real_escape_string($conn,$rowxxx['o9file']);
									$o10file=mysqli_real_escape_string($conn,$rowxxx['o10file']);
									$o11file=mysqli_real_escape_string($conn,$rowxxx['o11file']);
									$o12file=mysqli_real_escape_string($conn,$rowxxx['o12file']);
									$o13file=mysqli_real_escape_string($conn,$rowxxx['o13file']);

									$e1file=mysqli_real_escape_string($conn,$rowxxx['e1file']);
									$e2file=mysqli_real_escape_string($conn,$rowxxx['e2file']);
									$e3file=mysqli_real_escape_string($conn,$rowxxx['e3file']);
									$e4file=mysqli_real_escape_string($conn,$rowxxx['e4file']);
									$e5file=mysqli_real_escape_string($conn,$rowxxx['e5file']);
									$e6file=mysqli_real_escape_string($conn,$rowxxx['e6file']);
									$e7file=mysqli_real_escape_string($conn,$rowxxx['e7file']);
									$e8file=mysqli_real_escape_string($conn,$rowxxx['e8file']);
									$e9file=mysqli_real_escape_string($conn,$rowxxx['e9file']);
									$e10file=mysqli_real_escape_string($conn,$rowxxx['e10file']);
									$e11file=mysqli_real_escape_string($conn,$rowxxx['e11file']);
									$e12file=mysqli_real_escape_string($conn,$rowxxx['e12file']);
									$e13file=mysqli_real_escape_string($conn,$rowxxx['e13file']);

									for ($x = 1; $x <= 13; $x++) {
										$file='o'.$x.'file';
										if($$file!='NAN')
										{
										    ?>
										    <tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($$file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $$file; ?>" target="_blank">View File</a></td>
											</tr>
										    <?php
										    $counter+=1;
										}
									} 

									for ($x = 1; $x <= 13; $x++) {
										$file='e'.$x.'file';
										if($$file!='NAN')
										{
										    ?>
										    <tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($$file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $$file; ?>" target="_blank">View File</a></td>
											</tr>
										    <?php
										    $counter+=1;
										}
									} 

									// part_b_cat_1_cte
									$sql="SELECT ctefile FROM part_b_cat_1_cte WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ctefile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_1_cto
									$sql="SELECT ctofile FROM part_b_cat_1_cto WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ctofile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_1_dar
									$sql="SELECT darfile FROM part_b_cat_1_dar WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['darfile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									?>
									<tr>
										<td><b>~</b></td>
										<td><b>Part B Category 2</b></td>
										<td><b>~</b></td>
									</tr>
									<?php

									// part_b_cat_2_act
									$sql="SELECT efile FROM part_b_cat_2_act WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['efile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_2_c
									$sql="SELECT cfile FROM part_b_cat_2_c WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cfile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_2_exc
									$sql="SELECT ecfile FROM part_b_cat_2_exc WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ecfile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_2_ha
									$sql="SELECT hfile FROM part_b_cat_2_ha WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['hfile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									?>
									<tr>
										<td><b>~</b></td>
										<td><b>Part B Category 3</b></td>
										<td><b>~</b></td>
									</tr>
									<?php

									$sqlxxx="SELECT phdfile,mtechfile,btechfile FROM part_b_cat_3 WHERE formId='$formId'";
									$resultxxx=mysqli_query($conn,$sqlxxx);
									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$phdfile=mysqli_real_escape_string($conn,$rowxxx['phdfile']);
									$mtechfile=mysqli_real_escape_string($conn,$rowxxx['mtechfile']);
									$btechfile=mysqli_real_escape_string($conn,$rowxxx['btechfile']);

									?>
									<tr>
										<td><?php echo $counter; ?></td>
										<td><?php echo basename($phdfile); ?></td>
										<td><a href="viewfile.php?location=<?php echo $phdfile; ?>" target="_blank">View File</a></td>
									</tr>
									<tr>
										<td><?php echo $counter; ?></td>
										<td><?php echo basename($mtechfile); ?></td>
										<td><a href="viewfile.php?location=<?php echo $mtechfile; ?>" target="_blank">View File</a></td>
									</tr>
									<tr>
										<td><?php echo $counter; ?></td>
										<td><?php echo basename($btechfile); ?></td>
										<td><a href="viewfile.php?location=<?php echo $btechfile; ?>" target="_blank">View File</a></td>
									</tr>

									<?php

									// part_b_cat_3_pp
									$sql="SELECT ppfile FROM part_b_cat_3_pp WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ppfile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_ppic
									$sql="SELECT pp1file FROM part_b_cat_3_ppic WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['pp1file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_ppinc
									$sql="SELECT pp2file FROM part_b_cat_3_ppinc WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['pp2file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_bk
									$sql="SELECT pp3file FROM part_b_cat_3_bk WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['pp3file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_res
									$sql="SELECT research1file FROM part_b_cat_3_res WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['research1file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_ores
									$sql="SELECT research2file FROM part_b_cat_3_ores WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['research2file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_cres
									$sql="SELECT research3file FROM part_b_cat_3_cres WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['research3file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_3_pip
									$sql="SELECT dfile FROM part_b_cat_3_pip WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['dfile'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									?>
									<tr>
										<td><b>~</b></td>
										<td><b>Part B Category 4</b></td>
										<td><b>~</b></td>
									</tr>
									<?php

									// part_b_cat_4_sem
									$sql="SELECT cativ1file FROM part_b_cat_4_sem WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cativ1file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_4_inv
									$sql="SELECT cativ2file FROM part_b_cat_4_inv WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cativ2file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									// part_b_cat_4_creds
									$sql="SELECT cativ3file FROM part_b_cat_4_creds WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['cativ3file'];
										if($file!='NAN')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo basename($file); ?></td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}



								}//for loop ends

								?>
								<?php 
								/*
								$l=1;
								$flag=true;//flag to check if atleast one file has been previous;y uploaded or not..true means uploaded false means not uploaded

								$sqlxxx="SELECT id FROM summary_table WHERE facultyId='$userId' AND year='$currentyear'";
								$resultxxx=mysqli_query($conn,$sqlxxx);
								if(mysqli_num_rows($resultxxx)>0)
								{

									$rowxxx=mysqli_fetch_assoc($resultxxx);
									$formId=mysqli_real_escape_string($conn,$rowxxx['id']);

									$sqlxx="SELECT ecs,papers FROM summary_hasr WHERE formId='$formId'";
									$resultxx=mysqli_query($conn,$sqlxx);
									if(mysqli_num_rows($resultxx)>0)
									{
										while($rowxx=mysqli_fetch_assoc($resultxx))
										{
											?>
											<tr id='addr5<?php echo $l-1; ?>'>
												<td id='hasr<?php echo $l; ?>'><?php echo $l; ?></td>
												<td>
												<input type="number" step="0.01" name='ecs[]' id='ecs<?php echo $l; ?>' class="form-control" value="<?php echo $rowxx['ecs']; ?>" maxlength="200" />
												</td>
												<td>
													<div class="custom-file">
										                <input type="file" class="custom-file-input" id="papers<?php echo $l; ?>" name="papers[]" value="<?php echo $rowxx['papers']; ?>"/>
										                <label class="custom-file-label" for="papers<?php echo $l; ?>"><?php echo basename($rowxx['papers']); ?></label>
										            </div>
												</td>
											</tr>						                    
											<?php
											$l+=1;
										}
										?>
										<tr id='addr5<?php echo $l-1; ?>'></tr>
										<?php
									}						
									else
									{
										$flag=false;
									}

								}
								else
								{
									$flag=false;
								}
								
								if($flag==false)
								{
								?>
									<tr id='addr50'>
										<td id='hasr1'>1</td>
										<td>
										<input type="number" step="0.01" name='ecs[]' id='ecs1' class="form-control" maxlength="200" />
										</td>
										<td>
											<div class="custom-file">
								                <input type="file" class="custom-file-input" id="papers1" name="papers[]"/>
								                <label class="custom-file-label" for="papers1">Choose file</label>
								            </div>
										</td>
									</tr>
				                    <tr id='addr51'></tr>
			                    <?php
			                	}
			                	?>
			                	<input type="hidden" name="l" id="l" value="<?php echo $l-1; ?>">
			                	*/
			                	?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php
			/*
			if($flag==false)
			{
			?>
				<a id="add_row4" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
				<a id='delete_row4' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<?php
			}
			*/
			?>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>NB: The proforma duly filled along with all enclosures, submitted will be verified by the authorities.</p>
				</div>
			</div>
		</div>

		<?php		
		if($committee!=1)
		{
		?>
			<hr style="border: 0.5px solid #c8c8c8">
		<?php
		}
		?>
		


		<div class="row form-inline justify-content-center">

			<div class="col">
				<!-- <button type="submit" class="btn btn-success" id="part-a-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SUBMIT 
				</button> -->
				<?php		
				if($committee!=1)
				{
				?>	
				<button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>
				<?php
				}
				?>
			</div>
		</div><br>
		<!-- </form> -->
		

		<?php

		}

		?>

		<hr>
		<?php
		
		if($committee==1)
		{

		?>	

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ EVALUATION BY THE COMMITTEE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<form class="summary_comm_form" action="summary_comm_sys.php" method="POST">
		<input type="hidden" name="year" id="year" value="<?php echo $currentyear; ?>">
		<input type="hidden" name="userId" id="userId" value="<?php echo $userId; ?>">
		<input type="hidden" name="alreadybegun" id="alreadybegun" value="0">
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
							<th class="text-center">Current Academic Year <?php echo $currentyear; ?>-<?php echo $previousyear; ?></th>

						</tr>
						<tbody>
							<tr id='eval10'>
								<td>Part A</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='correct_parta' id='correct_parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='exaggerated_parta' id='exaggerated_parta' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='remarks_parta' id='remarks_parta' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicA' id='current_academicA' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-4 number-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div>
									</div><br>

									<div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicA' id='pi_academicA' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
							</tr>
		                    <tr id='eval11'>
		                    	<td>Part B: I</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='correct_partbi' id='correct_partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='exaggerated_partbi' id='exaggerated_partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='remarks_partbi' id='remarks_partbi' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBI' id='current_academicBI' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="number" step="0.01" name='pi_academicBI' id='pi_academicBI' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval12'>
		                    	<td>Part B: II</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='correct_partbii' id='correct_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='exaggerated_partbii' id='exaggerated_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='remarks_partbii' id='remarks_partbii' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBII' id='current_academicBII' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="number" step="0.01" name='pi_academicBII' id='pi_academicBII' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval13'>
		                    	<td>Part B: III</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='correct_partbiii' id='correct_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='exaggerated_partbiii' id='exaggerated_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='remarks_partbiii' id='remarks_partbiii' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBIII' id='current_academicBIII' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="number" step="0.01" name='pi_academicBIII' id='pi_academicBIII' class="form-control" style="width: 100%" />
										</div>
									</div>
								</td>
		                    </tr>
		                    <tr id='eval14'>
		                    	<td>Part B: IV</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='correct_partbiv' id='correct_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="number" step="0.01" name='exaggerated_partbiv' id='exaggerated_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" />
									</div>
								</td>
								<td>
									<div class="col-md-12">
										<input type="text" name='remarks_partbiv' id='remarks_partbiv' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div>
										<div class="col-md-5" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='current_academicBIV' id='current_academicBIV' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
											<input type="number" step="0.01" name='pi_academicBIV' id='pi_academicBIV' class="form-control" style="width: 100%" />
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
											<input type="number" step="0.01" name='last_academicBIV_avg_comm' id='last_academicBIV_avg_comm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
										</div>
										<div class="col-md-1 text-center" style="margin:0;padding:0;padding-left: 5px">
											<label class="col-form-label">% /5  =</label>
										</div>
										<div class="col-md-2" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_avg_comm' id='pi_academicBIV_avg_comm' class="form-control" style="width: 100%" />
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
											<input type="text" name='last_academicBIV_avgpi_comm' id='last_academicBIV_avgpi_comm' class="form-control" style="width: 100%;margin: 0;padding: 0" />
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
				<input type="text" name='final_recomm' id='final_recomm' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
			</div>
		</div><br>

		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="row" style="border:1px solid #cccccc; border-radius:5px; padding-top: 10px;padding-bottom: 10px">
					<div class="col-md-6 custom-control custom-radio">
						<input class="custom-control-input casapprovalradio" type="radio" name="casapproval" id="casapproved" value="Approved" checked>
						<label class="custom-control-label" for="casapproved">
						    Approve for CAS
						</label>
					</div>
					<div class="col-md-6 custom-control custom-radio">
						<input class="custom-control-input casapprovalradio" type="radio" name="casapproval" id="casdisapproved" value="Disapproved">
						<label class="custom-control-label" for="casdisapproved">
						    Disapprove for CAS
						</label>
					</div>
				</div>
			</div>
			
		</div><br>

		<div class="row form-inline justify-content-center">

			<div class="col">
				<button type="submit" class="btn btn-success" id="summary-comm-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SUBMIT 
				</button>

				<button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>
			</div>
		</div><br>

		</form>

		<?php

		}

		?>

		
	</div>
	</div>
	</div>

	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Summary Submitted.</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal footer -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      	</div>

		    </div>
	  	</div>
	</div>

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


	<br><br>

	<script type="text/javascript">
		getSummaryData();
	</script>


 	<script type="text/javascript">
    $(document).ready(function()
    {
      	var l=1;
     	$("#add_row4").click(function(){
     	l=parseInt(document.getElementById('l').value);
      	$('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><input type="number" step="0.01" name="ecs[]" id="ecs'+(l+1)+'" class="form-control" maxlength="200" /></td><td><div class="custom-file"><input type="file" class="custom-file-input" id="papers'+(l+1)+'" name="papers[]" multiple/><label class="custom-file-label" for="papers'+(l+1)+'">Choose file</label></div></td>');

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
	function myFunction() {
		$("#summary-comm-submit-form").toggle();
		$("#part-a-print-form").toggle();
		$("#sidebar").toggle();
		
	  	window.print();

	  	$("#summary-comm-submit-form").toggle();
		$("#part-a-print-form").toggle();
		$("#sidebar").toggle();
	}
	</script>

</body>
</html>

<?php

}

?>