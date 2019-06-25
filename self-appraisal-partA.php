<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
else if(!isset($_GET['id']) || !isset($_GET['year']))
{
	header("LOCATION: userprofile.php");
}
else
{

include 'dbh.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);//the one who is viewing the form

$userId=mysqli_real_escape_string($conn,$_GET['id']);//the one whose form is being viewed
$year=mysqli_real_escape_string($conn,$_GET['year']);

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

include 'top.php';
include 'left-nav.php';
?>
	  	
    <div class="container">
    <div class="row">    		
    <div class="col offset-md-2 parta" id="part-a-container">

    	
    	<header>
    		<h2 class="heading"><b>Self-Appraisal 'Part A: GENERAL INFORMATION'</b></h2>    		
    	</header>
    	
    	<form method="POST" action="partAsys.php" class="part-a-form" id="part-a-form" enctype="multipart/form-data">    	
    	<hr style="border: 0.5px solid #c8c8c8"><br>
    	<input type="hidden" name="formFacultyId" id="formFacultyId" value="<?php echo $_GET['id']; ?>">
    	<input type="hidden" name="year" id="year" value="<?php echo $_GET['year']; ?>">
    	<input type="hidden" name="alreadybegun" id="alreadybegun" value="0">
    	<div class="row">
    		<div class="col-md-12">

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="faculty_name" class="col-form-label">Name</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="faculty_name" id="faculty_name" maxlength="100"/>
							</div>
						</div>							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="ecode" class="col-form-label">Emp. Code</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							    <input class="form-control partalabel partaformcontrol" type="text" name="ecode" id="ecode"/>
							</div>
						</div>
		    		</div>
    			</div>

    			<br>

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="praddr" class="col-form-label">Present Address</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="praddr" id="praddr" maxlength="200"/>
							</div>
						</div>							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="peaddr" class="col-form-label">Permanent Address</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="peaddr" id="peaddr" maxlength="200"/>
							</div>
						</div>
		    		</div>
    			</div>

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="email" class="col-form-label">Email</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="email" name="email" id="email" maxlength="50"/>
							</div>
						</div>					
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="mobileno" class="col-form-label">Mobile No.</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="mobileno" id="mobileno" maxlength="15"/>
							</div>	  
						</div>
		    		</div>
    			</div>

    			<br>

    			<div class="row">
    				<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="highq" class="col-form-label">Highest qualification</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="text" name="highq" id="highq" maxlength="50"/>
							</div>
						</div>

							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="dob" class="col-form-label">Date of Birth</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel partaformcontrol" type="date" name="dob" id="dob"  />
							</div>
						</div>
		    		</div>
    			</div>
    		</div>
    	</div>		
    	<hr style="border: 1px solid #c8c8c8">

    	<div class="row">
    		<div class="col-md-6 text-left">
    			<p style="font-size: 18px"><b>Details of last service i.e before joining KJSCE:-</b></p>
    		</div>
    	</div>

    	<br>

    	<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="desi" class="col-form-label">Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="desi" id="desi" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="nameo" class="col-form-label">Name of Organization</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="nameo" id="nameo" maxlength="50"/>
					</div>
				</div>
			</div>		
		</div>
		<hr style="border: 1px solid #c8c8c8"><br>

		<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pdesi" class="col-form-label">Present Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="pdesi" id="pdesi"  maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="dojkjsce" class="col-form-label">DOJ KJSCE</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="date" name="dojkjsce" id="dojkjsce" />
					</div>
				</div>
			</div>		

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pscale" class="col-form-label">Present Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="number" name="pscale" id="pscale"  />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pbg" class="col-form-label text-left">Present basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="number" name="pbg" id="pbg"  />
					</div>
				</div>
			</div>		
		</div>
		<hr style="border: 1px solid #c8c8c8">

		<div class="row">
    		<div class="col-md-5 text-left">
    			<p style="font-size: 18px"><b>Details of last promotion by selection:-</b></p>
    		</div>
    	</div><br>
    	<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="lastdesisel" class="col-form-label">Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="lastdesisel" id="lastdesisel" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="promowef" class="col-form-label">Promotion w.e.f</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="date" name="promowef" id="promowef"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cscales" class="col-form-label">Changed Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="number" name="cscales" id="cscales"  />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cbasics" class="col-form-label">Changed basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="number" name="cbasics" id="cbasics"  />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 1px solid #c8c8c8">

		<div class="row">
    		<div class="col-md-5 text-left">
    			<p style="font-size: 18px"><b>Details of last promotion through CAS:-</b></p>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="lastdesicas" class="col-form-label">Designation</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="lastdesicas" id="lastdesicas" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="promowefcas" class="col-form-label">Promotion w.e.f</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="date" name="promowefcas" id="promowefcas"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cscalecas" class="col-form-label">Changed Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partaformcontrol" type="number" name="cscalecas" id="cscalecas" />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cbasiccas" class="col-form-label">Changed basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partaformcontrol" type="number" name="cbasiccas" id="cbasiccas"  />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 1px solid #c8c8c8">

		<div class="row">
			<div class="col-md-6">
				<p>Whether acquired any fresh educational qualification during said academic year?</p>
			</div>
	    	<div class="col-md-6 text-left">
				<div class="custom-control custom-radio custom-control-inline">
				  	<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input yesradio" value="Yes" checked/>
				  	<label class="custom-control-label yes" for="customRadioInline1">Yes</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  	<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input noradio" value="No"/>
				  	<label class="custom-control-label no" for="customRadioInline2">No</label>
				</div>	
				<div class="custom-control custom-radio custom-control-inline">
				<p>If yes: 20 PI</p>
			</div>
			</div>
		</div><br>

		<div class="row">
			<div class="col text-left">
				<p>If yes, details of qualification:-</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="nameofdegree" class=" col-form-label">Name of Degree</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="nameofdegree" id="nameofdegree" maxlength="100"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="institute" class="col-form-label">Institute</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel partaformcontrol" type="text" name="institute" id="institute" maxlength="100" />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

	    		<!-- <div class="form-group row">
					<div class="col-md-6 text-left">
	    				<label for="ugpg" class="col-form-label">20 PI for Ph.D and M.Phil. 10 PI for other UG/PG Degree/Diploma/Certificate Courses/</label>
	    			</div>
						  
					<div class="col-md-5" style="padding-left: 0">
						<input class="form-control partalabel" type="text" name="ugpg" id="ugpg"  />
					</div>
				</div>
		<hr style="border: 0.5px solid #c8c8c8"> -->

		<div class="row">
    		<div class="col-md-12">
    			<p style="font-size: 18px"><b>Details of course/summer school/STTP/online course attended/completed during academic year</b></p>
    		</div>
    	</div>

		<div class="panel panel-default">
		  
		  	<div class="panel-body">

		  		<input type="hidden" name="room" value="1" id="room">
		  
		  		<div id="parta_dynamic_form"></div>

		  		<div class="row form-inline justify-content-center">
		  			<div class="nopadding">
				  		<div class="form-group">
				    		<input type="text" class="dynamic-four" id="srno1" name="srno[]" value="" placeholder="Sr.no">
				  		</div>
					</div>

					<div class="nopadding">
				  		<div class="form-group">
				    		<input type="text" class="dynamic-four" id="course1" name="course[]" value="" maxlength="100" placeholder="Name of summer school/course">
				  		</div>
					</div>

					<div class="nopadding">
				  		<div class="form-group">
				   			<input type="text" class="dynamic-four" id="days1" name="days[]" value="" placeholder="Duration(Days)">
				  		</div>
					</div>

					<div class="nopadding">
						<div class="form-group">
				    		<input type="text" class="dynamic-four" id="agency1" name="agency[]" value="" placeholder="Organising Agency">
				  		</div>
					</div>
					
					<!-- <div class="nopadding">
						<div class="form-group">
				    		<input type="file" class="dynamic-four" id="file1" name="file[]" value="" placeholder="">
				  		</div>
					</div> -->

					<div class="nopadding">
						<div class="form-group dynamic-four">
							<div class="filepart">
								<div class="row justify-content-center">
									<div class="col-3 offset-md-3" style="padding:0;margin:0">
										<div class="file-upload mx-auto" style="width:26px">
										    <label for="file1" style="cursor:pointer">
										        <img src="https://img.icons8.com/material/26/000000/attach.png">
										    </label>
										    <input type="file" class="dynamic-four" id="file1" name="file[]" value="" placeholder="">
										    <input type="hidden" name="filelocation[]" id="filelocation1" value="">
										</div>
									</div>
									<div class="col-md-3" style="padding:0;margin:0">
										<a href="viewfile.php?location=none" id="viewfile1" target="_blank">
											<img src="https://img.icons8.com/ios/24/000000/document.png">
										</a>										
									</div>
								</div>
							</div>										    		
				  		</div>
					</div>

				  	<!-- <div class="input-group-btn">
				        <img src="https://img.icons8.com/color/48/000000/plus.png" class="part-a-plus-btn" onclick="parta_dynamic_form();" style="cursor:pointer"/>
				    </div> -->

					<div class="clear"></div>		
				</div>
			</div><br>
			<?php

			if($userId!=$viewerId)
			{
				?>
				<a class="btn btn-info" href="partB.php?id=<?php echo $userId; ?>&year=<?php echo $year; ?>">View Form B for this faculty for year <?php echo $year; ?></a>
				<?php
			}

			?>
		</div>
<!-- 
		<hr style="border: 0.5px solid #c8c8c8">
 -->

		

		<div class="row form-inline justify-content-center">

			<div class="col se-btn">

				<button type="button" class="btn btn-primary" onclick="myFunction()" id="part-a-print-form" data-toggle="tooltip" data-placement="bottom" style="background-color: #e60000;border: 1px solid #e60000">
	  			PRINT 
				</button>

			</div>
		</div>	

		<br>

	</form>
	</div>
	</div>
	</div>

	<br><br>

	<script type="text/javascript">


	$(document).ready(function(){
 		$('[data-toggle="tooltip"]').tooltip();   
	});

	</script>

	<!-- GET DATA OF FORM -->

	<script type="text/javascript">
		getPartAData();
	</script>

	<!-- DISABLING INPUT WHEREVER NECESSARY -->

	<?php

	if($same_user==0)
	{
		?>
		<!-- Disabling all forms for other viewers -->
		<script type="text/javascript">
			disableAinput();
		</script>

		<?php
	}

	?>

	

	<!-- FORM UPDATED MODAL -->

	<script type="text/javascript">
	function myFunction() {
		$("#part-a-save-form").toggle();
		$("#part-a-edit-form").toggle();
		$("#part-a-print-form").toggle();
		$(".filepart").hide();
		$(".part-a-plus-btn").hide();
		$(".part-a-minus-btn").hide();
	  	
	  	// window.print();
	  	$("#part-a-container").printThis({
	  		beforePrint: bp(),
	  		afterPrint: ap()
	  	});

	  	setTimeout(function () { 
	  		$("#part-a-save-form").toggle();
			$("#part-a-edit-form").toggle();
			$("#part-a-print-form").toggle();
			$(".filepart").show();
			$(".part-a-plus-btn").show();
			$(".part-a-minus-btn").show(); 
		}, 700);
		
	}
	</script>

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

	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Form Updated!</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal footer -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      	</div>

		    </div>
	  	</div>
	</div>

	<!-- DISABLING ALL INPUTS -->
	<script type="text/javascript">
		$("#part-a-form :input").prop("disabled", true);//disabling all inputs
		$(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also
		
	</script>
</div>
</body>
</html>

<?php

}

?>