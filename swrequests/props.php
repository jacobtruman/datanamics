<?php

//ini_set ('display_errors', 'on');

$dsn = 'D:/inetpub/support/support_web/fpdb/propinfo.mdb';

//include ('vargen.php');

$link = ado_connect( $dsn );

$sql = "SELECT prop, name, htype FROM prop ORDER BY name";
//echo $sql;
$res = $link->Execute($sql);

$fields = ado_list_fields($res);

$j = 0;
if (isset($res)){
	while (!$res->EOF){

		for ($i = 0; $i < count($fields); $i++){
			$$fields[$i] = $res->Fields[$fields[$i]]->Value;
		}
		$props[$j] = $prop;
		$pnames[$j] = $name." ".$htype;
		$j++;
	$res->MoveNext();
	}

	ado_free_result( $res );
	ado_close( $link );
}

for ($i = 0; $i < count($props); $i++){
	echo "<option value='".$pnames[$i]."'>".$pnames[$i]."</option>\n";
}

?>
<script>

function populate(){
	document.formname.pname.selectedIndex = document.formname.property.options[document.formname.property.selectedIndex].index;
}

</script>