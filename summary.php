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

$sqll="SELECT faculty_name FROM faculty_table WHERE id='$userId'";
$resultl=mysqli_query($conn,$sqll);
$rowl=mysqli_fetch_assoc($resultl);
$fn=$rowl['faculty_name'];

$sqlx="SELECT profilePicLocation, hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];
// echo "committee=".$committee;

// $currentyear=date("Y");

include 'top.php';
include 'left-nav.php';

$currentyear=mysqli_real_escape_string($conn,$_GET['year']);
// if(date("m")>=7)
// {
// 	$currentyear+=1;
// }
$previousyear=$currentyear-1;
$lasttolastyear=$previousyear-1;

// echo $userId;

// $sqlmf="SELECT currentyear, previousyear FROM multiplication_factor_table";
// $resultmf=mysqli_query($conn, $sqlmf);
// $rowmf=mysqli_fetch_assoc($resultmf);
// $currentyearmf=$rowmf['currentyear'];
// $previousyearmf=$rowmf['previousyear'];

$currentyearmf=0.33;
$previousyearmf=0.33;
$lasttolastyearmf=0.33;

?>

	<div class="container">
    <div class="row justify-content-center">    		
    <div class="col offset-md-2 parta" id="summary-container">

		<?php 

		if($viewerId==$userId || $committee==1 || $hod==1)
		{

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$cparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		$sqlpartA="SELECT parta_gpi_pi_self_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lparta_gpi_pi_self_a=$rowpartA['parta_gpi_pi_self_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		$sqlpartA="SELECT cat1_pitotal_self_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat1_pitotal_self_a=$rowpartA['cat1_pitotal_self_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		$sqlpartA="SELECT cat2_piitotal_self_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat2_piitotal_self_a=$rowpartA['cat2_piitotal_self_a'];

		////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];

		$sqlpartA="SELECT cat3_piiitotal_self_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat3_piiitotal_self_a=$rowpartA['cat3_piiitotal_self_a'];


		/////////////////////////////////////////////////////////////////


		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];

		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];

		$sqlpartA="SELECT cat4_pivtotal_self_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat4_pivtotal_self_a=$rowpartA['cat4_pivtotal_self_a'];


		///////////////////////////////////////////////////////////////
		//calculating percentages
		// $PPpartAself=number_format($lparta_gpi_pi_self_a/50*100,2);
		// $PPpartBcat1self=number_format(($lcat1_pitotal_self_a/100)*100,2);
		// $PPpartBcat2self=number_format($lcat2_piitotal_self_a,2);
		// $PPpartBcat3self=number_format($lcat3_piiitotal_self_a/175*100,2);
		// $PPpartBcat4self=number_format($lcat4_pivtotal_self_a/75*100,2);

		$PPpartAself=$lparta_gpi_pi_self_a;
		$PPpartBcat1self=$lcat1_pitotal_self_a;
		$PPpartBcat2self=$lcat2_piitotal_self_a;
		$PPpartBcat3self=$lcat3_piiitotal_self_a;
		$PPpartBcat4self=$lcat4_pivtotal_self_a;

		// $PPtotal= ($PPpartAself + $PPpartBcat1self + $PPpartBcat2self + $PPpartBcat3self + $PPpartBcat4self);
		// $PP=number_format($PPtotal/5, 2);

		$PP = $lparta_gpi_pi_self_a+$lcat1_pitotal_self_a+$lcat2_piitotal_self_a+$lcat3_piiitotal_self_a+$lcat4_pivtotal_self_a;

		// $PpartAself=number_format($pparta_gpi_pi_self_a/50*100,2);
		// $PpartBcat1self=number_format(($pcat1_pitotal_self_a/100)*100,2);
		// $PpartBcat2self=number_format($pcat2_piitotal_self_a,2);
		// $PpartBcat3self=number_format($pcat3_piiitotal_self_a/175*100,2);
		// $PpartBcat4self=number_format($pcat4_pivtotal_self_a/75*100,2);

		$PpartAself=$pparta_gpi_pi_self_a;
		$PpartBcat1self=$pcat1_pitotal_self_a;
		$PpartBcat2self=$pcat2_piitotal_self_a;
		$PpartBcat3self=$pcat3_piiitotal_self_a;
		$PpartBcat4self=$pcat4_pivtotal_self_a;

		// $Atotal= ($PpartAself + $PpartBcat1self + $PpartBcat2self + $PpartBcat3self + $PpartBcat4self);
		// $A=number_format($Atotal/5, 2);

		$A = $pparta_gpi_pi_self_a+$pcat1_pitotal_self_a+$pcat2_piitotal_self_a+$pcat3_piiitotal_self_a+$pcat4_pivtotal_self_a;

		$CpartAself=$cparta_gpi_pi_self_a;
		$CpartBcat1self=$ccat1_pitotal_self_a;
		$CpartBcat2self=$ccat2_piitotal_self_a;
		$CpartBcat3self=$ccat3_piiitotal_self_a;
		$CpartBcat4self=$ccat4_pivtotal_self_a;

		// $Btotal = ($CpartAself +	$CpartBcat1self +	$CpartBcat2self + $CpartBcat3self +	$CpartBcat4self);
		// $B=number_format($Btotal/5, 2);

		$B = $cparta_gpi_pi_self_a+$ccat1_pitotal_self_a+$ccat2_piitotal_self_a+$ccat3_piiitotal_self_a+$ccat4_pivtotal_self_a;

		// $avgpi=number_format(0.25*$A + 0.75*$B, 2);
		
		// $avgpi=number_format($lasttolastyearmf*$PP + $previousyearmf*$A + $currentyearmf*$B, 2);

		$avgpi=($PP+$A+$B)/3;

		// $sqls="SELECT self_avgpi,selfA,selfB FROM summary_table WHERE facultyId='$userId' AND year='$currentyear'";
		// $results=mysqli_query($conn,$sqls);
		// $rows=mysqli_fetch_assoc($results);
		// if($rows['selfB']!=$A || $rows['selfB']!=$B || $rows['self_avgpi']!=$avgpi)
		// {
			// $sqlsx="UPDATE summary_table SET PpartAself='$PpartAself', PpartBcat1self='$PpartBcat1self', PpartBcat2self='$PpartBcat2self', PpartBcat3self='$PpartBcat3self', PpartBcat4self='$PpartBcat4self', CpartAself='$CpartAself', CpartBcat1self='$CpartBcat1self', CpartBcat2self='$CpartBcat2self', CpartBcat3self='$CpartBcat3self', CpartBcat4self='$CpartBcat4self', selfA='$A', selfB='$B', self_avgpi='$avgpi' WHERE facultyId='$userId' AND year='$currentyear'";
			$sqlsx="UPDATE summary_table SET selfPP='$PP', selfA='$A', selfB='$B', self_avgpi='$avgpi' WHERE facultyId='$userId' AND year='$currentyear'";
			$resultx=mysqli_query($conn, $sqlsx);
		// }


		?>
		<h2 class="heading" style="font-size:15px"><b>K. J. Somaiya College of Engineering, Mumbai - 77</b></h2>
    		<h2 class="heading" style="font-size:15px">(Autonomous College Affiliated to University of Mumbai)</h2>
		<header class="heading"><b>Summary of PI Scores of <?php echo $fn; ?></b></header><br>
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
							<th class="text-center" style="column-width: 260px">A<br> Last to Last Academic Year<br> <?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
							<th class="text-center" style="column-width: 260px">B<br> Last Academic Year<br> <?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th class="text-center" style="column-width: 260px">C<br> Current Academic Year<br> <?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>

						</tr>
						<tbody>
							<tr id='summ10'>
								<td>Part A</td>
								<td>50</td>
								<td>General</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='lasttolast_academicA_lasttolast' value="<?php echo $lparta_gpi_pi_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $lparta_gpi_pi_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academic_lasttolast' value="<?php echo $lparta_gpi_pi_self_a/50*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicA_last' value="<?php echo $pparta_gpi_pi_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $pparta_gpi_pi_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academic_last' value="<?php echo $pparta_gpi_pi_self_a/50*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='current_academicA_current' value="<?php echo $cparta_gpi_pi_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $cparta_gpi_pi_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/50)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicA_current' value="<?php echo $cparta_gpi_pi_self_a/50*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
							</tr>
		                    <tr id='summ11'>
		                    	<td>Part B: I</td>
								<td>100</td>
								<td>Teaching and Learning</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='lasttolast_academicBI_lasttolast' value="<?php echo $lcat1_pitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $lcat1_pitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBI_lasttolast' value="<?php echo ($lcat1_pitotal_self_a/100)*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicBI_last' value="<?php echo $pcat1_pitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $pcat1_pitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBI_last' value="<?php echo ($pcat1_pitotal_self_a/100)*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='current_academicBI_current' value="<?php echo $ccat1_pitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $ccat1_pitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBI_current' value="<?php echo $ccat1_pitotal_self_a; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
		                    </tr>
		                    <tr id='summ12'>
		                    	<td>Part B: II</td>
								<td>100</td>
								<td>Co-Curricular and administrative activities in college</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='lasttolast_academicBII_lasttolast' value="<?php echo $lcat2_piitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $lcat2_piitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBII_lasttolast' value="<?php echo $lcat2_piitotal_self_a; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicBII_last' value="<?php echo $pcat2_piitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $pcat2_piitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBII_last' value="<?php echo $pcat2_piitotal_self_a; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='current_academicBII_current' value="<?php echo $ccat2_piitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $ccat2_piitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/100)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBII_current' value="<?php echo $ccat2_piitotal_self_a; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
		                    </tr>
		                    <tr id='summ13'>
		                    	<td>Part B: III</td>
								<td>175</td>
								<td>Publications, supervisor, guide, research, consultancy, intellectual properties</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='lasttolast_academicBIII_lasttolast' value="<?php echo $lcat3_piiitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $lcat3_piiitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIII_lasttolast' value="<?php echo $lcat3_piiitotal_self_a/175*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicBIII_last' value="<?php echo $pcat3_piiitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $pcat3_piiitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIII_last' value="<?php echo $pcat3_piiitotal_self_a/175*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='current_academicBIII_current' value="<?php echo $ccat3_piiitotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $ccat3_piiitotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/175)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIII_current' value="<?php echo $ccat3_piiitotal_self_a/175*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
		                    </tr>
		                    <tr id='summ14'>
		                    	<td>Part B: IV</td>
								<td>75</td>
								<td>Co-Curricular and administrative activities outside college</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='lasttolast_academicBIV_lasttolast' value="<?php echo $lcat4_pivtotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $lcat4_pivtotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_lasttolast' value="<?php echo $lcat4_pivtotal_self_a/75*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicBIV_last' value="<?php echo $pcat4_pivtotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $pcat4_pivtotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_last' value="<?php echo $pcat4_pivtotal_self_a/75*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-1" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">(</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='current_academicBIV_current' value="<?php echo $ccat4_pivtotal_self_a; ?>" class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" disabled/> -->
											<p><?php echo $ccat4_pivtotal_self_a; ?></p>
										</div>
										<!-- <div class="col-md-4 text-left" style="margin:0;padding:0">
											<label class="col-form-label">/75)*100</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">%PI =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_current' value="<?php echo $ccat4_pivtotal_self_a/75*100; ?>" class="form-control summaryyearspi" style="width: 100%" disabled/>
										</div>
									</div> -->
								</td>
		                    </tr>
		                    <tr id='summ14'>
		                    	<!-- <td colspan="3">Average PI for total out of 500</td> -->
		                    	<td colspan="3">PI total out of 500</td>
		                    	<td>
		                    		<div class="row">
										<!-- <div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">A =</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='lasttolast_academicBIV_avgA_lasttolast' class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" value="<?php echo $PPtotal; ?>" disabled/> -->
											<p><?php echo $PP; ?></p>
										</div>
										<!-- <div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">A =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_avgA_lasttolast' value="<?php echo $PP; ?>" class="form-control summaryyearspi" style="width: 100%"  disabled/>
										</div>
									</div> -->
								</td>
								<td>
		                    		<div class="row">
										<!-- <div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">B =</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicBIV_avgA_last' class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" value="<?php echo $Atotal; ?>" disabled/> -->
											<p><?php echo $A; ?></p>
										</div>
										<!-- <div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">B =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_avgA_last' value="<?php echo $A; ?>" class="form-control summaryyearspi" style="width: 100%"  disabled/>
										</div>
									</div> -->
								</td>
								<td>
									<div class="row">
										<!-- <div class="col-md-4" style="margin:0;padding:0;padding-left:10px;padding-right:10px">
											<label class="col-form-label">C =</label>
										</div> -->
										<div class="col-md-12" style="margin:0;padding:0;padding-right:5px">
											<!-- <input type="number" step="0.01" name='last_academicBIV_avgB_last' class="form-control summaryyears" style="width: 100%;margin: 0;padding: 0" value="<?php echo $Btotal; ?>" disabled/> -->
											<p><?php echo $B; ?></p>
										</div>
										<!-- <div class="col-md-3 text-left" style="margin:0;padding:0">
											<label class="col-form-label">% /5</label>
										</div> -->
									</div><br>

									<!-- <div class="row">
										<div class="col-md-4" style="margin:0;padding:0">
											<label class="col-form-label">C =</label>
										</div>
										<div class="col-md-8" style="margin:0;padding:0;padding-right:10px"> 
											<input type="number" step="0.01" name='pi_academicBIV_avgB_last' value="<?php echo number_format((float)$B, 2, '.', ''); ?>" class="form-control summaryyearspi" style="width: 100%"  disabled/>
										</div>
									</div> -->
								</td>

							</tr>
		                    <tr id='summ15'>
		                    	<td colspan="6">
									<div class="row justify-content-center">
										<div class="col-md-12" style="margin:0;padding:0">
											<!-- <label class="col-form-label">Average PI = [ (<?php echo $lasttolastyearmf; ?> * A) + (<?php echo $previousyearmf; ?> * B) + (<?php echo $currentyearmf; ?> * C) ] = </label> -->
											<label class="col-form-label">Average PI = (A + B + C) / 3 = <?php echo number_format((float)$avgpi, 2, '.', ''); ?></label>
										</div>
										<!-- <div class="col-md-3" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='last_academicBIV_avgpi_last' class="form-control summaryyearsaverage" style="width: 100%;margin: 0;padding: 0" value='<?php echo number_format((float)$avgpi, 2, '.', ''); ?>' disabled/>
										</div>
										<div class="col-md-1 text-left" style="margin:0;padding:0">
											<label class="col-form-label">%</label>
										</div> -->
									</div>
								</td>
		                    </tr>
		                    <tr id='summ15'>
		                    	<td colspan="6">
									<div class="row justify-content-center">
										<div class="col-md-12" style="margin:0;padding:0">
											<!-- <label class="col-form-label">Average PI = [ (<?php echo $lasttolastyearmf; ?> * A) + (<?php echo $previousyearmf; ?> * B) + (<?php echo $currentyearmf; ?> * C) ] = </label> -->
											<label class="col-form-label">Average PI % = ((Average PI)/500)*100 = <?php echo number_format((float)($avgpi/5), 2, '.', ''); ?></label>
										</div>
										<!-- <div class="col-md-3" style="margin:0;padding:0;padding-right:5px">
											<input type="number" step="0.01" name='last_academicBIV_avgpi_last' class="form-control summaryyearsaverage" style="width: 100%;margin: 0;padding: 0" value='<?php echo number_format((float)$avgpi, 2, '.', ''); ?>' disabled/>
										</div>
										<div class="col-md-1 text-left" style="margin:0;padding:0">
											<label class="col-form-label">%</label>
										</div> -->
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

								for($xx=$currentyear;$xx>=($currentyear-2);$xx--)
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
												<!-- <td><?php echo basename($row['file']); ?></td> -->
												<td>Details of course/summer school/STTP/online course attended/completed/organised during academic year</td>
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
									// $sqlxxx="SELECT o1file,o2file,o3file,o4file,o5file,o6file,o7file,o8file,o9file,o10file,o11file,o12file,o13file,e1file,e2file,e3file,e4file,e5file,e6file,e7file,e8file,e9file,e10file,e11file,e12file,e13file,dps1file,dps2file,dps3file,dps4file, dps5file,dps6file,dps7file FROM part_b_cat_1 WHERE formId='$formId'";
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

									$dps1file=mysqli_real_escape_string($conn,$rowxxx['dps1file']);
									$dps2file=mysqli_real_escape_string($conn,$rowxxx['dps2file']);
									$dps3file=mysqli_real_escape_string($conn,$rowxxx['dps3file']);
									$dps4file=mysqli_real_escape_string($conn,$rowxxx['dps4file']);
									$dps5file=mysqli_real_escape_string($conn,$rowxxx['dps5file']);
									$dps6file=mysqli_real_escape_string($conn,$rowxxx['dps6file']);
									$dps7file=mysqli_real_escape_string($conn,$rowxxx['dps7file']);


									for ($x = 1; $x <= 13; $x++) {
										$file='o'.$x.'file';
										if($$file!='NAN' && $$file!='')
										{
										    ?>
										    <tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($$file); ?></td> -->
												<td>ESE Paper Setting (Odd Semester)</td>
												<td><a href="viewfile.php?location=<?php echo $$file; ?>" target="_blank">View File</a></td>
											</tr>
										    <?php
										    $counter+=1;
										}
									} 

									for ($x = 1; $x <= 13; $x++) {
										$file='e'.$x.'file';
										if($$file!='NAN' && $$file!='')
										{
										    ?>
										    <tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($$file); ?></td> -->
												<td>ESE Paper Setting (Even Semester)</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Courses Taught (Even Semester)</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Courses Taught (Odd Semester)</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Details of additional resource provided to the students to enrich course content/syllabus</td>
												<td><a href="viewfile.php?location=<?php echo $file; ?>" target="_blank">View File</a></td>
											</tr>
											<?php
											$counter+=1;
										}
									}

									if($dps1file!='NAN' && $dps1file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Problem based learning, case studies, group discussions, activity based learning etc</td>
											<td><a href="viewfile.php?location=<?php echo $dps1file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
									}
									if($dps2file!='NAN' && $dps2file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board</td>
											<td><a href="viewfile.php?location=<?php echo $dps2file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
									}
									if($dps3file!='NAN' && $dps3file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Developing and imparting Remedial / Bridge Courses</td>
											<td><a href="viewfile.php?location=<?php echo $dps3file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
									}
									if($dps4file!='NAN' && $dps4file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Developing and imparting soft skills / communication skills / personality / development courses / modules</td>
											<td><a href="viewfile.php?location=<?php echo $dps4file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
									}
									if($dps5file!='NAN' && $dps5file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Developing and imparting specialized teaching-learning programmes in physical education, library; innovative compositions and creations in music, performing and visual arts and other tradition areas</td>
											<td><a href="viewfile.php?location=<?php echo $dps5file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
									}
									if($dps6file!='NAN' && $dps6file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Audit courses taken (given name/semester/term)</td>
											<td><a href="viewfile.php?location=<?php echo $dps6file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
									}
									if($dps7file!='NAN' && $dps7file!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td>Other files</td>
											<td><a href="viewfile.php?location=<?php echo $dps7file; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
										$counter+=1;
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Extension, Co-Curricular and Field based activities / internships in college</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>College administration/organization member/committee member/NBA/NAAC of college</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Extra-curricular and social activities in college</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD</td>
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
									<?php

									if($phdfile!='NAN' && $phdfile!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<!-- <td><?php echo basename($phdfile); ?></td> -->
											<td>Ph.D. Attachments</td>
											<td><a href="viewfile.php?location=<?php echo $phdfile; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
									}
									if($mtechfile!='NAN' && $mtechfile!='')
									{
										?>									
										<tr>
											<td><?php echo $counter; ?></td>
											<!-- <td><?php echo basename($mtechfile); ?></td> -->
											<td>M. Tech. Attachments</td>
											<td><a href="viewfile.php?location=<?php echo $mtechfile; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
									}
									if($btechfile!='NAN' && $btechfile!='')
									{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<!-- <td><?php echo basename($btechfile); ?></td> -->
											<td>B. Tech. Attachments</td>
											<td><a href="viewfile.php?location=<?php echo $btechfile; ?>" target="_blank">View File</a></td>
										</tr>
										<?php
									}
									?>

									<?php

									// part_b_cat_3_pp
									$sql="SELECT ppfile FROM part_b_cat_3_pp WHERE formId='$formId'";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_assoc($result))
									{
										$file=$row['ppfile'];
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Published Papers In Peer Reviewed Journals</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Published Papers in International/National Conference Abroad</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Published Papers in International/National Conference in India</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Books/Articles/Chapters published in Books</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Patent/Intellectual property filed/received</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college</td>
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
										if($file!='NAN' && $file!='')
										{
											?>
											<tr>
												<td><?php echo $counter; ?></td>
												<!-- <td><?php echo basename($file); ?></td> -->
												<td>Please give details of any other credential, significant contributions, and awards received etc. which are not mentioned. </td>
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

		if($committee!=1 && $hod!=1)
		{
			?>
			<hr style="border: 0.5px solid #c8c8c8">

			<div class="row form-inline justify-content-center">

				<div class="col">
				<!-- <button type="submit" class="btn btn-success" id="part-a-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
	  			SUBMIT 
				</button> -->
					<button type="button" class="btn btn-primary part-a-print-form" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
		  			PRINT 
					</button>					
				</div>
			</div><br>
			<!-- </form> -->
			<?php
		}
		?>

		<?php

		}

		?>
		<hr>
		<?php
		
		if($committee==1 || $hod==1)
		{

		$recommended=1;
		$sqll="SELECT recommend FROM recommend_for_cas WHERE currentyear='$currentyear' AND facultyId='$userId'";
		$resultl=mysqli_query($conn, $sqll);
		if(mysqli_num_rows($resultl)>0)
		{
			$rowl=mysqli_fetch_assoc($resultl);
			if($rowl['recommend']==0)
			{
				//means not recommended
				$recommended=0;
			}
		}
		else
		{
			$recommended=-1;
		}

		// echo 'recommended='.$recommended;


		?>	

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ EVALUATION BY THE HOD AND COMMITTEE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		
		<?php

		$sqlpartA="SELECT parta_gpi_pi_hod_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$cparta_gpi_pi_hod_a=$rowpartA['parta_gpi_pi_hod_a'];

		$sqlpartA="SELECT parta_gpi_pi_hod_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pparta_gpi_pi_hod_a=$rowpartA['parta_gpi_pi_hod_a'];

		$sqlpartA="SELECT parta_gpi_pi_hod_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lparta_gpi_pi_hod_a=$rowpartA['parta_gpi_pi_hod_a'];

		// echo "current=".$sqlpartA.",".$pparta_gpi_pi_self_a;
		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat1_pitotal_hod_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat1_pitotal_hod_a=$rowpartA['cat1_pitotal_hod_a'];

		$sqlpartA="SELECT cat1_pitotal_hod_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat1_pitotal_hod_a=$rowpartA['cat1_pitotal_hod_a'];

		$sqlpartA="SELECT cat1_pitotal_hod_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat1_pitotal_hod_a=$rowpartA['cat1_pitotal_hod_a'];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat2_piitotal_hod_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat2_piitotal_hod_a=$rowpartA['cat2_piitotal_hod_a'];

		$sqlpartA="SELECT cat2_piitotal_hod_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat2_piitotal_hod_a=$rowpartA['cat2_piitotal_hod_a'];

		$sqlpartA="SELECT cat2_piitotal_hod_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat2_piitotal_hod_a=$rowpartA['cat2_piitotal_hod_a'];

		////////////////////////////////////////////////////////////

		$sqlpartA="SELECT cat3_piiitotal_hod_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat3_piiitotal_hod_a=$rowpartA['cat3_piiitotal_hod_a'];

		$sqlpartA="SELECT cat3_piiitotal_hod_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat3_piiitotal_hod_a=$rowpartA['cat3_piiitotal_hod_a'];

		$sqlpartA="SELECT cat3_piiitotal_hod_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat3_piiitotal_hod_a=$rowpartA['cat3_piiitotal_hod_a'];


		/////////////////////////////////////////////////////////////////


		$sqlpartA="SELECT cat4_pivtotal_hod_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$ccat4_pivtotal_hod_a=$rowpartA['cat4_pivtotal_hod_a'];

		$sqlpartA="SELECT cat4_pivtotal_hod_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$pcat4_pivtotal_hod_a=$rowpartA['cat4_pivtotal_hod_a'];

		$sqlpartA="SELECT cat4_pivtotal_hod_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
		$resultpartA=mysqli_query($conn,$sqlpartA);
		$rowpartA=mysqli_fetch_assoc($resultpartA);

		$lcat4_pivtotal_hod_a=$rowpartA['cat4_pivtotal_hod_a'];


		///////////////////////////////////////////////////////////////
		//calculating percentages
		// $PPpartAhod=number_format($lparta_gpi_pi_hod_a/50*100,2);
		// $PPpartBcat1hod=number_format(($lcat1_pitotal_hod_a/100)*100,2);
		// $PPpartBcat2hod=number_format($lcat2_piitotal_hod_a,2);
		// $PPpartBcat3hod=number_format($lcat3_piiitotal_hod_a/175*100,2);
		// $PPpartBcat4hod=number_format($lcat4_pivtotal_hod_a/75*100,2);

		$PPpartAhod=$lparta_gpi_pi_hod_a;
		$PPpartBcat1hod=$lcat1_pitotal_hod_a;
		$PPpartBcat2hod=$lcat2_piitotal_hod_a;
		$PPpartBcat3hod=$lcat3_piiitotal_hod_a;
		$PPpartBcat4hod=$lcat4_pivtotal_hod_a;

		// $PPtotal= ($PPpartAhod + $PPpartBcat1hod + $PPpartBcat2hod + $PPpartBcat3hod + $PPpartBcat4hod);
		// $PPhod=number_format($PPtotal/5, 2);

		$PPhod= ($PPpartAhod + $PPpartBcat1hod + $PPpartBcat2hod + $PPpartBcat3hod + $PPpartBcat4hod);

		// $PpartAhod=number_format($pparta_gpi_pi_hod_a/50*100,2);
		// $PpartBcat1hod=number_format(($pcat1_pitotal_hod_a/100)*100,2);
		// $PpartBcat2hod=number_format($pcat2_piitotal_hod_a,2);
		// $PpartBcat3hod=number_format($pcat3_piiitotal_hod_a/175*100,2);
		// $PpartBcat4hod=number_format($pcat4_pivtotal_hod_a/75*100,2);

		$PpartAhod=$pparta_gpi_pi_hod_a;
		$PpartBcat1hod=$pcat1_pitotal_hod_a;
		$PpartBcat2hod=$pcat2_piitotal_hod_a;
		$PpartBcat3hod=$pcat3_piiitotal_hod_a;
		$PpartBcat4hod=$pcat4_pivtotal_hod_a;

		// $Atotal= ($PpartAhod + $PpartBcat1hod + $PpartBcat2hod + $PpartBcat3hod + $PpartBcat4hod);
		// $Ahod=number_format($Atotal/5, 2);

		$Ahod= ($PpartAhod + $PpartBcat1hod + $PpartBcat2hod + $PpartBcat3hod + $PpartBcat4hod);

		// $CpartAhod=number_format($cparta_gpi_pi_hod_a/50*100,2);
		// $CpartBcat1hod=number_format($ccat1_pitotal_hod_a,2);
		// $CpartBcat2hod=number_format($ccat2_piitotal_hod_a,2);
		// $CpartBcat3hod=number_format($ccat3_piiitotal_hod_a/175*100,2);
		// $CpartBcat4hod=number_format($ccat4_pivtotal_hod_a/75*100,2);

		$CpartAhod=$cparta_gpi_pi_hod_a;
		$CpartBcat1hod=$ccat1_pitotal_hod_a;
		$CpartBcat2hod=$ccat2_piitotal_hod_a;
		$CpartBcat3hod=$ccat3_piiitotal_hod_a;
		$CpartBcat4hod=$ccat4_pivtotal_hod_a;

		// $Btotal = ($CpartAhod +	$CpartBcat1hod +	$CpartBcat2hod + $CpartBcat3hod +	$CpartBcat4hod);
		// $Bhod=number_format($Btotal/5, 2);

		$Bhod = ($CpartAhod +	$CpartBcat1hod +	$CpartBcat2hod + $CpartBcat3hod +	$CpartBcat4hod);

		// $avgpihod=number_format(0.25*$Ahod + 0.75*$Bhod, 2);
		// $avgpihod=number_format($lasttolastyearmf*$PPhod + $previousyearmf*$Ahod + $currentyearmf*$Bhod, 2);

		$avgpihod=number_format(($PPhod +$Ahod + $Bhod)/3, 2);

		// $sqlss="SELECT hodremarksA, hodremarksBcat1, hodremarksBcat2, hodremarksBcat3, hodremarksBcat4, hodremarksavgpi, hodremarkscum FROM summary_table WHERE year='$currentyear' AND facultyId='$userId'";
		$sqlss="SELECT hodremarkscum FROM summary_table WHERE year='$currentyear' AND facultyId='$userId'";
		$resultss=mysqli_query($conn,$sqlss);
		$rowss=mysqli_fetch_assoc($resultss);
		// $hodremarksA=$rowss['hodremarksA'];
		// $hodremarksBcat1=$rowss['hodremarksBcat1'];
		// $hodremarksBcat2=$rowss['hodremarksBcat2'];
		// $hodremarksBcat3=$rowss['hodremarksBcat3'];
		// $hodremarksBcat4=$rowss['hodremarksBcat4'];
		// $hodremarksavgpi=$rowss['hodremarksavgpi'];
		$hodremarkscum=$rowss['hodremarkscum'];

		$sqlsx="UPDATE summary_table SET hodPP='$PPhod', hodA='$Ahod', hodB='$Bhod', hod_avgpi='$avgpihod' WHERE facultyId='$userId' AND year='$currentyear'";
		$resultx=mysqli_query($conn, $sqlsx);

		//if recommended by the committee then do this
		// if($committee==1 && $recommended==1)
		if($committee==1)
		{
			$sqlpartA="SELECT parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$currentyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$cparta_gpi_pi_committee_a=$rowpartA['parta_gpi_pi_committee_a'];

			$sqlpartA="SELECT parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$previousyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$pparta_gpi_pi_committee_a=$rowpartA['parta_gpi_pi_committee_a'];

			$sqlpartA="SELECT parta_gpi_pi_committee_a FROM part_a_gpi WHERE facultyId='$userId' AND year='$lasttolastyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$lparta_gpi_pi_committee_a=$rowpartA['parta_gpi_pi_committee_a'];

			// echo "current=".$sqlpartA.",".$pparta_gpi_pi_self_a;
			///////////////////////////////////////////////////////////////////////////////////////////////////////////

			$sqlpartA="SELECT cat1_pitotal_committee_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$currentyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$ccat1_pitotal_committee_a=$rowpartA['cat1_pitotal_committee_a'];

			$sqlpartA="SELECT cat1_pitotal_committee_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$previousyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$pcat1_pitotal_committee_a=$rowpartA['cat1_pitotal_committee_a'];

			$sqlpartA="SELECT cat1_pitotal_committee_a FROM partb_cat1_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$lcat1_pitotal_committee_a=$rowpartA['cat1_pitotal_committee_a'];

			///////////////////////////////////////////////////////////////////////////////////////////////////////////

			$sqlpartA="SELECT cat2_piitotal_committee_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$currentyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$ccat2_piitotal_committee_a=$rowpartA['cat2_piitotal_committee_a'];

			$sqlpartA="SELECT cat2_piitotal_committee_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$previousyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$pcat2_piitotal_committee_a=$rowpartA['cat2_piitotal_committee_a'];

			$sqlpartA="SELECT cat2_piitotal_committee_a FROM partb_cat2_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$lcat2_piitotal_committee_a=$rowpartA['cat2_piitotal_committee_a'];

			////////////////////////////////////////////////////////////

			$sqlpartA="SELECT cat3_piiitotal_committee_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$currentyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$ccat3_piiitotal_committee_a=$rowpartA['cat3_piiitotal_committee_a'];

			$sqlpartA="SELECT cat3_piiitotal_committee_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$previousyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$pcat3_piiitotal_committee_a=$rowpartA['cat3_piiitotal_committee_a'];

			$sqlpartA="SELECT cat3_piiitotal_committee_a FROM partb_cat3_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$lcat3_piiitotal_committee_a=$rowpartA['cat3_piiitotal_committee_a'];

			/////////////////////////////////////////////////////////////////


			$sqlpartA="SELECT cat4_pivtotal_committee_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$currentyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$ccat4_pivtotal_committee_a=$rowpartA['cat4_pivtotal_committee_a'];

			$sqlpartA="SELECT cat4_pivtotal_committee_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$previousyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$pcat4_pivtotal_committee_a=$rowpartA['cat4_pivtotal_committee_a'];

			$sqlpartA="SELECT cat4_pivtotal_committee_a FROM partb_cat4_pi WHERE facultyId='$userId' AND year='$lasttolastyear'";
			$resultpartA=mysqli_query($conn,$sqlpartA);
			$rowpartA=mysqli_fetch_assoc($resultpartA);

			$lcat4_pivtotal_committee_a=$rowpartA['cat4_pivtotal_committee_a'];

			///////////////////////////////////////////////////////////////
			//calculating percentages
			// $PPpartAcommittee=number_format($lparta_gpi_pi_committee_a/50*100,2);
			// $PPpartBcat1committee=number_format(($lcat1_pitotal_committee_a/100)*100,2);
			// $PPpartBcat2committee=number_format($lcat2_piitotal_committee_a,2);
			// $PPpartBcat3committee=number_format($lcat3_piiitotal_committee_a/175*100,2);
			// $PPpartBcat4committee=number_format($lcat4_pivtotal_committee_a/75*100,2);

			$PPpartAcommittee=$lparta_gpi_pi_committee_a;
			$PPpartBcat1committee=$lcat1_pitotal_committee_a;
			$PPpartBcat2committee=$lcat2_piitotal_committee_a;
			$PPpartBcat3committee=$lcat3_piiitotal_committee_a;
			$PPpartBcat4committee=$lcat4_pivtotal_committee_a;

			// $PPtotal= ($PPpartAcommittee + $PPpartBcat1committee + $PPpartBcat2committee + $PPpartBcat3committee + $PPpartBcat4committee);
			// $PPcommittee=number_format($PPtotal/5, 2);

			$PPcommittee=($PPpartAcommittee + $PPpartBcat1committee + $PPpartBcat2committee + $PPpartBcat3committee + $PPpartBcat4committee);

			// $PpartAcommittee=number_format($pparta_gpi_pi_committee_a/50*100,2);
			// $PpartBcat1committee=number_format(($pcat1_pitotal_committee_a/100)*100,2);
			// $PpartBcat2committee=number_format($pcat2_piitotal_committee_a,2);
			// $PpartBcat3committee=number_format($pcat3_piiitotal_committee_a/175*100,2);
			// $PpartBcat4committee=number_format($pcat4_pivtotal_committee_a/75*100,2);

			$PpartAcommittee=$pparta_gpi_pi_committee_a;
			$PpartBcat1committee=$pcat1_pitotal_committee_a;
			$PpartBcat2committee=$pcat2_piitotal_committee_a;
			$PpartBcat3committee=$pcat3_piiitotal_committee_a;
			$PpartBcat4committee=$pcat4_pivtotal_committee_a;

			// $Atotal= ($PpartAcommittee + $PpartBcat1committee + $PpartBcat2committee + $PpartBcat3committee + $PpartBcat4committee);
			// $Acommittee=number_format($Atotal/5, 2);

			$Acommittee= ($PpartAcommittee + $PpartBcat1committee + $PpartBcat2committee + $PpartBcat3committee + $PpartBcat4committee);

			// $CpartAcommittee=number_format($cparta_gpi_pi_committee_a/50*100,2);
			// $CpartBcat1committee=number_format($ccat1_pitotal_committee_a,2);
			// $CpartBcat2committee=number_format($ccat2_piitotal_committee_a,2);
			// $CpartBcat3committee=number_format($ccat3_piiitotal_committee_a/175*100,2);
			// $CpartBcat4committee=number_format($ccat4_pivtotal_committee_a/75*100,2);

			$CpartAcommittee=$cparta_gpi_pi_committee_a;
			$CpartBcat1committee=$ccat1_pitotal_committee_a;
			$CpartBcat2committee=$ccat2_piitotal_committee_a;
			$CpartBcat3committee=$ccat3_piiitotal_committee_a;
			$CpartBcat4committee=$ccat4_pivtotal_committee_a;

			// $Btotal = ($CpartAcommittee +	$CpartBcat1committee +	$CpartBcat2committee + $CpartBcat3committee +	$CpartBcat4committee);
			// $Bcommittee=number_format($Btotal/5, 2);

			$Bcommittee = ($CpartAcommittee +	$CpartBcat1committee +	$CpartBcat2committee + $CpartBcat3committee +	$CpartBcat4committee);

			// $avgpicommittee=number_format(0.25*$Acommittee + 0.75*$Bcommittee, 2);
			$avgpicommittee=number_format(($PPcommittee + $Acommittee + $Bcommittee)/3, 2);

			// $sqlss="SELECT committeeremarksA, committeeremarksBcat1, committeeremarksBcat2, committeeremarksBcat3, committeeremarksBcat4, committeeremarksavgpi, committeeremarkscum, final_recomm FROM summary_table WHERE year='$currentyear' AND facultyId='$userId'";
			$sqlss="SELECT final_recomm FROM summary_table WHERE year='$currentyear' AND facultyId='$userId'";
			$resultss=mysqli_query($conn,$sqlss);
			$rowss=mysqli_fetch_assoc($resultss);
			// $committeeremarksA=$rowss['committeeremarksA'];
			// $committeeremarksBcat1=$rowss['committeeremarksBcat1'];
			// $committeeremarksBcat2=$rowss['committeeremarksBcat2'];
			// $committeeremarksBcat3=$rowss['committeeremarksBcat3'];
			// $committeeremarksBcat4=$rowss['committeeremarksBcat4'];
			// $committeeremarksavgpi=$rowss['committeeremarksavgpi'];
			// $committeeremarkscum=$rowss['committeeremarkscum'];
			$final_recomm=$rowss['final_recomm'];

			$sqlsx="UPDATE summary_table SET committeePP='$PPcommittee', committeeA='$Acommittee', committeeB='$Bcommittee', committee_avgpi='$avgpicommittee' WHERE facultyId='$userId' AND year='$currentyear'";
			$resultx=mysqli_query($conn, $sqlsx);
		}

		?>
		<div class="admin-table">		
		<input type="hidden" name="year" id="year" value="<?php echo $currentyear; ?>">
		<input type="hidden" name="userId" id="userId" value="<?php echo $userId; ?>">
		<input type="hidden" name="alreadybegun" id="alreadybegun" value="0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p><b>Evaluation by the head of department and committee (for office use)</b></p>
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
							<th class="text-center" rowspan="2">Item</th>
							<th class="text-center" colspan="3">API given by Faculty Member</th>
							<th class="text-center" colspan="3">API after verfication by HOD</th>
							<!-- <th class="text-center" rowspan="2" width="15%">Remarks by HOD</th> -->
							<?php
							// if($committee==1 && $recommended==1)
							if($committee==1)
							{
								?>
								<th class="text-center" colspan="3">Final Score by Screening Cum Evaluation/Selection Committee</th>
								<!-- <th class="text-center" rowspan="2" width="15%">Remarks by Committee</th> -->
								<?php
							}
							?>
						</tr>

						<tr>
						<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th> 
						<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
						<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
						<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th> 
						<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
						<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
						
						<?php
						// if($committee==1 && $recommended==1)
						if($committee==1)
						{
							?>
							<th><?php echo $previousyear-2; ?>-<?php echo $previousyear-1; ?></th>
							<th><?php echo $previousyear-1; ?>-<?php echo $previousyear; ?></th>
							<th><?php echo $previousyear; ?>-<?php echo $currentyear; ?></th>
							<?php
						}
						?>
						</tr>
						<tbody>
							<tr>
								<td>Part A</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartAself; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartAself; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartAself; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartAhod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartAhod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartAhod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarksA; ?>" id="hodremarksA" name="hodremarksA" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PPpartAcommittee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PpartAcommittee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $CpartAcommittee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarksA; ?>" id="committeeremarksA" name="committeeremarksA" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
							</tr>
		                    <tr>
		                    	<td>Part B: I</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat1self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat1self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat1self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat1hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat1hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat1hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarksBcat1; ?>" id="hodremarksBcat1" name="hodremarksBcat1" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PPpartBcat1committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PpartBcat1committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $CpartBcat1committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarksBcat1; ?>" id="committeeremarksBcat1" name="committeeremarksBcat1" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>
		                    <tr>
		                    	<td>Part B: II</td>
		                    	<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat2self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat2self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat2self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat2hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat2hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat2hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarksBcat2; ?>" id="hodremarksBcat2" name="hodremarksBcat2" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PPpartBcat2committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PpartBcat2committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $CpartBcat2committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarksBcat2; ?>" id="committeeremarksBcat2" name="committeeremarksBcat2" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>
		                    <tr>
		                    	<td>Part B: III</td>
		                    	<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat3self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat3self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat3self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat3hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat3hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat3hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarksBcat3; ?>" id="hodremarksBcat3" name="hodremarksBcat3" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PPpartBcat3committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PpartBcat3committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $CpartBcat3committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarksBcat3; ?>" id="committeeremarksBcat3" name="committeeremarksBcat3" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>
		                    <tr>
		                    	<td>Part B: IV</td>
		                    	<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat4self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat4self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat4self; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPpartBcat4hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PpartBcat4hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $CpartBcat4hod; ?>" step="0.01" class="form-control" style="width: 100%;margin: 0;padding: 0" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarksBcat4; ?>" id="hodremarksBcat4" name="hodremarksBcat4" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PPpartBcat4committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PpartBcat4committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $CpartBcat4committee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarksBcat4; ?>" id="committeeremarksBcat4" name="committeeremarksBcat4" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>
		                    <tr>
		                    	<td colspan="1">
			                    	<div class="row justify-content-center">
			                    		<label class="col-form-label">PI total out of 500</label>
			                    	</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PP; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $A; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $B; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $PPhod; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $Ahod; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo $Bhod; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarksavgpi; ?>" id="hodremarksavgpi" name="hodremarksavgpi" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $PPcommittee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $Acommittee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo $Bcommittee; ?>" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarksavgpi; ?>" id="committeeremarksavgpi" name="committeeremarksavgpi" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>

		                    <tr>
		                    	<td colspan="1">
									<div class="row justify-content-center">
										<label class="col-form-label">Average PI</label>
									</div>
								</td>
								<td colspan="3">
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo number_format((float)$avgpi, 2, '.', ''); ?>" class="form-control summaryyearscum" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td colspan="3">
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo number_format((float)$avgpihod, 2, '.', ''); ?>" class="form-control summaryyearscum" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarkscum; ?>" id="hodremarkscum" name="hodremarkscum" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td colspan="3">
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo number_format((float)$avgpicommittee, 2, '.', ''); ?>" class="form-control summaryyearscum" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarkscum; ?>" id="committeeremarkscum" name="committeeremarkscum" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>

		                    <tr>
		                    	<td colspan="1">
									<div class="row justify-content-center">
										<label class="col-form-label">Average PI %</label>
									</div>
								</td>
								<td colspan="3">
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo number_format((float)($avgpi/5), 2, '.', ''); ?>" class="form-control summaryyearscum" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<td colspan="3">
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="number" value="<?php echo number_format((float)($avgpihod/5), 2, '.', ''); ?>" class="form-control summaryyearscum" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
									</div>
								</td>
								<!-- <td>
									<div class="col-md-12" style="margin:0;padding:0">
										<input type="text" value="<?php echo $hodremarkscum; ?>" id="hodremarkscum" name="hodremarkscum" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
									</div>
								</td> -->
								<?php
								// if($committee==1 && $recommended==1)
								if($committee==1)
								{
									?>
									<td colspan="3">
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="number" value="<?php echo number_format((float)($avgpicommittee/5), 2, '.', ''); ?>" class="form-control summaryyearscum" style="width: 100%;margin: 0;padding: 0" maxlength="200" disabled/>
										</div>
									</td>
									<!-- <td>
										<div class="col-md-12" style="margin:0;padding:0">
											<input type="text" value="<?php echo $committeeremarkscum; ?>" id="committeeremarkscum" name="committeeremarkscum" class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" />
										</div>
									</td> -->
									<?php
								}
								?>
		                    </tr>
		                </tbody>
					</table>
					</div>
				</div>
			</div>	
		</div>

		<br>

		<div class="hodrecommendationdiv" id="hodrecommendationdiv">
			<div class="row justify-content-center">
				<div class="col-md-3 text-right">
					<label class="col-form-label"><b>HOD Remarks:</b></label>
				</div>
				<div class="col-md-7">
					<textarea class="form-control mx-auto summaryhodrecommend" id="hodremarkscum" name="hodremarkscum" maxlength="200"><?php echo $hodremarkscum; ?></textarea><br>
				</div>
			</div>
			<?php

			if($hod==1)
			{
				if($recommended==-1)
				{
					?>
					<form class="summary-recommend-form" action="" method="POST">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<div class="row" style="border:1px solid #cccccc; border-radius:5px; padding-top: 10px;padding-bottom: 10px">
									<div class="col-md-5 custom-control custom-radio">
										<input class="custom-control-input casrecommendradio" type="radio" name="casrecommend" id="casrecommended" value="1" checked>
										<label class="custom-control-label" for="casrecommended">
										    Recommend For CAS
										</label>
									</div>
									<div class="col-md-5 custom-control custom-radio">
										<input class="custom-control-input casrecommendradio" type="radio" name="casrecommend" id="casnotrecommended" value="0">
										<label class="custom-control-label" for="casnotrecommended">
										    Don't Recommend For CAS
										</label>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-success" id="summary-recommend-submit-form" data-toggle="tooltip" data-placement="bottom" title="Submit your recommendation for this faculty.">
							  			SUBMIT 
										</button>
									</div>
								</div>
							</div>
							
						</div>
					</form>
					<br>
					<?php
				}
				else
				{
					if($recommended==1)
					{
						?>
						<p id="recommendedforcasp" class="card-text"><img src="checked.png" style="width:32px"> This faculty member has been recommended for CAS by the HOD.</p><br>	
						<?php
					}
					else
					{
						?>
						<p id="notrecommendedforcasp" class="card-text"><img src="error.png" style="width:32px"> This faculty member has not been recommended for CAS by the HOD.</p><br>
						<?php
					}
				}
			}
			?>
		</div>
		
		<?php

		$casapprovalsubmit=0;

		if($committee==1)
		{
			/*
			if($recommended==1)
			{

				?>
				<form class="summary_comm_form" action="" method="POST">
				<p id="recommendedforcasp" class="card-text"><img src="checked.png" style="width:32px"> This faculty member has been recommended for CAS by the HOD.</p><br>	
				*/
				?>
				<form class="summary_comm_form" action="" method="POST">
				<div class="row justify-content-center">
					<div class="col-md-3 text-right">
						<label class="col-form-label"><b>Final Remarks by Committee:</b></label>
					</div>
					<div class="col-md-7">
						<!-- <input type="text" value="<?php echo $final_recomm; ?>" name='final_recomm' id='final_recomm' class="form-control" style="width: 100%;margin: 0;padding: 0" maxlength="200" /> -->
						<textarea cols="50" name='final_recomm' id='final_recomm' class="form-control summaryhodrecommend" style="margin: 0;padding: 0" maxlength="200"><?php echo $final_recomm; ?></textarea> 
					</div>
				</div><br>

				<?php

				$sqla="SELECT cas_approved FROM cas_approval_table WHERE facultyId='$userId' AND currentyear='$currentyear'";
				$resulta=mysqli_query($conn, $sqla);
				if(mysqli_num_rows($resulta)==0)
				{
					?>

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

					<?php
				}
				else
				{
					$casapprovalsubmit=1;
					$rowsa=mysqli_fetch_assoc($resulta);
					if($rowsa['cas_approved']=='Approved')
					{
						?>
						<p class="card-text"><img src="checked.png" style="width:32px"> This CAS application has been approved.</p>		
						<?php
					}
					else
					{
						?>
						<p class="card-text"><img src="error.png" style="width:32px"> This CAS application has not been approved.</p>
						<?php
					}
				}
			/*
			}
			else
			{
				?>
				<p id="notrecommendedforcasp" class="card-text"><img src="error.png" style="width:32px"> This faculty member has not been recommended for CAS by the HOD.</p><br>
				<?php
			}
			*/
			
		}
		?>

		<div class="row form-inline justify-content-center">

			<div class="col">
				<?php
				if($committee==1)
				{
					// if($recommended==1 && $casapprovalsubmit==0)
					if($casapprovalsubmit==0)
					{
						?>
						<div class="loader" style="margin:0px auto 15px auto;display: none"></div>
						<button type="submit" class="btn btn-success" id="summary-comm-submit-form" data-toggle="tooltip" data-placement="bottom" title="Clicking this button will automatically save whatever information you have uploaded so far.">
			  			SUBMIT 
						</button>
						</form>
						<?php
					}
				}

				?>

				<button type="button" class="btn btn-primary part-a-print-form" onclick="myFunction()" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>

				<!-- <button type="button" class="btn btn-primary" onclick="printJS('summary-container', 'html')" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
				    Print Form
				 </button> -->
			</div>
		</div><br>

		<!-- </form> -->
		</div>

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
		// getSummaryData();
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
		$(".part-a-print-form").toggle();
		$("#sidebar").toggle();
		
	  	// window.print();
	  	$("#summary-container").printThis();

	  	$("#summary-comm-submit-form").toggle();
		$(".part-a-print-form").toggle();
		$("#sidebar").toggle();
	}
	</script>

</body>
</html>

<?php

}

?>