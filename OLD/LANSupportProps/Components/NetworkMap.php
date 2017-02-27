<?php
//ini_set ('display_errors', 'on');
$prop = $_POST['prop'];
$ptype = 'Network Map';
$root = 'D:/inetpub/support';
$loc = $_POST['loc'];

include($root.'/support_web/LANSupportProps/components/header.php');
include($root.'/support_web/LANSupportProps/components/thetop.php');

echo '<center>';
include($root.'/support_web/LANSupportProps/components/png.php');
$map = $root.'/support_web/LANSupportProps/'.$loc.'/map.php';
if (!file_exists($map)){
	$map = $root.'/support_web/forms/map.php';
}
include($map);
echo '</center>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td valign="bottom">';
include($root.'/support_web/LANSupportProps/components/mapfooter.php');
include($root.'/support_web/LANSupportProps/components/floatmenu.php');
echo '</td>';
echo '</tr>';
echo '</table>';
echo '</body>';
?>
<!-- Created/Modified by Jacob Truman, Matthew "Stewart" -->

