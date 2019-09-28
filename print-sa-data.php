<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
/*else if(!isset($_GET['id']) || !isset($_GET['year']))
{
	header("LOCATION: userprofile.php");
}*/
else
{

include 'dbh.php';

$year=mysqli_real_escape_string($conn,$_GET['year']);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="self-appraisals-data-'.$year.'.csv"');

$data[0] = array('Sr. No.', 'Name', 'Emp. No.', 'Email', 'Mobile No.', 'Details of Service in KJSCE: DOJ KJSCE', 'Present Address', 'Permanent Address', 'Highest Qualification', 'Date of Birth', 'Details of Last Service: Designation', 'Details of Last Service: Name of Organisation', 'Details of Service in KJSCE: Present Designation', 'Details of Service in KJSCE: Present Scale', 'Details of Service in KJSCE: Present basic and grade pay', 'Details of last promotion by selection: Designation', 'Details of last promotion by selection: Promotion w.e.f', 'Details of last promotion by selection: Changed Scale', 'Details of last promotion by selection: Changed basic and grade pay', 'Details of last promotion through CAS: Designation', 'Details of last promotion through CAS: Promotion w.e.f', 'Details of last promotion through CAS: Changed Scale', 'Details of last promotion through CAS: Changed basic and grade pay', 'Whether acquired any fresh educational qualification during said academic year?' ,'If yes, details of qualification: Name of Degree', 'If yes, details of qualification: Institute', 'Details of course, etc: Name of Summer School', 'Details of course, etc: Duration(Days)', 'Details of course, etc: Organising Agency', 'Details of course, etc: Role Played', 'Courses Taught: Odd Semester Course', 'Courses Taught: Odd Semester Type', 'Courses Taught: Odd Semester UG/PG', 'Courses Taught: Odd Semester Class/Semester', 'Courses Taught: Odd Semester Hrs./Week', 'Courses Taught: Odd Semester Total no. of hours engaged (A)', 'Courses Taught: Odd Semester Max Hours (B)', 'Courses Taught: Odd Semester C=(A/B)*100', 'Courses Taught: Odd Semester Student Feedback for Theory', 'Courses Taught: Even Semester Course', 'Courses Taught: Even Semester Type', 'Courses Taught: Even Semester UG/PG', 'Courses Taught: Even Semester Class/Semester', 'Courses Taught: Even Semester Hrs./Week', 'Courses Taught: Even Semester Total no. of hours engaged (A)', 'Courses Taught: Even Semester Max Hours (B)', 'Courses Taught: Even Semester C=(A/B)*100', 'Courses Taught: Even Semester Student Feedback for Theory', 'Average of C', 'Total of C', 'Odd Semester: Description of Duties Assigned: Paper Setting Test 1');
// print_r($data);
// $part_a_doc_count=0;
// $part_a_doc_max=0;

// $sqlm="SELECT id FROM part_a_table WHERE year='$year'";
// $resultm=mysqli_query($conn, $sqlm);
// $rowm=mysqli_fetch_row($resultm);
// $partAformId=$rowm[0];
// $sqlm="SELECT COUNT(id) FROM part_a_doc WHERE formId='$partAformId'";
// $resultm=mysqli_query($conn, $sqlm);
// $rowm=mysqli_fetch_assoc($resultm);
// $part_a_doc_max=$rowm['COUNT(id)'];
// if($part_a_doc_max>0)
// {
// 	$rowpad=array();
// 	$sqlm="SELECT course, days, agency, rolee FROM part_a_doc WHERE formId='$partAformId'";
// 	$resultm=mysqli_query($conn,$sqlm);
// 	while($rowm=mysqli_fetch_assoc($resultm))
// 	{
// 		$rowpad[]=$rowm;
// 	}
// }
// print_r($rowpad);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $counter=1;
// $srno=1;
// $sql="SELECT id, faculty_id, praddr, peaddr, highq, dob, desi, nameo, pdesi, pscale, pbg, lastdesisel, promowef, cscales, cbasics, lastdesicas, promowefcas, cscalecas, cbasiccas, customRadioInline1, nameofdegree, institute FROM part_a_table WHERE year='$year'";
// $result=mysqli_query($conn, $sql);
// while($row=mysqli_fetch_row($result))
// {		
// 	$part_a_doc_count=0;
// 	$part_a_doc_max=0;

// 	$partAformId=$row[0];
// 	$sqlm="SELECT COUNT(id) FROM part_a_doc WHERE formId='$partAformId'";
// 	$resultm=mysqli_query($conn, $sqlm);
// 	$rowm=mysqli_fetch_assoc($resultm);
// 	$part_a_doc_max=$rowm['COUNT(id)'];
// 	if($part_a_doc_max>0)
// 	{
// 		$rowpad=array();
// 		$sqlm="SELECT course, days, agency, rolee FROM part_a_doc WHERE formId='$partAformId' ORDER BY srno ASC";
// 		$resultm=mysqli_query($conn,$sqlm);
// 		while($rowm=mysqli_fetch_assoc($resultm))
// 		{
// 			if($rowm['course']!='')
// 			{
// 				$rowpad[]=$rowm;
// 			}
// 		}
// 	}

// 	$facultyId=$row[1];
// 	$sqlx="SELECT faculty_name, ecode, email, mobileno, date_of_joining FROM faculty_table WHERE id='$facultyId'";
// 	$resultx=mysqli_query($conn,$sqlx);
// 	$rowx=mysqli_fetch_assoc($resultx);
// 	$faculty_name=$rowx['faculty_name'];
// 	$ecode=$rowx['ecode'];
// 	$email=$rowx['email'];
// 	$mobileno=$rowx['mobileno'];
// 	$date_of_joining=$rowx['date_of_joining'];

// 	$roww=array();
// 	$roww[]=$srno;
// 	$roww[]=$faculty_name;
// 	if($faculty_name!='')
// 	{
// 		$srno+=1;
// 	}
// 	$roww[]=$ecode;
// 	$roww[]=$email;
// 	$roww[]=$mobileno;
// 	$roww[]=$date_of_joining;
// 	// echo'here';
// 	// print_r($row);
// 	for($i=2;$i<sizeof($row);$i++)
// 	{
// 		$roww[]=$row[$i];
// 	}
	
// 	// attaching part a dynamic form data to the end of the other data one row at a time
// 	if($part_a_doc_max>0)
// 	{
// 		if($part_a_doc_count!=$part_a_doc_max)
// 		{
// 			if(sizeof($rowpad)!=0)
// 			{
// 				foreach($rowpad[$part_a_doc_count] as $x)
// 				{
// 					$roww[]=$x;
// 				}
// 			}
// 			else
// 			{
// 				$roww[]='';
// 				$roww[]='';
// 				$roww[]='';
// 				$roww[]='';
// 			}
// 			$part_a_doc_count+=1;
// 		}
// 	}

// 	$data[$counter]=$roww;
// 	$counter+=1;

// 	// if the number of rows of the part a dynamic form is greater than the number of rows of the normal part a data (which is 1) then we need to add blank spaces in the beginning of the dynamic form data to align it under the other dynamic form data above it
// 	if($part_a_doc_count!=0 and $part_a_doc_count<$part_a_doc_max)
// 	{
// 		while($part_a_doc_count!=$part_a_doc_max)
// 		{
// 			// echo 'ASDFGHJ';
// 			$roww=array();
// 			// if($part_a_doc_count==1)
// 			// {
// 			// 	$limit=26;
// 			// }
// 			if($part_a_doc_count==0)
// 			{
// 				$limit==25;
// 			}
// 			else
// 			{
// 				$limit=26;
// 			}
// 			for($i=1;$i<=$limit;$i++)
// 			{
// 				$roww[]='';
// 			}
// 			if(sizeof($rowpad)!=0)
// 			{
// 				foreach($rowpad[$part_a_doc_count] as $x)
// 				{
// 					$roww[]=$x;
// 				}
// 			}
// 			else
// 			{
// 				$roww[]='';
// 				$roww[]='';
// 				$roww[]='';
// 				$roww[]='';
// 			}
// 			$part_a_doc_count+=1;
// 			$data[$counter]=$roww;
// 			$counter+=1;
// 		}
// 	}
// }

$sql1="SELECT COUNT(id) FROM part_a_table WHERE year='$year'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);

$sql2="SELECT COUNT(id) FROM part_b_table WHERE year='$year'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

$maximum=max($row1['COUNT(id)'],$row2['COUNT(id)']);
// echo $maximum;

$a_or_b=0; // 0 means part A has more faculty entries and B means part B has more faculty entries
// This is done to account for leaving gaps for faculties who have not filled the data in either part A or part B
$facultyidcolumnname='faculty_id';
if($row1['COUNT(id)']>=$row2['COUNT(id)'])
{
	$sql="SELECT id, faculty_id FROM part_a_table WHERE year='$year'";
	$result=mysqli_query($conn, $sql);
	$rowa=array();
	while($rowtemp=mysqli_fetch_assoc($result))
	{
		$rowfaculty[]=$rowtemp;
	}
	// $a_or_b=0;
}
else
{
	$sql="SELECT id, facultyId FROM part_b_table WHERE year='$year'";
	$result=mysqli_query($conn, $sql);
	$rowb=array();
	while($rowtemp=mysqli_fetch_assoc($result))
	{
		$rowfaculty[]=$rowtemp;
	}
	$a_or_b=1;
	$facultyidcolumnname='facultyId';
}
// print_r($rowfaculty);

$srno=1; //has the faculty number
$csv_counter=1;
for($x=0;$x<$maximum;$x++)
{
	// echo sizeof($data[0]);
	// declaring an empty array for every faculty..in this array we will fill all the data of the two forms
	$roww=array();
	for($i=0;$i<10;$i++)
	{
		$temp=array();
		for($j=0; $j<sizeof($data[0]); $j++)
		{
			$temp[]='';
		}
		$roww[]=$temp;
	}
	// print_r($roww);
	// echo $rowfaculty[$x][$facultyidcolumnname].'<br>';

	$roww[0][0]=$srno;
	$facultyId=$rowfaculty[$x][$facultyidcolumnname];
	// echo $facultyId.'->';
	// Now we will get the data for the current faculty
	// PART A DATA
	$sql="SELECT id, praddr, peaddr, highq, dob, desi, nameo, pdesi, pscale, pbg, lastdesisel, promowef, cscales, cbasics, lastdesicas, promowefcas, cscalecas, cbasiccas, customRadioInline1, nameofdegree, institute FROM part_a_table WHERE faculty_id='$facultyId' AND year='$year'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_row($result);
	// print_r($row);
	$partAformId=$row[0];
	for($i=1;$i<sizeof($row);$i++)
	{
		$roww[0][$i+5]=$row[$i];
	}
	$sqlx="SELECT faculty_name, ecode, email, mobileno, date_of_joining FROM faculty_table WHERE id='$facultyId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);
	$roww[0][1]=$rowx['faculty_name'];
	$roww[0][2]=$rowx['ecode'];
	$roww[0][3]=$rowx['email'];
	$roww[0][4]=$rowx['mobileno'];
	$roww[0][5]=$rowx['date_of_joining'];

	$counter=0; //has the row number
	$sqlm="SELECT course, days, agency, rolee FROM part_a_doc WHERE formId='$partAformId' ORDER BY srno ASC";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[0]!='')
		{			
			$roww[$counter][26]=$rowm[0];
			$roww[$counter][27]=$rowm[1];
			$roww[$counter][28]=$rowm[2];
			$roww[$counter][29]=$rowm[3];
			$counter+=1;
		}
	}
	
	// print_r($roww);
	// echo '<br>';

	for($i=0;$i<sizeof($roww);$i++)
	{
		$flag=false;
		for($j=0;$j<sizeof($roww[$i]);$j++)
		{
			if($roww[$i][$j]!='')
			{
				$flag=true;
				break;
			}
		}
		if($flag==true)
		{
			$data[$csv_counter]=$roww[$i];
			$csv_counter+=1;
		}
	}

	$srno+=1;



}




// very simple to increment with i++ if looping through a database result
// $data[1] = array('Quentin', 'Del Viento', 34);
// $data[2] = array('Antoine', 'Del Torro', 55);
// $data[3] = array('Arthur', 'Vincente', 15);

$fp = fopen('php://output', 'wb');
foreach ($data as $line) {
    // though CSV stands for "comma separated value"
    // in many countries (including France) separator is ";"
    fputcsv($fp, $line, ',');
}
fclose($fp);

}