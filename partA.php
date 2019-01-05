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
include 'top.php';

$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);

$userId=mysqli_real_escape_string($conn,$_GET['id']);
$year=mysqli_real_escape_string($conn,$_GET['year']);

if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;
	
}



?>

	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
	  	<a class="navbar-brand" href="#">CAS</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      	<!-- <li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      	</li> -->
		      	<?php
		      	if(!isset($_SESSION['id']))
		      	{
			      	?>
			      	<li class="nav-item">
			        	<a class="nav-link" href="index.php">Sign Up | Sign In</a>
			      	</li>
			      	<?php
			    }			      	
			    else
			    {
			    	?>
			      	<li class="nav-item dropdown">
				        <img class="nav-link dropdown-toggle" src="defaults/default_userprofile_pic.png" width="50px" style="cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          	<!-- <img src="defaults/default_userprofile_pic.png" width="30px" style="display:block;margin:0 auto"> -->
				        <!-- </a> -->
				        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				        	<h6 class="dropdown-header"><?php echo $_SESSION['faculty_name']; ?></h6>
				          	<a class="dropdown-item" href="userprofile.php">My Profile</a>
				          	<a class="dropdown-item" href="#">Upload Profile Picture</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="logout.php">Log out</a>
				        </div>
			      	</li>
			      	<?php
		      	}
		      	?>
		    </ul>
	  	</div>
	</nav>
   
  	
    <div class="container parta">
    	<form method="POST" action="partAsys.php" class="part-a-form" id="part-a-form">
    	<header class="heading"><b>'Part A: GENERAL INFORMATION'</b></header>
    	<hr style="border: 0.5px solid #c8c8c8"><br>
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
							   <input class="form-control partalabel" type="text" name="faculty_name" id="faculty_name" maxlength="100"/>
							</div>
						</div>							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="ecode" class="col-form-label">Emp. Code</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							    <input class="form-control partalabel" type="text" name="ecode" id="ecode"/>
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
							   <input class="form-control partalabel" type="text" name="praddr" id="praddr" maxlength="200"/>
							</div>
						</div>							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
		    				<div class="col-3">
		    					<label for="peaddr" class="col-form-label">Permanent Address</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel" type="text" name="peaddr" id="peaddr" maxlength="200"/>
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
							   <input class="form-control partalabel" type="email" name="email" id="email" maxlength="50"/>
							</div>
						</div>					
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="mobileno" class="col-form-label">Mobile No.</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel" type="text" name="mobileno" id="mobileno" maxlength="15"/>
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
							   <input class="form-control partalabel" type="text" name="highq" id="highq" maxlength="50"/>
							</div>
						</div>

							
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group row">
							<div class="col-3">
		    					<label for="dob" class="col-form-label">Date of Birth</label>
		    				</div>
							  
							<div class="col-8" style="padding-left: 0">
							   <input class="form-control partalabel" type="date" name="dob" id="dob"  />
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
						<input class="form-control partalabel" type="text" name="desi" id="desi" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="nameo" class="col-form-label">Name of Organization</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="text" name="nameo" id="nameo" maxlength="50"/>
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
						<input class="form-control partalabel" type="text" name="pdesi" id="pdesi"  maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="dojkjsce" class="col-form-label">DOJ KJSCE</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="date" name="dojkjsce" id="dojkjsce" />
					</div>
				</div>
			</div>		

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pscale" class="col-form-label">Present Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="number" name="pscale" id="pscale"  />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="pbg" class="col-form-label text-left">Present basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="number" name="pbg" id="pbg"  />
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
						<input class="form-control partalabel" type="text" name="lastdesisel" id="lastdesisel" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="promowef" class="col-form-label">Promotion w.e.f</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="text" name="promowef" id="promowef" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cscales" class="col-form-label">Changed Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="number" name="cscales" id="cscales"  />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cbasics" class="col-form-label">Changed basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="number" name="cbasics" id="cbasics"  />
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
						<input class="form-control partalabel" type="text" name="lastdesicas" id="lastdesicas" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="promowefcas" class="col-form-label">Promotion w.e.f</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="text" name="promowefcas" id="promowefcas" maxlength="50"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cscalecas" class="col-form-label">Changed Scale</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control" type="number" name="cscalecas" id="cscalecas"  />
						<input class="form-control partalabel" type="number" name="cscalecas" id="example-text-input" required />
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="cbasiccas" class="col-form-label">Changed basic and grade pay</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control" type="number" name="cbasiccas" id="cbasiccas"  />
						<input class="form-control partalabel" type="number" name="cbasiccas" id="example-text-input" required />
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
						<input class="form-control partalabel" type="text" name="nameofdegree" id="nameofdegree" maxlength="100"/>
					</div>
				</div>
			</div>

			<div class="col-md-6">
	    		<div class="form-group row">
					<div class="col-3">
	    				<label for="institute" class="col-form-label">Institute</label>
	    			</div>
						  
					<div class="col-8" style="padding-left: 0">
						<input class="form-control partalabel" type="text" name="institute" id="institute" maxlength="100" />
					</div>
				</div>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8">

	    		<div class="form-group row">
					<div class="col-md-6 text-left">
	    				<label for="ugpg" class="col-form-label">20 PI for Ph.D and M.Phil. 10 PI for other UG/PG Degree/Diploma/Certificate Courses/</label>
	    			</div>
						  
					<div class="col-md-5" style="padding-left: 0">
						<input class="form-control partalabel" type="text" name="ugpg" id="ugpg"  />
					</div>
				</div>
		<hr style="border: 0.5px solid #c8c8c8">

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
				  	<div class="input-group-btn">
				        <img src="https://img.icons8.com/color/48/000000/plus.png" class="part-a-plus-btn" onclick="parta_dynamic_form();" style="cursor:pointer"/>
				    </div>

					<div class="clear"></div>		
				</div>
		 
	
			</div>
		</div>

		<hr style="border: 0.5px solid #c8c8c8">

		<?php

		if($same_user==1)
		{

		?>

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

		<?php

		}

		?>

		<br>

	</form>
	</div>

	<br>

	<script type="text/javascript">

	// var room = 1;
	function parta_dynamic_form()
	{	 
		var room=document.getElementById('room').value;
	    room++;
	    // var objTo = document.getElementById('parta_dynamic_form')
	    var divtest = document.createElement("div");
		divtest.setAttribute("class", "form-group removeclass"+room);
		var rdiv = 'removeclass'+room;
	    divtest.innerHTML = '<div class="row form-inline justify-content-center"><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="srno'+room+'" name="srno[]" value="" placeholder="Sr.no"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="course'+room+'" name="course[]" value="" placeholder="Name of summer school/course"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="days'+room+'" name="days[]" value="" placeholder="Duration(days)"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="agency'+room+'" name="agency[]" value="" placeholder="Organising Agency"></div></div><div class="input-group-btn"> <img src="https://img.icons8.com/color/48/000000/minus.png" onclick="remove_education_fields('+ room +');" style="cursor:pointer"> </div></div><div class="clear"></div></div>';
	    
	    // objTo.appendChild(divtest);
	    $("#parta_dynamic_form").prepend(divtest);
	    document.getElementById("room").value=room;
	}
	function remove_education_fields(rid) {
		$('.removeclass'+rid).remove();
		var room=document.getElementById('room').value;
		document.getElementById("room").value=room-1;
	}


	$(document).ready(function(){
 		$('[data-toggle="tooltip"]').tooltip();   
	});

	</script>

	<!-- DISABLING INPUT WHEREVER NECESSARY -->

	<?php

	if($same_user==0)
	{
		?>
		<!-- Disabling all forms for other viewers -->
		<script type="text/javascript">
			disableinput();
		</script>

		<?php
	}

	?>

	<!-- GET DATA OF FORM -->

	<script type="text/javascript">
		getPartAData();
	</script>

	<!-- FORM UPDATED MODAL -->

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

</body>
</html>

<?php

}

?>