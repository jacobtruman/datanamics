<?php
$ptype = 'Equipment Summary Entry';
$root = 'D:/inetpub/support';
$loc = $_POST['loc'];

$newLoc = explode("/", $loc);

$dest_dir = $root.'/support_web/1stlevel/';

for ($i = 0; $i < count($newLoc); $i++){
	$checkDir = $dest_dir;
	for($j = 0; $j < $i; $j++){
		$checkDir .= $newLoc[$j]."/";
	}
	$checkDir .= $newLoc[$i]."/";

	if (!file_exists($checkDir)){
		mkdir($checkDir);
	}
}

mkdir($checkDir.'Pictures/');

$files = array('map.php', 'Pictures/NetworkMap.png', 'Pictures/NetworkMap.vsd');
$checkOldDir = $root.'/support_web/TEMPLATE/'; 

	for($f = 0; $f < count($files); $f++){
		if (!file_exists($checkDir.$files[$f])){
			copy($checkOldDir.$files[$f], $checkDir.$files[$f]);
		}
	}

include ($root.'/support_web/propentry/header.php');

$_POST['prop'] = strtoupper($_POST['prop']);
$prop = $_POST['prop'];
$pdb = $_POST['dbname'];

function getBGColor($x){
	if($x %2 == 0){
		return '#C0C0C0';
	}else{
		return '#FFFFFF';
	}
}
$c = 0;
?>
<HR>
<center>
	<font face='Verdana' size='2'>
		<?php echo $ptype;?>
	</font>
</center>
<FORM METHOD='POST' action='cindex.php'>
<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
<BLOCKQUOTE>
<TABLE align='center' width='60%'>
	<TR>
		<TD ALIGN='right' width='50%'>
			Property Code
		</TD>
		<TD width='50%'>
			<?php
			if ($prop == ''){
				echo "<INPUT NAME='prop' SIZE='25' CLASS='formfield'>";
			}else{
				echo "<INPUT TYPE='hidden' NAME='prop' VALUE='".$prop."'>";
				echo '<B>'.$prop.'</B>';
			}
			?>
		</TD>
	</TR>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			IP Scope
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='ipscope' SIZE='15' VALUE='172.27.172.' CLASS='formfield'> <b>Ex: 172.27.172.</b>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			IP Scope Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<INPUT NAME='scopeb' SIZE='1' VALUE='5' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Router Type
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='rtrtype' class='formfield'>
				<option value='na' selected>na</option>
				<option value='1700'>1700</option>
				<option value='1841'>1841</option>
				<option value='2600'>2600</option>
				<option value='3700'>3700</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Cisco Switches
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='ncsw' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Cisco Switches Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<INPUT NAME='ncswbport' SIZE='5' VALUE='23230' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Paradyne Switches
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='npsw' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Paradyne Switches Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='npswbport' SIZE='5' VALUE='23231' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Paradyne Switches Interface
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='npswint' class='formfield'>
				<option value='web' selected>web</option>
				<option value='telnet'>telnet</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Zyxel Switches
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='nzsw' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Zyxel Switches Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='nzswbport' SIZE='5' VALUE='23231' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Zyxel Switches Interface
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='nzint' class='formfield'>
				<option value='web' selected>web</option>
				<option value='telnet'>telnet</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Cisco 1100 WAPs
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='n1100' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Cisco 1100 WAPs Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='n1100bport' SIZE='5' VALUE='23231' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Cisco 1100 WAPs Interface
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='n1100int' class='formfield'>
				<option value='web' selected>web</option>
				<option value='telnet'>telnet</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Cisco 1200 WAPs
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='n1200' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Cisco 1200 WAPs Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='n1200bport' SIZE='5' VALUE='23231' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Cisco 1200 WAPs Interface
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='n1200int' class='formfield'>
				<option value='web' selected>web</option>
				<option value='telnet'>telnet</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Paradyne WAPs
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='npw' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Paradyne WAPs Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='npwbport' SIZE='5' VALUE='23231' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Paradyne WAPs Interface
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='npwint' class='formfield'>
				<option value='web' selected>web</option>
				<option value='telnet'>telnet</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Number of Netopia WAPs
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='ntw' SIZE='2' VALUE='0' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Netopia WAPs Redir Port Beginning
		</td>
		<td bgcolor='<?php echo getBGColor($c);?>'>
			<INPUT NAME='ntwbport' SIZE='5' VALUE='23231' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' bgcolor='<?php echo getBGColor($c);?>'>
			Netopia WAPs Interface
		</td>
		<td bgcolor='<?php echo getBGColor($c++);?>'>
			<select name='ntint' class='formfield'>
				<option value='telnet' selected>telnet</option>
				<option value='web'>web</option>
			</select>
		</td>
	</tr>
	<tr>	
		<td colspan='2' align='center'>
			<BR>
			<input type='submit' value='Submit' class='formbutton'>
			<input type='reset' value='Reset' class='formbutton'>
		</td>
	</tr>
</form>
</table>
</BLOCKQUOTE>
<HR>
</BODY>
<?php
	for ($i = 0; $i < 4; $i++){
		if (($prop[$i] == 'A') || ($prop[$i] == 'B') || ($prop[$i] == 'C')){
			$temp[$i] = 'r';
		}else if (($prop[$i] == 'D') || ($prop[$i] == 'E') || ($prop[$i] == 'F')){
			$temp[$i] = 'o';
		}else if (($prop[0] == 'G') || ($prop[$i] == 'H') || ($prop[$i] == 'I')){
			$temp[$i] = 'f';
		}else if (($prop[$i] == 'J') || ($prop[$i] == 'K') || ($prop[$i] == 'L')){
			$temp[$i] = 'i';
		}else if (($prop[$i] == 'M') || ($prop[$i] == 'N') || ($prop[$i] == 'O')){
			$temp[$i] = 't';
		}else if (($prop[$i] == 'P') || ($prop[$i] == 'Q') || ($prop[$i] == 'R') || ($prop[$i] == 'S')){
			$temp[$i] = 'a';
		}else if (($prop[$i] == 'T') || ($prop[$i] == 'U') || ($prop[$i] == 'V')){
			$temp[$i] = 'b';
		}else if (($prop[$i] == 'W') || ($prop[$i] == 'X') || ($prop[$i] == 'Y') || ($prop[$i] == 'Z')){
			$temp[$i] = 'l';
		}
	}
		$proppw = 'zinck'.$temp[0].$temp[1].$temp[2].$temp[3];

if (isset($prop)){
	if ((strtolower($_SESSION['a_lgn']) != 'nbirdsall') && (strtolower($_SESSION['a_lgn']) != 'mstewart')){
		include("mail.php");
	}

$link = ado_connect( $dsn );

$table = 'prop';
include ("insDB.php");

	if (isset($pdb)){
		$tbdsn = $root.'/support_web/fpdb/HISA Properties.mdb';
		$dtype = 'Access';
		$tblink = ado_connect( $tbdsn, $dtype );

		$tbsql = 'CREATE TABLE '.$pdb.' (Room text (50), "Device Name" text (50), "Device IP" text (15), Port text (10), VLAN text (10), ctype text (6), cport text (10))';
		$tbres = $tblink->Execute($tbsql);

		ado_free_result( $tbres );
		ado_close( $tblink );
	}

ado_free_result( $res );
ado_close( $link );
}
?>