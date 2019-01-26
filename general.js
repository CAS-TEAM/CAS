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

function disableAinput(){
	// alert("disabling");
	$("#part-a-form input").prop("disabled", true);//disablig all inputs
	$(".part-a-plus-btn").prop("onclick", null).off("click");//diabling on-click on dynamic form plus button
}

function disableBinput(){
	// alert("disabling");
	$("#part-b-form input").prop("disabled", true);//disablig all inputs
	$(".part-b-plus-btn").prop("onclick", null).off("click");//diabling on-click on dynamic form plus button
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

//PART B 

$(document).ready(function(){

	$('#part-b-save-form').click(function(){

		// alert("save here");
		$("#part-b-form input").prop("disabled", false);//have to enable inputs before submitting
		// alert(document.getElementById("alreadybegun").value);
		$('form#part-b-form').submit();

	});

	$('#part-b-edit-form').click(function(){

		// alert("edit here");

		$("#part-b-form input").prop("disabled", false);//disablig all inputs
		// $(".part-a-plus-btn").prop("onclick", parta_dynamic_form()).off("click");//diabling on-click on dynamic form plus button
		//enable on click for the dynamic form and disable edit button

	});

});


function getPartBData(){

	var yr=document.getElementById('year').value;

	// alert("yr="+yr);

	$.ajax
	({
		type: 'POST',
		url: 'get-part-b-data.php',
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

				// var room=0;//variable for the dynamic form

				var result = $.parseJSON(response);
				for(var i=0;i<result.length;i++)
				{
					var res=result[i];
					// alert("res="+res);
					$.each(res, function(k, v) {
					    //display the key and value pair
					    // alert("k="+k+" v="+v);
					    if(k!="part_b_cat_1_cto" && k!="part_b_cat_1_cte" && k!="part_b_cat_1_dar" && k!="part_b_cat_2_ha" && k!="part_b_cat_2_act" && k!="part_b_cat_2_exc" && k!="part_b_cat_2_c" && k!="part_b_cat_3_pp" && k!="part_b_cat_3_ppic" && k!="part_b_cat_3_ppinc" && k!="part_b_cat_3_bk" && k!="part_b_cat_3_res" && k!="part_b_cat_3_ores" && k!="part_b_cat_3_cres" && k!="part_b_cat_3_pip" && k!="part_b_cat_4_sem" && k!="part_b_cat_4_inv" && k!="part_b_cat_4_creds")
					    {
					    	// alert("here");
					    	// alert("k="+k+" v="+v);
					    	document.getElementById(k).value=v;
					    	$("#"+k).prop("disabled", true);
					    }
					    else
					    {
					    	// alert(k);
					    	// alert("in");
					    	

					   //  	var srno=JSON.parse(v[0]['srno']);
					   //  	var course=JSON.stringify(v[1]['course']).replace(/['"]+/g, '');
					   //  	var days=JSON.stringify(v[2]['days']).replace(/['"]+/g, '');
					   //  	var agency=JSON.stringify(v[3]['agency']).replace(/['"]+/g, '');

					   //  	// alert(srno+","+course+","+days+","+agency);
					   //  	// alert(srno+","+course);
					   //  	if(srno!=0)
					   //  	{
					   //  		room++;
							 //    var objTo = document.getElementById('parta_dynamic_form')
							 //    var divtest = document.createElement("div");
								// divtest.setAttribute("class", "form-group removeclass"+room);
								// var rdiv = 'removeclass'+room;
							    
							 //    if(room!=1)
							 //    {
							 //    	divtest.innerHTML = '<div class="row form-inline justify-content-center"><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="srno'+room+'" name="srno[]" value="" placeholder="Sr.no"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="course'+room+'" name="course[]" value="" placeholder="Name of summer school/course"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="days'+room+'" name="days[]" value="" placeholder="Duration(days)"></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="agency'+room+'" name="agency[]" value="" placeholder="Organising Agency"></div></div><div class="input-group-btn"> <img src="https://img.icons8.com/color/48/000000/minus.png" onclick="remove_education_fields('+ room +');" style="cursor:pointer"> </div></div><div class="clear"></div></div>';
							 //    	$("#parta_dynamic_form").prepend(divtest);
							 //    	// objTo.appendChild(divtest);		
							 //    	// alert("room="+room+","+days+","+agency);
							 //    	document.getElementById('srno'+room).value=srno;
							 //    	document.getElementById('course'+room).value=course;
							 //    	document.getElementById('days'+room).value=days;
							 //    	document.getElementById('agency'+room).value=agency;


							 //    }
							 //    else
							 //    {
							 //    	// alert('idhar');
							 //    	document.getElementById('srno'+room).value=srno;
							 //    	document.getElementById('course'+room).value=course;
							 //    	document.getElementById('days'+room).value=days;
							 //    	document.getElementById('agency'+room).value=agency;
							 //    }
							    
							    
					   //  	}
					    	
					    }
					    
					});
				}

				// document.getElementById("room").value=room;
			}
		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});
	
	return false;
}

