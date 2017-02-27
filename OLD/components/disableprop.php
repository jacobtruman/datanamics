<?php
$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');

if (isset($_POST['prop'])){
	$prop = $_POST['prop'];
}else if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$prop = $vars['prop'];
}

$link = ado_connect( $dsn );

if (isset($prop) && ($prop != '')){
	$sql = "UPDATE prop SET active = 'No', mdate = '".date('m/d/Y H:i')."' WHERE prop = '".$prop."'";
	//echo $sql;
	$res = $link->Execute($sql);
}

ado_free_result( $res );
ado_close( $link );
?>