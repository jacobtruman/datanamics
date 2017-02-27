<?php
//ini_set ('display_errors', 'on');
set_time_limit(900);
$ptype = 'Property Search Page';
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");
include ($root."/support_web/style_vals.php");
include_once($root.'/support_web/components/dbcon.php');
include($root.'/support_web/components/searchheaderAdmin.php');
include($root.'/support_web/vargen.php');
$link = ado_connect( $dsn );

if ($shtype == ''){
	$shtype = '..';
}
if ($pcode == ''){
	$pcode = '..';
}
if ($gip == ''){
	$gip = '..';
}
if ($rtr == ''){
	$rtr = '..';
}
if ($name == ''){
	$name = '..';
}
if ($addr == ''){
	$addr = '..';
}
if ($special == ''){
	$special = '..';
}
if ($phone == ''){
	$phone = '..';
}

$order = 'prop.htype, prop.name';
$y = 1;
if (strtoupper($name) == 'UPTODATE'){
	$sql = "SELECT * FROM prop WHERE (uptodate = 'No') OR (uptodate = 'New') OR (uptodate = 'Old') ORDER BY uptodate, mdate, ".$order;
}else if (strtoupper($name) == 'STATUSDOWN'){
	$sql = "SELECT * FROM prop WHERE (status = 'Down')ORDER BY ".$order;
}else if ((strtoupper($name) == 'NOCOORDS') || (strtoupper($special) == 'NOCOORDS')){
	$sql = "SELECT * FROM prop WHERE prop IN (SELECT prop FROM contact WHERE (lat = '')) ORDER BY ".$order;
}else if ((strtoupper($name) == 'ALLTRANSITIONED') || (strtoupper($special) == 'ALLTRANSITIONED')){
	$sql = "SELECT * FROM prop WHERE (poc = 'Yes') ORDER BY ".$order;
}else if ((strtoupper($name) == 'NOTINNAGIOS') || (strtoupper($special) == 'NOTINNAGIOS')){
	$sql = "SELECT * FROM prop WHERE (pnagios = 'No') AND (poc = 'No') ORDER BY ".$order;
}else if ((strtoupper($name) == 'PPASSWD') || (strtoupper($special) == 'PPASSWD')){
	$sql = "SELECT * FROM prop ORDER BY ".$order;
	$y = 2;
}else if ((strtoupper($name) == 'ALL11OS') || (strtoupper($special) == '11WIRELESS')){
	$sql = "SELECT * FROM prop INNER JOIN overview ON prop.prop = overview.prop WHERE overview.bmethod LIKE '%Eleven Wireless%' ORDER by prop.htype, prop.name";
	$y = 6;
}else if (strtoupper($name) == 'ALL11OSON'){
	$EOSFlag = "On";
	$y = 6;
}else if (strtoupper($name) == 'ALL11OSOFF'){
	$EOSFlag = "Off";
	$y = 6;
}else if (strtoupper($name) == 'ALLHAMPTONON'){
	$AAAFlag = "On";
	$y = 4;
}else if (strtoupper($name) == 'ALLHAMPTONOFF'){
	$AAAFlag = "Off";
	$y = 4;
}else if ((strtoupper($name) == 'ISPATT') || (strtoupper($special) == 'ISPATT')){
	$ispwhere = "isp_name LIKE '%AT&T%'";
	$y = 10;
}else if ((strtoupper($name) == 'NOISP') || (strtoupper($special) == 'NOISP')){
	$ispwhere = "isp_name IS NULL";
	$y = 10;
}else if ((strtoupper($name) == 'ALLUSG') || (strtoupper($special) == 'ALLUSG')){
	$gtype = 'Nomadix';
	$y = 3;
}else if ((strtoupper($name) == 'ALLIP3') || (strtoupper($special) == 'ALLIP3')){
	$gtype = 'IP3';
	$y = 3;
}else if ((strtoupper($name) == 'ALLSOLUTIONIP') || (strtoupper($special) == 'ALLSOLUTIONIP')){
	$gtype = 'Solution IP';
	$y = 3;
}else if (strtoupper($name) == 'DNFUNNY'){
	$y = 100;
}else{
	if (($name == '*') || ($special == '*')){
		$sql = "SELECT * FROM prop ORDER BY ".$order;
	}else if ($phone != '..'){
		$sql = "SELECT * FROM prop INNER JOIN contact ON prop.prop = contact.prop WHERE (phone LIKE '%".$phone."%') ORDER by prop.htype, prop.name";
	}else if ($addr != '..'){
		$sql = "SELECT * FROM prop INNER JOIN contact ON prop.prop = contact.prop WHERE (staddr LIKE '%".$addr."%') ORDER by prop.htype, prop.name";
	}else if (($shtype != '..') && ($name != '..') && ($pcode != '..')){
		$sql = "SELECT * FROM prop WHERE (htype = '".$shtype."') AND ((name LIKE '%".$name."%') OR (htype LIKE '%".$name."%')) AND (prop LIKE '%".$pcode."%') AND (gateway LIKE '%".$gip."%') AND (rtr LIKE '%".$rtr."%') ORDER BY ".$order;
	}else{
		$sql = "SELECT * FROM prop WHERE (htype = '".$shtype."') OR ((name LIKE '%".$name."%') OR (htype LIKE '%".$name."%')) OR (prop LIKE '%".$pcode."%') OR (gateway LIKE '%".$gip."%') OR (rtr LIKE '%".$rtr."%') ORDER BY ".$order;
	}
}
if ($y == 2){
	$res = $link->Execute($sql);
	include($root.'/support_web/forms/ResultsPW.php');
}else if ($y == 3){
	$sql = "SELECT * FROM prop INNER JOIN overview ON prop.prop = overview.prop WHERE gtway_type LIKE '%".$gtype."%' ORDER by ".$order;
	$res = $link->Execute($sql);
	include($root.'/support_web/forms/ResultsGateway.php');
}else if ($y == 4){
	$sql = "SELECT * FROM prop WHERE htype LIKE '%Hampton%' AND active = 'Yes' ORDER BY ".$order;
	$res = $link->Execute($sql);
	include($root.'/support_web/forms/hamptonaaa.php');
}else if ($y == 6){
	$sql = "SELECT * FROM prop INNER JOIN overview ON prop.prop = overview.prop WHERE (prop.poc = 'No') AND (overview.bmethod LIKE '%Eleven Wireless%') ORDER by ".$order;
	$res = $link->Execute($sql);
	include($root.'/support_web/forms/Results11OS.php');
}else if ($y == 10){
	$sql = "SELECT * FROM prop INNER JOIN ipscope ON prop.prop = ipscope.prop WHERE ".$ispwhere." ORDER by ".$order;
	$res = $link->Execute($sql);
	include($root.'/support_web/forms/ResultsISP.php');
}else if ($y == 100){
	//$res = $link->Execute($sql);
	//include($root.'/support_web/dnfunny.php');
	include('dnfunny.php');
}else{
	$res = $link->Execute($sql);
	include($root.'/support_web/forms/results_body.php');
}
