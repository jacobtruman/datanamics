<?php
$ptype = 'Property Code Updated Successfully';
$root = 'D:/inetpub/support';
include_once($root.'/support_web/propentry/update/header.php');
$prop = strtoupper($_POST['prop']);
$oldprop = $_POST['oldprop'];

if($prop != $oldprop){
	$tables = array('contact', 'ipscope', 'overview', 'prop', 'equipment');
	$link = ado_connect( $dsn );

	for($i = 0; $i < count($tables); $i++){
		$sql = "UPDATE ".$tables[$i]." SET prop = '".$prop."' WHERE [prop] = '".$oldprop."'";
		//echo $sql."<BR>";
		$res = $link->Execute($sql);
		ado_free_result( $res );
	}
	ado_close( $link );
}

?>
<center>
	<input type='submit' name='submit' value='Click here to close the window' class='textbutton' style='color: #5f8ac5' onClick='window.close()'>
</center>
<HR>
</BODY>
<script>
setTimeout("window.close()", 1000);
</script>