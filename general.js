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
		$(".part-a-minus-button").prop("onclick", true);
		$(".part-a-plus-btn").prop("onclick", true);

	});

});

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
							    	divtest.innerHTML = '<div class="row form-inline justify-content-center"><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="srno'+room+'" name="srno[]" value="" placeholder="Sr.no" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="course'+room+'" name="course[]" value="" placeholder="Name of summer school/course" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="days'+room+'" name="days[]" value="" placeholder="Duration(days)" disabled></div></div><div class="nopadding"><div class="form-group"><input type="text" class="dynamic-four" id="agency'+room+'" name="agency[]" value="" placeholder="Organising Agency" disabled></div></div><div class="input-group-btn"> <img class="part-a-minus-button" src="https://img.icons8.com/color/48/000000/minus.png" onclick="remove_education_fields('+ room +');" style="cursor:pointer"> </div></div><div class="clear"></div></div>';
							    	$("#parta_dynamic_form").prepend(divtest);

							    	// $(".part-a-minus-button").prop("onclick", false);//disabling the minus button onclicks

							    	// $("#"+divtest+" :input").prop("disabled", true);//disabling all inputs
									
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
				// $(".part-a-plus-btn").prop("onclick", false);
				
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
					    if(key!="part_b_cat_1_cto" && key!="part_b_cat_1_cte" && key!="part_b_cat_1_dar" && key!="part_b_cat_2_ha" && key!="part_b_cat_2_act" && key!="part_b_cat_2_exc" && key!="part_b_cat_2_c" && key!="part_b_cat_3_pp" && key!="part_b_cat_3_ppic" && key!="part_b_cat_3_ppinc" && key!="part_b_cat_3_bk" && key!="part_b_cat_3_res" && key!="part_b_cat_3_ores" && key!="part_b_cat_3_cres" && key!="part_b_cat_3_pip" && key!="part_b_cat_4_sem" && key!="part_b_cat_4_inv" && key!="part_b_cat_4_creds")
					    {
					    	// alert("here");
					    	// alert("k="+k+" v="+v);
					    	document.getElementById(key).value=v;
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
					    		var ctocourse=JSON.stringify(v[0]['ctocourse']).replace(/['"]+/g, '');
					    		var ctotyprlpt=JSON.stringify(v[1]['ctotyprlpt']).replace(/['"]+/g, '');
					    		var ctougpg=JSON.stringify(v[2]['ctougpg']).replace(/['"]+/g, '');
					    		var ctoclasssemester=JSON.stringify(v[3]['ctoclasssemester']).replace(/['"]+/g, '');
					    		var ctohrsweek=JSON.stringify(v[4]['ctohrsweek']).replace(/['"]+/g, '');
					    		var ctohrsengaged=JSON.stringify(v[5]['ctohrsengaged']).replace(/['"]+/g, '');
					    		var ctomaxhrs=JSON.stringify(v[6]['ctomaxhrs']).replace(/['"]+/g, '');
					    		var ctoc=JSON.stringify(v[7]['ctoc']).replace(/['"]+/g, '');
					    		i++;
					    		if(i!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr1'+i).html('<td id="ctosrno'+(i+1)+'">'+(i+1)+'</td><td><input type="text" name="ctocourse[]" id="ctocourse'+(i+1)+'" class="form-control" maxlength="200" value="'+ctocourse+'"/></td><td><input type="text" name="ctotyprlpt[]" id="ctotyprlpt'+(i+1)+'" class="form-control" maxlength="200" value="'+ctotyprlpt+'"/></td><td><input type="text" name="ctougpg[]" id="ctougpg'+(i+1)+'" class="form-control" maxlength="200" value="'+ctougpg+'"/></td><td><input type="text" name="ctoclasssemester[]" id="ctoclasssemester'+(i+1)+'" class="form-control" maxlength="200" value="'+ctoclasssemester+'"/></td><td><input type="number" name="ctohrsweek[]" id="ctohrsweek'+(i+1)+'" class="form-control" maxlength="200" value="'+ctohrsweek+'"/></td><td><input type="number" name="ctohrsengaged[]" id="ctohrsengaged'+(i+1)+'" class="form-control" maxlength="200" value="'+ctohrsengaged+'"/></td><td><input type="number" name="ctomaxhrs[]" id="ctomaxhrs'+(i+1)+'" class="form-control" maxlength="200" value="'+ctomaxhrs+'"/></td><td><input type="number" name="ctoc[]" id="ctoc'+(i+1)+'" class="form-control" maxlength="200" value="'+ctoc+'"/></td>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_1_cte")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ctecourse=JSON.stringify(v[0]['ctecourse']).replace(/['"]+/g, '');
					    		var ctetyprlpt=JSON.stringify(v[1]['ctetyprlpt']).replace(/['"]+/g, '');
					    		var cteugpg=JSON.stringify(v[2]['cteugpg']).replace(/['"]+/g, '');
					    		var cteclasssemester=JSON.stringify(v[3]['cteclasssemester']).replace(/['"]+/g, '');
					    		var ctehrsweek=JSON.stringify(v[4]['ctehrsweek']).replace(/['"]+/g, '');
					    		var ctehrsengaged=JSON.stringify(v[5]['ctehrsengaged']).replace(/['"]+/g, '');
					    		var ctemaxhrs=JSON.stringify(v[6]['ctemaxhrs']).replace(/['"]+/g, '');
					    		var ctec=JSON.stringify(v[7]['ctec']).replace(/['"]+/g, '');
					    		j++;
					    		if(j!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr2'+j).html('<td id="ctesrno'+(j+1)+'">'+(j+1)+'</td><td><input type="text" name="ctecourse[]" id="ctecourse'+(j+1)+'" class="form-control" maxlength="200" value="'+ctecourse+'"/></td><td><input type="text" name="ctetyprlpt[]" id="ctetyprlpt'+(j+1)+'" class="form-control" maxlength="200" value="'+ctetyprlpt+'"/></td><td><input type="text" name="cteugpg[]" id="cteugpg'+(j+1)+'" class="form-control" maxlength="200" value="'+cteugpg+'"/></td><td><input type="text" name="cteclasssemester[]" id="cteclasssemester'+(j+1)+'" class="form-control" maxlength="200" value="'+cteclasssemester+'"/></td><td><input type="number" name="ctehrsweek[]" id="ctehrsweek'+(j+1)+'" class="form-control" maxlength="200" value="'+ctehrsweek+'"/></td><td><input type="number" name="ctehrsengaged[]" id="ctehrsengaged'+(j+1)+'" class="form-control" maxlength="200" value="'+ctehrsengaged+'"/></td><td><input type="number" name="ctemaxhrs[]" id="ctemaxhrs'+(j+1)+'" class="form-control" maxlength="200" value="'+ctemaxhrs+'"/></td><td><input type="number" name="ctec[]" id="ctec'+(j+1)+'" class="form-control" maxlength="200" value="'+ctec+'"/></td>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_1_dar")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var dara=JSON.stringify(v[0]['dara']).replace(/['"]+/g, '');
					    		var darb=JSON.stringify(v[1]['darb']).replace(/['"]+/g, '');
					    		k++;
					    		if(k!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr3'+k).html('<td id="dar'+(k+1)+'">'+(k+1)+'</td><td><input type="text" name="dara[]" id="a'+(k+1)+'" class="form-control" maxlength="200" value="'+dara+'"/></td><td><input type="text" name="darb[]" id="b'+(k+1)+'" class="form-control" maxlength="200" value="'+darb+'"/></td>');

							       // $('#tab_logic3').append('<tr id="addr3'+(k+1)+'"></tr>');
							       $('#addr3'+k).after('<tr id="addr3'+(k+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('dar'+(k+1)).value=k+1;
					    			document.getElementById('a'+(k+1)).value=dara;
					    			document.getElementById('b'+(k+1)).value=darb;
					    		}

					    	}

					    	if(key=="part_b_cat_2_ha")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ha=JSON.stringify(v[0]['ha']).replace(/['"]+/g, '');
					    		var hb=JSON.stringify(v[1]['hb']).replace(/['"]+/g, '');
					    		l++;
					    		if(l!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr5'+l).html('<td id="hasr'+(l+1)+'">'+(l+1)+'</td><td><input type="text" name="ha[]" id="ha'+(l+1)+'" class="form-control" maxlength="200" value="'+ha+'"/></td><td><input type="text" name="hb[]" id="hb'+(l+1)+'" class="form-control" maxlength="200" value="'+hb+'"/></td>');

							      	// $('#tab_logic4').append('<tr id="addr5'+(l+1)+'"></tr>');
							      	$('#addr5'+l).after('<tr id="addr5'+(l+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('hasr'+(l+1)).value=l+1;
					    			document.getElementById('ha'+(l+1)).value=ha;
					    			document.getElementById('hb'+(l+1)).value=hb;
					    		}

					    	}

					    	if(key=="part_b_cat_2_act")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ea=JSON.stringify(v[0]['ea']).replace(/['"]+/g, '');
					    		var eb=JSON.stringify(v[1]['eb']).replace(/['"]+/g, '');
					    		m++;
					    		if(m!=0)
					    		{
					    			// alert("i not 0");

					    			$('#addr6'+m).html('<td id="actsr'+(m+1)+'">'+(m+1)+'</td><td><input type="text" name="ea[]" id="ea'+(m+1)+'" class="form-control" value="'+ea+'"/></td><td><input type="text" name="eb[]" id="eb'+(m+1)+'" class="form-control" value="'+eb+'"/></td>');

								    // $('#tab_logic5').append('<tr id="addr6'+(m+1)+'"></tr>');
								    $('#addr6'+m).after('<tr id="addr6'+(m+1)+'"></tr>');
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('actsr'+(m+1)).value=m+1;
					    			document.getElementById('ea'+(m+1)).value=ea;
					    			document.getElementById('eb'+(m+1)).value=eb;
					    		}

					    	}

					    	if(key=="part_b_cat_2_exc")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var eca=JSON.stringify(v[0]['eca']).replace(/['"]+/g, '');
					    		var ecb=JSON.stringify(v[1]['ecb']).replace(/['"]+/g, '');
					    		n++;
					    		if(n!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr7'+n).html('<td id="exca'+(n+1)+'">'+(n+1)+'</td><td><input type="text" name="eca[]" id="eca'+(n+1)+'" class="form-control" value="'+eca+'"/></td><td><input type="text" name="ecb[]" id="ecb'+(n+1)+'" class="form-control" value="'+ecb+'"/></td>');

							        // $('#tab_logic6').append('<tr id="addr7'+(n+1)+'"></tr>');
							        $('#addr7'+n).after('<tr id="addr7'+(n+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('exca'+(n+1)).value=n+1;
					    			document.getElementById('eca'+(n+1)).value=eca;
					    			document.getElementById('ecb'+(n+1)).value=ecb;
					    		}

					    	}

					    	if(key=="part_b_cat_2_c")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var ca=JSON.stringify(v[0]['ca']).replace(/['"]+/g, '');
					    		var cb=JSON.stringify(v[1]['cb']).replace(/['"]+/g, '');
					    		o++;
					    		if(o!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr8'+o).html('<td id="csr'+(o+1)+'">'+(o+1)+'</td><td><input type="text" name="ca[]" id="ca'+(o+1)+'" class="form-control" value="'+ca+'"/></td><td><input type="text" name="cb[]" id="cb'+(o+1)+'" class="form-control" value="'+cb+'"/></td>');

							      	// $('#tab_logic7').append('<tr id="addr8'+(o+1)+'"></tr>');
							      	$('#addr8'+o).after('<tr id="addr8'+(o+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert("here");
					    			document.getElementById('csr'+(o+1)).value=o+1;
					    			document.getElementById('ca'+(o+1)).value=ca;
					    			document.getElementById('cb'+(o+1)).value=cb;
					    		}

					    	}

					    	if(key=="part_b_cat_3_pp")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var pptitle=JSON.stringify(v[0]['pptitle']).replace(/['"]+/g, '');
					    		var ppnpr=JSON.stringify(v[1]['ppnpr']).replace(/['"]+/g, '');
					    		var ppisbn=JSON.stringify(v[2]['ppisbn']).replace(/['"]+/g, '');
					    		var ppif=JSON.stringify(v[3]['ppif']).replace(/['"]+/g, '');
					    		var customRadioInline1=JSON.stringify(v[4]['customRadioInline1']).replace(/['"]+/g, '');
					    		var ppnca=JSON.stringify(v[5]['ppnca']).replace(/['"]+/g, '');
					    		ppr++;
					    		if(ppr!=0)
					    		{
					    			// alert(ppr);
					    			$('#ppr'+ppr).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers In Peer Reviewed Journals (Max. PI=100)</b></p></div></div<div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitle[]" id="pptitle'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+pptitle+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of peer review Journals (not online journals)</label><input type="text" name="ppnpr[]" id="ppnpr'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppnpr+'"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbn[]" id="ppisbn'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppisbn+'"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppif[]" id="ppif'+ppr+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppif+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><label>Whether you are main author</label></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input yesradio" value="Yes"><label class="custom-control-label yes" for="customRadioInline1'+ppr+'">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppr+'" name="customRadioInline1['+ppr+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppr+'">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppnca[]" id="ppnca'+ppr+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppnca+'"/>	</div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><p>20 marks for peer review journal first author and 10 marks for second author</p></div></div>');

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
					    		var pptitleic=JSON.stringify(v[0]['pptitleic']).replace(/['"]+/g, '');
					    		var ppnpric=JSON.stringify(v[1]['ppnpric']).replace(/['"]+/g, '');
					    		var ppisbnic=JSON.stringify(v[2]['ppisbnic']).replace(/['"]+/g, '');
					    		var ppific=JSON.stringify(v[3]['ppific']).replace(/['"]+/g, '');
					    		var customRadioInline1ic=JSON.stringify(v[4]['customRadioInline1ic']).replace(/['"]+/g, '');
					    		var ppncaic=JSON.stringify(v[5]['ppncaic']).replace(/['"]+/g, '');
					    		ppric++;
					    		if(ppric!=0)
					    		{
					    			// alert(ppr);
					    			$('#ppric'+ppric).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference Abroad (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitleic[]" id="pptitleic"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+pptitleic+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held Abroad</label><input type="text" name="ppnpric[]" id="ppnpric"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppnpric+'"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbnic[]" id="ppisbnic"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppisbnic+'"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppific[]" id="ppific"'+ppric+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppific+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+ppric+'ic">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+ppric+'ic" name="customRadioInline1ic['+ppric+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+ppric+'ic">No</label></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div><div class="col-md-3 text-left"><div class="form-inline my-2"><label class="mr-sm-2">No. of co-author</label><input type="text" name="ppncaic[]" id="ppncaic"'+ppric+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppncaic+'"/></div></div><div class="col-md-1"><div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><p>15 marks for International conference for first author and 08 marks for second author</p></div></div>');

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
					    		var pptitleinc=JSON.stringify(v[0]['pptitleinc']).replace(/['"]+/g, '');
					    		var ppnprinc=JSON.stringify(v[1]['ppnprinc']).replace(/['"]+/g, '');
					    		var ppisbnpinc=JSON.stringify(v[2]['ppisbnpinc']).replace(/['"]+/g, '');
					    		var ppifinc=JSON.stringify(v[3]['ppifinc']).replace(/['"]+/g, '');
					    		var customRadioInline1inc=JSON.stringify(v[4]['customRadioInline1inc']).replace(/['"]+/g, '');
					    		var ppncainc=JSON.stringify(v[5]['ppncainc']).replace(/['"]+/g, '');
					    		pprinc++;
					    		if(pprinc!=0)
					    		{
					    			// alert(ppr);
					    			$('#pprinc'+pprinc).html('<br><div class="row"><div class="col-md-12 text-left"><p style="text-align: center"><b>Published Papers in International/National Conference in India (Max.PI=10)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Title with page no.</label><input type="text" name="pptitleinc[]" id="pptitleinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+pptitleinc+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-12 text-left"><div class="form-inline my-2"><label class="mr-sm-2">Name of International Conference held in India</label><input type="text" name="ppnprinc[]" id="ppnprinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppnprinc+'"/></div></div></div><div class="row"><div class="col-md-6 text-left"><div class="form-inline my-2"><label class="mr-sm-2">ISSN/ISBN No.</label><input type="text" name="ppisbnpinc[]" id="ppisbninc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppisbnpinc+'"/></div></div><div class="col-md-6 text-right"><div class="form-inline my-2"><label class="mr-sm-2">Impact factor</label><input type="text" name="ppifinc[]" id="ppifinc'+pprinc+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppifinc+'"/></div></div></div><hr style="border: 0.5px solid #c8c8c8"><div class="row"><div class="col-md-2 text-left"><p>Whether you are main author</p></div><div class="col-md-3 text-left"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline1'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input yesradio" value="Yes" checked><label class="custom-control-label yes" for="customRadioInline1'+pprinc+'inc">Yes</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2'+pprinc+'inc" name="customRadioInline1inc['+pprinc+']" class="custom-control-input noradio" value="No"><label class="custom-control-label no" for="customRadioInline2'+pprinc+'inc">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncainc[]" id="ppncainc'+pprinc+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppncainc+'"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <p>10 marks for International conference for first author and 05 marks for second author</p></div></div>');

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
					    		var pptitlebk=JSON.stringify(v[0]['pptitlebk']).replace(/['"]+/g, '');
					    		var ppnprbk=JSON.stringify(v[1]['ppnprbk']).replace(/['"]+/g, '');
					    		var ppisbnbk=JSON.stringify(v[2]['ppisbnbk']).replace(/['"]+/g, '');
					    		var ppdatebk=JSON.stringify(v[3]['ppdatebk']).replace(/['"]+/g, '');
					    		var ppifbk=JSON.stringify(v[4]['ppifbk']).replace(/['"]+/g, '');
					    		var customRadioInline1bk=JSON.stringify(v[5]['customRadioInline1bk']).replace(/['"]+/g, '');
					    		var ppncabk=JSON.stringify(v[6]['ppncabk']).replace(/['"]+/g, '');
					    		pprbk++;
					    		if(pprbk!=0)
					    		{
					    			// alert(ppnprbk);
					    			$('#pprbk'+pprbk).html('<div class="row"> <div class="col-md-12 text-left"> <br><p style="text-align: center"><b>Books/Articles/Chapters published in Books (Max.PI=15)</b></p></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Title with page no.</label> <input type="text" name="pptitlebk[]" id="pptitlebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+pptitlebk+'"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Publisher</label><input type="text" name="ppnprbk[]" id="ppnprbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppnprbk.trim()+'" /> </div></div></div><div class="row"> <div class="col-md-6 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">ISSN/ISBN No.</label> <input type="text" name="ppisbnbk[]" id="ppisbnbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppisbnbk+'"/> </div></div><div class="col-md-6 text-right"> <div class="form-inline my-2"> <label class="mr-sm-2">Date of Publication</label> <input type="date" name="ppdatebk[]" id="ppdatebk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppdatebk+'"/> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-5 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">Impact factor</label> <input type="text" name="ppifbk[]" id="ppifbk'+pprbk+'" class="form-control my-0 my-sm-0" maxlength="200" value="'+ppifbk+'"/> </div></div><div class="col-md-2 text-left"> <p>Whether you are main author</p></div><div class="col-md-3"> <div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline1'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input yesradio" value="Yes" checked> <label class="custom-control-label yes" for="customRadioInline1'+pprbk+'bk">Yes</label> </div><div class="custom-control custom-radio custom-control-inline"> <input type="radio" id="customRadioInline2'+pprbk+'bk" name="customRadioInline1bk['+pprbk+']" class="custom-control-input noradio" value="No"> <label class="custom-control-label no" for="customRadioInline2'+pprbk+'bk">No</label> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div><div class="col-md-3 text-left"> <div class="form-inline my-2"> <label class="mr-sm-2">No. of co-author</label> <input type="text" name="ppncabk[]" id="ppncabk'+pprbk+'" class="col-3 form-control my-0 my-sm-0" maxlength="200" value="'+ppncabk+'"/> </div></div><div class="col-md-1"> <div class="v1" style="border-left: 0.5px solid #c8c8c8;height: 70px;"> </div></div></div><hr style="border: 0.5px solid #c8c8c8"> <div class="row"> <div class="col-md-12 text-left"> <p>15 marks for first author and 08 marks for co-author</p></div></div>'
      									);

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
					    		var ta=JSON.stringify(v[0]['ta']).replace(/['"]+/g, '');
					    		var ab=JSON.stringify(v[1]['ab']).replace(/['"]+/g, '');
					    		var dc=JSON.stringify(v[2]['dc']).replace(/['"]+/g, '');
					    		var gd=JSON.stringify(v[3]['gd']).replace(/['"]+/g, '');
					    		p++;
					    		if(p!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr10'+p).html('<td id="res'+(p+1)+'">'+(p+1)+'</td><td><input type="text" name="ta[]" id="ta'+(p+1)+'" class="form-control" maxlength="200" value="'+ta+'"/></td><td><input type="text" name="ab[]" id="ab'+(p+1)+'" class="form-control" maxlength="200" value="'+ab+'"/></td><td><input type="date" name="dc[]" id="dc'+(p+1)+'" class="form-control" value="'+dc+'"/></td><td><input type="number" name="gd[]" id="gd'+(p+1)+'" class="form-control" value="'+gd+'"/></td></tr>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_3_ores")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var tta=JSON.stringify(v[0]['tta']).replace(/['"]+/g, '');
					    		var aab=JSON.stringify(v[1]['aab']).replace(/['"]+/g, '');
					    		var ddc=JSON.stringify(v[2]['ddc']).replace(/['"]+/g, '');
					    		var ggd=JSON.stringify(v[3]['ggd']).replace(/['"]+/g, '');
					    		q++;
					    		if(q!=0)
					    		{
					    			// alert("i not 0");
					    			$('#addr11'+q).html('<td id="ores'+(q+1)+'">'+(q+1)+'</td><td><input type="text" name="tta[]" id="tta'+(q+1)+'" class="form-control" maxlength="200" value="'+tta+'"/></td><td><input type="text" name="aab[]" id="aab'+(q+1)+'" class="form-control" maxlength="200" value="'+aab+'"/></td><td><input type="date" name="ddc[]" id="ddc'+(q+1)+'" class="form-control" value="'+ddc+'"/></td><td><input type="number" name="ggd[]" id="ggd'+(q+1)+'" class="form-control" value="'+ggd+'"/></td></tr>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_3_cres")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var tca=JSON.stringify(v[0]['tca']).replace(/['"]+/g, '');
					    		var acb=JSON.stringify(v[1]['acb']).replace(/['"]+/g, '');
					    		var dcc=JSON.stringify(v[2]['dcc']).replace(/['"]+/g, '');
					    		var gcd=JSON.stringify(v[3]['gcd']).replace(/['"]+/g, '');
					    		r++;
					    		if(r!=0)
					    		{
					    			$('#addr12'+r).html('<td id="cres'+(r+1)+'">'+(r+1)+'</td><td><input type="text" name="tca[]" id="tca'+(r+1)+'" class="form-control" maxlength="200" value="'+tca+'"/></td><td><input type="text" name="acb[]" id="acb'+(r+1)+'" class="form-control" maxlength="200" value="'+acb+'"/></td><td><input type="date" name="dcc[]" id="dcc'+(r+1)+'" class="form-control" value="'+dcc+'"/></td><td><input type="number" name="gcd[]" id="gcd'+(r+1)+'" class="form-control" value="'+gcd+'"/></td>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_3_pip")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var dpi=JSON.stringify(v[0]['dpi']).replace(/['"]+/g, '');
					    		var drf=JSON.stringify(v[1]['drf']).replace(/['"]+/g, '');
					    		s++;
					    		if(s!=0)
					    		{
					    			$('#addr13'+s).html('<td id="pip'+(s+1)+'">'+(s+1)+'</td><td><input type="text" name="dpi[]" id="dpi'+(s+1)+'" class="form-control" maxlength="200" value="'+dpi+'"/></td><td><input type="date" name="drf[]" id="drf'+(s+1)+'" class="form-control" value="'+drf+'"/></td>');

							      	// $('#tab_logic11').append('<tr id="addr13'+(s+1)+'"></tr>');
							      	$('#addr13'+s).after('<tr id="addr13'+(s+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(tta);
					    			document.getElementById('pip'+(s+1)).value=s+1;
					    			document.getElementById('dpi'+(s+1)).value=dpi;
					    			document.getElementById('drf'+(s+1)).value=drf;
					    		}

					    	}

					    	if(key=="part_b_cat_4_sem")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var cativ_dp=JSON.stringify(v[0]['cativ_dp']).replace(/['"]+/g, '');
					    		var cativ_datee=JSON.stringify(v[1]['cativ_datee']).replace(/['"]+/g, '');
					    		var cativ_o=JSON.stringify(v[2]['cativ_o']).replace(/['"]+/g, '');
					    		t++;
					    		if(t!=0)
					    		{
					    			$('#addr14'+t).html('<td id="sem'+(t+1)+'">'+(t+1)+'</td><td><input type="text" name="cativ_dp[]" id="cativ_dp'+(t+1)+'" class="form-control" maxlength="200" value="'+cativ_dp+'"/></td><td><input type="date" name="cativ_datee[]" id="cativ_datee'+(t+1)+'" class="form-control" value="'+cativ_datee+'"/></td><td><input type="text" name="cativ-o[]" id="cativ-o'+(t+1)+'" class="form-control" maxlength="200" value="'+cativ_o+'"/></td>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_4_inv")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var cativ1_dp=JSON.stringify(v[0]['cativ1_dp']).replace(/['"]+/g, '');
					    		var cativ1_datee=JSON.stringify(v[1]['cativ1_datee']).replace(/['"]+/g, '');
					    		var cativ1_o=JSON.stringify(v[2]['cativ1_o']).replace(/['"]+/g, '');
					    		u++;
					    		if(u!=0)
					    		{
					    			$('#addr15'+u).html('<td id="inv'+(u+1)+'">'+(u+1)+'</td><td><input type="text" name="cativ1_dp[]" id="cativ1_dp'+(u+1)+'" class="form-control" maxlength="200" value="'+cativ1_dp+'"/></td><td><input type="date" name="cativ1_datee[]" id="cativ1_datee'+(u+1)+'" class="form-control" value="'+cativ1_datee+'"/></td><td><input type="text" name="cativ1_o[]" id="cativ1_o'+(u+1)+'" class="form-control" maxlength="200" value="'+cativ1_o+'"/></td>');

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
					    		}

					    	}

					    	if(key=="part_b_cat_4_creds")
					    	{

					    		// alert("ineer");
					    		// alert(JSON.stringify(v[0]['ctecourse']));
					    		//replace applied to remove double quotes
					    		var cativ2_dp=JSON.stringify(v[0]['cativ2_dp']).replace(/['"]+/g, '');
					    		var cativ2=JSON.stringify(v[1]['cativ2']).replace(/['"]+/g, '');
					    		v1++;
					    		if(v1!=0)
					    		{
					    			$('#addr16'+v1).html('<td id="creds'+(v1+1)+'">'+(v1+1)+'</td><td><input type="text" name="cativ2_dp[]" id="cativ2_dp'+(v1+1)+'" class="form-control" maxlength="200" value="'+cativ2_dp+'"/></td><td><input type="text" name="cativ2[]" id="cativ2'+(v1+1)+'" class="form-control" maxlength="200" value="'+cativ2+'"/></td>');

							        // $('#tab_logic14').append('<tr id="addr16'+(v+1)+'"></tr>');
							        $('#addr16'+v1).after('<tr id="addr16'+(v1+1)+'"></tr>');
					    			
					    		}
					    		else
					    		{
					    			// alert(cativ2_dp);
					    			document.getElementById('creds'+(v1+1)).value=v1+1;
					    			document.getElementById('cativ2_dp'+(v1+1)).value=cativ2_dp;
					    			document.getElementById('cativ2'+(v1+1)).value=cativ2;
					    		}

					    	}


					    	
					    }
					    
					});
				}

				// alert(w);
				document.getElementById("i").value=i+1;
				document.getElementById("j").value=j+1;
				document.getElementById("k").value=k+1;
				document.getElementById("l").value=l+1;
				document.getElementById("m").value=m+1;
				document.getElementById("n").value=n+1;
				document.getElementById("o").value=o+1;
				document.getElementById("p").value=p+1;
				document.getElementById("q").value=q+1;
				document.getElementById("r").value=r+1;
				document.getElementById("s").value=s+1;
				document.getElementById("t").value=t+1;
				document.getElementById("u").value=u+1;
				document.getElementById("v1").value=v1+1;
				document.getElementById("w").value=w+1;
				document.getElementById("x").value=x+1;
				document.getElementById("y").value=y+1;
				document.getElementById("z").value=z+1;
				document.getElementById("ppr").value=ppr+1;
				document.getElementById("ppric").value=ppric+1;
				document.getElementById("pprinc").value=pprinc+1;
				document.getElementById("pprbk").value=pprbk+1;

				$("#part-b-form :input").prop("disabled", true);//disabling all inputs
				$(':button').prop('disabled', false);//but enabling all buttons because the above line disables all buttons also
				$(".btn-default").prop('disabled', true);
				$('#sfrb_submit').prop('disabled', false);
				enableinputs();
			}
		},                
		error: function(xhr, status, error) {
			alert(xhr.responseText);
		}              
	});
	
	return false;
}
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
	// alert(userId);
	// alert(viewerId);
	// alert(hod);
	// alert(committee);

	if(userId==viewerId)
	{
		enableself();
	}
	if(hod==1)
	{
		enablehod();
	}
	if(committee==1)
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
	$(".hodapp:input").prop("disabled", false);
}

function enablecomm()
{
	// alert("here");
	$(".commapp:input").prop("disabled", false);
}

//******************************************************PartA-Appraisals************************************************

$(document).ready(function(){
    $('body').on('click','#parta_gpi_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var parta_gpi_self_a = document.getElementById('parta_gpi_self_a').value;

	    var parta_gpi_hod_a =-1;
	    if($("#parta_gpi_hod_a").length)
	    {
	     	parta_gpi_hod_a=document.getElementById('parta_gpi_hod_a').value;
	    }
	   	var parta_gpi_committee_a=-1;
	   	if($("#parta_gpi_committee_a").length)
	    {
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

	    var parta_gpi_pi_hod_a =-1;
	    if($("#parta_gpi_pi_hod_a").length)
	    {
	     	parta_gpi_pi_hod_a=document.getElementById('parta_gpi_pi_hod_a').value;
	    }
	   	var parta_gpi_pi_committee_a=-1;
	   	if($("#parta_gpi_pi_committee_a").length)
	    {
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
    $('body').on('click','#partb_cat1_pi1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat1_pi1_self_a = document.getElementById('cat1_pi1_self_a').value;

	    var cat1_pi1_hod_a =-1;
	    if($("#cat1_pi1_hod_a").length)
	    {
	     	cat1_pi1_hod_a=document.getElementById('cat1_pi1_hod_a').value;
	    }
	   	var cat1_pi1_committee_a=-1;
	   	if($("#cat1_pi1_committee_a").length)
	    {
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

	    var cat1_pi2_hod_a =-1;
	    if($("#cat1_pi2_hod_a").length)
	    {
	     	cat1_pi2_hod_a=document.getElementById('cat1_pi2_hod_a').value;
	    }
	   	var cat1_pi2_committee_a=-1;
	   	if($("#cat1_pi2_committee_a").length)
	    {
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

	    var cat1_pi3_hod_a =-1;
	    if($("#cat1_pi3_hod_a").length)
	    {
	     	cat1_pi3_hod_a=document.getElementById('cat1_pi3_hod_a').value;
	    }
	   	var cat1_pi3_committee_a=-1;
	   	if($("#cat1_pi3_committee_a").length)
	    {
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

	    var cat1_pi4_hod_a =-1;
	    if($("#cat1_pi4_hod_a").length)
	    {
	     	cat1_pi4_hod_a=document.getElementById('cat1_pi4_hod_a').value;
	    }
	   	var cat1_pi4_committee_a=-1;
	   	if($("#cat1_pi4_committee_a").length)
	    {
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

	    var cat1_pitotal_hod_a=-1;
	    if($("#cat1_pitotal_hod_a").length)
	    {
	     	cat1_pitotal_hod_a=document.getElementById('cat1_pitotal_hod_a').value;
	    }
	   	var cat1_pitotal_committee_a=-1;
	   	if($("#cat1_pitotal_committee_a").length)
	    {
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
    $('body').on('click','#partb_cat2_pii1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat2_pii1_self_a = document.getElementById('cat2_pii1_self_a').value;

	    var cat2_pii1_hod_a=-1;
	    if($("#cat2_pii1_hod_a").length)
	    {
	     	cat2_pii1_hod_a=document.getElementById('cat2_pii1_hod_a').value;
	    }
	   	var cat2_pii1_committee_a=-1;
	   	if($("#cat2_pii1_committee_a").length)
	    {
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

	    var cat2_pii2_hod_a=-1;
	    if($("#cat2_pii2_hod_a").length)
	    {
	     	cat2_pii2_hod_a=document.getElementById('cat2_pii2_hod_a').value;
	    }
	   	var cat2_pii2_committee_a=-1;
	   	if($("#cat2_pii2_committee_a").length)
	    {
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

	    var cat2_pii3_hod_a=-1;
	    if($("#cat2_pii3_hod_a").length)
	    {
	     	cat2_pii3_hod_a=document.getElementById('cat2_pii3_hod_a').value;
	    }
	   	var cat2_pii3_committee_a=-1;
	   	if($("#cat2_pii3_committee_a").length)
	    {
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

	    var cat2_pii4_hod_a=-1;
	    if($("#cat2_pii4_hod_a").length)
	    {
	     	cat2_pii4_hod_a=document.getElementById('cat2_pii4_hod_a').value;
	    }
	   	var cat2_pii4_committee_a=-1;
	   	if($("#cat2_pii4_committee_a").length)
	    {
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

	    var cat2_piitotal_hod_a=-1;
	    if($("#cat2_piitotal_hod_a").length)
	    {
	     	cat2_piitotal_hod_a=document.getElementById('cat2_piitotal_hod_a').value;
	    }
	   	var cat2_piitotal_committee_a=-1;
	   	if($("#cat2_piitotal_committee_a").length)
	    {
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
    $('body').on('click','#partb_cat3_piii1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat3_piii1_self_a = document.getElementById('cat3_piii1_self_a').value;

	    var cat3_piii1_hod_a=-1;
	    if($("#cat3_piii1_hod_a").length)
	    {
	     	cat3_piii1_hod_a=document.getElementById('cat3_piii1_hod_a').value;
	    }
	   	var cat3_piii1_committee_a=-1;
	   	if($("#cat3_piii1_committee_a").length)
	    {
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

	    var cat3_piii2_hod_a=-1;
	    if($("#cat3_piii2_hod_a").length)
	    {
	     	cat3_piii2_hod_a=document.getElementById('cat3_piii2_hod_a').value;
	    }
	   	var cat3_piii2_committee_a=-1;
	   	if($("#cat3_piii2_committee_a").length)
	    {
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

	    var cat3_piii3_hod_a=-1;
	    if($("#cat3_piii3_hod_a").length)
	    {
	     	cat3_piii3_hod_a=document.getElementById('cat3_piii3_hod_a').value;
	    }
	   	var cat3_piii3_committee_a=-1;
	   	if($("#cat3_piii3_committee_a").length)
	    {
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

	    var cat3_piii4_hod_a=-1;
	    if($("#cat3_piii4_hod_a").length)
	    {
	     	cat3_piii4_hod_a=document.getElementById('cat3_piii4_hod_a').value;
	    }
	   	var cat3_piii4_committee_a=-1;
	   	if($("#cat3_piii4_committee_a").length)
	    {
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

	    var cat3_piii5_hod_a=-1;
	    if($("#cat3_piii5_hod_a").length)
	    {
	     	cat3_piii5_hod_a=document.getElementById('cat3_piii5_hod_a').value;
	    }
	   	var cat3_piii5_committee_a=-1;
	   	if($("#cat3_piii5_committee_a").length)
	    {
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

	    var cat3_piii6_hod_a=-1;
	    if($("#cat3_piii6_hod_a").length)
	    {
	     	cat3_piii6_hod_a=document.getElementById('cat3_piii6_hod_a').value;
	    }
	   	var cat3_piii6_committee_a=-1;
	   	if($("#cat3_piii6_committee_a").length)
	    {
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

	    var cat3_piii7_hod_a=-1;
	    if($("#cat3_piii7_hod_a").length)
	    {
	     	cat3_piii7_hod_a=document.getElementById('cat3_piii7_hod_a').value;
	    }
	   	var cat3_piii7_committee_a=-1;
	   	if($("#cat3_piii7_committee_a").length)
	    {
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

	    var cat3_piii8_hod_a=-1;
	    if($("#cat3_piii8_hod_a").length)
	    {
	     	cat3_piii8_hod_a=document.getElementById('cat3_piii8_hod_a').value;
	    }
	   	var cat3_piii8_committee_a=-1;
	   	if($("#cat3_piii8_committee_a").length)
	    {
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

	    var cat3_piii9_hod_a=-1;
	    if($("#cat3_piii9_hod_a").length)
	    {
	     	cat3_piii9_hod_a=document.getElementById('cat3_piii9_hod_a').value;
	    }
	   	var cat3_piii9_committee_a=-1;
	   	if($("#cat3_piii9_committee_a").length)
	    {
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

	    var cat3_piii10_hod_a=-1;
	    if($("#cat3_piii10_hod_a").length)
	    {
	     	cat3_piii10_hod_a=document.getElementById('cat3_piii10_hod_a').value;
	    }
	   	var cat3_piii10_committee_a=-1;
	   	if($("#cat3_piii10_committee_a").length)
	    {
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

	    var cat3_piiitotal_hod_a=-1;
	    if($("#cat3_piiitotal_hod_a").length)
	    {
	     	cat3_piiitotal_hod_a=document.getElementById('cat3_piiitotal_hod_a').value;
	    }
	   	var cat3_piiitotal_committee_a=-1;
	   	if($("#cat3_piiitotal_committee_a").length)
	    {
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
    $('body').on('click','#partb_cat4_piv1_btn',function(e){
    	e.preventDefault();
        // alert("as");
        //alert(sessionId);
        var cat4_piv1_self_a = document.getElementById('cat4_piv1_self_a').value;

	    var cat4_piv1_hod_a=-1;
	    if($("#cat4_piv1_hod_a").length)
	    {
	     	cat4_piv1_hod_a=document.getElementById('cat4_piv1_hod_a').value;
	    }
	   	var cat4_piv1_committee_a=-1;
	   	if($("#cat4_piv1_committee_a").length)
	    {
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

	    var cat4_piv2_hod_a=-1;
	    if($("#cat4_piv2_hod_a").length)
	    {
	     	cat4_piv2_hod_a=document.getElementById('cat4_piv2_hod_a').value;
	    }
	   	var cat4_piv2_committee_a=-1;
	   	if($("#cat4_piv2_committee_a").length)
	    {
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

	    var cat4_piv3_hod_a=-1;
	    if($("#cat4_piv3_hod_a").length)
	    {
	     	cat4_piv3_hod_a=document.getElementById('cat4_piv3_hod_a').value;
	    }
	   	var cat4_piv3_committee_a=-1;
	   	if($("#cat4_piv3_committee_a").length)
	    {
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

	    var cat4_pivtotal_hod_a=-1;
	    if($("#cat4_pivtotal_hod_a").length)
	    {
	     	cat4_pivtotal_hod_a=document.getElementById('cat4_pivtotal_hod_a').value;
	    }
	   	var cat4_pivtotal_committee_a=-1;
	   	if($("#cat4_pivtotal_committee_a").length)
	    {
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