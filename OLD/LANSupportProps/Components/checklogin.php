<?php
//ini_set ('display_errors', 'on');
session_start();

$root = 'D:/inetpub/support';
include_once($root.'/support_web/LANSupportProps/components/dbcon.php');
$db_name = "LANSupportProps";
$tbl_name = "admin";
$count = 0;
$_SESSION['myusername'] = $_POST['myusername'];

$link = ado_connect( $dsn , $dtype);

$sql="SELECT * FROM ".$tbl_name." WHERE a_lgn = '".$_POST['myusername']."' AND a_pswd = '".base64_encode($_POST['mypassword'])."'";
//echo $sql;
$res = $link->Execute($sql);

if (!isset($res)){
}else{
	while (!$res->EOF){
		$count++;
		$a_lgn = $res->Fields['a_lgn']->Value;
		$a_pswd = $res->Fields['a_pswd']->Value;
		$a_lname = $res->Fields['a_lname']->Value;
		$a_fname = $res->Fields['a_fname']->Value;
		$a_perm = $res->Fields['a_perm']->Value;
		$a_email = $res->Fields['a_email']->Value;
		$a_log = $res->Fields['a_log']->Value;
	$res->MoveNext();
	}
ado_free_result( $res );
ado_close( $link );
}

if($count==1){
	session_register("myusername");

if ($_POST['nextpage'] == ''){
	$url = '/support_web/LANSupportProps/components/ResultsAdmin.php';
}else{
	$url = $_POST['nextpage'];
}
	$_SESSION['a_lgn'] = $a_lgn;
	$_SESSION['a_pswd'] = $a_pswd;
	$_SESSION['a_lname'] = $a_lname;
	$_SESSION['a_fname'] = $a_fname;
	$_SESSION['a_perm'] = $a_perm;
	$_SESSION['a_email'] = $a_email;
	$_SESSION['a_log'] = $a_log;
	
$link = ado_connect( $dsn , $dtype);

$sql="UPDATE admin SET a_log = '".date('m/d/Y H:i')."' WHERE a_lgn = '".$_SESSION['a_lgn']."'";
//echo $sql;
$res = $link->Execute($sql);

ado_free_result( $res );
ado_close( $link );
	
    echo "<script type='text/javascript'>location.href='".$url."';</script>";
}else{
	include ("login.php");
	echo "<center><font color='#FF0000'><b>Invalid Username or Password</b></font></center>";
	session_destroy();
}
?>