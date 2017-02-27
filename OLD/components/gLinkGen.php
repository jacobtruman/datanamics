<?php
if (!isset($gtype)){
	$gtype = $_POST['gtype'];
}
	if ($bypassed != 'Yes'){
		if(strstr($gtype, 'Nomadix')){
			$cStr = "http://".$lgn.":".$pswd."@".$gateway;
			$cStr2 = "http://".$lgn2.":".$pswd2."@".$gateway2;
			$cStr3 = "http://".$lgn3.":".$pswd3."@".$gateway3;
			$cStr4 = "http://".$lgn4.":".$pswd4."@".$gateway4;
		}elseif(strstr($gtype, 'Solution IP')){
			$cStr = "https://".$lgn.":".$pswd."@".$gateway."/admin/";
			$cStr2 = "https://".$lgn2.":".$pswd2."@".$gateway2."/admin/";
			$cStr3 = "https://".$lgn3.":".$pswd3."@".$gateway3."/admin/";
			$cStr4 = "https://".$lgn4.":".$pswd4."@".$gateway4."/admin/";
		}elseif(strstr($gtype, 'IP3')){
			$cStr = "https://".$gateway."/login.cgi?username=".$lgn."&password=".$pswd;
			$cStr2 = "https://".$gateway2."/login.cgi?username=".$lgn2."&password=".$pswd2;
			$cStr3 = "https://".$gateway3."/login.cgi?username=".$lgn3."&password=".$pswd3;
			$cStr4 = "https://".$gateway4."/login.cgi?username=".$lgn4."&password=".$pswd4;
		}elseif(strstr($gtype, 'BBSM')){
			$cStr = "http://".$lgn.":".$pswd."@".$gateway.":9488/www";
			$cStr2 = "http://".$lgn2.":".$pswd2."@".$gateway2.":9488/www";
			$cStr3 = "http://".$lgn3.":".$pswd3."@".$gateway3.":9488/www";
			$cStr4 = "http://".$lgn4.":".$pswd4."@".$gateway4.":9488/www";
		}else{
			$cStr = "http://".$gateway;
			$cStr2 = "http://".$gateway2;
			$cStr3 = "http://".$gateway3;
			$cStr4 = "http://".$gateway4;
		}
		}else{
		$cStr = $dummylink;
	}
?>