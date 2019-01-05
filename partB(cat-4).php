<?php

include 'top.php';

?>

	<nav class="navbar bg-dark">
		<p class="navbar-brand" style="color:white;width:100%;text-align:center"></p>
	</nav>
    
	<div class="container partb"><br>		
		<div class="row">
			<div class="col-md-12">
				<p><b>Category IV: Curricular/Co-curricular/Administrative activities done outside college (Max. PI=75)</b></p>
			</div>
		</div>
		<hr style="border: 0.5px solid #c8c8c8"><br>

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic12">
							<thead>
								<th colspan="4">Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college (Max.PI=30)</th>
							</thead>
						     	
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of Programme</th>
								<th class="text-center">Date</th>
								<th class="text-center">Organized by</th>
							</tr>
									 
							<tbody>
								<tr id='addr140'>
									<td>1</td>
									<td>
									<input type="text" name='cativ-dp' class="form-control"/>
									</td>
									<td>
									<input type="date" name='cativ-datee' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cativ-o' class="form-control"/>
									</td>
								</tr>
			                    <tr id='addr141'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row12" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row12' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>05 Marks for each at national level and 10 marks for international level abroad</p>
				</div>
			</div>
		</div><br><br><br>

	

		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic13">
							<thead>
								<th colspan="4">Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college (Max. PI=30)</th>
							</thead>

							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details of Programme</th>
								<th class="text-center">Date</th>
								<th class="text-center">Organized by</th>
							</tr>
							
							 
							<tbody>
								<tr id='addr150'>
									<td>1</td>
									<td>
									<input type="text" name='cativ1-dp' class="form-control"/>
									</td>
									<td>
									<input type="date" name='cativ1-datee' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cativ1-o' class="form-control"/>
									</td>
								</tr>
			                    <tr id='addr151'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row13" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row13' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>05 Marks for each at national level and 10 marks for international level abroad</p>
				</div>
			</div>
		</div><br><br>
		
		<div class="container">
    		<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="admin-table">
						<table class="table table-bordered table-hover" id="tab_logic14">
							<thead>
								<th colspan="4">Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned. (Max. PI=15)</th>
							</thead>
							
							<tr>
								<th class="text-center">Sr.No</th>
								<th class="text-center">Details</th>
								<th class="text-center"></th>
							</tr>
							 
							<tbody>
								<tr id='addr160'>
									<td>1</td>
									<td>
									<input type="text" name='cativ2-dp' class="form-control"/>
									</td>
									<td>
									<input type="text" name='cativ2' class="form-control"/>
									</td>
								</tr>
			                    <tr id='addr161'></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a id="add_row14" class="btn btn-default pull-left"><img src="https://img.icons8.com/color/48/000000/plus.png"></a>
			<a id='delete_row14' class="pull-right btn btn-default"><img src="https://img.icons8.com/color/48/000000/minus.png"></a>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>05 Marks for international/national credentials/activity/contribution not mentioned in application</p>
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
      var t=1;
     $("#add_row12").click(function(){
      $('#addr14'+t).html("<td>"+ (t+1) +"</td><td><input name='cativ-dp"+t+"' type='text' class='form-control input-md'  /> </td><td><input name='cativ-datee"+t+"' type='date' class='form-control input-md'  /> </td><td><input name='cativ-o"+t+"' type='text' class='form-control input-md'  />");

      $('#tab_logic12').append('<tr id="addr14'+(t+1)+'"></tr>');
      t++; 
  	});
     $("#delete_row12").click(function(){
    	 if(t>1){
		 $("#addr14"+(t-1)).html('');
		 t--;
		 }
	});
	});

    </script>

    <script type="text/javascript">
     $(document).ready(function()
    {
      var u=1;
     $("#add_row13").click(function(){
      $('#addr15'+u).html("<td>"+ (u+1) +"</td><td><input name='cativ1-dp"+u+"' type='text' class='form-control input-md'  /> </td><td><input name='cativ1-datee"+u+"' type='date' class='form-control input-md'  /> </td><td><input name='cativ1-o"+u+"' type='text' class='form-control input-md'  />");

      $('#tab_logic13').append('<tr id="addr15'+(u+1)+'"></tr>');
      u++; 
  	});
     $("#delete_row13").click(function(){
    	 if(u>1){
		 $("#addr15"+(u-1)).html('');
		 u--;
		 }
	});
	});

    </script>


    <script type="text/javascript">
     $(document).ready(function()
    {
      var v=1;
     $("#add_row14").click(function(){
      $('#addr16'+v).html("<td>"+ (v+1) +"</td><td><input name='cativ2-dp"+v+"' type='text' class='form-control input-md'  /> </td><td><input name='cativ2"+v+"' type='text' class='form-control input-md'  /> ");

      $('#tab_logic14').append('<tr id="addr16'+(v+1)+'"></tr>');
      v++; 
  	});
     $("#delete_row14").click(function(){
    	 if(v>1){
		 $("#addr16"+(v-1)).html('');
		 v--;
		 }
	});
	});

    </script>








