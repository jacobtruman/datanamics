<?php
$ptype = 'Property Update Search Page';
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");
include($root.'/support_web/propentry/update/psearchheader.php');


$db = $root.'/support_web/fpdb/propinfo.mdb';
$conn = new COM('ADODB.Connection');
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");

if ($shtype == ''){
	$shtype = '..';
}
if ($name == ''){
	$name = '..';
}
if ($phone == ''){
	$phone = '..';
}

if ($name == '*'){
	$sql = "SELECT * FROM prop ORDER BY htype, name";
	$res = $conn->Execute($sql);
}else{
	if ($phone != '..'){
		$sql = "SELECT * FROM prop WHERE prop = (select prop from contact where (phone = '".$phone."')) ORDER BY htype, name";
		
		$i = 0;
		while (!$res->EOF){
			$i++;
			$res->MoveNext();
		}
		if ($i == 0){
			if (($shtype != '..') && ($name != '..')){
				$sql = "SELECT * FROM prop WHERE (htype = '".$shtype."') AND (name LIKE '%".$name."%') ORDER BY htype, name";
				$res = $conn->Execute($sql);
			}else{
				$sql = "SELECT * FROM prop WHERE (htype = '".$shtype."') OR (name LIKE '%".$name."%') ORDER BY htype, name";
				$res = $conn->Execute($sql);
			}
		}else{
		$res = $conn->Execute($sql);
		}
	}else if (($shtype != '..') && ($name != '..')){
		$sql = "SELECT * FROM prop WHERE (htype = '".$shtype."') AND (name LIKE '%".$name."%') ORDER BY htype, name";
		$res = $conn->Execute($sql);
	}else{
		$sql = "SELECT * FROM prop WHERE (htype = '".$shtype."') OR (name LIKE '%".$name."%') ORDER BY htype, name";
		$res = $conn->Execute($sql);
	}
}
?>
<BR>
<BR>
<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='#C0C0C0' align='center'>
      <thead>
		<tr>
          <td><b>CTYHO</b></td>
		  <td><b>Type</b></td>
          <td><b>Name</b></td>
		  <td><b>General Info</b></td>
		  <td><b>Contact Info</b></td>
		  <td><b>IP Info</b></td>
		  <td><b>Overview</b></td>
		  <td><b>Supported</b></td>
        </tr>
      </thead>
<tbody>
<form name='blank' method='POST'>
</form>
<?php
$i = 0;
if (!isset($res)){
}else{
	while (!$res->EOF){
		$prop = $res->Fields['prop']->Value;
		$htype = $res->Fields['htype']->Value;
		$name = $res->Fields['name']->Value;
		$active = $res->Fields['active']->Value;
		
		echo "<tr><td>\n";
		echo $prop;
		echo "</td><td>\n";
		echo $htype;
		echo "</td><td>\n";
		echo $name;

		echo "</td><td>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/propentry/update/update_property.php' target='myotherform'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='General Info' class='textbutton' style='color: #A000BD'>\n";
		echo "</form>\n";

		echo "</td><td>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/propentry/update/update_contact.php' target='myotherform'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Contact Info' class='textbutton' style='color: #FF0000'>\n";
		echo "</form>\n";

		echo "</td><td>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/propentry/update/iindex.php' target='myotherform'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='IP Info' class='textbutton' style='color: #0000FF'>\n";
		echo "</form>\n";

		echo "</td><td>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/propentry/update/update_overview.php' target='myotherform'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Overview' class='textbutton' style='color: green'>\n";
		echo "</form>\n";

		echo "</td><td align='center'>\n";
		echo $active."\n";

	$i++;
	$res->MoveNext();
	}
$res = null;
$conn->Close();
}
echo '</tbody></table><BR>';
echo "<center>".$i." Record(s) Found</center></table></table></body>";
include("footer.php");
?>
<div id='datanam' style='position:absolute; left:150px; bottom:15px; z-index:0;'>
	<iframe src='about:blank' name='myotherform' width='1000' height='500' frameborder='0' border='0' STYLE='background-color:#FFFFFF'></iframe>
</div>
<!-- Created by Jacob Truman -->