<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$year=mysqli_real_escape_string($conn,$_POST['year']);

echo $year.",".$userId;
//checking if this user has already begun filling the form before
$alreadybegun=mysqli_real_escape_string($conn,$_POST['alreadybegun']);


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY I  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// part_b_cat_1_cto
$ctocourse=$_POST['ctocourse'];
$ctotyprlpt=$_POST['ctotyprlpt'];
$ctougpg=$_POST['ctougpg'];
$ctoclasssemester=$_POST['ctoclasssemester'];
$ctohrsweek=$_POST['ctohrsweek'];
$ctohrsengaged=$_POST['ctohrsengaged'];
$ctomaxhrs=$_POST['ctomaxhrs'];
$ctoc=$_POST['ctoc'];

// part_b_cat_1_cte
$ctecourse=$_POST['ctecourse'];
$ctetyprlpt=$_POST['ctetyprlpt'];
$cteugpg=$_POST['cteugpg'];
$cteclasssemester=$_POST['cteclasssemester'];
$ctehrsweek=$_POST['ctehrsweek'];
$ctehrsengaged=$_POST['ctehrsengaged'];
$ctemaxhrs=$_POST['ctemaxhrs'];
$ctec=$_POST['ctec'];


$avg_c=mysqli_real_escape_string($conn,$_POST['avg_c']);
$total_c=mysqli_real_escape_string($conn,$_POST['total_c']);


$odpstest1=mysqli_real_escape_string($conn,$_POST['odpstest1']);
$oepstest1=mysqli_real_escape_string($conn,$_POST['oepstest1']);
$odpstest2=mysqli_real_escape_string($conn,$_POST['odpstest2']);
$oepstest2=mysqli_real_escape_string($conn,$_POST['oepstest2']);
$odtest1in=mysqli_real_escape_string($conn,$_POST['odtest1in']);
$oetest1in=mysqli_real_escape_string($conn,$_POST['oetest1in']);
$odtest2in=mysqli_real_escape_string($conn,$_POST['odtest2in']);
$oetest2in=mysqli_real_escape_string($conn,$_POST['oetest2in']);
$odtest1ass=mysqli_real_escape_string($conn,$_POST['odtest1ass']);
$oetest1ass=mysqli_real_escape_string($conn,$_POST['oetest1ass']);
$odtest2ass=mysqli_real_escape_string($conn,$_POST['odtest2ass']);
$oetest2ass=mysqli_real_escape_string($conn,$_POST['oetest2ass']);
$odeseps=mysqli_real_escape_string($conn,$_POST['odeseps']);
$oeeseps=mysqli_real_escape_string($conn,$_POST['oeeseps']);
$odesein=mysqli_real_escape_string($conn,$_POST['odesein']);
$oeesein=mysqli_real_escape_string($conn,$_POST['oeesein']);
$odeseth=mysqli_real_escape_string($conn,$_POST['odeseth']);
$oeeseth=mysqli_real_escape_string($conn,$_POST['oeeseth']);
$odesepo=mysqli_real_escape_string($conn,$_POST['odesepo']);
$oeesepo=mysqli_real_escape_string($conn,$_POST['oeesepo']);
$odesere_ass=mysqli_real_escape_string($conn,$_POST['odesere_ass']);
$oeesere_ass=mysqli_real_escape_string($conn,$_POST['oeesere_ass']);
$odproofr=mysqli_real_escape_string($conn,$_POST['odproofr']);
$oeproofr=mysqli_real_escape_string($conn,$_POST['oeproofr']);
$odopenday=mysqli_real_escape_string($conn,$_POST['odopenday']);
$oeopenday=mysqli_real_escape_string($conn,$_POST['oeopenday']);

