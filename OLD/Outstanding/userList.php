<?php

//ini_set ('display_errors', 'on');
//include ('vargen.php');

$link = ado_connect();

$sql = "SELECT * FROM [Users] WHERE Active = 'True' ORDER BY UName";
//echo $sql;
$res = $link->Execute($sql);

$fields = ado_list_fields($res);

$j = 0;
if (isset($res)){
	while (!$res->EOF){

		for ($i = 0; $i < count($fields); $i++){
			$$fields[$i] = $res->Fields[$fields[$i]]->Value;
		}
		$names[$j] = $UName;
		$j++;
	$res->MoveNext();
	}

	ado_free_result( $res );
	ado_close( $link );
}

?>