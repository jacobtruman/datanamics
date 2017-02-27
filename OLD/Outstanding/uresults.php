<?php
//ini_set ('display_errors', 'on');
$page = $_POST['page'];
$ptype = $page.' Updated Successfully';
include ('header.php');

echo "<pre>";
//print_r(array_keys($_POST));
echo "</pre>";

$keys = array_keys($_POST);

for($i = 0; $i < count($_POST); $i++){
	$dbfields .= $keys[$i].", ";
	$svalue = str_replace("'", "&#39;", $_POST[$keys[$i]]);
	$svalue = str_replace('"', "&#34;", $svalue);
	$svalue = stripslashes($svalue);
	$qstr .= $keys[$i]." = '".$svalue."', ";
}

$qstr = rtrim($qstr, ', ');

$link = ado_connect( $dsn );

$sql = "UPDATE OustandingIssues SET ".$qstr." WHERE ticket = '".$_POST['ticket']."'";

//echo $sql;
$res = $link->Execute($sql);

ado_free_result( $res );
ado_close( $link );

?>
<center>
	<input type='submit' name='submit' value='Click here to close the window' class='textbutton' style='color: #5f8ac5' onClick='window.close()'>
</center>
<HR>
</BODY>
<script>
setTimeout("window.close()", 1000);
</script>