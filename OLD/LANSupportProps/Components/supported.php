<?php
//ini_set ('display_errors', 'on');
$ptype = 'Contact Information';
$root = 'D:/inetpub/support';
include($root.'/support_web/LANSupportProps/components/vargen.php');
include($root.'/support_web/LANSupportProps/components/header.php');

$link = ado_connect( $dsn );

$sql = "SELECT * FROM support where (prop = '".$prop."') AND (supported = '".$supp."')";
//echo $sql;
$res = $link->Execute($sql);

$parr = array('appequip',  'description');
$tarr = array('Application/Equipment', 'Description');

$parrcnt = count($parr);
$j = 0;
$i = 0;
if (isset($res)){
	while (!$res->EOF){
		while ($i < $parrcnt){
			$varr[$j][$i] = $res->Fields[$parr[$i]]->Value;
		$i++;
		}
		$j++;
		$i = 0;
	$res->MoveNext();
	}
}

$jcnt = $j;

ado_free_result( $res );
ado_close( $link );

?>

<br>
<table border='0' width='100%'>
	<tr>
		<?php
		for ($i = 0; $i < count($tarr); $i++){
			if ($i / 2 == 0){
				$width = '30%';
			}else{
				$width = '70%';
			}
			echo "<td align='center' width='".$width."'>
				<font size='3' face='Verdana'>
					<B>
						".$tarr[$i]."
					</B>
				</font>
			</td>\n";
		}
		?>
	</tr>
<?php

for ($j = 0; $j < $jcnt; $j++){
	$i = 0;
	echo "<tr>\n";
	while ($i < $parrcnt){
		if (!empty($varr[$j][$i])){
				echo "<td valign='top'>
					<font size='2' face='Verdana' color='#000000'>\n";
						if ($i / 2 == 0){
							echo "<b>".nl2br($varr[$j][$i])."</b>\n";
						}else{
							echo nl2br($varr[$j][$i]);
						}
					echo "</font>
				</td>\n";
		}
		$i++;
	}
	echo "</tr><tr><td><br></td></tr>\n";
}

?>
</table>
</td>
</tr>
<tr>
<td valign='bottom'>
<?php
include($root.'/support_web/LANSupportProps/components/footer.php');
?>
</td>
</tr>
</table>
</table>
</body>