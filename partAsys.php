<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$year=mysqli_real_escape_string($conn,$_POST['year']);

echo $year.",".$userId;
//checking if this user has already begun filling the form before
$alreadybegun=mysqli_real_escape_string($conn,$_POST['alreadybegun']);
echo $alreadybegun;

// $faculty_name=mysqli_real_escape_string($conn,$_POST['faculty_name']);
// $ecode=mysqli_real_escape_string($conn,$_POST['ecode']);
$praddr=mysqli_real_escape_string($conn,$_POST['praddr']);
$peaddr=mysqli_real_escape_string($conn,$_POST['peaddr']);
// $email=mysqli_real_escape_string($conn,$_POST['email']);
// $mobileno=mysqli_real_escape_string($conn,$_POST['mobileno']);
$highq=mysqli_real_escape_string($conn,$_POST['highq']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$desi=mysqli_real_escape_string($conn,$_POST['desi']);
$nameo=mysqli_real_escape_string($conn,$_POST['nameo']);
$pdesi=mysqli_real_escape_string($conn,$_POST['pdesi']);
// $dojkjsce=mysqli_real_escape_string($conn,$_POST['dojkjsce']);
$pscale=mysqli_real_escape_string($conn,$_POST['pscale']);
$pbg=mysqli_real_escape_string($conn,$_POST['pbg']);
$lastdesisel=mysqli_real_escape_string($conn,$_POST['lastdesisel']);
$promowef=mysqli_real_escape_string($conn,$_POST['promowef']);
$cscales=mysqli_real_escape_string($conn,$_POST['cscales']);
$cbasics=mysqli_real_escape_string($conn,$_POST['cbasics']);
$lastdesicas=mysqli_real_escape_string($conn,$_POST['lastdesicas']);
$promowefcas=mysqli_real_escape_string($conn,$_POST['promowefcas']);
$cscalecas=mysqli_real_escape_string($conn,$_POST['cscalecas']);
$cbasiccas=mysqli_real_escape_string($conn,$_POST['cbasiccas']);
$customRadioInline1=mysqli_real_escape_string($conn,$_POST['customRadioInline1']);
$nameofdegree=mysqli_real_escape_string($conn,$_POST['nameofdegree']);
$institute=mysqli_real_escape_string($conn,$_POST['institute']);

//dynamic form
$srno=$_POST['srno'];
$course=$_POST['course'];
$days=$_POST['days'];
$agency=$_POST['agency'];
$filelocation=$_POST['filelocation'];

// echo $institute.','.$ugpg.','.$customRadioInline1.','.$nameofdegree;
$echo=null;
if($alreadybegun==1)
{
	//if already begun then update data
	$sql="UPDATE part_a_table SET praddr='$praddr',peaddr='$peaddr',highq='$highq',dob='$dob',desi='$desi',nameo='$nameo',pdesi='$pdesi',pscale='$pscale',pbg='$pbg',lastdesisel='$lastdesisel',promowef='$promowef',cscales='$cscales',cbasics='$cbasics',lastdesicas='$lastdesicas',promowefcas='$promowefcas',cscalecas='$cscalecas',cbasiccas='$cbasiccas',customRadioInline1='$customRadioInline1',nameofdegree='$nameofdegree',institute='$institute' WHERE year='$year' AND faculty_id='$userId'";
	$result=mysqli_query($conn,$sql);

	$sql3="SELECT id FROM part_a_table WHERE year='$year' AND faculty_id='$userId'";
	$result3=mysqli_query($conn,$sql3);
	$row=mysqli_fetch_assoc($result3);
	$formId=$row['id'];

	$sqlx="DELETE FROM part_a_doc WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);

	for($i=0;$i<sizeof($srno);$i++)
	{	

		// $sql2="SELECT id FROM part_a_doc WHERE formId='$formId' AND srno='$srno[$i]'";
		// $result2=mysqli_query($conn,$sql2);
		// if(mysqli_num_rows($result2)==0)
		// {

		// echo 'herer';
		// echo $_FILES['file']['tmp_name'][$i];

		$tmpFilePath = $_FILES['file']['tmp_name'][$i];
		// echo "temp->".$tmpFilePath;
		if ($tmpFilePath != "")
		{
		    //Setup our new file path
		    $dest = "users/".$email. "/".$_FILES['file']['name'][$i];

		    if(move_uploaded_file($tmpFilePath, $dest)) {
				$sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency,file) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]','$dest')";
				$result1=mysqli_query($conn,$sql1);
			}	

		}
		else
		{
			if($filelocation[$i]!="")
			{
				//that means if file was previously attached but now form has been edited and user hasnt manually attached it
				$sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency,file) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]','$filelocation[$i]')";
				$result1=mysqli_query($conn,$sql1);
			}
			else
			{
				$sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency,file) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]','NAN')";
				$result1=mysqli_query($conn,$sql1);
			}
			
		}		
			
		// }
		
		
	} 

}
else
{
	echo 'already begun='.$alreadybegun;
	$sql="INSERT INTO part_a_table (year,faculty_id,praddr,peaddr,highq,dob,desi,nameo,pdesi,pscale,pbg,lastdesisel,promowef,cscales,cbasics,lastdesicas,promowefcas,cscalecas,cbasiccas,customRadioInline1,nameofdegree,institute) VALUES ('$year','$userId','$praddr','$peaddr','$highq','$dob','$desi','$nameo','$pdesi','$pscale','$pbg','$lastdesisel','$promowef','$cscales','$cbasics','$lastdesicas','$promowefcas','$cscalecas','$cbasiccas','$customRadioInline1','$nameofdegree','$institute')";
	$result=mysqli_query($conn,$sql);

	$formId=mysqli_insert_id($conn);

	for($i=0;$i<sizeof($srno);$i++)
	{
		$tmpFilePath = $_FILES['file']['tmp_name'][$i];
		// echo "temp->".$tmpFilePath;
		if ($tmpFilePath != "")
		{
		    //Setup our new file path
		    $dest = "users/".$email. "/".$_FILES['file']['name'][$i];

		    if(move_uploaded_file($tmpFilePath, $dest)) {
				$sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency,file) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]','$dest')";
				$result1=mysqli_query($conn,$sql1);
			}	

		}
		else
		{
			$sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency,file) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]','NAN')";
			$result1=mysqli_query($conn,$sql1);
		}		

		// $sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]')";
		// $result1=mysqli_query($conn,$sql1);
	}
}

header('LOCATION: partA.php?id='.$userId.'&year='.$year.'&updated=1');