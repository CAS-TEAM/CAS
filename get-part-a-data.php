<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_POST['userId']);

$year=mysqli_real_escape_string($conn,$_POST['year']);
$cyear=$year;//current year
if($year!=2017)
{
	// if its 2017, then load 2017's data itself since our forms begin from 2017
	$year=$year-1;
}

$sqlx="SELECT faculty_name, email, date_of_joining, ecode, mobileno FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$faculty_name=$rowx['faculty_name'];
$email=$rowx['email'];
$dojkjsce=$rowx['date_of_joining'];
$ecode=$rowx['ecode'];
$mobileno=$rowx['mobileno'];

//checking if user has already begun filling the form
// checking if there is an entry in the database for the current year
$sql="SELECT id FROM part_a_table WHERE year='$cyear' AND faculty_id='$userId'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	if($cyear==2017)
	{
		// echo 'not begun';
		$data=array();

		$data[]=array('notalreadybegun'=>0); //this field will tell general.js to not set the already begun variable in partA.php 
		
		$data[]=array('faculty_name'=>$faculty_name);

		$data[]=array('ecode'=>$ecode);
		
		$data[]=array('email'=>$email);		

		$data[]=array('mobileno'=>$mobileno);
		$data[]=array('dojkjsce'=>$dojkjsce);

		$jsonData=json_encode($data);

		echo $jsonData;
	}
	else
	{	

		$sql="SELECT * FROM part_a_table WHERE year='$year' AND faculty_id='$userId'";
		$result=mysqli_query($conn,$sql);
		
		$row=mysqli_fetch_assoc($result);

		$data=array();

		$data[]=array('notalreadybegun'=>0); //this field will tell general.js to not set the already begun variable in partA.php 

		// if($row['faculty_name']!='')
		// {
		// 	$faculty_name=$row['faculty_name'];
		// 	$data[]=array('faculty_name'=>$faculty_name);
		// }
		
		$data[]=array('faculty_name'=>$faculty_name);

		// if($row['ecode']!='')
		// {
		// 	$ecode=$row['ecode'];
		// 	$data[]=array('ecode'=>$ecode);
		// }

		$data[]=array('ecode'=>$ecode);

		if($row['praddr']!='')
		{
			$praddr=$row['praddr'];
			$data[]=array('praddr'=>$praddr);
		}
			
		if($row['peaddr']!='')
		{
			$peaddr=$row['peaddr'];
			$data[]=array('peaddr'=>$peaddr);
		}

		// if($row['email']!='')
		// {
		// 	$email=$row['email'];
		// 	$data[]=array('email'=>$email);
		// }
		
		$data[]=array('email'=>$email);		

		// if($row['mobileno']!='')
		// {
		// 	$mobileno=$row['mobileno'];
		// 	$data[]=array('mobileno'=>$mobileno);
		// }

		$data[]=array('mobileno'=>$mobileno);
		
		if($row['highq']!='')
		{
			$highq=$row['highq'];
			$data[]=array('highq'=>$highq);
		}

		if($row['dob']!='')
		{
			$dob=$row['dob'];
			$data[]=array('dob'=>$dob);
		}
		
		if($row['desi']!='')
		{
			$desi=$row['desi'];
			$data[]=array('desi'=>$desi);
		}

		if($row['nameo']!='')
		{
			$nameo=$row['nameo'];
			$data[]=array('nameo'=>$nameo);
		}

		if($row['pdesi']!='')
		{
			$pdesi=$row['pdesi'];
			$data[]=array('pdesi'=>$pdesi);
		}

		// if($row['dojkjsce']!='')
		// {
		// 	$dojkjsce=$row['dojkjsce'];
		// 	$data[]=array('dojkjsce'=>$dojkjsce);
		// }	

		$data[]=array('dojkjsce'=>$dojkjsce);

		if($row['pscale']!='')
		{
			$pscale=$row['pscale'];
			$data[]=array('pscale'=>$pscale);
		}	

		if($row['pbg']!='')
		{
			$pbg=$row['pbg'];
			$data[]=array('pbg'=>$pbg);
		}

		if($row['lastdesisel']!='')
		{
			$lastdesisel=$row['lastdesisel'];
			$data[]=array('lastdesisel'=>$lastdesisel);
		}

		if($row['promowef']!='')
		{
			$promowef=$row['promowef'];
			$data[]=array('promowef'=>$promowef);
		}

		if($row['cscales']!='')
		{
			$cscales=$row['cscales'];
			$data[]=array('cscales'=>$cscales);
		}

		if($row['cbasics']!='')
		{
			$cbasics=$row['cbasics'];
			$data[]=array('cbasics'=>$cbasics);
		}

		if($row['lastdesicas']!='')
		{
			$lastdesicas=$row['lastdesicas'];
			$data[]=array('lastdesicas'=>$lastdesicas);
		}

		if($row['promowefcas']!='')
		{
			$promowefcas=$row['promowefcas'];
			$data[]=array('promowefcas'=>$promowefcas);
		}

		if($row['cscalecas']!='')
		{
			$cscalecas=$row['cscalecas'];
			$data[]=array('cscalecas'=>$cscalecas);
		}

		if($row['cbasiccas']!='')
		{
			$cbasiccas=$row['cbasiccas'];
			$data[]=array('cbasiccas'=>$cbasiccas);
		}

		if($row['customRadioInline1']!='')
		{
			$customRadioInline1=$row['customRadioInline1'];
			$data[]=array('customRadioInline1'=>$customRadioInline1);
		}	

		if($row['nameofdegree']!='')
		{
			$nameofdegree=$row['nameofdegree'];
			$data[]=array('nameofdegree'=>$nameofdegree);
		}

		if($row['institute']!='')
		{
			$institute=$row['institute'];
			$data[]=array('institute'=>$institute);
		}

		$formId=$row['id'];

		$sql1="SELECT * FROM part_a_doc WHERE formId='$formId' ORDER BY srno ASC";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>1)
		{
			$data_doc=array();
			while($row1=mysqli_fetch_assoc($result1))
			{
				$data_doc[]=array('srno'=>$row1['srno']);
				$data_doc[]=array('course'=>$row1['course']);
				$data_doc[]=array('days'=>$row1['days']);
				$data_doc[]=array('agency'=>$row1['agency']);
				$data_doc[]=array('file'=>$row1['file']);

				$data[]=array('parta_dynamic_form'=>$data_doc);

				unset($data_doc); 
				$data_doc = array();
			}
		}
		

		$jsonData=json_encode($data);

		echo $jsonData;

	}
	
}
else
{
	$sql="SELECT * FROM part_a_table WHERE year='$cyear' AND faculty_id='$userId'";
	$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_assoc($result);

	$data=array();

	// if($row['faculty_name']!='')
	// {
	// 	$faculty_name=$row['faculty_name'];
	// 	$data[]=array('faculty_name'=>$faculty_name);
	// }

	$data[]=array('faculty_name'=>$faculty_name);

	// if($row['ecode']!='')
	// {
	// 	$ecode=$row['ecode'];
	// 	$data[]=array('ecode'=>$ecode);
	// }

	$data[]=array('ecode'=>$ecode);

	if($row['praddr']!='')
	{
		$praddr=$row['praddr'];
		$data[]=array('praddr'=>$praddr);
	}
		
	if($row['peaddr']!='')
	{
		$peaddr=$row['peaddr'];
		$data[]=array('peaddr'=>$peaddr);
	}

	// if($row['email']!='')
	// {
	// 	$email=$row['email'];
	// 	$data[]=array('email'=>$email);
	// }

	$data[]=array('email'=>$email);

	// if($row['mobileno']!='')
	// {
	// 	$mobileno=$row['mobileno'];
	// 	$data[]=array('mobileno'=>$mobileno);
	// }

	$data[]=array('mobileno'=>$mobileno);
	
	if($row['highq']!='')
	{
		$highq=$row['highq'];
		$data[]=array('highq'=>$highq);
	}

	if($row['dob']!='')
	{
		$dob=$row['dob'];
		$data[]=array('dob'=>$dob);
	}
	
	if($row['desi']!='')
	{
		$desi=$row['desi'];
		$data[]=array('desi'=>$desi);
	}

	if($row['nameo']!='')
	{
		$nameo=$row['nameo'];
		$data[]=array('nameo'=>$nameo);
	}

	if($row['pdesi']!='')
	{
		$pdesi=$row['pdesi'];
		$data[]=array('pdesi'=>$pdesi);
	}

	// if($row['dojkjsce']!='')
	// {
	// 	$dojkjsce=$row['dojkjsce'];
	// 	$data[]=array('dojkjsce'=>$dojkjsce);
	// }	

	$data[]=array('dojkjsce'=>$dojkjsce);

	if($row['pscale']!='')
	{
		$pscale=$row['pscale'];
		$data[]=array('pscale'=>$pscale);
	}	

	if($row['pbg']!='')
	{
		$pbg=$row['pbg'];
		$data[]=array('pbg'=>$pbg);
	}

	if($row['lastdesisel']!='')
	{
		$lastdesisel=$row['lastdesisel'];
		$data[]=array('lastdesisel'=>$lastdesisel);
	}

	if($row['promowef']!='')
	{
		$promowef=$row['promowef'];
		$data[]=array('promowef'=>$promowef);
	}

	if($row['cscales']!='')
	{
		$cscales=$row['cscales'];
		$data[]=array('cscales'=>$cscales);
	}

	if($row['cbasics']!='')
	{
		$cbasics=$row['cbasics'];
		$data[]=array('cbasics'=>$cbasics);
	}

	if($row['lastdesicas']!='')
	{
		$lastdesicas=$row['lastdesicas'];
		$data[]=array('lastdesicas'=>$lastdesicas);
	}

	if($row['promowefcas']!='')
	{
		$promowefcas=$row['promowefcas'];
		$data[]=array('promowefcas'=>$promowefcas);
	}

	if($row['cscalecas']!='')
	{
		$cscalecas=$row['cscalecas'];
		$data[]=array('cscalecas'=>$cscalecas);
	}

	if($row['cbasiccas']!='')
	{
		$cbasiccas=$row['cbasiccas'];
		$data[]=array('cbasiccas'=>$cbasiccas);
	}

	if($row['customRadioInline1']!='')
	{
		$customRadioInline1=$row['customRadioInline1'];
		$data[]=array('customRadioInline1'=>$customRadioInline1);
	}	

	if($row['nameofdegree']!='')
	{
		$nameofdegree=$row['nameofdegree'];
		$data[]=array('nameofdegree'=>$nameofdegree);
	}

	if($row['institute']!='')
	{
		$institute=$row['institute'];
		$data[]=array('institute'=>$institute);
	}

	$formId=$row['id'];

	$sql1="SELECT * FROM part_a_doc WHERE formId='$formId' ORDER BY srno ASC";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('srno'=>$row1['srno']);
			$data_doc[]=array('course'=>$row1['course']);
			$data_doc[]=array('days'=>$row1['days']);
			$data_doc[]=array('agency'=>$row1['agency']);
			$data_doc[]=array('file'=>$row1['file']);

			$data[]=array('parta_dynamic_form'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}
	

	$jsonData=json_encode($data);

	echo $jsonData;

}