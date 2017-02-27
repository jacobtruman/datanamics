<?php
session_name("SupportWeb");
session_start();
$sesExp = false;

if(!isset($_SESSION['time'])) {
	$_SESSION['time'] = time();
	$sesExp = true;
} else {
	$timeDif = time() - $_SESSION['time'];
	echo $timeDif;
	if($timeDif >= 6) {
		session_destroy();
		$_SESSION = array();
		$_SESSION['time'] = time();
		$sesExp = true;
	} else {
		$_SESSION['time'] = time();
	}
}

if(isset($_REQUEST['login'])) {
	$sql = "SELECT * FROM admin where (a_lgn = '{$_REQUEST['login']}')";
	$res = $db->query($sql);

	$record = $res->fetch_assoc();

	$a_lgn = $record['a_lgn'];
	$a_pswd = $record['a_pswd'];

	if(isset($_REQUEST['password']) && $_REQUEST['password'] === $a_pswd) {
		$sesExp = false;
	} else {
		$sesExp = true;
	}
}