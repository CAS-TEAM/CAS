// PI data portal data
$(document).ready(function(){

	$(".piportalform").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  
		
		$.ajax
		({
			type: 'POST',
			url: 'pidataportal_sys.php',
			data:formData,
			//dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,                
			success: function (response) 
			{
				// alert(response);
				$(".pidataportal").trigger("reset");
				if(response.trim()=="success")
				{           
					document.getElementById('message').innerHTML="PI data successfully updated";
				}      
				else
				{
					document.getElementById('message').innerHTML="There was some error!";
				}
				// document.getElementById('send-otp').innerHTML="Send OTP";
				// $("#send-otp").prop("disabled",false);
				// $(".loader").toggle();
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

// send OTP form system
$(document).ready(function(){

	$(".send-otp-form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  

		document.getElementById('send-otp').innerHTML="Sending..";
		$("#send-otp").prop("disabled",true);
		$(".loader").toggle();
		
		$.ajax
		({
			type: 'POST',
			url: 'otp-system.php',
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
					$("#otpsent-message").toggle();
				}      
				document.getElementById('send-otp').innerHTML="Send OTP";
				$("#send-otp").prop("disabled",false);
				$(".loader").toggle();
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

// login through OTP system
$(document).ready(function(){

	$(".verify-otp-form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  

		document.getElementById('verify-otp').innerHTML="Verifying";
		$("#verify-otp").prop("disabled",true);
		$(".loader").toggle();
		document.getElementById("otpsent-message").style.display="none";
		
		$.ajax
		({
			type: 'POST',
			url: 'verify-otp-system.php',
			data:formData,
			//dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,                
			success: function (response) 
			{
				// alert(response);

				if(response.trim()!="failure")
				{           
					// $("#otpsent-message").toggle();
					window.location.href="http://182.76.21.124:8080/cas/"+response.trim();
				}      
				else
				{
					document.getElementById("verifyotp-message").style.display="block";
				}
				document.getElementById('verify-otp').innerHTML="Verify";
				$("#verify-otp").prop("disabled",false);
				$(".loader").toggle();
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

//admin panel stuff
$(document).ready(function(){

	$('.admin-table-department').click(function(){

		$(this).removeAttr('readonly');

		var idstr = $(this).attr('id');
		var facultyId=parseInt(idstr.match(/\d+$/)[0], 10);

		document.getElementById('update'+facultyId).disabled = false;
		$('#update'+facultyId).addClass('btn-primary');

	});

	$('.admin-table-doj').click(function(){

		$(this).removeAttr('readonly');

		var idstr = $(this).attr('id');
		var facultyId=parseInt(idstr.match(/\d+$/)[0], 10);

		document.getElementById('update'+facultyId).disabled = false;
		$('#update'+facultyId).addClass('btn-primary');

	});

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

					$("#department"+facultyId).prop("readonly", true);
					$("#doj"+facultyId).prop("readonly", true);
				}      
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

$(document).ready(function(){

	$(".delete-user-form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  
		var duconfirm=confirm("Delete this user?");
		if(duconfirm==true)
		{
			$.ajax
			({
				type: 'POST',
				url: 'delete-user-system.php',
				data:formData,
				//dataType: 'text',  // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,                
				success: function (response) 
				{
					// alert(response);
					          
					// var trid=document.getElementById("user"+response.trim());
					$("#user"+response.trim()).remove();
					      
				},                
				error: function(xhr, status, error) {
					alert(xhr.responseText);
				}              
			});
			
			return false;
		}
	})
});

$(document).ready(function(){

	$(".delete-field-form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  
		var duconfirm=confirm("Delete this field?");
		if(duconfirm==true)
		{
			$.ajax
			({
				type: 'POST',
				url: 'delete-field-system.php',
				data:formData,
				//dataType: 'text',  // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,                
				success: function (response) 
				{
					// alert(response);
					          
					// var trid=document.getElementById("user"+response.trim());
					$("#field"+response.trim()).remove();
					      
				},                
				error: function(xhr, status, error) {
					alert(xhr.responseText);
				}              
			});
			
			return false;
		}
	})
});

// grant access for edit access request
$(document).ready(function(){
	$(".grant-access-form").submit(function(e){ 
		e.preventDefault();        
		var formData = new FormData(this);  
		var duconfirm=confirm("Grant edit access to this user?");
		if(duconfirm==true)
		{
			// alert('hey');
			$.ajax
			({
				type: 'POST',
				url: 'grant_access_sys.php',
				data:formData,
				//dataType: 'text',  // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,                
				success: function (response) 
				{
					// alert(response);
					          
					// var trid=document.getElementById("user"+response.trim());
					$("#ga"+response.trim()).remove();
					      
				},                
				error: function(xhr, status, error) {
					alert(xhr.responseText);
				}              
			});
			
			return false;
		}
	})
});

//part A stuff

function disableAinput(){
	// alert("disabling");
	$("#part-a-form input").prop("disabled", true);//disablig all inputs
	// $(".part-a-plus-btn").prop("onclick", null).off("click");//diabling on-click on dynamic form plus button
	// $("#part-a-form :input").prop("disabled", true);//disabling all inputs
	// $(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also
	// $('.part-a-plus-button:button').prop('disabled', true);//diabling on-click on dynamic form plus button
	// $('.part-a-minus-button').prop("onclick", null).off("click");
}

function disableBinput(){
	// alert("disabling");
	$("#part-b-form input").prop("disabled", true);//disablig all inputs
	$(".part-b-plus-btn").prop("onclick", null).off("click");//diabling on-click on dynamic form plus button
}

// $(document).ready(function(){

	$(document).on('click','#part-a-save-form',function(){
		// alert('ho');
		// alert("save here");
		$("#part-a-form input").prop("disabled", false);//have to enable inputs before submitting
		$("#part-a-form textarea").prop("disabled", false);
		// alert(document.getElementById("alreadybegun").value);
		$('form#part-a-form').submit();

	});

	// $('#part-a-edit-form').click(function(){
	$(document).on('click','#part-a-edit-form',function(){
		// alert("edit here");

		$("#part-a-form input").prop("disabled", false);//enabling all inputs
		$("#part-a-form textarea").prop("disabled", false);
		// enabling all except mobileno and email
		$("#email").prop("disabled", true);
		$("#mobileno").prop("disabled", true);

		// $(".part-a-plus-btn").prop("onclick", parta_dynamic_form()).off("click");//diabling on-click on dynamic form plus button
		//enable on click for the dynamic form and disable edit button
		// $(".part-a-minus-button").prop("onclick", true);
		// $(".part-a-plus-btn").prop("onclick", true);

	});

// });

function getPartAData(){

	var yr=document.getElementById('year').value;
	var userId=document.getElementById('formFacultyId').value;

	// alert("yr="+yr);

	$.ajax
	({
		type: 'POST',
		url: 'get-part-a-data.php',
		data:
		{
			year:yr,
			userId:userId
		},
		//dataType: 'text',  // what to expect back from the PHP script, if anything               
		success: function (response) 
		{
			// alert(response);

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
						// alert(k);
					    //display the key and value pair
					    if(k=='notalreadybegun')
					    {
					    	// alert('in');
					    	//if data of previous year is being fetched, then that would mean that the current year's data hasn't been stored in the DB yet. Therefore, it the already begun field for the current year should be set to 0 instead of 1
					    	document.getElementById("alreadybegun").value=0; 
					    }
					    else if(k!="parta_dynamic_form")
					    {
					    	// alert(k+","+v);
					    	if(k=='customRadioInline1')
					    	{
					    		if(v=='Yes')
					    		{
					    			$("input[name='customRadioInline1'][value='Yes']").prop('checked',true);
					    		}
					    		else
					    		{
					    			$("input[name='customRadioInline1'][value='No']").prop('checked',true);
					    		}
					    		// document.getElementById(k).value=v;
						    	// $("#"+k).prop("disabled", true);
					    	}
					    	else
					    	{					    		
						    	document.getElementById(k).value=v;
						    	$("#"+k).prop("disabled", true);
					    	}
					    }					    
					    else
					    {
					    	// alert(k);
					    	// alert("in");
					    	

					    	var srno=JSON.parse(v[0]['srno']);
					    	var course=JSON.stringify(v[1]['course']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    	var days=JSON.stringify(v[2]['days']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    	var agency=JSON.stringify(v[3]['agency']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    	var rolee=JSON.stringify(v[4]['rolee']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    	var file=JSON.stringify(v[5]['file']).replace(/['"]+/g, '');

					    	// alert(srno+","+course+","+days+","+agency);
					    	// alert(file);
					    	if(srno!=0)
					    	{
					    		room++;
							    var objTo = document.getElementById('parta_dynamic_form')
							    var divtest = document.createElement("div");
								divtest.setAttribute("class", "form-group removeclass"+room);
								var rdiv = 'removeclass'+room;
							    
							    if(room!=1)
							    {
							    	divtest.innerHTML = '<div class="row form-inline justify-content-center"><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four sttppartasrno" id="srno'+room+'" name="srno[]" value="" placeholder="Sr.no" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="course'+room+'" name="course[]" value="" placeholder="Name of summer school/course" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four sttppartaduration" id="days'+room+'" name="days[]" value="" placeholder="Duration(days)" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four sttppartaog" id="agency'+room+'" name="agency[]" value="" placeholder="Organising Agency" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="rolee'+room+'" name="rolee[]" value="" placeholder="If organised in KJSCE, mention the role played" disabled></div></div><div class="nopadding"><div class="form-group dynamic-four"><div class="filepart"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="file'+room+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="file'+room+'" name="file[]" value="" placeholder=""><input type="hidden" name="filelocation[]" id="filelocation'+room+'" value="'+file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location=none" id="viewfile'+room+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div><div class="input-group-btn"> <img class="part-a-minus-button" src="https://img.icons8.com/color/48/000000/minus.png" onclick="remove_education_fields('+ room +');" style="cursor:pointer"> </div></div><div class="clear"></div></div>';
							    	$("#parta_dynamic_form").append(divtest);
							    	// alert('room->'+room+' srno->'+srno);
							    	// $(".part-a-minus-button").prop("onclick", false);//disabling the minus button onclicks

							    	// $("#"+divtest+" :input").prop("disabled", true);//disabling all inputs
									
							    	// objTo.appendChild(divtest);		
							    	// alert("room="+room+","+days+","+agency);
							    	document.getElementById('srno'+room).value=srno;
							    	document.getElementById('course'+room).value=course;
							    	document.getElementById('days'+room).value=days;
							    	document.getElementById('agency'+room).value=agency;
							    	document.getElementById('rolee'+room).value=rolee;
							    	document.getElementById('viewfile'+room).href="viewfile.php?location="+file;

							    	// alert(window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1));
							    	if(window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1).trim()=='self-appraisal-partA.php')
							    	{
							    		$('.part-a-minus-button').remove();	
							    	}
							    }
							    else
							    {
							    	// alert('idhar');
							    	document.getElementById('srno'+room).value=srno;
							    	document.getElementById('course'+room).value=course;
							    	document.getElementById('days'+room).value=days;
							    	document.getElementById('agency'+room).value=agency;
							    	// document.getElementById('file'+room).value=file;
							    	document.getElementById('rolee'+room).value=rolee;
							    	document.getElementById('viewfile'+room).href="viewfile.php?location="+file;
							    	document.getElementById('filelocation'+room).value=file;

							    }
							    
							    
					    	}
					    	
					    }
					    
					});
				}
				if(room==0){
					room=1;
				}
				document.getElementById("room").value=room;
				// $(".part-a-plus-btn").prop("onclick", false);

				$('a').each(function(){ 
		            var url = $(this).attr("href"); // Get current url
		            // if(url.substring(0,url.indexOf("?")))
		            if(url!=null && url.substring(0,url.indexOf("?"))=='viewfile.php')
		            {
		            	// alert(url);
		            	// alert(url.substring(url.indexOf("=")+1));
		            	if(url.substring(url.indexOf("=")+1)!='NAN' && url.substring(url.indexOf("=")+1)!='none')
		            	{
		            		$(this).children().attr("src", "https://img.icons8.com/color/24/000000/document.png");
		            	}
		            }
		            
		        });
				
			}
		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});
	
	return false;
}

if(localStorage.getItem("change")==null)
{
	var change=1;
	localStorage.setItem("change", change);
	// alert(localStorage.getItem("change", change));
}
else
{
	// alert(localStorage.getItem("change"));
	// (localStorage.getItem("change")==false)
	// {
	// 	// alert('nikaldo');
	// 	$('#part-a-save-form').remove();
	// 	$('#part-a-edit-form').remove();
	// 	change=1;
	// 	localStorage.setItem("change", change);
	// }
}

function getDataChange(){
	if(!confirm("Do you want to change your Part A data?")) 
	{
		// alert('g');
		// control enters here if the user chooses no
		$("#part-a-save-form").trigger('click');
		change=0;
		localStorage.setItem("change", change);
		// $('#part-a-save-form').remove();
		// $('#part-a-edit-form').remove();
	}
	else
	{
		// alert('else');
		$("#part-a-save-form").trigger('click');
		change=1;
		localStorage.setItem("change", change);
	}
}

//PART B stuff

$(document).ready(function(){

	$('#part-b-save-form').click(function(){

		// alert("save here");
		$("#part-b-form input").prop("disabled", false);//have to enable inputs before submitting
		$("#part-b-form textarea").prop("disabled", false);
		// alert(document.getElementById("alreadybegun").value);
		$('form#part-b-form').submit();

	});

	$('#part-b-edit-form').click(function(){

		// alert("edit here");

		$("#part-b-form input").not(".selfapp, .hodapp, .commapp").prop("disabled", false);//disablig all inputs
		$("#part-b-form textarea").not(".selfapp, .hodapp, .commapp").prop("disabled", false);
		// $(".part-a-plus-btn").prop("onclick", parta_dynamic_form()).off("click");//diabling on-click on dynamic form plus button
		//enable on click for the dynamic form and disable edit button

	});

});


function getPartBData(){

	var yr=document.getElementById('year').value;
	var userId=document.getElementById('formFacultyId').value;

	// alert("yr="+yr);

	$.ajax
	({
		type: 'POST',
		url: 'get-part-b-data.php',
		data:
		{
			year:yr,
			userId:userId
		},
		//dataType: 'text',  // what to expect back from the PHP script, if anything               
		success: function (response) 
		{
			// alert(response);

			if(response.trim()=="not begun")
			{           
				// $('#myModal').modal('show');
				document.getElementById("alreadybegun").value=0;
			}
			else
			{
				document.getElementById("alreadybegun").value=1;

				// var room=0;//variable for the dynamic form

				var i=-1;
				var j=-1;
				var k=-1;
				var l=-1;
				var m=-1;
				var n=-1;
				var o=-1;
				var p=-1;
				var q=-1;
				var r=-1;
				var s=-1;
				var t=-1;
				var u=-1;
				var v1=-1;
				var w=-1;
				var x=-1;
				var y=-1;
				var z=-1;

				var ppr=-1;
				var ppric=-1;
				var pprinc=-1;
				var pprbk=-1;

				var result = $.parseJSON(response);
				for(var ii=0;ii<result.length;ii++)
				{
					var res=result[ii];
					// alert("res="+res);

					$.each(res, function(key, v) {
					    //display the key and value pair
					    // alert("k="+k+" v="+v);
					    if(key!="part_b_cat_1_cto" && key!="part_b_cat_1_cte" && key!="part_b_cat_1_dar" && key!="part_b_cat_2_ha" && key!="part_b_cat_2_act" && key!="part_b_cat_2_exc" && key!="part_b_cat_2_c" && key!="part_b_cat_3_pp" && key!="part_b_cat_3_ppic" && key!="part_b_cat_3_ppinc" && key!="part_b_cat_3_bk" && key!="part_b_cat_3_res" && key!="part_b_cat_3_ores" && key!="part_b_cat_3_cres" && key!="part_b_cat_3_pip" && key!="part_b_cat_4_sem" && key!="part_b_cat_4_inv" && key!="part_b_cat_4_creds" && key!="o1file" && key!="o2file" && key!="o3file" && key!="o4file" && key!="o5file" && key!="o6file" && key!="o7file" && key!="o8file" && key!="o9file" && key!="o10file" && key!="o11file" && key!="o12file" && key!="o13file" && key!="e1file" && key!="e2file" && key!="e3file" && key!="e4file" && key!="e5file" && key!="e6file" && key!="e7file" && key!="e8file" && key!="e9file" && key!="e10file" && key!="e11file" && key!="e12file" && key!="e13file" && key!="dps1file" && key!="dps2file" && key!="dps3file" && key!="dps4file" && key!="dps5file" && key!="dps6file" && key!="dps7file" && key!="phdfile" && key!="mtechfile" && key!="btechfile")
					    {
					    	// alert("here");
					    	// alert("k="+key+" v="+v);
					    	document.getElementById(key).value=v;
					    	$("#"+key).prop("disabled", true);
					    }
					    else if(key=="o1file" || key=="o2file" || key=="o3file" || key=="o4file" || key=="o5file" || key=="o6file" || key=="o7file" || key=="o8file" || key=="o9file" || key=="o10file" || key=="o11file" || key=="o12file" || key=="o13file" || key=="e1file" || key=="e2file" || key=="e3file" || key=="e4file" || key=="e5file" || key=="e6file" || key=="e7file" || key=="e8file" || key=="e9file" || key=="e10file" || key=="e11file" || key=="e12file" || key=="e13file" || key=="dps1file" || key=="dps2file" || key=="dps3file" || key=="dps4file" || key=="dps5file" || key=="dps6file" || key=="dps7file" || key=="phdfile" || key=="mtechfile" || key=="btechfile")
					    {
					    	// alert(key+","+v);
					    	document.getElementById(key+"location").value=v;
					    	var ss=key.substring(0, key.indexOf('f'));//gets the part before "file" in key
					    	document.getElementById(ss+'viewfile').href="viewfile.php?location="+v;
					    	$("#"+key).prop("disabled", true);
					    }
					    else
					    {
					    	// alert(k);
					    	// alert("in");
					    	// alert(k);

					    	if(key=="part_b_cat_1_cto")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctocourse']));
					    		//replace applied to remove double quotes
					    		var ctocourse=JSON.stringify(v[0]['ctocourse']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctotyprlpt=JSON.stringify(v[1]['ctotyprlpt']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctougpg=JSON.stringify(v[2]['ctougpg']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctoclasssemester=JSON.stringify(v[3]['ctoclasssemester']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctohrsweek=JSON.stringify(v[4]['ctohrsweek']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctohrsengaged=JSON.stringify(v[5]['ctohrsengaged']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctomaxhrs=JSON.stringify(v[6]['ctomaxhrs']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctoc=JSON.stringify(v[7]['ctoc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctofbk=JSON.stringify(v[8]['ctofbk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctofile=JSON.stringify(v[9]['ctofile']).replace(/['"]+/g, '');
					    		i++;
					    		if(i!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr1'+i).html('<td id="ctosrno'+(i+1)+'">'+(i+1)+'</td><td><textarea name="ctocourse[]" id="ctocourse'+(i+1)+'" class="form-control" maxlength="200" value="">'+ctocourse+'</textarea></td><td><input type="text" name="ctotyprlpt[]" id="ctotyprlpt'+(i+1)+'" class="form-control" maxlength="200" value="'+ctotyprlpt+'"/></td><td><input type="text" name="ctougpg[]" id="ctougpg'+(i+1)+'" class="form-control" maxlength="200" value="'+ctougpg+'"/></td><td><input type="text" name="ctoclasssemester[]" id="ctoclasssemester'+(i+1)+'" class="form-control" maxlength="200" value="'+ctoclasssemester+'"/></td><td><input type="number" name="ctohrsweek[]" id="ctohrsweek'+(i+1)+'" class="form-control" maxlength="200" value="'+ctohrsweek+'"/></td><td><input type="number" name="ctohrsengaged[]" id="ctohrsengaged'+(i+1)+'" class="form-control" maxlength="200" value="'+ctohrsengaged+'"/></td><td><input type="number" name="ctomaxhrs[]" id="ctomaxhrs'+(i+1)+'" class="form-control" maxlength="200" value="'+ctomaxhrs+'"/></td><td><input type="number" name="ctoc[]" id="ctoc'+(i+1)+'" class="form-control" maxlength="200" value="'+ctoc+'"/></td><td><textarea name="ctofbk[]" id="ctofbk'+(i+1)+'" class="form-control" maxlength="200">'+ctofbk+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ctofile'+(i+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ctofile'+(i+1)+'" name="ctofile[]" value="" placeholder=""><input type="hidden" name="ctofilelocation[]" id="ctofilelocation'+(i+1)+'" value="'+ctofile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+ctofile+'" id="ctoviewfile'+(i+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							      	// $('#tab_logic1').append('<tr id="addr1'+(i+1)+'"></tr>');
							      	$('#addr1'+i).after('<tr id="addr1'+(i+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('ctosrno'+(i+1)).value=i+1;
					    			document.getElementById('ctocourse'+(i+1)).value=ctocourse;
					    			document.getElementById('ctotyprlpt'+(i+1)).value=ctotyprlpt;
					    			document.getElementById('ctougpg'+(i+1)).value=ctougpg;
					    			document.getElementById('ctoclasssemester'+(i+1)).value=ctoclasssemester;
					    			document.getElementById('ctohrsweek'+(i+1)).value=ctohrsweek;
					    			document.getElementById('ctohrsengaged'+(i+1)).value=ctohrsengaged;
					    			document.getElementById('ctomaxhrs'+(i+1)).value=ctomaxhrs;
					    			document.getElementById('ctoc'+(i+1)).value=ctoc;
					    			document.getElementById('ctofbk'+(i+1)).value=ctofbk;
					    			document.getElementById('ctoviewfile'+(i+1)).href="viewfile.php?location="+ctofile;
							    	document.getElementById('ctofilelocation'+(i+1)).value=ctofile;
					    		}

					    	}

					    	if(key=="part_b_cat_1_cte")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ctecourse=JSON.stringify(v[0]['ctecourse']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctetyprlpt=JSON.stringify(v[1]['ctetyprlpt']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cteugpg=JSON.stringify(v[2]['cteugpg']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cteclasssemester=JSON.stringify(v[3]['cteclasssemester']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctehrsweek=JSON.stringify(v[4]['ctehrsweek']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctehrsengaged=JSON.stringify(v[5]['ctehrsengaged']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctemaxhrs=JSON.stringify(v[6]['ctemaxhrs']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctec=JSON.stringify(v[7]['ctec']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctefbk=JSON.stringify(v[8]['ctefbk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ctefile=JSON.stringify(v[9]['ctefile']).replace(/['"]+/g, '');

					    		j++;
					    		if(j!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr2'+j).html('<td id="ctesrno'+(j+1)+'">'+(j+1)+'</td><td><textarea name="ctecourse[]" id="ctecourse'+(j+1)+'" class="form-control" maxlength="200" value="">'+ctecourse+'</textarea></td><td><input type="text" name="ctetyprlpt[]" id="ctetyprlpt'+(j+1)+'" class="form-control" maxlength="200" value="'+ctetyprlpt+'"/></td><td><input type="text" name="cteugpg[]" id="cteugpg'+(j+1)+'" class="form-control" maxlength="200" value="'+cteugpg+'"/></td><td><input type="text" name="cteclasssemester[]" id="cteclasssemester'+(j+1)+'" class="form-control" maxlength="200" value="'+cteclasssemester+'"/></td><td><input type="number" name="ctehrsweek[]" id="ctehrsweek'+(j+1)+'" class="form-control" maxlength="200" value="'+ctehrsweek+'"/></td><td><input type="number" name="ctehrsengaged[]" id="ctehrsengaged'+(j+1)+'" class="form-control" maxlength="200" value="'+ctehrsengaged+'"/></td><td><input type="number" name="ctemaxhrs[]" id="ctemaxhrs'+(j+1)+'" class="form-control" maxlength="200" value="'+ctemaxhrs+'"/></td><td><input type="number" name="ctec[]" id="ctec'+(j+1)+'" class="form-control" maxlength="200" value="'+ctec+'"/></td><td><textarea name="ctefbk[]" id="ctefbk'+(j+1)+'" class="form-control" maxlength="200">'+ctefbk+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ctefile'+(j+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ctefile'+(j+1)+'" name="ctefile[]" value="" placeholder=""><input type="hidden" name="ctefilelocation[]" id="ctefilelocation'+(j+1)+'" value="'+ctefile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+ctefile+'" id="cteviewfile'+(j+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

								    // $('#tab_logic2').append('<tr id="addr2'+(j+1)+'"></tr>');
								    $('#addr2'+j).after('<tr id="addr2'+(j+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('ctesrno'+(j+1)).value=j+1;
					    			document.getElementById('ctecourse'+(j+1)).value=ctecourse;
					    			document.getElementById('ctetyprlpt'+(j+1)).value=ctetyprlpt;
					    			document.getElementById('cteugpg'+(j+1)).value=cteugpg;
					    			document.getElementById('cteclasssemester'+(j+1)).value=cteclasssemester;
					    			document.getElementById('ctehrsweek'+(j+1)).value=ctehrsweek;
					    			document.getElementById('ctehrsengaged'+(j+1)).value=ctehrsengaged;
					    			document.getElementById('ctemaxhrs'+(j+1)).value=ctemaxhrs;
					    			document.getElementById('ctec'+(j+1)).value=ctec;
					    			document.getElementById('ctefbk'+(j+1)).value=ctefbk;
					    			document.getElementById('cteviewfile'+(j+1)).href="viewfile.php?location="+ctefile;
							    	document.getElementById('ctefilelocation'+(j+1)).value=ctefile;
					    		}

					    	}

					    	if(key=="part_b_cat_1_dar")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var dara=JSON.stringify(v[0]['dara']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var darb=JSON.stringify(v[1]['darb']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var darfile=JSON.stringify(v[2]['darfile']).replace(/['"]+/g, '');

					    		k++;
					    		if(k!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr3'+k).html('<td id="dar'+(k+1)+'">'+(k+1)+'</td><td><textarea name="dara[]" id="a'+(k+1)+'" class="form-control detailspartb" maxlength="200" value="">'+dara+'</textarea></td><td><textarea name="darb[]" id="b'+(k+1)+'" class="form-control detailspartb" maxlength="200" value="">'+darb+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="darfile'+(k+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="darfile'+(k+1)+'" name="darfile[]" value="" placeholder=""><input type="hidden" name="darfilelocation[]" id="darfilelocation'+(k+1)+'" value="'+darfile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+darfile+'" id="darviewfile'+(k+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							       // $('#tab_logic3').append('<tr id="addr3'+(k+1)+'"></tr>');
							       $('#addr3'+k).after('<tr id="addr3'+(k+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('dar'+(k+1)).value=k+1;
					    			document.getElementById('a'+(k+1)).value=dara;
					    			document.getElementById('b'+(k+1)).value=darb;
					    			document.getElementById('darviewfile'+(k+1)).href="viewfile.php?location="+darfile;
							    	document.getElementById('darfilelocation'+(k+1)).value=darfile;
					    		}

					    	}

					    	if(key=="part_b_cat_2_ha")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ha=JSON.stringify(v[0]['ha']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var hb=JSON.stringify(v[1]['hb']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var hfile=JSON.stringify(v[2]['hfile']).replace(/['"]+/g, '');

					    		l++;
					    		if(l!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><textarea name="ha[]" id="ha'+(l+1)+'" class="form-control adminpost" maxlength="200" value="">'+ha+'</textarea></td><td><textarea name="hb[]" id="hb'+(l+1)+'" class="form-control" maxlength="200" value="">'+hb+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="hfile'+(l+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="hfile'+(l+1)+'" name="hfile[]" value="" placeholder=""><input type="hidden" name="hfilelocation[]" id="hfilelocation'+(l+1)+'" value="'+hfile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+hfile+'" id="hviewfile'+(l+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							      	// $('#tab_logic4').append('<tr id="addr5'+(l+1)+'"></tr>');
							      	$('#addr5'+l).after('<tr id="addr5'+(l+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('hasr'+(l+1)).value=l+1;
					    			document.getElementById('ha'+(l+1)).value=ha;
					    			document.getElementById('hb'+(l+1)).value=hb;
					    			document.getElementById('hviewfile'+(l+1)).href="viewfile.php?location="+hfile;
							    	document.getElementById('hfilelocation'+(l+1)).value=hfile;
					    		}

					    	}

					    	if(key=="part_b_cat_2_act")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ea=JSON.stringify(v[0]['ea']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var eb=JSON.stringify(v[1]['eb']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var efile=JSON.stringify(v[2]['efile']).replace(/['"]+/g, '');

					    		m++;
					    		if(m!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr6'+m).html('<td id="actsr'+(m+1)+'">'+(m+1)+'</td><td><textarea name="ea[]" id="ea'+(m+1)+'" class="form-control adminpost" value="">'+ea+'</textarea></td><td><textarea name="eb[]" id="eb'+(m+1)+'" class="form-control" value="">'+eb+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="efile'+(m+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="efile'+(m+1)+'" name="efile[]" value="" placeholder=""><input type="hidden" name="efilelocation[]" id="efilelocation'+(m+1)+'" value="'+efile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+efile+'" id="eviewfile'+(m+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

								    // $('#tab_logic5').append('<tr id="addr6'+(m+1)+'"></tr>');
								    $('#addr6'+m).after('<tr id="addr6'+(m+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('actsr'+(m+1)).value=m+1;
					    			document.getElementById('ea'+(m+1)).value=ea;
					    			document.getElementById('eb'+(m+1)).value=eb;
					    			document.getElementById('eviewfile'+(m+1)).href="viewfile.php?location="+efile;
							    	document.getElementById('efilelocation'+(m+1)).value=efile;
					    		}

					    	}

					    	if(key=="part_b_cat_2_exc")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var eca=JSON.stringify(v[0]['eca']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ecb=JSON.stringify(v[1]['ecb']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ecfile=JSON.stringify(v[2]['ecfile']).replace(/['"]+/g, '');

					    		n++;
					    		if(n!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr7'+n).html('<td id="exca'+(n+1)+'">'+(n+1)+'</td><td><textarea name="eca[]" id="eca'+(n+1)+'" class="form-control adminpost" value="">'+eca+'</textarea></td><td><textarea name="ecb[]" id="ecb'+(n+1)+'" class="form-control" value="">'+ecb+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ecfile'+(n+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ecfile'+(n+1)+'" name="ecfile[]" value="" placeholder=""><input type="hidden" name="ecfilelocation[]" id="ecfilelocation'+(n+1)+'" value="'+ecfile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+ecfile+'" id="ecviewfile'+(n+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td> ');

							        // $('#tab_logic6').append('<tr id="addr7'+(n+1)+'"></tr>');
							        $('#addr7'+n).after('<tr id="addr7'+(n+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('exca'+(n+1)).value=n+1;
					    			document.getElementById('eca'+(n+1)).value=eca;
					    			document.getElementById('ecb'+(n+1)).value=ecb;
					    			document.getElementById('ecviewfile'+(n+1)).href="viewfile.php?location="+ecfile;
							    	document.getElementById('ecfilelocation'+(n+1)).value=ecfile;
					    		}

					    	}

					    	if(key=="part_b_cat_2_c")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ca=JSON.stringify(v[0]['ca']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cb=JSON.stringify(v[1]['cb']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cfile=JSON.stringify(v[2]['cfile']).replace(/['"]+/g, '');
					    		o++;
					    		if(o!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr8'+o).html('<td id="csr'+(o+1)+'">'+(o+1)+'</td><td><textarea name="ca[]" id="ca'+(o+1)+'" class="form-control adminpost" value="">'+ca+'</textarea></td><td><textarea name="cb[]" id="cb'+(o+1)+'" class="form-control" value="">'+cb+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cfile'+(o+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cfile'+(o+1)+'" name="cfile[]" value="" placeholder=""><input type="hidden" name="cfilelocation[]" id="cfilelocation'+(o+1)+'" value="'+cfile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+cfile+'" id="cviewfile'+(o+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>	');

							      	// $('#tab_logic7').append('<tr id="addr8'+(o+1)+'"></tr>');
							      	$('#addr8'+o).after('<tr id="addr8'+(o+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('csr'+(o+1)).value=o+1;
					    			document.getElementById('ca'+(o+1)).value=ca;
					    			document.getElementById('cb'+(o+1)).value=cb;
					    			document.getElementById('cviewfile'+(o+1)).href="viewfile.php?location="+cfile;
							    	document.getElementById('cfilelocation'+(o+1)).value=cfile;

					    		}

					    	}

					    	if(key=="part_b_cat_3_pp")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var pptitle=JSON.stringify(v[0]['pptitle']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppnpr=JSON.stringify(v[1]['ppnpr']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppisbn=JSON.stringify(v[2]['ppisbn']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppif=JSON.stringify(v[3]['ppif']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var customRadioInline1=JSON.stringify(v[4]['customRadioInline1']).replace(/['"]+/g, '');
					    		// alert(customRadioInline1);
					    		var ppnca=JSON.stringify(v[5]['ppnca']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppfile=JSON.stringify(v[6]['ppfile']).replace(/['"]+/g, '');
					    		ppr++;
					    		if(ppr!=0)
					    		{
					    			// alert(ppr);
					    			$('#ppr'+ppr).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers In Peer Reviewed Journals (Max. PI=100)</b></p></div></div<div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><textarea name="pptitle[]" id="pptitle'+ppr+'" class="form-control my-0 my-sm-0 titlecat3" maxlength="200" value="">'+pptitle+'</textarea></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of peer review Journals (not online journals)</label><textarea name="ppnpr[]" id="ppnpr'+ppr+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppnpr+'</textarea></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><textarea name="ppisbn[]" id="ppisbn'+ppr+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppisbn+'</textarea></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppif[]" id="ppif'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppif+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><label>Whether you are main author</label></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input yesradio" value="Yes"><label class="custom-control-label yes" for="customRadioInline1'+ppr+'">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppr+'">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppnca[]" id="ppnca'+ppr+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppnca+'"/>	</div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><p>* 20 marks for peer review journal first author <br>* 10 marks for second author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="ppfile'+ppr+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="ppfile'+ppr+'" name="ppfile[]" value="" placeholder=""><input type="hidden" name="ppfilelocation[]" id="ppfilelocation'+ppr+'" value="'+ppfile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+ppfile+'" id="ppviewfile'+ppr+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

								    // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
								    $('#ppr'+(ppr)).toggle();
								    $('#br'+(ppr)).toggle();
								    $('#ppr'+(ppr)).after('<br id="br'+(ppr+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppr'+(ppr+1)+'"></div>');

								    if(customRadioInline1=='Yes')
								    {
								    	$('#customRadioInline1'+(ppr)+'').prop("checked",true);
								    }
								    else
								    {
								    	$('#customRadioInline2'+(ppr)+'').prop("checked",true);
								    }	
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('pptitle'+(ppr+1)).value=pptitle;
					    			document.getElementById('ppnpr'+(ppr+1)).value=ppnpr;
					    			document.getElementById('ppisbn'+(ppr+1)).value=ppisbn;
					    			document.getElementById('ppif'+(ppr+1)).value=ppif;
					    			// document.getElementById('customRadioInline1'+(ppr+1)).value=customRadioInline1;
					    			document.getElementById('ppnca'+(ppr+1)).value=ppnca;
					    			document.getElementById('ppviewfile'+(ppr+1)).href="viewfile.php?location="+ppfile;
							    	document.getElementById('ppfilelocation'+(ppr+1)).value=ppfile;

					    			// alert(customRadioInline1);
					    			if(customRadioInline1=='Yes')
								    {
								    	$('#customRadioInline1'+(ppr+1)+'').prop("checked",true);
								    }
								    else
								    {
								    	// alert('#customRadioInline2'+ppr+'');
								    	// $('#customRadioInline1'+ppr+1+'').prop("checked",false);
								    	$('#customRadioInline2'+(ppr+1)+'').prop("checked",true);
								    }
								    ppr++;
					    		}

					    	}

					    	if(key=="part_b_cat_3_ppic")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['pptitleic']));
					    		//replace applied to remove double quotes
					    		var pptitleic=JSON.stringify(v[0]['pptitleic']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppnpric=JSON.stringify(v[1]['ppnpric']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppisbnic=JSON.stringify(v[2]['ppisbnic']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppific=JSON.stringify(v[3]['ppific']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var customRadioInline1ic=JSON.stringify(v[4]['customRadioInline1ic']).replace(/['"]+/g, '');
					    		var ppncaic=JSON.stringify(v[5]['ppncaic']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var pp1file=JSON.stringify(v[6]['pp1file']).replace(/['"]+/g, '');
					    		ppric++;
					    		if(ppric!=0)
					    		{
					    			// alert(ppr);
					    			$('#ppric'+ppric).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference Abroad (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><textarea name="pptitleic[]" id="pptitleic"'+ppric+'" class="form-control my-0 my-sm-0 titlecat3" maxlength="200" value="">'+pptitleic+'</textarea></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held Abroad</label><textarea name="ppnpric[]" id="ppnpric"'+ppric+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppnpric+'</textarea></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><textarea name="ppisbnic[]" id="ppisbnic"'+ppric+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppisbnic+'</textarea></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppific[]" id="ppific"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppific+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+ppric+'ic">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppric+'ic">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppncaic[]" id="ppncaic"'+ppric+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppncaic+'"/></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><p>* 15 marks for International conference for first author <br>* 08 marks for second author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="pp1file'+ppric+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="pp1file'+ppric+'" name="pp1file[]" value="" placeholder=""><input type="hidden" name="pp1filelocation[]" id="pp1filelocation'+ppric+'" value="'+pp1file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+pp1file+'" id="pp1viewfile'+ppric+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

								    // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
								    
								     $('#ppric'+ppric).toggle();
								      $('#bric'+ppric).toggle();
								      $('#ppric'+ppric).after('<br id="bric'+(ppric+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="ppric'+(ppric+1)+'"></div>');

								    if(customRadioInline1ic=='Yes')
								    {
								    	$('#customRadioInline1'+(ppric)+'ic').prop("checked",true);
								    }
								    else
								    {
								    	$('#customRadioInline2'+(ppric)+'ic').prop("checked",true);
								    }	
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('pptitleic'+(ppric+1)).value=pptitleic;
					    			document.getElementById('ppnpric'+(ppric+1)).value=ppnpric;
					    			document.getElementById('ppisbnic'+(ppric+1)).value=ppisbnic;
					    			document.getElementById('ppific'+(ppric+1)).value=ppific;
					    			// document.getElementById('customRadioInline1'+(ppr+1)).value=customRadioInline1;
					    			document.getElementById('ppncaic'+(ppric+1)).value=ppncaic;
					    			document.getElementById('pp1viewfile'+(ppric+1)).href="viewfile.php?location="+pp1file;
							    	document.getElementById('pp1filelocation'+(ppric+1)).value=pp1file;

					    			// alert(customRadioInline1);
					    			if(customRadioInline1ic=='Yes')
								    {
								    	$('#customRadioInline1'+(ppric+1)+'ic').prop("checked",true);
								    }
								    else
								    {
								    	// alert('#customRadioInline2'+ppr+'');
								    	// $('#customRadioInline1'+ppr+1+'').prop("checked",false);
								    	$('#customRadioInline2'+(ppric+1)+'ic').prop("checked",true);
								    }
								    ppric++;
					    		}

					    	}

					    	if(key=="part_b_cat_3_ppinc")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['pptitleic']));
					    		//replace applied to remove double quotes
					    		var pptitleinc=JSON.stringify(v[0]['pptitleinc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppnprinc=JSON.stringify(v[1]['ppnprinc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppisbnpinc=JSON.stringify(v[2]['ppisbnpinc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppifinc=JSON.stringify(v[3]['ppifinc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var customRadioInline1inc=JSON.stringify(v[4]['customRadioInline1inc']).replace(/['"]+/g, '');
					    		var ppncainc=JSON.stringify(v[5]['ppncainc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var pp2file=JSON.stringify(v[6]['pp2file']).replace(/['"]+/g, '');
					    		pprinc++;
					    		if(pprinc!=0)
					    		{
					    			// alert(ppr);
					    			$('#pprinc'+pprinc).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference in India (Max.PI=10)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><textarea name="pptitleinc[]" id="pptitleinc'+pprinc+'" class="form-control my-0 my-sm-0 titlecat3" maxlength="200" value="">'+pptitleinc+'</textarea></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held in India</label><textarea name="ppnprinc[]" id="ppnprinc'+pprinc+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppnprinc+'</textarea></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><textarea name="ppisbnpinc[]" id="ppisbninc'+pprinc+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppisbnpinc+'</textarea></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppifinc[]" id="ppifinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppifinc+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+pprinc+'inc">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+pprinc+'inc">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncainc[]" id="ppncainc'+pprinc+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppncainc+'"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <p>* 10 marks for International conference for first author <br>* 05 marks for second author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="pp2file'+pprinc+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="pp2file'+pprinc+'" name="pp2file[]" value="" placeholder=""><input type="hidden" name="pp2filelocation[]" id="pp2filelocation'+pprinc+'" value="'+pp2file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+pp2file+'" id="pp2viewfile'+pprinc+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>');

								    // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
								    
								      $('#pprinc'+pprinc).toggle();
								      $('#brinc'+pprinc).toggle();
								      $('#pprinc'+pprinc).after('<br id="brinc'+(pprinc+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprinc'+(pprinc+1)+'"></div>');

								    if(customRadioInline1inc=='Yes')
								    {
								    	$('#customRadioInline1'+(pprinc)+'inc').prop("checked",true);
								    }
								    else
								    {
								    	// alert("no");
								    	$('#customRadioInline2'+(pprinc)+'inc').prop("checked",true);
								    }	
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('pptitleinc'+(pprinc+1)).value=pptitleinc;
					    			document.getElementById('ppnprinc'+(pprinc+1)).value=ppnprinc;
					    			document.getElementById('ppisbninc'+(pprinc+1)).value=ppisbnpinc;
					    			document.getElementById('ppifinc'+(pprinc+1)).value=ppifinc;
					    			// document.getElementById('customRadioInline1'+(ppr+1)).value=customRadioInline1;
					    			document.getElementById('ppncainc'+(pprinc+1)).value=ppncainc;
					    			document.getElementById('pp2viewfile'+(pprinc+1)).href="viewfile.php?location="+pp2file;
							    	document.getElementById('pp2filelocation'+(pprinc+1)).value=pp2file;

					    			// alert(customRadioInline1);
					    			if(customRadioInline1inc=='Yes')
								    {
								    	$('#customRadioInline1'+(pprinc+1)+'inc').prop("checked",true);
								    }
								    else
								    {
								    	// alert('#customRadioInline2'+ppr+'');
								    	// $('#customRadioInline1'+ppr+1+'').prop("checked",false);
								    	$('#customRadioInline2'+(pprinc+1)+'inc').prop("checked",true);
								    }
								    pprinc++;
					    		}

					    	}

					    	if(key=="part_b_cat_3_bk")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['pptitleic']));
					    		//replace applied to remove double quotes
					    		var pptitlebk=JSON.stringify(v[0]['pptitlebk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppnprbk=JSON.stringify(v[1]['ppnprbk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppisbnbk=JSON.stringify(v[2]['ppisbnbk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppdatebk=JSON.stringify(v[3]['ppdatebk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ppifbk=JSON.stringify(v[4]['ppifbk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var customRadioInline1bk=JSON.stringify(v[5]['customRadioInline1bk']).replace(/['"]+/g, '');
					    		var ppncabk=JSON.stringify(v[6]['ppncabk']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var pp3file=JSON.stringify(v[7]['pp3file']).replace(/['"]+/g, '');
					    		pprbk++;
					    		if(pprbk!=0)
					    		{
					    			// alert(ppnprbk);
					    			$('#pprbk'+pprbk).html('<div class="row"> <div class="col-md-12 text-left"> <br><p style="text-align: center"><b>Books/Articles/Chapters published in Books (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Title with page no.</label> <textarea name="pptitlebk[]" id="pptitlebk'+pprbk+'" class="form-control my-0 my-sm-0 titlecat3" maxlength="200" value="">'+pptitlebk+'</textarea> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Publisher</label><textarea name="ppnprbk[]" id="ppnprbk'+pprbk+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppnprbk.trim()+'</textarea> </div></div></div><div class="row"> <div class="col-md-6 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">ISSN/ISBN No.</label> <textarea name="ppisbnbk[]" id="ppisbnbk'+pprbk+'" class="form-control my-0 my-sm-0 morewidth" maxlength="200" value="">'+ppisbnbk+'</textarea> </div></div><div class="col-md-6 text-right"> <div class="form-inline my-2"> <label class="mr-sm-2">Date of Publication</label> <input type="date" name="ppdatebk[]" id="ppdatebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppdatebk+'"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-5 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Impact factor</label> <input type="text" name="ppifbk[]" id="ppifbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppifbk+'"/> </div></div><div class="col-md-2 text-left"> <p>Whether you are main author</p></div><div class="col-md-3"> <div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline1'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input yesradio" value="Yes" checked> <label class="custom-control-label yes" for="customRadioInline1'+pprbk+'bk">Yes</label> </div><div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline2'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input noradio" value="No"> <label class="custom-control-label no" for="customRadioInline2'+pprbk+'bk">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncabk[]" id="ppncabk'+pprbk+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppncabk+'"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <p>* 15 marks for first author <br>* 08 marks for co-author</p></div><div class="col-md-2"><div class="filepartb-cat3"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="pp3file'+pprbk+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="pp3file'+pprbk+'" name="pp3file[]" value="" placeholder=""><input type="hidden" name="pp3filelocation[]" id="pp3filelocation'+pprbk+'" value="'+pp3file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+pp3file+'" id="pp3viewfile'+pprbk+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></div></div>' );

								    // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
								    
								      $('#pprbk'+pprbk).toggle();
								      $('#brbk'+pprbk).toggle();
								      $('#pprbk'+pprbk).after('<br id="brbk'+(pprbk+1)+'" style="display:none"><div class="container" style="border: 1px solid #c8c8c8;display:none" id="pprbk'+(pprbk+1)+'"></div>');

								    if(customRadioInline1bk=='Yes')
								    {
								    	$('#customRadioInline1'+(pprbk)+'bk').prop("checked",true);
								    }
								    else
								    {
								    	$('#customRadioInline2'+(pprbk)+'bk').prop("checked",true);
								    }	
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('pptitlebk'+(pprbk+1)).value=pptitlebk;
					    			document.getElementById('ppnprbk'+(pprbk+1)).value=ppnprbk;
					    			document.getElementById('ppisbnbk'+(pprbk+1)).value=ppisbnbk;
					    			document.getElementById('ppdatebk'+(pprbk+1)).value=ppdatebk;
					    			document.getElementById('ppifbk'+(pprbk+1)).value=ppifbk;
					    			document.getElementById('ppncabk'+(pprbk+1)).value=ppncabk;
					    			document.getElementById('pp3viewfile'+(pprbk+1)).href="viewfile.php?location="+pp3file;
							    	document.getElementById('pp3filelocation'+(pprbk+1)).value=pp3file;


					    			// alert(customRadioInline1);
					    			if(customRadioInline1bk=='Yes')
								    {
								    	$('#customRadioInline1'+(pprbk+1)+'bk').prop("checked",true);
								    }
								    else
								    {
								    	// alert('#customRadioInline2'+ppr+'');
								    	// $('#customRadioInline1'+ppr+1+'').prop("checked",false);
								    	$('#customRadioInline2'+(pprbk+1)+'bk').prop("checked",true);
								    }
								    pprbk++;
					    		}

					    	}


					    	if(key=="part_b_cat_3_res")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ta=JSON.stringify(v[0]['ta']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ab=JSON.stringify(v[1]['ab']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var dc=JSON.stringify(v[2]['dc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var gd=JSON.stringify(v[3]['gd']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var research1file=JSON.stringify(v[4]['research1file']).replace(/['"]+/g, '');
					    		p++;
					    		if(p!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr10'+p).html('<td id="res'+(p+1)+'">'+(p+1)+'</td><td><textarea name="ta[]" id="ta'+(p+1)+'" class="form-control" maxlength="200" value="">'+ta+'</textarea></td><td><textarea name="ab[]" id="ab'+(p+1)+'" class="form-control" maxlength="200" value="">'+ab+'</textarea></td><td><input type="date" name="dc[]" id="dc'+(p+1)+'" class="form-control dos" value="'+dc+'"/></td><td><input type="number" name="gd[]" id="gd'+(p+1)+'" class="form-control grantamount" value="'+gd+'"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="research1file'+(p+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="research1file'+(p+1)+'" name="research1file[]" value="" placeholder=""><input type="hidden" name="research1filelocation[]" id="research1filelocation'+(p+1)+'" value="'+research1file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+research1file+'" id="research1viewfile'+(p+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td></tr>');

							        // $('#tab_logic8').append('<tr id="addr10'+(p+1)+'"></tr>');
							        $('#addr10'+p).after('<tr id="addr10'+(p+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('res'+(p+1)).value=p+1;
					    			document.getElementById('ta'+(p+1)).value=ta;
					    			document.getElementById('ab'+(p+1)).value=ab;
					    			document.getElementById('dc'+(p+1)).value=dc;
					    			document.getElementById('gd'+(p+1)).value=gd;
					    			document.getElementById('research1viewfile'+(p+1)).href="viewfile.php?location="+research1file;
							    	document.getElementById('research1filelocation'+(p+1)).value=research1file;
					    		}

					    	}

					    	if(key=="part_b_cat_3_ores")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var tta=JSON.stringify(v[0]['tta']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var aab=JSON.stringify(v[1]['aab']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ddc=JSON.stringify(v[2]['ddc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var ggd=JSON.stringify(v[3]['ggd']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var research2file=JSON.stringify(v[4]['research2file']).replace(/['"]+/g, '');
					    		q++;
					    		if(q!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr11'+q).html('<td id="ores'+(q+1)+'">'+(q+1)+'</td><td><textarea name="tta[]" id="tta'+(q+1)+'" class="form-control" maxlength="200" value="">'+tta+'</textarea></td><td><textarea name="aab[]" id="aab'+(q+1)+'" class="form-control" maxlength="200" value="">'+aab+'</textarea></td><td><input type="date" name="ddc[]" id="ddc'+(q+1)+'" class="form-control dos" value="'+ddc+'"/></td><td><input type="number" name="ggd[]" id="ggd'+(q+1)+'" class="form-control grantamount" value="'+ggd+'"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="research2file'+(q+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="research2file'+(q+1)+'" name="research2file[]" value="" placeholder=""><input type="hidden" name="research2filelocation[]" id="research2filelocation'+(q+1)+'" value="'+research2file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+research2file+'" id="research2viewfile'+(q+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td></tr>');

							        // $('#tab_logic9').append('<tr id="addr11'+(q+1)+'"></tr>');
							        $('#addr11'+q).after('<tr id="addr11'+(q+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(tta);
					    			document.getElementById('ores'+(q+1)).value=q+1;
					    			document.getElementById('tta'+(q+1)).value=tta;
					    			document.getElementById('aab'+(q+1)).value=aab;
					    			document.getElementById('ddc'+(q+1)).value=ddc;
					    			document.getElementById('ggd'+(q+1)).value=ggd;
					    			document.getElementById('research2viewfile'+(q+1)).href="viewfile.php?location="+research2file;
							    	document.getElementById('research2filelocation'+(q+1)).value=research2file;
					    		}

					    	}

					    	if(key=="part_b_cat_3_cres")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var tca=JSON.stringify(v[0]['tca']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var acb=JSON.stringify(v[1]['acb']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var dcc=JSON.stringify(v[2]['dcc']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var gcd=JSON.stringify(v[3]['gcd']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var research3file=JSON.stringify(v[4]['research3file']).replace(/['"]+/g, '');
					    		r++;
					    		if(r!=0)
					    		{
					    			$('#addr12'+r).html('<td id="cres'+(r+1)+'">'+(r+1)+'</td><td><textarea name="tca[]" id="tca'+(r+1)+'" class="form-control" maxlength="200" value="">'+tca+'</textarea></td><td><textarea name="acb[]" id="acb'+(r+1)+'" class="form-control" maxlength="200" value="">'+acb+'</textarea></td><td><input type="date" name="dcc[]" id="dcc'+(r+1)+'" class="form-control dos" value="'+dcc+'"/></td><td><input type="number" name="gcd[]" id="gcd'+(r+1)+'" class="form-control grantamount" value="'+gcd+'"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="research3file'+(r+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="research3file'+(r+1)+'" name="research3file[]" value="" placeholder=""><input type="hidden" name="research3filelocation[]" id="research3filelocation'+(r+1)+'" value="'+research3file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+research3file+'" id="research3viewfile'+(r+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							        // $('#tab_logic10').append('<tr id="addr12'+(r+1)+'"></tr>');
							        $('#addr12'+r).after('<tr id="addr12'+(r+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(tta);
					    			document.getElementById('cres'+(r+1)).value=r+1;
					    			document.getElementById('tca'+(r+1)).value=tca;
					    			document.getElementById('acb'+(r+1)).value=acb;
					    			document.getElementById('dcc'+(r+1)).value=dcc;
					    			document.getElementById('gcd'+(r+1)).value=gcd;
					    			document.getElementById('research3viewfile'+(r+1)).href="viewfile.php?location="+research3file;
							    	document.getElementById('research3filelocation'+(r+1)).value=research3file;
					    		}

					    	}

					    	if(key=="part_b_cat_3_pip")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var dpi=JSON.stringify(v[0]['dpi']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var drf=JSON.stringify(v[1]['drf']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var dfile=JSON.stringify(v[2]['dfile']).replace(/['"]+/g, '');
					    		s++;
					    		if(s!=0)
					    		{
					    			$('#addr13'+s).html('<td id="pip'+(s+1)+'">'+(s+1)+'</td><td><textarea name="dpi[]" id="dpi'+(s+1)+'" class="form-control patent" maxlength="200" value="">'+dpi+'</textarea></td><td><input type="date" name="drf[]" id="drf'+(s+1)+'" class="form-control patentdate" value="'+drf+'"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="dfile'+(s+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="dfile'+(s+1)+'" name="dfile[]" value="" placeholder=""><input type="hidden" name="dfilelocation[]" id="dfilelocation'+(s+1)+'" value="'+dfile+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+dfile+'" id="dviewfile'+(s+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							      	// $('#tab_logic11').append('<tr id="addr13'+(s+1)+'"></tr>');
							      	$('#addr13'+s).after('<tr id="addr13'+(s+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert('dviewfile'+(s+1));
					    			document.getElementById('pip'+(s+1)).value=s+1;
					    			document.getElementById('dpi'+(s+1)).value=dpi;
					    			document.getElementById('drf'+(s+1)).value=drf;
					    			document.getElementById('dviewfile'+(s+1)).href="viewfile.php?location="+dfile;
							    	document.getElementById('dfilelocation'+(s+1)).value=dfile;
					    		}

					    	}

					    	if(key=="part_b_cat_4_sem")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var cativ_dp=JSON.stringify(v[0]['cativ_dp']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ_datee=JSON.stringify(v[1]['cativ_datee']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ_o=JSON.stringify(v[2]['cativ_o']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ1file=JSON.stringify(v[3]['cativ1file']).replace(/['"]+/g, '');
					    		t++;
					    		if(t!=0)
					    		{
					    			$('#addr14'+t).html('<td id="sem'+(t+1)+'">'+(t+1)+'</td><td><textarea name="cativ_dp[]" id="cativ_dp'+(t+1)+'" class="form-control seminarscat4" maxlength="200" value="">'+cativ_dp+'</textarea></td><td><input type="date" name="cativ_datee[]" id="cativ_datee'+(t+1)+'" class="form-control dos" value="'+cativ_datee+'"/></td><td><textarea name="cativ_o[]" id="cativ_o'+(t+1)+'" class="form-control ogbycat4" maxlength="200" value="">'+cativ_o+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cativ1file'+(t+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cativ1file'+(t+1)+'" name="cativ1file[]" value="" placeholder=""><input type="hidden" name="cativ1filelocation[]" id="cativ1filelocation'+(t+1)+'" value="'+cativ1file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+cativ1file+'" id="cativ1viewfile'+(t+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							        // $('#tab_logic12').append('<tr id="addr14'+(t+1)+'"></tr>');
							        $('#addr14'+t).after('<tr id="addr14'+(t+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(tta);
					    			document.getElementById('sem'+(t+1)).value=t+1;
					    			document.getElementById('cativ_dp'+(t+1)).value=cativ_dp;
					    			document.getElementById('cativ_datee'+(t+1)).value=cativ_datee;
					    			document.getElementById('cativ_o'+(t+1)).value=cativ_o;
					    			document.getElementById('cativ1viewfile'+(t+1)).href="viewfile.php?location="+cativ1file;
							    	document.getElementById('cativ1filelocation'+(t+1)).value=cativ1file;
					    		}

					    	}

					    	if(key=="part_b_cat_4_inv")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var cativ1_dp=JSON.stringify(v[0]['cativ1_dp']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ1_datee=JSON.stringify(v[1]['cativ1_datee']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ1_o=JSON.stringify(v[2]['cativ1_o']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ2file=JSON.stringify(v[3]['cativ2file']).replace(/['"]+/g, '');
					    		u++;
					    		if(u!=0)
					    		{
					    			$('#addr15'+u).html('<td id="inv'+(u+1)+'">'+(u+1)+'</td><td><textarea name="cativ1_dp[]" id="cativ1_dp'+(u+1)+'" class="form-control seminarscat4" maxlength="200" value="">'+cativ1_dp+'</textarea></td><td><input type="date" name="cativ1_datee[]" id="cativ1_datee'+(u+1)+'" class="form-control dos" value="'+cativ1_datee+'"/></td><td><textarea name="cativ1_o[]" id="cativ1_o'+(u+1)+'" class="form-control ogbycat4" maxlength="200" value="">'+cativ1_o+'</textarea></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cativ2file'+(u+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cativ2file'+(u+1)+'" name="cativ2file[]" value="" placeholder=""><input type="hidden" name="cativ2filelocation[]" id="cativ2filelocation'+(u+1)+'" value="'+cativ2file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+cativ2file+'" id="cativ2viewfile'+(u+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

								    // $('#tab_logic13').append('<tr id="addr15'+(u+1)+'"></tr>');
								    $('#addr15'+u).after('<tr id="addr15'+(u+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(tta);
					    			document.getElementById('inv'+(u+1)).value=u+1;
					    			document.getElementById('cativ1_dp'+(u+1)).value=cativ1_dp;
					    			document.getElementById('cativ1_datee'+(u+1)).value=cativ1_datee;
					    			document.getElementById('cativ1_o'+(u+1)).value=cativ1_o;
					    			document.getElementById('cativ2viewfile'+(u+1)).href="viewfile.php?location="+cativ2file;
							    	document.getElementById('cativ2filelocation'+(u+1)).value=cativ2file;
					    		}

					    	}

					    	if(key=="part_b_cat_4_creds")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var cativ2_dp=JSON.stringify(v[0]['cativ2_dp']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ2=JSON.stringify(v[1]['cativ2']).replace (/(^")|("$)/g, '').replace(/\\/g,'');
					    		var cativ3file=JSON.stringify(v[2]['cativ3file']).replace(/['"]+/g, '');
					    		v1++;
					    		if(v1!=0)
					    		{
					    			$('#addr16'+v1).html('<td id="creds'+(v1+1)+'">'+(v1+1)+'</td><td><textarea name="cativ2_dp[]" id="cativ2_dp'+(v1+1)+'" class="form-control seminarscat4" maxlength="200" value="">'+cativ2_dp+'</textarea></td><td><input type="text" name="cativ2[]" id="cativ2'+(v1+1)+'" class="form-control ogbycat4" maxlength="200" value="'+cativ2+'"/></td><td><div class="filepartb"><div class="row justify-content-center"><div class="col-3 offset-md-3" style="padding:0;margin:0"><div class="file-upload mx-auto" style="width:26px"><label for="cativ3file'+(v1+1)+'" style="cursor:pointer"><img src="https://img.icons8.com/material/26/000000/attach.png"></label><input type="file" class="dynamic-four" id="cativ3file'+(v1+1)+'" name="cativ3file[]" value="" placeholder=""><input type="hidden" name="cativ3filelocation[]" id="cativ3filelocation'+(v1+1)+'" value="'+cativ3file+'"></div></div><div class="col-md-3" style="padding:0;margin:0"><a href="viewfile.php?location='+cativ3file+'" id="cativ3viewfile'+(v1+1)+'" target="_blank"><img src="https://img.icons8.com/ios/24/000000/document.png"></a></div></div></div></td>');

							        // $('#tab_logic14').append('<tr id="addr16'+(v+1)+'"></tr>');
							        $('#addr16'+v1).after('<tr id="addr16'+(v1+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(cativ2_dp);
					    			document.getElementById('creds'+(v1+1)).value=v1+1;
					    			document.getElementById('cativ2_dp'+(v1+1)).value=cativ2_dp;
					    			document.getElementById('cativ2'+(v1+1)).value=cativ2;
					    			document.getElementById('cativ3viewfile'+(v1+1)).href="viewfile.php?location="+cativ3file;
							    	document.getElementById('cativ3filelocation'+(v1+1)).value=cativ3file;
					    		}

					    	}


					    	
					    }
					    
					});
				}

				// alert(w);
				if(i==-1)
				{
					i=i+1;
				}
				document.getElementById("i").value=i+1;
				if(j==-1)
				{
					j=j+1;
				}
				document.getElementById("j").value=j+1;
				if(k==-1)
				{
					k=k+1;
				}
				document.getElementById("k").value=k+1;
				if(l==-1)
				{
					l=l+1;
				}
				document.getElementById("l").value=l+1;
				if(m==-1)
				{
					m=m+1;
				}
				document.getElementById("m").value=m+1;
				if(n==-1)
				{
					n=n+1;
				}
				document.getElementById("n").value=n+1;
				if(o==-1)
				{
					o=o+1;
				}
				document.getElementById("o").value=o+1;
				if(p==-1)
				{
					p=p+1;
				}
				document.getElementById("p").value=p+1;
				if(q==-1)
				{
					q=q+1;
				}
				document.getElementById("q").value=q+1;
				if(r==-1)
				{
					r=r+1;
				}
				document.getElementById("r").value=r+1;
				if(s==-1)
				{
					s=s+1;
				}
				document.getElementById("s").value=s+1;
				if(t==-1)
				{
					t=t+1;
				}
				document.getElementById("t").value=t+1;
				if(u==-1)
				{
					u=u+1;
				}
				document.getElementById("u").value=u+1;
				if(v1==-1)
				{
					v1=v1+1;
				}
				document.getElementById("v1").value=v1+1;
				if(w==-1)
				{
					w=w+1;
				}
				document.getElementById("w").value=w+1;
				if(x==-1)
				{
					x=x+1;
				}
				document.getElementById("x").value=x+1;
				if(y==-1)
				{
					y=y+1;
				}
				document.getElementById("y").value=y+1;
				if(z==-1)
				{
					z=z+1;
				}
				document.getElementById("z").value=z+1;
				if(ppr==-1)
				{
					ppr=ppr+2;
				}
				document.getElementById("ppr").value=ppr+1;
				if(ppric==-1)
				{
					ppric=ppric+2;
				}
				document.getElementById("ppric").value=ppric+1;
				if(pprinc==-1)
				{
					pprinc=pprinc+2;
				}
				document.getElementById("pprinc").value=pprinc+1;
				if(pprbk==-1)
				{
					pprbk=pprbk+2;
				}
				document.getElementById("pprbk").value=pprbk+1;

				// alert("disbling");
				// $("#part-b-form :input").prop("disabled", true);//disabling all inputs
				// $(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also
				// $(".btn-default").prop('disabled', true);
				// $('#sfrb_submit').prop('disabled', false);
				// enableinputs();
			}

			$("#part-b-form :input").prop("disabled", true);//disabling all inputs
			$(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also
			$(".btn-default").prop('disabled', true);
			$('#sfrb_submit').prop('disabled', false);
			enableinputs();

			$('a').each(function(){ 
	            var url = $(this).attr("href"); // Get current url
	            // if(url.substring(0,url.indexOf("?")))
	            if(url!=null && url.substring(0,url.indexOf("?"))=='viewfile.php')
	            {
	            	// alert(url);
	            	// alert(url.substring(url.indexOf("=")+1));
	            	if(url.substring(url.indexOf("=")+1)!='NAN' && url.substring(url.indexOf("=")+1)!='none')
	            	{
	            		$(this).children().attr("src", "https://img.icons8.com/color/24/000000/document.png");
	            	}
	            }
	            
	        });

		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});	
	
	return false;
}

$(document).ready(function(){
	$(".dynamic-four").change(function (){
		// alert("he");
		var pin=$("label[for='" + $(this).attr('id') + "']").children('img');
       	pin.attr('src',"https://img.icons8.com/color/48/000000/attach.png");
       	pin.css({"width":"26px","height":"26px"});
    });
});

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ FORM APPRAISAL ENABLE INPUTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~`
function enableinputs()
{
	// $("#userId").prop('disabled', false);
	// $("#viewerId").prop('disabled', false);
	// $("#hod").prop('disabled', false);
	// $("#committee").prop('disabled', false);

	var userId=parseInt(document.getElementById("userId").value);
	var viewerId=parseInt(document.getElementById("viewerId").value);
	var hod=parseInt(document.getElementById("hod").value);
	var committee=parseInt(document.getElementById("committee").value);
	var submitted_for_review=parseInt(document.getElementById("submitted_for_review").value);


 //    if (submitted_for_review == true && viewerId == userId)
 //    {
 //    	$('.pisave').remove();
	// } 
	// alert(userId);
	// alert(viewerId);
	// alert(hod);
	// alert(submitted_for_review);

	if(userId==viewerId)
	{
		enableself();
	}
	if(hod==1 && submitted_for_review==1)
	{
		enablehod();
	}
	if(committee==1 && submitted_for_review==1)
	{
		enablecomm();
	}
}
function enableself()
{
	$(".selfapp:input").prop("disabled", false);
}

function enablehod()
{
	// alert("here");
	$(".hodapp:input").prop("disabled", false);
}

function enablecomm()
{
	// alert("here");
	$(".commapp:input").prop("disabled", false);
}

//******************************************************PartA-Appraisals************************************************

$(document).ready(function(){
	if(document.getElementById('parta_ugpggpi_self_a'))
	{
		a=document.getElementById('parta_ugpggpi_self_a').value;
	}	
	if(document.getElementById('parta_ugpggpi_hod_a'))
	{
		b=document.getElementById('parta_ugpggpi_hod_a').value;
	}	
	if(document.getElementById('parta_ugpggpi_committee_a'))
	{
		c=document.getElementById('parta_ugpggpi_committee_a').value;
	}
	$('body').on('click','#parta_ugpggpi_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('parta_ugpggpi_self_a').value>20)
        {
        	document.getElementById('parta_ugpggpi_self_a').value=20;
        }
        var parta_ugpggpi_self_a = document.getElementById('parta_ugpggpi_self_a').value;

	    var parta_ugpggpi_hod_a =-1;
	    if($("#parta_ugpggpi_hod_a").length)
	    {
	    	if(document.getElementById('parta_ugpggpi_hod_a').value>20)
	    	{
	    		document.getElementById('parta_ugpggpi_hod_a').value=20;
	    	}
	     	parta_ugpggpi_hod_a=document.getElementById('parta_ugpggpi_hod_a').value;
	    }
	   	var parta_ugpggpi_committee_a=-1;
	   	if($("#parta_ugpggpi_committee_a").length)
	    {
	    	if(document.getElementById('parta_ugpggpi_committee_a').value>20)
	    	{
	    		document.getElementById('parta_ugpggpi_committee_a').value=20;
	    	}
			parta_ugpggpi_committee_a=document.getElementById('parta_ugpggpi_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_ugpggpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'parta_ugpggpi_sys.php',       
	        data:{
	        	parta_ugpggpi_self_a:parta_ugpggpi_self_a,
	        	parta_ugpggpi_hod_a:parta_ugpggpi_hod_a,
	        	parta_ugpggpi_committee_a:parta_ugpggpi_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("parta_ugpggpi_msg").innerHTML="Saved!";
	            	//automatically calculating the sum
	            	// alert(parseInt(document.getElementById("parta_ugpggpi_pi_self_a").value)+parseInt(document.getElementById('parta_ugpggpi_self_a').value));
	            	if(document.getElementById("parta_gpi_pi_self_a").value)
	            	{
	            		document.getElementById("parta_gpi_pi_self_a").value=parseInt(document.getElementById("parta_gpi_pi_self_a").value)+parseInt(document.getElementById('parta_ugpggpi_self_a').value)-a;
	            		a=document.getElementById('parta_ugpggpi_self_a').value;
	            	}
	            	if(document.getElementById("parta_gpi_pi_hod_a"))
	            	{
	            		document.getElementById("parta_gpi_pi_hod_a").value=parseInt(document.getElementById("parta_gpi_pi_hod_a").value)+parseInt(document.getElementById('parta_ugpggpi_hod_a').value)-b;
	            		b=document.getElementById('parta_ugpggpi_hod_a').value;
	            	}
	            	if(document.getElementById("parta_gpi_pi_committee_a"))
	            	{
	            		document.getElementById("parta_gpi_pi_committee_a").value=parseInt(document.getElementById("parta_gpi_pi_committee_a").value)+parseInt(document.getElementById('parta_ugpggpi_committee_a').value)-c;
	            		c=document.getElementById('parta_ugpggpi_committee_a').value;
	            	}
	            	
	            	$("#parta_gpi_pi_btn").trigger('click'); //triggering a click of that button
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });


	if(document.getElementById('parta_gpi_self_a'))
	{
		d=document.getElementById('parta_gpi_self_a').value;
	}	
	if(document.getElementById('parta_gpi_hod_a'))
	{
		ee=document.getElementById('parta_gpi_hod_a').value;
	}	
	if(document.getElementById('parta_gpi_committee_a'))
	{
		f=document.getElementById('parta_gpi_committee_a').value;
	}	

    $('body').on('click','#parta_gpi_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('parta_gpi_self_a').value>30)
        {
        	document.getElementById('parta_gpi_self_a').value=30;
        }
        var parta_gpi_self_a = document.getElementById('parta_gpi_self_a').value;

	    var parta_gpi_hod_a =-1;
	    if($("#parta_gpi_hod_a").length)
	    {
	    	if(document.getElementById('parta_gpi_hod_a').value>30)
	    	{
	    		document.getElementById('parta_gpi_hod_a').value=30;
	    	}
	     	parta_gpi_hod_a=document.getElementById('parta_gpi_hod_a').value;
	    }
	   	var parta_gpi_committee_a=-1;
	   	if($("#parta_gpi_committee_a").length)
	    {
	    	if(document.getElementById('parta_gpi_committee_a').value>30)
	    	{
	    		document.getElementById('parta_gpi_committee_a').value=30;
	    	}
			parta_gpi_committee_a=document.getElementById('parta_gpi_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'parta_gpi_sys.php',       
	        data:{
	        	parta_gpi_self_a:parta_gpi_self_a,
	        	parta_gpi_hod_a:parta_gpi_hod_a,
	        	parta_gpi_committee_a:parta_gpi_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("parta_gpi_msg").innerHTML="Saved!";
	            	//automatically calculating the sum
	            	// alert(parseInt(document.getElementById("parta_gpi_pi_self_a").value)+parseInt(document.getElementById('parta_gpi_self_a').value));
	            	if(document.getElementById("parta_gpi_pi_self_a").value)
	            	{
	            		document.getElementById("parta_gpi_pi_self_a").value=parseInt(document.getElementById("parta_gpi_pi_self_a").value)+parseInt(document.getElementById('parta_gpi_self_a').value)-d;
	            		d=document.getElementById('parta_gpi_self_a').value;
	            	}
	            	if(document.getElementById("parta_gpi_pi_hod_a"))
	            	{
	            		document.getElementById("parta_gpi_pi_hod_a").value=parseInt(document.getElementById("parta_gpi_pi_hod_a").value)+parseInt(document.getElementById('parta_gpi_hod_a').value)-ee;
	            		ee=document.getElementById('parta_gpi_hod_a').value;
	            	}
	            	if(document.getElementById("parta_gpi_pi_committee_a"))
	            	{
	            		document.getElementById("parta_gpi_pi_committee_a").value=parseInt(document.getElementById("parta_gpi_pi_committee_a").value)+parseInt(document.getElementById('parta_gpi_committee_a').value)-f;
	            		f=document.getElementById('parta_gpi_committee_a').value;
	            	}
	            	
	            	$("#parta_gpi_pi_btn").trigger('click'); //triggering a click of that button
	            }
	            
	        },                
	        error: function(xhr, status, error) {
	        	alert("error");
	            alert(xhr.responseText);
	        }              
	    });        

    });

    $('body').on('click','#parta_gpi_pi_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('parta_gpi_pi_self_a').value>50)
        {
        	document.getElementById('parta_gpi_pi_self_a').value=50;
        }
        var parta_gpi_pi_self_a = document.getElementById('parta_gpi_pi_self_a').value;

	    var parta_gpi_pi_hod_a =-1;
	    if($("#parta_gpi_pi_hod_a").length)
	    {
	    	if(document.getElementById('parta_gpi_pi_hod_a').value>50)
	    	{
	    		document.getElementById('parta_gpi_pi_hod_a').value=50;
	    	}
	     	parta_gpi_pi_hod_a=document.getElementById('parta_gpi_pi_hod_a').value;
	    }
	   	var parta_gpi_pi_committee_a=-1;
	   	if($("#parta_gpi_pi_committee_a").length)
	    {
	    	if(document.getElementById('parta_gpi_pi_committee_a').value>50)
	    	{
	    		document.getElementById('parta_gpi_pi_committee_a').value=50;
	    	}
			parta_gpi_pi_committee_a=document.getElementById('parta_gpi_pi_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'parta_gpi_pi_sys.php',       
	        data:{
	        	parta_gpi_pi_self_a:parta_gpi_pi_self_a,
	        	parta_gpi_pi_hod_a:parta_gpi_pi_hod_a,
	        	parta_gpi_pi_committee_a:parta_gpi_pi_committee_a,
	        	year:year,
	        	userId:userId
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
	if(document.getElementById('cat1_pi1_self_a'))
	{
		xa=document.getElementById('cat1_pi1_self_a').value;
	}
	if(document.getElementById('cat1_pi1_hod_a'))
	{
		xb=document.getElementById('cat1_pi1_hod_a').value;
	}
	if(document.getElementById('cat1_pi1_committee_a'))
	{
		xc=document.getElementById('cat1_pi1_committee_a').value;
	}
    $('body').on('click','#partb_cat1_pi1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat1_pi1_self_a').value>40)
        {
        	document.getElementById('cat1_pi1_self_a').value=40;
        }
        var cat1_pi1_self_a = document.getElementById('cat1_pi1_self_a').value;

	    var cat1_pi1_hod_a =-1;
	    if($("#cat1_pi1_hod_a").length)
	    {
	    	if(document.getElementById('cat1_pi1_hod_a').value>40)
	    	{
	    		document.getElementById('cat1_pi1_hod_a').value=40;
	    	}
	     	cat1_pi1_hod_a=document.getElementById('cat1_pi1_hod_a').value;
	    }
	   	var cat1_pi1_committee_a=-1;
	   	if($("#cat1_pi1_committee_a").length)
	    {
	    	if(document.getElementById('cat1_pi1_committee_a').value>40)
	    	{
	    		document.getElementById('cat1_pi1_committee_a').value=40;
	    	}
			cat1_pi1_committee_a=document.getElementById('cat1_pi1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi1_sys.php',       
	        data:{
	        	cat1_pi1_self_a:cat1_pi1_self_a,
	        	cat1_pi1_hod_a:cat1_pi1_hod_a,
	        	cat1_pi1_committee_a:cat1_pi1_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi1_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat1_pitotal_self_a"))
	            	{
	            		document.getElementById("cat1_pitotal_self_a").value=parseInt(document.getElementById("cat1_pitotal_self_a").value)+parseInt(document.getElementById('cat1_pi1_self_a').value)-xa;
	            		xa=document.getElementById('cat1_pi1_self_a').value;
	            	}
					if(document.getElementById("cat1_pitotal_hod_a"))
					{
						document.getElementById("cat1_pitotal_hod_a").value=parseInt(document.getElementById("cat1_pitotal_hod_a").value)+parseInt(document.getElementById('cat1_pi1_hod_a').value)-xb;
						xb=document.getElementById('cat1_pi1_hod_a').value;
					}
					if(document.getElementById("cat1_pitotal_committee_a"))
					{
						document.getElementById("cat1_pitotal_committee_a").value=parseInt(document.getElementById("cat1_pitotal_committee_a").value)+parseInt(document.getElementById('cat1_pi1_committee_a').value)-xc;
						xc=document.getElementById('cat1_pi1_committee_a').value;
					}
					$("#partb_cat1_pitotal_btn").trigger("click");
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
	if(document.getElementById('cat1_pi2_self_a'))
	{
		xd=document.getElementById('cat1_pi2_self_a').value;
	}
	if(document.getElementById('cat1_pi2_hod_a'))
	{
		xe=document.getElementById('cat1_pi2_hod_a').value;
	}
	if(document.getElementById('cat1_pi2_committee_a'))
	{
		xf=document.getElementById('cat1_pi2_committee_a').value;
	}

    $('body').on('click','#partb_cat1_pi2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat1_pi2_self_a').value>40)
        {
        	document.getElementById('cat1_pi2_self_a').value=40;
        }
        var cat1_pi2_self_a = document.getElementById('cat1_pi2_self_a').value;

	    var cat1_pi2_hod_a =-1;
	    if($("#cat1_pi2_hod_a").length)
	    {
	    	if(document.getElementById('cat1_pi2_hod_a').value>40)
	    	{
	    		document.getElementById('cat1_pi2_hod_a').value=40;
	    	}
	     	cat1_pi2_hod_a=document.getElementById('cat1_pi2_hod_a').value;
	    }
	   	var cat1_pi2_committee_a=-1;
	   	if($("#cat1_pi2_committee_a").length)
	    {
	    	if(document.getElementById('cat1_pi2_committee_a').value>40)
	    	{
	    		document.getElementById('cat1_pi2_committee_a').value=40;
	    	}
			cat1_pi2_committee_a=document.getElementById('cat1_pi2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi2_sys.php',       
	        data:{
	        	cat1_pi2_self_a:cat1_pi2_self_a,
	        	cat1_pi2_hod_a:cat1_pi2_hod_a,
	        	cat1_pi2_committee_a:cat1_pi2_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi2_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat1_pitotal_self_a"))
	            	{
	            		document.getElementById("cat1_pitotal_self_a").value=parseInt(document.getElementById("cat1_pitotal_self_a").value)+parseInt(document.getElementById('cat1_pi2_self_a').value)-xd;
	            		xd=document.getElementById('cat1_pi2_self_a').value;
	            	}
					if(document.getElementById("cat1_pitotal_hod_a"))
					{
						document.getElementById("cat1_pitotal_hod_a").value=parseInt(document.getElementById("cat1_pitotal_hod_a").value)+parseInt(document.getElementById('cat1_pi2_hod_a').value)-xe;
						xe=document.getElementById('cat1_pi2_hod_a').value;
					}
					if(document.getElementById("cat1_pitotal_committee_a"))
					{
						document.getElementById("cat1_pitotal_committee_a").value=parseInt(document.getElementById("cat1_pitotal_committee_a").value)+parseInt(document.getElementById('cat1_pi2_committee_a').value)-xf;
						xf=document.getElementById('cat1_pi2_committee_a').value;
					}
					$("#partb_cat1_pitotal_btn").trigger("click");
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
	if(document.getElementById('cat1_pi3_self_a'))
	{
		xg=document.getElementById('cat1_pi3_self_a').value;
	}
	if(document.getElementById('cat1_pi3_hod_a'))
	{
		xh=document.getElementById('cat1_pi3_hod_a').value;
	}
	if(document.getElementById('cat1_pi3_committee_a'))
	{
		xi=document.getElementById('cat1_pi3_committee_a').value;
	}
    $('body').on('click','#partb_cat1_pi3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat1_pi3_self_a').value>10)
        {
        	document.getElementById('cat1_pi3_self_a').value=10;
        }
        var cat1_pi3_self_a = document.getElementById('cat1_pi3_self_a').value;

	    var cat1_pi3_hod_a =-1;
	    if($("#cat1_pi3_hod_a").length)
	    {
	    	if(document.getElementById('cat1_pi3_hod_a').value>10)
	    	{
	    		document.getElementById('cat1_pi3_hod_a').value=10;
	    	}
	     	cat1_pi3_hod_a=document.getElementById('cat1_pi3_hod_a').value;
	    }
	   	var cat1_pi3_committee_a=-1;
	   	if($("#cat1_pi3_committee_a").length)
	    {
	    	if(document.getElementById('cat1_pi3_committee_a').value>10)
	    	{
	    		document.getElementById('cat1_pi3_committee_a').value=10;
	    	}
			cat1_pi3_committee_a=document.getElementById('cat1_pi3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi3_sys.php',       
	        data:{
	        	cat1_pi3_self_a:cat1_pi3_self_a,
	        	cat1_pi3_hod_a:cat1_pi3_hod_a,
	        	cat1_pi3_committee_a:cat1_pi3_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi3_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat1_pitotal_self_a"))
	            	{
	            		document.getElementById("cat1_pitotal_self_a").value=parseInt(document.getElementById("cat1_pitotal_self_a").value)+parseInt(document.getElementById('cat1_pi3_self_a').value)-xg;
	            		xg=document.getElementById('cat1_pi3_self_a').value;
	            	}
					if(document.getElementById("cat1_pitotal_hod_a"))
					{
						document.getElementById("cat1_pitotal_hod_a").value=parseInt(document.getElementById("cat1_pitotal_hod_a").value)+parseInt(document.getElementById('cat1_pi3_hod_a').value)-xh;
						xh=document.getElementById('cat1_pi3_hod_a').value;
					}
					if(document.getElementById("cat1_pitotal_committee_a"))
					{
						document.getElementById("cat1_pitotal_committee_a").value=parseInt(document.getElementById("cat1_pitotal_committee_a").value)+parseInt(document.getElementById('cat1_pi3_committee_a').value)-xi;
						xi=document.getElementById('cat1_pi3_committee_a').value;
					}
					$("#partb_cat1_pitotal_btn").trigger("click");
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
	if(document.getElementById('cat1_pi4_self_a'))
	{
		xj=document.getElementById('cat1_pi4_self_a').value;
	}
	if(document.getElementById('cat1_pi4_hod_a'))
	{
		xk=document.getElementById('cat1_pi4_hod_a').value;
	}
	if(document.getElementById('cat1_pi4_committee_a'))
	{
		xl=document.getElementById('cat1_pi4_committee_a').value;
	}
    $('body').on('click','#partb_cat1_pi4_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat1_pi4_self_a').value>10)
        {
        	document.getElementById('cat1_pi4_self_a').value=10;
        }
        var cat1_pi4_self_a = document.getElementById('cat1_pi4_self_a').value;

	    var cat1_pi4_hod_a =-1;
	    if($("#cat1_pi4_hod_a").length)
	    {
	    	if(document.getElementById('cat1_pi4_hod_a').value>10)
	    	{
	    		document.getElementById('cat1_pi4_hod_a').value=10;
	    	}
	     	cat1_pi4_hod_a=document.getElementById('cat1_pi4_hod_a').value;
	    }
	   	var cat1_pi4_committee_a=-1;
	   	if($("#cat1_pi4_committee_a").length)
	    {
	    	if(document.getElementById('cat1_pi4_committee_a').value>10)
	    	{
	    		document.getElementById('cat1_pi4_committee_a').value=10;
	    	}
			cat1_pi4_committee_a=document.getElementById('cat1_pi4_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pi4_sys.php',       
	        data:{
	        	cat1_pi4_self_a:cat1_pi4_self_a,
	        	cat1_pi4_hod_a:cat1_pi4_hod_a,
	        	cat1_pi4_committee_a:cat1_pi4_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat1_pi4_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat1_pitotal_self_a"))
	            	{
	            		document.getElementById("cat1_pitotal_self_a").value=parseInt(document.getElementById("cat1_pitotal_self_a").value)+parseInt(document.getElementById('cat1_pi4_self_a').value)-xj;
	            		xj=document.getElementById('cat1_pi4_self_a').value;
	            	}
					if(document.getElementById("cat1_pitotal_hod_a"))
					{
						document.getElementById("cat1_pitotal_hod_a").value=parseInt(document.getElementById("cat1_pitotal_hod_a").value)+parseInt(document.getElementById('cat1_pi4_hod_a').value)-xk;
						xk=document.getElementById('cat1_pi4_hod_a').value;
					}
					if(document.getElementById("cat1_pitotal_committee_a"))
					{
						document.getElementById("cat1_pitotal_committee_a").value=parseInt(document.getElementById("cat1_pitotal_committee_a").value)+parseInt(document.getElementById('cat1_pi4_committee_a').value)-xl;
						xl=document.getElementById('cat1_pi4_committee_a').value;
					}
					$("#partb_cat1_pitotal_btn").trigger("click");
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
        if(document.getElementById('cat1_pitotal_self_a').value>100)
        {
        	document.getElementById('cat1_pitotal_self_a').value=100;
        }
        var cat1_pitotal_self_a = document.getElementById('cat1_pitotal_self_a').value;

	    var cat1_pitotal_hod_a=-1;
	    if($("#cat1_pitotal_hod_a").length)
	    {
	    	if(document.getElementById('cat1_pitotal_hod_a').value>100)
	    	{
	    		document.getElementById('cat1_pitotal_hod_a').value=100;
	    	}
	     	cat1_pitotal_hod_a=document.getElementById('cat1_pitotal_hod_a').value;
	    }
	   	var cat1_pitotal_committee_a=-1;
	   	if($("#cat1_pitotal_committee_a").length)
	    {
	    	if(document.getElementById('cat1_pitotal_committee_a').value>100)
	    	{
	    		document.getElementById('cat1_pitotal_committee_a').value=100;
	    	}
			cat1_pitotal_committee_a=document.getElementById('cat1_pitotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat1_pitotal_sys.php',       
	        data:{
	        	cat1_pitotal_self_a:cat1_pitotal_self_a,
	        	cat1_pitotal_hod_a:cat1_pitotal_hod_a,
	        	cat1_pitotal_committee_a:cat1_pitotal_committee_a,
	        	year:year,
	        	userId:userId
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
	if(document.getElementById('cat2_pii1_self_a'))
	{
		xm=document.getElementById('cat2_pii1_self_a').value;
	}
	if(document.getElementById('cat2_pii1_hod_a'))
	{
		xn=document.getElementById('cat2_pii1_hod_a').value;
	}
	if(document.getElementById('cat2_pii1_committee_a'))
	{
		xo=document.getElementById('cat2_pii1_committee_a').value;
	}
    $('body').on('click','#partb_cat2_pii1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat2_pii1_self_a').value>40)
        {
        	document.getElementById('cat2_pii1_self_a').value=40;
        }
        var cat2_pii1_self_a = document.getElementById('cat2_pii1_self_a').value;

	    var cat2_pii1_hod_a=-1;
	    if($("#cat2_pii1_hod_a").length)
	    {
	    	if(document.getElementById('cat2_pii1_hod_a').value>40)
	    	{
	    		document.getElementById('cat2_pii1_hod_a').value=40;
	    	}
	     	cat2_pii1_hod_a=document.getElementById('cat2_pii1_hod_a').value;
	    }
	   	var cat2_pii1_committee_a=-1;
	   	if($("#cat2_pii1_committee_a").length)
	    {
	    	if(document.getElementById('cat2_pii1_committee_a').value>40)
	    	{
	    		document.getElementById('cat2_pii1_committee_a').value=40;
	    	}
			cat2_pii1_committee_a=document.getElementById('cat2_pii1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi1_sys.php',       
	        data:{
	        	cat2_pii1_self_a:cat2_pii1_self_a,
	        	cat2_pii1_hod_a:cat2_pii1_hod_a,
	        	cat2_pii1_committee_a:cat2_pii1_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat2_pii1_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat2_piitotal_self_a"))
	            	{
	            		document.getElementById("cat2_piitotal_self_a").value=parseInt(document.getElementById("cat2_piitotal_self_a").value)+parseInt(document.getElementById('cat2_pii1_self_a').value)-xm;
	            		xm=document.getElementById('cat2_pii1_self_a').value;
	            	}
					if(document.getElementById("cat2_piitotal_hod_a"))
					{
						document.getElementById("cat2_piitotal_hod_a").value=parseInt(document.getElementById("cat2_piitotal_hod_a").value)+parseInt(document.getElementById('cat2_pii1_hod_a').value)-xn;
						xn=document.getElementById('cat2_pii1_hod_a').value;
					}
					if(document.getElementById("cat2_piitotal_committee_a"))
					{
						document.getElementById("cat2_piitotal_committee_a").value=parseInt(document.getElementById("cat2_piitotal_committee_a").value)+parseInt(document.getElementById('cat2_pii1_committee_a').value)-xo;
						xo=document.getElementById('cat2_pii1_committee_a').value;
					}
					$("#partb_cat2_piitotal_btn").trigger("click");
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
if(document.getElementById('cat2_pii2_self_a'))
{
	xp=document.getElementById('cat2_pii2_self_a').value;
}
if(document.getElementById('cat2_pii2_hod_a'))
{
	xq=document.getElementById('cat2_pii2_hod_a').value;
}
if(document.getElementById('cat2_pii2_committee_a'))
{
	xr=document.getElementById('cat2_pii2_committee_a').value;
}
    $('body').on('click','#partb_cat2_pii2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat2_pii2_self_a').value>20)
        {
        	document.getElementById('cat2_pii2_self_a').value=20;
        }
        var cat2_pii2_self_a = document.getElementById('cat2_pii2_self_a').value;

	    var cat2_pii2_hod_a=-1;
	    if($("#cat2_pii2_hod_a").length)
	    {
	    	if(document.getElementById('cat2_pii2_hod_a').value>20)
	    	{
	    		document.getElementById('cat2_pii2_hod_a').value=20;
	    	}
	     	cat2_pii2_hod_a=document.getElementById('cat2_pii2_hod_a').value;
	    }
	   	var cat2_pii2_committee_a=-1;
	   	if($("#cat2_pii2_committee_a").length)
	    {
	    	if(document.getElementById('cat2_pii2_committee_a').value>20)
	    	{
	    		document.getElementById('cat2_pii2_committee_a').value=20;
	    	}
			cat2_pii2_committee_a=document.getElementById('cat2_pii2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi2_sys.php',       
	        data:{
	        	cat2_pii2_self_a:cat2_pii2_self_a,
	        	cat2_pii2_hod_a:cat2_pii2_hod_a,
	        	cat2_pii2_committee_a:cat2_pii2_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat2_pii2_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat2_piitotal_self_a"))
	            	{
	            		document.getElementById("cat2_piitotal_self_a").value=parseInt(document.getElementById("cat2_piitotal_self_a").value)+parseInt(document.getElementById('cat2_pii2_self_a').value)-xp;
	            		xp=document.getElementById('cat2_pii2_self_a').value;
	            	}
					if(document.getElementById("cat2_piitotal_hod_a"))
					{
						document.getElementById("cat2_piitotal_hod_a").value=parseInt(document.getElementById("cat2_piitotal_hod_a").value)+parseInt(document.getElementById('cat2_pii2_hod_a').value)-xq;
						xq=document.getElementById('cat2_pii2_hod_a').value;
					}
					if(document.getElementById("cat2_piitotal_committee_a"))
					{
						document.getElementById("cat2_piitotal_committee_a").value=parseInt(document.getElementById("cat2_piitotal_committee_a").value)+parseInt(document.getElementById('cat2_pii2_committee_a').value)-xr;
						xr=document.getElementById('cat2_pii2_committee_a').value;
					}
					$("#partb_cat2_piitotal_btn").trigger("click");
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
	if(document.getElementById('cat2_pii3_self_a'))
	{
		xs=document.getElementById('cat2_pii3_self_a').value;
	}
	if(document.getElementById('cat2_pii3_hod_a'))
	{
		xt=document.getElementById('cat2_pii3_hod_a').value;
	}
	if(document.getElementById('cat2_pii3_committee_a'))
	{
		xu=document.getElementById('cat2_pii3_committee_a').value;
	}
    $('body').on('click','#partb_cat2_pii3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat2_pii3_self_a').value>20)
        {
        	document.getElementById('cat2_pii3_self_a').value=20;
        }
        var cat2_pii3_self_a = document.getElementById('cat2_pii3_self_a').value;

	    var cat2_pii3_hod_a=-1;
	    if($("#cat2_pii3_hod_a").length)
	    {
	    	if(document.getElementById('cat2_pii3_hod_a').value>20)
	    	{
	    		document.getElementById('cat2_pii3_hod_a').value=20;
	    	}
	     	cat2_pii3_hod_a=document.getElementById('cat2_pii3_hod_a').value;
	    }
	   	var cat2_pii3_committee_a=-1;
	   	if($("#cat2_pii3_committee_a").length)
	    {
	    	if(document.getElementById('cat2_pii3_committee_a').value>20)
	    	{
	    		document.getElementById('cat2_pii3_committee_a').value=20;
	    	}
			cat2_pii3_committee_a=document.getElementById('cat2_pii3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi3_sys.php',       
	        data:{
	        	cat2_pii3_self_a:cat2_pii3_self_a,
	        	cat2_pii3_hod_a:cat2_pii3_hod_a,
	        	cat2_pii3_committee_a:cat2_pii3_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response=="success")
	            {
	            	document.getElementById("partb_cat2_pii3_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat2_piitotal_self_a"))
	            	{
	            		document.getElementById("cat2_piitotal_self_a").value=parseInt(document.getElementById("cat2_piitotal_self_a").value)+parseInt(document.getElementById('cat2_pii3_self_a').value)-xs;
	            		xs=document.getElementById('cat2_pii3_self_a').value;
	            	}
					if(document.getElementById("cat2_piitotal_hod_a"))
					{
						document.getElementById("cat2_piitotal_hod_a").value=parseInt(document.getElementById("cat2_piitotal_hod_a").value)+parseInt(document.getElementById('cat2_pii3_hod_a').value)-xt;
						xt=document.getElementById('cat2_pii3_hod_a').value;
					}
					if(document.getElementById("cat2_piitotal_committee_a"))
					{
						document.getElementById("cat2_piitotal_committee_a").value=parseInt(document.getElementById("cat2_piitotal_committee_a").value)+parseInt(document.getElementById('cat2_pii3_committee_a').value)-xu;
						xu=document.getElementById('cat2_pii3_committee_a').value;
					}
					$("#partb_cat2_piitotal_btn").trigger("click");
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
	if(document.getElementById('cat2_pii4_self_a'))
	{
		xv=document.getElementById('cat2_pii4_self_a').value;
	}
	if(document.getElementById('cat2_pii4_hod_a'))
	{
		xw=document.getElementById('cat2_pii4_hod_a').value;
	}
	if(document.getElementById('cat2_pii4_committee_a'))
	{
		xx=document.getElementById('cat2_pii4_committee_a').value;
	}
    $('body').on('click','#partb_cat2_pii4_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat2_pii4_self_a').value>20)
        {
        	document.getElementById('cat2_pii4_self_a').value=20;
        }
        var cat2_pii4_self_a = document.getElementById('cat2_pii4_self_a').value;

	    var cat2_pii4_hod_a=-1;
	    if($("#cat2_pii4_hod_a").length)
	    {
	    	if(document.getElementById('cat2_pii4_hod_a').value>20)
	    	{
	    		document.getElementById('cat2_pii4_hod_a').value=20;
	    	}
	     	cat2_pii4_hod_a=document.getElementById('cat2_pii4_hod_a').value;
	    }
	   	var cat2_pii4_committee_a=-1;
	   	if($("#cat2_pii4_committee_a").length)
	    {
	    	if(document.getElementById('cat2_pii4_committee_a').value>20)
	    	{
	    		document.getElementById('cat2_pii4_committee_a').value=20;
	    	}
			cat2_pii4_committee_a=document.getElementById('cat2_pii4_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pi4_sys.php',       
	        data:{
	        	cat2_pii4_self_a:cat2_pii4_self_a,
	        	cat2_pii4_hod_a:cat2_pii4_hod_a,
	        	cat2_pii4_committee_a:cat2_pii4_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat2_pii4_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat2_piitotal_self_a"))
	            	{
	            		document.getElementById("cat2_piitotal_self_a").value=parseInt(document.getElementById("cat2_piitotal_self_a").value)+parseInt(document.getElementById('cat2_pii4_self_a').value)-xv;
	            		xv=document.getElementById('cat2_pii4_self_a').value;
	            	}
					if(document.getElementById("cat2_piitotal_hod_a"))
					{
						document.getElementById("cat2_piitotal_hod_a").value=parseInt(document.getElementById("cat2_piitotal_hod_a").value)+parseInt(document.getElementById('cat2_pii4_hod_a').value)-xw;
						xw=document.getElementById('cat2_pii4_hod_a').value;
					}
					if(document.getElementById("cat2_piitotal_committee_a"))
					{
						document.getElementById("cat2_piitotal_committee_a").value=parseInt(document.getElementById("cat2_piitotal_committee_a").value)+parseInt(document.getElementById('cat2_pii4_committee_a').value)-xx;
						xx=document.getElementById('cat2_pii4_committee_a').value;
					}
					$("#partb_cat2_piitotal_btn").trigger("click");
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
        if(document.getElementById('cat2_piitotal_self_a').value>100)
        {
        	document.getElementById('cat2_piitotal_self_a').value=100;
        }
        var cat2_piitotal_self_a = document.getElementById('cat2_piitotal_self_a').value;

	    var cat2_piitotal_hod_a=-1;
	    if($("#cat2_piitotal_hod_a").length)
	    {
	    	if(document.getElementById('cat2_piitotal_hod_a').value>100)
	    	{
	    		document.getElementById('cat2_piitotal_hod_a').value=100;
	    	}
	     	cat2_piitotal_hod_a=document.getElementById('cat2_piitotal_hod_a').value;
	    }
	   	var cat2_piitotal_committee_a=-1;
	   	if($("#cat2_piitotal_committee_a").length)
	    {
	    	if(document.getElementById('cat2_piitotal_committee_a').value>100)
	    	{
	    		document.getElementById('cat2_piitotal_committee_a').value=100;
	    	}
			cat2_piitotal_committee_a=document.getElementById('cat2_piitotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat2_pitotal_sys.php',       
	        data:{
	        	cat2_piitotal_self_a:cat2_piitotal_self_a,
	        	cat2_piitotal_hod_a:cat2_piitotal_hod_a,
	        	cat2_piitotal_committee_a:cat2_piitotal_committee_a,
	        	year:year,
	        	userId:userId
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
if(document.getElementById('cat3_piii1_self_a'))
{
	xy=document.getElementById('cat3_piii1_self_a').value;
}
if(document.getElementById('cat3_piii1_hod_a'))
{
	xz=document.getElementById('cat3_piii1_hod_a').value;
}
if(document.getElementById('cat3_piii1_committee_a'))
{
	xxa=document.getElementById('cat3_piii1_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii1_self_a').value>20)
        {
        	document.getElementById('cat3_piii1_self_a').value=20;
        }
        var cat3_piii1_self_a = document.getElementById('cat3_piii1_self_a').value;

	    var cat3_piii1_hod_a=-1;
	    if($("#cat3_piii1_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii1_hod_a').value>20)
	    	{
	    		document.getElementById('cat3_piii1_hod_a').value=20;
	    	}
	     	cat3_piii1_hod_a=document.getElementById('cat3_piii1_hod_a').value;
	    }
	   	var cat3_piii1_committee_a=-1;
	   	if($("#cat3_piii1_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii1_committee_a').value>20)
	    	{
	    		document.getElementById('cat3_piii1_committee_a').value=20;
	    	}
			cat3_piii1_committee_a=document.getElementById('cat3_piii1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii1_sys.php',       
	        data:{
	        	cat3_piii1_self_a:cat3_piii1_self_a,
	        	cat3_piii1_hod_a:cat3_piii1_hod_a,
	        	cat3_piii1_committee_a:cat3_piii1_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii1_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii1_self_a').value)-xy;
						xy=document.getElementById('cat3_piii1_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii1_hod_a').value)-xz;
						xz=document.getElementById('cat3_piii1_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii1_committee_a').value)-xxa;
	            		xxa=document.getElementById('cat3_piii1_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
if(document.getElementById('cat3_piii2_self_a'))
{
	xxb=document.getElementById('cat3_piii2_self_a').value;
}
if(document.getElementById('cat3_piii2_hod_a'))
{
	xxc=document.getElementById('cat3_piii2_hod_a').value;
}
if(document.getElementById('cat3_piii2_committee_a'))
{
	xxd=document.getElementById('cat3_piii2_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii2_self_a').value>15)
        {
        	document.getElementById('cat3_piii2_self_a').value=15;
        }
        var cat3_piii2_self_a = document.getElementById('cat3_piii2_self_a').value;

	    var cat3_piii2_hod_a=-1;
	    if($("#cat3_piii2_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii2_hod_a').value>15)
	    	{
	    		document.getElementById('cat3_piii2_hod_a').value=15;
	    	}
	     	cat3_piii2_hod_a=document.getElementById('cat3_piii2_hod_a').value;
	    }
	   	var cat3_piii2_committee_a=-1;
	   	if($("#cat3_piii2_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii2_committee_a').value>15)
	    	{
	    		document.getElementById('cat3_piii2_committee_a').value=15;
	    	}
			cat3_piii2_committee_a=document.getElementById('cat3_piii2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii2_sys.php',       
	        data:{
	        	cat3_piii2_self_a:cat3_piii2_self_a,
	        	cat3_piii2_hod_a:cat3_piii2_hod_a,
	        	cat3_piii2_committee_a:cat3_piii2_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii2_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii2_self_a').value)-xxb;
						xxb=document.getElementById('cat3_piii2_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii2_hod_a').value)-xxc;
						xxc=document.getElementById('cat3_piii2_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii2_committee_a').value)-xxd;
	            		xxd=document.getElementById('cat3_piii2_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
	if(document.getElementById('cat3_piii3_self_a'))
	{
		xxe=document.getElementById('cat3_piii3_self_a').value;
	}
	if(document.getElementById('cat3_piii3_hod_a'))
	{
		xxf=document.getElementById('cat3_piii3_hod_a').value;
	}
	if(document.getElementById('cat3_piii3_committee_a'))
	{
		xxg=document.getElementById('cat3_piii3_committee_a').value;
	}
    $('body').on('click','#partb_cat3_piii3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii3_self_a').value>10)
        {
        	document.getElementById('cat3_piii3_self_a').value=10;
        }
        var cat3_piii3_self_a = document.getElementById('cat3_piii3_self_a').value;

	    var cat3_piii3_hod_a=-1;
	    if($("#cat3_piii3_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii3_hod_a').value>10)
	    	{
	    		document.getElementById('cat3_piii3_hod_a').value=10;
	    	}
	     	cat3_piii3_hod_a=document.getElementById('cat3_piii3_hod_a').value;
	    }
	   	var cat3_piii3_committee_a=-1;
	   	if($("#cat3_piii3_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii3_committee_a').value>10)
	    	{
	    		document.getElementById('cat3_piii3_committee_a').value=10;
	    	}
			cat3_piii3_committee_a=document.getElementById('cat3_piii3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii3_sys.php',       
	        data:{
	        	cat3_piii3_self_a:cat3_piii3_self_a,
	        	cat3_piii3_hod_a:cat3_piii3_hod_a,
	        	cat3_piii3_committee_a:cat3_piii3_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii3_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii3_self_a').value)-xxe;
						xxe=document.getElementById('cat3_piii3_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii3_hod_a').value)-xxf;
						xxf=document.getElementById('cat3_piii3_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii3_committee_a').value)-xxg;
	            		xxg=document.getElementById('cat3_piii3_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
	if(document.getElementById('cat3_piii4_self_a'))
	{
		xxh=document.getElementById('cat3_piii4_self_a').value;
	}
	if(document.getElementById('cat3_piii4_hod_a'))
	{
		xxi=document.getElementById('cat3_piii4_hod_a').value;
	}
	if(document.getElementById('cat3_piii4_committee_a'))
	{
		xxj=document.getElementById('cat3_piii4_committee_a').value;
	}
    $('body').on('click','#partb_cat3_piii4_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii4_self_a').value>15)
        {
        	document.getElementById('cat3_piii4_self_a').value=15;
        }
        var cat3_piii4_self_a = document.getElementById('cat3_piii4_self_a').value;

	    var cat3_piii4_hod_a=-1;
	    if($("#cat3_piii4_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii4_hod_a').value>15)
	    	{
	    		document.getElementById('cat3_piii4_hod_a').value=15;
	    	}
	     	cat3_piii4_hod_a=document.getElementById('cat3_piii4_hod_a').value;
	    }
	   	var cat3_piii4_committee_a=-1;
	   	if($("#cat3_piii4_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii4_committee_a').value>15)
	    	{
	    		document.getElementById('cat3_piii4_committee_a').value=15;
	    	}
			cat3_piii4_committee_a=document.getElementById('cat3_piii4_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii4_sys.php',       
	        data:{
	        	cat3_piii4_self_a:cat3_piii4_self_a,
	        	cat3_piii4_hod_a:cat3_piii4_hod_a,
	        	cat3_piii4_committee_a:cat3_piii4_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii4_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii4_self_a').value)-xxh;
						xxh=document.getElementById('cat3_piii4_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii4_hod_a').value)-xxi;
						xxi=document.getElementById('cat3_piii4_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii4_committee_a').value)-xxj;
	            		xxj=document.getElementById('cat3_piii4_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
	if(document.getElementById('cat3_piii5_self_a'))
	{
		xxl=document.getElementById('cat3_piii5_self_a').value;
	}
	if(document.getElementById('cat3_piii5_hod_a'))
	{
		xxm=document.getElementById('cat3_piii5_hod_a').value;
	}
	if(document.getElementById('cat3_piii5_committee_a'))
	{
		xxn=document.getElementById('cat3_piii5_committee_a').value;
	}
    $('body').on('click','#partb_cat3_piii5_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        // if(document.getElementById('cat3_piii5_self_a').value>40)
        // {
        // 	document.getElementById('cat3_piii5_self_a').value=40;
        // }
        var cat3_piii5_self_a = document.getElementById('cat3_piii5_self_a').value;

	    var cat3_piii5_hod_a=-1;
	    if($("#cat3_piii5_hod_a").length)
	    {
	    	// if(document.getElementById('cat3_piii5_hod_a').value>40)
	    	// {
	    	// 	document.getElementById('cat3_piii5_hod_a').value=40;
	    	// }
	     	cat3_piii5_hod_a=document.getElementById('cat3_piii5_hod_a').value;
	    }
	   	var cat3_piii5_committee_a=-1;
	   	if($("#cat3_piii5_committee_a").length)
	    {
	    	// if(document.getElementById('cat3_piii5_committee_a').value>40)
	    	// {
	    	// 	document.getElementById('cat3_piii5_committee_a').value=40;
	    	// }
			cat3_piii5_committee_a=document.getElementById('cat3_piii5_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii5_sys.php',       
	        data:{
	        	cat3_piii5_self_a:cat3_piii5_self_a,
	        	cat3_piii5_hod_a:cat3_piii5_hod_a,
	        	cat3_piii5_committee_a:cat3_piii5_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii5_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiires_self_a"))
					{
						document.getElementById("cat3_piiires_self_a").value=parseInt(document.getElementById("cat3_piiires_self_a").value)+parseInt(document.getElementById('cat3_piii5_self_a').value)-xxl;
						xxl=document.getElementById('cat3_piii5_self_a').value;
					}
					if(document.getElementById("cat3_piiires_hod_a"))
					{
						document.getElementById("cat3_piiires_hod_a").value=parseInt(document.getElementById("cat3_piiires_hod_a").value)+parseInt(document.getElementById('cat3_piii5_hod_a').value)-xxm;
						xxm=document.getElementById('cat3_piii5_hod_a').value;
					}
					if(document.getElementById("cat3_piiires_committee_a"))
	            	{
	            		document.getElementById("cat3_piiires_committee_a").value=parseInt(document.getElementById("cat3_piiires_committee_a").value)+parseInt(document.getElementById('cat3_piii5_committee_a').value)-xxn;
	            		xxn=document.getElementById('cat3_piii5_committee_a').value;
	            	}
	            	$("#partb_cat3_piiires_btn").trigger("click");
					// $("#partb_cat3_piiitotal_btn").trigger("click");
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
	if(document.getElementById('cat3_piii6_self_a'))
	{
		xxo=document.getElementById('cat3_piii6_self_a').value;
	}
	if(document.getElementById('cat3_piii6_hod_a'))
	{
		xxp=document.getElementById('cat3_piii6_hod_a').value;
	}
	if(document.getElementById('cat3_piii6_committee_a'))
	{
		xxq=document.getElementById('cat3_piii6_committee_a').value;
	}
    $('body').on('click','#partb_cat3_piii6_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        // if(document.getElementById('cat3_piii6_self_a').value>40)
        // {
        // 	document.getElementById('cat3_piii6_self_a').value=40;
        // }
        var cat3_piii6_self_a = document.getElementById('cat3_piii6_self_a').value;

	    var cat3_piii6_hod_a=-1;
	    if($("#cat3_piii6_hod_a").length)
	    {
	    	// if(document.getElementById('cat3_piii6_hod_a').value>40)
	    	// {
	    	// 	document.getElementById('cat3_piii6_hod_a').value=40;
	    	// }
	     	cat3_piii6_hod_a=document.getElementById('cat3_piii6_hod_a').value;
	    }
	   	var cat3_piii6_committee_a=-1;
	   	if($("#cat3_piii6_committee_a").length)
	    {
	    	// if(document.getElementById('cat3_piii6_committee_a').value>40)
	    	// {
	    	// 	document.getElementById('cat3_piii6_committee_a').value=40;
	    	// }
			cat3_piii6_committee_a=document.getElementById('cat3_piii6_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii6_sys.php',       
	        data:{
	        	cat3_piii6_self_a:cat3_piii6_self_a,
	        	cat3_piii6_hod_a:cat3_piii6_hod_a,
	        	cat3_piii6_committee_a:cat3_piii6_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii6_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiires_self_a"))
					{
						document.getElementById("cat3_piiires_self_a").value=parseInt(document.getElementById("cat3_piiires_self_a").value)+parseInt(document.getElementById('cat3_piii6_self_a').value)-xxo;
						xxo=document.getElementById('cat3_piii6_self_a').value;
					}
					if(document.getElementById("cat3_piiires_hod_a"))
					{
						document.getElementById("cat3_piiires_hod_a").value=parseInt(document.getElementById("cat3_piiires_hod_a").value)+parseInt(document.getElementById('cat3_piii6_hod_a').value)-xxp;
						xxp=document.getElementById('cat3_piii6_hod_a').value;
					}
					if(document.getElementById("cat3_piiires_committee_a"))
	            	{
	            		document.getElementById("cat3_piiires_committee_a").value=parseInt(document.getElementById("cat3_piiires_committee_a").value)+parseInt(document.getElementById('cat3_piii6_committee_a').value)-xxq;
	            		xxq=document.getElementById('cat3_piii6_committee_a').value;
	            	}
	            	$("#partb_cat3_piiires_btn").trigger("click");
					// $("#partb_cat3_piiitotal_btn").trigger("click");
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
if(document.getElementById('cat3_piii7_self_a'))
{
	xxr=document.getElementById('cat3_piii7_self_a').value;
}
if(document.getElementById('cat3_piii7_hod_a'))
{
	xxs=document.getElementById('cat3_piii7_hod_a').value;
}
if(document.getElementById('cat3_piii7_committee_a'))
{
	xxt=document.getElementById('cat3_piii7_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii7_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        // if(document.getElementById('cat3_piii7_self_a').value>40)
        // {
        // 	document.getElementById('cat3_piii7_self_a').value=40;
        // }
        var cat3_piii7_self_a = document.getElementById('cat3_piii7_self_a').value;

	    var cat3_piii7_hod_a=-1;
	    if($("#cat3_piii7_hod_a").length)
	    {
	    	// if(document.getElementById('cat3_piii7_hod_a').value>40)
	    	// {
	    	// 	document.getElementById('cat3_piii7_hod_a').value=40;
	    	// }
	     	cat3_piii7_hod_a=document.getElementById('cat3_piii7_hod_a').value;
	    }
	   	var cat3_piii7_committee_a=-1;
	   	if($("#cat3_piii7_committee_a").length)
	    {
	    	// if(document.getElementById('cat3_piii7_committee_a').value>40)
	    	// {
	    	// 	document.getElementById('cat3_piii7_committee_a').value=40;
	    	// }
			cat3_piii7_committee_a=document.getElementById('cat3_piii7_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii7_sys.php',       
	        data:{
	        	cat3_piii7_self_a:cat3_piii7_self_a,
	        	cat3_piii7_hod_a:cat3_piii7_hod_a,
	        	cat3_piii7_committee_a:cat3_piii7_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii7_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiires_self_a"))
					{
						document.getElementById("cat3_piiires_self_a").value=parseInt(document.getElementById("cat3_piiires_self_a").value)+parseInt(document.getElementById('cat3_piii7_self_a').value)-xxr;
						xxr=document.getElementById('cat3_piii7_self_a').value;
					}
					if(document.getElementById("cat3_piiires_hod_a"))
					{
						document.getElementById("cat3_piiires_hod_a").value=parseInt(document.getElementById("cat3_piiires_hod_a").value)+parseInt(document.getElementById('cat3_piii7_hod_a').value)-xxs;
						xxs=document.getElementById('cat3_piii7_hod_a').value;
					}
					if(document.getElementById("cat3_piiires_committee_a"))
	            	{
	            		document.getElementById("cat3_piiires_committee_a").value=parseInt(document.getElementById("cat3_piiires_committee_a").value)+parseInt(document.getElementById('cat3_piii7_committee_a').value)-xxt;
	            		xxt=document.getElementById('cat3_piii7_committee_a').value;
	            	}
	            	$("#partb_cat3_piiires_btn").trigger("click");
					// $("#partb_cat3_piiitotal_btn").trigger("click");
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

//Research/thesis supervisor
$(document).ready(function(){
	if(document.getElementById('cat3_piiires_self_a'))
	{
		resa=document.getElementById('cat3_piiires_self_a').value;
	}
	if(document.getElementById('cat3_piiires_hod_a'))
	{
		resb=document.getElementById('cat3_piiires_hod_a').value;
	}
	if(document.getElementById('cat3_piiires_committee_a'))
	{
		resc=document.getElementById('cat3_piiires_committee_a').value;
	}
    $('body').on('click','#partb_cat3_piiires_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piiires_self_a').value>40)
        {
        	document.getElementById('cat3_piiires_self_a').value=40;
        }
        var cat3_piiires_self_a = document.getElementById('cat3_piiires_self_a').value;

	    var cat3_piiires_hod_a=-1;
	    if($("#cat3_piiires_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piiires_hod_a').value>40)
	    	{
	    		document.getElementById('cat3_piiires_hod_a').value=40;
	    	}
	     	cat3_piiires_hod_a=document.getElementById('cat3_piiires_hod_a').value;
	    }
	   	var cat3_piiires_committee_a=-1;
	   	if($("#cat3_piiires_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piiires_committee_a').value>40)
	    	{
	    		document.getElementById('cat3_piiires_committee_a').value=40;
	    	}
			cat3_piiires_committee_a=document.getElementById('cat3_piiires_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piiires_sys.php',       
	        data:{
	        	cat3_piiires_self_a:cat3_piiires_self_a,
	        	cat3_piiires_hod_a:cat3_piiires_hod_a,
	        	cat3_piiires_committee_a:cat3_piiires_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piiires_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piiires_self_a').value)-resa;
						resa=document.getElementById('cat3_piiires_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piiires_hod_a').value)-resb;
						resb=document.getElementById('cat3_piiires_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piiires_committee_a').value)-resc;
	            		resc=document.getElementById('cat3_piiires_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
////

$(document).ready(function(){
if(document.getElementById('cat3_piii8_self_a'))
{
	xxu=document.getElementById('cat3_piii8_self_a').value;
}
if(document.getElementById('cat3_piii8_hod_a'))
{
	xxv=document.getElementById('cat3_piii8_hod_a').value;
}
if(document.getElementById('cat3_piii8_committee_a'))
{
	xxw=document.getElementById('cat3_piii8_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii8_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii8_self_a').value>15)
        {
        	document.getElementById('cat3_piii8_self_a').value=15;
        }
        var cat3_piii8_self_a = document.getElementById('cat3_piii8_self_a').value;

	    var cat3_piii8_hod_a=-1;
	    if($("#cat3_piii8_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii8_hod_a').value>15)
	    	{
	    		document.getElementById('cat3_piii8_hod_a').value=15;
	    	}
	     	cat3_piii8_hod_a=document.getElementById('cat3_piii8_hod_a').value;
	    }
	   	var cat3_piii8_committee_a=-1;
	   	if($("#cat3_piii8_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii8_committee_a').value>15)
	    	{
	    		document.getElementById('cat3_piii8_committee_a').value=15;
	    	}
			cat3_piii8_committee_a=document.getElementById('cat3_piii8_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii8_sys.php',       
	        data:{
	        	cat3_piii8_self_a:cat3_piii8_self_a,
	        	cat3_piii8_hod_a:cat3_piii8_hod_a,
	        	cat3_piii8_committee_a:cat3_piii8_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii8_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii8_self_a').value)-xxu;
						xxu=document.getElementById('cat3_piii8_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii8_hod_a').value)-xxv;
						xxv=document.getElementById('cat3_piii8_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii8_committee_a').value)-xxw;
	            		xxw=document.getElementById('cat3_piii8_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
if(document.getElementById('cat3_piii9_self_a'))
{
	xxx=document.getElementById('cat3_piii9_self_a').value;
}
if(document.getElementById('cat3_piii9_hod_a'))
{
	xxy=document.getElementById('cat3_piii9_hod_a').value;
}
if(document.getElementById('cat3_piii9_committee_a'))
{
	xxz=document.getElementById('cat3_piii9_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii9_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii9_self_a')>15)
        {
        	document.getElementById('cat3_piii9_self_a').value=15;
        }
        var cat3_piii9_self_a = document.getElementById('cat3_piii9_self_a').value;

	    var cat3_piii9_hod_a=-1;
	    if($("#cat3_piii9_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii9_hod_a')>15)
	    	{
	    		document.getElementById('cat3_piii9_hod_a').value=15;
	    	}
	     	cat3_piii9_hod_a=document.getElementById('cat3_piii9_hod_a').value;
	    }
	   	var cat3_piii9_committee_a=-1;
	   	if($("#cat3_piii9_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii9_committee_a')>15)
	    	{
	    		document.getElementById('cat3_piii9_committee_a').value=15;
	    	}
			cat3_piii9_committee_a=document.getElementById('cat3_piii9_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii9_sys.php',       
	        data:{
	        	cat3_piii9_self_a:cat3_piii9_self_a,
	        	cat3_piii9_hod_a:cat3_piii9_hod_a,
	        	cat3_piii9_committee_a:cat3_piii9_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii9_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii9_self_a').value)-xxx;
						xxx=document.getElementById('cat3_piii9_self_a');
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii9_hod_a').value)-xxy;
						xxy=document.getElementById('cat3_piii9_hod_a');
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii9_committee_a').value)-xxz;
	            		xxz=document.getElementById('cat3_piii9_committee_a');
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
if(document.getElementById('cat3_piii10_self_a'))
{
	xxxa=document.getElementById('cat3_piii10_self_a').value;
}
if(document.getElementById('cat3_piii10_hod_a'))
{
	xxxb=document.getElementById('cat3_piii10_hod_a').value;
}
if(document.getElementById('cat3_piii10_committee_a'))
{
	xxxc=document.getElementById('cat3_piii10_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii10_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii10_self_a').value>20)
        {
        	document.getElementById('cat3_piii10_self_a').value=20;
        }
        var cat3_piii10_self_a = document.getElementById('cat3_piii10_self_a').value;

	    var cat3_piii10_hod_a=-1;
	    if($("#cat3_piii10_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii10_hod_a').value>20)
	    	{
	    		document.getElementById('cat3_piii10_hod_a').value=20;
	    	}
	     	cat3_piii10_hod_a=document.getElementById('cat3_piii10_hod_a').value;
	    }
	   	var cat3_piii10_committee_a=-1;
	   	if($("#cat3_piii10_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii10_committee_a').value>20)
	    	{
	    		document.getElementById('cat3_piii10_committee_a').value=20;
	    	}
			cat3_piii10_committee_a=document.getElementById('cat3_piii10_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii10_sys.php',       
	        data:{
	        	cat3_piii10_self_a:cat3_piii10_self_a,
	        	cat3_piii10_hod_a:cat3_piii10_hod_a,
	        	cat3_piii10_committee_a:cat3_piii10_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii10_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii10_self_a').value)-xxxa;
						xxxa=document.getElementById('cat3_piii10_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii10_hod_a').value)-xxxb;
						xxxb=document.getElementById('cat3_piii10_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii10_committee_a').value)-xxxc;
	            		xxxc=document.getElementById('cat3_piii10_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
if(document.getElementById('cat3_piii11_self_a'))
{
	xxxd=document.getElementById('cat3_piii11_self_a').value;
}
if(document.getElementById('cat3_piii11_hod_a'))
{
	xxxe=document.getElementById('cat3_piii11_hod_a').value;
}
if(document.getElementById('cat3_piii11_committee_a'))
{
	xxxf=document.getElementById('cat3_piii11_committee_a').value;
}
    $('body').on('click','#partb_cat3_piii11_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat3_piii11_self_a').value>25)
        {
        	document.getElementById('cat3_piii11_self_a').value=25;
        }
        var cat3_piii11_self_a = document.getElementById('cat3_piii11_self_a').value;

	    var cat3_piii11_hod_a=-1;
	    if($("#cat3_piii11_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piii11_hod_a').value>25)
	    	{
	    		document.getElementById('cat3_piii11_hod_a').value=25;
	    	}
	     	cat3_piii11_hod_a=document.getElementById('cat3_piii11_hod_a').value;
	    }
	   	var cat3_piii11_committee_a=-1;
	   	if($("#cat3_piii11_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piii11_committee_a').value>25)
	    	{
	    		document.getElementById('cat3_piii11_committee_a').value=25;
	    	}
			cat3_piii11_committee_a=document.getElementById('cat3_piii11_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piii11_sys.php',       
	        data:{
	        	cat3_piii11_self_a:cat3_piii11_self_a,
	        	cat3_piii11_hod_a:cat3_piii11_hod_a,
	        	cat3_piii11_committee_a:cat3_piii11_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat3_piii11_msg").innerHTML="Saved!";	            	
					if(document.getElementById("cat3_piiitotal_self_a"))
					{
						document.getElementById("cat3_piiitotal_self_a").value=parseInt(document.getElementById("cat3_piiitotal_self_a").value)+parseInt(document.getElementById('cat3_piii11_self_a').value)-xxxd;
						xxxd=document.getElementById('cat3_piii11_self_a').value;
					}
					if(document.getElementById("cat3_piiitotal_hod_a"))
					{
						document.getElementById("cat3_piiitotal_hod_a").value=parseInt(document.getElementById("cat3_piiitotal_hod_a").value)+parseInt(document.getElementById('cat3_piii11_hod_a').value)-xxxe;
						xxxe=document.getElementById('cat3_piii11_hod_a').value;
					}
					if(document.getElementById("cat3_piiitotal_committee_a"))
	            	{
	            		document.getElementById("cat3_piiitotal_committee_a").value=parseInt(document.getElementById("cat3_piiitotal_committee_a").value)+parseInt(document.getElementById('cat3_piii11_committee_a').value)-xxxf;
	            		xxxf=document.getElementById('cat3_piii11_committee_a').value;
	            	}
					$("#partb_cat3_piiitotal_btn").trigger("click");
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
        if(document.getElementById('cat3_piiitotal_self_a').value>175)
        {
        	document.getElementById('cat3_piiitotal_self_a').value=175;
        }
        var cat3_piiitotal_self_a = document.getElementById('cat3_piiitotal_self_a').value;

	    var cat3_piiitotal_hod_a=-1;
	    if($("#cat3_piiitotal_hod_a").length)
	    {
	    	if(document.getElementById('cat3_piiitotal_hod_a').value>175)
	    	{
	    		document.getElementById('cat3_piiitotal_hod_a').value=175;
	    	}
	     	cat3_piiitotal_hod_a=document.getElementById('cat3_piiitotal_hod_a').value;
	    }
	   	var cat3_piiitotal_committee_a=-1;
	   	if($("#cat3_piiitotal_committee_a").length)
	    {
	    	if(document.getElementById('cat3_piiitotal_committee_a').value>175)
	    	{
	    		document.getElementById('cat3_piiitotal_committee_a').value=175;
	    	}
			cat3_piiitotal_committee_a=document.getElementById('cat3_piiitotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat3_piiitotal_sys.php',       
	        data:{
	        	cat3_piiitotal_self_a:cat3_piiitotal_self_a,
	        	cat3_piiitotal_hod_a:cat3_piiitotal_hod_a,
	        	cat3_piiitotal_committee_a:cat3_piiitotal_committee_a,
	        	year:year,
	        	userId:userId
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
if(document.getElementById('cat4_piv1_self_a'))
{
	xxxg=document.getElementById('cat4_piv1_self_a').value;
}
if(document.getElementById('cat4_piv1_hod_a'))
{
	xxxh=document.getElementById('cat4_piv1_hod_a').value;
}
if(document.getElementById('cat4_piv1_committee_a'))
{
	xxxi=document.getElementById('cat4_piv1_committee_a').value;
}
    $('body').on('click','#partb_cat4_piv1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat4_piv1_self_a').value>30)
        {
        	document.getElementById('cat4_piv1_self_a').value=30;
        }
        var cat4_piv1_self_a = document.getElementById('cat4_piv1_self_a').value;

	    var cat4_piv1_hod_a=-1;
	    if($("#cat4_piv1_hod_a").length)
	    {
	    	if(document.getElementById('cat4_piv1_hod_a').value>30)
	    	{
	    		document.getElementById('cat4_piv1_hod_a').value=30;
	    	}
	     	cat4_piv1_hod_a=document.getElementById('cat4_piv1_hod_a').value;
	    }
	   	var cat4_piv1_committee_a=-1;
	   	if($("#cat4_piv1_committee_a").length)
	    {
	    	if(document.getElementById('cat4_piv1_committee_a').value>30)
	    	{
	    		document.getElementById('cat4_piv1_committee_a').value=30;
	    	}
			cat4_piv1_committee_a=document.getElementById('cat4_piv1_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_piv1_sys.php',       
	        data:{
	        	cat4_piv1_self_a:cat4_piv1_self_a,
	        	cat4_piv1_hod_a:cat4_piv1_hod_a,
	        	cat4_piv1_committee_a:cat4_piv1_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_piv1_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat4_pivtotal_self_a"))
	            	{
	            		document.getElementById("cat4_pivtotal_self_a").value=parseInt(document.getElementById("cat4_pivtotal_self_a").value)+parseInt(document.getElementById('cat4_piv1_self_a').value)-xxxg;
	            		xxxg=document.getElementById('cat4_piv1_self_a').value;
	            	}
					if(document.getElementById("cat4_pivtotal_hod_a"))
					{
						document.getElementById("cat4_pivtotal_hod_a").value=parseInt(document.getElementById("cat4_pivtotal_hod_a").value)+parseInt(document.getElementById('cat4_piv1_hod_a').value)-xxxh;
						xxxh=document.getElementById('cat4_piv1_hod_a').value;
					}
					if(document.getElementById("cat4_pivtotal_committee_a"))
					{
						document.getElementById("cat4_pivtotal_committee_a").value=parseInt(document.getElementById("cat4_pivtotal_committee_a").value)+parseInt(document.getElementById('cat4_piv1_committee_a').value)-xxxi;
						xxxi=document.getElementById('cat4_piv1_committee_a').value;
					}
					$("#partb_cat4_pivtotal_btn").trigger("click");
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
if(document.getElementById('cat4_piv2_self_a'))
{
	xxxj=document.getElementById('cat4_piv2_self_a').value;
}
if(document.getElementById('cat4_piv2_hod_a'))
{
	xxxk=document.getElementById('cat4_piv2_hod_a').value;
}
if(document.getElementById('cat4_piv2_committee_a'))
{
	xxxl=document.getElementById('cat4_piv2_committee_a').value;
}
    $('body').on('click','#partb_cat4_piv2_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat4_piv2_self_a').value>30)
        {
        	document.getElementById('cat4_piv2_self_a').value=30;
        }
        var cat4_piv2_self_a = document.getElementById('cat4_piv2_self_a').value;

	    var cat4_piv2_hod_a=-1;
	    if($("#cat4_piv2_hod_a").length)
	    {
	    	if(document.getElementById('cat4_piv2_hod_a').value>30)
	    	{
	    		document.getElementById('cat4_piv2_hod_a').value=30;
	    	}
	     	cat4_piv2_hod_a=document.getElementById('cat4_piv2_hod_a').value;
	    }
	   	var cat4_piv2_committee_a=-1;
	   	if($("#cat4_piv2_committee_a").length)
	    {
	    	if(document.getElementById('cat4_piv2_committee_a').value>30)
	    	{
	    		document.getElementById('cat4_piv2_committee_a').value=30;
	    	}
			cat4_piv2_committee_a=document.getElementById('cat4_piv2_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_piv2_sys.php',       
	        data:{
	        	cat4_piv2_self_a:cat4_piv2_self_a,
	        	cat4_piv2_hod_a:cat4_piv2_hod_a,
	        	cat4_piv2_committee_a:cat4_piv2_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_piv2_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat4_pivtotal_self_a"))
	            	{
	            		document.getElementById("cat4_pivtotal_self_a").value=parseInt(document.getElementById("cat4_pivtotal_self_a").value)+parseInt(document.getElementById('cat4_piv2_self_a').value)-xxxj;
	            		xxxj=document.getElementById('cat4_piv2_self_a').value;
	            	}
					if(document.getElementById("cat4_pivtotal_hod_a"))
					{
						document.getElementById("cat4_pivtotal_hod_a").value=parseInt(document.getElementById("cat4_pivtotal_hod_a").value)+parseInt(document.getElementById('cat4_piv2_hod_a').value)-xxxk;
						xxxk=document.getElementById('cat4_piv2_hod_a').value;
					}
					if(document.getElementById("cat4_pivtotal_committee_a"))
					{
						document.getElementById("cat4_pivtotal_committee_a").value=parseInt(document.getElementById("cat4_pivtotal_committee_a").value)+parseInt(document.getElementById('cat4_piv2_committee_a').value)-xxxl;
						xxxl=document.getElementById('cat4_piv2_committee_a').value;
					}
					$("#partb_cat4_pivtotal_btn").trigger("click");
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
if(document.getElementById('cat4_piv3_self_a'))
{
	xxxm=document.getElementById('cat4_piv3_self_a').value;
}
if(document.getElementById('cat4_piv3_hod_a'))
{
	xxxn=document.getElementById('cat4_piv3_hod_a').value;
}
if(document.getElementById('cat4_piv3_committee_a'))
{
	xxxo=document.getElementById('cat4_piv3_committee_a').value;
}
    $('body').on('click','#partb_cat4_piv3_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        if(document.getElementById('cat4_piv3_self_a').value>15)
        {
        	document.getElementById('cat4_piv3_self_a').value=15;
        }
        var cat4_piv3_self_a = document.getElementById('cat4_piv3_self_a').value;

	    var cat4_piv3_hod_a=-1;
	    if($("#cat4_piv3_hod_a").length)
	    {
	    	if(document.getElementById('cat4_piv3_hod_a').value>15)
	    	{
	    		document.getElementById('cat4_piv3_hod_a').value=15;
	    	}
	     	cat4_piv3_hod_a=document.getElementById('cat4_piv3_hod_a').value;
	    }
	   	var cat4_piv3_committee_a=-1;
	   	if($("#cat4_piv3_committee_a").length)
	    {
	    	if(document.getElementById('cat4_piv3_committee_a').value>15)
	    	{
	    		document.getElementById('cat4_piv3_committee_a').value=15;
	    	}
			cat4_piv3_committee_a=document.getElementById('cat4_piv3_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_piv3_sys.php',       
	        data:{
	        	cat4_piv3_self_a:cat4_piv3_self_a,
	        	cat4_piv3_hod_a:cat4_piv3_hod_a,
	        	cat4_piv3_committee_a:cat4_piv3_committee_a,
	        	year:year,
	        	userId:userId
	        },                        
	        success: function (response) 
	        {
	        	// alert(response);
	            if(response.trim()=="success")
	            {
	            	document.getElementById("partb_cat4_piv3_msg").innerHTML="Saved!";
	            	if(document.getElementById("cat4_pivtotal_self_a"))
	            	{
	            		document.getElementById("cat4_pivtotal_self_a").value=parseInt(document.getElementById("cat4_pivtotal_self_a").value)+parseInt(document.getElementById('cat4_piv3_self_a').value)-xxxm;
	            		xxxm=document.getElementById('cat4_piv3_self_a').value;
	            	}
					if(document.getElementById("cat4_pivtotal_hod_a"))
					{
						document.getElementById("cat4_pivtotal_hod_a").value=parseInt(document.getElementById("cat4_pivtotal_hod_a").value)+parseInt(document.getElementById('cat4_piv3_hod_a').value)-xxxn;
						xxxn=document.getElementById('cat4_piv3_hod_a').value;
					}
					if(document.getElementById("cat4_pivtotal_committee_a"))
					{
						document.getElementById("cat4_pivtotal_committee_a").value=parseInt(document.getElementById("cat4_pivtotal_committee_a").value)+parseInt(document.getElementById('cat4_piv3_committee_a').value)-xxxo;
						xxxo=document.getElementById('cat4_piv3_committee_a').value;
					}
					$("#partb_cat4_pivtotal_btn").trigger("click");
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
        if(document.getElementById('cat4_pivtotal_self_a').value>75)
        {
        	document.getElementById('cat4_pivtotal_self_a').value=75;
        }
        var cat4_pivtotal_self_a = document.getElementById('cat4_pivtotal_self_a').value;

	    var cat4_pivtotal_hod_a=-1;
	    if($("#cat4_pivtotal_hod_a").length)
	    {
	    	if(document.getElementById('cat4_pivtotal_hod_a').value>75)
	    	{
	    		document.getElementById('cat4_pivtotal_hod_a').value=75;
	    	}
	     	cat4_pivtotal_hod_a=document.getElementById('cat4_pivtotal_hod_a').value;
	    }
	   	var cat4_pivtotal_committee_a=-1;
	   	if($("#cat4_pivtotal_committee_a").length)
	    {
	    	if(document.getElementById('cat4_pivtotal_committee_a').value>75)
	    	{
	    		document.getElementById('cat4_pivtotal_committee_a').value=75;
	    	}
			cat4_pivtotal_committee_a=document.getElementById('cat4_pivtotal_committee_a').value;
	   	}

	   	var year=document.getElementById('year').value;
	   	var userId=document.getElementById('formFacultyId').value;

	   	// alert(parta_gpi_hod_a);

	    $.ajax   
	    ({
	        type: 'POST',
	        url: 'partb_cat4_pivtotal_sys.php',       
	        data:{
	        	cat4_pivtotal_self_a:cat4_pivtotal_self_a,
	        	cat4_pivtotal_hod_a:cat4_pivtotal_hod_a,
	        	cat4_pivtotal_committee_a:cat4_pivtotal_committee_a,
	        	year:year,
	        	userId:userId
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


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ SUMMARY PAGE JS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//changing file name of selected file on input
$(document).ready(function(){
	$(document).on('change', '.custom-file-input', function()
	{
	    //get the file name
	    var fileName = $(this).val().replace(/^.*\\/, ""); // regexp added at the end to remove C://fakepath/ from the file path
	    //replace the "Choose a file" label
	    $(this).next('.custom-file-label').html(fileName);
	});
});


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  Leftnav JS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  		$(".sidebar-submenu").slideUp(200);
  		if(
    		$(this)
      		.parent()
      		.hasClass("active")
  		)
  		{
   			$(".sidebar-dropdown").removeClass("active");
    		$(this)
      		.parent()
      		.removeClass("active");
  		} else {
    	$(".sidebar-dropdown").removeClass("active");
    	$(this)
      	.next(".sidebar-submenu")
      	.slideDown(200);
    	$(this)
      	.parent()
      	.addClass("active");
  	}
});

$("#close-sidebar").click(function() {
  	$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  	$(".page-wrapper").addClass("toggled");
});


   
   
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PART B CATEGORY 1 Max Hours Calculation ~~~~~~~~~~~~~~~

$(document).ready(function(){	
	var focusIdodd=0;
	$(document).on('focus','[name="ctohrsweek[]"]',function(){
		focusIdodd=this.id;
		// alert(focusIdodd);
	});
    $(document).on('focusout','[name="ctohrsweek[]"]',function(){
    	if(document.getElementById(focusIdodd).value.trim()!='' && !isNaN(document.getElementById(focusIdodd).value.trim()))
    	{
    		// alert(phdne);
    		idnumber=focusIdodd.match(/\d+$/);
			// alert(idnumber);
    		document.getElementById('ctomaxhrs'+idnumber).value=parseInt(document.getElementById('ctohrsweek'+idnumber).value)*15;
    		focusIdodd=null;
    	}
  	}); 

	$(document).on('focus','[name="ctohrsengaged[]"]',function(){
		focusIdodd=this.id;
		// alert(focusIdodd);
	});
    $(document).on('focusout','[name="ctohrsengaged[]"]',function(){
    	if(document.getElementById(focusIdodd).value.trim()!='' && !isNaN(document.getElementById(focusIdodd).value.trim()))
    	{
    		// alert(phdne);
    		idnumber=focusIdodd.match(/\d+$/);
			// alert(idnumber);
    		document.getElementById('ctoc'+idnumber).value=parseInt(document.getElementById('ctohrsengaged'+idnumber).value)/parseInt(document.getElementById('ctomaxhrs'+idnumber).value)*100;
    		focusIdodd=null;
    	}
  	});  	

  	$(document).on('focus','[name="ctomaxhrs[]"]',function(){
		focusIdodd=this.id;
	});
    $(document).on('focusout','[name="ctomaxhrs[]"]',function(){
    	if(document.getElementById(focusIdodd).value.trim()!='' && !isNaN(document.getElementById(focusIdodd).value.trim()))
    	{
    		// alert(phdne);
    		idnumber=focusIdodd.match(/\d+$/);
			// alert(idnumber);
    		document.getElementById('ctoc'+idnumber).value=parseInt(document.getElementById('ctohrsengaged'+idnumber).value)/parseInt(document.getElementById('ctomaxhrs'+idnumber).value)*100;
    		focusIdodd=null;
    	}
  	});  	

  	var focusIdeven=0;
  	$(document).on('focus','[name="ctehrsweek[]"]',function(){
		focusIdodd=this.id;
		// alert(focusIdodd);
	});
    $(document).on('focusout','[name="ctehrsweek[]"]',function(){
    	if(document.getElementById(focusIdodd).value.trim()!='' && !isNaN(document.getElementById(focusIdodd).value.trim()))
    	{
    		// alert(phdne);
    		idnumber=focusIdodd.match(/\d+$/);
			// alert(idnumber);
    		document.getElementById('ctemaxhrs'+idnumber).value=parseInt(document.getElementById('ctehrsweek'+idnumber).value)*15;
    		focusIdodd=null;
    	}
  	}); 

	$(document).on('focus','[name="ctehrsengaged[]"]',function(){
		focusIdeven=this.id;
		// alert(focusIdeven);
	});
    $(document).on('focusout','[name="ctehrsengaged[]"]',function(){
    	if(document.getElementById(focusIdeven).value.trim()!='' && !isNaN(document.getElementById(focusIdeven).value.trim()))
    	{
    		// alert(phdne);
    		idnumber=focusIdeven.match(/\d+$/);
			// alert(idnumber);
    		document.getElementById('ctec'+idnumber).value=parseInt(document.getElementById('ctehrsengaged'+idnumber).value)/parseInt(document.getElementById('ctemaxhrs'+idnumber).value)*100;
    		focusIdeven=null;
    	}
  	});  	

  	$(document).on('focus','[name="ctemaxhrs[]"]',function(){
		focusIdeven=this.id;
	});
    $(document).on('focusout','[name="ctemaxhrs[]"]',function(){
    	if(document.getElementById(focusIdeven).value.trim()!='' && !isNaN(document.getElementById(focusIdeven).value.trim()))
    	{
    		// alert(phdne);
    		idnumber=focusIdeven.match(/\d+$/);
			// alert(idnumber);
    		document.getElementById('ctec'+idnumber).value=parseInt(document.getElementById('ctehrsengaged'+idnumber).value)/parseInt(document.getElementById('ctemaxhrs'+idnumber).value)*100;
    		focusIdeven=null;
    	}
  	});  
});


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PART B CATEGORY 3 Research Thesis Supervisor and Research Guide ~~~~~~~~~~~~~~~

$(document).ready(function(){
	if(document.getElementById('phdne'))
	{
		var phdne=parseInt(document.getElementById('phdne').value)*10;
	}	
	if(document.getElementById('phdts'))
	{
		var phdts=parseInt(document.getElementById('phdts').value)*8;
	}	
	if(document.getElementById('phdda'))
	{
		var phdda=parseInt(document.getElementById('phdda').value)*6;
	}	
    $("#phdne").focusout(function(){
    	if(document.getElementById('phdne').value.trim()!='' && !isNaN(document.getElementById('phdne').value.trim()))
    	{
    		// alert(phdne);
    		if(isNaN(phdne))
    		{
    			phdne=0;
    		}
    		document.getElementById('cat3_piii5_self_a').value=parseInt(document.getElementById('cat3_piii5_self_a').value)+document.getElementById('phdne').value*6-phdne;
    		// if(document.getElementById('cat3_piii5_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii5_self_a').value=40;
    		// }
    		phdne=parseInt(document.getElementById('phdne').value)*10;
    		$("#partb_cat3_piii5_btn").trigger("click");

    	}
  	});
  	$("#phdts").focusout(function(){
    	if(document.getElementById('phdts').value.trim()!='' && !isNaN(document.getElementById('phdts').value.trim()))
    	{
    		// alert(phdts);
    		if(isNaN(phdts))
    		{
    			phdts=0;
    		}
    		document.getElementById('cat3_piii5_self_a').value=parseInt(document.getElementById('cat3_piii5_self_a').value)+document.getElementById('phdts').value*8-phdts;
    		// if(document.getElementById('cat3_piii5_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii5_self_a').value=40;
    		// }
    		phdts=parseInt(document.getElementById('phdts').value)*8;
    		$("#partb_cat3_piii5_btn").trigger("click");

    	}
  	});
  	$("#phdda").focusout(function(){
    	if(document.getElementById('phdda').value.trim()!='' && !isNaN(document.getElementById('phdda').value.trim()))
    	{
    		// alert(phdda);
    		if(isNaN(phdda))
    		{
    			phdda=0;
    		}
    		document.getElementById('cat3_piii5_self_a').value=parseInt(document.getElementById('cat3_piii5_self_a').value)+document.getElementById('phdda').value*10-phdda;
    		// if(document.getElementById('cat3_piii5_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii5_self_a').value=40;
    		// }
    		phdda=parseInt(document.getElementById('phdda').value)*6;
    		$("#partb_cat3_piii5_btn").trigger("click");

    	}
  	});
});

$(document).ready(function(){
	if(document.getElementById('mtechne'))
	{
		var mtechne=parseInt(document.getElementById('mtechne').value)*8;
	}	
	if(document.getElementById('mtechts'))
	{
		var mtechts=parseInt(document.getElementById('mtechts').value)*6;
	}	
	if(document.getElementById('mtechda'))
	{
		var mtechda=parseInt(document.getElementById('mtechda').value)*4;
	}	
    $("#mtechne").focusout(function(){
    	if(document.getElementById('mtechne').value.trim()!='' && !isNaN(document.getElementById('mtechne').value.trim()))
    	{
    		if(isNaN(mtechne))
    		{
    			mtechne=0;
    		}
    		document.getElementById('cat3_piii6_self_a').value=parseInt(document.getElementById('cat3_piii6_self_a').value)+document.getElementById('mtechne').value*4-mtechne;
    		// if(document.getElementById('cat3_piii6_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii6_self_a').value=40;
    		// }
    		mtechne=parseInt(document.getElementById('mtechne').value)*8;
    		$("#partb_cat3_piii6_btn").trigger("click");

    	}
  	});
  	$("#mtechts").focusout(function(){
    	if(document.getElementById('mtechts').value.trim()!='' && !isNaN(document.getElementById('mtechts').value.trim()))
    	{
    		if(isNaN(mtechts))
    		{
    			mtechts=0;
    		}
    		document.getElementById('cat3_piii6_self_a').value=parseInt(document.getElementById('cat3_piii6_self_a').value)+document.getElementById('mtechts').value*6-mtechts;
    		// if(document.getElementById('cat3_piii6_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii6_self_a').value=40;
    		// }
    		mtechts=parseInt(document.getElementById('mtechts').value)*6;
    		$("#partb_cat3_piii6_btn").trigger("click");

    	}
  	});
  	$("#mtechda").focusout(function(){
    	if(document.getElementById('mtechda').value.trim()!='' && !isNaN(document.getElementById('mtechda').value.trim()))
    	{
    		if(isNaN(mtechda))
    		{
    			mtechda=0;
    		}
    		document.getElementById('cat3_piii6_self_a').value=parseInt(document.getElementById('cat3_piii6_self_a').value)+document.getElementById('mtechda').value*8-mtechda;
    		// if(document.getElementById('cat3_piii6_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii6_self_a').value=40;
    		// }
    		mtechda=parseInt(document.getElementById('mtechda').value)*4;
    		$("#partb_cat3_piii6_btn").trigger("click");

    	}
  	});
});

$(document).ready(function(){
	if(document.getElementById('cat3_piii7_self_a') && document.getElementById('cat3_piii7_self_a').value=='')
	{
		document.getElementById('cat3_piii7_self_a').value==0;
	}
	if(document.getElementById('btechne'))
	{
		var btechne=parseInt(document.getElementById('btechne').value)*6;	
	}	
	if(document.getElementById('btechts'))
	{
		var btechts=parseInt(document.getElementById('btechts').value)*4;	
	}	
	if(document.getElementById('btechda'))
	{
		var btechda=parseInt(document.getElementById('btechda').value)*2;	
	}	

    $("#btechne").focusout(function(){
    	if(document.getElementById('btechne').value.trim()!='' && !isNaN(document.getElementById('btechne').value.trim()))
    	{
    		if(isNaN(btechne))
    		{
    			btechne=0;
    		}
    		document.getElementById('cat3_piii7_self_a').value=parseInt(document.getElementById('cat3_piii7_self_a').value)+document.getElementById('btechne').value*2-btechne;
    		// if(document.getElementById('cat3_piii7_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii7_self_a').value=40;
    		// }
    		btechne=parseInt(document.getElementById('btechne').value)*6;
    		$("#partb_cat3_piii7_btn").trigger("click");

    	}
  	});
  	$("#btechts").focusout(function(){
    	if(document.getElementById('btechts').value.trim()!='' && !isNaN(document.getElementById('btechts').value.trim()))
    	{
    		if(isNaN(btechts))
    		{
    			btechts=0;
    		}
    		document.getElementById('cat3_piii7_self_a').value=parseInt(document.getElementById('cat3_piii7_self_a').value)+document.getElementById('btechts').value*4-btechts;
    		// if(document.getElementById('cat3_piii7_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii7_self_a').value=40;
    		// }
    		btechts=parseInt(document.getElementById('btechts').value)*4;
    		$("#partb_cat3_piii7_btn").trigger("click");

    	}
  	});
  	$("#btechda").focusout(function(){
    	if(document.getElementById('btechda').value.trim()!='' && !isNaN(document.getElementById('btechda').value.trim()))
    	{
    		if(isNaN(btechda))
    		{
    			btechda=0;
    		}
    		document.getElementById('cat3_piii7_self_a').value=parseInt(document.getElementById('cat3_piii7_self_a').value)+document.getElementById('btechda').value*6-btechda;
    		// if(document.getElementById('cat3_piii7_self_a').value>40)
    		// {
    		// 	document.getElementById('cat3_piii7_self_a').value=40;
    		// }
    		btechda=parseInt(document.getElementById('btechda').value)*2;
    		$("#partb_cat3_piii7_btn").trigger("click");

    	}
  	});
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ SUMMARY COMMITTEE PART AUTOMATIC PERCENT CALCULATION ~~~~~~~~~~~~~~~~~~~~~~~~~~~


/*$(document).ready(function(){

	var pa=0;
	var pbc1=0;
	var pbc2=0;
	var pbc3=0;
	var pbc4=0;
	// alert(window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1));

	if(window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1)=="summary.php")
	{

		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~----> part A
		$('#current_academicA').click(function() {
	        pa+=1;
	    });

	    $('body').click(function(e) {
		    var t = $(e.target);
		    if(t.is('#current_academicA')==false) {	    	
		    	if(document.getElementById('current_academicA').value!='')
		    	{
		    		document.getElementById('pi_academicA').value=(document.getElementById('current_academicA').value/50*100).toFixed(2);
			       	// pa--;
			    }
		    } 
		});

		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~----> part B cat 1
		$('#current_academicBI').click(function() {
	        pbc1+=1;
	    });

	    $('body').click(function(e) {
		    var t = $(e.target);
		    if(t.is('#current_academicBI')==false) {	    	
		    	if(document.getElementById('current_academicBI').value!='')
		    	{
		    		document.getElementById('pi_academicBI').value=(document.getElementById('current_academicBI').value/100*100).toFixed(2);
			       	// pbc1--;
			    }
		    } 
		});

		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~----> part B cat 2
		$('#current_academicBII').click(function() {
	        pbc2+=1;
	    });

	    $('body').click(function(e) {
		    var t = $(e.target);
		    if(t.is('#current_academicBII')==false) {	    	
		    	if(document.getElementById('current_academicBII').value!='')
		    	{
		    		document.getElementById('pi_academicBII').value=(document.getElementById('current_academicBII').value/100*100).toFixed(2);
			       	// pbc2--;
			    }
		    } 
		});

		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~----> part B cat 3
		$('#current_academicBIII').click(function() {
	        pbc3+=1;
	    });

	    $('body').click(function(e) {
		    var t = $(e.target);
		    if(t.is('#current_academicBIII')==false) {	    	
		    	if(document.getElementById('current_academicBIII').value!='')
		    	{
		    		document.getElementById('pi_academicBIII').value=(document.getElementById('current_academicBIII').value/175*100).toFixed(2);
			       	// pbc3--;
			    }
		    } 
		});

		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~----> part B cat 4
		$('#current_academicBIV').click(function() {
	        pbc4+=1;
	    });

	    $('body').click(function(e) {
		    var t = $(e.target);
		    if(t.is('#current_academicBIV')==false) {	    	
		    	if(document.getElementById('current_academicBIV').value!='')
		    	{
		    		document.getElementById('pi_academicBIV').value=(document.getElementById('current_academicBIV').value/75*100).toFixed(2);
			       	// pbc4--;
			    }
		    } 
		});

		//~~~~~~~~~~~~~~~~~~~~~~~~~~```---> Average

		$('#last_academicBIV_avg_comm').click(function() {
			if( pa>0 && pbc1>0 && pbc2>0 && pbc3>0 && pbc4>0)
			{			
				document.getElementById('last_academicBIV_avg_comm').value = (parseInt(document.getElementById('pi_academicA').value) + parseInt(document.getElementById('pi_academicBI').value) + parseInt(document.getElementById('pi_academicBII').value) + parseInt(document.getElementById('pi_academicBIII').value) + parseInt(document.getElementById('pi_academicBIV').value)).toFixed(2);
				document.getElementById('pi_academicBIV_avg_comm').value=(document.getElementById('last_academicBIV_avg_comm').value/5).toFixed(2);
			}
	        
	    });
	}


});*/


function getSummaryData(){

	var yr=document.getElementById('year').value;
	var userId=document.getElementById('userId').value;

	// alert("yr="+yr);

	$.ajax
	({
		type: 'POST',
		url: 'get-summary-data.php',
		data:
		{
			year:yr,
			userId:userId
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
					    // alert(k+","+v);
					    document.getElementById(k).value=v;
					    $("#"+k).prop("disabled", true);					    
					    
					});
				}

				// $(".part-a-plus-btn").prop("onclick", false);
				$("#summary-comm-submit-form").remove();
			}
		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});
	
	return false;
}


$(document).ready(function(){

	$(".summary-recommend-form").submit(function(e){ 
		e.preventDefault();        
		// alert("here");

		var formData = new FormData(this);  		
		
		// var hodremarksA= document.getElementById("hodremarksA").value;
		// var hodremarksBcat1= document.getElementById("hodremarksBcat1").value;
		// var hodremarksBcat2= document.getElementById("hodremarksBcat2").value;
		// var hodremarksBcat3= document.getElementById("hodremarksBcat3").value;
		// var hodremarksBcat4= document.getElementById("hodremarksBcat4").value;
		// var hodremarksavgpi= document.getElementById("hodremarksavgpi").value;
		var hodremarkscum= document.getElementById("hodremarkscum").value;

		var year=document.getElementById("year").value;
		var userId=document.getElementById("userId").value;

		// formData.append("hodremarksA",hodremarksA);
		// formData.append("hodremarksBcat1",hodremarksBcat1);
		// formData.append("hodremarksBcat2",hodremarksBcat2);
		// formData.append("hodremarksBcat3",hodremarksBcat3);
		// formData.append("hodremarksBcat4",hodremarksBcat4);
		// formData.append("hodremarksavgpi",hodremarksavgpi);
		formData.append("hodremarkscum",hodremarkscum);

		formData.append("year",year);
		formData.append("userId",userId);

		$.ajax
		({
			type: 'POST',
			url: 'summary-recommend-sys.php',
			data:formData,
			//dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,                
			success: function (response) 
			{
				// alert(response);
				$(".summary-recommend-form").remove();
				if(parseInt(response)==1)
				{
					// $("hodrecommendationdiv").html();
					document.getElementById("hodrecommendationdiv").innerHTML=document.getElementById("hodrecommendationdiv").innerHTML+'<p id="recommendedforcasp" class="card-text"><img src="checked.png" style="width:32px"> This faculty member has been recommended for CAS by the HOD.</p><br>'
				}
				else if(parseInt(response)==0)
				{
					// $("hodrecommendationdiv").html('<p id="notrecommendedforcasp" class="card-text"><img src="error.png" style="width:32px">This faculty member has not been recommended for CAS by the HOD.</p>');
					document.getElementById("hodrecommendationdiv").innerHTML=document.getElementById("hodrecommendationdiv").innerHTML+'<p id="notrecommendedforcasp" class="card-text"><img src="error.png" style="width:32px"> This faculty member has not been recommended for CAS by the HOD.</p><br>';
				}
				else
				{
					alert("There was an error!");
				}
				
			},                
			error: function(xhr, status, error) {
				alert(xhr.responseText);
			}              
		});
		
		return false;
	})
});

$(document).ready(function(){

	$(".summary_comm_form").submit(function(e){ 
		e.preventDefault();    
		if(confirm("Do you want to submit the summary?")) 
		{
			// alert("here");			
			$("#summary-comm-submit-form").prop("disabled",true);
			$(".loader").toggle();

			var formData = new FormData(this);  		
			
			// var committeeremarksA= document.getElementById("committeeremarksA").value;
			// var committeeremarksBcat1= document.getElementById("committeeremarksBcat1").value;
			// var committeeremarksBcat2= document.getElementById("committeeremarksBcat2").value;
			// var committeeremarksBcat3= document.getElementById("committeeremarksBcat3").value;
			// var committeeremarksBcat4= document.getElementById("committeeremarksBcat4").value;
			// var committeeremarksavgpi= document.getElementById("committeeremarksavgpi").value;
			// var committeeremarkscum= document.getElementById("committeeremarkscum").value;

			var year=document.getElementById("year").value;
			var userId=document.getElementById("userId").value;

			// formData.append("committeeremarksA",committeeremarksA);
			// formData.append("committeeremarksBcat1",committeeremarksBcat1);
			// formData.append("committeeremarksBcat2",committeeremarksBcat2);
			// formData.append("committeeremarksBcat3",committeeremarksBcat3);
			// formData.append("committeeremarksBcat4",committeeremarksBcat4);
			// formData.append("committeeremarksavgpi",committeeremarksavgpi);
			// formData.append("committeeremarkscum",committeeremarkscum);

			formData.append("year",year);
			formData.append("userId",userId);

			$.ajax
			({
				type: 'POST',
				url: 'summary_comm_sys.php',
				data:formData,
				//dataType: 'text',  // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,                
				success: function (response) 
				{
					// alert(response);
					window.location.href=response.trim();
					// $(".summary_comm_sys.php").remove();
					// if(parseInt(response)==1)
					// {
					// 	// $("hodrecommendationdiv").html();
					// 	document.getElementById("hodrecommendationdiv").innerHTML='<p id="recommendedforcasp" class="card-text"><img src="checked.png" style="width:32px"> This faculty member has been recommended for CAS.</p><br>'
					// }
					// else if(parseInt(response)==0)
					// {
					// 	// $("hodrecommendationdiv").html('<p id="notrecommendedforcasp" class="card-text"><img src="error.png" style="width:32px">This faculty member has not been recommended for CAS by the HOD.</p>');
					// 	document.getElementById("hodrecommendationdiv").innerHTML='<p id="notrecommendedforcasp" class="card-text"><img src="error.png" style="width:32px"> This faculty member has not been recommended for CAS.</p><br>';
					// }
					// else
					// {
					// 	alert("There was an error!");
					// }
					
				},                
				error: function(xhr, status, error) {
					alert(xhr.responseText);
				}              
			});
			
			return false;
		}
	})
});


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ADMIN PANEL FILTERING SYSTEM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
var filter="0";
function adminfilters(filter)
{
	filter=filter.value;

	window.location.href="adminpanel.php?filter="+filter;

	// alert(filter);

	// $.ajax
	// ({
	// 	type: 'POST',
	// 	url: 'admin-panel-fetch-data.php',
	// 	data :{filter:filter},
	// 	// dataType: 'text',
	// 	// contentType: "application/json; charset=utf-8",
	// 	// dataType: "json",            
	// 	success: function (response) 
	// 	{
			
	// 		// response=JSON.parse(response);alert(response[1]);
	// 		// alert(response);

	// 		// document.getElementById("jhat").innerHTML=JSON.parse(response);

	// 		// $('#categories-div').toggle();

	// 		// document.getElementById('categories-div').innerHTML="hi"; 
	// 		if(response.trim()!="")
	// 		{ 
	// 			$('#admin-panel-tbody').html(response);
	// 		}
	// 		else
	// 		{
	// 			$('#admin-panel-tbody').html("<p>No Results</p>");
	// 		}
	// 	},                
	// 	error: function(xhr, status, error) {
	// 		// alert("hi");
	// 		// alert(xhr.responseText);
	// 		if(xhr.responseText.trim()!="</div>")
	// 		{
	// 			$('#admin-panel-tbody').html(xhr.responseText);
	// 		}
	// 		else
	// 		{
	// 			$('#admin-panel-tbody').html("<p>No Results</p>");
	// 		}
			

	// 		// alert(error);
	// 	}              
	// });

	// return false;
}