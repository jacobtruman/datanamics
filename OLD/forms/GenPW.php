<HEAD>
	<Title>
		Profitable Password Generation
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body OnLoad='document.GenPW.ctyho.focus();'>
<BR>
<BR>
<BR>
<BR>
<form name='GenPW' method='POST' action='<?php echo $_SERVER['PHP_SELF'];?>'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					Profitable Password Generation
				</b>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right' style='font-weight:bold;'>
				CTYHO:
			</td>
			<td>
				<input type='text' name='ctyho' class='formfield' style='text-transform: uppercase;'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Generate' class='formbutton'>
			</td>
			<td>
				<input type='reset' name='Reset' class='formbutton'>
			</td>
		</tr>
	</table>
<?php

$prop = strtoupper($_POST['ctyho']);

if ($prop != ''){
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
		echo "<BR>
		<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
			<tr>
				<td align='right' style='font-weight:bold;' align='50%'>
					Profitable Password:
				</td>
				<td style='color:#FF0000;' align='50%'>
					".$proppw."
				</td>
			</tr>
		</table>\n";
}
?>
</form>
</body>