//******************************************************PartA-Appraisals************************************************

$(document).ready(function(){
    $('body').on('click','#parta_gpi_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var parta_gpi_self_a = document.getElementById('parta_gpi_self_a').value;

	    var parta_gpi_hod_a =0;
	    if($("#parta_gpi_hod_a").length)
	    {
	     	parta_gpi_hod_a=document.getElementById('parta_gpi_hod_a').value;
	    }
	   	var parta_gpi_committee_a = 0;
	   	if($("#parta_gpi_committee_a").length)
	    {
			parta_gpi_committee_a=document.getElementById('parta_gpi_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'parta_gpi_sys.php',       
	        data:{
	        	parta_gpi_self_a:parta_gpi_self_a,
	        	parta_gpi_hod_a:parta_gpi_hod_a,
	        	parta_gpi_committee_a:parta_gpi_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("parta_gpi_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#parta_gpi_pi_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var parta_gpi_pi_self_a = document.getElementById('parta_gpi_pi_self_a').value;

	    var parta_gpi_pi_hod_a =0;
	    if($("#parta_gpi_pi_hod_a").length)
	    {
	     	parta_gpi_pi_hod_a=document.getElementById('parta_gpi_pi_hod_a').value;
	    }
	   	var parta_gpi_pi_committee_a = 0;
	   	if($("#parta_gpi_pi_committee_a").length)
	    {
			parta_gpi_pi_committee_a=document.getElementById('parta_gpi_pi_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'parta_gpi_pi_sys.php',       
	        data:{
	        	parta_gpi_pi_self_a:parta_gpi_pi_self_a,
	        	parta_gpi_pi_hod_a:parta_gpi_pi_hod_a,
	        	parta_gpi_pi_committee_a:parta_gpi_pi_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("parta_gpi_pi_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

// ****************************************************PartB-Appraisals***********************************************************
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Category-I~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$(document).ready(function(){
    $('body').on('click','#partb_cat1_pi1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat1_pi1_self_a = document.getElementById('cat1_pi1_self_a').value;

	    var cat1_pi1_hod_a =0;
	    if($("#cat1_pi1_hod_a").length)
	    {
	     	cat1_pi1_hod_a=document.getElementById('cat1_pi1_hod_a').value;
	    }
	   	var cat1_pi1_committee_a = 0;
	   	if($("#cat1_pi1_committee_a").length)
	    {
			cat1_pi1_committee_a=document.getElementById('cat1_pi1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi1_sys.php',       
	        data:{
	        	cat1_pi1_self_a:cat1_pi1_self_a,
	        	cat1_pi1_hod_a:cat1_pi1_hod_a,
	        	cat1_pi1_committee_a:cat1_pi1_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi1_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat1_pi2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat1_pi2_self_a = document.getElementById('cat1_pi2_self_a').value;

	    var cat1_pi2_hod_a =0;
	    if($("#cat1_pi2_hod_a").length)
	    {
	     	cat1_pi2_hod_a=document.getElementById('cat1_pi2_hod_a').value;
	    }
	   	var cat1_pi2_committee_a = 0;
	   	if($("#cat1_pi2_committee_a").length)
	    {
			cat1_pi2_committee_a=document.getElementById('cat1_pi2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi2_sys.php',       
	        data:{
	        	cat1_pi2_self_a:cat1_pi2_self_a,
	        	cat1_pi2_hod_a:cat1_pi2_hod_a,
	        	cat1_pi2_committee_a:cat1_pi2_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi2_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});


$(document).ready(function(){
    $('body').on('click','#partb_cat1_pi3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat1_pi3_self_a = document.getElementById('cat1_pi3_self_a').value;

	    var cat1_pi3_hod_a =0;
	    if($("#cat1_pi3_hod_a").length)
	    {
	     	cat1_pi3_hod_a=document.getElementById('cat1_pi3_hod_a').value;
	    }
	   	var cat1_pi3_committee_a = 0;
	   	if($("#cat1_pi3_committee_a").length)
	    {
			cat1_pi3_committee_a=document.getElementById('cat1_pi3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi3_sys.php',       
	        data:{
	        	cat1_pi3_self_a:cat1_pi3_self_a,
	        	cat1_pi3_hod_a:cat1_pi3_hod_a,
	        	cat1_pi3_committee_a:cat1_pi3_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi3_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat1_pi4_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat1_pi4_self_a = document.getElementById('cat1_pi4_self_a').value;

	    var cat1_pi4_hod_a =0;
	    if($("#cat1_pi4_hod_a").length)
	    {
	     	cat1_pi4_hod_a=document.getElementById('cat1_pi4_hod_a').value;
	    }
	   	var cat1_pi4_committee_a = 0;
	   	if($("#cat1_pi4_committee_a").length)
	    {
			cat1_pi4_committee_a=document.getElementById('cat1_pi4_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi4_sys.php',       
	        data:{
	        	cat1_pi4_self_a:cat1_pi4_self_a,
	        	cat1_pi4_hod_a:cat1_pi4_hod_a,
	        	cat1_pi4_committee_a:cat1_pi4_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi4_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat1_pitotal_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat1_pitotal_self_a = document.getElementById('cat1_pitotal_self_a').value;

	    var cat1_pitotal_hod_a =0;
	    if($("#cat1_pitotal_hod_a").length)
	    {
	     	cat1_pitotal_hod_a=document.getElementById('cat1_pitotal_hod_a').value;
	    }
	   	var cat1_pitotal_committee_a = 0;
	   	if($("#cat1_pitotal_committee_a").length)
	    {
			cat1_pitotal_committee_a=document.getElementById('cat1_pitotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pitotal_sys.php',       
	        data:{
	        	cat1_pitotal_self_a:cat1_pitotal_self_a,
	        	cat1_pitotal_hod_a:cat1_pitotal_hod_a,
	        	cat1_pitotal_committee_a:cat1_pitotal_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pitotal_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Category-II~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$(document).ready(function(){
    $('body').on('click','#partb_cat2_pii1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat2_pii1_self_a = document.getElementById('cat2_pii1_self_a').value;

	    var cat2_pii1_hod_a =0;
	    if($("#cat2_pii1_hod_a").length)
	    {
	     	cat2_pii1_hod_a=document.getElementById('cat2_pii1_hod_a').value;
	    }
	   	var cat2_pii1_committee_a = 0;
	   	if($("#cat2_pii1_committee_a").length)
	    {
			cat2_pii1_committee_a=document.getElementById('cat2_pii1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi1_sys.php',       
	        data:{
	        	cat2_pii1_self_a:cat2_pii1_self_a,
	        	cat2_pii1_hod_a:cat2_pii1_hod_a,
	        	cat2_pii1_committee_a:cat2_pii1_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat2_pii1_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat2_pii2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat2_pii2_self_a = document.getElementById('cat2_pii2_self_a').value;

	    var cat2_pii2_hod_a =0;
	    if($("#cat2_pii2_hod_a").length)
	    {
	     	cat2_pii2_hod_a=document.getElementById('cat2_pii2_hod_a').value;
	    }
	   	var cat2_pii2_committee_a = 0;
	   	if($("#cat2_pii2_committee_a").length)
	    {
			cat2_pii2_committee_a=document.getElementById('cat2_pii2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi2_sys.php',       
	        data:{
	        	cat2_pii2_self_a:cat2_pii2_self_a,
	        	cat2_pii2_hod_a:cat2_pii2_hod_a,
	        	cat2_pii2_committee_a:cat2_pii2_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat2_pii2_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat2_pii3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat2_pii3_self_a = document.getElementById('cat2_pii3_self_a').value;

	    var cat2_pii3_hod_a =0;
	    if($("#cat2_pii3_hod_a").length)
	    {
	     	cat2_pii3_hod_a=document.getElementById('cat2_pii3_hod_a').value;
	    }
	   	var cat2_pii3_committee_a = 0;
	   	if($("#cat2_pii3_committee_a").length)
	    {
			cat2_pii3_committee_a=document.getElementById('cat2_pii3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi3_sys.php',       
	        data:{
	        	cat2_pii3_self_a:cat2_pii3_self_a,
	        	cat2_pii3_hod_a:cat2_pii3_hod_a,
	        	cat2_pii3_committee_a:cat2_pii3_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat2_pii3_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat2_pii4_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat2_pii4_self_a = document.getElementById('cat2_pii4_self_a').value;

	    var cat2_pii4_hod_a =0;
	    if($("#cat2_pii4_hod_a").length)
	    {
	     	cat2_pii4_hod_a=document.getElementById('cat2_pii4_hod_a').value;
	    }
	   	var cat2_pii4_committee_a = 0;
	   	if($("#cat2_pii4_committee_a").length)
	    {
			cat2_pii4_committee_a=document.getElementById('cat2_pii4_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi4_sys.php',       
	        data:{
	        	cat2_pii4_self_a:cat2_pii4_self_a,
	        	cat2_pii4_hod_a:cat2_pii4_hod_a,
	        	cat2_pii4_committee_a:cat2_pii4_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat2_pii4_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat2_piitotal_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat2_piitotal_self_a = document.getElementById('cat2_piitotal_self_a').value;

	    var cat2_piitotal_hod_a =0;
	    if($("#cat2_piitotal_hod_a").length)
	    {
	     	cat2_piitotal_hod_a=document.getElementById('cat2_piitotal_hod_a').value;
	    }
	   	var cat2_piitotal_committee_a = 0;
	   	if($("#cat2_piitotal_committee_a").length)
	    {
			cat2_piitotal_committee_a=document.getElementById('cat2_piitotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pitotal_sys.php',       
	        data:{
	        	cat2_piitotal_self_a:cat2_piitotal_self_a,
	        	cat2_piitotal_hod_a:cat2_piitotal_hod_a,
	        	cat2_piitotal_committee_a:cat2_piitotal_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat2_piitotal_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Category-III~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii1_self_a = document.getElementById('cat3_piii1_self_a').value;

	    var cat3_piii1_hod_a =0;
	    if($("#cat3_piii1_hod_a").length)
	    {
	     	cat3_piii1_hod_a=document.getElementById('cat3_piii1_hod_a').value;
	    }
	   	var cat3_piii1_committee_a = 0;
	   	if($("#cat3_piii1_committee_a").length)
	    {
			cat3_piii1_committee_a=document.getElementById('cat3_piii1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii1_sys.php',       
	        data:{
	        	cat3_piii1_self_a:cat3_piii1_self_a,
	        	cat3_piii1_hod_a:cat3_piii1_hod_a,
	        	cat3_piii1_committee_a:cat3_piii1_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii1_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii2_self_a = document.getElementById('cat3_piii2_self_a').value;

	    var cat3_piii2_hod_a =0;
	    if($("#cat3_piii2_hod_a").length)
	    {
	     	cat3_piii2_hod_a=document.getElementById('cat3_piii2_hod_a').value;
	    }
	   	var cat3_piii2_committee_a = 0;
	   	if($("#cat3_piii2_committee_a").length)
	    {
			cat3_piii2_committee_a=document.getElementById('cat3_piii2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii2_sys.php',       
	        data:{
	        	cat3_piii2_self_a:cat3_piii2_self_a,
	        	cat3_piii2_hod_a:cat3_piii2_hod_a,
	        	cat3_piii2_committee_a:cat3_piii2_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii2_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii3_self_a = document.getElementById('cat3_piii3_self_a').value;

	    var cat3_piii3_hod_a =0;
	    if($("#cat3_piii3_hod_a").length)
	    {
	     	cat3_piii3_hod_a=document.getElementById('cat3_piii3_hod_a').value;
	    }
	   	var cat3_piii3_committee_a = 0;
	   	if($("#cat3_piii3_committee_a").length)
	    {
			cat3_piii3_committee_a=document.getElementById('cat3_piii3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii3_sys.php',       
	        data:{
	        	cat3_piii3_self_a:cat3_piii3_self_a,
	        	cat3_piii3_hod_a:cat3_piii3_hod_a,
	        	cat3_piii3_committee_a:cat3_piii3_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii3_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii4_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii4_self_a = document.getElementById('cat3_piii4_self_a').value;

	    var cat3_piii4_hod_a =0;
	    if($("#cat3_piii4_hod_a").length)
	    {
	     	cat3_piii4_hod_a=document.getElementById('cat3_piii4_hod_a').value;
	    }
	   	var cat3_piii4_committee_a = 0;
	   	if($("#cat3_piii4_committee_a").length)
	    {
			cat3_piii4_committee_a=document.getElementById('cat3_piii4_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii4_sys.php',       
	        data:{
	        	cat3_piii4_self_a:cat3_piii4_self_a,
	        	cat3_piii4_hod_a:cat3_piii4_hod_a,
	        	cat3_piii4_committee_a:cat3_piii4_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii4_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii5_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii5_self_a = document.getElementById('cat3_piii5_self_a').value;

	    var cat3_piii5_hod_a =0;
	    if($("#cat3_piii5_hod_a").length)
	    {
	     	cat3_piii5_hod_a=document.getElementById('cat3_piii5_hod_a').value;
	    }
	   	var cat3_piii5_committee_a = 0;
	   	if($("#cat3_piii5_committee_a").length)
	    {
			cat3_piii5_committee_a=document.getElementById('cat3_piii5_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii5_sys.php',       
	        data:{
	        	cat3_piii5_self_a:cat3_piii5_self_a,
	        	cat3_piii5_hod_a:cat3_piii5_hod_a,
	        	cat3_piii5_committee_a:cat3_piii5_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii5_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii6_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii6_self_a = document.getElementById('cat3_piii6_self_a').value;

	    var cat3_piii6_hod_a =0;
	    if($("#cat3_piii6_hod_a").length)
	    {
	     	cat3_piii6_hod_a=document.getElementById('cat3_piii6_hod_a').value;
	    }
	   	var cat3_piii6_committee_a = 0;
	   	if($("#cat3_piii6_committee_a").length)
	    {
			cat3_piii6_committee_a=document.getElementById('cat3_piii6_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii6_sys.php',       
	        data:{
	        	cat3_piii6_self_a:cat3_piii6_self_a,
	        	cat3_piii6_hod_a:cat3_piii6_hod_a,
	        	cat3_piii6_committee_a:cat3_piii6_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii6_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii7_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii7_self_a = document.getElementById('cat3_piii7_self_a').value;

	    var cat3_piii7_hod_a =0;
	    if($("#cat3_piii7_hod_a").length)
	    {
	     	cat3_piii7_hod_a=document.getElementById('cat3_piii7_hod_a').value;
	    }
	   	var cat3_piii7_committee_a = 0;
	   	if($("#cat3_piii7_committee_a").length)
	    {
			cat3_piii7_committee_a=document.getElementById('cat3_piii7_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii7_sys.php',       
	        data:{
	        	cat3_piii7_self_a:cat3_piii7_self_a,
	        	cat3_piii7_hod_a:cat3_piii7_hod_a,
	        	cat3_piii7_committee_a:cat3_piii7_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii7_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii8_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii8_self_a = document.getElementById('cat3_piii8_self_a').value;

	    var cat3_piii8_hod_a =0;
	    if($("#cat3_piii8_hod_a").length)
	    {
	     	cat3_piii8_hod_a=document.getElementById('cat3_piii8_hod_a').value;
	    }
	   	var cat3_piii8_committee_a = 0;
	   	if($("#cat3_piii8_committee_a").length)
	    {
			cat3_piii8_committee_a=document.getElementById('cat3_piii8_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii8_sys.php',       
	        data:{
	        	cat3_piii8_self_a:cat3_piii8_self_a,
	        	cat3_piii8_hod_a:cat3_piii8_hod_a,
	        	cat3_piii8_committee_a:cat3_piii8_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii8_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii9_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii9_self_a = document.getElementById('cat3_piii9_self_a').value;

	    var cat3_piii9_hod_a =0;
	    if($("#cat3_piii9_hod_a").length)
	    {
	     	cat3_piii9_hod_a=document.getElementById('cat3_piii9_hod_a').value;
	    }
	   	var cat3_piii9_committee_a = 0;
	   	if($("#cat3_piii9_committee_a").length)
	    {
			cat3_piii9_committee_a=document.getElementById('cat3_piii9_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii9_sys.php',       
	        data:{
	        	cat3_piii9_self_a:cat3_piii9_self_a,
	        	cat3_piii9_hod_a:cat3_piii9_hod_a,
	        	cat3_piii9_committee_a:cat3_piii9_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii9_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat3_piii10_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii10_self_a = document.getElementById('cat3_piii10_self_a').value;

	    var cat3_piii10_hod_a =0;
	    if($("#cat3_piii10_hod_a").length)
	    {
	     	cat3_piii10_hod_a=document.getElementById('cat3_piii10_hod_a').value;
	    }
	   	var cat3_piii10_committee_a = 0;
	   	if($("#cat3_piii10_committee_a").length)
	    {
			cat3_piii10_committee_a=document.getElementById('cat3_piii10_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii10_sys.php',       
	        data:{
	        	cat3_piii10_self_a:cat3_piii10_self_a,
	        	cat3_piii10_hod_a:cat3_piii10_hod_a,
	        	cat3_piii10_committee_a:cat3_piii10_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii10_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});


$(document).ready(function(){
    $('body').on('click','#partb_cat3_piiitotal_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piiitotal_self_a = document.getElementById('cat3_piiitotal_self_a').value;

	    var cat3_piiitotal_hod_a =0;
	    if($("#cat3_piiitotal_hod_a").length)
	    {
	     	cat3_piiitotal_hod_a=document.getElementById('cat3_piiitotal_hod_a').value;
	    }
	   	var cat3_piiitotal_committee_a = 0;
	   	if($("#cat3_piiitotal_committee_a").length)
	    {
			cat3_piiitotal_committee_a=document.getElementById('cat3_piiitotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piiitotal_sys.php',       
	        data:{
	        	cat3_piiitotal_self_a:cat3_piiitotal_self_a,
	        	cat3_piiitotal_hod_a:cat3_piiitotal_hod_a,
	        	cat3_piiitotal_committee_a:cat3_piiitotal_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piiitotal_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Category-IV~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$(document).ready(function(){
    $('body').on('click','#partb_cat4_piv1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat4_piv1_self_a = document.getElementById('cat4_piv1_self_a').value;

	    var cat4_piv1_hod_a =0;
	    if($("#cat4_piv1_hod_a").length)
	    {
	     	cat4_piv1_hod_a=document.getElementById('cat4_piv1_hod_a').value;
	    }
	   	var cat4_piv1_committee_a = 0;
	   	if($("#cat4_piv1_committee_a").length)
	    {
			cat4_piv1_committee_a=document.getElementById('cat4_piv1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_piv1_sys.php',       
	        data:{
	        	cat4_piv1_self_a:cat4_piv1_self_a,
	        	cat4_piv1_hod_a:cat4_piv1_hod_a,
	        	cat4_piv1_committee_a:cat4_piv1_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_piv1_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat4_piv2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat4_piv2_self_a = document.getElementById('cat4_piv2_self_a').value;

	    var cat4_piv2_hod_a =0;
	    if($("#cat4_piv2_hod_a").length)
	    {
	     	cat4_piv2_hod_a=document.getElementById('cat4_piv2_hod_a').value;
	    }
	   	var cat4_piv2_committee_a = 0;
	   	if($("#cat4_piv2_committee_a").length)
	    {
			cat4_piv2_committee_a=document.getElementById('cat4_piv2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_piv2_sys.php',       
	        data:{
	        	cat4_piv2_self_a:cat4_piv2_self_a,
	        	cat4_piv2_hod_a:cat4_piv2_hod_a,
	        	cat4_piv2_committee_a:cat4_piv2_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_piv2_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat4_piv3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat4_piv3_self_a = document.getElementById('cat4_piv3_self_a').value;

	    var cat4_piv3_hod_a =0;
	    if($("#cat4_piv3_hod_a").length)
	    {
	     	cat4_piv3_hod_a=document.getElementById('cat4_piv3_hod_a').value;
	    }
	   	var cat4_piv3_committee_a = 0;
	   	if($("#cat4_piv3_committee_a").length)
	    {
			cat4_piv3_committee_a=document.getElementById('cat4_piv3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_piv3_sys.php',       
	        data:{
	        	cat4_piv3_self_a:cat4_piv3_self_a,
	        	cat4_piv3_hod_a:cat4_piv3_hod_a,
	        	cat4_piv3_committee_a:cat4_piv3_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_piv3_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});

$(document).ready(function(){
    $('body').on('click','#partb_cat4_pivtotal_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat4_pivtotal_self_a = document.getElementById('cat4_pivtotal_self_a').value;

	    var cat4_pivtotal_hod_a =0;
	    if($("#cat4_pivtotal_hod_a").length)
	    {
	     	cat4_pivtotal_hod_a=document.getElementById('cat4_pivtotal_hod_a').value;
	    }
	   	var cat4_pivtotal_committee_a = 0;
	   	if($("#cat4_pivtotal_committee_a").length)
	    {
			cat4_pivtotal_committee_a=document.getElementById('cat4_pivtotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_pivtotal_sys.php',       
	        data:{
	        	cat4_pivtotal_self_a:cat4_pivtotal_self_a,
	        	cat4_pivtotal_hod_a:cat4_pivtotal_hod_a,
	        	cat4_pivtotal_committee_a:cat4_pivtotal_committee_a,
	        	year:year
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_pivtotal_msg").innerHTML="Saved!";
	            	// alert("sucessgful");
	                // $('.notif').css('background-color', '#EAEAEA');
	                // document.getElementById("notificationsNumber").innerHTML=0;
	                
	                // if(window.location.pathname=='/meagl.com/userprofile.php'document.getElementById("notificationsNumberUP")){
	                //     document.getElementById("notificationsNumberUP").innerHTML="unseen: "+0;
	                // }
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });
});
