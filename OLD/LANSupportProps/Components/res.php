<?php
$page = $_POST['page'];
$ptype = $page.' Updated Successfully';
$root = 'D:/inetpub/support';
include ($root.'/support_web/LANSupportProps/components/headeradmin.php');
$prop = $_POST['prop'];
$log = $_POST['log'];
$noChFlag = 1;

$fields = explode(',', $_POST['list']);
$titles = explode(',', $_POST['titles']);
$j = 0;
$$log .= "<font color=#858585><b><<< Fields Updated: ".$_POST['mdate']." >>></b></font><BR>";
for($i = 0; $i < count($fields); $i++){
	if (($_POST["OLD".$fields[$i]] != $_POST[$fields[$i]]) && ($fields[$i] != "mdate") && ($fields[$i] != "ulog")){
		$noChFlag = 0;
		$chfields[$j] = $fields[$i];
		$chvals[$j] = $_POST[$fields[$i]];

		$chvals[$j] = str_replace("'", "&#39;", $chvals[$j]);
		$chvals[$j] = str_replace('"', "&#34;", $chvals[$j]);
		$chvals[$j] = stripslashes($chvals[$j]);

		$chtitles[$j] = $titles[$i];
		$choldvals[$j] = $_POST["OLD".$fields[$i]];
		$choldvals[$j] = str_replace("'", "&#39;", $choldvals[$j]);
		$choldvals[$j] = str_replace('"', "&#34;", $choldvals[$j]);
		$choldvals[$j] = stripslashes($choldvals[$j]);
		
		if (($chfields[$j] != $log) && ($chfields[$j] != 'mdate')){
			if ($choldvals[$j] == ''){
				$$log .= "<b>".$chtitles[$j]."</b> added <font color=#0000FF><b>".$chvals[$j]."</b></font><BR>";
			}else if($chvals[$j] == ''){
				$$log .= "<b>".$chtitles[$j]."</b> removed <font color=#FF0000><b>".$choldvals[$j]."</b></font><BR>";
			}else{
				$$log .= "<b>".$chtitles[$j]."</b> was changed from <font color=#FF0000><b>".$choldvals[$j]."</b></font> to <font color=#0000FF><b>".$chvals[$j]."</b></font><BR>";
			}
			$ustr .= "[".$chfields[$j]."] = '".$chvals[$j]."', ";
			$j++;
		}
	}
}

$$log .= "<font color=#858585><b><<< Last Updated By: ".$_SESSION['a_lgn']." >>></b></font><BR><BR>";
if ((strtolower($_SESSION['a_lgn']) != 'jtruman') && (strtolower($_SESSION['a_lgn']) != 'mstewart')){
	include("mail.php");
}
$$log .= $_POST["OLD".$log];
$$log = str_replace("'", "&#39;", $$log);
$$log = str_replace('"', "&#34;", $$log);
$$log = stripslashes($$log);

if (strpos($ustr, $log)){
	$ustr = rtrim($ustr, ', ');
}else{
	$ustr .= "[".$log."] = '".$$log."'";
}
if ($noChFlag == 0){
	$link = ado_connect( $dsn );

	$sql = "UPDATE ".$_POST['table']." SET ".$ustr." WHERE [prop] = '".$prop."'";

//	echo $sql;
	$res = $link->Execute($sql);

	ado_free_result( $res );
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