$edpstest1=mysqli_real_escape_string($conn,$_POST['edpstest1']);
$eepstest1=mysqli_real_escape_string($conn,$_POST['eepstest1']);
$edpstest2=mysqli_real_escape_string($conn,$_POST['edpstest2']);
$eepstest2=mysqli_real_escape_string($conn,$_POST['eepstest2']);
$edtest1in=mysqli_real_escape_string($conn,$_POST['edtest1in']);
$eetest1in=mysqli_real_escape_string($conn,$_POST['eetest1in']);
$edtest2in=mysqli_real_escape_string($conn,$_POST['edtest2in']);
$eetest2in=mysqli_real_escape_string($conn,$_POST['eetest2in']);
$edtest1ass=mysqli_real_escape_string($conn,$_POST['edtest1ass']);
$eetest1ass=mysqli_real_escape_string($conn,$_POST['eetest1ass']);
$edtest2ass=mysqli_real_escape_string($conn,$_POST['edtest2ass']);
$eetest2ass=mysqli_real_escape_string($conn,$_POST['eetest2ass']);
$edeseps=mysqli_real_escape_string($conn,$_POST['edeseps']);
$eeeseps=mysqli_real_escape_string($conn,$_POST['eeeseps']);
$edesein=mysqli_real_escape_string($conn,$_POST['edesein']);
$eeesein=mysqli_real_escape_string($conn,$_POST['eeesein']);
$edeseth=mysqli_real_escape_string($conn,$_POST['edeseth']);
$eeeseth=mysqli_real_escape_string($conn,$_POST['eeeseth']);
$edesepo=mysqli_real_escape_string($conn,$_POST['edesepo']);
$eeesepo=mysqli_real_escape_string($conn,$_POST['eeesepo']);
$edesere_ass=mysqli_real_escape_string($conn,$_POST['edesere_ass']);
$eeesere_ass=mysqli_real_escape_string($conn,$_POST['eeesere_ass']);
$edproofr=mysqli_real_escape_string($conn,$_POST['edproofr']);
$eeproofr=mysqli_real_escape_string($conn,$_POST['eeproofr']);
$edopenday=mysqli_real_escape_string($conn,$_POST['edopenday']);
$eeopenday=mysqli_real_escape_string($conn,$_POST['eeopenday']);

$avg_ap=mysqli_real_escape_string($conn,$_POST['avg_ap']);

// part_b_cat_1_dar
$dara=$_POST['dara'];
$darb=$_POST['darb'];

$dpstest1=mysqli_real_escape_string($conn,$_POST['dpstest1']);
$dpstest2=mysqli_real_escape_string($conn,$_POST['dpstest2']);
$dtest1in=mysqli_real_escape_string($conn,$_POST['dtest1in']);
$dtest2in=mysqli_real_escape_string($conn,$_POST['dtest2in']);
$dtest1ass=mysqli_real_escape_string($conn,$_POST['dtest1ass']);
$dtest2ass=mysqli_real_escape_string($conn,$_POST['dtest2ass']);
$deseps=mysqli_real_escape_string($conn,$_POST['deseps']);

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY II  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// part_b_cat_2_ha
$ha=$_POST['ha'];
$hb=$_POST['hb'];

// part_b_cat_2_act
$ea=$_POST['ea'];
$eb=$_POST['eb'];

// part_b_cat_2_exc
$eca=$_POST['eca'];
$ecb=$_POST['ecb'];

// part_b_cat_2_c
$ca=$_POST['ca'];
$cb=$_POST['cb'];


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY III  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// part_b_cat_3_pp
$pptitle=$_POST['pptitle'];
$ppnpr=$_POST['ppnpr'];
$ppisbn=$_POST['ppisbn'];
$ppif=$_POST['ppif'];
$customRadioInline1=$_POST['customRadioInline1'];
$ppnca=$_POST['ppnca'];

// part_b_cat_3_ppic
$pptitleic=$_POST['pptitleic'];
$ppnpric=$_POST['ppnpric'];
$ppisbnic=$_POST['ppisbnic'];
$ppific=$_POST['ppific'];
$customRadioInline1ic=$_POST['customRadioInline1ic'];
$ppncaic=$_POST['ppncaic'];

// part_b_cat_3_ppinc
$pptitleinc=$_POST['pptitleinc'];
$ppnprinc=$_POST['ppnprinc'];
$ppisbnpinc=$_POST['ppisbnpinc'];
$ppifinc=$_POST['ppifinc'];
$customRadioInline1inc=$_POST['customRadioInline1inc'];
$ppncainc=$_POST['ppncainc'];

// part_b_cat_3_bk
$pptitlebk=$_POST['pptitlebk'];
$ppnprbk=$_POST['ppnprbk'];
$ppisbnbk=$_POST['ppisbnbk'];
$ppdatebk=$_POST['ppdatebk'];
$ppifbk=$_POST['ppifbk'];
$customRadioInline1bk=$_POST['customRadioInline1bk'];
$ppncabk=$_POST['ppncabk'];


