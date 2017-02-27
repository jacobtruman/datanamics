<?php
//ini_set ('display_errors', 'on');
$page = $_POST['page'];
$ptype = $page.' Updated Successfully';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/update/header.php');
$prop = $_POST['prop'];
$log = $_POST['log'];
$noChFlag = 1;

$fields = explode(',', $_POST['list']);
$titles = explode(',', $_POST['titles']);
$j = 0;

$$log .= "<font color=#858585><b><<< Fields Updated: ".$_POST['mdate']." >>></b></font><BR>";
for($i = 0; $i < count($fields); $i++){
	if (($_POST["OLD".$fields[$i]] != $_POST[$fields[$i]]) && ($fields[$i] != "mdate") && ($fields[$i] != "ulog") && ($fields[$i] != "nulog")){
		if($fields[$i] == 'loc'){
			$newLoc = explode("/", $_POST[$fields[$i]]);
			$dest_dir = $root.'/support_web/1stlevel/';
			$oldDir = $dest_dir.$_POST["OLD".$fields[$i]]."/";

			for ($j = 0; $j < count($newLoc); $j++){
				$checkDir = $dest_dir;
				for($k = 0; $k < $j; $k++){
					$checkDir .= $newLoc[$k]."/";
				}
				$checkDir .= $newLoc[$j]."/";

				if(file_exists($checkDir) && ($j != 0)){
					printError($titles[$i], $_POST[$fields[$i]]);
					$errFlag = 1;
				}else{
					mkdir($checkDir);
				}
			}
			if($errFlag != 1){
				mkdir($checkDir.'Pictures/');
				moveFiles($checkDir, $oldDir);
			}else{
				$_POST[$fields[$i]] = $_POST["OLD".$fields[$i]];
			}
		}else{
			$errFlag = 0;
		}
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
			if($errFlag == 1){
				$$log .= "<b>".$chtitles[$j]."</b> attempted change from <font color=#FF0000><b>".$choldvals[$j]."</b></font> to <font color=#0000FF><b>".$chvals[$j]."</b></font> failed - directory already exists<BR>";
			}elseif ($choldvals[$j] == ''){
				$$log .= "<b>".$chtitles[$j]."</b> added <font color=#0000FF><b>".$chvals[$j]."</b></font><BR>";
			}elseif($chvals[$j] == ''){
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
if ((strtolower($_SESSION['a_lgn']) != 'jtruman') && (strtolower($_SESSION['a_lgn']) != 'mstewart') && (strtolower($_SESSION['a_lgn']) != 'nbirdsall') && ($noChFlag == 0)){
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

function printError($x, $y){
	echo "<center>".$x." <font color='#FF0000'>was not updated, </font>".$y." <font color='#FF0000'>already exists and was not changed</font><BR><BR></center>\n";
}

function moveFiles($x, $y){
	$files = array('/map.php', '/Pictures/NetworkMap.png', '/Pictures/NetworkMap.vsd');
	for($i = 0; $i < count($files); $i++){
		if (!file_exists($x.$files[$i])){
			copy($y.$files[$i], $x.$files[$i]);
			unlink($y.$files[$i]);
		}
	}
	rmdir($y."/Pictures/");
	rmdir($y);
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