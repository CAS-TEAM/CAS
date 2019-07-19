<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Self Appraisal Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- general.js import -->
	<script type="text/javascript" src="general.js"></script>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

	<!-- animate css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- printThis files -->
	<script src="printThis.js"></script>
	<br>
	
    </head>

<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #;
}

</style>

    <body>

    <?php

    include 'dbh.php';

    $userId=mysqli_real_escape_string($conn,$_GET['id']);
	$year=mysqli_real_escape_string($conn,$_GET['year']);

	$sqlx="SELECT faculty_name, email, date_of_joining, ecode, mobileno FROM faculty_table WHERE id='$userId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);
	$faculty_name=$rowx['faculty_name'];
	$email=$rowx['email'];
	$dojkjsce=$rowx['date_of_joining'];
	$ecode=$rowx['ecode'];
	$mobileno=$rowx['mobileno'];

	$sql="SELECT * FROM part_a_table WHERE year='$year' AND faculty_id='$userId'";
	$result=mysqli_query($conn,$sql);		
	$row=mysqli_fetch_assoc($result);

	$praddr=$row['praddr'];
	$peaddr=$row['peaddr'];
	$highq=$row['highq'];
	$dob=$row['dob'];
	$desi=$row['desi'];
	$nameo=$row['nameo'];
	$pdesi=$row['pdesi'];
	$pscale=$row['pscale'];
	$pbg=$row['pbg'];
	$lastdesisel=$row['lastdesisel'];
	$promowef=$row['promowef'];
	$cscales=$row['cscales'];
	$cbasics=$row['cbasics'];
	$lastdesicas=$row['lastdesicas'];
	$promowefcas=$row['promowefcas'];
	$cscalecas=$row['cscalecas'];
	$cbasiccas=$row['cbasiccas'];
	$customRadioInline1=$row['customRadioInline1'];
	$nameofdegree=$row['nameofdegree'];
	$institute=$row['institute'];

	$formId=$row['id'];

	// $sql1="SELECT * FROM part_a_doc WHERE formId='$formId' ORDER BY srno ASC";
	// $result1=mysqli_query($conn,$sql1);
	// if(mysqli_num_rows($result1)>0)
	// {
	// 	while($row1=mysqli_fetch_assoc($result1))
	// 	{
	// 		$srno=$row1['srno'];
	// 		$course=$row1['course'];
	// 		$days=$row1['days'];
	// 		$agency=$row1['agency'];
	// 		$rolee=$row1['rolee'];
	// 	}
	// }

    ?>
    
    <div class="row justify-content-center">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-2">
					<img src="img/logo3.jpg" style="width: 70%">
				</div>
				<div class="col-md-8">
				    <h2 class="heading" style="font-size:18px; margin-top: 15px"><b>K. J. Somaiya College of Engineering, Mumbai - 77</b></h2>
					<h2 class="heading text-center" style="font-size:15px">(Autonomous College Affiliated to University of Mumbai)</h2>
				</div>
				<div class="col-md-2">
					<img src="img/logo1.jpg" style="width: 100%">
				</div>
			</div>
		</div>
	</div>
	<h2 class="heading" style="text-align: center;font-size: 22px"><b>'Part A: GENERAL INFORMATION'</b><br> Faculty Name: <?php echo $faculty_name; ?> | Academic Year: <?php echo ($year-1).'-'.($year); ?></h2>  

	<div class="container" id="part-a-container" style="border:1px solid black;width: 70%;margin-left: 200px">
		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Name :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $faculty_name; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Emp. Code :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $ecode; ?></p>
					</div>
				</div>
    		</div>
		</div>		

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Present Address :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $praddr; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Permanent Address :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $peaddr; ?></p>
					</div>
				</div>
    		</div>
		</div>		

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Email :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $email; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Mobile No. :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $mobileno; ?></p>
					</div>
				</div>
    		</div>
		</div>		

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Highest Qualification:</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $highq; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Date of Birth :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $dob; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<hr>

		<div class="row">
    		<div class="col-md-6 text-left">
    			<p style="font-size: 18px"><b>Details of last service i.e before joining KJSCE:-</b></p>
    		</div>
    	</div>

    		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Designation:</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $desi; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Name of Organization:</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $nameo; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Present Designation:</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $pdesi; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">DOJ KJSCE :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $dojkjsce; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Present Scale :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $pscale; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Present basic and grade pay :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $pbg; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<hr>

		<div class="row">
    		<div class="col-md-5 text-left">
    			<p style="font-size: 18px"><b>Details of last promotion by selection:-</b></p>
    		</div>
    	</div>

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Designation:</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $lastdesisel; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Promotion w.e.f :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $promowef; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Changed Scale :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $cscales; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Changed basic and grade pay :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $cbasics; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<hr>

		<div class="row">
    		<div class="col-md-5 text-left">
    			<p style="font-size: 18px"><b>Details of last promotion through CAS:-</b></p>
    		</div>
    	</div>

    	<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Designation:</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $lastdesicas; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Promotion w.e.f :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $promowefcas; ?></p>
					</div>
				</div>
    		</div>
		</div>

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Changed Scale :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $cscalecas; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Changed basic and grade pay :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $cbasiccas; ?></p>
					</div>
				</div>
    		</div>
		</div>

    	<hr>


		<div class="row">
			<div class="col-md-6">
				<p>Whether acquired any fresh educational qualification during said academic year?</p>
			</div>
	    	<div class="col-md-6 text-left">
				<div class="custom-control custom-radio custom-control-inline">
					<p><?php echo $customRadioInline1; ?>  </p>
					<p>If yes: 20 PI</p>
				</div>
			</div>
		</div>
		
		<hr>

		<div class="row">
			<div class="col text-left">
				<p>If yes, details of qualification:-</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
    			<div class="form-group row">
    				<div class="col-3">
    					<label class="col-form-label">Name of Degree :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					   <p class="col-form-label"><?php echo $nameofdegree; ?></p>
					</div>
				</div>							
    		</div>
    		<div class="col-md-6">
    			<div class="form-group row">
					<div class="col-3">
    					<label class="col-form-label">Institute :</label>
    				</div>
					  
					<div class="col-8" style="padding-left: 0">
					    <p class="col-form-label"><?php echo $institute; ?></p>
					</div>
				</div>
    		</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-md-12">
    			<div class="form-group row">
    				<div class="col-10">
    					<label class="col-form-label">20 PI for Ph.D and M.Phil. 10 PI for other UG/PG Degree/Diploma/Certificate Courses/</label>
    				</div>
					  
					<div class="col-2" style="padding-left: 0">
					   <p class="col-form-label"><?php echo 20; ?></p>
					</div>
				</div>							
    		</div>
    	</div>

    	<hr>

		<div class="row">
    		<div class="col-md-12">
    			<p style="font-size: 18px"><b>Details of course/summer school/STTP/online course attended/completed during academic year</b></p>
    		</div>
    	</div>

    	<table class="table table-bordered table-hover">
		 	<tr>
			    <th>Sr.no</th>
			    <th>Name of summer school/course</th>
			    <th>Duration(Days)</th>
			    <th>Organising Agency</th>
			    <th>If organised in KJSCE, mention the role played</th>
		  	</tr>
		  	<?php

		  	$sql1="SELECT * FROM part_a_doc WHERE formId='$formId' ORDER BY srno ASC";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
			{
				while($row1=mysqli_fetch_assoc($result1))
				{
					$srno=$row1['srno'];
					$course=$row1['course'];
					$days=$row1['days'];
					$agency=$row1['agency'];
					$rolee=$row1['rolee'];
					// $data_doc[]=array('file'=>$row1['file']);

					?>
				  	<tr>
					    <td><?php echo $srno; ?></td>
					    <td><?php echo $course; ?></td>
					    <td><?php echo $days; ?></td>
					    <td><?php echo $agency; ?></td>
					    <td><?php echo $rolee; ?></td>
				  	</tr>
				  	<?php
				}
			}
			  	

		  	?>
		</table><br>

		<div class="row">
			<div class="col-md-8 text-left">
    			<label class="col-form-label"><b>Three GPI per day but maximum 30</b></label>
    		</div>

    		<div class="col-md-4">
    			<div class="form-group row justify-content-center">
    				<div class="col-2">
    					<label class="col-form-label"><b>GPI:</b></label>
    				</div>
					<div class="col-2">
    					<p class="col-form-label"><?php echo 30; ?></p>
    				</div>
				</div>
			</div>
	   	</div>

	   	<div class="row">
			<div class="col-md-12">
				<p class="text-center" style="margin-left:-270px"><b>PI Part A = GPI = <?php echo 50; ?> out of 50</b></p>
			</div>
    	</div>


	</div>
	<br><br>

	<script type="text/javascript">
	$(document).ready(function(){
	  	
	  	window.print();
	  	// $("#part-a-container").printThis({
	  	// 	// beforePrint: bp(),
	  	// 	// afterPrint: ap()
	  	// 	importStyle: true
	  	// });  	
		
	});
	</script>
    </body>
</html>

	
