<?php
if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$prop = $vars['prop'];
	if (isset($vars['lvl'])){
		$lvl = $vars['lvl'];
	}else{
	}
}else if (isset($_POST['prop'])){
	$prop = $_POST['prop'];
	if (isset($_POST['lvl'])){
		$lvl = $_POST['lvl'];
	}else{
	}
}else{
}

if ($lvl == '1'){
	$ptype = '1st Level Network Map';
}elseif ($lvl == '2'){
	$ptype = '2nd Level Network Map';
}
$root = 'D:/inetpub/support';
include($root.'/support_web/Components/thetop.php');

if ($lvl == '1'){
	$lev = '1stlevel';
}elseif ($lvl == '2'){
	$lev = '2ndLevel';
}

echo '<BR>';
if ($dbname != ''){
	if ($lvl == '1'){
		$db = $root.'/support_web/fpdb/HISA Properties.mdb';
		$conn = new COM('ADODB.Connection');
		$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");
		$l1db = '0';

		$sql = "SELECT * FROM ".$dbname." where (Room LIKE '%..%')";
		$res = $conn->Execute($sql);

		$fieldcnt = $res->Fields->Count;

		for($i = 0; $i < $fieldcnt; $i++){
		$fieldn[$i] = $res->Fields[$i]->Name;
			if (($fieldn[$i] == 'VLAN') || (isset($ctype)) && (!isset($cport))){
				$l1db = '1';
			}
		}
		if ($l1db == '1'){
   			include($root.'/support_web/components/rmlookup.php');
		}else{
		}
	}else if ($lvl == '2'){
		include($root.'/support_web/components/rmlookup.php');
	}
}else{
}

echo '<center>';
include($root.'/support_web/Components/png.php');
include($root.'/support_web/'.$lev.'/'.$loc.'/map.php');
echo '</center>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td valign="bottom">';
include($root.'/support_web/Components/footer.php');
echo '</td>';
echo '</tr>';
echo '</table>';
echo '</body>';
?>
<!-- Created/Modified by Jacob Truman -->