$phdne=mysqli_real_escape_string($conn,$_POST['phdne']);
$phdts=mysqli_real_escape_string($conn,$_POST['phdts']);
$phdda=mysqli_real_escape_string($conn,$_POST['phdda']);
$mtechne=mysqli_real_escape_string($conn,$_POST['mtechne']);
$mtechts=mysqli_real_escape_string($conn,$_POST['mtechts']);
$mtechda=mysqli_real_escape_string($conn,$_POST['mtechda']);
$btechne=mysqli_real_escape_string($conn,$_POST['btechne']);
$btechts=mysqli_real_escape_string($conn,$_POST['btechts']);
$btechda=mysqli_real_escape_string($conn,$_POST['btechda']);

// part_b_cat_3_res
$ta=$_POST['ta'];
$ab=$_POST['ab'];
$dc=$_POST['dc'];
$gd=$_POST['gd'];

// part_b_cat_3_ores
$tta=$_POST['tta'];
$aab=$_POST['aab'];
$ddc=$_POST['ddc'];
$ggd=$_POST['ggd'];

// part_b_cat_3_cres
$tca=$_POST['tca'];
$acb=$_POST['acb'];
$dcc=$_POST['dcc'];
$gcd=$_POST['gcd'];

// part_b_cat_3_pip
$dpi=$_POST['dpi'];
$drf=$_POST['drf'];

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~




// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY IV  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// part_b_cat_4_sem
$cativ_dp=$_POST['cativ_dp'];
$cativ_datee=$_POST['cativ_datee'];
$cativ_o=$_POST['cativ_o'];

// part_b_cat_4_inv
$cativ1_dp=$_POST['cativ1_dp'];
$cativ1_datee=$_POST['cativ1_datee'];
$cativ1_o=$_POST['cativ1_o'];

// part_b_cat_4_creds
$cativ2_dp=$_POST['cativ2_dp'];
$cativ2=$_POST['cativ2'];

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


