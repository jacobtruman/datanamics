<?php
//ini_set ('display_errors', 'on');

$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
include ($root."/support_web/propentry/login/session.php");
$db_name = "propinfo";
$tbl_name = "admin";

function update_success(){
	include("aprofile.php");
	echo "<center><font color='#0000FF'><b>Profile Updated Successfully</b></font></center>";
}

$postkeys = array_keys($_POST);

for ($i = 0; $i < count($_POST); $i++){
	if (($postkeys[$i] != 'a_pswd') && ($postkeys[$i] != 'n_pswd') && ($postkeys[$i] != 'c_pswd')){
		$query .= $postkeys[$i]." = '".$_POST[$postkeys[$i]]."', ";
	}
}


if(!empty($_POST['n_pswd'])){
	if($_POST['n_pswd'] != $_POST['c_pswd']){
		include("aprofile.php");
		echo "<center><font color='#FF0000'><b>New Password and Confirm Password do not match.</b></font></center>";
	}else{
		$query .= "a_pswd = '".base64_encode($_POST['n_pswd'])."'";
		$link = ado_connect( $dsn , $dtype);
		$sql = "UPDATE ".$tbl_name." set ".$query." WHERE a_lgn = '".$_POST['a_lgn']."'";
		$res = $link->Execute($sql);
		ado_free_result( $res );
		ado_close( $link );
		update_success($_POST);
	}
}elseif(!empty($query)){
	$query = rtrim($query, ', ');
	$link = ado_connect( $dsn , $dtype);
	$sql = "UPDATE ".$tbl_name." set ".$query." WHERE a_lgn = '".$_POST['a_lgn']."'";
	$res = $link->Execute($sql);
	ado_free_result( $res );
	ado_close( $link );
	update_success();
}
//echo $sql;
?>