<?php
// Module to check if associated ticket in Service Desk is open or closed

$sdlink = ado_connect( "AHD" , "SQL" );
$sdsql = "SELECT status FROM call_req WHERE ref_num = '".$ticket."'";
//echo $sdsql;

$sdres = $sdlink->Execute($sdsql);

$tStatusc = $sdres->Fields['status']->Value;

	$sdlink2 = ado_connect( "AHD" , "SQL" );
	$sdsql2 = "SELECT sym FROM cr_stat WHERE code = '".$tStatusc."'";
	//echo $sdsql2;

	$sdres2 = $sdlink2->Execute($sdsql2);

	$tStatus = $sdres2->Fields['sym']->Value;
	echo $tStatus;

	ado_free_result( $sdres2 );
	ado_close( $sdlink2 );

ado_free_result( $sdres );
ado_close( $sdlink );

?>