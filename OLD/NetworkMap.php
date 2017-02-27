<?php
$ptype = '2nd Level Network Map';
$root = dirname(__FILE__);
require_once('components/thetop.php');

if($_REQUEST['lvl'] == '1') {
	$lev = '1stLevel';
} elseif($_REQUEST['lvl'] == '2') {
	$lev = '2ndLevel';
}

echo '<br /><center><br />';

require_once("{$root}/support_web/{$lev}/{$_REQUEST['loc']}/map.php");
require_once("{$root}/support_web/components/png.php");

echo "</center>
</td>
</tr>
<tr>
	<td valign='bottom'>";
		include("{$root}/support_web/components/footer.php");
echo "</td>
</tr>
</table>
</body>";

