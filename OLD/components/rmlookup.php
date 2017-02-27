<HEAD>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/ows.php'>
</HEAD>
<?php
//ini_set ('display_errors', 'on');
$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');
if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$prop = $vars['prop'];
	$lvl = $vars['lvl'];
	$dbname = $vars['dbname'];
	$eqpswd = $vars['eqpswd'];
	$eqlgn = $vars['eqlgn'];
	$redir = $vars['redir'];
}else if (isset($_POST['prop'])){
	$prop = $_POST['prop'];
	$lvl = $_POST['lvl'];
	$dbname = $_POST['dbname'];
	$eqpswd = $_POST['eqpswd'];
	$eqlgn = $_POST['eqlgn'];
	$redir = $_POST['redir'];
}

$dsn = $root.'/support_web/fpdb/HISA Properties.mdb';
$dtype = 'Access';
$link = ado_connect( $dsn , $dtype );

if (isset($_POST['room'])){
	$room = $_POST['room'];
}else{
	$room = '';
}
if ($room == ''){
	$sql = "SELECT * FROM ".$dbname." where (Room LIKE '%..%')";
}else{
	$sql = "SELECT * FROM ".$dbname." where (Room LIKE '%".$room."%')";
}
//echo $sql;
$res = $link->Execute($sql);
?>
	<form METHOD='POST' ACTION='rmlookup.php'>
	<input type='hidden' name='prop' value='<?php echo $prop;?>'>
	<input type='hidden' name='dbname' value='<?php echo $dbname;?>'>
	<input type='hidden' name='lvl' value='<?php echo $lvl;?>'>
	<input type='hidden' name='eqlgn' value='<?php echo $eqlgn;?>'>
	<input type='hidden' name='eqpswd' value='<?php echo $eqpswd;?>'>
	<input type='hidden' name='redir' value='<?php echo $redir;?>'>
		<table width='90%' border='0' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
			<tr>
				<td>
					<font color='#FF0000'>
						<b>
							Room Lookup
						</b>
					</font>
				</td>
			</tr>
			<tr>
				<td>
					<b>
						Room
					</b>
					<input TYPE='TEXT' NAME='room' VALUE='<?php echo $room;?>' size='20' class='formfield'>
					<input TYPE='Submit' value='Search' class='formbutton'>
					<input TYPE='Reset' class='formbutton'>
				</td>
			</tr>
		</table>
	</form>
<?php

