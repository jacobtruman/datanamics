<?php
$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');

$link = ado_connect( $dsn );

$sql = "SELECT name FROM prop where (prop = '".$prop."')";
$res = $link->Execute($sql);

for ($i = 0; $i < ado_num_fields($res); $i++){
	$db_field = ado_field_name($res, $i);
	$$db_field = $res->Fields[$db_field]->Value;
}

ado_free_result( $res );
ado_close( $link );
?>