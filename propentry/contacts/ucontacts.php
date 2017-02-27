<?php
//ini_set ('display_errors', 'on');

$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
$db_name = "propinfo";
$tbl_name = "contactlist";

function create_success(){
	echo "<center><font color='#0000FF'><b>Contact Added Successfully</b></font></center>";
	echo '<script>setTimeout("window.close()", 1000);</script>';
}

$postkeys = array_keys($_POST);

if ($_POST['ptype'] == 'create'){
	$sql = "INSERT INTO [contactlist] (Name, Mainphone, Extension, Cellphone, Contacttype, ContactStatus) VALUES ('".$_POST['a_contact']."', '".$_POST['a_cmphone']."', '".$_POST['a_cext']."', '".$_POST['a_ccphone']."', '".$_POST['a_ctype']."', '".$_POST['a_status']."')";
	$link = ado_connect( $dsn , $dtype);
	$res = $link->Execute($sql);
	ado_free_result( $res );
	ado_close( $link );
	create_success();
}else{
	if(!empty($query)){
		$query = rtrim($query, ', ');
		$link = ado_connect( $dsn , $dtype);
		$sql = "UPDATE ".$tbl_name." set ".$query." WHERE a_contact = '".$_SESSION['a_contact']."'";
		$res = $link->Execute($sql);
		ado_free_result( $res );
		ado_close( $link );
		update_success();
	}
}
//echo $sql;
?>