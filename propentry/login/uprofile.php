<?php
//ini_set ('display_errors', 'on');

$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
include ($root."/support_web/propentry/login/session.php");
$db_name = "propinfo";
$tbl_name = "admin";

function update_success(){
	$_SESSION['a_pswd'] = base64_encode($_POST['a_pswd']);
	$_SESSION['a_lname'] = $_POST['a_lname'];
	$_SESSION['a_fname'] = $_POST['a_fname'];
	include("profile.php");
	echo "<center><font color='#0000FF'><b>Profile Updated Successfully</b></font></center>";
}

function create_success(){
	echo "<center><font color='#0000FF'><b>Profile Created Successfully</b></font></center>";
	echo '<script>setTimeout("window.close()", 1000);</script>';
}

$postkeys = array_keys($_POST);

for ($i = 0; $i < count($_POST); $i++){
	if ($_POST[$postkeys[$i]] != $_SESSION[$postkeys[$i]]){
		if (($postkeys[$i] != 'a_pswd') && ($postkeys[$i] != 'n_pswd') && ($postkeys[$i] != 'c_pswd')){
			$query .= $postkeys[$i]." = '".$_POST[$postkeys[$i]]."', ";
		}
	}
}

if ($_POST['ptype'] == 'create'){
	$sql = "INSERT INTO [admin] (a_lgn, a_pswd, a_lname, a_fname, a_perm, a_status, a_email) VALUES ('".$_POST['a_lgn']."', '".base64_encode($_POST['n_pswd'])."', '".$_POST['a_lname']."', '".$_POST['a_fname']."', '".$_POST['a_perm']."', '".$_POST['a_status']."', '".$_POST['a_email']."')";
	$link = ado_connect( $dsn , $dtype);
	$res = $link->Execute($sql);
	ado_free_result( $res );
	ado_close( $link );
	create_success();
}else{
	if(!empty($_POST['n_pswd'])){
		if(base64_encode($_POST['a_pswd']) != $_SESSION['a_pswd']){
			include("profile.php");
			echo "<center><font color='#FF0000'><b>Invalid Password</b></font></center>";
		}elseif($_POST['n_pswd'] != $_POST['c_pswd']){
			include("profile.php");
			echo "<center><font color='#FF0000'><b>New Password and Confirm Password do not match.</b></font></center>";
		}else{
			$query .= "a_pswd = '".base64_encode($_POST['n_pswd'])."'";
			$link = ado_connect( $dsn , $dtype);
			$sql = "UPDATE ".$tbl_name." set ".$query." WHERE a_lgn = '".$_SESSION['a_lgn']."'";
			$res = $link->Execute($sql);
			ado_free_result( $res );
			ado_close( $link );
			update_success($_POST);
		}
	}elseif(!empty($query)){
		$query = rtrim($query, ', ');
		$link = ado_connect( $dsn , $dtype);
		$sql = "UPDATE ".$tbl_name." set ".$query." WHERE a_lgn = '".$_SESSION['a_lgn']."'";
		$res = $link->Execute($sql);
		ado_free_result( $res );
		ado_close( $link );
		update_success();
	}
}
//echo $sql;
?>