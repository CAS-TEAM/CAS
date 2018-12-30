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
		$("#part-a-form input").prop("disabled", false);//have to disable inputs before submitting
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
			alert(response);

			if(response.trim()=="not begun")
			{           
				// $('#myModal').modal('show');
				document.getElementById("alreadybegun").value=0;
			}
			else
			{
				document.getElementById("alreadybegun").value=1;

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
					    	$.each(res, function(k, v) {

					    		document.getElementById(k).value=v;
					    		$("#"+k).prop("disabled", true);
					    		
					    	});
					    }
					    
					});
				}
			}
		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});
	
	return false;
}