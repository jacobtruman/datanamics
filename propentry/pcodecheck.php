<?php
//ini_set ('display_errors', 'on');
$ptype = $_POST['ptype'];
$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
$prop = strtoupper($_POST['prop']);

	$linkchck = ado_connect( $dsnchck );

	$sqlchck = "SELECT prop FROM prop where prop = '".$prop."'";
//	echo $sqlchck."<BR>";
	$reschck = $linkchck->Execute($sqlchck);
	if (($reschck->EOF) && ($reschck->BOF)){
		//	pcode is not there";
		include("eindex.php");
	}else{
		//	echo "pcode is there";
		$error = "The new Property Code you have chosen already exists, please choose another.";
		include("pindex.php");
	}
	ado_free_result( $reschck );
	ado_close( $linkchck );

?>