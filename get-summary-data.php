<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_String($conn,$_POST['userId']);

$year=mysqli_real_escape_String($conn,$_POST['year']);

//checking if user has already begun filling the form
$sql="SELECT * FROM summary_comm_table WHERE year='$year' AND facultyId='$userId'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	echo 'not begun';
}
else
{
	$row=mysqli_fetch_assoc($result);

	$data=array();

	// if($row['correct_parta']!='')
	// {
	// 	$correct_parta=$row['correct_parta'];
	// 	$data[]=array('correct_parta'=>$correct_parta);
	// }

	// if($row['exaggerated_parta']!='')
	// {
	// 	$exaggerated_parta=$row['exaggerated_parta'];
	// 	$data[]=array('exaggerated_parta'=>$exaggerated_parta);
	// }

	// if($row['remarks_parta']!='')
	// {
	// 	$remarks_parta=$row['remarks_parta'];
	// 	$data[]=array('remarks_parta'=>$remarks_parta);
	// }
		
	// if($row['current_academicA']!='')
	// {
	// 	$current_academicA=$row['current_academicA'];
	// 	$data[]=array('current_academicA'=>$current_academicA);
	// }

	// if($row['pi_academicA']!='')
	// {
	// 	$pi_academicA=$row['pi_academicA'];
	// 	$data[]=array('pi_academicA'=>$pi_academicA);
	// }

	// if($row['correct_partbi']!='')
	// {
	// 	$correct_partbi=$row['correct_partbi'];
	// 	$data[]=array('correct_partbi'=>$correct_partbi);
	// }
	
	// if($row['exaggerated_partbi']!='')
	// {
	// 	$exaggerated_partbi=$row['exaggerated_partbi'];
	// 	$data[]=array('exaggerated_partbi'=>$exaggerated_partbi);
	// }

	// if($row['remarks_partbi']!='')
	// {
	// 	$remarks_partbi=$row['remarks_partbi'];
	// 	$data[]=array('remarks_partbi'=>$remarks_partbi);
	// }
	
	// if($row['current_academicBI']!='')
	// {
	// 	$current_academicBI=$row['current_academicBI'];
	// 	$data[]=array('current_academicBI'=>$current_academicBI);
	// }

	// if($row['pi_academicBI']!='')
	// {
	// 	$pi_academicBI=$row['pi_academicBI'];
	// 	$data[]=array('pi_academicBI'=>$pi_academicBI);
	// }

	// if($row['correct_partbii']!='')
	// {
	// 	$correct_partbii=$row['correct_partbii'];
	// 	$data[]=array('correct_partbii'=>$correct_partbii);
	// }

	// if($row['exaggerated_partbii']!='')
	// {
	// 	$exaggerated_partbii=$row['exaggerated_partbii'];
	// 	$data[]=array('exaggerated_partbii'=>$exaggerated_partbii);
	// }	

	// if($row['remarks_partbii']!='')
	// {
	// 	$remarks_partbii=$row['remarks_partbii'];
	// 	$data[]=array('remarks_partbii'=>$remarks_partbii);
	// }	

	// if($row['current_academicBII']!='')
	// {
	// 	$current_academicBII=$row['current_academicBII'];
	// 	$data[]=array('current_academicBII'=>$current_academicBII);
	// }

	// if($row['pi_academicBII']!='')
	// {
	// 	$pi_academicBII=$row['pi_academicBII'];
	// 	$data[]=array('pi_academicBII'=>$pi_academicBII);
	// }

	// if($row['correct_partbiii']!='')
	// {
	// 	$correct_partbiii=$row['correct_partbiii'];
	// 	$data[]=array('correct_partbiii'=>$correct_partbiii);
	// }

	// if($row['exaggerated_partbiii']!='')
	// {
	// 	$exaggerated_partbiii=$row['exaggerated_partbiii'];
	// 	$data[]=array('exaggerated_partbiii'=>$exaggerated_partbiii);
	// }

	// if($row['remarks_partbiii']!='')
	// {
	// 	$remarks_partbiii=$row['remarks_partbiii'];
	// 	$data[]=array('remarks_partbiii'=>$remarks_partbiii);
	// }

	// if($row['current_academicBIII']!='')
	// {
	// 	$current_academicBIII=$row['current_academicBIII'];
	// 	$data[]=array('current_academicBIII'=>$current_academicBIII);
	// }

	// if($row['pi_academicBIII']!='')
	// {
	// 	$pi_academicBIII=$row['pi_academicBIII'];
	// 	$data[]=array('pi_academicBIII'=>$pi_academicBIII);
	// }

	// if($row['correct_partbiv']!='')
	// {
	// 	$correct_partbiv=$row['correct_partbiv'];
	// 	$data[]=array('correct_partbiv'=>$correct_partbiv);
	// }

	// if($row['exaggerated_partbiv']!='')
	// {
	// 	$exaggerated_partbiv=$row['exaggerated_partbiv'];
	// 	$data[]=array('exaggerated_partbiv'=>$exaggerated_partbiv);
	// }

	// if($row['remarks_partbiv']!='')
	// {
	// 	$remarks_partbiv=$row['remarks_partbiv'];
	// 	$data[]=array('remarks_partbiv'=>$remarks_partbiv);
	// }	

	// if($row['current_academicBIV']!='')
	// {
	// 	$current_academicBIV=$row['current_academicBIV'];
	// 	$data[]=array('current_academicBIV'=>$current_academicBIV);
	// }

	// if($row['pi_academicBIV']!='')
	// {
	// 	$pi_academicBIV=$row['pi_academicBIV'];
	// 	$data[]=array('pi_academicBIV'=>$pi_academicBIV);
	// }

	// if($row['last_academicBIV_avg_comm']!='')
	// {
	// 	$last_academicBIV_avg_comm=$row['last_academicBIV_avg_comm'];
	// 	$data[]=array('last_academicBIV_avg_comm'=>$last_academicBIV_avg_comm);
	// }	

	// if($row['pi_academicBIV_avg_comm']!='')
	// {
	// 	$pi_academicBIV_avg_comm=$row['pi_academicBIV_avg_comm'];
	// 	$data[]=array('pi_academicBIV_avg_comm'=>$pi_academicBIV_avg_comm);
	// }

	// if($row['last_academicBIV_avgpi_comm']!='')
	// {
	// 	$last_academicBIV_avgpi_comm=$row['last_academicBIV_avgpi_comm'];
	// 	$data[]=array('last_academicBIV_avgpi_comm'=>$last_academicBIV_avgpi_comm);
	// }

	if($row['final_recomm']!='')
	{
		$final_recomm=$row['final_recomm'];
		$data[]=array('final_recomm'=>$final_recomm);
	}	

	$jsonData=json_encode($data);

	echo $jsonData;


}