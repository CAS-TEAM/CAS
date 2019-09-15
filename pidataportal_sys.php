<?php

session_start();

include 'dbh.php';

$currentId=$_SESSION['id'];

$userId=$_POST['facultyselect'];

$parta18=mysqli_real_escape_string($conn, $_POST['parta18']);
$partbi18=mysqli_real_escape_string($conn, $_POST['partbi18']);
$partbii18=mysqli_real_escape_string($conn, $_POST['partbii18']);
$partbiii18=mysqli_real_escape_string($conn, $_POST['partbiii18']);
$partbiv18=mysqli_real_escape_string($conn, $_POST['partbiv18']);
$parta17=mysqli_real_escape_string($conn, $_POST['parta17']);
$partbi17=mysqli_real_escape_string($conn, $_POST['partbi17']);
$partbii17=mysqli_real_escape_string($conn, $_POST['partbii17']);
$partbiii17=mysqli_real_escape_string($conn, $_POST['partbiii17']);
$partbiv17=mysqli_real_escape_string($conn, $_POST['partbiv17']);

// echo $userId.'--';
// echo $parta18.',';
// echo $partbi18.',';
// echo $partbii18.',';
// echo $partbiii18.',';
// echo $partbiv18.',';
// echo $parta17.',';
// echo $partbi17.',';
// echo $partbii17.',';
// echo $partbiii17.',';
// echo $partbiv17.',';

////////////////////////////////////////////////////////////////////////////
//2018
$year=2018;
////PART A
$sql="SELECT id from part_a_gpi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO part_a_gpi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE part_a_gpi SET parta_gpi_pi_committee_a='$parta18' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 1
$sql="SELECT id from partb_cat1_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat1_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat1_pi SET cat1_pitotal_committee_a='$partbi18' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 2
$sql="SELECT id from partb_cat2_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat2_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat2_pi SET cat2_piitotal_committee_a='$partbii18' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 3
$sql="SELECT id from partb_cat3_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat3_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat3_pi SET cat3_piiitotal_committee_a='$partbiii18' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 4
$sql="SELECT id from partb_cat4_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat4_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat4_pi SET cat4_pivtotal_committee_a='$partbiv18' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

//Submitting both the forms for review
$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$year'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO submitted_for_review_table (facultyId,year,partA,partB) VALUES ('$userId','$year',1,1)";
	$result1=mysqli_query($conn,$sql1);
}
else
{
	$sql2="UPDATE submitted_for_review_table SET partA=1 AND partB=1 WHERE facultyId='$userId' AND year='$year'";
	$result2=mysqli_query($conn,$sql2);
}
//making entry into summary table
$sql="SELECT id FROM summary_table WHERE year='$year' AND facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sqlx="INSERT INTO summary_table (year, facultyId) VALUES ('$year', '$userId')";
	$resultx=mysqli_query($conn, $sqlx);
}
////////////////////////////////////////////////////////////////////////////
//2017
$year=2017;
////PART A
$sql="SELECT id from part_a_gpi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO part_a_gpi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE part_a_gpi SET parta_gpi_pi_committee_a='$parta17' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 1
$sql="SELECT id from partb_cat1_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat1_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat1_pi SET cat1_pitotal_committee_a='$partbi17' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 2
$sql="SELECT id from partb_cat2_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat2_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat2_pi SET cat2_piitotal_committee_a='$partbii17' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 3
$sql="SELECT id from partb_cat3_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat3_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat3_pi SET cat3_piiitotal_committee_a='$partbiii17' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

////PART B CAT 4
$sql="SELECT id from partb_cat4_pi WHERE year='$year' and facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO partb_cat4_pi(facultyId,year) VALUES('$userId','$year')";
	$result1=mysqli_query($conn,$sql1);
	$id=$conn->insert_id;
}
else
{
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
}
$sql2="UPDATE partb_cat4_pi SET cat4_pivtotal_committee_a='$partbiv17' WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);

//Submitting both the forms for review
$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$userId' AND year='$year'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO submitted_for_review_table (facultyId,year,partA,partB) VALUES ('$userId','$year',1,1)";
	$result1=mysqli_query($conn,$sql1);
}
else
{
	$sql2="UPDATE submitted_for_review_table SET partA=1 AND partB=1 WHERE facultyId='$userId' AND year='$year'";
	$result2=mysqli_query($conn,$sql2);
}
//making entry into summary table
$sql="SELECT id FROM summary_table WHERE year='$year' AND facultyId='$userId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sqlx="INSERT INTO summary_table (year, facultyId) VALUES ('$year', '$userId')";
	$resultx=mysqli_query($conn, $sqlx);
}

echo 'success';