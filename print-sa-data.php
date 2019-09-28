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

$data[0] = array('Sr. No.', 'Name', 'Emp. No.', 'Email', 'Mobile No.', 'Details of Service in KJSCE: DOJ KJSCE', 'Present Address', 'Permanent Address', 'Highest Qualification', 'Date of Birth', 'Details of Last Service: Designation', 'Details of Last Service: Name of Organisation', 'Details of Service in KJSCE: Present Designation', 'Details of Service in KJSCE: Present Scale', 'Details of Service in KJSCE: Present basic and grade pay', 'Details of last promotion by selection: Designation', 'Details of last promotion by selection: Promotion w.e.f', 'Details of last promotion by selection: Changed Scale', 'Details of last promotion by selection: Changed basic and grade pay', 'Details of last promotion through CAS: Designation', 'Details of last promotion through CAS: Promotion w.e.f', 'Details of last promotion through CAS: Changed Scale', 'Details of last promotion through CAS: Changed basic and grade pay', 'Whether acquired any fresh educational qualification during said academic year?' ,'If yes, details of qualification: Name of Degree', 'If yes, details of qualification: Institute', 'Details of course, etc: Name of Summer School', 'Details of course, etc: Duration(Days)', 'Details of course, etc: Organising Agency', 'Details of course, etc: Role Played', 'Courses Taught: Odd Semester Course', 'Courses Taught: Odd Semester Type', 'Courses Taught: Odd Semester UG/PG', 'Courses Taught: Odd Semester Class/Semester', 'Courses Taught: Odd Semester Hrs./Week', 'Courses Taught: Odd Semester Total no. of hours engaged (A)', 'Courses Taught: Odd Semester Max Hours (B)', 'Courses Taught: Odd Semester C=(A/B)*100', 'Courses Taught: Odd Semester Student Feedback for Theory', 'Courses Taught: Even Semester Course', 'Courses Taught: Even Semester Type', 'Courses Taught: Even Semester UG/PG', 'Courses Taught: Even Semester Class/Semester', 'Courses Taught: Even Semester Hrs./Week', 'Courses Taught: Even Semester Total no. of hours engaged (A)', 'Courses Taught: Even Semester Max Hours (B)', 'Courses Taught: Even Semester C=(A/B)*100', 'Courses Taught: Even Semester Student Feedback for Theory', 'Average of C', 'Total of C', 'Odd Semester: Description of Duties Assigned: Paper Setting Test 1', 'Odd Semester: Extent to which carried out: Paper Setting Test 1', 'Odd Semester: Description of Duties Assigned: Paper Setting Test 2', 'Odd Semester: Extent to which carried out: Paper Setting Test 2', 'Odd Semester: Description of Duties Assigned: Test 1 invigilation', 'Odd Semester: Extent to which carried out: Test 1 inviligation', 'Odd Semester: Description of Duties Assigned: Test 2 inviligation', 'Odd Semester: Extent to which carried out: Test 2 inviligation', 'Odd Semester: Description of Duties Assigned: Test 1 paper assessment', 'Odd Semester: Extent to which carried out: Test 1 paper assessment', 'Odd Semester: Description of Duties Assigned: Test 2 paper assessment', 'Odd Semester: Extent to which carried out: Test 2 paper assessment', 'Odd Semester: Description of Duties Assigned: ESE Supervisor', 'Odd Semester: Extent to which carried out: ESE Supervisor', 'Odd Semester: Description of Duties Assigned: ESE paper setting', 'Odd Semester: Extent to which carried out: ESE paper setting', 'Odd Semester: Description of Duties Assigned: ESE inviligation', 'Odd Semester: Extent to which carried out: ESE inviligation', 'Odd Semester: Description of Duties Assigned: ESE theory paper assessment', 'Odd Semester: Extent to which carried out: ESE theory paper assessment', 'Odd Semester: Description of Duties Assigned: ESE Practical', 'Odd Semester: Extent to which carried out: ESE Practical', 'Odd Semester: Description of Duties Assigned: ESE re-assessment', 'Odd Semester: Extent to which carried out: ESE re-assessment', 'Odd Semester: Description of Duties Assigned: Proof Reading', 'Odd Semester: Extent to which carried out: Proof Reading', 'Odd Semester: Description of Duties Assigned: Open dayt', 'Odd Semester: Extent to which carried out: Open day', 'Even Semester: Description of Duties Assigned: Paper Setting Test 1', 'Even Semester: Extent to which carried out: Paper Setting Test 1', 'Even Semester: Description of Duties Assigned: Paper Setting Test 2', 'Even Semester: Extent to which carried out: Paper Setting Test 2', 'Even Semester: Description of Duties Assigned: Test 1 invigilation', 'Even Semester: Extent to which carried out: Test 1 inviligation', 'Even Semester: Description of Duties Assigned: Test 2 inviligation', 'Even Semester: Extent to which carried out: Test 2 inviligation', 'Even Semester: Description of Duties Assigned: Test 1 paper assessment', 'Even Semester: Extent to which carried out: Test 1 paper assessment', 'Even Semester: Description of Duties Assigned: Test 2 paper assessment', 'Even Semester: Extent to which carried out: Test 2 paper assessment', 'Even Semester: Description of Duties Assigned: ESE Supervisor', 'Even Semester: Extent to which carried out: ESE Supervisor', 'Even Semester: Description of Duties Assigned: ESE paper setting', 'Even Semester: Extent to which carried out: ESE paper setting', 'Even Semester: Description of Duties Assigned: ESE inviligation', 'Even Semester: Extent to which carried out: ESE inviligation', 'Even Semester: Description of Duties Assigned: ESE theory paper assessment', 'Even Semester: Extent to which carried out: ESE theory paper assessment', 'Even Semester: Description of Duties Assigned: ESE Practical', 'Even Semester: Extent to which carried out: ESE Practical', 'Even Semester: Description of Duties Assigned: ESE re-assessment', 'Even Semester: Extent to which carried out: ESE re-assessment', 'Even Semester: Description of Duties Assigned: Proof Reading', 'Even Semester: Extent to which carried out: Proof Reading', 'Even Semester: Description of Duties Assigned: Open dayt', 'Even Semester: Extent to which carried out: Open day','Average of A','Details of additional resource provided to the students: Details of Course','Details of additional resource provided to the students: Enrichment in Content', 'Use of Participatory and innovative Teaching-Learning Methodologies: Problem based learning, case studies, group discussions, activity based learning etc.:','Use of Participatory and innovative Teaching-Learning Methodologies: Use of ICT in T/L process with computer-aided methods like PowerPoint / Multimedia / Simulation / Software etc. Use of anyone of these in addition to Chalk and Board:', 'Use of Participatory and innovative Teaching-Learning Methodologies: Developing and imparting Remedial / Bridge Courses:','Use of Participatory and innovative Teaching-Learning Methodologies: Developing and imparting soft skills / communication skills / personality / development courses / modules:','Use of Participatory and innovative Teaching-Learning Methodologies: Developing and imparting specialized teaching-learning programmes in physical education, library; innovative compositions and creations in music, performing and visual arts and other tradition areas:','Use of Participatory and innovative Teaching-Learning Methodologies: Audit courses taken (given name/semester/term):','Use of Participatory and innovative Teaching-Learning Methodologies: Other:','Administrative Post: Holding administrative post: HOD/Dean/Vice-Principal/Associate HOD/ Type of Activity:','Administrative Post: Role','Activities: Extension, Co-Curricular and Field based activities / internships in college Type of Activity','Activities: Role','Extra-curricular and social activities in college: Type of Activity','Extra-curricular and social activities in college: Role','College administration/organization member/committee member/NBA/NAAC of college: Type of Activity','College administration/organization member/committee member/NBA/NAAC of college: Role','Published Papers In Peer Reviewed Journals: Title with page no.','Published Papers In Peer Reviewed Journals: Name of peer review Journals (not online journals)','Published Papers In Peer Reviewed Journals: ISSN/ISBN No.','Published Papers In Peer Reviewed Journals: Impact factor','Published Papers In Peer Reviewed Journals: Whether you are main author','Published Papers In Peer Reviewed Journals: No. of co-author','Published Papers in International/National Conference Abroad: Title with page no.','Published Papers in International/National Conference Abroad: Name of peer review Journals (not online journals)','Published Papers in International/National Conference Abroad: ISSN/ISBN No.','Published Papers in International/National Conference Abroad: Impact factor','Published Papers in International/National Conference Abroad: Whether you are main author','Published Papers in International/National Conference Abroad: No. of co-author','Published Papers in International/National Conference in India: Title with page no.','Published Papers in International/National Conference in India: Name of peer review Journals (not online journals)','Published Papers in International/National Conference in India: ISSN/ISBN No.','Published Papers in International/National Conference in India: Impact factor','Published Papers in International/National Conference in India: Whether you are main author','Published Papers in International/National Conference in India: No. of co-author','Books/Articles/Chapters published in Books: Title with page no','Books/Articles/Chapters published in Books: Publisher','Books/Articles/Chapters published in Books: ISSN/ISBN No.','Books/Articles/Chapters published in Books: Date of Publication','Books/Articles/Chapters published in Books: Impact factor','Books/Articles/Chapters published in Books: Whether you are main author','Books/Articles/Chapters published in Books: No. of co-author','Research/thesis supervisor and project guide: Ph.D: Number Enrolled','Research/thesis supervisor and project guide: Ph.D: Thesis submitted','Research/thesis supervisor and project guide: Ph.D: No. of Degree Awarded','Research/thesis supervisor and project guide: M.Tech: Number Enrolled','Research/thesis supervisor and project guide: M.Tech: Thesis submitted','Research/thesis supervisor and project guide: M.Tech: No. of Degree Awarded','Research/thesis supervisor and project guide: B.Tech (Number of Groups): Number Enrolled','Research/thesis supervisor and project guide: B.Tech: Thesis submitted','Research/thesis supervisor and project guide: B.Tech: No. of Degree Awarded','Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval: Title','Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval: Agency','Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval: Date of Submission','Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval: Grant/Amount Mobilized','Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete: Title','Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete: Agency','Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete: Period in years','Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete: Grant/Amount Mobilized','Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019: Title','Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019: Agency','Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019: Date of Completion','Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019: Grant/Amount Mobilized','Patent/Intellectual property filed/received: Details of patent/intellectual property','Patent/Intellectual property filed/received: Date of received/filed','Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college: Details of Programme','Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college: Date','Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs,Seminars,Workshops,Symposia etc. invited outside college: Organized by','Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college: Details of Programme','Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college: Date','Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college: Organized by','Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned.: Details','Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned.: Extra Information');

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

