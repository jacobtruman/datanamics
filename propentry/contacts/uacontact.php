<?php
//ini_set ('display_errors', 'on');

$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
$db_name = "propinfo";
$tbl_name = "contactlist";

function update_success(){
	include("acontact.php");
	echo "<center><font color='#0000FF'><b>Contact Updated Successfully</b></font></center>";
}
function update_delete(){
	include("acontact.php");
	echo "<center><font color='#0000FF'><b>Contact Deleted Successfully</b></font></center>";
}

$postkeys = array_keys($_POST);
for ($i = 0; $i < count($_POST); $i++){
	if (!empty($_POST)){
		$query .= $postkeys[$i]." = '".$_POST[$postkeys[$i]]."', ";
	}
}

if($_POST['Delete'] == 'Yes'){
		$link = ado_connect( $dsn , $dtype);
		$sql = "DELETE FROM ".$tbl_name." WHERE Name = '".$_POST['Name']."'";
		$res = $link->Execute($sql);
		ado_free_result( $res );
		ado_close( $link );
		update_delete($_POST);
}elseif(!empty($query)){
	$query = rtrim($query, ', ');
	$link = ado_connect( $dsn , $dtype);
	$sql = "UPDATE ".$tbl_name." set ".$query." WHERE Name = '".$_POST['Name']."'";
	$res = $link->Execute($sql);
	ado_free_result( $res );
	ado_close( $link );
	update_success();
}
//echo $sql;
?>