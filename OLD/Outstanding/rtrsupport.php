<?php

//ini_set ('display_errors', 'on');

$dsn2 = 'D:/inetpub/support/support_web/fpdb/propinfo.mdb';

//include ('vargen.php');

$link2 = ado_connect( $dsn2 );

$sql2 = "SELECT rtrsup, inst FROM prop WHERE prop = '".$property."'";
//echo $sql2;
$res2 = $link2->Execute($sql2);

$fields2 = ado_list_fields($res2);

	for ($i = 0; $i < count($fields2); $i++){
		$$fields2[$i] = $res2->Fields[$fields2[$i]]->Value;
	}
	if(($rtrsup != "Yes") && ($inst == "Datanamics")){
		echo "*";
	}elseif(($rtrsup == "Yes") && ($inst != "Datanamics")){
		echo "**";
	}elseif(($rtrsup != "Yes") && ($inst != "Datanamics")){
		echo "***";
	}

ado_free_result( $res2 );
ado_close( $link2 );

?>