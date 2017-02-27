<?php
include("vargen.php");
$ptype = 'Update Successful';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/update/header.php');

$link = ado_connect( $dsn );

$sql = "UPDATE ".$_POST['table']." SET up2dnotes = '".$mdate." - ".$up2dnotes."' WHERE [prop] = '".$prop."'";

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