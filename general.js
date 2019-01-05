$(document).ready(function(){

	$('.admin-table-checkbox').click(function(){

		var idstr = $(this).attr('id');
		var facultyId=parseInt(idstr.match(/\d+$/)[0], 10);

		document.getElementById('update'+facultyId).disabled = false;
		$('#update'+facultyId).addClass('btn-primary');

	});

});

$(document).ready(function(){

	$(".update-rights-form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  

		//disable update button once again
		var idstr = $(this).attr('id');
		var facultyId=parseInt(idstr.match(/\d+$/)[0], 10);
		// alert(facultyId);
		document.getElementById('update'+facultyId).disabled = true;
		$('#update'+facultyId).removeClass('btn-primary');

		$.ajax
		({
			type: 'POST',
			url: 'admin-panel-system.php',
			data:formData,
			//dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,                
			success: function (response) 
			{
				// alert(response);

				if(response.trim()=="success")
				{           
					$('#myModal').modal('show');
				}      
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

function disableinput(){
	// alert("disabling");
	$("#part-a-form input").prop("disabled", true);//disablig all inputs
	$(".part-a-plus-btn").prop("onclick", null).off("click");//diabling on-click on dynamic form plus button
}

$(document).ready(function(){

	$('#part-a-save-form').click(function(){

		// alert("save here");
		$("#part-a-form input").prop("disabled", false);//have to enable inputs before submitting
		// alert(document.getElementById("alreadybegun").value);
		$('form#part-a-form').submit();

	});

	$('#part-a-edit-form').click(function(){

		// alert("edit here");

		$("#part-a-form input").prop("disabled", false);//disablig all inputs
		// $(".part-a-plus-btn").prop("onclick", parta_dynamic_form()).off("click");//diabling on-click on dynamic form plus button
		//enable on click for the dynamic form and disable edit button

	});

});

function getPartAData(){

	var yr=document.getElementById('year').value;

	// alert("yr="+yr);

	$.ajax
	({
		type: 'POST',
		url: 'get-part-a-data.php',
		data:
		{
			year:yr
		},
		//dataType: 'text',  // what to expect back from the PHP script, if anything               
		success: function (response) 
		{
			// alert(response);s

			if(response.trim()=="not begun")
			{           
				// $('#myModal').modal('show');
				document.getElementById("alreadybegun").value=0;
			}
			else
			{
				document.getElementById("alreadybegun").value=1;

				var room=0;//variable for the dynamic form

				var result = $.parseJSON(response);
				for(var i=0;i<result.length;i++)
				{
					var res=result[i];
					$.each(res, function(k, v) {
					    //display the key and value pair
					    if(k!="parta_dynamic_form")
					    {
					    	document.getElementById(k).value=v;
					    	$("#"+k).prop("disabled", true);
					    }
					    else
					    {
					    	// alert(k);
					    	// alert("in");
					    	

					    	var srno=JSON.parse(v[0]['srno']);
					    	var course=JSON.stringify(v[1]['course']).replace(/['"]+/g, '');
					    	var days=JSON.stringify(v[2]['days']).replace(/['"]+/g, '');
					    	var agency=JSON.stringify(v[3]['agency']).replace(/['"]+/g, '');

					    	// alert(srno+","+course+","+days+","+agency);
					    	// alert(srno+","+course);
					    	if(srno!=0)
					    	{
					    		room++;
							    var objTo = document.getElementById('parta_dynamic_form')
							    var divtest = document.createElement("div");
								divtest.setAttribute("class", "form-group removeclass"+room);
								var rdiv = 'removeclass'+room;
							    
							    if(room!=1)
							    {
							    	divtest.innerHTML = '<div class="row form-inline justify-content-center"><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="srno'+room+'" name="srno[]" value="" placeholder="Sr.no"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="course'+room+'" name="course[]" value="" placeholder="Name of summer school/course"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="days'+room+'" name="days[]" value="" placeholder="Duration(days)"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="agency'+room+'" name="agency[]" value="" placeholder="Organising Agency"></div></div><div class="input-group-btn"> <img src="https://img.icons8.com/color/48/000000/minus.png" onclick="remove_education_fields('+ room +');" style="cursor:pointer"> </div></div><div class="clear"></div></div>';
							    	$("#parta_dynamic_form").prepend(divtest);
							    	// objTo.appendChild(divtest);		
							    	// alert("room="+room+","+days+","+agency);
							    	document.getElementById('srno'+room).value=srno;
							    	document.getElementById('course'+room).value=course;
							    	document.getElementById('days'+room).value=days;
							    	document.getElementById('agency'+room).value=agency;


							    }
							    else
							    {
							    	// alert('idhar');
							    	document.getElementById('srno'+room).value=srno;
							    	document.getElementById('course'+room).value=course;
							    	document.getElementById('days'+room).value=days;
							    	document.getElementById('agency'+room).value=agency;
							    }
							    
							    
					    	}
					    	
					    }
					    
					});
				}

				document.getElementById("room").value=room;
			}
		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});
	
	return false;
}