// echo $institute.','.$ugpg.','.$customRadioInline1.','.$nameofdegree;
$echo=null;
if($alreadybegun==1)
{
	//if already begun then update data
	// $sql="UPDATE part_a_table SET faculty_name='$faculty_name',ecode='$ecode',praddr='$praddr',peaddr='$peaddr',email='$email',mobileno='$mobileno',highq='$highq',dob='$dob',desi='$desi',nameo='$nameo',pdesi='$pdesi',dojkjsce='$dojkjsce',pscale='$pscale',pbg='$pbg',lastdesisel='$lastdesisel',promowef='$promowef',cscales='$cscales',cbasics='$cbasics',lastdesicas='$lastdesicas',promowefcas='$promowefcas',cscalecas='$cscalecas',cbasiccas='$cbasiccas',customRadioInline1='$customRadioInline1',nameofdegree='$nameofdegree',institute='$institute',ugpg='$ugpg' WHERE year='$year' AND faculty_id='$userId'";
	// $result=mysqli_query($conn,$sql);

	// $sql3="SELECT id FROM part_a_table WHERE year='$year' AND faculty_id='$userId'";
	// $result3=mysqli_query($conn,$sql3);
	// $row=mysqli_fetch_assoc($result3);
	// $formId=$row['id'];

	// for($i=0;$i<sizeof($srno);$i++)
	// {

	// 	$sql2="SELECT id FROM part_a_doc WHERE formId='$formId' AND srno='$srno[$i]'";
	// 	$result2=mysqli_query($conn,$sql2);
	// 	if(mysqli_num_rows($result2)==0)
	// 	{
	// 		$sql1="INSERT INTO part_a_doc (formId,srno,course,days,agency) VALUES ('$formId','$srno[$i]','$course[$i]','$days[$i]','$agency[$i]')";
	// 		$result1=mysqli_query($conn,$sql1);
	// 	}
		
	// } 

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 1 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sql="SELECT id FROM part_b_table WHERE year='$year' AND facultyId='$userId'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$formId=mysqli_real_escape_string($conn,$row['id']);

	$sqlcat1="UPDATE part_b_cat_1 SET avg_c = '$avg_c', total_c = '$total_c', odpstest1 = '$odpstest1', oepstest1 = '$oepstest1', odpstest2 = '$odpstest2', oepstest2 = '$oepstest2', odtest1in = '$odtest1in', oetest1in = '$oetest1in', odtest2in = '$odtest2in', oetest2in = '$oetest2in', odtest1ass = '$odtest1ass', oetest1ass = '$oetest1ass', odtest2ass = '$odtest2ass', oetest2ass = '$oetest2ass', odeseps = '$odeseps', oeeseps = '$oeeseps', odesein = '$odesein', oeesein = '$oeesein', odeseth = '$odeseth', oeeseth = '$oeeseth', odesepo = '$odesepo', oeesepo = '$oeesepo', odesere_ass = '$odesere_ass', oeesere_ass = '$oeesere_ass', odproofr = '$odproofr', oeproofr = '$oeproofr', odopenday = '$odopenday', oeopenday = '$oeopenday', edpstest1 = '$edpstest1', eepstest1 = '$eepstest1', edpstest2 = '$edpstest2', eepstest2 = '$eepstest2', edtest1in = '$edtest1in', eetest1in = '$eetest1in', edtest2in = '$edtest2in', eetest2in = '$eetest2in', edtest1ass = '$edtest1ass', eetest1ass = '$eetest1ass', edtest2ass = '$edtest2ass', eetest2ass = '$eetest2ass', edeseps = '$edeseps', eeeseps = '$eeeseps', edesein = '$edesein', eeesein = '$eeesein', edeseth = '$edeseth', eeeseth = '$eeeseth', edesepo = '$edesepo', eeesepo = '$eeesepo', edesere_ass = '$edesere_ass', eeesere_ass = '$eeesere_ass', edproofr = '$edproofr', eeproofr = '$eeproofr', edopenday = '$edopenday', eeopenday = '$eeopenday', avg_ap = '$avg_ap', dpstest1 = '$dpstest1', dpstest2 = '$dpstest2', dtest1in = '$dtest1in', dtest2in = '$dtest2in', dtest1ass = '$dtest1ass', dtest2ass = '$dtest2ass', deseps = '$deseps' WHERE formId='$formId'";
	$resultcat1=mysqli_query($conn,$sqlcat1);

	

	//part_b_cat_1_cto
	$sqlx="DELETE FROM part_b_cat_1_cto WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($i=0;$i<sizeof($ctocourse);$i++)
	{
		
		$sql1="INSERT INTO part_b_cat_1_cto (formId, ctocourse, ctotyprlpt, ctougpg, ctoclasssemester, ctohrsweek, ctohrsengaged, ctomaxhrs, ctoc) VALUES ('$formId', '$ctocourse[$i]', '$ctotyprlpt[$i]', '$ctougpg[$i]', '$ctoclasssemester[$i]', '$ctohrsweek[$i]', '$ctohrsengaged[$i]', '$ctomaxhrs[$i]', '$ctoc[$i]')";
		$result1=mysqli_query($conn,$sql1);
		
	}

	$sqlx="DELETE FROM part_b_cat_1_cte WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($j=0;$j<sizeof($ctecourse);$j++)
	{	
		
		$sql2="INSERT INTO part_b_cat_1_cte (formId, ctecourse, ctetyprlpt, cteugpg, cteclasssemester, ctehrsweek, ctehrsengaged, ctemaxhrs, ctec) VALUES ('$formId','$ctecourse[$j]', '$ctetyprlpt[$j]', '$cteugpg[$j]', '$cteclasssemester[$j]', '$ctehrsweek[$j]', '$ctehrsengaged[$j]', '$ctemaxhrs[$j]', '$ctec[$j]')";
		$result2=mysqli_query($conn,$sql2);
		
	}

	$sqlx="DELETE FROM part_b_cat_1_dar WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($k=0;$k<sizeof($dara);$k++)
	{
		
		$sql3="INSERT INTO part_b_cat_1_dar (formId, dara, darb) VALUES ('$formId','$dara[$k]', '$darb[$k]')";
		$result3=mysqli_query($conn,$sql3);
		
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 2 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


	// $sqlcat2="INSERT INTO part_b_cat_2 (formId) VALUES ('$formId')";
	// $resultcat2=mysqli_query($conn,$sqlcat2);

	$sqlx="DELETE FROM part_b_cat_2_ha WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($l=0;$l<sizeof($ha);$l++)
	{		
		
		$sql4="INSERT INTO part_b_cat_2_ha (formId, ha, hb) VALUES ('$formId','$ha[$l]', '$hb[$l]')";
		$result4=mysqli_query($conn,$sql4);
		
	}

	$sqlx="DELETE FROM part_b_cat_2_act WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($m=0;$m<sizeof($ea);$m++)
	{		
		
		$sql5="INSERT INTO part_b_cat_2_act (formId, ea, eb) VALUES ('$formId','$ea[$m]', '$eb[$m]')";
		$result5=mysqli_query($conn,$sql5);
		
	}

	$sqlx="DELETE FROM part_b_cat_2_exc WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($n=0;$n<sizeof($eca);$n++)
	{	
		
		$sql6="INSERT INTO part_b_cat_2_exc (formId, eca, ecb) VALUES ('$formId','$eca[$n]', '$ecb[$n]')";
		$result6=mysqli_query($conn,$sql6);
		
	}

	$sqlx="DELETE FROM part_b_cat_2_c WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($o=0;$o<sizeof($ca);$o++)
	{

		$sql7="INSERT INTO part_b_cat_2_c (formId, ca, cb) VALUES ('$formId','$ca[$o]', '$cb[$o]')";
		$result7=mysqli_query($conn,$sql7);
		
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 3 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sqlcat3="INSERT INTO part_b_cat_3 (formId, phdne, phdts, phdda, mtechne, mtechts, mtechda, btechne, btechts, btechda) VALUES ('$formId', '$phdne', '$phdts', '$phdda', '$mtechne', '$mtechts', '$mtechda', '$btechne', '$btechts', '$btechda')";
	$resultcat3=mysqli_query($conn,$sqlcat3);

	$sqlx="DELETE FROM part_b_cat_3_pp WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($p=0;$p<sizeof($pptitle);$p++)
	{
		
		$sql8="INSERT INTO part_b_cat_3_pp (formId, pptitle, ppnpr, ppisbn, ppif, customRadioInline1, ppnca) VALUES ('$formId', '$pptitle[$p]', '$ppnpr[$p]', '$ppisbn[$p]', '$ppif[$p]', '$customRadioInline1[$p]', '$ppnca[$p]')";
		$result8=mysqli_query($conn,$sql8);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_ppic WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($q=0;$q<sizeof($pptitleic);$q++)
	{
				
		$sql9="INSERT INTO part_b_cat_3_ppic (formId, pptitleic, ppnpric, ppisbnic, ppific, customRadioInline1ic, ppncaic) VALUES ('$formId', '$pptitleic[$q]', '$ppnpric[$q]', '$ppisbnic[$q]', '$ppific[$q]', '$customRadioInline1ic[$q]', '$ppncaic[$q]')";
		$result9=mysqli_query($conn,$sql9);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_ppinc WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($r=0;$r<sizeof($pptitleinc);$r++)
	{		
		
		$sql10="INSERT INTO part_b_cat_3_ppinc (formId, pptitleinc, ppnprinc, ppisbnpinc, ppifinc, customRadioInline1inc, ppncainc) VALUES ('$formId', '$pptitleinc[$r]', '$ppnprinc[$r]', '$ppisbnpinc[$r]', '$ppifinc[$r]', '$customRadioInline1inc[$r]', '$ppncainc[$r]')";
		$result8=mysqli_query($conn,$sql10);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_bk WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($s=0;$s<sizeof($pptitlebk);$s++)
	{
				
		$sql11="INSERT INTO part_b_cat_3_bk (formId, pptitlebk, ppnprbk, ppisbnbk, ppdatebk, ppifbk, customRadioInline1bk, ppncabk) VALUES ('$formId', '$pptitlebk[$s]', '$ppnprbk[$s]', '$ppisbnbk[$s]', '$ppdatebk[$s]', '$ppifbk[$s]', '$customRadioInline1bk[$s]', '$ppncabk[$s]')";
		$result11=mysqli_query($conn,$sql11);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_res WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($t=0;$t<sizeof($ta);$t++)
	{
				
		$sql12="INSERT INTO part_b_cat_3_res (formId, ta, ab, dc, gd) VALUES ('$formId', '$ta[$t]', '$ab[$t]', '$dc[$t]', '$gd[$t]')";
		$result12=mysqli_query($conn,$sql12);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_ores WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($u=0;$u<sizeof($tta);$u++)
	{
				
		$sql13="INSERT INTO part_b_cat_3_ores (formId, tta, aab, ddc, ggd) VALUES ('$formId', '$tta[$u]', '$aab[$u]', '$ddc[$u]', '$ggd[$u]')";
		$result13=mysqli_query($conn,$sql13);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_cres WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($v=0;$v<sizeof($tca);$v++)
	{
				
		$sql14="INSERT INTO part_b_cat_3_cres (formId, tca, acb, dcc, gcd) VALUES ('$formId', '$tca[$v]', '$acb[$v]', '$dcc[$v]', '$gcd[$v]')";
		$result14=mysqli_query($conn,$sql14);
		
	}

	$sqlx="DELETE FROM part_b_cat_3_pip WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($w=0;$w<sizeof($dpi);$w++)
	{
				
		$sql15="INSERT INTO part_b_cat_3_pip (formId, dpi, drf) VALUES ('$formId', '$dpi[$w]', '$drf[$w]')";
		$result15=mysqli_query($conn,$sql15);
		
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 4 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


	$sqlcat4="INSERT INTO part_b_cat_4 (formId) VALUES ('$formId')";
	$resultcat4=mysqli_query($conn,$sqlcat4);

	$sqlx="DELETE FROM part_b_cat_4_sem WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($x=0;$x<sizeof($cativ_dp);$x++)
	{
				
		$sql16="INSERT INTO part_b_cat_4_sem (formId, cativ_dp, cativ_datee, cativ_o) VALUES ('$formId', '$cativ_dp[$x]', '$cativ_datee[$x]', '$cativ_o[$x]')";
		$result16=mysqli_query($conn,$sql16);
		
	}

	$sqlx="DELETE FROM part_b_cat_4_inv WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($y=0;$y<sizeof($cativ1_dp);$y++)
	{
				
		$sql18="INSERT INTO part_b_cat_4_inv (formId, cativ1_dp, cativ1_datee, cativ1_o) VALUES ('$formId', '$cativ1_dp[$y]', '$cativ1_datee[$y]', '$cativ1_o[$y]')";
		$result18=mysqli_query($conn,$sql18);
		
	}

	$sqlx="DELETE FROM part_b_cat_4_creds WHERE formId='$formId'";
	$resultx=mysqli_query($conn,$sqlx);
	for($z=0;$z<sizeof($cativ2_dp);$z++)
	{
				
		$sql19="INSERT INTO part_b_cat_4_creds (formId, cativ2_dp, cativ2) VALUES ('$formId', '$cativ2_dp[$z]', '$cativ2[$z]')";
		$result19=mysqli_query($conn,$sql19);
		
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

}
else
{

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~`CATEGORY 1 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sql="INSERT INTO part_b_table (year, facultyId) VALUES ('$year', '$userId')";
	$result=mysqli_query($conn,$sql);

	$formId=mysqli_insert_id($conn);

	$sqlcat1="INSERT INTO part_b_cat_1 (formId, avg_c, total_c, odpstest1, oepstest1, odpstest2, oepstest2, odtest1in, oetest1in, odtest2in, oetest2in, odtest1ass, oetest1ass, odtest2ass, oetest2ass, odeseps, oeeseps, odesein, oeesein, odeseth, oeeseth, odesepo, oeesepo, odesere_ass, oeesere_ass, odproofr, oeproofr, odopenday, oeopenday, edpstest1, eepstest1, edpstest2, eepstest2, edtest1in, eetest1in, edtest2in, eetest2in, edtest1ass, eetest1ass, edtest2ass, eetest2ass, edeseps, eeeseps, edesein, eeesein, edeseth, eeeseth, edesepo, eeesepo, edesere_ass, eeesere_ass, edproofr, eeproofr, edopenday, eeopenday, avg_ap, dpstest1, dpstest2, dtest1in, dtest2in, dtest1ass, dtest2ass, deseps) VALUES ('$formId', '$avg_c', '$total_c', '$odpstest1', '$oepstest1', '$odpstest2', '$oepstest2', '$odtest1in', '$oetest1in', '$odtest2in', '$oetest2in', '$odtest1ass', '$oetest1ass', '$odtest2ass', '$oetest2ass', '$odeseps', '$oeeseps', '$odesein', '$oeesein', '$odeseth', '$oeeseth', '$odesepo', '$oeesepo', '$odesere_ass', '$oeesere_ass', '$odproofr', '$oeproofr', '$odopenday', '$oeopenday', '$edpstest1', '$eepstest1', '$edpstest2', '$eepstest2', '$edtest1in', '$eetest1in', '$edtest2in', '$eetest2in', '$edtest1ass', '$eetest1ass', '$edtest2ass', '$eetest2ass', '$edeseps', '$eeeseps', '$edesein', '$eeesein', '$edeseth', '$eeeseth', '$edesepo', '$eeesepo', '$edesere_ass', '$eeesere_ass', '$edproofr', '$eeproofr', '$edopenday', '$eeopenday', '$avg_ap','$dpstest1','$dpstest2','$dtest1in','$dtest2in','$dtest1ass','$dtest2ass','$deseps')";
	$resultcat1=mysqli_query($conn,$sqlcat1);

	

	//part_b_cat_1_cto
	for($i=0;$i<sizeof($ctocourse);$i++)
	{
		if($ctocourse[$i]!='')
		{
			$sql1="INSERT INTO part_b_cat_1_cto (formId, ctocourse, ctotyprlpt, ctougpg, ctoclasssemester, ctohrsweek, ctohrsengaged, ctomaxhrs, ctoc) VALUES ('$formId', '$ctocourse[$i]', '$ctotyprlpt[$i]', '$ctougpg[$i]', '$ctoclasssemester[$i]', '$ctohrsweek[$i]', '$ctohrsengaged[$i]', '$ctomaxhrs[$i]', '$ctoc[$i]')";
			$result1=mysqli_query($conn,$sql1);
		}
	}

	for($j=0;$j<sizeof($ctecourse);$j++)
	{
		if($ctecourse[$j]!='')
		{
			$sql2="INSERT INTO part_b_cat_1_cte (formId, ctecourse, ctetyprlpt, cteugpg, cteclasssemester, ctehrsweek, ctehrsengaged, ctemaxhrs, ctec) VALUES ('$formId','$ctecourse[$j]', '$ctetyprlpt[$j]', '$cteugpg[$j]', '$cteclasssemester[$j]', '$ctehrsweek[$j]', '$ctehrsengaged[$j]', '$ctemaxhrs[$j]', '$ctec[$j]')";
			$result2=mysqli_query($conn,$sql2);
		}
	}

	for($k=0;$k<sizeof($dara);$k++)
	{
		if($dara[$k]!='')
		{
			$sql3="INSERT INTO part_b_cat_1_dar (formId, dara, darb) VALUES ('$formId','$dara[$k]', '$darb[$k]')";
			$result3=mysqli_query($conn,$sql3);
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 2 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


	$sqlcat2="INSERT INTO part_b_cat_2 (formId) VALUES ('$formId')";
	$resultcat2=mysqli_query($conn,$sqlcat2);

	for($l=0;$l<sizeof($ha);$l++)
	{
		if($ha[$l]!='')
		{
			$sql4="INSERT INTO part_b_cat_2_ha (formId, ha, hb) VALUES ('$formId','$ha[$l]', '$hb[$l]')";
			$result4=mysqli_query($conn,$sql4);
		}
	}

	for($m=0;$m<sizeof($ea);$m++)
	{
		if($ea[$m]!='')
		{
			$sql5="INSERT INTO part_b_cat_2_act (formId, ea, eb) VALUES ('$formId','$ea[$m]', '$eb[$m]')";
			$result5=mysqli_query($conn,$sql5);
		}
	}

	for($n=0;$n<sizeof($eca);$n++)
	{
		if($eca[$n]!='')
		{
			$sql6="INSERT INTO part_b_cat_2_exc (formId, eca, ecb) VALUES ('$formId','$eca[$n]', '$ecb[$n]')";
			$result6=mysqli_query($conn,$sql6);
		}
	}

	for($o=0;$o<sizeof($ca);$o++)
	{
		if($ca[$o]!='')
		{
			$sql7="INSERT INTO part_b_cat_2_c (formId, ca, cb) VALUES ('$formId','$ca[$o]', '$cb[$o]')";
			$result7=mysqli_query($conn,$sql7);
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 3 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$sqlcat3="INSERT INTO part_b_cat_3 (formId, phdne, phdts, phdda, mtechne, mtechts, mtechda, btechne, btechts, btechda) VALUES ('$formId', '$phdne', '$phdts', '$phdda', '$mtechne', '$mtechts', '$mtechda', '$btechne', '$btechts', '$btechda')";
	$resultcat3=mysqli_query($conn,$sqlcat3);

	for($p=0;$p<sizeof($pptitle);$p++)
	{
		if($pptitle[$p]!='')
		{
			$sql8="INSERT INTO part_b_cat_3_pp (formId, pptitle, ppnpr, ppisbn, ppif, customRadioInline1, ppnca) VALUES ('$formId', '$pptitle[$p]', '$ppnpr[$p]', '$ppisbn[$p]', '$ppif[$p]', '$customRadioInline1[$p]', '$ppnca[$p]')";
			$result8=mysqli_query($conn,$sql8);
		}
	}

	for($q=0;$q<sizeof($pptitleic);$q++)
	{
		if($pptitleic[$q]!='')
		{
			$sql9="INSERT INTO part_b_cat_3_ppic (formId, pptitleic, ppnpric, ppisbnic, ppific, customRadioInline1ic, ppncaic) VALUES ('$formId', '$pptitleic[$q]', '$ppnpric[$q]', '$ppisbnic[$q]', '$ppific[$q]', '$customRadioInline1ic[$q]', '$ppncaic[$q]')";
			$result9=mysqli_query($conn,$sql9);
		}
	}

	for($r=0;$r<sizeof($pptitleinc);$r++)
	{
		if($pptitleinc[$r]!='')
		{
			$sql10="INSERT INTO part_b_cat_3_ppinc (formId, pptitleinc, ppnprinc, ppisbnpinc, ppifinc, customRadioInline1inc, ppncainc) VALUES ('$formId', '$pptitleinc[$r]', '$ppnprinc[$r]', '$ppisbnpinc[$r]', '$ppifinc[$r]', '$customRadioInline1inc[$r]', '$ppncainc[$r]')";
			$result8=mysqli_query($conn,$sql10);
		}
	}

	for($s=0;$s<sizeof($pptitlebk);$s++)
	{
		if($pptitlebk[$s]!='')
		{
			$sql11="INSERT INTO part_b_cat_3_bk (formId, pptitlebk, ppnprbk, ppisbnbk, ppdatebk, ppifbk, customRadioInline1bk, ppncabk) VALUES ('$formId', '$pptitlebk[$s]', '$ppnprbk[$s]', '$ppisbnbk[$s]', '$ppdatebk[$s]', '$ppifbk[$s]', '$customRadioInline1bk[$s]', '$ppncabk[$s]')";
			$result11=mysqli_query($conn,$sql11);
		}
	}

	for($t=0;$t<sizeof($ta);$t++)
	{
		if($ta[$t]!='')
		{
			$sql12="INSERT INTO part_b_cat_3_res (formId, ta, ab, dc, gd) VALUES ('$formId', '$ta[$t]', '$ab[$t]', '$dc[$t]', '$gd[$t]')";
			$result12=mysqli_query($conn,$sql12);
		}
	}

	for($u=0;$u<sizeof($tta);$u++)
	{
		if($tta[$u]!='')
		{
			$sql13="INSERT INTO part_b_cat_3_ores (formId, tta, aab, ddc, ggd) VALUES ('$formId', '$tta[$u]', '$aab[$u]', '$ddc[$u]', '$ggd[$u]')";
			$result13=mysqli_query($conn,$sql13);
		}
	}

	for($v=0;$v<sizeof($tca);$v++)
	{
		if($tca[$v]!='')
		{
			$sql14="INSERT INTO part_b_cat_3_cres (formId, tca, acb, dcc, gcd) VALUES ('$formId', '$tca[$v]', '$acb[$v]', '$dcc[$v]', '$gcd[$v]')";
			$result14=mysqli_query($conn,$sql14);
		}
	}

	for($w=0;$w<sizeof($dpi);$w++)
	{
		if($dpi[$w]!='')
		{
			$sql15="INSERT INTO part_b_cat_3_pip (formId, dpi, drf) VALUES ('$formId', '$dpi[$w]', '$drf[$w]')";
			$result15=mysqli_query($conn,$sql15);
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CATEGORY 4 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


	$sqlcat4="INSERT INTO part_b_cat_4 (formId) VALUES ('$formId')";
	$resultcat4=mysqli_query($conn,$sqlcat4);

	for($x=0;$x<sizeof($cativ_dp);$x++)
	{
		if($cativ_dp[$x]!='')
		{
			$sql16="INSERT INTO part_b_cat_4_sem (formId, cativ_dp, cativ_datee, cativ_o) VALUES ('$formId', '$cativ_dp[$x]', '$cativ_datee[$x]', '$cativ_o[$x]')";
			$result16=mysqli_query($conn,$sql16);
		}
	}

	for($y=0;$y<sizeof($cativ1_dp);$y++)
	{
		if($cativ1_dp[$y]!='')
		{
			$sql18="INSERT INTO part_b_cat_4_inv (formId, cativ1_dp, cativ1_datee, cativ1_o) VALUES ('$formId', '$cativ1_dp[$y]', '$cativ1_datee[$y]', '$cativ1_o[$y]')";
			$result18=mysqli_query($conn,$sql18);
		}
	}

	for($z=0;$z<sizeof($cativ2_dp);$z++)
	{
		if($cativ2_dp[$z]!='')
		{
			$sql19="INSERT INTO part_b_cat_4_creds (formId, cativ2_dp, cativ2) VALUES ('$formId', '$cativ2_dp[$z]', '$cativ2[$z]')";
			$result19=mysqli_query($conn,$sql19);
		}
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

}

header('LOCATION: partB.php?id='.$userId.'&year='.$year.'&updated=1');
// echo 'success';