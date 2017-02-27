<?php
$ptype = 'Contact Information';
$root = 'D:/inetpub/support';
include($root.'/support_web/LANSupportProps/components/header.php');

$link = ado_connect( $dsn );

$sql = "SELECT * FROM contact where (prop = '".$prop."')";
$res = $link->Execute($sql);

$parr = array('contact', 'cphone',  'email', 'staddr', 'csz', 'cell', 'phone', 'fax', 'contact2', 'email2', 'cphone2', 'cnotes');
$tarr = array('Property Contact', 'Contact Phone', 'Contact E-mail', 'Address', 'City, State Zip', 'Contact Cell', 'Front Desk', 'Fax', 'Second Contact', 'Second Contact E-mail', 'Second Contact Phone', 'Notes');

$parrcnt = count($parr);
$i = 0;
$prop = $res->Fields['prop']->Value;
while ($i < $parrcnt){
	$$parr[$i] = $res->Fields["$parr[$i]"]->Value;
$i++;
}

ado_free_result( $res );
ado_close( $link );

?>

<br>
<table border='0' width='100%'>
<?php
$i = 0;

while ($i < $parrcnt){

if ($$parr[$i] != '' && $$parr[$i] != ' '){
	echo "<tr>
		<td width='18%'>
			<font size='2' face='Verdana'>
				<B>\n";
					if ($parr[$i] != 'csz'){
						$tarr[$i].":";
					}
				echo "</B>
			</font>
		</td>
		<td width='82%'>
			<font size='2' face='Verdana' color='#000000'>\n";
	if ($parr[$i] == 'email' OR $parr[$i] == 'email2'){
		echo "<a href='mailto:".$$parr[$i]."'>".$$parr[$i].'</a>';
	}else if (($parr[$i] == 'contact2') || ($parr[$i] == 'cnotes')){
		echo $$parr[$i];
	}else{
		echo $$parr[$i];
	}
			echo "</font>
		</td>
	</tr>\n";
}
$i++;
}

?>
</table>
</td>
</tr>
<tr>
<td align='center' valign='top'>
<iframe src='/support_web/maps/gmap.php?prop=<?php echo $prop;?>&htype=<?php echo $htype;?>&pname=<?php echo $name;?>' width='550' height='450' border='0' frameborder='0'></iframe>
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