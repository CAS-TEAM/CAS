<?php

session_start();

include 'dbh.php';

$currentyear=2020;
$filename = "fs.csv";
$fp = fopen('php://output', 'w');

$counter=0;
$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='cas_db' AND TABLE_NAME='summary_table'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	if($row[0]!='id' && $row[0]!='facultyId')
	{
		if($counter==0)
		{
			$header[]='faculty name';		
		}
		else
		{
			$header[] = $row[0];
		}
		$counter+=1;	
	}
	// echo $row[0];
}	
$header[]='CAS Approval';
// print_r($header);

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT facultyId, selfPP, selfA, selfB, self_avgpi, hodPP, hodA, hodB, hod_avgpi, committeePP, committeeA, committeeB, committee_avgpi, hodremarkscum, final_recomm FROM summary_table WHERE year='$currentyear'";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	$facultyId=$row[0];
	$sqlx="SELECT faculty_name FROM faculty_table WHERE id='$facultyId'";
	$resultx=mysqli_query($conn,$sqlx);
	$rowx=mysqli_fetch_assoc($resultx);
	$faculty_name=$rowx['faculty_name'];
	// echo $faculty_name;

	$roww=array();
	$roww[]=$faculty_name;
	for($i=1;$i<sizeof($row);$i++)
	{
		$roww[]=$row[$i];
	}

	$sqlx="SELECT cas_approved FROM cas_approval_table WHERE facultyId='$facultyId' AND currentyear='$currentyear'";
	$resultx=mysqli_query($conn,$sqlx);
	if(mysqli_num_rows($resultx)!=0)
	{
		$rowx=mysqli_fetch_assoc($resultx);
		$cas_approved=$rowx['cas_approved'];		
	}
	else
	{
		$cas_approved='Pending';
	}
	$roww[]=$cas_approved;
	// print_r($roww);
	fputcsv($fp, $roww);
}
exit;