<?php
$postKeys = array_keys($_POST);
for ($i = 0; $i < count($postKeys); $i++){
	$dbFields .= $postKeys[$i].", ";
	
	$_POST[$postKeys[$i]] = str_replace("'", "&#39;", $_POST[$postKeys[$i]]);
	$_POST[$postKeys[$i]] = str_replace('"', "&#34;", $_POST[$postKeys[$i]]);
	$_POST[$postKeys[$i]] = stripslashes($_POST[$postKeys[$i]]);
	
	$dbVals .= "'".$_POST[$postKeys[$i]]."', ";
}
$dbVals = rtrim($dbVals, ', ');
$dbFields = rtrim($dbFields, ', ');

$sql = "INSERT INTO ".$table." (".$dbFields.") VALUES (".$dbVals.")";
//echo $sql;
$res = $link->Execute($sql);
?>