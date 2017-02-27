<?php
//$default_topside = '#5f8ac5';
//$default_topstrip = '#FFCC00';
$today = getdate();
if (($today['mon'] == 12) && (($today['mday'] >= 12) && ($today['mday'] <= 25))){
	//include($root.'/support_web/components/snow.php');
	$topside = '#FF0000';
	$topstrip = 'green';
	$dn_logo = 'DatanamicsChristmas05.png';
}elseif (($today['mon'] == 11) && ($today['mday'] <= 24)){
	$topside = 'brown';
	$topstrip = 'orange';
	$dn_logo = 'DatanamicsThanksgiving05.png';
}elseif (($today['mon'] == 2) && ($today['mday'] <= 14)){
	$topside = '#FF0000';
	$topstrip = '#B005AA';
	$dn_logo = 'DatanamicsVday06.png';
}elseif (($today['mon'] == 3) && ($today['mday'] <= 17)){
	$topside = '#026421';
	$topstrip = '#000000';
	$dn_logo = 'DatanamicsStPatricks06.png';
}elseif ($today['mon'] >= 11){
//	include($root.'/support_web/components/snow.php');
	$topside = '#4B7AD6';
	$topstrip = '#A0CAF9';
	$dn_logo = 'DatanamicsWinter05.png';
}elseif (($today['mon'] == 10) && (($today['mday'] >= 1) && ($today['mday'] <= 31))){
	if (($today['hours'] >= 8) && ($today['hours'] <= 20)){
		$topside = '#000000';
		$topstrip = 'orange';
		$dn_logo = 'DatanamicsHalloween05b.png';
	}else{
		$topside = 'orange';
		$topstrip = '#000000';
		$dn_logo = 'DatanamicsHalloween05.png';
	}
}elseif (($today['mon'] == 7) && ($today['mday'] == 4)){
	$topside = '#FF0000';
	$topstrip = '#0000FF';
}else{
	$topside = '#000000';
	$topstrip = '#FF0000';
}
?>