if (!isset($res)){
}else{
$fieldcnt = $res->Fields->Count;
	echo "<table width='90%' border='0' cellpadding='1' cellspacing='2' bordercolor='C0C0C0' align='center' bgcolor='C0C0C0'>";
	echo "<thead>";
	echo "<tr>";
	for($i = 0; $i < $fieldcnt; $i++){
		$fieldn[$i] = $res->Fields[$i]->Name;
			if (($fieldn[$i] == 'cport') || ($fieldn[$i] == 'ctype') || ($fieldn[$i] == 'gtway')){
			}else{
				echo "<td bgcolor='FFFFFF' align='center'>";
				echo "<b>";
				echo $fieldn[$i];
				echo "</b>";
				echo "</td>";
			}
	}
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while (!$res->EOF){
		echo '<tr>';
		for($i = 0; $i < $fieldcnt; $i++){
			$fieldn[$i] = $res->Fields[$i]->Name;
			$fieldv[$i] = $res->Fields[$fieldn[$i]]->Value;
			if ($fieldn[$i] == 'cport'){
				$cport = $fieldv[$i];
			}
			if ($fieldn[$i] == 'ctype'){
				$ctype = $fieldv[$i];
			}
			if (($redir != '') && ($fieldn[$i] != 'gtway')){
				$gtway = $redir;
			}else{
				$gtway = $fieldv[$i];
			}
		}
		for($i = 0; $i < $fieldcnt; $i++){
			$fieldn[$i] = $res->Fields[$i]->Name;
			$fieldv[$i] = $res->Fields[$fieldn[$i]]->Value;
			$fieldname = str_replace(" ", "", $fieldn[$i]);
			$$fieldname = $fieldv[$i];
			if (($fieldn[$i] == 'cport') || ($fieldn[$i] == 'ctype') || ($fieldn[$i] == 'gtway')){
			}else{
				if ((strstr($fieldn[$i], 'IP')) && (isset($ctype))){
					if ($ctype == 'web'){
						if (!empty($cport)){
							if ($lvl == '1'){
								$lnkstr = $fieldv[$i];
							}else{
								$lnkstr = '<a href="http://'.$eqlgn.':'.$eqpswd.'@'.$gtway.':'.$cport.'" target="_blank">'.$fieldv[$i].'</a>';
							}
						}else{
							if ($lvl == '1'){
								$lnkstr = '<a href="/support_web/ping.php?theaddr='.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a>';
							}else{
								$lnkstr = '<a href="http://'.$eqlgn.':'.$eqpswd.'@'.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a>';
							}
						}
					}else if ($ctype == 'sweb'){
						if (!empty($cport)){
							if ($lvl == '1'){
								$lnkstr = $fieldv[$i];
							}else{
								$lnkstr = '<a href="https://'.$eqlgn.':'.$eqpswd.'@'.$gtway.':'.$cport.'" target="_blank">'.$fieldv[$i].'</a>';
							}
						}else{
							if ($lvl == '1'){
								$lnkstr = '<a href="/support_web/ping.php?theaddr='.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a>';
							}else{
								$lnkstr = '<a href="https://'.$eqlgn.':'.$eqpswd.'@'.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a>';
							}
						}
					}else if ($ctype == 'telnet'){
						if (!empty($cport)){
							if ($lvl == '1'){
								//$lnkstr = '<td bgcolor='FFFFFF'><a href="/support_web/forms/telnet/telnet.php?ip='.$gtway.'&rport='.$cport.'&lgn='.$eqlgn.'&pswd='.$eqpswd.'&command=sho int status" target="_blank">'.$fieldv[$i].'</a></td>';
								$lnkstr = "<input type='hidden' name='ip' value='".$gtway."'>";
								$lnkstr .= "<input type='hidden' name='rport' value='".$cport."'>";
								$lnkstr .= "<input type='hidden' name='lgn' value='".$eqlgn."'>";
								$lnkstr .= "<input type='hidden' name='pswd' value='".$eqpswd."'>";
								$lnkstr .= "<input type='hidden' name='command' value='sho int status'>";
								$lnkstr .= "<input type='submit' name='submit' value='".$fieldv[$i]."' class='textbutton' style='color: blue'>";
							}else{
								$lnkstr = '<a href="telnet:'.$gtway.' '.$cport.'">'.$fieldv[$i].'</a>';
							}
						}else{
							if ($lvl == '1'){
								$lnkstr = '<a href="/support_web/ping.php?theaddr='.$fieldv[$i].'" target="_blank">'.$fieldv[$i].'</a>';
							}else{
								$lnkstr = '<a href="telnet:'.$fieldv[$i].'">'.$fieldv[$i].'</a>';
							}
						}
					}
					echo "<form name='1sttelnet".$room."' action='/support_web/forms/telnet/telnet.php' target='_blank' method='POST'>";
					echo "<td bgcolor='FFFFFF' align='center'>".$lnkstr."</td>";
					echo '</form>';
					
				}else{
					if ($lvl == '1'){
						if (strstr($fieldv[$i], 'href')){
							$lnkstr = '..';
						}else{
							$lnkstr = $fieldv[$i];
						}
					}else{
						$lnkstr = $fieldv[$i];
					}
					if (!isset($lnkstr)){
						$lnkstr = "na";
					}
					echo "<form name='1sttelnet".$room."' action='/support_web/forms/telnet/telnet.php' target='_blank' method='POST'>";
					echo "<td bgcolor='FFFFFF' align='center'>".$lnkstr."</td>";
					echo '</form>';
				}
			}
		}
		echo "</tr>\n";
		$res->MoveNext();
	}
ado_free_result( $res );
ado_close( $link );
echo '<tbody>';
echo '</table>';
}

?>