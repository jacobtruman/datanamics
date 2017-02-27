<?php
$ptype = 'ISP List';
$root = 'D:/inetpub/support';
?>
<HEAD>
<Title>
    <?php echo $ptype?>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/ows.css'>
</HEAD>
<script>
function refresh()
{
    window.location.reload( false );
}
</script>
<body marginwidth='0' marginheight='0' scroll='no' vlink='#0000FF' alink='#0000FF'>
<TABLE border='0' width='100%'>
	<TR>
		<TD ALIGN='right' width='25%'>
			ISP Name
		</TD>
		<TD width='25%'>
			<?php
			$link = ado_connect( $dsn );
			$sql = "SELECT DISTINCT isp_name FROM isp ORDER BY isp_name";
			$res = $link->Execute($sql);

			if (!isset($res)){
			}else{
				echo "<select size='1' NAME='isp_name' CLASS='formfield'>";
					echo "<option value='".$isp_namecurr."' class='formfield' selected>".$isp_namecurr." (Current ISP)</option>";
				if ($shtype != ''){
					echo "<option value=''></option>";
				}
				while (!$res->EOF){
					$isp_name = $res->Fields['isp_name']->Value;
					echo "<option value='".$isp_name."' class='formfield'>".$isp_name."</option>";
					$res->MoveNext();
				}
				echo '</select>';
			}
			ado_free_result( $res );
			ado_close( $link );
			?>
		</TD>
		<TD>
			<input type='button' onclick='refresh()' value='Refresh List' name='refresh' class='formbutton'>
		</TD>
	</tr>
	<TR>
		<TD ALIGN='right'>
			Circuit #
		</TD>
		<TD>
			<INPUT NAME='isp_circuit' VALUE='<?php echo $isp_circuit;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD>
			<form name='addisp' action='/support_web/propentry/isp/index.php' target='_blank'>
				<input type='submit' value='Add ISP' name='submit' class='formbutton'>
		</TD>
	</TR>
	</form>
</table>
