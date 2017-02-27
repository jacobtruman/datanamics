<?php
//ini_set ('display_errors', 'on');
$ptype = $_POST['ptype'];
$root = 'D:/inetpub/support';
include_once($root.'/support_web/propentry/update/header.php');
$prop = strtoupper($_POST['prop']);
$oldprop = $_POST['oldprop'];

if($prop != $oldprop){
	$linkchck = ado_connect( $dsnchck );

	$sqlchck = "SELECT prop FROM prop where prop = '".$prop."'";
	//echo $sql."<BR>";
	$reschck = $linkchck->Execute($sqlchck);
	if (($reschck->EOF) && ($reschck->BOF)){
		//	pcode is not there";
		include("pcoderes.php");
	}else{
		//	echo "pcode is there";
		$error = "The new Property Code you have chosen already exists, please choose another.";
		$prop = $oldprop;
		include("update_propertycode.php");
	}
	ado_free_result( $reschck );
	ado_close( $linkchck );
}else{
	$prop = $oldprop;
	include("update_propertycode.php");
}
?>