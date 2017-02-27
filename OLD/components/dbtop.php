<?php
include($root.'/support_web/components/dbcon.php');

if (!empty($_POST)){

	$postkeys = array_keys($_POST);
	for ($i = 0; $i < count($_POST); $i++){
		$$postkeys[$i] = $_POST[$postkeys[$i]];
	}

}else if (!empty($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);

	$varkeys = array_keys($vars);
	for ($i = 0; $i < count($varkeys); $i++){
		$$varkeys[$i] = $vars[$varkeys[$i]];
	}
}

if (isset($prop)){

$link = ado_connect( $dsn , $dtype);
$sql = "SELECT * FROM prop where (prop = '".$prop."')";
$res = $link->Execute($sql);

for ($i = 0; $i < ado_num_fields($res); $i++){
	$db_field = ado_field_name($res, $i);
	$$db_field = $res->Fields[$db_field]->Value;
}

include ($root."/support_web/components/pswdFix.php");

ado_free_result( $res );
ado_close( $link );

if ($rtrsup == 'Yes'){
	$rctype = 'telnet:';
	$target = '_parent';
}else{
	$rctype = $ping;
	$target = '_blank';
}

$pover = '/support_web/forms/overview.php';
$ipinfo = '/support_web/forms/ipinfo.php';
$cinfo = '/support_web/forms/ContactInformation.php?prop='.$prop;
$notespage = '/support_web/forms/notes2.php';

}
include $root."/support_web/components/imgs.php";
?>