$srno=1; //has the faculty serial number
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
	
	// PART B DATA
	$sql="SELECT id FROM part_b_table WHERE facultyId='$facultyId' AND year='$year'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_row($result);
	// print_r($row);
	$partBformId=$row[0];
	// echo $partBformId.'<br>';

	// PART B CATEGORY 1 DATA
	$sql="SELECT * FROM part_b_cat_1 WHERE formId='$partBformId'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);

	$roww[0][48]=$row['avg_c'];
	$roww[0][49]=$row['total_c'];
	$roww[0][50]=$row['odpstest1'];
	$roww[0][51]=$row['oepstest1'];
	$roww[0][52]=$row['odpstest2'];
	$roww[0][53]=$row['oepstest2'];
	$roww[0][54]=$row['odtest1in'];
	$roww[0][55]=$row['oetest1in'];
	$roww[0][56]=$row['odtest2in'];
	$roww[0][57]=$row['oetest2in'];
	$roww[0][58]=$row['odtest1ass'];
	$roww[0][59]=$row['oetest1ass'];
	$roww[0][60]=$row['odtest2ass'];
	$roww[0][61]=$row['oetest2ass'];
	$roww[0][62]=$row['odesesup'];
	$roww[0][63]=$row['oeesesup'];
	$roww[0][64]=$row['odeseps'];
	$roww[0][65]=$row['oeeseps'];
	$roww[0][66]=$row['odesein'];
	$roww[0][67]=$row['oeesein'];
	$roww[0][68]=$row['odeseth'];
	$roww[0][69]=$row['oeeseth'];
	$roww[0][70]=$row['odesepo'];
	$roww[0][71]=$row['oeesepo'];
	$roww[0][72]=$row['odesere_ass'];
	$roww[0][73]=$row['oeesere_ass'];
	$roww[0][74]=$row['odproofr'];
	$roww[0][75]=$row['oeproofr'];
	$roww[0][76]=$row['odopenday'];
	$roww[0][77]=$row['oeopenday'];

	$roww[0][78]=$row['edpstest1'];
	$roww[0][79]=$row['eepstest1'];
	$roww[0][80]=$row['edpstest2'];
	$roww[0][81]=$row['eepstest2'];
	$roww[0][82]=$row['edtest1in'];
	$roww[0][83]=$row['eetest1in'];
	$roww[0][84]=$row['edtest2in'];
	$roww[0][85]=$row['eetest2in'];
	$roww[0][86]=$row['edtest1ass'];
	$roww[0][87]=$row['eetest1ass'];
	$roww[0][88]=$row['edtest2ass'];
	$roww[0][89]=$row['eetest2ass'];
	$roww[0][90]=$row['edesesup'];
	$roww[0][91]=$row['eeesesup'];
	$roww[0][92]=$row['edeseps'];
	$roww[0][93]=$row['eeeseps'];
	$roww[0][94]=$row['edesein'];
	$roww[0][95]=$row['eeesein'];
	$roww[0][96]=$row['edeseth'];
	$roww[0][97]=$row['eeeseth'];
	$roww[0][98]=$row['edesepo'];
	$roww[0][99]=$row['eeesepo'];
	$roww[0][100]=$row['edesere_ass'];
	$roww[0][101]=$row['eeesere_ass'];
	$roww[0][102]=$row['edproofr'];
	$roww[0][103]=$row['eeproofr'];
	$roww[0][104]=$row['edopenday'];
	$roww[0][105]=$row['eeopenday'];

	$roww[0][106]=$row['avg_ap'];

	$roww[0][109]=$row['dpstest1'];
	$roww[0][110]=$row['dpstest2'];
	$roww[0][111]=$row['dtest1in'];
	$roww[0][112]=$row['dtest2in'];
	$roww[0][113]=$row['dtest1ass'];
	$roww[0][114]=$row['dtest2ass'];
	$roww[0][115]=$row['deseps'];

	// $roww[0][]=$row[''];	

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_1_cto WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][30]=$rowm[2];
			$roww[$counter][31]=$rowm[3];
			$roww[$counter][32]=$rowm[4];
			$roww[$counter][33]=$rowm[5];
			$roww[$counter][34]=$rowm[6];
			$roww[$counter][35]=$rowm[7];
			$roww[$counter][36]=$rowm[8];
			$roww[$counter][37]=$rowm[9];
			$roww[$counter][38]=$rowm[10];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_1_cte WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][39]=$rowm[2];
			$roww[$counter][40]=$rowm[3];
			$roww[$counter][41]=$rowm[4];
			$roww[$counter][42]=$rowm[5];
			$roww[$counter][43]=$rowm[6];
			$roww[$counter][44]=$rowm[7];
			$roww[$counter][45]=$rowm[8];
			$roww[$counter][46]=$rowm[9];
			$roww[$counter][47]=$rowm[10];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_1_dar WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][107]=$rowm[2];
			$roww[$counter][108]=$rowm[3];
			$counter+=1;
		}
	}

	// PART B CATEGORY 2
	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_2_ha WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][116]=$rowm[2];
			$roww[$counter][117]=$rowm[3];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_2_act WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][118]=$rowm[2];
			$roww[$counter][119]=$rowm[3];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_2_exc WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][120]=$rowm[2];
			$roww[$counter][121]=$rowm[3];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_2_c WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][122]=$rowm[2];
			$roww[$counter][123]=$rowm[3];
			$counter+=1;
		}
	}

	// PART B CATEGORY 3
	$sql="SELECT * FROM part_b_cat_3 WHERE formId='$partBformId'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$roww[0][149]=$row['phdne'];
	$roww[0][150]=$row['phdts'];
	$roww[0][151]=$row['phdda'];
	$roww[0][152]=$row['mtechne'];
	$roww[0][153]=$row['mtechts'];
	$roww[0][154]=$row['mtechda'];
	$roww[0][155]=$row['btechne'];
	$roww[0][156]=$row['btechts'];
	$roww[0][157]=$row['btechda'];

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_pp WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][124]=$rowm[2];
			$roww[$counter][125]=$rowm[3];
			$roww[$counter][126]=$rowm[4];
			$roww[$counter][127]=$rowm[5];
			$roww[$counter][128]=$rowm[6];
			$roww[$counter][129]=$rowm[7];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_ppic WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][130]=$rowm[2];
			$roww[$counter][131]=$rowm[3];
			$roww[$counter][132]=$rowm[4];
			$roww[$counter][133]=$rowm[5];
			$roww[$counter][134]=$rowm[6];
			$roww[$counter][135]=$rowm[7];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_ppinc WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][136]=$rowm[2];
			$roww[$counter][137]=$rowm[3];
			$roww[$counter][138]=$rowm[4];
			$roww[$counter][139]=$rowm[5];
			$roww[$counter][140]=$rowm[6];
			$roww[$counter][141]=$rowm[7];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_bk WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][142]=$rowm[2];
			$roww[$counter][143]=$rowm[3];
			$roww[$counter][144]=$rowm[4];
			$roww[$counter][145]=$rowm[5];
			$roww[$counter][146]=$rowm[6];
			$roww[$counter][147]=$rowm[7];
			$roww[$counter][148]=$rowm[8];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_res WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][158]=$rowm[2];
			$roww[$counter][159]=$rowm[3];
			$roww[$counter][160]=$rowm[4];
			$roww[$counter][161]=$rowm[5];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_ores WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][162]=$rowm[2];
			$roww[$counter][163]=$rowm[3];
			$roww[$counter][164]=$rowm[4];
			$roww[$counter][165]=$rowm[5];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_cres WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][166]=$rowm[2];
			$roww[$counter][167]=$rowm[3];
			$roww[$counter][168]=$rowm[4];
			$roww[$counter][169]=$rowm[5];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_3_pip WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][170]=$rowm[2];
			$roww[$counter][171]=$rowm[3];
			$counter+=1;
		}
	}

	// PART B CATEGORY 4
	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_4_sem WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][172]=$rowm[2];
			$roww[$counter][173]=$rowm[3];
			$roww[$counter][174]=$rowm[4];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_4_inv WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][175]=$rowm[2];
			$roww[$counter][176]=$rowm[3];
			$roww[$counter][177]=$rowm[4];
			$counter+=1;
		}
	}

	$counter=0; //has the row number
	$sqlm="SELECT * FROM part_b_cat_4_creds WHERE formId='$partBformId'";
	$resultm=mysqli_query($conn,$sqlm);
	while($rowm=mysqli_fetch_row($resultm))
	{
		if($rowm[2]!='')
		{			
			$roww[$counter][178]=$rowm[2];
			$roww[$counter][179]=$rowm[3];
			$counter+=1;
		}
	}

	///BUILDING THE FINAL ARRAY
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