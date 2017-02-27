<?php
//ini_set ('display_errors', 'on');
$prop = $_POST['prop'];

$link = ado_connect( $dsn );

$sql = "SELECT * FROM equipment where (prop = '".$prop."')";
//echo $sql;
$res = $link->Execute($sql);

for ($i = 0; $i < ado_num_fields($res); $i++){
	$db_field = ado_field_name($res, $i);
	$$db_field = $res->Fields[$db_field]->Value;
}

ado_free_result( $res );
ado_close( $link );
?>