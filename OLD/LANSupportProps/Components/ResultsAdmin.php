<?php
//ini_set ('display_errors', 'on');
$ptype = 'Property Search Page';
$root = 'D:/inetpub/support';
include ($root."/support_web/LANSupportProps/components/session.php");
include ($root."/support_web/style_vals.php");
include($root.'/support_web/LANSupportProps/components/dbcon.php');
include($root.'/support_web/LANSupportProps/components/searchheaderAdmin.php');
$link = ado_connect( $dsn );
if (($today['hours'] >= 8) && ($today['hours'] <= 10)){
}else{
}

if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$name = $vars['name'];
}else if (isset($_POST['name'])){
	$name = $_POST['name'];
}
if ($pcode == ''){
	$pcode = '..';
}
if ($name == ''){
	$name = '..';
}
if ($phone == ''){
	$phone = '..';
}

$order = 'name';
if ($name == '*'){
	$sql = "SELECT * FROM prop ORDER BY ".$order;
	$res = $link->Execute($sql);
}else{
	if ($phone != '..'){
		$sql = "SELECT * FROM prop INNER JOIN contact ON prop.prop = contact.prop WHERE (phone LIKE '%".$phone."%') ORDER by prop.htype, prop.name";
		$res = $link->Execute($sql);
	}else if (($name != '..') && ($pcode != '..')){
		$sql = "SELECT * FROM prop WHERE (name LIKE '%".$name."%') AND (prop LIKE '%".$pcode."%') ORDER BY ".$order;
		$res = $link->Execute($sql);
	}else{
		$sql = "SELECT * FROM prop WHERE (name LIKE '%".$name."%') OR (prop LIKE '%".$pcode."%') ORDER BY ".$order;
		$res = $link->Execute($sql);
	}
}
//echo $sql;
include($root.'/support_web/LANSupportProps/components/Resultsadminbody.php');
?>
<!-- Created/Modified by Jacob Truman , Matthew "Stewart" -->