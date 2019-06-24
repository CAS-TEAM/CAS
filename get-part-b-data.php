<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_String($conn,$_POST['userId']);

$year=mysqli_real_escape_String($conn,$_POST['year']);

//checking if user has already begun filling the form
$sqlx="SELECT id FROM part_b_table WHERE year='$year' AND facultyId='$userId'";
$resultx=mysqli_query($conn,$sqlx);

if(mysqli_num_rows($resultx)==0)
{
	echo 'not begun';
}
else
{

	$rowx=mysqli_fetch_assoc($resultx);

	$formId=$rowx['id'];

	$data=array();


	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 1 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sql1="SELECT * FROM part_b_cat_1 WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result1);

	// if($row['facultyId']!='')
	// {
	// 	$facultyId=$row['facultyId'];
	// 	$data[]=array('facultyId'=>$facultyId);
	// }

	if($row['avg_c']!='')
	{
		$avg_c=$row['avg_c'];
		$data[]=array('avg_c'=>$avg_c);
	}

	if($row['total_c']!='')
	{
		$total_c=$row['total_c'];
		$data[]=array('total_c'=>$total_c);
	}

	if($row['odpstest1']!='')
	{
		$odpstest1=$row['odpstest1'];
		$data[]=array('odpstest1'=>$odpstest1);
	}

	if($row['oepstest1']!='')
	{
		$oepstest1=$row['oepstest1'];
		$data[]=array('oepstest1'=>$oepstest1);
	}

	// if($row['o1file']!='')
	// {
	// 	$o1file=$row['o1file'];
	// 	$data[]=array('o1file'=>$o1file);
	// }

	if($row['odpstest2']!='')
	{
		$odpstest2=$row['odpstest2'];
		$data[]=array('odpstest2'=>$odpstest2);
	}

	if($row['oepstest2']!='')
	{
		$oepstest2=$row['oepstest2'];
		$data[]=array('oepstest2'=>$oepstest2);
	}

	// if($row['o2file']!='')
	// {
	// 	$o2file=$row['o2file'];
	// 	$data[]=array('o2file'=>$o2file);
	// }

	if($row['odtest1in']!='')
	{
		$odtest1in=$row['odtest1in'];
		$data[]=array('odtest1in'=>$odtest1in);
	}

	if($row['oetest1in']!='')
	{
		$oetest1in=$row['oetest1in'];
		$data[]=array('oetest1in'=>$oetest1in);
	}

	// if($row['o3file']!='')
	// {
	// 	$o3file=$row['o3file'];
	// 	$data[]=array('o3file'=>$o3file);
	// }

	if($row['odtest2in']!='')
	{
		$odtest2in=$row['odtest2in'];
		$data[]=array('odtest2in'=>$odtest2in);
	}

	if($row['oetest2in']!='')
	{
		$oetest2in=$row['oetest2in'];
		$data[]=array('oetest2in'=>$oetest2in);
	}

	// if($row['o4file']!='')
	// {
	// 	$o4file=$row['o4file'];
	// 	$data[]=array('o4file'=>$o4file);
	// }

	if($row['odtest1ass']!='')
	{
		$odtest1ass=$row['odtest1ass'];
		$data[]=array('odtest1ass'=>$odtest1ass);
	}

	if($row['oetest1ass']!='')
	{
		$oetest1ass=$row['oetest1ass'];
		$data[]=array('oetest1ass'=>$oetest1ass);
	}

	// if($row['o5file']!='')
	// {
	// 	$o5file=$row['o5file'];
	// 	$data[]=array('o5file'=>$o5file);
	// }

	if($row['odtest2ass']!='')
	{
		$odtest2ass=$row['odtest2ass'];
		$data[]=array('odtest2ass'=>$odtest2ass);
	}

	if($row['oetest2ass']!='')
	{
		$oetest2ass=$row['oetest2ass'];
		$data[]=array('oetest2ass'=>$oetest2ass);
	}

	// if($row['o6file']!='')
	// {
	// 	$o6file=$row['o6file'];
	// 	$data[]=array('o6file'=>$o6file);
	// }

	if($row['odesesup']!='')
	{
		$odesesup=$row['odesesup'];
		$data[]=array('odesesup'=>$odesesup);
	}

	if($row['oeesesup']!='')
	{
		$oeesesup=$row['oeesesup'];
		$data[]=array('oeesesup'=>$oeesesup);
	}

	if($row['odeseps']!='')
	{
		$odeseps=$row['odeseps'];
		$data[]=array('odeseps'=>$odeseps);
	}

	if($row['oeeseps']!='')
	{
		$oeeseps=$row['oeeseps'];
		$data[]=array('oeeseps'=>$oeeseps);
	}

	if($row['o7file']!='')
	{
		$o7file=$row['o7file'];
		$data[]=array('o7file'=>$o7file);
	}

	if($row['odesein']!='')
	{
		$odesein=$row['odesein'];
		$data[]=array('odesein'=>$odesein);
	}

	if($row['oeesein']!='')
	{
		$oeesein=$row['oeesein'];
		$data[]=array('oeesein'=>$oeesein);
	}

	// if($row['o8file']!='')
	// {
	// 	$o8file=$row['o8file'];
	// 	$data[]=array('o8file'=>$o8file);
	// }

	if($row['odeseth']!='')
	{
		$odeseth=$row['odeseth'];
		$data[]=array('odeseth'=>$odeseth);
	}

	if($row['oeeseth']!='')
	{
		$oeeseth=$row['oeeseth'];
		$data[]=array('oeeseth'=>$oeeseth);
	}

	// if($row['o9file']!='')
	// {
	// 	$o9file=$row['o9file'];
	// 	$data[]=array('o9file'=>$o9file);
	// }

	if($row['odesepo']!='')
	{
		$odesepo=$row['odesepo'];
		$data[]=array('odesepo'=>$odesepo);
	}

	if($row['oeesepo']!='')
	{
		$oeesepo=$row['oeesepo'];
		$data[]=array('oeesepo'=>$oeesepo);
	}

	// if($row['o10file']!='')
	// {
	// 	$o10file=$row['o10file'];
	// 	$data[]=array('o10file'=>$o10file);
	// }

	if($row['odesere_ass']!='')
	{
		$odesere_ass=$row['odesere_ass'];
		$data[]=array('odesere_ass'=>$odesere_ass);
	}

	if($row['oeesere_ass']!='')
	{
		$oeesere_ass=$row['oeesere_ass'];
		$data[]=array('oeesere_ass'=>$oeesere_ass);
	}

	// if($row['o11file']!='')
	// {
	// 	$o11file=$row['o11file'];
	// 	$data[]=array('o11file'=>$o11file);
	// }

	if($row['odproofr']!='')
	{
		$odproofr=$row['odproofr'];
		$data[]=array('odproofr'=>$odproofr);
	}

	if($row['oeproofr']!='')
	{
		$oeproofr=$row['oeproofr'];
		$data[]=array('oeproofr'=>$oeproofr);
	}

	// if($row['o12file']!='')
	// {
	// 	$o12file=$row['o12file'];
	// 	$data[]=array('o12file'=>$o12file);
	// }

	if($row['odopenday']!='')
	{
		$odopenday=$row['odopenday'];
		$data[]=array('odopenday'=>$odopenday);
	}

	if($row['oeopenday']!='')
	{
		$oeopenday=$row['oeopenday'];
		$data[]=array('oeopenday'=>$oeopenday);
	}

	// if($row['o13file']!='')
	// {
	// 	$o13file=$row['o13file'];
	// 	$data[]=array('o13file'=>$o13file);
	// }

	if($row['edpstest1']!='')
	{
		$edpstest1=$row['edpstest1'];
		$data[]=array('edpstest1'=>$edpstest1);
	}

	if($row['eepstest1']!='')
	{
		$eepstest1=$row['eepstest1'];
		$data[]=array('eepstest1'=>$eepstest1);
	}

	// if($row['e1file']!='')
	// {
	// 	$e1file=$row['e1file'];
	// 	$data[]=array('e1file'=>$e1file);
	// }

	if($row['edpstest2']!='')
	{
		$edpstest2=$row['edpstest2'];
		$data[]=array('edpstest2'=>$edpstest2);
	}

	if($row['eepstest2']!='')
	{
		$eepstest2=$row['eepstest2'];
		$data[]=array('eepstest2'=>$eepstest2);
	}

	// if($row['e2file']!='')
	// {
	// 	$e2file=$row['e2file'];
	// 	$data[]=array('e2file'=>$e2file);
	// }

	if($row['edtest1in']!='')
	{
		$edtest1in=$row['edtest1in'];
		$data[]=array('edtest1in'=>$edtest1in);
	}

	if($row['eetest1in']!='')
	{
		$eetest1in=$row['eetest1in'];
		$data[]=array('eetest1in'=>$eetest1in);
	}

	// if($row['e3file']!='')
	// {
	// 	$e3file=$row['e3file'];
	// 	$data[]=array('e3file'=>$e3file);
	// }

	if($row['edtest2in']!='')
	{
		$edtest2in=$row['edtest2in'];
		$data[]=array('edtest2in'=>$edtest2in);
	}

	if($row['eetest2in']!='')
	{
		$eetest2in=$row['eetest2in'];
		$data[]=array('eetest2in'=>$eetest2in);
	}

	// if($row['e4file']!='')
	// {
	// 	$e4file=$row['e4file'];
	// 	$data[]=array('e4file'=>$e4file);
	// }

	if($row['edtest1ass']!='')
	{
		$edtest1ass=$row['edtest1ass'];
		$data[]=array('edtest1ass'=>$edtest1ass);
	}

	if($row['eetest1ass']!='')
	{
		$eetest1ass=$row['eetest1ass'];
		$data[]=array('eetest1ass'=>$eetest1ass);
	}

	// if($row['e5file']!='')
	// {
	// 	$e5file=$row['e5file'];
	// 	$data[]=array('e5file'=>$e5file);
	// }

	if($row['edtest2ass']!='')
	{
		$edtest2ass=$row['edtest2ass'];
		$data[]=array('edtest2ass'=>$edtest2ass);
	}

	if($row['eetest2ass']!='')
	{
		$eetest2ass=$row['eetest2ass'];
		$data[]=array('eetest2ass'=>$eetest2ass);
	}

	// if($row['e6file']!='')
	// {
	// 	$e6file=$row['e6file'];
	// 	$data[]=array('e6file'=>$e6file);
	// }

	if($row['edesesup']!='')
	{
		$edesesup=$row['edesesup'];
		$data[]=array('edesesup'=>$edesesup);
	}

	if($row['eeesesup']!='')
	{
		$eeesesup=$row['eeesesup'];
		$data[]=array('eeesesup'=>$eeesesup);
	}

	if($row['edeseps']!='')
	{
		$edeseps=$row['edeseps'];
		$data[]=array('edeseps'=>$edeseps);
	}

	if($row['eeeseps']!='')
	{
		$eeeseps=$row['eeeseps'];
		$data[]=array('eeeseps'=>$eeeseps);
	}

	if($row['e7file']!='')
	{
		$e7file=$row['e7file'];
		$data[]=array('e7file'=>$e7file);
	}

	if($row['edesein']!='')
	{
		$edesein=$row['edesein'];
		$data[]=array('edesein'=>$edesein);
	}

	if($row['eeesein']!='')
	{
		$eeesein=$row['eeesein'];
		$data[]=array('eeesein'=>$eeesein);
	}

	// if($row['e8file']!='')
	// {
	// 	$e8file=$row['e8file'];
	// 	$data[]=array('e8file'=>$e8file);
	// }

	if($row['edeseth']!='')
	{
		$edeseth=$row['edeseth'];
		$data[]=array('edeseth'=>$edeseth);
	}

	if($row['eeeseth']!='')
	{
		$eeeseth=$row['eeeseth'];
		$data[]=array('eeeseth'=>$eeeseth);
	}

	// if($row['e9file']!='')
	// {
	// 	$e9file=$row['e9file'];
	// 	$data[]=array('e9file'=>$e9file);
	// }

	if($row['edesepo']!='')
	{
		$edesepo=$row['edesepo'];
		$data[]=array('edesepo'=>$edesepo);
	}

	if($row['eeesepo']!='')
	{
		$eeesepo=$row['eeesepo'];
		$data[]=array('eeesepo'=>$eeesepo);
	}

	// if($row['e10file']!='')
	// {
	// 	$e10file=$row['e10file'];
	// 	$data[]=array('e10file'=>$e10file);
	// }

	if($row['edesere_ass']!='')
	{
		$edesere_ass=$row['edesere_ass'];
		$data[]=array('edesere_ass'=>$edesere_ass);
	}

	if($row['eeesere_ass']!='')
	{
		$eeesere_ass=$row['eeesere_ass'];
		$data[]=array('eeesere_ass'=>$eeesere_ass);
	}

	// if($row['e11file']!='')
	// {
	// 	$e11file=$row['e11file'];
	// 	$data[]=array('e11file'=>$e11file);
	// }

	if($row['edproofr']!='')
	{
		$edproofr=$row['edproofr'];
		$data[]=array('edproofr'=>$edproofr);
	}

	if($row['eeproofr']!='')
	{
		$eeproofr=$row['eeproofr'];
		$data[]=array('eeproofr'=>$eeproofr);
	}

	// if($row['e12file']!='')
	// {
	// 	$e12file=$row['e12file'];
	// 	$data[]=array('e12file'=>$e12file);
	// }

	if($row['edopenday']!='')
	{
		$edopenday=$row['edopenday'];
		$data[]=array('edopenday'=>$edopenday);
	}

	if($row['eeopenday']!='')
	{
		$eeopenday=$row['eeopenday'];
		$data[]=array('eeopenday'=>$eeopenday);
	}

	// if($row['e13file']!='')
	// {
	// 	$e13file=$row['e13file'];
	// 	$data[]=array('e13file'=>$e13file);
	// }

	if($row['avg_ap']!='')
	{
		$avg_ap=$row['avg_ap'];
		$data[]=array('avg_ap'=>$avg_ap);
	}

	if($row['dpstest1']!='')
	{
		$dpstest1=$row['dpstest1'];
		$data[]=array('dpstest1'=>$dpstest1);
	}

	if($row['dps1file']!='')
	{
		$dps1file=$row['dps1file'];
		$data[]=array('dps1file'=>$dps1file);
	}

	if($row['dpstest2']!='')
	{
		$dpstest2=$row['dpstest2'];
		$data[]=array('dpstest2'=>$dpstest2);
	}

	if($row['dps2file']!='')
	{
		$dps2file=$row['dps2file'];
		$data[]=array('dps2file'=>$dps2file);
	}

	if($row['dtest1in']!='')
	{
		$dtest1in=$row['dtest1in'];
		$data[]=array('dtest1in'=>$dtest1in);
	}

	if($row['dps3file']!='')
	{
		$dps3file=$row['dps3file'];
		$data[]=array('dps3file'=>$dps3file);
	}

	if($row['dtest2in']!='')
	{
		$dtest2in=$row['dtest2in'];
		$data[]=array('dtest2in'=>$dtest2in);
	}

	if($row['dps4file']!='')
	{
		$dps4file=$row['dps4file'];
		$data[]=array('dps4file'=>$dps4file);
	}

	if($row['dtest1ass']!='')
	{
		$dtest1ass=$row['dtest1ass'];
		$data[]=array('dtest1ass'=>$dtest1ass);
	}

	if($row['dps5file']!='')
	{
		$dps5file=$row['dps5file'];
		$data[]=array('dps5file'=>$dps5file);
	}

	if($row['dtest2ass']!='')
	{
		$dtest2ass=$row['dtest2ass'];
		$data[]=array('dtest2ass'=>$dtest2ass);
	}

	if($row['dps6file']!='')
	{
		$dps6file=$row['dps6file'];
		$data[]=array('dps6file'=>$dps6file);
	}

	if($row['deseps']!='')
	{
		$deseps=$row['deseps'];
		$data[]=array('deseps'=>$deseps);
	}

	if($row['dps7file']!='')
	{
		$dps7file=$row['dps7file'];
		$data[]=array('dps7file'=>$dps7file);
	}
	
	$sql1="SELECT * FROM part_b_cat_1_cto WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('ctocourse'=>$row1['ctocourse']);
			$data_doc[]=array('ctotyprlpt'=>$row1['ctotyprlpt']);
			$data_doc[]=array('ctougpg'=>$row1['ctougpg']);
			$data_doc[]=array('ctoclasssemester'=>$row1['ctoclasssemester']);
			$data_doc[]=array('ctohrsweek'=>$row1['ctohrsweek']);
			$data_doc[]=array('ctohrsengaged'=>$row1['ctohrsengaged']);
			$data_doc[]=array('ctomaxhrs'=>$row1['ctomaxhrs']);
			$data_doc[]=array('ctoc'=>$row1['ctoc']);
			$data_doc[]=array('ctofile'=>$row1['ctofile']);

			$data[]=array('part_b_cat_1_cto'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_1_cte WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('ctecourse'=>$row1['ctecourse']);
			$data_doc[]=array('ctetyprlpt'=>$row1['ctetyprlpt']);
			$data_doc[]=array('cteugpg'=>$row1['cteugpg']);
			$data_doc[]=array('cteclasssemester'=>$row1['cteclasssemester']);
			$data_doc[]=array('ctehrsweek'=>$row1['ctehrsweek']);
			$data_doc[]=array('ctehrsengaged'=>$row1['ctehrsengaged']);
			$data_doc[]=array('ctemaxhrs'=>$row1['ctemaxhrs']);
			$data_doc[]=array('ctec'=>$row1['ctec']);
			$data_doc[]=array('ctefile'=>$row1['ctefile']);

			$data[]=array('part_b_cat_1_cte'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_1_dar WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('dara'=>$row1['dara']);
			$data_doc[]=array('darb'=>$row1['darb']);
			$data_doc[]=array('darfile'=>$row1['darfile']);

			$data[]=array('part_b_cat_1_dar'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY II ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sql1="SELECT * FROM part_b_cat_2_ha WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('ha'=>$row1['ha']);
			$data_doc[]=array('hb'=>$row1['hb']);
			$data_doc[]=array('hfile'=>$row1['hfile']);

			$data[]=array('part_b_cat_2_ha'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_2_act WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('ea'=>$row1['ea']);
			$data_doc[]=array('eb'=>$row1['eb']);
			$data_doc[]=array('efile'=>$row1['efile']);

			$data[]=array('part_b_cat_2_act'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_2_exc WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('eca'=>$row1['eca']);
			$data_doc[]=array('ecb'=>$row1['ecb']);
			$data_doc[]=array('ecfile'=>$row1['ecfile']);

			$data[]=array('part_b_cat_2_exc'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_2_c WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('ca'=>$row1['ca']);
			$data_doc[]=array('cb'=>$row1['cb']);
			$data_doc[]=array('cfile'=>$row1['cfile']);

			$data[]=array('part_b_cat_2_c'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY III ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sql1="SELECT * FROM part_b_cat_3 WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result1);
	if($row['phdne']!='')
	{
		$phdne=$row['phdne'];
		$data[]=array('phdne'=>$phdne);
	}

	if($row['phdts']!='')
	{
		$phdts=$row['phdts'];
		$data[]=array('phdts'=>$phdts);
	}

	if($row['phdda']!='')
	{
		$phdda=$row['phdda'];
		$data[]=array('phdda'=>$phdda);
	}

	if($row['phdfile']!='')
	{
		$phdfile=$row['phdfile'];
		$data[]=array('phdfile'=>$phdfile);
	}

	if($row['mtechne']!='')
	{
		$mtechne=$row['mtechne'];
		$data[]=array('mtechne'=>$mtechne);
	}

	if($row['mtechts']!='')
	{
		$mtechts=$row['mtechts'];
		$data[]=array('mtechts'=>$mtechts);
	}

	if($row['mtechda']!='')
	{
		$mtechda=$row['mtechda'];
		$data[]=array('mtechda'=>$mtechda);
	}

	if($row['mtechfile']!='')
	{
		$mtechfile=$row['mtechfile'];
		$data[]=array('mtechfile'=>$mtechfile);
	}

	if($row['btechne']!='')
	{
		$btechne=$row['btechne'];
		$data[]=array('btechne'=>$btechne);
	}

	if($row['btechts']!='')
	{
		$btechts=$row['btechts'];
		$data[]=array('btechts'=>$btechts);
	}

	if($row['btechda']!='')
	{
		$btechda=$row['btechda'];
		$data[]=array('btechda'=>$btechda);
	}

	if($row['btechfile']!='')
	{
		$btechfile=$row['btechfile'];
		$data[]=array('btechfile'=>$btechfile);
	}

	$sql1="SELECT * FROM part_b_cat_3_pp WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('pptitle'=>$row1['pptitle']);
			$data_doc[]=array('ppnpr'=>$row1['ppnpr']);
			$data_doc[]=array('ppisbn'=>$row1['ppisbn']);
			$data_doc[]=array('ppif'=>$row1['ppif']);
			$data_doc[]=array('customRadioInline1'=>$row1['customRadioInline1']);
			$data_doc[]=array('ppnca'=>$row1['ppnca']);
			$data_doc[]=array('ppfile'=>$row1['ppfile']);

			$data[]=array('part_b_cat_3_pp'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_3_ppic WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('pptitleic'=>$row1['pptitleic']);
			$data_doc[]=array('ppnpric'=>$row1['ppnpric']);
			$data_doc[]=array('ppisbnic'=>$row1['ppisbnic']);
			$data_doc[]=array('ppific'=>$row1['ppific']);
			$data_doc[]=array('customRadioInline1ic'=>$row1['customRadioInline1ic']);
			$data_doc[]=array('ppncaic'=>$row1['ppncaic']);
			$data_doc[]=array('pp1file'=>$row1['pp1file']);

			$data[]=array('part_b_cat_3_ppic'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_3_ppinc WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('pptitleinc'=>$row1['pptitleinc']);
			$data_doc[]=array('ppnprinc'=>$row1['ppnprinc']);
			$data_doc[]=array('ppisbnpinc'=>$row1['ppisbnpinc']);
			$data_doc[]=array('ppifinc'=>$row1['ppifinc']);
			$data_doc[]=array('customRadioInline1inc'=>$row1['customRadioInline1inc']);
			$data_doc[]=array('ppncainc'=>$row1['ppncainc']);
			$data_doc[]=array('pp2file'=>$row1['pp2file']);

			$data[]=array('part_b_cat_3_ppinc'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_3_bk WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('pptitlebk'=>$row1['pptitlebk']);
			$data_doc[]=array('ppnprbk'=>$row1['ppnprbk']);
			$data_doc[]=array('ppisbnbk'=>$row1['ppisbnbk']);
			$data_doc[]=array('ppdatebk'=>$row1['ppdatebk']);
			$data_doc[]=array('ppifbk'=>$row1['ppifbk']);
			$data_doc[]=array('customRadioInline1bk'=>$row1['customRadioInline1bk']);
			$data_doc[]=array('ppncabk'=>$row1['ppncabk']);
			$data_doc[]=array('pp3file'=>$row1['pp3file']);

			$data[]=array('part_b_cat_3_bk'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}



	$sql1="SELECT * FROM part_b_cat_3_res WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('ta'=>$row1['ta']);
			$data_doc[]=array('ab'=>$row1['ab']);
			$data_doc[]=array('dc'=>$row1['dc']);
			$data_doc[]=array('gd'=>$row1['gd']);
			$data_doc[]=array('research1file'=>$row1['research1file']);

			$data[]=array('part_b_cat_3_res'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_3_ores WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('tta'=>$row1['tta']);
			$data_doc[]=array('aab'=>$row1['aab']);
			$data_doc[]=array('ddc'=>$row1['ddc']);
			$data_doc[]=array('ggd'=>$row1['ggd']);
			$data_doc[]=array('research2file'=>$row1['research2file']);

			$data[]=array('part_b_cat_3_ores'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_3_cres WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('tca'=>$row1['tca']);
			$data_doc[]=array('acb'=>$row1['acb']);
			$data_doc[]=array('dcc'=>$row1['dcc']);
			$data_doc[]=array('gcd'=>$row1['gcd']);
			$data_doc[]=array('research3file'=>$row1['research3file']);

			$data[]=array('part_b_cat_3_cres'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_3_pip WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('dpi'=>$row1['dpi']);
			$data_doc[]=array('drf'=>$row1['drf']);
			$data_doc[]=array('dfile'=>$row1['dfile']);

			$data[]=array('part_b_cat_3_pip'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY IV~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sql1="SELECT * FROM part_b_cat_4_sem WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('cativ_dp'=>$row1['cativ_dp']);
			$data_doc[]=array('cativ_datee'=>$row1['cativ_datee']);
			$data_doc[]=array('cativ_o'=>$row1['cativ_o']);
			$data_doc[]=array('cativ1file'=>$row1['cativ1file']);

			$data[]=array('part_b_cat_4_sem'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_4_inv WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('cativ1_dp'=>$row1['cativ1_dp']);
			$data_doc[]=array('cativ1_datee'=>$row1['cativ1_datee']);
			$data_doc[]=array('cativ1_o'=>$row1['cativ1_o']);
			$data_doc[]=array('cativ2file'=>$row1['cativ2file']);

			$data[]=array('part_b_cat_4_inv'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	$sql1="SELECT * FROM part_b_cat_4_creds WHERE formId='$formId'";
	$result1=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)>=1)
	{
		$data_doc=array();
		while($row1=mysqli_fetch_assoc($result1))
		{
			$data_doc[]=array('cativ2_dp'=>$row1['cativ2_dp']);
			$data_doc[]=array('cativ2'=>$row1['cativ2']);
			$data_doc[]=array('cativ3file'=>$row1['cativ3file']);

			$data[]=array('part_b_cat_4_creds'=>$data_doc);

			unset($data_doc); 
			$data_doc = array();
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$jsonData=json_encode($data);

	echo $jsonData;

}